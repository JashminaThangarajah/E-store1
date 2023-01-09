
@section('content')
<div class="row">
    <div class="col-sm-8 offset-sm-2">
        <h3 class="display">You are successfully login to the system</h3></br>
        @if(isset(Auth::user()->email))
        <div class="alert alert-danger"> 
            <strong>WELCOME{{Auth::user()->email}}</strong>   
            <a href="#">Logout</a>
        </div>
        @else
            <script>window.location="/";</script>
        @endif

    </div>
</div>
@endsection