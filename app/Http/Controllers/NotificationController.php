<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;

class NotificationController extends Controller
{
    //
    public function _get($id){
        $new_item=Auth::user()->notifications->where('id',$id)->first();
        return response()->json(['notification'=>Auth::user()->notifications->where('id',$id)->first()]);
    }
    public function _grouped_notifications(){
        $results=Auth::user()->notifications;
        $arr=array();
        foreach($results as $result){
            array_push($arr,$result->data['institute_name']);
        }
        $arr=array_unique($arr);
        $notifications=array();
        foreach($arr as $ar){
            $notifications[$ar]=array();
            foreach($results as $result){
                if($result->data['institute_name']==$ar){
                    array_push($notifications[$ar],$result);
                }
            }
        }
        $total_unread=Auth::user()->unreadNotifications->count();
        return response()->json(['notifications'=>$notifications,'total_unread'=>$total_unread]);
    }
}
