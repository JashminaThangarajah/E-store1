@extends('admin.layout')
@section('content')
<div class="row">
    <div class="col-lg-12 margin-tb">
        <div class="pull-left">
            <h2>Entroll a new Employee</h2>
        </div>
        <div class="pull-right">
           
        </div>
    </div>
</div>
<!-- error messages --> 
@if ($errors->any())
    <div class="alert alert-danger">
        <strong>Whoops!</strong> There were some problems with your input.<br><br>
        <ul>
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
@endif
<form action="{{ route ('user.store') }}" method="post" style="margin-left:150px ; margin-right:150px; ">
@csrf
     <div class="row">
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>Name:</strong>
                <input type="text" class="form-control" placeholder="Name" name="name">
            </div>
        </div>
        <div class="row">
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>Email:</strong>
                <input type="text" class="form-control" placeholder="email" name="email">
            </div>
        </div>
        
        <div class="row">
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
            <strong><label for="inputname" class="col-xs-12 col-sm-12 col-md-12">Gender:</label></strong>
  <select name="gender" class="form-select" aria-label="Default select example"> 
  <option selected disabled></option>
  <option value="M">M</option>
  <option value="F">F</option>
</select></div>
</div>

        <div class="row">
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>Address:</strong>
                <input type="text" class="form-control" placeholder="address" name="address">
            </div>
        </div>
        <div class="row">
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>Mobile No:</strong>
                <input type="text" class="form-control" placeholder="mobile" name="mobile">
            </div>
        </div>
        <div class="row">
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>Password:</strong>
                <input type="text" class="form-control" placeholder="password" name="password">
            </div>
        </div>
       
         <input type="hidden" name="role" value="employee">  
    <br><br>
        <div class="col-xs-12 col-sm-12 col-md-12 text-center">
                <button type="submit" class="btn btn-primary">Entroll</button>
        </div>
</form>
@endsection