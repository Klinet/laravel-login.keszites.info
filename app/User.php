<?php

namespace App;

use Illuminate\Notifications\Notifiable;
use Illuminate\Foundation\Auth\User as Authenticatable;

class User extends Authenticatable
{
    use Notifiable;
    protected $table = 'users';
    protected $primaryKey = 'id';
    protected $keyType = 'integer';
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     *
     * $table->string('username');
    $table->string('email')->unique();
    $table->string('first_name');
    $table->string('last_name');
    $table->string('mobile');
    $table->string('password');
     */
    protected $fillable = [
        'username', 'email', 'first_name', 'last_name', 'mobile', 'password',
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password'
    ];
}
