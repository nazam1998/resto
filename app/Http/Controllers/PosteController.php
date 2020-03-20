<?php

namespace App\Http\Controllers;

use App\Poste;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
class PosteController extends Controller
{
     /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $postes=Poste::all();
        return view('admin.poste.index',compact('postes'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        
        if(!Auth::check()&&!Auth::user()->id_poste==1){
            return redirect()->back();
        }
        return view('admin.poste.add');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {

        if(count(Poste::all())==3||!Auth::check()&&!Auth::user()->id_poste==1){
            return redirect()->back();
        }
        $poste=new Poste();
        $poste->poste=$request->poste;
        $poste->save();
        return redirect()->route('poste');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Poste  $poste
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Poste  $poste
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        if(Auth::check()&&Auth::user()->id_poste==1&&$id>=4){
            $poste=Poste::find($id);
        return view('admin.poste.edit');
        }else{
            return redirect()->back();
        }
        
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Poste  $poste
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        if(Auth::check()&&Auth::user()->id_poste==1&&$id>=4){

        $poste=Poste::find($id);
        $poste->poste=$request->poste;
        $poste->save();
        return redirect()->route('poste');
        }else{
            return redirect()->back();
        }
        
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Poste  $poste
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        if(Auth::check()&&Auth::user()->id_poste==1&&$id>=4){
            
            $poste=Poste::find($id);
            $poste->delete();
            return redirect()->route('poste');
        }else{
            return redirect()->back();
        }
    }
}
