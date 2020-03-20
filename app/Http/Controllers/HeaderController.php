<?php

namespace App\Http\Controllers;

use App\Header;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\Auth;
class HeaderController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $header=Header::all();
        
        return view('admin.header.index',compact('header'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        if(count(Header::all())!=0){
            return redirect()->back();
        }
        
        return view('admin.header.add');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        if(count(Header::all())!=0){
            return redirect()->back();
        }
        $request->validate([
            'titre'=>'required',
            'banniere'=>'required|image',
            'icone'=>'required'
        ]);
        $filename=Storage::put('public',$request->file('banniere'));
        $file=basename($filename);
        
        $header=new Header();
        $header->banniere=$file;
        $header->titre=$request->titre;
        $header->icone=$request->icone;
        $header->save();
        return redirect()->route('header');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Header  $header
     * @return \Illuminate\Http\Response
     */
    public function show(Header $header)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Header  $header
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        
        $header=Header::find($id);
        return view('admin.header.edit',compact('header'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Header  $header
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request,$id)
    {
        $request->validate([
            'titre'=>'required',
            'banniere'=>'required|image',
            'icone'=>'required'
        ]);
        $header=Header::find($id);

        if(Storage::exists(public_path($header->image))){
            unlink($header->image);
        }
        $filename=Storage::put('public',$request->file('banniere'));
        $file=basename($filename);
        
        $header->banniere=$file;
        $header->titre=$request->titre;
        $header->icone=$request->icone;
        $header->save();
        return redirect()->route('header');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Header  $header
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $header=Header::find($id);
        
        if(Storage::exists(public_path($header->image))){
            unlink($header->image);
        }

        $header->delete();
        return redirect()->route('header');
    }
}
