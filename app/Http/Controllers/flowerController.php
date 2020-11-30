<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class flowerController extends Controller
{
    function show($id)
    {
        $flowerQuery = DB::table('flower')->where('id',$id)->first();
        $categoryQuery = DB::table("flower_category")->get();
        return view("productDetailUser",compact('categoryQuery','flowerQuery'));
    }

    function search(Request $request)
    {
        $searchVar = $request->input('search');
        $flowerQuery= DB::table('flower')->where('name','LIKE','%'.$request->input('search').'%')->get();
        $categoryQuery = DB::table("flower_category")->get();
        return view("searchPageResult",compact('flowerQuery','categoryQuery','searchVar'));
    }

    function update($id)
    {
        $updateQuery = DB::table('flower')->where('id',$id)->first();
        $categoryQuery = DB::table("flower_category")->get();
        return view("updateProductManager",compact('categoryQuery','updateQuery'));
    }

    function submitUpdate(Request $request,$id)
    {
        $this->validate($request,[
            'namaKategori'=> 'required',
            'namaBunga'=> 'required|min:5|unique:flower,name',
            'hargaBunga'=> 'required|min:50000|integer',
            'desBunga'=> 'required|min:20'
        ]); 

        $query=DB::table('flower')->find($id);
        $fileName=$query->flowerImage;
       
        if($request->hasFile('gbrBunga'))
        {
            $fileName=$request->file('gbrBunga')->getClientOriginalName();
            $request->file('gbrBunga')->storeAs('public/asset/',$fileName);
        }
        
        
        DB::table('flower')->where('id',$id)->update([
            
            'CategoryID'=> $request->namaKategori,
            'name'=> $request->namaBunga,
            'price'=> $request->hargaBunga,
            'desc'=> $request->desBunga,
            'flowerImage'=> 'storage/asset/'.$fileName
            
        ]);

        return redirect()->route('home')->with('success','Update Flower Successful');
    }

    function submitDelete($id)
    {
        $deleteQuery = DB::table('flower')->where('id',$id)->delete();
        return redirect()->route('home')->with('success','Delete Flower Successful');
    }

    function addFlowerView()
    {
        $categoryQuery = DB::table("flower_category")->get();
        return view("addFlower",compact('categoryQuery'));
    }

    function insertFlower(Request $request)
    {
        $this->validate($request, [
            'namaKategori'=> 'required',
            'namaBunga'=> 'required|min:5|unique:flower,name',
            'hargaBunga'=> 'required|min:50000|integer',
            'desBunga'=> 'required|min:20',
            'gbrBunga'=>'required'
        ]);

        $fileName=$request->file('gbrBunga')->getClientOriginalName();

   
        $request->file('gbrBunga')->storeAs('public/asset/',$fileName);

        DB::table('flower')->insert([
            'CategoryID'=> $request->namaKategori,
            'name'=> $request->namaBunga,
            'price'=> $request->hargaBunga,
            'desc'=> $request->desBunga,
            'flowerImage'=> 'storage/asset/'.$fileName
            
        ]);

        return redirect()->route('home')->with('success','Insert Flower Successful');


    }
}
