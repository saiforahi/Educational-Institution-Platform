<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Admin extends Model
{
    //
    protected $table='admins';
    protected $primaryKey = 'id';
    protected $fillable =[
        'user_id','institute_id'
    ];
    public function institute(){
        return $this->belongsTo('App\Institute','institute_id','id');
    }
}
