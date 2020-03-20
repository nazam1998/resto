<?php

namespace App\Http\Controllers;

use App\Special;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Storage;

use App\Categorie;

class SpecialController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $categories=Categorie::all();
        $specials=Special::all();
        return view('admin.special.index',compact('specials','categories'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $categories=Categorie::all();
        return view('admin.special.add',compact('categories'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $special=new Special();
        $filename=Storage::put('public',$request->file('logo'));
        $file=basename($filename);
        $special->titre=$request->titre;
        $special->logo=$file;
        $special->description=$request->description;
        $special->id_cat=$request->id_cat;
        $special->save();
        return redirect()->route('special');
        
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Special  $special
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Special  $special
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $special=Special::find($id);
        $categories=Categorie::all();
        return view('admin.special.edit',compact('categories','special'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Special  $special
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $special=Special::find($id);
        if(Storage::exists(public_path($special->image))){
            unlink($special->image);
        }
        $filename=Storage::put('public',$request->file('logo'));
        $file=basename($filename);
        $special->titre=$request->titre;
        $special->logo=$file;
        $special->description=$request->description;
        $special->id_cat=$request->id_cat;
        $special->save();
        return redirect()->route('special');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Special  $special
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $special=Special::find($id);
        if(Storage::exists(public_path($special->image))){
            unlink($special->image);
        }
        $special->delete();
        return redirect()->route('special');
    }
}
