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
}
