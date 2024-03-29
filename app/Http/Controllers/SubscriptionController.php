<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Subscriber;
use Auth;
use DB;


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
    public function _check($institute_id){
        if(Subscriber::where('institute_id',$institute_id)->where('user_id',Auth::user()->id)->exists()){
            return response()->json(["status"=>"Subscribed"]);
        }else{
            return response()->json(["status"=>"unsubscribed"]);
        }
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

    public function web_subscription_list(){
      $data=DB::table('subscribers')->where('user_id',Auth::user()->id)->join('institutes','subscribers.institute_id','=','institutes.id')->select('institutes.id','institutes.name','institutes.type','institutes.address')->get();
        return view('pages.institute_list')->with('institutes',$data);

    }

    public function _list(){
        $data=DB::table('subscribers')->where('user_id',Auth::user()->id)->join('institutes','subscribers.institute_id','=','institutes.id')->select('institutes.id','institutes.name','institutes.type','institutes.address')->get();
        return response()->json(['institutes'=>$data]);
    }

}
