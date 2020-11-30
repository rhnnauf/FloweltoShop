@extends('navbarGuest')

@section('container')

<style>
    @import url('https://fonts.googleapis.com/css2?family=Montserrat:wght@100&display=swap');
    #gambar{
    width: 400px;
    height: 400px;
    align-content: center;
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
                    <img src="{{asset('/'.$flowerQuery->flowerImage)}}" id="gambar">
                </div>
            </div>
            <div class="col-md-7 col-lg-7 py-5 px-5">
                <p class="text" style="padding-top: 5px;">Name:</p>
                <h4 class="text1">{{$flowerQuery->name}}</h4>
                <p class="text"style="padding-top: 5px;">Price:</p>
                <h4 class="text1">{{$flowerQuery->price}}</h4>
                <p class="text" style="padding-top: 5px;">Description:</p>
                <h4 class="text1">{{$flowerQuery->desc}}</h4>
                @if(!Auth::check()==true || Auth::user()->role==0)
                <form action="{{route('postCart',['id'=>$flowerQuery->id])}}" method="post">
                {{ csrf_field( )}}
                <div class="col-md-5 col-lg-5" style="margin-left: -10px;">
                    <div class="form-group">
                        <label class="text" for="qty">Quantity</label>
                        <input type="number" name="qty" value="1" min="0" max="100" class="form-control" id="qty">
                    </div>
                    
                    <button type="submit" class="btn btn-primary" style="margin-top: 10px">Add to Cart</button>
                </div>
                </form>
                @endif
            </div>
        </div>
    </div>
</section>

@endsection