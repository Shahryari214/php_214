<?php

namespace App\Http\Controllers\Auth;
use App\Http\Controllers\Controller;
use Illuminate\Foundation\Auth\AuthenticatesUsers;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use DB;

class AdminLoginController extends Controller
{
    /*
    |--------------------------------------------------------------------------
    | AdminLoginController Controller
    |--------------------------------------------------------------------------
    |
    | This controller handles authenticating users for the application and
    | redirecting them to your home screen. The controller Admins a trait
    | to conveniently provide its functionality to your applications.
    |
    */

    use AuthenticatesUsers;
    //protected $guard = 'admin';

    /**
     * Where to redirect Admins after login.
     *
     * @var string
     */
   

    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('guest')->except('logout');
    }
    public function showLoginForm()

    {

        return view('auth.adminLogin');

    }

    public function login(Request $request)

    {
        try {
            $this->validate($request, [
                'email' => 'required|string',
                'password' => 'required|string',
            ]);
        } catch (ValidationException $e) {
            return "ERROR";
        }
        $email = $request->input('email');
        $user = DB::table('users')->where('email', $email)->first();
        $array = json_decode(json_encode($user), true);
        if($array['email'] == $email){
            if (Hash::check($request->input('password'), $array['password'])) {
                if($array['role_id']==2){
                    return redirect()->route('profile');
                }
                else{
                    return view('admin')->with('role_id', $array['role_id']);
                }
             }    
        }
        else{
            return "نام کاربری و یا رمز عبور شما اشتباه است.";
        }
    }    
}