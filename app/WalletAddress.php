<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class WalletAddress extends Model
{
    protected $fillable = ['user_id', 'bitcoin', 'litecoin', 'ethereum', 'dash', 'user_email'];
}
