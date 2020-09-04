<?php

namespace App\Http\Controllers;

use App\Payout;
use Illuminate\Http\Request;

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
