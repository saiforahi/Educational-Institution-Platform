<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Institute extends Model
{
    //
    protected $table = 'institutes';
    protected $primaryKey = 'id';
    //public $incrementing = false;

    protected $fillable =[
        'name', 'address', 'type'
    ];
    public function notifications()
    {
        return $this->hasMany('App\InsNotification','institute_id','id');
    }
    public function admin(){
        return $this->hasOne('App\Admin','id','institute_id');
    }
    public function subscribers(){
        return $this->hasMany('App\Subscriber','institute_id','id');
    }
}
