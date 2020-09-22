<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class IClass extends Model
{
    //
    protected $primary_key='id';
    protected $table='i_classes';
    protected $fillable=['institute_id','teacher_id','name','room','start','end','duration'];
    
    public function sections()
    {
        return $this->hasMany('App\Section');
    }
}
