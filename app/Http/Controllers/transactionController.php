<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;

class transactionController extends Controller
{
    function view()
    {
        $tQuery = DB::table("transaction_header")->where('UserID',Auth::user()->id)->get();
        $categoryQuery = DB::table("flower_category")->get();
        return view("transactionHistory",compact('categoryQuery','tQuery'));
    }

    function show(Request $request, $id)
    {
        $userId = Auth::user()->id;
        $tQuery = DB::table("transaction_header")->where('UserID',$userId)->where('id',$id)->first();
        $categoryQuery = DB::table("flower_category")->get();
        $tDetailQuery = DB::table("transaction_detail")->where("TransactionID",$id)->get();
        return view("transactionHistoryDetail",compact('categoryQuery','tQuery','tDetailQuery'));
    }
}
