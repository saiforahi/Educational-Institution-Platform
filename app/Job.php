<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\JobApplication;
class Job extends Model
{
    //
    protected $fillable=["name","title","description","requirements"];
    
    public function applications(){
        return $this->hasMany(JobApplication::class,"job_id","id");
    }
}
