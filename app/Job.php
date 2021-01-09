<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\JobApplication;
class Job extends Model
{
    //
    protected $fillable=["name","title",'job_id',"description",'responsibilities',"requirements","edu_requirements","exp_requirements"];
    
    public function applications(){
        return $this->hasMany(JobApplication::class,"job_id","id");
    }
}
