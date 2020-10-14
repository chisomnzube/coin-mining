<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;
use Illuminate\Contracts\Queue\ShouldQueue;

class WithdrawalMail extends Mailable
{
    use Queueable, SerializesModels;
    public $name;
    public $email;
    public $amount;

    /**
     * Create a new message instance.
     *
     * @return void
     */
    public function __construct($name, $email, $amount)
    {
        $this->name = $name;
        $this->email = $email;
        $this->amount = $amount;
    }

    /**
     * Build the message.
     *
     * @return $this
     */
    public function build()
    {
        return $this->to($this->email, $this->name)
                    ->bcc($this->email)
                    ->subject('Withdrawal Request | Coin Mining')
                    ->view('emails.orders.withdraw');
    }
}
