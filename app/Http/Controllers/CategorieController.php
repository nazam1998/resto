<?php

namespace App\Http\Controllers;

use App\Categorie;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
class CategorieController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $categories=Categorie::all();
        return view('admin.categorie.index',compact('categories'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        
        if(count(Categorie::all())==3||!Auth::check()&&!Auth::user()->id_role==1){
            return redirect()->back();
        }
        return view('admin.categorie.add');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {

        if(count(Categorie::all())==3||!Auth::check()&&!Auth::user()->id_role==1){
            return redirect()->back();
        }
        $categorie=new Categorie();
        $categorie->categorie=$request->categorie;
        $categorie->save();
        return redirect()->route('categorie');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Categorie  $categorie
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Categorie  $categorie
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        if(Auth::check()&&Auth::user()->id_role==1){
            $categorie=Categorie::find($id);
        return view('admin.categorie.edit');
        }else{
            return redirect()->back();
        }
        
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Categorie  $categorie
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        if(Auth::check()&&Auth::user()->id_role==1){

        $categorie=Categorie::find($id);
        $categorie->categorie=$request->categorie;
        $categorie->save();
        return redirect()->route('categorie');
        }else{
            return redirect()->back();
        }
        
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Categorie  $categorie
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        if(Auth::check()&&Auth::user()->id_role==1){
            
            $categorie=Categorie::find($id);
            $categorie->delete();
            return redirect()->route('categorie');
        }else{
            return redirect()->back();
        }
    }
}
