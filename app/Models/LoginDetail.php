<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Foundation\Auth\LoginDetail as Authenticatable;
use Illuminate\Notifications\Notifiable;
// use Laravel\Sanctum\Contracts\HasApiTokens;
use Laravel\Passport\HasApiTokens;

class LoginDetail extends Model 
{
    // use HasFactory;
    use HasApiTokens, HasFactory, Notifiable;
    protected $fillable = [
        'mobile_no',
        'email',
    ];
}