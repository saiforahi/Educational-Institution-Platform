<?php

namespace App\Http\Controllers;
use App\Institute;
use Illuminate\Http\Request;

class PageController extends Controller
{
    //
    public function show_admin_dashboard(){
        return view('pages.admin_dashboard');
    }
    public function show_dashboard(){
        return view('pages.dashboard');
    }
    public function show_mobile_reg(){
        $institutes=Institute::all();
        return view('auth.register_responsive')->with('institutes',$institutes);
    }
    public function show_e_meet(){
        return view('pages.e_meet');
    }
    public function show_newsfeed(){
        return view('pages.newsfeed');
    }
    public function show_institute(){
        return view('pages.institute');
    }
    public function show_language(){
        return view('pages.language');
    }
    public function show_rateus(){
        return view('pages.rateus');
    }
}
