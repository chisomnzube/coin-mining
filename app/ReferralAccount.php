<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class ReferralAccount extends Model
{
    protected $fillable = ['user_id', 'amount'];
}
