@extends('customer.layout')
@section('content')
<div class="row">
        <div class="col-lg-12 margin-tb">
            <div class="pull-left">
                <h2>E-store</h2>
            </div>
        </div>
    </div>
   <br>
  
    <table class="table table-bordered">
        <tr>
            <th>No</th>
            <th>Name</th>
            <th>Detail</th>
            <th>Price</th>
            <th width="280px">Actions</th>
        </tr>
        @php($i=0)
       @foreach($product as $orders)
        <tr>
            <td>{{++$i}}</td>
            <td>{{$orders->name}}</td>
            <td>{{$orders->detail}}</td>
            <td>{{$orders->price}}</td>
            <td>
            <a class="btn btn-info" href="{{route('ord', $orders->id)}}">Place Order</a>
           </td> 
        </tr>
        @endforeach
      

    </table>
    @endsection
    