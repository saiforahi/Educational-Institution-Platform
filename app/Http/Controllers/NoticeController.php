<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class NoticeController extends Controller
{
    //
    public function _notices(){
        $result=DB::table('subscribers')->where('user_id',Auth::user()->id)->join('institutes','institutes.id','=','subscribers.institute_id')->join();
    }
}
