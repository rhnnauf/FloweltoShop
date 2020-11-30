@extends('navbarGuest')

@section('container')

<style>
    @import url('https://fonts.googleapis.com/css2?family=Montserrat:wght@100&display=swap');
    #gambar{
    width: 400px;
    height: 400px;
    align-content: center;
    }
    
    #desc{
      width: 300px;
      height: 70px;
    }

    body{
    background-color: #FFD5EA;
    }

    #kartu{
    width: 420px;
    height: 420px;
    align-items:  center;
    justify-content: center;
    background-color: lightgrey;
    flex-wrap: wrap;
    }

    .text{
    color: grey;
    font-family: 'Montserrat';
    font-weight: 700;
    }

    .text1{
    color: black;
    font-family: 'Montserrat';
    font-weight: 700;
    }

    
</style>

<section class="form">
    <div class="container">
        <div class="row">
            <div class="col-md-5 cold-lg-5 py-5">
                <div class="card" id="kartu">
                    <img src="{{asset('/'.$updateQuery->flowerImage)}}" id="gambar">
                </div>
            </div>
            <form method="POST" enctype="multipart/form-data" action="{{route('submitUpdateData',['id'=>$updateQuery->id]) }}">
            {{ csrf_field( )}}
              <div class="col-md-7 col-lg-7 py-5 px-5">
                  <p class="text" style="padding-top: 5px;">Category:</p>
                  <select name="namaKategori" class="form-control">
                    @foreach($categoryQuery as $cat)
                      <option 
                        @if($cat->id == $updateQuery->CategoryID)
                          selected
                        @endif
                          value="{{$cat->id}}">
                        {{$cat->categoryName}}
                      </option>
                    @endforeach
                  </select>

                  <p class="text"style="padding-top: 5px;">Flower name:</p>
                  <input name="namaBunga" value="{{$updateQuery->name}}" type="text" class="form-control">
                  @if($errors->has('namaBunga'))
                    <div style="color: red">
                      {{$errors->first('namaBunga')}}
                    </div>
                  @endif
                  <p class="text" style="padding-top: 5px;">Flower price:</p>
                  <input name="hargaBunga" value="{{$updateQuery->price}}" type="number" class="form-control">
                  @if($errors->has('hargaBunga'))
                    <div style="color: red">
                      {{$errors->first('hargaBunga')}}
                    </div>
                  @endif
                  <p class="text" style="padding-top: 5px;">Description:</p>
                  <textarea name="desBunga" class="form-control" id="desc">{{$updateQuery->desc}}</textarea>
                  @if($errors->has('desBunga'))
                    <div style="color: red">
                      {{$errors->first('desBunga')}}
                    </div>
                  @endif
                  <p class="text" style="padding-top: 5px;">Flower Image:</p>
                  <div class="form-group">
                    <input name="gbrBunga" type="file" class="form-control-file" id="exampleFormControlFile1">
                  </div>
                  
                  <input type="hidden" name="_method" value="put">
                  <button href="{{route('home')}}"type="submit" class="btn btn-primary" style="margin-top: 10px">Update</button>
                  
              </div>
            </form>
            
        </div>
    </div>
</section>

@endsection