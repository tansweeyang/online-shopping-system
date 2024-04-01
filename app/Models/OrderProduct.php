<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class OrderProduct extends Model
{
    use HasFactory;

    protected $fillable = [
        'order_id',
        'product_id',
        'qty',
        'amt',
    ];

    protected $guarded = [
        'order_pro_id',
    ];

    public function products()
    {
        return $this->hasMany(Product::class, 'product_id', 'product_id');
    }
}
