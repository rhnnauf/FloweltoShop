<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class logOutController extends Controller
{
    function logout()
    {
        Auth::logout();
        return redirect()->route('loginView');
    }
}
