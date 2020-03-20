<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Role;
use Illuminate\Support\Facades\Auth;

class RoleController extends Controller
{
     /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $roles=Role::all();
        return view('admin.role.index',compact('roles'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        
        if(!Auth::check()&&!Auth::user()->id_role==1){
            return redirect()->back();
        }
        return view('admin.role.add');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {

        if(count(Role::all())==3||!Auth::check()&&!Auth::user()->id_role==1){
            return redirect()->back();
        }
        $role=new Role();
        $role->role=$request->role;
        $role->save();
        return redirect()->route('role');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Role  $role
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Role  $role
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        if(Auth::check()&&Auth::user()->id_role==1&&$id>=4){
            $role=Role::find($id);
        return view('admin.role.edit');
        }else{
            return redirect()->back();
        }
        
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Role  $role
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        if(Auth::check()&&Auth::user()->id_role==1&&$id>=4){

        $role=Role::find($id);
        $role->role=$request->role;
        $role->save();
        return redirect()->route('role');
        }else{
            return redirect()->back();
        }
        
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Role  $role
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        if(Auth::check()&&Auth::user()->id_role==1&&$id>=4){
            
            $role=Role::find($id);
            $role->delete();
            return redirect()->route('role');
        }else{
            return redirect()->back();
        }
    }
}
