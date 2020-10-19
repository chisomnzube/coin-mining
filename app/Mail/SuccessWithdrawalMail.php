<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;
use Illuminate\Contracts\Queue\ShouldQueue;

class SuccessWithdrawalMail extends Mailable
{
    use Queueable, SerializesModels;
    public $name;
    public $email;
    public $total;

    /**
     * Create a new message instance.
     *
     * @return void
     */
    public function __construct($name, $email, $total)
    {
        $this->name = $name;
        $this->email = $email;
        $this->total = $total;
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
                    ->subject('WithDrawal Success | Coin Mining')
                    ->view('emails.orders.successwithdraw');
    }
}
