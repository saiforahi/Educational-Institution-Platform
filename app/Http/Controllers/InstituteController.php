<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class InstituteController extends Controller
{
    public function fetch_all(){
        return Institute::all();
    }
}
