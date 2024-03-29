<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class SubDistrict extends Model
{
    protected $table='sub_districts';
    public $incrementing = false;
    public function district()
    {
        return $this->belongsTo('App\District','id','district_id');
    }

}
