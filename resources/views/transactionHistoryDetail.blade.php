@extends ('navbarGuest')

@section ('container')
<style>
    @import url('https://fonts.googleapis.com/css2?family=Montserrat:wght@100&display=swap');
    @import url('https://fonts.googleapis.com/css2?family=Poppins:wght@300&display=swap');
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
    text-align: center;
    }

    .text1{
    color: black;
    font-family: 'Montserrat';
    font-weight: 700;
    }

    #gbr{
        width: 60px;
        height: 60px;
        float: left;
    }

    #kotak1{
        width: 66px;
        height: 66px;
    }

    #alert{
    text-align: center;
    }

    #empty{
        text-align: center;
        font-style: italic;
        font-family: 'Montserrat';
        font-weight: 700;
    }

    #total1{
        font-family: 'Poppins';
        font-weight: 800;
        font-size: 18px;
    }

    #total2{
        font-family: 'Poppins';
        font-weight: 800;
        font-size: 28px;
    }

    
</style>

<br>

<div class="container" >
    <h1 class="text">
        Your Transaction at {{$tQuery -> created_at}}
    </h1>
    <br>

    
    <div class="alert alert-light"> 
    <table class="table table-hover">
        <thead>
            <tr>
            <th scope="col">PRODUCT</th>
            <th scope="col"></th>
            <th scope="col">PRICE</th>
            <th scope="col">QUANTITY</th>
            </tr>
        </thead>
        <tbody>
            
            @foreach($tDetailQuery as $t)
            <tr>
            <td id="kotak1">
                <div>
                <img src="{{asset('/'.$t->Image)}}" id="gbr">
                </div>
            </td>
            <td>
                <div style="font-weight: bold; margin-top: 7px;">
                    {{$t->Name}}
                </div>
                <div class="text1" style="font-style: italic;">
                    Category : {{$t->Category}}
                </div>
            </td>
            <td class="text1" >
                <div style=" margin-top: 17px;">
                    Rp. {{$t->Price}}
                </div>
            </td>
            <td>
                <div style=" margin-top: 17px;">
                {{$t->Quantity}}
                </div>
            </td>
            
            
            </tr>
            @endforeach
        </tbody>
        </table>
        
    
    </div>
        

    


</div>

@endsection