<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class InsNotification extends Model
{
    protected $table = 'ins_notifications';
    protected $primaryKey = 'id';
    //public $incrementing = false;

    protected $fillable =[
        'institute_id','title', 'image', 'body'
    ];

    public function institute()
    {
        return $this->belongsTo('App\Institute','id','institute_id');
    }
}
