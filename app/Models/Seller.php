<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Laravel\Sanctum\HasApiTokens;

class Seller extends Model
{
    use HasFactory,HasApiTokens;
    protected $fillable = [
        'email_seller',
        'sellerfullname',
        'pwd',
        'bizname',
        'state',
        'phone_number',
        'biz_logo',
        'min_price',
        'max_price',
        'num_likes',
    ];

    protected $hidden = [
        'pwd',
    ];
}
