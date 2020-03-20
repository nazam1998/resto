<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Role;
use App\Poste;
class UserController extends Controller
{
    public function index(){
        $users=User::all();
        return view('admin.index',compact('users'));
    }

    public function edit($id){

    }
    
}