<?php

namespace App;

use Illuminate\Notifications\Notifiable;
use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Database\Eloquent\Model;

class User  extends Authenticatable
{
    use Notifiable;
    protected $fillable = [
        'name', 'email', 'password',
    ];


    protected $hidden = [
        'password', 'remember_token', 
    ];

    protected $primaryKey = 'id';

    public function scopeSearch($user){

        return empty(request()->search) ? $user : $user->where('email', 'like', '%'.request()->search.'%');
    }
}
