<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\InsNotification;
use App\Institute;

class InstituteController extends Controller
{
    public function fetch_all(){
        return Institute::all();
    }
    public function get_notification($notificationID){
        return InsNotification::find($notificationID);
    }
    public function get_details($id){
        return view('pages.single_institute')->with('details',Institute::find($id));
    }
    public function get_institute_list($type){
        return view('pages.institute_list')->with('institutes',Institute::where('type',strtoupper($type))->get());
    }
}
