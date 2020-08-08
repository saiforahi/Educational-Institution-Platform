<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class News extends Model
{
    //
    protected $table = 'news';
    protected $primaryKey = 'id';
    protected $fillable=[
        'title','body','image','link','institute_id'
    ];
    protected $hidden=[
        'created_at','updated_at'
    ];
    public function institute(){
        return $this->belongsTo('App\Institute','institute_id','id');
    }
}
