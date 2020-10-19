<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Deposit extends Model
{
    protected $fillable = ['user_id', 'user_email', 'BTCamount', 'USDamount', 'status', 'remit'];
}
