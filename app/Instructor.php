<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Instructor extends Model
{
    //

    public function user(){

        return $this->belongsTo(User::class);
    }
    public function earnings(){
        return $this->hasMany(Earnings::class);
    }
    public function courses(){
        return $this->hasMany(Course::class);
    }
}
