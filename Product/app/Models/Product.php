<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    use HasFactory;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    // public $timestamps = flase;
    protected $fillable = [
        'product_code',
        'product_name',
        'quantity',
        'productType',
        'note' ,
       
    ];
}
