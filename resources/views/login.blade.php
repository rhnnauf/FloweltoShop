@extends ('navbarGuest')

@section ('container')



<div class="container flex-middle">

<br>
<br>
<h1 class="mid">
    Login
</h1>
<form action="{{ route('dataLogin') }}" method="post">
{{ csrf_field() }}
  <div class="form-group">
    <label for="exampleInputEmail1">Email address</label>
    <input type="email" name="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Enter email">
  </div>
  <div class="form-group">
    <label for="exampleInputPassword1">Password</label>
    <input type="password" name="password" class="form-control" id="exampleInputPassword1" placeholder="Password">
  </div>

  


  @if($errors->any())
      <div style="color: red">
        {{$errors->first()}}
      </div>
      <br>
  @endif 

  <a href="#">Forgot password?</a>

  <div class="form-check">
  
      <input  type="checkbox" class="form-check-input" id="exampleCheck1">
      <label  class="form-check-label" for="exampleCheck1">Remember Me</label>
  </div>
    <br>

  <div class="mid">
    <button id="buttonSubmit" type="submit" value="Submit" class="btn btn-primary btn-sm">Submit</button>
  </div>
  
  
</form>
</div>
</div>

@endsection