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
      text-align:  center;
  }

  #kartu{
    width: 300px;
    height: 415px;
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

  #button1{
      width: 142px;
      font-size: 12px;
      font-family: 'Montserrat';
      font-weight: 700;
    }
</style>






<div class="container">

  <br>
  <br>
    <h1 class="mid" style="margin-top: 10px">
        Manage Category
    </h1>

    

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
                <div>
                    <a href="{{route('updateCategoryView',['id'=>$flower->id])}}" type="button" id="button1" class="btn btn-outline-success">Update Category</a>
                    <form style="display:inline"action="{{route('submitDeleteCategoryData',['id'=>$flower->id])}}" method="post">
                        <input type="hidden" name="_method" value="delete">
                        {{ csrf_field( )}}
                        <button type="submit" id="button1" class="btn btn-outline-danger">Delete Category</button>
                    </form>
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

 
  
@endsection
