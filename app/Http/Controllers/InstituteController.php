<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\InsNotification;
use App\Institute;

class InstituteController extends Controller
{
    public function fetch_all(){
        return response()->json(["institutes"=>Institute::all()]) ;
    }
    public function get_notification($notificationID){
        return InsNotification::find($notificationID);
    }
    public function get_details($id){
        return view('pages.single_institute')->with('details',Institute::find($id));
    }
    public function api_get_details($id){
        return response()->json(["institute"=>Institute::find($id)]);
    }
    public function get_institute_list($type){
        return view('pages.institute_list')->with('institutes',Institute::where('type',strtoupper($type))->get());
    }
    public function api_get_institute_list($type){
        return response()->json(["institutes"=>Institute::where('type',strtoupper($type))->get()]);
    }
}
