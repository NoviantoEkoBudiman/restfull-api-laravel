<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    use HasFactory;
    protected $table = 'products';
    protected $guarded = 'id';
    protected $fillable = [
        'products_name',
        'products_price',
        'products_description',
        'product_images'
    ];
}