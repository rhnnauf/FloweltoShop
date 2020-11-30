<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class homeController extends Controller
{
    function view()
    {
        $flowerCatQuery = DB::table("flower_category")->paginate(8);
        $categoryQuery = DB::table("flower_category")->get();
        return view("homeUser",compact('categoryQuery','flowerCatQuery'));
    }
    
}
