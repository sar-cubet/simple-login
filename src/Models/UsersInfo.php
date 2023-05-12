<?php

namespace SarCubet\SimpleLogin\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable; 
use Illuminate\Database\Eloquent\Model;
use Illuminate\Notifications\Notifiable;
use Laravel\Sanctum\HasApiTokens;

class UsersInfo extends Authenticatable
{
    use HasApiTokens, HasFactory, Notifiable;

    protected $table = 'users_info';
    
}
