<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class UserDetails extends Model
{
    //
    protected $fillable= [
        'user_id','type','institution_id'
    ];
}
