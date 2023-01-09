@extends('employee.layout')
@section('content')
<div class="row">
        <div class="col-lg-12 margin-tb">
            <div class="pull-left">
                <h2>Order Details</h2>
            </div>
        </div>
    </div>
   <br>

    <table class="table table-bordered">
        <tr>
            <th>No</th>
            <th>Product Name</th>
            <th>Detail</th>
            <th>Price</th>
            <th>Customer Name</th>
            <th>Customer Address</th>
            <th>Customer mobile no</th>
            <th>Date</th>
        </tr>
        @php($i=0)
       @foreach($orders as $order)
        <tr>
            <td>{{++$i}}</td>
            <td>{{$order->name}}</td>
            <td>{{$order->detail}}</td>
            <td>{{$order->price}}</td>
            <td>{{$order->name}}</td>
            <td>{{$order->address}}</td>
            <td>{{$order->mobile}}</td>
            <td>{{$order->created_at}}</td>
        </tr>
        @endforeach

    </table>

    @endsection
    