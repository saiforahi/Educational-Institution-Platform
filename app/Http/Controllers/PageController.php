<?php

namespace App\Http\Controllers;
use App\Institute;
use App\District;
use App\SubDistrict;
use App\InsNotification;
use App\Job;
use App\Message;
use App\JobApplication;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\Auth;
use Validator;
use Mail;
class PageController extends Controller
{
    //
    public function send_contact_us_message(Request $request){
        $details = [
            'to' => 'enfomebd@gmail.com',
            'from' => 'dev@enfome.info',
            'subject' => 'Contact Us Message',
            'title' => "Message from ".$request->name,
            "body"  => $request->message
        ];
        $new_message=Message::create([
            'name'=>$request->name,
            'email'=>$request->email,
            'phone'=>$request->phone,
            'message'=>$request->message
        ]);
        Mail::to('enfomebd@gmail.com')->send(new \App\Mail\ContactUsMail($details));
        if (Mail::failures()) {
            $request->session()->flash('status', false);
            $request->session()->flash('message', 'Message sent failed!');
            return redirect()->route('home');
            // return response()->json([
            //     'status'  => false,
            //     'data'    => $details,
            //     'message' => 'Nnot sending mail.. retry again...'
            // ]);
        }
        $request->session()->flash('status', true);
        $request->session()->flash('message', 'Message sent successfully!');
        return redirect()->route('home');
        // return response()->json([
        //     'status'  => true,
        //     'data'    => $details,
        //     'message' => 'Your details mailed successfully'
        // ]);
        // $data=$request->all();
		//  $_username      = $data['name'];
	    //  $_email_user    = $data['email'];
		//  $_phone    = $data['phone'];
		//  $_message = $data['message'];
        // Mail::send('emails.verify', array('confirmation_code' =>$confirmation_code),function($message) use ($_username,$_email_user,$_title_site,$_email_noreply) {
        //     $message->from($_email_noreply, $_title_site);
        //     $message->subject('Contact Us Message');
        //     $message->to($_email_user,$_username);
        // });
    }
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
        $news=DB::table('news')->orderby('created_at','asc')->get();
        /*Storage::put('news_image/test.txt','working');
        $images=array();
        foreach($news as $singleNews){
            $name=Institute::find($singleNews->institute_id)->name;
            $images[$singleNews->image]=Storage::get('news_image/'.$name.'/'.$singleNews->image);
        }*/
        return view('pages.newsfeed')->with('news',$news);
    }
    public function show_institute(){
        return view('pages.institutes.institute');
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
    public function show_survey(){
        return view('pages.survey');
    }

    public function save_answers(Request $request){
        //$newSurvey= new Survey;
        dd($request->all());
    }

    public function show_boiler(){
        return view('sections.newsfeed');
    }

    public function _getDistricts()
    {
        $districts=District::all();
        return response()->json(['districts'=>$districts]);
    }
    public function _getSubDistricts($district_id)
    {
        $subdistricts=SubDistrict::where('district_id',$district_id)->get();
        return response()->json(['subdistricts'=>$subdistricts]);
    }
    public function show_career_with_us_view(){
        $jobs=Job::all();
        return view('pages.additional_pages.career')->with('jobs',$jobs);
    }

    
}
