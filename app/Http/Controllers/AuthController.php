<?php

namespace App\Http\Controllers;
use App\User;
use App\Institute;
use App\Admin;
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
                return response()->json(['errors'=>$valid->errors()]);
            }
            $result=$this->register_as_institute($request->all());
            Auth::login($result['newUser']);
            //return redirect('/admin_dashboard')->with(['AccountCreatedMessage'=>' Account Created!']);
            //$tokenResult = Auth::user()->createToken('token')->plainTextToken;
            return response()->json(['token'=>Auth::user()->api_token]);
        }
        else{
            $valid=$this->studentOrStaffValidator($request->all());
            if($valid->fails()){
                return response()->json(['errors'=>$valid->errors()]);
            }
            $result=$this->register_as_student_or_staff($request->all());
            Auth::login($result['newUser']);
            //$tokenResult = Auth::user()->createToken('token')->plainTextToken;
            return response()->json(['token'=>Auth::user()->api_token]);
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
                'status_code' => 500,
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
}
