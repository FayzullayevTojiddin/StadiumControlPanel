<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class TelegramUser extends Model
{
    protected $fillable = [
        'chat_id',
        'stadion_id',
        'status'
    ];
}
