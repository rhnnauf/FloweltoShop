@extends ('navbarGuest')

@section ('container')


<br>
<br>
<body>
<div class="container flex-middle">
<h1 class="mid">
    Register
</h1>
<form action="{{ route('registerInsert') }}" method="post">
{{ csrf_field( )}}
  <div class="form-group" >
    <label for="exampleInputEmail1" style="margin: 10px 10px 0 0">Username</label>
    <input type="text" name="username" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Enter Username">
    @if($errors->has('username'))
      <div style="color: red">
        {{$errors->first('username')}}
      </div>
    @endif
  </div>
  <div class="form-group">
    <label for="exampleInputEmail1">Email address</label>
    <input  name="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Enter email">
    @if($errors->has('email'))
      <div style="color: red">
        {{$errors->first('email')}}
      </div>
    @endif
  </div>
  <div class="form-group">
    <label for="exampleInputPassword1">Password</label>
    <input type="password" name="password" class="form-control" id="exampleInputPassword1" placeholder="Password">
    @if($errors->has('password'))
      <div style="color: red">
        {{$errors->first('password')}}
      </div>
    @endif  
  </div>
  <div class="form-group">
    <label for="exampleInputPassword1">Confirm Password</label>
    <input type="password" name="password_confirmation" class="form-control" id="exampleInputPassword1" placeholder="Confirm Password">
    @if($errors->has('password_confirmation'))
      <div style="color: red">
        {{$errors->first('password_confirmation')}}
      </div>
    @endif 
  </div>

  <div class="form-group">
      Gender
      <br>
      <input type="radio" id="male" name="gender" value="1">
      <label for="male">Male</label>
      <input type="radio" id="female" name="gender" value="2">
      <label for="female">Female</label>

      @if($errors->has('gender'))
      <div style="color: red">
        {{$errors->first('gender')}}
      </div>
     @endif 
  </div>

  <div class="form-group">
    <label for="exampleInputPassword1">Date of Birth</label>
    <input type="date" name="dob" class="form-control" id="date">
    @if($errors->has('dob'))
      <div style="color: red">
        {{$errors->first('dob')}}
      </div>
     @endif 
  </div>

  <div class="form-group">
    <label for="exampleInputPassword1">Address</label>
    <textarea name="address" class="form-control" id="address">
    </textarea>
    @if($errors->has('address'))
      <div style="color: red">
        {{$errors->first('address')}}
      </div>
    @endif 
  </div>


  <div class="mid">
    <button id="buttonSubmit" type="submit" value="Submit" class="btn btn-primary btn-sm">Submit</button>
  </div>
  

</form>

</body>

<br>
<br>


@endsection