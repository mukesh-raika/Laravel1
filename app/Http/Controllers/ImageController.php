<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Image;


class ImageController extends Controller
{
    //
    function upload(Request $request){
     $path= $request->file('file')->store('public');
     $pathArray= explode("/",$path); 
     $imgpath=$pathArray[1];
     $img= new Image();
     $img->path=$imgpath; 
     
      if($img->save()){
        return redirect('list');
      }else{
        return "error ! try after sometime";
      }

    }

    function list(){
        $images= Image::all();
        return view('display',['imgData'=>$images]);
    }
}

