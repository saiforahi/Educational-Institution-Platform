<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;
use App\JobApplication;
use App\Job;
class JobController extends Controller
{
    //
    public function submit_job_application(Request $request){
        $validator = Validator::make($request->all(), [
            'first_name' => 'required|string|between:2,100',
            'last_name' => 'required|string|between:2,100',
            'email' => 'required|string|email|max:100',
            'phone'=> 'required|string|max:20',
            'chooseFile'=> 'required|mimes:pdf',
            'date'=> 'required|date|after_or_equal:today',
            'time'=> 'required',
            'job'=>'required|string|exists:jobs,id'
        ]);
        if($validator->fails()){
            return response()->json(["error"=>$validator->errors()]);
        }
        // $cv_path=$request->cv->storeAs('public/cv_archieve/'.$request->first_name." ".$request->last_name." ".$request->email);
        //<img src="uploads/{{ Session::get('file') }}">
        $fileName = $request->email.'.pdf';  
        $request->chooseFile->move(public_path('cv_archieve'), $fileName);
        $data=array("first_name"=>$request->first_name,"last_name"=>$request->last_name,"email"=>$request->email,"phone"=>$request->phone,"cv"=>$fileName,"schedule"=>array("date"=>$request->date,"time"=>$request->time));
        $application=JobApplication::create([
            "job_id"=>$request->job,
            "application"=>json_encode($data),
        ]);
        return response()->json(["status"=>true,"message"=>"Application Submitted"]);
    }

    public function create_job(Request $request){
        //dd($request->responsibilities);
        $validator=Validator::make($request->all(),[
            'job_title'=>'required|max:255|string',
            'job_id'=> 'sometimes|nullable|string|max:255',
            'description'=> 'required|string',
            'vacancy'=>'required|numeric',
            'context'=>'sometimes|nullable|string',
            'status'=> 'sometimes|nullable|string',
            'location'=> 'sometimes|nullable|string',
            'responsibilities'=>'required',
            'edu_requirements'=>'required',
            'exp_requirements'=>'required'
        ]);
        if($validator->fails()){
            return response()->json(['success'=>false,'errors'=>$validator->errors()]);
        }
        $new_job=Job::create([
            'title'=>$request->job_title,
            'job_id'=>$request->job_id,
            'description'=>$request->description,
            'vacancy'=>$request->vacancy,
            'context'=>$request->context,
            'status'=>$request->status,
            'location'=>$request->location,
            'responsibilities'=>$request->responsibilities,
            'edu_requirements'=>$request->edu_requirements,
            'exp_requirements'=>$request->exp_requirements
        ]);
        return response()->json(['success'=>true,'message'=>'Job post created successfully','data'=>$new_job]);
    }
}
