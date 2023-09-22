<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Laravel\Sanctum\HasApiTokens;
use Illuminate\Notifications\Notifiable;
use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Foundation\Auth\User as Authenticatable;

class Seller extends Authenticatable implements MustVerifyEmail
{

    use HasFactory,HasApiTokens,Notifiable;
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
