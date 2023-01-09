@extends('customer.layout')
@section('content')

   <!-- success alert message -->
   @if ($message = Session::get('success'))
        <div class="alert alert-success">
            <p>{{ $message }}</p>
        </div>
@endif
    <table class="table table-bordered">
        <tr>
            <th>No</th>
            <th>Name</th>
            <th>Detail</th>
            <th>Price</th>
            <th width="280px">Action</th>
        </tr>
        
        @php($i=0)
        @foreach ($products as $product)
        <tr>
            <td>{{++$i}}</td>
            <td>{{$product->name}}</td>
            <td>{{$product->detail}}</td>
            <td>{{$product->price}}</td>
            <td><form action="#" method="POST">
            <a class="btn btn-info" href="#">Place Order</a>
            
            @csrf
         </form></td>
        </tr>
        @endforeach

    </table>
    @endsection
