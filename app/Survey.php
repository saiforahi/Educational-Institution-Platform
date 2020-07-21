<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Survey extends Model
{
    //
    protected $fillable=['user_id','name','email','phone','answers'];
    protected $table='surveys';
    protected $primaryKey = 'id';
}
