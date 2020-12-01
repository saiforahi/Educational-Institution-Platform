<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class JobApplication extends Model
{
    //
    protected $fillable=["job_id","application"];
    public function job(){
        return $this->belongsTo(Job::class,"id","user_id");
    }
}
