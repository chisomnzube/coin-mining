<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class CashOut extends Model
{
    protected $fillable = ['user_id', 'user_email', 'user_wallet', 'payed', 'amount'];
}
