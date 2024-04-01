<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Cart extends Model
{
    use HasFactory;

    protected $fillable = [
        'p_id',
        'ip_add',
        'user_id',
        'qty',
    ];

    protected $guarded = [
        'id',
    ];

    public function products()
    {
        return $this->hasMany(Product::class, 'product_id', 'p_id');
    }

    public function user()
    {
        return $this->belongsTo(UserInfo::class, 'user_id', 'user_id');
    }
}
