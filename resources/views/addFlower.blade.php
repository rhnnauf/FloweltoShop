@extends ('navbarGuest')

@section ('container')

<form enctype="multipart/form-data" action="{{ route('insertFlower') }}" method="post">
<div class="container flex-middle" style="margin-bottom: 200px">
{{ csrf_field( )}}
  <h1 class="mid" style="margin-top : 20px">
      Add New Flower
  </h1>

  <br>

    <div class="form-group">
      <label for="category">Category</label>
      <select name="namaKategori" id="category" class="form-control">
      @foreach($categoryQuery as $cat)
        <option value="{{$cat->id}}">{{$cat->categoryName}}</option>
      @endforeach
      </select>
    </div>

    <div class="form-group">
      <label for="flowerName">Flower Name</label>
      <input name="namaBunga" type="text" class="form-control" id="flowerName">
      @if($errors->has('namaBunga'))
        <div style="color: red">
          {{$errors->first('namaBunga')}}
        </div>
      @endif
    </div>

    <div class="form-group">
        <label for="flowerPrice">Flower Price</label>
        <input name="hargaBunga" type="number" class="form-control" id="flowerPrice">
        @if($errors->has('hargaBunga'))
        <div style="color: red">
          {{$errors->first('hargaBunga')}}
        </div>
        @endif
    </div>

    <div class="form-group">
      <label for="description">Description</label>
      <textarea name="desBunga" class="form-control" id="Description">
      </textarea>
      @if($errors->has('desBunga'))
        <div style="color: red">
          {{$errors->first('desBunga')}}
        </div>
      @endif
    </div>

    <div class="form-group">
        <label for="attachment">Flower Image</label>
        <input name="gbrBunga" type="file" class="form-control-file" id="attachment">
        @if($errors->has('gbrBunga'))
        <div style="color: red">
          {{$errors->first('gbrBunga')}}
        </div>
        @endif
    </div>

    <button type="submit" class="btn btn-primary" value="submit" style="margin-top: 10px">Submit</button>
    
  

</div>
</form>

@endsection