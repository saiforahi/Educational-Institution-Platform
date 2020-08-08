<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\News;
use App\Institute;
use App\Subscriber;
use Illuminate\Support\Facades\Storage;
use App\Events\NewsCreated;
use Auth;


class NewsController extends Controller
{
    //
    public function _create_news(Request $request){
        $request->validate(['title'=>'required|string','body'=>'required|string','image'=>'sometimes|nullable|mimes:jpeg,jpg']);
        $path=$request->image->store('public/news_image/'.Auth::user()->admin->institute->name);
        //Storage::put('public/news_image/'.Auth::user()->admin->institute->name.'/'.$image_name , $image_name);
        $new_news=News::create([
            'title' => $request->title,
            'body' => $request->body,
            'image' => $path,
            'link' => Storage::url($path),
            'institute_id' => Auth::user()->admin->institute->id
        ]);
        event(new NewsCreated($new_news));
        return response()->json(['new_news'=>$new_news]);
    }

    public function _get_all_news(){
        if(Auth::user()->admin){
            $news=News::where('institute_id',Auth::user()->admin->institute->id)->orderBy('created_at','desc')->get();
            return response()->json(['news'=>$news]);
        }
        $news=Subscriber::where('user_id',Auth::user()->id)->join('news','news.institute_id','=','subscribers.institute_id')->orderBy('news.created_at','desc')->get();
        return response()->json(['news'=>$news]);
        /*$images=array();
        foreach($news as $singleNews){
            $name=Institute::find($singleNews->institute_id)->name;
            $images[$singleNews->image]= asset(\Storage::url('avatar/default.png'));
            //$images[$singleNews->image]=Storage::get('public/news_image/'.$name.'/'.$singleNews->image);
        }*/
        
    }

    public function _get($id){
        return response()->json(['news'=>News::find($id)]);
    }
}
