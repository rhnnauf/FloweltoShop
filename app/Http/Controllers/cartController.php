<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
Use \Carbon\Carbon;

class cartController extends Controller
{
    function postCart(Request $request, $id)
    {
        $flowerQuery = DB::table('flower')->where('id',$id)->first();
        $selectCategory = DB::table('flower_category')->where('id',$flowerQuery->CategoryID)->first();
        $categoryQuery = DB::table("flower_category")->get();
        $cekQuery = DB::table('cart')->where('FlowerID',$id)->first();
        
        if(empty($cekQuery))
        {
            DB::table('cart')->insert([
                'Name' => $flowerQuery->name, 
                'Category' => $selectCategory->categoryName, 
                'Price' => $flowerQuery->price * $request->qty,
                'Image' => $flowerQuery->flowerImage,
                'UserID' => Auth::user()->id,
                'Quantity' => $request->qty,
                'FlowerID' => $flowerQuery->id,
            ]);
        }
        else
        {
            DB::table('cart')->where('FlowerID',$id)->update([
                'Quantity' => $cekQuery->Quantity + $request->qty,
                'Price' => ($flowerQuery->price * $cekQuery->Quantity) + ($flowerQuery->price *$request->qty )
            ]);
        }
        

        return redirect()->route('showCart');
    }

    function show()
    {
        $count = 0;
        $cartQuery = DB::table('cart')->get();
        $cekLength = DB::table('cart')->count();
        $categoryQuery = DB::table("flower_category")->get();

        
        $cartQuery = DB::table('cart')->get();
        foreach ($cartQuery as $cart) {
            $count = $count + $cart->Price;
        }

        return view("myCart",compact('categoryQuery','cartQuery','cekLength','count'));
    }

    function submitUpdate(Request $request, $id)
    {
        $cekQuery = DB::table('cart')->where('FlowerID',$id)->first();
        DB::table('cart')->where('FlowerID',$id)->update([
            'Quantity' => $request->qty,
            'Price' => $cekQuery->Price * $request->qty / $cekQuery->Quantity
        ]);

        $deleteQuery = DB::table('cart')->where('Quantity',0)->delete();
        return redirect()->route('showCart','deleteQuery')->with('success','Update Quantity Successful');
    }

    function checkOut()
    {
        $date = now();
        $count=0;
        DB::table('transaction_header')->insert([
            'created_at'=> $date,
            'UserID' => Auth::user()->id,
        ]);
        $tQuery = DB::table("transaction_header")->where('UserID',Auth::user()->id)->get();
        $cartQuery = DB::table('cart')->get();
        $categoryQuery = DB::table("flower_category")->get();
        $cekId = DB::table('transaction_header')->orderBy('id', 'desc')->first();

        foreach($cartQuery as $cart)
        {
            DB::table('transaction_detail')->insert([
                'TransactionID'=> $cekId->id,
                'Name'=> $cart->Name,
                'Category'=> $cart->Category,
                'Image'=> $cart->Image,
                'Quantity' => $cart->Quantity,
                'Price' => $cart->Price,
            ]);

           
        }

        $deleteQuery = DB::table('cart')->delete();
        
        return view("transactionHistory",compact('tQuery','categoryQuery','date','cartQuery','cekId','count'));
    
    }
}
