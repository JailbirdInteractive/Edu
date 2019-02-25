<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Lesson extends Model
{
    //
    protected $fillable = [
        'title', 'category', 'description','course_id','lesson_url',
    ];

    public function course(){
      return $this->belongsTo(Course::class);
    }
   
}
