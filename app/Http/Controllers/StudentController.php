<?php

namespace App\Http\Controllers;


use App\Http\Controllers\Controller;
use Illuminate\Http\Request; 
use App\Models\Student;

class StudentController extends Controller
{
    //
    function add(Request $request){ 
        $student= new Student();
        $student->name=$request->name;
        $student->email=$request->email;
        $student->phone=$request->phone;
        $student->save();
        if($student){
          return redirect('list');
        }else{
            return "opration faield";
        }
        
    }

    function list(){
      $studentData= Student::paginate(4);

        return view('list-student',['Students'=>$studentData]);
    }

    function delete($id)
    {
       $isDeleted=Student::destroy($id);
       if($isDeleted){
       return redirect('list');
       }
      
    }

    function edit($id){
        $student= Student::find($id);
          return view('edit',['data'=>$student]);     
    }

   function editStudent(Request $request, $id){
    $student= Student::find($id);
    $student->name=$request->name;
    $student->email=$request->email;
    $student->phone=$request->phone;
      if($student->save()){
        return redirect('list');
      }else{
        return "Update operation failed"; 
      }
   }

   function search(Request $request){
    $studentData = Student::where('name', 'like', '%' . $request->search . '%')->get();
    
    return view('list-student', ['Students' => $studentData, 'search'=>$request->search]);
}

    function deleteMultiple(Request $request){
       $result= Student::destroy($request->ids);
      if($result){
        return redirect('list');
      }else{
        return "student data not deleted";
      }
    }
}
