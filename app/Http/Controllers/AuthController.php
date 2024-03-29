<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use Hash;
use Session;

class AuthController extends Controller
{
    public function login()
    {
        return view('auth.login');
    }

    public function register()
    {
        return view('auth.register');
    }

    public function registerUser(Request $request )
    {
       $request -> validate([
           'name'=> 'required|alpha',
           'email' => 'required|email|unique:users',
           'password' => 'required|min:8',
       ]);
       $user = new User();
       $user -> name = $request -> name;
       $user -> email = $request -> email;
       $user -> password = Hash::make($request -> password);
       $res = $user -> save();
       if($res){
            return back() -> with('success' , 'You have registered successfully');
       }else{
            return back() -> width('fail', 'Something Went Wrong');
       }
    }

    public function loginUser(Request $request)
    {
        $request -> validate([
            'email' => 'required|email',
            'password' => 'required|min:8',
        ]);
        $user = User::where('email' , '=' , $request -> email) -> first();
        if($user){
            if(Hash::check($request -> password , $user -> password)){
                        $request -> session() ->put('loginId' ,$user -> id);
                        return redirect('dashboard');
            }else{
            return back()->with('fail' ,'Password is Incorrect !');

            }
        }else{
            return back()->with('fail' ,'this email is not registered');
        }
    }

    public function dashboard(){
        $data = array();
        if(Session::has('loginId')){
            $data = User::where('id','=',Session::get('loginId') ) -> first();
        }
        return view('dashboard' , compact('data'));
    }

    public function logout(){
        if(Session::has('loginId')){
            Session::pull('loginId');
            return redirect('login');
        }
    }
}
