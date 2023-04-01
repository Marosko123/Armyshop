<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Message extends Model
{
    use HasFactory;

    protected $table = 'messages';

    protected $fillable = [
        'sender_id',
        'room_id',
        'message',
        'is_new',
        'date'
    ];

    protected $hidden = [
        'created_at',
        'updated_at'
    ];
}