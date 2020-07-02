<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PageController extends Controller
{
    //
    public function show_home(){
        return view('pages.home');
    }
     public function show_college(){
        return view('pages.college');
    }
    public function show_corporate(){
        return view('pages.corporate');
    }
    public function show_diploma(){
        return view('pages.diploma');
    }
    public function show_govt(){
        return view('pages.govt');
    }
    public function show_national(){
        return view('pages.national');
    }
    public function show_private(){
        return view('pages.private');
    }
    public function show_school(){
        return view('pages.school');
    }
    public function show_university(){
        return view('pages.university');
    }
    public function show_notification(){
        return view('pages.notification');
    }
    public function show_single_institute(){
        return view('pages.single_institute');
    }
    public function show_single_news(){
        return view('pages.single_news');
    }
}
