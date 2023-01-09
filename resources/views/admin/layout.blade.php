<html>
    <head>
        <title>Title</title>
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KyZXEAg3QhqLMpG8r+8fhAXLRk2vvoC2f3B09zVXn8CA5QIVfZOJ3BCsw2P0p/We" crossorigin="anonymous">
    </head>
    <body>
        <div class="container">
		

        <div style="margin-left:10px;margin-right:10px;border:1px solid blue;padding:25px>
<form method= "post" action="#" style="margin-left:150px ; margin-right:150px ;padding:100px">
<center><h1 style="background-color:#0d6efd ">E-Store</h1></center>

        <nav class="nav nav-pills nav-fill">
  <a class="nav-link"  href="{{route ('admin.index') }}">Admin name</a>
  <a class="nav-link" href="{{route ('products.index') }}">Products</a>
  <a class="nav-link" href="{{route ('user.index') }}">Employees</a>
  <a class="nav-link" href="{{route('logout') }}">Logout</a>
  </nav>
  @yield('content')
        </div>
</div>
    </body>
</html>