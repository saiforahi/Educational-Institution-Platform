<?php

namespace App\Http\Controllers;
use App\Institute;
use App\InsNotification;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Storage;
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
        $news=DB::table('news')->orderby('updated_at','asc')->get();
        //Storage::put('news_image/test.txt','working');
        $images=array();
        foreach($news as $singleNews){
            $images[$singleNews->image]=Storage::get('public/news_image/'.$singleNews->image);
        }
        return view('pages.newsfeed')->with('news',$news);
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
    public function update_profile(Request $request){
        $request->validate(['email'=>'required|email|unique:users','name'=>'required|max:255','phone'=>'required|max:11|min:11|unique:users']);
        $user=Auth::user();
        $user->name=$request->name;
        $user->email=$request->email;
        $user->phone=$request->phone;
        $user->save();
        return redirect()->back();
    }
    
    public function show_notification_details($notification_id){
        return view('pages.notification')->with('details',InsNotification::find($notification_id));
    }
    
    public function show_single_news(){
        return view('pages.single_news');
    }
}
