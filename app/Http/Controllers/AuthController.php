<?php

namespace App\Http\Controllers;
use App\User;
use App\Institute;
use App\Admin;
use App\Student;
use App\UserDetails;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Str;
use Illuminate\Http\Request;

class AuthController extends Controller
{
    //
    public function logout(Request $request) {
        $user=Auth::user();
        Auth::guard('web')->logout();
        $user->tokens()->delete();
        return response()->json(['success'=>'logged out']);
    }
    protected function guardianValidator(array $data)
    {
        return Validator::make($data, [
            'student_id'=>'required|exists:students,student_id'
        ]);
    }
    protected function teacherValidator(array $data)
    {
        return Validator::make($data, [
            'tea_institute'=>'required|exists:institutes,id'
        ]);
    }
    protected function studentValidator(array $data)
    {
        return Validator::make($data, [
            'stu_institute' => 'required|exists:institutes,id'
        ]);
    }
    protected function instituteValidator(array $data)
    {
        return Validator::make($data, [
            'ins_reg_no' => 'required|string|max:255',
            'ins_name' => ['required','string','max:255'],
            'ins_type'=> ['required', 'string', 'max:255'],
            'dis_selection' => 'required|max:255',
            'uni_selection' => ['required',  'max:255'],
        ]);
    }
    public function validate_user(array $data){
        $rules=[
            'firstName' => ['required','string','max:255'],
            'lastName' => 'required|string|max:255',
            'email' => 'required|string|email|max:255|unique:users,email',
            'cell' => 'required|string|max:11|min:11|unique:users,phone',
            'password' => 'required|string|min:6'
        ];
        return Validator::make($data,$rules);
    }
    public function register(Request $request){
        $valid=$this->validate_user($request->all());
        if($valid->fails()){
            $messages=array();
            foreach($valid->errors() as $error){
                array_push($messages,$error);
            }
            return response()->json(["status"=>false,"message"=>$valid->errors()]);
        }
        if($request->type=='institute'){
            $valid_institute=$this->instituteValidator($request->all());
            if($valid_institute->fails()){
                return response()->json(["status"=>false,"message"=>$valid_institute->errors()]);
            }
            $result=$this->register_as_institute($request->all());
            Auth::login($result['newUser']);
            $token =Auth::user()->createToken('token');
            Auth::user()->sendEmailVerificationNotification();
            //session('token',$token->plainTextToken);
            return response()->json(['status'=>true,'access_token'=>Auth::user()->api_token]);
        }
        elseif($request->type=='student'){
            $valid_student=$this->studentValidator($request->only('stu_institute'));
            if($valid_student->fails()){
                return response()->json(["status"=>false,"message"=>$valid_student->errors()]);
            }
            $result=$this->register_as_student($request->all());
            Auth::login($result['newUser']);
            $token =Auth::user()->createToken('token');
            Auth::user()->sendEmailVerificationNotification();
            //session('token',$token->plainTextToken);
            return response()->json(['status'=>true,'access_token'=>Auth::user()->api_token]);
        }
        elseif($request->type=='teacher'){
            $valid_teacher=$this->teacherValidator($request->only('tea_institute'));
            if($valid_teacher->fails()){
                return response()->json(["status"=>false,"message"=>$valid_teacher->errors()]);
            }
            $result=$this->register_as_teacher($request->all());
            Auth::login($result['newUser']);
            $token =Auth::user()->createToken('token');
            Auth::user()->sendEmailVerificationNotification();
            //session('token',$token->plainTextToken);
            return response()->json(['status'=>true,'access_token'=>Auth::user()->api_token]);
        }
        elseif($request->type=='super_admin'){
            if(UserDetails::where('type','super_admin')->exists()){
                return response()->json(['status'=>false,'message'=>'Super Admin can not be multiple']);
            }
            else{
                $result=$this->register_as_param($request->all(),'super_admin');
                $result['newUser']->sendEmailVerificationNotification();
                return response()->json(['status'=>true,'message'=>'Super Admin created successfully!']);
            }
        }
        
    }

