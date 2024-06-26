<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    use HasFactory;

    protected $fillable = [
        'product_cat',
        'product_brand',
        'product_title',
        'product_price',
        'product_desc',
        'product_image',
        'product_keywords',
    ];

    protected $guarded = [
        'product_id',
    ];

    // Define the relationship to the Category model
    public function category()
    {
        return $this->belongsTo(Category::class, 'product_cat', 'cat_id');
    }
}
