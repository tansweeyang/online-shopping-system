<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class UserInfoBackup extends Model
{
    use HasFactory;

    protected $table = 'user_info_backup';

    protected $fillable = [
        'first_name',
        'last_name',
        'email',
        'password',
        'mobile',
        'address1',
        'address2',
    ];

    protected $guarded = [
        'user_id',
    ];
}
