@extends('layout')
@section('content')
<html>
<body>
<center><h1 style="background-color:#0d6efd;margin-left:300px;margin-right:300px;border:1px ;padding:25px">Customer Registration</h1></center>
<div style="margin-left:300px;margin-right:300px;border:1px solid blue;padding:25px>">

<form method= "post" action="{{ route('user.store')}}" style="margin-left:150px ; margin-right:150px; ">
    @csrf
<div class="mb-3 row">
    <label for="inputname" class="col-sm-2 col-form-label">Name:</label>
    <div class="col-sm-10">
      <input type="name" class="form-control" name="name">
    </div>
  </div>
  <div class="mb-3 row">
    <label for="inputname" class="col-sm-2 col-form-label">Email:</label>
    <div class="col-sm-10">
      <input type="name" class="form-control" name="email">
    </div>
  </div>

<div class="mb-3 row">
  <label for="inputname" class="col-sm-2 col-form-label">Gender:</label>
  <div class="col-sm-4">
  <select name="gender" class="form-select" aria-label="Default select example"> 
  <option value="M">M</option>
  <option value="F">F</option>
</select></div>
</div>

<div class="mb-3 row">
    <label for="inputname" class="col-sm-2 col-form-label">Address:</label>
    <div class="col-sm-10">
      <input type="name" class="form-control" name="address">
    </div>
  </div>
  <div class="mb-3 row">
    <label for="inputname" class="col-sm-2 col-form-label">Mobile No:</label>
    <div class="col-sm-10">
      <input type="text" class="form-control" name="mobile">
    </div>
  </div>

 <div class="mb-3 row">
    <label for="inputPassword" class="col-sm-2 col-form-label">Password:</label>
    <div class="col-sm-10">
      <input type="password" class="form-control" id="inputPassword" name="password">
    </div>
  </div>

  <input type="hidden" name="role" value="customer"> 

  <div>
  <center>  <button type="submit" class="btn btn-primary mb-3" >Sign Up</button></center>
  </div>

</body>
</form>
  </html>
  @endsection