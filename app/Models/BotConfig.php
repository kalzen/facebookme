<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class BotConfig extends Model
{
    use HasFactory;

    protected $fillable = [
        'domain',
        'bot_token',
        'chat_id',
    ];
}
