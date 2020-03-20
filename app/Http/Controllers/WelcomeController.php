<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Header;
class WelcomeController extends Controller
{
    public function index(){
        $header=Header::all();
        return view('welcome',compact('header'));
    }
}
