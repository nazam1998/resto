<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Header;
use App\About;
use App\Spec;
use App\Special;
use App\Categorie;
use App\Testimonial;
use App\Role;
use App\User;
use Illuminate\Support\Facades\Auth;
class WelcomeController extends Controller
{
    public function index(){
        $header=Header::all();
        $about=About::all();
        $spec=Spec::all();
        $categories=Categorie::inRandomOrder()->take(3)->get();
        $specials=Special::all();
        $testimonials=Testimonial::all();
        $roles=Role::all();
        $users=User::all();
        return view('welcome',compact('header','about','spec','categories','specials','testimonials','roles','users'));
    }
}
