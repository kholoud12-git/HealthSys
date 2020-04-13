<?php

namespace App;

use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Illuminate\Database\Eloquent\Model;

class Person extends Authenticatable
{
    use Notifiable;
    protected $guard = 'person';
    protected $table = 'Persons';
    protected $fillable = ['ID', 'Password',];
    protected $hidden = ['Password',];

    protected $keyType = 'string';
}
