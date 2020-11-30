@extends ('navbarGuest')

@section ('container')

<style>
    #tengah{
        text-align: center;
    }

    #empty{
        text-align: center;
        font-style: italic;
        font-family: 'Montserrat';
        font-weight: 700;
    }
</style>
<div class="container">
    <h1 class="mid">
        <br>
        Your Transaction History
        
    </h1>

    <br>

    @if($tQuery->isEmpty())
        <div class="alert alert-light" id="empty">
            Your cart is empty
        </div>
    @else
        @foreach($tQuery as $t)
        <a href="{{route('tDetailPost',['id'=>$t->id])}}">
            <div class="alert alert-light" id="tengah" role="alert">
                {{$t->created_at}}
            </div>
        </a>
        @endforeach
    @endif
</div>

@endsection