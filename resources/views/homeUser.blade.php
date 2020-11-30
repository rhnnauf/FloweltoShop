@extends('navbarGuest')

@section('container')

<style>
  
  @import url('https://fonts.googleapis.com/css2?family=Montserrat:wght@100&display=swap');

  #gambar{
    width: 300px;
    height: 300px;
    
  }

  .card-title{
      color: white;
      font-family: 'Montserrat';
      font-weight: 800;
  }

  #kartu{
    width: 300px;
    height: 370px;
    align-items:  center;
    background-color: lightpink;
  }

  .mid{
    font-family: 'Montserrat';
    font-weight: 800;
  }

  #alert{
    text-align: center;
  }
</style>

@if(session()->has('success'))
  <div class="alert alert-success" id="alert"role="alert">
    {{session()->get('success')}}
  </div>
@endif




<div class="container">

  <br>
  <br>
    <h1 class="mid" style="margin-top: 10px">
        Welcome to Flowelto Shop
    </h1>

    <h2 class="mid" style="margin-top: 10px">
        The Best Flower Shop in Binus University
    </h2>

    <br>
    <br>
</div>

<div class="album">
  
    <div class="container">

      <div class="row">
      @foreach($flowerCatQuery as $flower)      
        <div class="col-lg-4">
          <a href="{{route('categoryView',['id'=>$flower->id])}}" class="text-decoration-none">
            <div class="card" id="kartu">
              <img src="{{asset('/'.$flower->categoryImage)}}" id="gambar"  alt="...">
                <div class="card-body">
                  <h5 class="card-title">{{$flower->categoryName}}</h5>
                </div>
            </div>
          </a>
        </div>
               
      @endforeach

      </div>
    </div>

  </div>

  <br>
  <br>

  <div class="row" style="justify-content: center">
  {{$flowerCatQuery->links()}}
  </div>
 
  
@endsection
