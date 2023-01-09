@extends('admin.layout')
@section('content')
<div class="row">
        <div class="col-lg-12 margin-tb">
            <div class="pull-left">
                <h2>E-store</h2>
            </div>
            <br>
            <div class="pull-right">
                <a class="btn btn-success" href="{{route('products.create')}}"> Create New Product</a>
            </div>
        </div>
    </div>
   <br>
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
            <th>Details</th>
            <th>Price</th>
            <th width="280px">Action</th>
        </tr>
        @php ($i=0)
        @foreach($product as $product1)
        <tr>
            <td>{{++$i}}</td>
            <td>{{$product1->name}}</td>
            <td>{{$product1->detail}}</td>
            <td>{{$product1->price}}</td>
            <td><form action="{{route('products.destroy',$product1->id)}}" method="POST">
            <a class="btn btn-info" href="{{ route ('products.show', $product1->id)  }}">Show</a>
            <a class="btn btn-info" href="{{ route ('products.edit', $product1->id)  }}">Edit</a>
            @csrf
            @method('DELETE')
           <button type="submit" class="btn btn-danger">Delete</button>
         </form></td>
        </tr>
    @endforeach

    </table>
    @endsection
