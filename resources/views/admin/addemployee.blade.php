@extends('admin.layout')
@section('content')
<div class="row">
        <div class="col-lg-12 margin-tb">
            <div class="pull-left">
                <h2>E-store</h2>
            </div>
            <br>
            <div class="pull-right">
                <a class="btn btn-success" href="{{route('user.create')}}"> Entroll new Employee</a>
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
            <th>Email</th>
            <th>Mobile</th>
            <th width="280px">Action</th>
        </tr>
        @php($i=0)
       @foreach($user as $emp)
        <tr>
            <td>{{++$i}}</td>
            <td>{{$emp->name}}</td>
            <td>{{$emp->email}}</td>
            <td>{{$emp->mobile}}</td>
            <td><form action="{{route('user.destroy',$emp->id)}}" method="POST">
            <a class="btn btn-info" href="{{ route ('user.show', $emp->id)  }}">Show</a>
            <a class="btn btn-info" href="{{ route ('user.edit', $emp->id)  }}">Edit</a>
            @csrf
            @method('DELETE')
           <button type="submit" class="btn btn-danger">Delete</button>
         </form></td>
        </tr>
        @endforeach
      

    </table>
    @endsection
