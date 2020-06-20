<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PageController extends Controller
{
    //
    public function show_home(){
        return view('pages.home');
    }
    public function show_signup(){
        return view('pages.signup');
    }
}
