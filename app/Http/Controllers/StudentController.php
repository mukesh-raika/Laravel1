<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use  App\Models\Student;

class StudentController extends Controller
{

    //

    function list(){
        return Student::all();
         
    }
   
    function save(){
       $student= new Student();
       $student->name="bruse";
       $student->email="bruse@test.com";
       if($student->save()){
        echo "neew student  added";
        }

    }
    
}
