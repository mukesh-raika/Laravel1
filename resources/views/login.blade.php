@extends('layout');

@section('title','This Is Login Page') 

@section('main')

<div class="main">
  <h1>User Login</h1>
  <br>
  <form action="" method="get">
   <input type="text" class="form-control w-50 mx-auto d-block " placeholder="name">
    <br>
   <input type="text" class="form-control w-50 mx-auto d-block " placeholder="password">
    <br><br>
   <button type="button" class="btn btn-primary rounded-pill">Login</button>
  </form>
</div>
@endsection