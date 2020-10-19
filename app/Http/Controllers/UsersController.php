<?php

namespace App\Http\Controllers;

use App\CashOut;
use App\ClientPayout;
use App\Deposit;
use App\Mail\DepositMail;
use App\Mail\WithdrawalMail;
use App\Payment;
use App\Payout;
use App\ReferralAccount;
use App\ReferralTransaction;
use App\User;
use App\WalletAddress;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;

class UsersController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('user-index');
    }

    public function transaction()
    {
        $payments = Payment::where('payer_id', auth()->user()->id)->orderBy('id', 'desc')->get();

        return view('user-transaction')->with([
            'payments' => $payments,
        ]);
    }

    public function withdrawal()
    {
        $dues = Payment::where('payer_id', auth()->user()->id)->where('status', 'success')->where('balanced', 0)->where('expired', 1)->get();
        //dd($dues);
        foreach ($dues as $due) 
            {
                $package = $due->package;
                if ($package == 'lite') 
                   {
                       $rate = 0.105;
                   }elseif($package == 'pro')
                        {
                            $rate = 0.35;
                        }elseif($package == 'max')
                            {
                                $rate = 0.15;
                            }else
                                {
                                    $rate = 0.96;
                                }

                $interest = $rate * $due->USDamount;

                $total = auth()->user()->balance + $due->USDamount + $interest;
                User::where('id', auth()->user()->id)->update([
                    'balance' => $total,
                ]);

                Payment::where('id', $due->id)->update([
                    'balanced' => 1,
                ]);
            }
        

        
        
        $withdrawls = ClientPayout::where('client_id', auth()->user()->id)->get();
        

        return view('user-withdrawal')->with([
            'withdrawls' => $withdrawls,
        ]);
    }

    public function deposit()
    {
        $paymentBalance = Deposit::where('user_id', auth()->user()->id)->where('status', 'success')->where('remit', 0)->get()->sum('USDamount');
        //dd($paymentBalance);

        $total = auth()->user()->balance + $paymentBalance;
        User::where('id', auth()->user()->id)->update([
            'balance' => $total,
        ]);

        $payments = Deposit::where('user_id', auth()->user()->id)->where('status', 'success')->where('remit', 0)->update([
                'remit' => 1,
            ]);
        
        $deposits = Deposit::where('user_id', auth()->user()->id)->get();

        return view('user-deposit')->with([
            'deposits' => $deposits,
        ]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function depositcreate(Request $request)
    {
        $request->validate([
            'amount' => 'required|integer',
        ]);

        //dd('hey dude');
        $amount = $request->input('amount');
        $scurrency = "USD";
        $rcurrency = "BTC";

        $checkprice = file_get_contents('https://min-api.cryptocompare.com/data/price?fsym=BTC&tsyms=USD');
        $checkprice = json_decode($checkprice, true);

        $maths = $amount / $checkprice['USD'];
        $price = round($maths, 6);

                               
        return view('deposit-create')->with([
            'amount' => $amount,  
            'rcurrency' =>  $rcurrency,
            'price' => $price,
        ]);


    }
    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function depositstore(Request $request)
    {
        $request->validate([
            'USDamount' => 'required',
            'BTCamount' => 'required',
        ]);

        Deposit::create([
            'user_id' => auth()->user()->id,
            'user_email' => auth()->user()->email,
            'BTCamount' => $request->input('BTCamount'),
            'USDamount' => $request->input('USDamount'),
            'status' => 'pending',
        ]);

        $name = auth()->user()->name;
        $email = auth()->user()->email;
        $amount = $request->input('USDamount');

        //send email to user
        Mail::send(new DepositMail($name, $email, $amount));

        return redirect()->route('deposit.confirmation')->with([
            'success_message'=> 'Thank You '.auth()->user()->name.', for depositing in Coin Mining we will confirm your transaction and it will reflect in your balance',
            'received_email' => auth()->user()->email,
            'received_amount' => $request->input('BTCamount'),
        ]);
    }

    /**
     * Display the specified resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function depositconfirmation()
    {
        if (!session()->has('success_message')) {
            return redirect('/');
        }

        return view('deposit-confirmation')->with([
            'success_message'=> session()->get('success_message'),
            'received_email' => session()->get('received_email'),
            'received_amount' => session()->get('received_amount'),
        ]);
    }


    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function referral()
    {
        //this is to credit referral
        $referrals = ReferralTransaction::where('user_id', auth()->user()->id)->where('status', 0)->get();
        if ($referrals->count() > 0) 
            {
                foreach ($referrals as $referral) 
                    {
                        $order = Payment::find($referral->order_id);
                        if ($order->status == 'success') 
                            {
                                $percentage = 0.07 * $order->BTCamount;
                                $referralID = auth()->user()->id;

                                $referralUser = ReferralAccount::where('user_id', $referralID)->first();
                                $total = $referralUser->amount + $percentage;

                                ReferralAccount::where('user_id', $referralID)->update([
                                    'amount' => $total,
                                ]);

                                ReferralTransaction::where('order_id', $order->id)->update([
                                    'status' => 1,
                                ]);
                            }
                    }
            }
        
        //to get list of the referral transactions
        $myreferrals = ReferralTransaction::where('user_id', auth()->user()->id)->where('status', 1)->get();
        $balance = ReferralAccount::where('user_id', auth()->user()->id)->first();

        return view('user-referral')->with([
            'myreferrals' => $myreferrals,
            'balance' => $balance,
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $user = Payout::where('user_id', auth()->user()->id)->first(); 
        //dd($user);
        return view('user-payout')->with([
                    'user' => $user,
                ]);
    }

    public function walletindex()
    {
        $user = WalletAddress::where('user_id', auth()->user()->id)->first(); 
        //dd($user);
        return view('user-wallet')->with([
                    'user' => $user,
                ]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $request->validate([
            'amount' => 'required',
        ]);

        $amount = $request->input('amount');
        if ($amount > auth()->user()->balance) 
            {
                return back()->with('error_message', 'Insufficient fund');
            }

        $payout = Payout::where('user_id', auth()->user()->id)->first();
        if (!$payout) 
            {
                return back()->with('error_message', 'You have not filled your payout details click the <a href="/my-payout">link</a>');
            }

        $remain = auth()->user()->balance - $amount;

        User::where('id', auth()->user()->id)->update([
            'balance' => $remain,
        ]);

        
        ClientPayout::create([
            'client_id' => auth()->user()->id,
            'client_email' => auth()->user()->email,
            'client_wallet' => $payout->address,
            'amount' => $amount,
        ]);

        $name = auth()->user()->name;
        $email = auth()->user()->email;
        //send mail
        Mail::send(new WithdrawalMail($name, $email, $amount));

        return back()->with('success_message', 'Withdrawal successful, you will receive your money ASAP');
    }

    public function payoutStore(Request $request)
    {
        $request->validate([
            'address' => 'required|string',
        ]);

        Payout::create([
            'user_id' => auth()->user()->id,
            'user_email' => auth()->user()->email,
            'address' => $request->input('address'),
        ]);

        return back()->with([
            'success_message' => 'Address submitted Successfully',
        ]);
    }

    public function walletStore(Request $request)
    {
        $request->validate([
            'bitcoin' => 'required|string',
        ]);

        WalletAddress::create([
            'user_id' => auth()->user()->id,
            'user_email' => auth()->user()->email,
            'bitcoin' => $request->input('bitcoin'),
            'litecoin' => $request->input('litecoin'),
            'ethereum' => $request->input('ethereum'),
            'dash' => $request->input('dash'),
        ]);

        return back()->with([
            'success_message' => 'Wallet Address submitted Successfully',
        ]);
    }

    public function payoutUpdate(Request $request)
    {
        $request->validate([
            'address' => 'required|string',
        ]);

        Payout::where('user_id', auth()->user()->id)->update([
            'address' => $request->input('address'),
        ]);

        return back()->with([
            'success_message' => 'Address updated Successfully',
        ]);
    }

    public function walletUpdate(Request $request)
    {
        $request->validate([
            'bitcoin' => 'required|string',
        ]);

        WalletAddress::where('user_id', auth()->user()->id)->update([
            'bitcoin' => $request->input('bitcoin'),
            'litecoin' => $request->input('litecoin'),
            'ethereum' => $request->input('ethereum'),
            'dash' => $request->input('dash'),
        ]);

        return back()->with([
            'success_message' => 'Wallet Address updated Successfully',
        ]);
    }

    /**
     * Display the specified resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function cashout()
    {
        $check = ReferralAccount::where('user_id', auth()->user()->id)->first();

        if ($check->amount > 0) 
            {
                $checkpayout = Payout::where('user_id', auth()->user()->id)->first();
                if (!$checkpayout) 
                    {
                        return redirect()->route('user.payout')->with('success_message', 'Please update your payout detail before you can cash out!');
                    }

                CashOut::create([
                    'user_id' => auth()->user()->id,
                    'user_email' => auth()->user()->email,
                    'user_wallet' => $checkpayout->address,
                    'amount' => $check->amount,
                ]);

                //this is to reduce the referral cash to zero
                ReferralAccount::where('user_id', auth()->user()->id)->update([
                    'amount' => 0,
                ]);

                return back()->with([
                            'success_message' => 'We have received your payout request, You will receive your referral bonus ASAP',
                        ]);
            }

        return back()->with([
            'error_message' => 'Insufficient Balance!',
        ]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request)
    {
        $request->validate([
            'name' => 'string|required',
            'password' => 'sometimes|nullable|string|min:6|confirmed',
        ]);

        $user = auth()->user();
         $input = $request->except('password', 'password_confirmation');

         if (! $request->filled('password')) 
             {
                $user->fill($input)->save();

                return back()->with('success_message', 'Profile Updated Successfuly!');
             }

        $user->password = bcrypt($request->password);
        $user->fill($input)->save();      

        return back()->with([
            'success_message' => 'Profile (and Password) Updated Successfuly!',
        ]);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
