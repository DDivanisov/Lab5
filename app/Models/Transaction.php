<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Transaction extends Model
{
    //
    protected $fillable = [
        'employee_name',
        'sender_name',
        'receiver_name',
        'sender_account',
        'receiver_account',
        'amount',
        'transaction_date', 
    ];
}
