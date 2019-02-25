<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Earnings extends Model
{
    //
    protected $fillable = [
        'user_id', 'earnings', 'student_name','student_id',
    ];
    protected static function boot() {
        parent::boot();
    
        static::saving(function($model){
            $model->net_earnings = $model->earnings -($model->earnings*0.10);
        }); 
    }

    public function user(){
       return $this->belongsTo(User::class);
    }
}
