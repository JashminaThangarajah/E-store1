@extends('customer.layout')
@section('content')

<form action="{{route('order.store')}}" method="post" style="margin-left:150px ; margin-right:150px; ">
@csrf
    <div class="row">
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>Product Name:</strong>
                {{$product->name}}
            </div>
        </div>

        <div class="col-xs-12 col-sm-12 col-md-12"></div>
        <label for="employee" class="col-xs-12 col-sm-12 col-md-12"><strong>Employee Name : </strong></label>
        <div class="col-sm-4">
        <select name="employee_id" class="form-select"  aria-label="Default select example" required>
            @foreach($employee as $emp)
            <option value="{{$emp->id}}">{{$emp->name}}</option>
            @endforeach
        </select>
        </div>
           

        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>price:</strong>
                {{$product->price}}
            </div>
        </div>
        <input type="hidden" name="product_id" value="{{ $product->id }}">
        <input type="hidden" name="customer_id" value="{{ Auth::user()->id }}">

        <div class="col-auto">
  <center>  <button type="submit"  class="btn btn-primary mb-3" >Order</button></center>
  </div>
 
    </div>
    </form> 
    @endsection