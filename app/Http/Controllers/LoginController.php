<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Auth; 
Use validator;
class LoginController extends Controller
{
    public function login(){
        return view('login');
    }
    public function checklogin(Request $request)
    {
        //validation
        $this->validate($request,[
            'email' =>'required|email', 
            'password' => 'required|alphaNum|min:4'
        ]);
        //Authentication
        $user_data = array(
            'email' =>$request->get('email'),
            'password' =>$request->get('password'),
        );
        if(Auth::attempt($user_data))
        {
            if(Auth::user()->role=='admin'){
                return redirect()->route('admin.index');
            }
           else if(Auth::user()->role=='employee'){
                return redirect()->route('employee');
            }
            else if(Auth::user()->role=='customer'){
                return redirect()->route('customer');
            }
          
        }
        else
        {
            return back() ->with('error','wrong login details'); 
        }


    }
    function logout()
    {
        auth::logout();
        return redirect()->route('start');
    }
}
