<?php

namespace App\Http\Controllers;

use App\Spec;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
class SpecController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $specs=Spec::all();
        return view('admin.spec.index',compact('specs'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        
        if(count(Spec::all())!=0||!Auth::check()&&!Auth::user()->id_role==1){
            return redirect()->back();
        }
        return view('admin.spec.add');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {

        if(count(Spec::all())!=0||!Auth::check()&&!Auth::user()->id_role==1){
            return redirect()->back();
        }
        $spec=new Spec();
        $spec->titre=$request->titre;
        $spec->description=$request->description;
        $spec->save();
        return redirect()->route('spec');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Spec  $spec
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Spec  $spec
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        if(Auth::check()&&Auth::user()->id_role==1){
            $spec=Spec::find($id);
        return view('admin.spec.edit');
        }else{
            return redirect()->back();
        }
        
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Spec  $spec
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        if(Auth::check()&&Auth::user()->id_role==1){

        $spec=Spec::find($id);
        $spec->titre=$request->titre;
        $spec->description=$request->description;
        $spec->save();
        return redirect()->route('spec');
        }else{
            return redirect()->back();
        }
        
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Spec  $spec
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        if(Auth::check()&&Auth::user()->id_role==1){
            
            $spec=Spec::find($id);
            $spec->delete();
            return redirect()->route('spec');
        }else{
            return redirect()->back();
        }
    }
}
