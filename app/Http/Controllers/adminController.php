<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use DB;

class adminController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */

    public function __construct()
    {
         $this->middleware('guest')->except('logout');
    }

    public function index()
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
                    $request->session()->put('id',$array['password']);
                    return view('admin')->with('role_id', $array['role_id']);
                }
             } 
            else{
                    return "نام کاربری و یا رمز عبور شما اشتباه است.";
            }   
        }
        
    }    


    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
       
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        var_dump('store');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        var_dump('show');
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        var_dump('edit');
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        var_dump('update');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        var_dump('destroy');
    }
}