<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Providers\RouteServiceProvider;
use Illuminate\Foundation\Auth\AuthenticatesUsers;
use Illuminate\Http\Request;
use Illuminate\Support\Str;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Auth;

class LoginController extends Controller
{
    /*
    |--------------------------------------------------------------------------
    | Login Controller
    |--------------------------------------------------------------------------
    |
    | This controller handles authenticating users for the application and
    | redirecting them to your home screen. The controller uses a trait
    | to conveniently provide its functionality to your applications.
    |
    */

    use AuthenticatesUsers;

    /**
     * Where to redirect users after login.
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
        $this->middleware('guest')->except('logout');
    }

    public function login(Request $request){
        if (!Auth::attempt(['email' => $request->email, 'password' => $request->password])) {
            return back()->withErrors(['error'=>'Wrong credentials']);
        }
        // Authentication passed...
        $new_token = Hash::make(Str::random(80));
        Auth::user()->forceFill([
            'api_token' => $new_token,
        ])->save();
        //$token =Auth::user()->createToken('token');
        if(Auth::user()->user_details->type!='admin'){
            //return redirect()->intended('/dashboard');
            //session('token',$token->plainTextToken);
            //session(['token' => $token->plainTextToken]);
            return redirect()->intended('/newsfeed');
        }
        else if(Auth::user()->user_details->type=='admin'){
            //return redirect()->intended('/admin_dashboard');
            //session(['token' => $token->plainTextToken]);
            return redirect()->intended('/newsfeed');
        }
        return redirect()->back();
    }
}
