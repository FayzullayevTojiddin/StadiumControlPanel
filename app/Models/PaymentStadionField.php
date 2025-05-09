<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use App\Models\Booking;

class PaymentStadionField extends Model
{
    protected $fillable = [
        'booking_id',
        'comment'
    ];

    public function booking()
    {
        return $this->belongsTo(Booking::class);
    }
}
