<?php

namespace App\Mail;

use App\User;
use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;

class ReferralMail extends Mailable
{
    use Queueable, SerializesModels;
    public $userID;

    /**
     * Create a new message instance.
     *
     * @return void
     */
    public function __construct($userID)
    {
        $this->userID = $userID;
    }

    /**
     * Build the message.
     *
     * @return $this
     */
    public function build()
    {
        //dd($this->userID);
        $user = User::find($this->userID);

        return $this->to($user->email, $user->name)
            ->bcc('no-reply@coin-mining.club')
            ->subject('Referral Bonus - Coin Mining')
            ->view('emails.orders.referral')->with([
                'name' => $user->name,
            ]);
    }
}
