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
        'ordered_products',
        'delivery_details'
    ];

    protected $hidden = [
        'created_at',
        'updated_at'
    ];
}