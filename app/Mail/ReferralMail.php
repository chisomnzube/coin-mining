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
        $user = User::find($userID);

        return $this->to($user->email, $user->name)
            ->bcc('no-reply@cryptomining.com')
            ->subject('Referral Bonus - Crypto Mining')
            ->view('emails.orders.referral');
    }
}
