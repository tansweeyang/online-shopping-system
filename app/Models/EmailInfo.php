<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class EmailInfo extends Model
{
    use HasFactory;

    protected $table = 'email_info';

    protected $fillable = [
        'email',
    ];

    protected $guarded = [
        'email_id',
    ];
}
