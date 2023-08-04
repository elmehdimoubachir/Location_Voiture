@extends('Layout/Layout')
@section('title','Booking')
@section('content')
<div class="content" id="contenthide">
    <a href="" class="btn btn-info float-right">Edit</a>
    <div class="row">
        <div class="col-md-6">
            <h2>Client</h2>
            <center>
                <div class="imgClient">
                    <img src="{{url('assets/Images/avatar2.png')}}" alt="" srcset="">
                </div>
                <h3><a href=""></a>{{$Reservation->first_name}} {{$Reservation->last_name}}</h3>
            </center>
            <br>
            
            <span>CIN : </span> <h5>{{$Reservation->CIN}}</h5>
            <span>Age : </span> <h5>22</h5>
            <span>Address : </span> <h5>{{$Reservation->Address}}</h5>
            <span>Telephone : </span> <h5>{{$Reservation->Telephone}}</h5>
        </div>
        <div class="col-md-6">
            <h2>Car</h2>
            <center>
                <div class="imgCar" style="height:300px;">
                    <img src="{{asset('assets/Images/'.$Reservation->Photo_Car)}}" alt="" srcset="" >
                </div>
                <h3>{{$Reservation->Marque}} ({{$Reservation->Model}})</h3>
            </center>
            
            <span>Matricule : </span> <h5>{{$Reservation->Matricule}}</h5>
            <span>Categore : </span> <h5>{{$Reservation->Categore}}</h5>
            <span>Color : </span> <h5>{{$Reservation->Color}}</h5>
            <span>Prix : </span> <h5>{{$Reservation->Prix}}</h5>
        </div>
    </div>

    <div class="row">
        <div class="col-md-9">
            <span>Date Satrt</span> <b>{{$Reservation->Date_start}}</b>
            <span>Date End</span> <b>{{$Reservation->Date_end}}</b>
        </div>
        <div class="col-md-3">
            <span>Prix</span> <b>{{$Reservation->Pric_Day}}  $ </b>
        </div>
    </div>
</div>

@endsection