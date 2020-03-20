<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Header;
use App\About;
use App\Spec;
use App\Special;
use App\Categorie;
use Illuminate\Support\Facades\Auth;
class WelcomeController extends Controller
{
    public function index(){
        $header=Header::all();
        $about=About::all();
        $spec=Spec::all();
        $categories=Categorie::inRandomOrder()->take(3)->get();
        $specials=Special::all();
        return view('welcome',compact('header','about','spec','categories','specials'));
    }
}
