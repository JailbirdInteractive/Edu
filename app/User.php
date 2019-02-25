<?php

namespace App;

use Illuminate\Notifications\Notifiable;
use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Foundation\Auth\User as Authenticatable;

class User extends Authenticatable
{
    use Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'fname', 'email', 'password','lname','phone','address','account_type',
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password', 'remember_token',
    ];

    public function instructor(){

        return $this->hasOne(Instructor::class);
    }
    public function student(){

        return $this->hasOne(Student::class);
    }
    public function earnings(){
        return $this->hasMany(Earnings::class);
    }
    public function courses(){
        return $this->hasMany(Course::class);
    }
}
