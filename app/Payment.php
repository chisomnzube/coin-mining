<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Payment extends Model
{
    protected $fillable = ['payer_id', 'payer_email', 'payer_name', 'USDamount', 'BTCamount', 'package', 'status', 'expired', 'balanced'];
}
