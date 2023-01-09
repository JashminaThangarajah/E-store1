@extends("example.title")
@section("menu")
<a href="{{url('content1')}}">content1</a>
<a href="{{url('content2')}}">content2</a>
<br><br><br><br>
@yield('content')
@endsection()