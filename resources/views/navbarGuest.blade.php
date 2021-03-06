<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous">
    <link rel="stylesheet" type="text/css" href="css/style.css" >
    <script type="text/javascript" src="{{ URL::asset('js/jquery.js') }}"></script>

    <title>@yield('title')</title>
  </head>
  <body>

<nav class="navbar navbar-expand-lg navbar-light bg-light">
  <a class="navbar-brand" href="{{route('home')}}">Flowelto Shop</a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>

  <div class="collapse navbar-collapse" id="navbarSupportedContent">
    <ul class="navbar-nav mr-auto">
    @if(!Auth::check())
          <a class="nav-link" href="{{route('loginView')}}">Login</a>
          <a class="nav-link" href="{{route('registerView')}}">Register</a>
        @else
          @if(Auth::user()->role==1 )
          <li class="nav-item dropdown">
            <a class="nav-link dropdown-toggle" href="#" id="navbarDropdownMenuLink" role="button" data-toggle="dropdown">
            MANAGER
            </a>
            <div class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
              <a class="dropdown-item" href="{{route('addFlowerView')}}">Add Flower</a>
              <a class="dropdown-item" href="{{route('manageCategoryView')}}">Manage Categories</a>
              <a class="dropdown-item" href="{{route('changePasswordView')}}">Change Password</a>
              <a class="dropdown-item" href="{{route('logout')}}">Logout</a>
            </div>
            </li>
          @else
          <li class="nav-item dropdown">
            <a class="nav-link dropdown-toggle" href="#" id="navbarDropdownMenuLink" role="button" data-toggle="dropdown">
              USER
            </a>
            <div class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
              <a class="dropdown-item" href="{{route('showCart')}}">My Cart</a>
              <a class="dropdown-item" href="{{route('transactionView')}}">Transaction History</a>
              <a class="dropdown-item" href="{{route('changePasswordView')}}">Change Password</a>
              <a class="dropdown-item" href="{{route('logout')}}">Logout</a>
            </div>
                </li>
          @endif

        @endif
      <li class="nav-item dropdown">
        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
        Categories
        </a>
        <div class="dropdown-menu" aria-labelledby="navbarDropdown">
          @foreach($categoryQuery as $category) 
          <a class="dropdown-item" href="{{route('categoryView',['id'=>$category->id])}}">{{$category->categoryName}}</a>
          @endforeach
        </div>
      </li>
      <a class="nav-link" id="tanggal"></a>
    </ul>
    <form action="{{route('searchView')}}" method="get" class="form-inline my-2 my-lg-0">
      <input name="search" class="form-control mr-sm-2" type="search" placeholder="Search" aria-label="Search">
      <button class="btn btn-sm btn-outline-secondary" type="submit">Search</button>
    </form>
  </div>
</nav>


  @yield('container')

    
    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js" integrity="sha384-B4gt1jrGC7Jh4AgTPSdUtOBvfO8shuf57BaghqFfPlYxofvL8/KUEfYiJOMMV+rV" crossorigin="anonymous"></script>
  
    <script>
      var d = new Date();
      var n = d.toDateString();
      document.getElementById("tanggal").innerHTML = n;
    </script>

    

  </body>

</html>

