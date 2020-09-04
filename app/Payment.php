<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Payment extends Model
{
    protected $fillable = ['payer_email', 'from_currency', 'entered_amount', 'to_currency', 'amount', 'gateway_id', 'gateway_url', 'status',];
}
