<?php

namespace App\Http\Controllers;
use App\Institute;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

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
    public function show_profile(){
        return view('pages.profile');
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
