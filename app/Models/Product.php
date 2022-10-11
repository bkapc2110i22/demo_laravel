<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    use HasFactory;

    protected $fillable = [
        'name',
        'price',
        'sale_price',
        'status',
        'content',
        'category_id',
        'image'
    ];

    // product 1 - 1 category 
    public function cat()
    {
        return $this->hasOne(Category::class, 'id', 'category_id');
    }
}
