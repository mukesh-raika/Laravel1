<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Blade;

class ProductController extends Controller
{

      function productlist(){
        // return "product list hello";
        $totalProduct=20;
        return Blade::render('<h1>{{$total}}Product  List</h1>',['total'=>$totalProduct]);
      }

}
