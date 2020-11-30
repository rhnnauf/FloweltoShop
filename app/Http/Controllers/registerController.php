<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;

class registerController extends Controller
{
    function view()
    {
        $categoryQuery = DB::table("flower_category")->get();
        return view("register",compact('categoryQuery'));
    }



    function insertRegister(Request $request)
    {
        $this->validate($request, [
            'username'=>'required|min:5',
            'email'=> 'required|email|unique:users,email',
            'password' => 'required|min:8|confirmed',
            'gender' => 'required',
            'address' => 'required|min:10',
            'dob' =>'required|date'
        ]);
        
        DB::table('users')->insert([
            'username' => $request->username, 
            'email' => $request->email,
            'password' => bcrypt($request->password),
            'gender' => $request->gender,
            'address' => $request->address,
            'DoB' => $request->dob,
            'role' => 0
            
        ]);

        return redirect()->route('loginView');


    }

    function changePasswordView()
    {
        $categoryQuery = DB::table("flower_category")->get();
        return view("changePassword",compact('categoryQuery'));
    }

    function submitPassword(Request $request)
    {
        $this->validate($request, [
            'newPassword'=>'required|min:8|confirmed',
        ]);
        
        if(!(Hash::check($request->oldPassword,Auth::user()->password)))
        {
            return redirect()->back()->with('error1','Password is incorrect');
        }

        if(strcmp($request->oldPassword,$request->newPassword)==0){
            return redirect()->back()->with('error2','Password has been taken');
        }
        
        $user=Auth::user();
        $user->password=bcrypt($request->newPassword);
        $user->save();
        return redirect()->route('home')->with('success','Change Password Successful');
    }
}
