<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    use HasFactory;

    protected $table = 'products';

    protected $fillable = [
        'name',
        'price',
        'description',
        'image_url',
        'alt_text',
        'subcategory_id',
        'license_needed'
    ];

    protected $hidden = [
        'created_at',
        'updated_at'
    ];
}