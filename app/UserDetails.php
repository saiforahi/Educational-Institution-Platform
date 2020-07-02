<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class UserDetails extends Model
{
    //
    protected $fillable= [
        'user_id','first_name','last_name','type','institution_id'
    ];
}
