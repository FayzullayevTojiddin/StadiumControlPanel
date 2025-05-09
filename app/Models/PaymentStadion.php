<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class PaymentStadion extends Model
{
    protected $fillable = [
        'stadion_id',
        'comment',
        'price'
    ];
}
