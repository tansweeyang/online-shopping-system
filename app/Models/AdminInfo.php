<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class AdminInfo extends Model
{
    use HasFactory;

    protected $table = 'admin_info';

    protected $fillable = [
        'admin_name',
        'admin_email',
        'admin_password',
    ];

    protected $guarded = [
        'admin_id',
    ];
}
