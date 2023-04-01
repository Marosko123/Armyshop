<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class LikedProduct extends Model
{
    use HasFactory;

    protected $table = 'liked_products';

    protected $fillable = [
        'user_id',
        'product_id'
    ];

    protected $hidden = [
        'created_at',
        'updated_at'
    ];
}