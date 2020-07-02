<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class SubscriptionController extends Controller
{
    //
    public function _subscription(Request $request){
        $request->validate(['user_id' => 'required|exists:users,id','institute_id'=>'required|exists:institutes,id']);
        if(Subscriber::where('user_id',$request->user_id)->where('institute_id',$request->institute_id)->exists()){
            Subscriber::where('user_id',$request->user_id)->where('institute_id',$request->institute_id)->delete();
            return response()->json(['subscribed'=>'unsubscribed']);
        }
        $newSubscriber=new Subscriber;
        $newSubscriber->user_id=$request->user_id;
        $newSubscriber->institute_id=$request->institute_id;
        $newSubscriber->save();
        return response()->json(['subscribed'=>'subscribed']);
    }
}
