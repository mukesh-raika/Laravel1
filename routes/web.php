<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\StudentController;
use App\Http\Controllers\SellerController;
use Illuminate\Support\Str;

Route::get('/', function () {
    return view('welcome');
});

Route::view('add','add-student');

Route::post('add',[StudentController::class,'add']);
Route::get('list',[StudentController::class,'list']);
Route::get('delete/{id}',[StudentController::class,'delete']);
Route::get('edit/{id}',[StudentController::class,'edit']);
Route::put('edit-student/{id}',[StudentController::class,'editStudent']);
Route::get('search',[StudentController::class,'search']);
Route::post('delete-multi',[StudentController::class,'deleteMultiple']);
Route::view('upload','upload');
Route::post('upload',[ImageController::class,'upload']);
Route::view('about','about');
Route::view('home','home');
Route::view('login','login');
Route::view('admin','admin');
Route::get('save',[StudentController::class,'save']);
Route::get('list',[SellerController::class,'list']);

$info="hi let s learn Laravel";
// $info=Str::ucfirst($info);
// $info=Str::replaceFirst("Hi","Hello",$info);
//  $info=Str::camel($info);

$info=Str::of($info)->ucfirst($info)->replaceFirst("Hi","Hello",$info)->camel($info);
echo $info;










