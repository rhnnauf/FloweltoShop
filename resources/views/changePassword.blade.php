@extends ('navbarGuest')

@section('title','Change Password')

@section('container')


<div class="container flex-middle">
<br>
<h2 class="mid" style="margin-top: 10px; padding-bottom: 10px;">
    Change Password
</h2>
  <form action="{{ route('submitPassword') }}" method="POST">
  {{ csrf_field( )}}
    <div class="form-group">
      <label for="password">Your Password</label>
      <input name="oldPassword" type="password" class="form-control" id="password">
    </div>
    @if(session()->has('error1'))
    <div style="color: red">
        {{session()->get('error1')}}
      </div>
    @endif
    <div class="form-group">
      <label for="newPassword">New Password</label>
      <input name="newPassword" type="password" class="form-control" id="newPassword">
    </div>
    @if($errors->has('newPassword'))
      <div style="color: red">
        {{$errors->first('newPassword')}}
      </div>
    @endif

    @if(session()->has('error2'))
    <div style="color: red">
        {{session()->get('error2')}}
      </div>
    @endif
    <div class="form-group">
      <label for="confirmNewpassword">Confirm New Password</label>
      <input name="newPassword_confirmation" type="password" class="form-control" id="confirmNewpassword">
    </div>
    

      <button type="submit" class="btn btn-primary" style="margin-top: 20px">Submit</button>
  </form>
</div>

@endsection