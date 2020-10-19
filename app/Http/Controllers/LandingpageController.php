<?php

namespace App\Http\Controllers;

use App\Contact;
use App\Mail\SuccessWithdrawalMail;
use App\Payment;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;
use TCG\Voyager\Models\Post;

class LandingpageController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $posts = Post::all()->sortByDesc('id')->take(3);

        return view('index')->with([
                    'posts' => $posts,
                ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function transaction()
    {
        $payments = Payment::where('status', 'success')->orderBy('id', 'desc')->paginate(20);

        return view('admin-transaction')->with([
                    'payments' => $payments,
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
            'name' => 'required|string',
            'email' => 'required|string',
            'phone' => 'required|string',
            'body' => 'required|string',
            'g-recaptcha-response' => 'required|captcha',
        ]);

        Contact::create([
            'name' => $request->input('name'),
            'email' => $request->input('email'),
            'phone' => $request->input('phone'),
            'body' => $request->input('body'),
        ]);

        return back()->with('success_message', 'Your message have been sent successfully.');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function sendclientmail(Request $request)
    {
        $request->validate([
            'user_name' => 'required',
            'user_email' => 'required',
            'USDamount' => 'required',
            'package' => 'required',
        ]);

        
        $name = $request->input('user_name');
        $email = $request->input('user_email');
        $amount = $request->input('USDamount');
        $package = $request->input('package');

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

        $interest = $rate * $amount;
        $total = $amount + $interest;

        //send email to client
        Mail::send(new SuccessWithdrawalMail($name, $email, $total));

        return back()->with('success_message', 'Confirmation mail has been sent successfully!');
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
