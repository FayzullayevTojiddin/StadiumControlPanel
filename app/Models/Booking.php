<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use App\Models\StadionField;

class Booking extends Model
{
    protected $fillable = [
        'stadion_field_id',
        'telegram_user_id',
        'date',
        'start',
        'end',
        'price',
        'status'
    ];

    public function stadionField()
    {
        return $this->belongsTo(StadionField::class);
    }
}
