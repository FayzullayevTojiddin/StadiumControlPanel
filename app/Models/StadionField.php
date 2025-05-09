<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use App\Models\Stadion;
use App\Models\PaymentStadionField;

class StadionField extends Model
{
    protected $fillable = [
        'stadion_id',
        'name',
        'pictures',
        'description',
        'status'
    ];

    public function stadion()
    {
        return $this->belongsTo(Stadion::class);
    }

    public function payments()
    {
        return $this->hasMany(PaymentStadionField::class);
    }
}
