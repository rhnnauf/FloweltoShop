@extends('navbarGuest')

@section('container')

<style>
   @import url('https://fonts.googleapis.com/css2?family=Montserrat:wght@100&display=swap');
    #gambar{
    width: 270px;
    height: 300px;
    align-items:  center;
    justify-content: center;
    }

    #kartu{
    width: 270px;
    height: 400px;
    align-items:  center;
    background-color: lightpink;
    align-items:  center;
    justify-content: center;
    margin-bottom: 10px;
    }

    #kartu1{
    width: 270px;
    height: 440px;
    align-items:  center;
    background-color: lightpink;
    align-items:  center;
    justify-content: center;
    margin-bottom: 10px;
    }

    body{
    background-color: #FFD5EA;
    }

    .mid{
      margin-top: 40px;
      text-align: center;
      color: black;
      font-family: 'Montserrat';
      font-weight: 700;
    }

    .card-body{
      text-align: center;
    }

    #button{
      width: 135x;
      font-size: 14px;
      font-family: 'Montserrat';
      font-weight: 700;
    }

    .card-title{
      color: white;
      font-family: 'Montserrat';
      font-weight: 700;
    }
</style>

<div class="container">
    <h1 class="mid">
        {{$categoryName->categoryName}}
    </h1>
</div>

<br>

<div class="container" style="margin-top: 20px;">
@if(!Auth::check() || Auth::user()->role==0)
  <div class="row">
  @foreach($searchCategory as $flower)      
        <div class="col-lg-3">
          <a href="{{route('productDetailView',['id'=>$flower->id])}}" class="text-decoration-none">
            <div class="card" id="kartu">
              <img src="{{asset('/'.$flower->flowerImage)}}" id="gambar"  alt="...">
                <div class="card-body">
                  <h5 class="card-title">{{$flower->name}}</h5>
                  <h7 class="card-title">Rp. {{$flower->price}}</h7>
                </div>
            </div>
          </a>
        </div>
               
      @endforeach
  </div>
  @else
  <div class="row">
    @foreach($searchCategory as $flower)      
        <div class="col-lg-3">
          <a href="{{route('productDetailView',['id'=>$flower->id])}}" class="text-decoration-none">
            <div class="card" id="kartu1">
              <img src="{{asset('/'.$flower->flowerImage)}}" id="gambar"  alt="...">
                <div class="card-body">
                  <h5 class="card-title">{{$flower->name}}</h5>
                  <h7 class="card-title">Rp. {{$flower->price}}</h7>
                </div>
                <div>
            <a href="{{route('updateView',['id'=>$flower->id])}}" type="button" id="button" class="btn btn-outline-success">Update Flower</a>
            <form style="display:inline"action="{{route('submitDeleteData',['id'=>$flower->id])}}" method="post">
                <input type="hidden" name="_method" value="delete">
                {{ csrf_field( )}}
                <button type="submit" id="button" class="btn btn-outline-danger">Delete Flower</button>
            </form>
          </div>
            </div>
          </a>
          
        </div>
               
      @endforeach
  </div>
  @endif

    
</div>
  


  
  
@endsection
