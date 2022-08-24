<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    use HasFactory;

    protected $table = 'products';

    protected $fillable = [
        'manufacturer',
        'model',
        'code',
        'type',
        'color',
        'size',
        'price',
        'description',
        'picture_name',
        'picture_amount',
    ];

}