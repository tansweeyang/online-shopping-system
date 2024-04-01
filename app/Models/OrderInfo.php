<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class OrderInfo extends Model
{
    use HasFactory;

    protected $table = 'orders_info';

    protected $fillable = [
        'user_id',
        'f_name',
        'email',
        'address',
        'city',
        'state',
        'zip',
        'cardname',
        'cardnumber',
        'expdate',
        'prod_count',
        'total_amt',
        'cvv',
    ];

    protected $guarded = [
        'order_id',
    ];

    public function user()
    {
        return $this->belongsTo(UserInfo::class, 'user_id');
    }
}
