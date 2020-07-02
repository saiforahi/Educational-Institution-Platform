<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Subscriber extends Model
{
    //
    protected $table = 'subscribers';
    protected $primaryKey = 'id';
    protected $fillable=[
        'user_id','institute_id'
    ];
}
