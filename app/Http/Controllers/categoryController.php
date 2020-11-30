<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class categoryController extends Controller
{
    function view($categoryID)
    {
        $categoryQuery = DB::table("flower_category")->get();
        $categoryName = DB::table("flower_category")->where('id',$categoryID)->first();
        $searchCategory = DB::table('flower')->where('CategoryID',$categoryID)->get();

        return view("productUser",compact('categoryName','categoryQuery','searchCategory'));
    }

    function view2()
    {
        $flowerCatQuery = DB::table("flower_category")->paginate(8);
        $categoryQuery = DB::table("flower_category")->get();
        return view("manageCategory",compact('categoryQuery','flowerCatQuery'));
    }

    function submitDelete($id)
    {
        $deleteAllFlower = DB::table('flower')->where('categoryID',$id)->delete();
        $deleteQuery = DB::table('flower_category')->where('id',$id)->delete();
        return redirect()->route('home')->with('success','Delete Category Successful');
    }

    function update($id)
    {
        $updateQuery = DB::table('flower_category')->where('id',$id)->first();
        $categoryQuery = DB::table("flower_category")->get();
        return view("updateCategory",compact('categoryQuery','updateQuery'));
    }
    
    function submitUpdate(Request $request,$id)
    {
        $this->validate($request,[
            'namaKategori'=> 'required|unique:flower_category,categoryName'
        ]); 

        $query=DB::table('flower_category')->find($id);
        $fileName=$query->categoryImage;
       
        if($request->hasFile('gbrKategori'))
        {
            $fileName='storage/asset/'.$request->file('gbrKategori')->getClientOriginalName();
            $request->file('gbrKategori')->storeAs('storage/asset/',$fileName);
        }
        
        
        DB::table('flower_category')->where('id',$id)->update([
            'categoryName'=> $request->namaKategori    
        ]);

        return redirect()->route('home')->with('success','Update Successful');
    }
}
