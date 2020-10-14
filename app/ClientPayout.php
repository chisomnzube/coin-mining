<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class ClientPayout extends Model
{
    protected $fillable = ['client_id', 'client_email', 'client_wallet', 'amount', 'payed',];
}
