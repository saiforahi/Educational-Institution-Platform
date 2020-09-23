<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Guardian extends Model
{
    //
    protected $fillable=[
        'user_id','student_id'
    ];

    public function student(){
        return $this->hasMany(Student::class,'student_id','student_id');
    }
}
