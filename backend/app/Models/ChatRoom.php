<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ChatRoom extends Model
{
    use HasFactory;

    protected $table = 'chat_rooms';

    protected $fillable = [
        'user_id',
        'room_id',
        'room_name'
    ];

    protected $hidden = [
        'created_at',
        'updated_at'
    ];
}