<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Cart extends Model
{
    protected $fillable = [
        'qty',
        'product_id',
        'users',
        'product_name',
        'product_price',
        'total',
        'subtotal',
        'product_image',
        
    ];
}
