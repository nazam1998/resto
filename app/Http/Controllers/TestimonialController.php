<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Testimonial;
use App\User;
class TestimonialController extends Controller
{
    public function create(){
        return view('admin.testimonial.add');
    }
    public function store(Request $request){
        $test=new Testimonial();
        $test->texte=$request->text;
        $test->note=$request->note;
        $test->save();
        $user=User::find(Auth::id());
        $user->id_testimonial=$test->id;
        $user->save();
        return redirect()->route('profile');

    }
    public function edit(){
        $test=Testimonial::find(Auth::user()->id_testimonial);
        return view('admin.testimonial.edit',compact('test'));
    }
    public function update(Request $request){
        $test=Testimonial::find(Auth::user()->id_testimonial);
        $test->texte=$request->text;
        $test->note=$request->note;
        $test->save();
        return redirect()->route('profile');
    }

    public function destroy(){
        $test=Testimonial::find(Auth::user()->id_testimonial);
        $test->delete();
        return redirect()->route('profile');
    }
}
