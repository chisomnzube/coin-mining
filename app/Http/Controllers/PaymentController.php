<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Coin;
use App\Http\Controllers\src\Blockchain;
use App\Mail\OrderPlaced;
use App\Mail\ReferralMail;
use App\Payment;
use App\Referral;
use App\ReferralAccount;
use App\ReferralTransaction;
use App\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;

class PaymentController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        $type = $request->input('type');
        if ($type == 'lite') 
            {
                $min = 20;
                $max = 70590;
            }elseif($type == 'pro')
                {
                    $min = 250;
                    $max = 20000;
                }elseif($type == 'max')
                    {
                        $min = 1520;
                        $max = 4550;
                    }else
                        {
                            $min = 3100;
                            $max = 9500;
                        }


        return view('payment')->with([
                    'min' => $min,
                    'max' => $max,
                    'package' => $type,
                ]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function create(Request $request)
    {
        $request->validate([
            'amount' => 'required|integer',
            'email' => 'required|email',
            'package' => 'required',
        ]);

        $package = $request->input('package');
        $amt = $request->input('amount');

        if ($package == 'lite') 
            {
                if (!in_array($amt, range(20,70590))) 
                    {
                        return redirect()->route('landingpage')->with('error_message', 'Entered Invalid Amount!');
                    }
            }elseif($package == 'pro')
                {
                    if (!in_array($amt, range(250,20000))) 
                        {
                            return redirect()->route('landingpage')->with('error_message', 'Entered Invalid Amount!');
                        }
                }elseif($package == 'max')
                    {
                        if (!in_array($amt, range(1520,4550))) 
                            {
                                return redirect()->route('landingpage')->with('error_message', 'Entered Invalid Amount!');
                            }
                    }else
                        {
                            if (!in_array($amt, range(3100,9999999999999))) 
                                {
                                    return redirect()->route('landingpage')->with('error_message', 'Entered Invalid Amount!');
                                }
                        }

        //dd('hey dude');
        $amount = $request->input('amount');
        $email = auth()->user()->email;
        $scurrency = "USD";
        $rcurrency = "BTC";

        $checkprice = file_get_contents('https://min-api.cryptocompare.com/data/price?fsym=BTC&tsyms=USD');
        $checkprice = json_decode($checkprice, true);

        $maths = $amount / $checkprice['USD'];
        $price = round($maths, 6);

                               
        return view('payment-create')->with([
            'amount' => $amount,  
            'rcurrency' =>  $rcurrency,
            'price' => $price,
            'package' => $package, 
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
            'USDamount' => 'required',
            'BTCamount' => 'required',
            'package' => 'required',
        ]);

        $package = $request->input('package');
        $amt = $request->input('USDamount');

        if ($package == 'lite') 
            {
                if (!in_array($amt, range(20,70590))) 
                    {
                        return redirect()->route('landingpage')->with('error_message', 'Entered Invalid Amount!');
                    }
            }elseif($package == 'pro')
                {
                    if (!in_array($amt, range(250,20000))) 
                        {
                            return redirect()->route('landingpage')->with('error_message', 'Entered Invalid Amount!');
                        }
                }elseif($package == 'max')
                    {
                        if (!in_array($amt, range(1520,4550))) 
                            {
                                return redirect()->route('landingpage')->with('error_message', 'Entered Invalid Amount!');
                            }
                    }else
                        {
                            if (!in_array($amt, range(3100,9999999999999))) 
                                {
                                    return redirect()->route('landingpage')->with('error_message', 'Entered Invalid Amount!');
                                }
                        }


        //add data to database
        $order = Payment::create([
            'payer_id' => auth()->user()->id,
            'payer_email' => auth()->user()->email,
            'payer_name' => auth()->user()->name,
            'USDamount' => $request->input('USDamount'),
            'BTCamount' => $request->input('BTCamount'),
            'package' => $package,
            'status' => "pending",
        ]);

        //for the referral bonus
        $check = Referral::where('referred', auth()->user()->id)->first();
        if ($check) 
            {
                if ($check->referral !== 'Admin' && $check->referral !== NULL) 
                    {
                        ReferralTransaction::create([
                            'order_id' => $order->id,
                            'user_id' => $check->referral,
                        ]);
                        //dd($check->referral);
                        //send email to referral
                        Mail::send(new ReferralMail($check->referral));

                    }
            }

        //send email to customer
        Mail::send(new OrderPlaced($order));

        return redirect()->route('payment.confirmation')->with([
            'success_message'=> 'Thank You '.auth()->user()->name.', for investing in Coin Mining we will confirm your transaction and send your Returns on Investment in due time',
            'received_email' => auth()->user()->email,
            'received_amount' => $request->input('BTCamount'),
        ]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function paymentwallet(Request $request)
    {
        $request->validate([
            'USDamount' => 'required',
            'BTCamount' => 'required',
            'package' => 'required',
        ]);

        $package = $request->input('package');
        $amt = $request->input('USDamount');

        if ($amt > auth()->user()->balance) 
            {
                return back()->with('error_message', 'Insufficient fund');
            }

        if ($package == 'lite') 
            {
                if (!in_array($amt, range(20,70590))) 
                    {
                        return redirect()->route('landingpage')->with('error_message', 'Entered Invalid Amount!');
                    }
            }elseif($package == 'pro')
                {
                    if (!in_array($amt, range(250,20000))) 
                        {
                            return redirect()->route('landingpage')->with('error_message', 'Entered Invalid Amount!');
                        }
                }elseif($package == 'max')
                    {
                        if (!in_array($amt, range(1520,4550))) 
                            {
                                return redirect()->route('landingpage')->with('error_message', 'Entered Invalid Amount!');
                            }
                    }else
                        {
                            if (!in_array($amt, range(3100,9999999999999))) 
                                {
                                    return redirect()->route('landingpage')->with('error_message', 'Entered Invalid Amount!');
                                }
                        }


        //add data to database
        $order = Payment::create([
            'payer_id' => auth()->user()->id,
            'payer_email' => auth()->user()->email,
            'payer_name' => auth()->user()->name,
            'USDamount' => $request->input('USDamount'),
            'BTCamount' => $request->input('BTCamount'),
            'package' => $package,
            'status' => "pending",
        ]);

        $remain = auth()->user()->balance - $amt;

        User::where('id', auth()->user()->id)->update([
            'balance' => $remain,
        ]);

        //for the referral bonus
        $check = Referral::where('referred', auth()->user()->id)->first();
        if ($check) 
            {
                if ($check->referral !== 'Admin' && $check->referral !== NULL) 
                    {
                        ReferralTransaction::create([
                            'order_id' => $order->id,
                            'user_id' => $check->referral,
                        ]);
                        //send email to referral
                        Mail::send(new ReferralMail($check->referral));

                    }
            }

        //send email to customer
        Mail::send(new OrderPlaced($order));

        return redirect()->route('payment.confirmation')->with([
            'success_message'=> 'Thank You '.auth()->user()->name.', for investing in Coin Mining we will confirm your transaction and send your Returns on Investment in due time',
            'received_email' => auth()->user()->email,
            'received_amount' => $request->input('BTCamount'),
        ]);
    }

    /**
     * Display the specified resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function confirmation()
    {
        if (!session()->has('success_message')) {
            return redirect('/');
        }

        return view('payment-confirmation')->with([
            'success_message'=> session()->get('success_message'),
            'received_email' => session()->get('received_email'),
            'received_amount' => session()->get('received_amount'),
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
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
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
