<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Coin;
use App\Http\Controllers\src\Blockchain;
use App\Payment;
//use Blockchain\Blockchain;
use Illuminate\Http\Request;

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
                $max = 499;
            }elseif($type == 'pro')
                {
                    $min = 500;
                    $max = 999;
                }else
                    {
                        $min = 1000;
                        $max = 9999999999;
                    }

        require "Coin.php";

        $coin = new \CoinPaymentsAPI();
        $coin->Setup("e56759262Dfc97a2e95859088f591b05b4015559EDFD42a4d1f2bac995f597Af","a6fd8f0e50cf6e8efc4550917ab47814636a37a1a62e87225fe110da7df801eb");

        $basicInfo = $coin->GetBasicProfile();
        //dd($basicInfo);
        $username = $basicInfo['result']['public_name'];
        //dd($username);

        return view('payment')->with([
                    'username' => $username,
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
                if (!in_array($amt, range(20,499))) 
                    {
                        return redirect()->route('landingpage')->with('error_message', 'Entered Invalid Amount!');
                    }
            }elseif($package == 'pro')
                {
                    if (!in_array($amt, range(500,999))) 
                        {
                            return redirect()->route('landingpage')->with('error_message', 'Entered Invalid Amount!');
                        }
                }else
                    {
                        if (!in_array($amt, range(1000,9999999999))) 
                            {
                                return redirect()->route('landingpage')->with('error_message', 'Entered Invalid Amount!');
                            }
                    }
        //dd('hey dude');
        $amount = $request->input('amount');
        $email = auth()->user()->email;
        $scurrency = "USD";
        $rcurrency = "BTC";

        $drequest = [
            'amount' => $amount,
            'currency1' => $scurrency,
            'currency2' => $rcurrency,
            'buyer_email' => $email,
            'item' => "Donation to Onthrone",
            'address' => "",
            'ipn_url' => "http://crypto.com/webhook.php"
        ];

        require "Coin.php";

        $coin = new \CoinPaymentsAPI();
        $coin->Setup("e56759262Dfc97a2e95859088f591b05b4015559EDFD42a4d1f2bac995f597Af","a6fd8f0e50cf6e8efc4550917ab47814636a37a1a62e87225fe110da7df801eb");

        $basicInfo = $coin->GetBasicProfile();
        //dd($basicInfo);
        $username = $basicInfo['result']['public_name'];

        $result = $coin->CreateTransaction($drequest);

        //dd($result);
        if ($result['error'] == "ok") 
            {
                //add data to database
                Payment::create([
                    'payer_email' => $email,
                    'from_currency' => $scurrency,
                    'entered_amount' => $amount,
                    'to_currency' => $rcurrency,
                    'amount' => $result['result']['amount'],
                    'gateway_id' => $result['result']['txn_id'],
                    'gateway_url' => $result['result']['status_url'],
                    'status' => "Initialized",
                ]);
                
                return view('payment-create')->with([
                            'rcurrency' =>  $rcurrency,
                            'result' => $result,
                            'username' => $username,
                        ]);
            }else
                {
                    dd('Error: '.$result['error']);
                }

    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function webhook(Request $request)
    {
        require "Coin.php";

        $coin = new \CoinPaymentsAPI();
        $coin->Setup("e56759262Dfc97a2e95859088f591b05b4015559EDFD42a4d1f2bac995f597Af","a6fd8f0e50cf6e8efc4550917ab47814636a37a1a62e87225fe110da7df801eb");

        $merchant_id = "6316e17801494e2e4416ccd71d21c32d";
        $ipn_secret = "chisomnzube";
        $debug_email = "chisomnzube@gmail.com";

        $txn_id = $_POST['txn_id'];
        $payment = Payment::where('gateway_id', $txn_id)->first();
        $order_currency = $payment->to_currency; //btc
        $order_total = $payment->amount; //btc

        function edie($error_msg)
            {
                global $debug_email;
                dd("Error: ".$error_msg);
            }

        if (!isset($_POST['ipn_mode']) || $_POST['ipn_mode'] != 'hmac') 
            {
                edie('IPN Mode is not HMAC');
            }

        if (!isset($_SERVER['HTTP_HMAC']) || empty($_SERVER['HTTP_HMAC'])) 
            {
                edie('No HMAC Signature sent!');
            }

        $drequest = file_get_contents('php://input');
        if ($drequest === false || empty($drequest)) 
            {
                edie('Error in reading post data');
            }

        if (!isset($_POST['merchant']) || $_POST['merchant'] != trim($merchant_id)) 
            {
                edie('No or Incorrect Merchant ID');
            }

        $hmac = hash_hmac("sha512", $drequest, trim($ipn_secret));
        if (!hash_equals($hmac, $_SERVER['HTTP_HMAC'])) 
            {
                edie('Hmac signature does not match');
            }

        $amount1 = floatval($_POST['amount1']);  //in USD
        $amount2 = floatval($_POST['amount2']); //in BTC
        $currency1 = $_POST['currency1']; //USD
        $currency2 = $_POST['currency2']; //BTC
        $status = intval($_POST['status']);

        if ($currency2 != $order_currency) 
            {
                edie('Mismatch in currency');
            }

        if ($amount2 < $order_total) 
            {
                edie('Amount is less than order total');
            }

        if ($status >= 100 || $status == 2) 
            {
                //payment successful   
                $payment->status = "success";
                $payment->save();
            }elseif($status < 0)
                {
                    //payment error
                    $payment->status = "error";
                    $payment->save();
                }else
                    {
                        //payment pending
                        $payment->status = "pending";
                        $payment->save();
                    }

        dd("IPN OK");
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    public function block()
    {
        require_once('C:\wamp64\Laravel\crypto\vendor\autoload.php');
        require('src/Blockchain.php');

        $api_code = null;
        if(file_exists('code.txt')) {
                $api_code = trim(file_get_contents('code.txt'));
            }
        $Blockchain = new \Blockchain\Blockchain();

        $wallet_guid = '34903100-39b5-4832-b03f-69448e5def5c';
        $wallet_pass = '$Chisom1997';

        if(is_null($wallet_guid) || is_null($wallet_pass)) {
            echo "Please enter a wallet GUID and password in the source file.<br/>";
            exit;
        }

        $active_id = $Blockchain->Wallet->getIdentifier();
        dd($active_id);
        // $id = '34903100-39b5-4832-b03f-69448e5def5c';
        // $password = '$Chisom1997';

        // $newAddy = json_decode(file_get_contents("https://blockchain.info/merchant/".$id."new_address?password=".$password), true);

        // $parseAddy = $newAddy['address'];

        // dd($newAddy);
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
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
