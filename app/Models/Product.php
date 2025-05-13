<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    protected $table = 'products';
    protected $primaryKey = 'product_id';
    public $timestamps = true;
    
    protected $fillable = [
        'name',
        'category',
        'size',
        'image',
        'description',
        'price',
    ];

    public function carts()
    {
    return $this->hasMany(Cart::class, 'product_id');
    }

}
 
