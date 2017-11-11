<?php

namespace App;

use Illuminate\Notifications\Notifiable;
use Illuminate\Foundation\Auth\User as Authenticatable;



class User extends Authenticatable
{

    protected $fillable = [ 'name', 'lastname', 'email', 'phone', 'password', 'image_url'];
    use Notifiable;


    protected $hidden = [
        'password', 'remember_token',
    ];
}
