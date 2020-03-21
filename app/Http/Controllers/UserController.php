<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Role;
use App\User;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Storage;

class UserController extends Controller
{
    public function index(){
        $users=User::all();
        return view('admin.index',compact('users'));
    }

    public function edit($id){
        $user=User::find($id);
        $roles=Role::all();
        return view('admin.user.edit',compact('user','roles'));
    }

    public function update(Request $request,$id){
        $user=User::find($id);
        $user->nom=$request->nom;
        $user->prenom=$request->prenom;
        $user->email=$request->email;
        $user->password=Hash::make($request->password);
        $user->id_role=$request->role;
        $user->save();

        return redirect()->route('user');
        
    }

    public function dowloadFile($id){
        $user=User::find($id);
        return Storage::disk('public')->download($user->fichier);
    }
    
}