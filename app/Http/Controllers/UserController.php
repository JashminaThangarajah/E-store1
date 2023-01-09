<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\DB;

class UserController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $user=User::where('role','employee')->get();
        return view('admin.addemployee',compact('user'));

        
    }
   

    

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
       

        return view('employee.enroll');
    }
    public function register()
    {
       

        return view('customer.customerreg');
    }
    

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $request->validate([
            'name'=>'required',
            'email'=>'required',
            'gender'=>'required',
            'address'=>'required',
            'mobile'=>'required',
            'role'=>'required',
            'password'=>'required',
        ]);
        

        $user=new User([
        'name'=>$request->get('name'),
        'email'=>$request->get('email'),
       'gender'=>$request->get('gender'),
        'address'=>$request->get('address'),
       'mobile'=>$request->get('mobile'),
       'role'=>$request->get('role'),
       'password'=>Hash::make($request->get('password')),

        ]);
        $user->save();
       if($request->role=='employee'){
           $users=User::all();
           return redirect()->route('user.index')->with('success','Employee created!');
        }
        else{
            return redirect()->route('start')->with('success','Customer created!');
        }


    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\User  $user
     * @return \Illuminate\Http\Response
     */
    public function show(User $user)
    {
        return view('employee.show',compact('user'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\User  $user
     * @return \Illuminate\Http\Response
     */
    public function edit(User $user)
    {
        return view('employee.edit',compact('user'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\User  $user
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, User $user)
    {
        $request->validate([
            'name'=>'required',
            'email'=>'required',
          
        ]);
        $user->update($request->all());
        return redirect()->route('user.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\User  $user
     * @return \Illuminate\Http\Response
     */
    public function destroy(User $user)
    {
        $user->delete();
        return redirect()->route('user.index');
    }
}
