<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class FinishedOrder extends Model
{
    use HasFactory;

    protected $table = 'finished_orders';

    protected $fillable = [
        'user_id',
        
        'delivery',
        'payment',
        'ordered_products',
        'price',

        'first_name',
        'last_name',
        'email',
        'address',
        'zip_code',
        'city',
        'country',
        'phone'
    ];

    protected $hidden = [
        'created_at',
        'updated_at'
    ];
}