    public function register_as_institute(array $data){
        $result['newUser']=User::create([
            'firstName' => ucfirst(trans($data['firstName'])),
            'lastName' => ucfirst(trans($data['lastName'])),
            'username'=> $data['email'],
            'email' => $data['email'],
            'phone' => $data['cell'],
            'password' => Hash::make($data['password']),
            'api_token' => Hash::make(Str::random(80))
        ]);
        $result['newInstitute']=Institute::create([
            'name' => strtoupper(trans($data['ins_name'])),
            'address'=> json_encode(array('district'=>$data['dis_selection'],'subdistrict'=>$data['uni_selection'])),
            'type' => $data['ins_type'],
        ]);
        $result['newAdmin']=Admin::create([
            'user_id' => $result['newUser']->id,
            'institute_id' => $result['newInstitute']->id
        ]);
        $result['user_details']=UserDetails::create([
            'user_id' => $result['newUser']->id,
            'type' => "admin",
            'institution_id' => $result['newInstitute']->id
        ]);
        return $result;
    }

    public function register_as_student(array $data){
        $result['newUser']=User::create([
            'firstName' => ucfirst(trans($data['firstName'])),
            'lastName' => ucfirst(trans($data['lastName'])),
            'username'=> $data['email'],
            'email' => $data['email'],
            'phone' => $data['cell'],
            'password' => Hash::make($data['password']),
            'api_token' => Hash::make(Str::random(80)),
        ]);
        $result['user_details']=UserDetails::create([
            'user_id' => $result['newUser']->id,
            'type' => 'student',
            'institution_id' => $data['stu_institute']
        ]);
        $result['newStudent']=Student::create([
            'user_id'=>$result['newUser']->id,
            'institute_id'=> $data['stu_institute']
        ]);
        return $result;
    }
    public function register_as_teacher(array $data){
        $result['newUser']=User::create([
            'firstName' => ucfirst(trans($data['firstName'])),
            'lastName' => ucfirst(trans($data['lastName'])),
            'username'=> $data['email'],
            'email' => $data['email'],
            'phone' => $data['cell'],
            'password' => Hash::make($data['password']),
            'api_token' => Hash::make(Str::random(80)),
        ]);
        $result['user_details']=UserDetails::create([
            'user_id' => $result['newUser']->id,
            'type' => 'teacher',
            'institution_id' => $data['tea_institute']
        ]);
        $result['newTeacher']=Teacher::create([
            'user_id' => $result['newUser']->id,
            'institute_id' => $data['tea_institute']
        ]);
        return $result;
    }
    
    public function register_as_param(array $data,$param){
        $result['newUser']=User::create([
            'firstName' => ucfirst(trans($data['firstName'])),
            'lastName' => ucfirst(trans($data['lastName'])),
            'username'=> $data['email'],
            'email' => $data['email'],
            'phone' => $data['cell'],
            'password' => Hash::make($data['password']),
            'api_token' => Hash::make(Str::random(80)),
        ]);
        
        $result['user_details']=UserDetails::create([
            'user_id' => $result['newUser']->id,
            'type' => $param
        ]);
        return $result;
    }
    public function login(Request $request)
    {
        try {
            $request->validate([
                'email' => 'email|required',
                'password' => 'required'
            ]);
            $credentials = request(['email', 'password']);
            if (!Auth::attempt($credentials)) {
                return response()->json([
                    'status_code' => 405,
                    'message' => 'Unauthorized'
                ]);
            }
            $user = User::where('email', $request->email)->first();
            //if ( $request->password == $user->password) {
            if ( ! Hash::check($request->password, $user->password, [])) {
                return response()->json(['error'=>'wrong password']);
            }
            $tokenResult = $user->createToken('token')->plainTextToken;
            $new_token = Hash::make(Str::random(80));
            $user->forceFill([
                'api_token' => $new_token,
            ])->save();
            return response()->json([
            'status_code' => 200,
            'access_token' => $user->api_token,
            'user_type'=> $user->user_details->type,
            'token_type' => 'Bearer',
            ]);
        } catch (Exception $error) {
            return response()->json([
            'status_code' => 500,
            'message' => 'Error in Login',
            'error' => $error,
            ]);
        }
    }

    public function get_user_details(){
        $data=Auth::user();
        if(Admin::where('user_id',$data->id)->exists()){
            $data["role"]="admin";
            $data["institute"]=Admin::where('user_id',$data->id)->first()->join("institutes","institutes.id","=","admins.institute_id")->select("institutes.id","institutes.name")->get();
        }
        else{
            //$type=Auth::user()->user_details;
            $data["role"]=Auth::user()->user_details->type;
        }
        return $data;
    }
}
