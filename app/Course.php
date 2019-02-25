<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Course extends Model
{
    //
    protected $fillable = [
        'title', 'category', 'description','duration','start_date','end_date','course_type','user_id','price',
    ];

    public function instructor(){
       return $this->belongsTo(Instructor::class);
    }
    public function lessons(){
       return $this->hasMany(Lesson::class);
    }
    public function student(){
        return $this->hasMany(Student::class);
    }

}
