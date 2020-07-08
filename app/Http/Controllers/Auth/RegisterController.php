<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Providers\RouteServiceProvider;
use App\User;
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
    protected function studentOrStaffValidator(array $data)
    {
        return Validator::make($data, [
            'userName' => ['required', 'string', 'max:255'],
            'userEmail' => ['required', 'string', 'email', 'max:255', 'unique:users,email'],
            'userPhone' => ['required', 'string', 'max:11', 'unique:users,phone'],
            'userPassword' => ['required', 'string', 'min:8', 'confirmed'],
            'user_type' => ['required', 'string', 'max:255'],
            'institute' => ['required', 'string', 'max:255']
        ]);
    }
    protected function instituteValidator(array $data)
    {
        return Validator::make($data, [
            'instituteName' => ['required', 'string', 'max:255'],
            'adminName' => ['required', 'string', 'max:255'],
            'adminPhone' => ['required', 'string', 'max:11', 'unique:users,phone'],
            'adminEmail' => ['required', 'string', 'email', 'max:255', 'unique:users,email'],
            'adminPassword' => ['required', 'string', 'min:8', 'confirmed'],
            'instituteAddress' => ['required', 'string', 'max:255'],
            'instituteType' => ['required', 'string', 'max:255'],
        ]);
    }

    public function register(Request $request){
        
        if($request->instituteType != null){            //registration type checking
            $valid=$this->instituteValidator($request->all());
            if($valid->fails()){
                return redirect()->back()->withErrors($valid)->withInput();
            }
            $result=$this->register_as_institute($request->all());
            Auth::login($result['newUser']);
            $token =Auth::user()->createToken('token');
            //return redirect('/admin_dashboard')->with(['AccountCreatedMessage'=>' Account Created!']);
            session('token',$token->plainTextToken);
            return redirect('/newsfeed')->with(['AccountCreatedMessage'=>' Account Created!']);
        }
        else{
            $valid=$this->studentOrStaffValidator($request->all());
            if($valid->fails()){
                return redirect()->back()->withErrors($valid)->withInput();
            }
            $result=$this->register_as_student_or_staff($request->all());
            Auth::login($result['newUser']);
            $token =Auth::user()->createToken('token');
            session('token',$token->plainTextToken);
            return redirect('/newsfeed')->with(['AccountCreatedMessage'=>' Account Created!']);
            //return redirect('/dashboard')->with(['AccountCreatedMessage'=>' Account Created!']);
        }
        return redirect()->back();
    }

    public function register_as_institute(array $data){
        $result['newUser']=User::create([
            'name' => ucfirst(trans($data['adminName'])),
            'username'=> $data['adminEmail'],
            'email' => $data['adminEmail'],
            'phone' => $data['adminPhone'],
            'password' => Hash::make($data['adminPassword']),
            'api_token' => Hash::make(Str::random(80))
        ]);
        $result['newInstitute']=Institute::create([
            'name' => strtoupper(trans($data['instituteName'])),
            'address'=> $data['instituteAddress'],
            'type' => $data['instituteType'],
        ]);
        $result['newAdmin']=Admin::create([
            'user_id' => $result['newUser']->id,
            'institute_id' => $result['newInstitute']->id
        ]);
        $result['user_details']=UserDetails::create([
            'user_id' => $result['newUser']->id,
            'first_name'=> ucfirst(trans($data['adminName'])),
            'type' => "admin",
            'institution_id' => $result['newInstitute']->id
        ]);
        return $result;
    }

    public function register_as_student_or_staff(array $data){
        $result['newUser']=User::create([
            'name' => ucfirst(trans($data['userName'])),
            'username'=> $data['userEmail'],
            'email' => $data['userEmail'],
            'phone' => $data['userPhone'],
            'password' => Hash::make($data['userPassword']),
            'api_token' => Hash::make(Str::random(80)),
        ]);
        
        $result['user_details']=UserDetails::create([
            'user_id' => $result['newUser']->id,
            'first_name'=> ucfirst(trans($data['userName'])),
            'type' => $data['user_type'],
            'institution_id' => $data['institute']
        ]);
        return $result;
    }

    public function showRegistrationForm(){
        $institutes=Institute::all();
        return view('auth.register')->with('institutes',$institutes);
    }
}
