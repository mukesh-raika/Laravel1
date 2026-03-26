<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class UserController extends Controller
{
    
    function addUser(Request $request){
         $request->session()->flash('message','User has been added successfully');
          session(['username' => $request->username]);
          return redirect('user');
    }
}
