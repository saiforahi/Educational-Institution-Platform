<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Subscriber;
use Auth;

class SubscriptionController extends Controller
{
    //
    public function _subscription(Request $request){
        $request->validate(['institute_id'=>'required|exists:institutes,id']);
        if(Subscriber::where('user_id',Auth::user()->id)->where('institute_id',$request->institute_id)->exists()){
            Subscriber::where('user_id',Auth::user()->id)->where('institute_id',$request->institute_id)->delete();
            return response()->json(['subscribed'=>'unsubscribed']);
        }
        $newSubscriber=new Subscriber;
        $newSubscriber->user_id=Auth::user()->id;
        $newSubscriber->institute_id=$request->institute_id;
        $newSubscriber->save();
        return response()->json(['subscribed'=>'subscribed']);
    }
    public function web_subscription(Request $request){
        $request->validate(['institute_id'=>'required|exists:institutes,id']);
        if(Subscriber::where('user_id',Auth::user()->id)->where('institute_id',$request->institute_id)->exists()){
            Subscriber::where('user_id',Auth::user()->id)->where('institute_id',$request->institute_id)->delete();
            return redirect()->back();
        }
        $newSubscriber=new Subscriber;
        $newSubscriber->user_id=Auth::user()->id;
        $newSubscriber->institute_id=$request->institute_id;
        $newSubscriber->save();
        return redirect()->back();
    }

}
