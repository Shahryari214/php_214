<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use Illuminate\Foundation\Auth\AuthenticatesUsers;
use Illuminate\Http\Request;
use Auth;
use DB;

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

    // /**
    //  * Where to redirect users after login.
    //  *
    //  * @var string
    //  */
     protected $redirectTo = '/profile';
    // *
    //  * Create a new controller instance.
    //  *
    //  * @return void
     
    // public function __construct()
    // {
    //     $this->middleware('guest')->except('logout');
    // }

    public function showLoginForm()
    {
        return view('auth.login');
    }

    public function login(Request $request)
    {

        $email=$request->input('email');
        $credentials = $request->only('email', 'password');
        if (Auth::attempt($credentials)) {
        $users = DB::table('users')->where('email', $email)->first();    
        $array = json_decode(json_encode($users), true);  
        if($array['isAdmin'] == 1){
            return redirect()->intended('admin');
            } 
        else{
            return redirect()->intended('profile');  
            }
        }
    else{
        return redirect('/');
        }
    
    }
}
