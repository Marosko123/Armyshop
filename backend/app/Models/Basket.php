<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Basket extends Model
{
    use HasFactory;

    protected $table = 'baskets';

    protected $fillable = [
        'user_id',
        'product_id',
        'quantity'
    ];

    protected $hidden = [
        'created_at',
        'updated_at'
    ];
}