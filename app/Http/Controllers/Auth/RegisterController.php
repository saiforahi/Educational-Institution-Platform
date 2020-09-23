<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Providers\RouteServiceProvider;
use App\User;
use App\Student;
use App\Guardian;
use App\Teacher;
use App\Institute;
use App\Admin;
use App\UserDetails;
use Illuminate\Support\Facades\Auth;
use Illuminate\Foundation\Auth\RegistersUsers;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;
use Illuminate\Http\Request;
use Illuminate\Support\Str;

class RegisterController extends Controller
{
    /*
    |--------------------------------------------------------------------------
    | Register Controller
    |--------------------------------------------------------------------------
    |
    | This controller handles the registration of new users as well as their
    | validation and creation. By default this controller uses a trait to
    | provide this functionality without requiring any additional code.
    |
    */

    use RegistersUsers;

    /**
     * Where to redirect users after registration.
     *
     * @var string
     */
    //protected $redirectTo = RouteServiceProvider::HOME;
    protected $redirectTo = '/';

    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('guest');
    }

    /**
     * Get a validator for an incoming registration request.
     *
     * @param  array  $data
     * @return \Illuminate\Contracts\Validation\Validator
     */
    protected function guardianValidator(array $data)
    {
        return Validator::make($data, [
            'student_id'=>'required|exists:students,student_id'
        ]);
    }
    protected function studentValidator(array $data)
    {
        return Validator::make($data, [
            'institute' => 'required|exists:institutes,id'
        ]);
    }
    protected function instituteValidator(array $data)
    {
        return Validator::make($data, [
            'ins_reg_no' => 'required|string|max:255',
            'ins_name' => ['required','string','max:255'],
            'ins_selection'=> ['required', 'string', 'max:255'],
            'dis_selection' => 'required|string|max:255',
            'uni_selection' => ['required', 'string', 'max:255'],
        ]);
    }
    public function validate_user(array $data){
        $rules=[
            'firstName' => ['required','string','max:255'],
            'lastName' => 'required|string|max:255',
            'email' => 'required|string|email|max:255|unique:users,email',
            'cell' => 'required|string|max:11|min:11|unique:users,phone',
            'password' => 'required|string|min:6|confirmed'
        ];
        
        return Validator::make($data,$rules);
    }
    public function register(Request $request){
        $valid=$this->validate_user($request->all());
        if($valid->fails()){
            return redirect()->back()->withInput()->withErrors($valid);
        }
        if($request->cb1==true){
            $valid_institute=$this->instituteValidator($request->all());
            if($valid_institute->fails()){
                return redirect()->back()->withErrors($valid_institute)->withInput();
            }
            $result=$this->register_as_institute($request->all());
            Auth::login($result['newUser']);
            $token =Auth::user()->createToken('token');
            //return redirect('/admin_dashboard')->with(['AccountCreatedMessage'=>' Account Created!']);
            session('token',$token->plainTextToken);
            return redirect('/newsfeed')->with(['AccountCreatedMessage'=>' Account Created!']);
        }
        elseif($request->cb2==true){
            $valid_student=$this->studentValidator($request->all());
            if($valid_student->fails()){
                return redirect()->back()->withErrors($valid_student)->withInput();
            }
            $result=$this->register_as_student($request->all());
            Auth::login($result['newUser']);
            $token =Auth::user()->createToken('token');
            //return redirect('/admin_dashboard')->with(['AccountCreatedMessage'=>' Account Created!']);
            session('token',$token->plainTextToken);
            return redirect('/newsfeed')->with(['AccountCreatedMessage'=>' Account Created!']);
        }
        elseif($request->cb3==true){
            $valid_guardian=$this->guardianValidator($request->only('student_id'));
            if($valid_guardian->fails()){
                return redirect()->back()->withErrors($valid_student)->withInput();
            }
            $result=$this->register_as_guardian($request->all());
            Auth::login($result['newUser']);
            $token =Auth::user()->createToken('token');
            //return redirect('/admin_dashboard')->with(['AccountCreatedMessage'=>' Account Created!']);
            session('token',$token->plainTextToken);
            return redirect('/newsfeed')->with(['AccountCreatedMessage'=>' Account Created!']);
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
            'type' => $data['ins_selection'],
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
        $result['newStudent']=Student::create([
            'user_id'=>$result['newUser']->id,
            'institution_id'=> $data['institute']
        ]);
        $result['user_details']=UserDetails::create([
            'user_id' => $result['newUser']->id,
            'first_name'=> ucfirst(trans($data['userName'])),
            'type' => 'student',
            'institution_id' => $data['institute']
        ]);
        return $result;
    }
    public function register_as_guardian(array $data){
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
            'first_name'=> ucfirst(trans($data['userName'])),
            'type' => 'student',
            'institution_id' => $data['institute']
        ]);
        return $result;
    }
    public function showRegistrationForm(){
        $institutes=Institute::all();
        return view('auth.register')->with('institutes',$institutes);
    }
}
