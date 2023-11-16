<?php

namespace App\Models\Product;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    protected $fillable = [
        'ProductType',
        'ProductCode',
        'ProductName',
        'Quantity',
        'Note',
    ];
}
