<?php

namespace App\Http\Controllers;
use App\User;
use App\Role;
use App\Poste;
use App\Testimonial;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Storage;

use Illuminate\Http\Request;

class ProfileController extends Controller
{
    public function index(){
        if(!Auth::check()){
            return redirect()->back();
        }
        $user=User::find(Auth::id());
        $role=Role::all()->where('id',$user->id_role)->first();
        $poste=Poste::all()->where('id',$user->id_poste)->first();
        $testimonial=Testimonial::all()->where('id',$user->id_testimonial)->first();
        return view('admin.profile.index',compact('user','role','poste','testimonial'));
    }
    public function edit(){
        if(!Auth::check()){
            return redirect()->back();
        }
        $user=User::find(Auth::id());
        $roles=Role::all();
        $postes=Poste::all();
        $testimonials=Testimonial::all();
        return view('admin.profile.edit',compact('user','roles','postes','testimonials'));
        
    }

    public function update(Request $request){
        if(!Auth::check()){
            return redirect()->back();
        }
        $user=User::find(Auth::id());
        if(Storage::exists(public_path($user->photo))){
            unlink($user->photo);
        }
        $filename=Storage::put('public',$request->file('photo'));
        $file=basename($filename);

        $user->nom=$request->nom;
        $user->prenom=$request->prenom;
        $user->photo=$file;
        $user->password=$request->password;
        // $user->id_testimonial=$request->id_testimonial;
        $user->save();
        return redirect()->route('profile');

    }
    public function destroy(){
        if(!Auth::check()){
            return redirect()->back();
        }
        $user=User::find(Auth::id());
        if(Storage::exists(public_path($user->photo))){
            unlink($user->photo);
        }
        $user->delete();
        return redirect()->back();
    }
}
