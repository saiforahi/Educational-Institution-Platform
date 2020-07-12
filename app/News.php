<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class News extends Model
{
    //
    protected $table = 'news';
    protected $primaryKey = 'id';
    protected $fillable=[
        'title','body','image'
    ];
    protected $hidden=[
        'created_at','updated_at'
    ];
}
