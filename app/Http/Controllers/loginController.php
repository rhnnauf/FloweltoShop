<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;

class loginController extends Controller
{
    function view()
    {
        $categoryQuery = DB::table("flower_category")->get();
        return view("login",compact('categoryQuery'));
    }

    function loginData(Request $request)
    {
        $this->validate($request,[
            'email'=>'required|email',
            'password'=>'required'
        ]);

        if(Auth::attempt(['email'=>$request->email,'password'=>$request->password]))
        {
            return redirect()->intended('/');
        }
        else{
            return redirect()->route('loginView')->withErrors('Wrong email or password');
        }
    }
    
}
