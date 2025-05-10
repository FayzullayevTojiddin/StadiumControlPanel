<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use App\Models\User;
use App\Models\StadionField;

class Stadion extends Model
{
    protected $fillable = [
        'user_id',
        'bot_token',
        'title',
        'about_text',
        'latitude',
        'longitude',
        'pictures',
        'status'
    ];

    public function user()
    {
        return $this->belongsTo(User::class);
    }

    public function stadionFields()
    {
        return $this->hasMany(StadionField::class);
    }
}
