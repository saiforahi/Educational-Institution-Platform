<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Auth;

class NewsController extends Controller
{
    //
    public function _create_news(Request $request){
        $request->validate(['title'=>'required|string','body'=>'required|string','image'=>'sometimes|nullable']);
    }
}
