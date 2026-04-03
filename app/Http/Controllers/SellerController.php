<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use  App\Models\Seller;

class SellerController extends Controller
{

    function list(){
        return Seller::find(1);
    }
   


}
