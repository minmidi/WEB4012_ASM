<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class UserInfo extends Model
{
    use HasFactory;

    protected $table = 'user_infos';

    protected $fillable = [
        'first_name',
        'last_name',
        'images',
        'gender',
        'birthday',
        'address',
    ];
}
