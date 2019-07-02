<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Notifications\Notifiable;
use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Foundation\Auth\User as Authenticatable

class users extends Authenticatable
{
    //
    use Notifiable;
     protected $fillable = [
        'email', 'password',
    ];

     protected $hidden = [
        'password', 'remember_token',
    ];}
