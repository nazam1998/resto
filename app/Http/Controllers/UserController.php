<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Role;
use App\User;
class UserController extends Controller
{
    public function index(){
        $users=User::all();
        return view('admin.index',compact('users'));
    }

    public function edit($id){
        $user=User::find($id);
        return view('admin.user.edit',compact('user'));
    }

    public function update(Request $request,$id){
        $user=User::find($id);
        if(Storage::exists(public_path($user->photo))){
            unlink($user->photo);
        }
        $filename=Storage::put('public',$request->file('photo'));
        $file=basename($filename);
        $user->nom=$request->nom;
        $user->prenom=$request->prenom;
        $user->email=$request->email;
        $user->password=Hash::make($request->password);
        $user->id_role=$request->role;
        $user->photo=$request->file;
        if($user->id_role>3){
            $user->fichier=$request->fichier;
            $user->photoTeam=$request->photoTeam;
        }elseif($user->id_role==3){
            $user->testimonial=$request->testimonial;
        }
        $user->save();

        return redirect()->route('profile');
        
    }

    public function dowloadFile($id){
        $user=User::find($id);
        return Storage::disk('public')->download($user->fichier);
    }
    
}