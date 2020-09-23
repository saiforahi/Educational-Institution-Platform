<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Student extends Model
{
    //
    protected $fillable=[
        'user_id','student_id','institute_id','sex'
    ];
    public function guardian(){
        return $this->belongsTo(Guardian::class,'id','guardian_id');
    }
}
