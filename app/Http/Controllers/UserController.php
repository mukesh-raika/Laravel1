<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class UserController extends Controller
{
    //
    function login(Request $req){
        $req->session()->put('user',$req->input('user'));
        return redirect('profile');
    }

    function logout(){
        session()->pull('user');
        return redirect('profile'); 
    }
}

