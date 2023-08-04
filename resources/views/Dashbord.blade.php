@extends('Layout/Layout')
@section('title','Dashboard')
@section('content')
<div class="content" id="contenthide">
    <div class="row">
        <div class="col CD bg-primary">
            <a href="{{ route('Client.index') }}">
                <p id="titleD">Total Clients</p>
                <p id="NumD">{{$countClient}}</p>
                <div class="iconClient">
                    <img src="../assets/Images/customer.png" alt="" srcset="">
                </div>
            </a>
        </div>
        <div class="col CD bg-warning">
            <a href="{{ route('Car.index') }}">
                <p id="titleD">Total Cars</p>
                <p id="NumD">{{$CountCar}}</p>
                <div class="iconClient">
                    <img src="../assets/Images/1545951.png" alt="" srcset="">
                </div>
            </a>
        </div>
        <div class="col CD bg-info ">
            <a href="">
                <p id="titleD">Cars Disponible</p>
                <p id="NumD">{{$CarDispo}}</p>
                <div class="iconClient">
                    <img src="../assets/Images/sports-car.png" alt="" srcset="">
                </div>
            </a>
        </div>
    </div>
    <div class="row">
        <div class="col CD bg-success">
            <a href="{{ route('Driver.index') }}">
                <p id="titleD">Drivers</p>
                <p id="NumD">{{$countDriver}}</p>
                <div class="iconClient">
                    <img src="../assets/Images/Driver.png" alt="" srcset="">
                </div>
            </a>
        </div>
        <div class="col CD bg-warning">
        <p id="titleD">Total Mony</p>
            <p id="NumD">{{$TotalPric}} $ </p>
            <div class="iconClient">
                <img src="../assets/Images/Mony.png" alt="" srcset="">
            </div>
        </div>
        <div class="col CD bg-warning">
            <a href="{{ route('Reservation.index') }}">
                <p id="titleD">Car Booking</p>
                <p id="NumD">{{$carBooking}}</p>
                <div class="iconClient">
                    <img src="../assets/Images/CarBooking.png" alt="" srcset="">
                </div>
            </a>
        </div>
    </div>
    <br>
    <div class="row">
        <div class="col-md-8">
            <h5>Cars Disponible</h5>
            <table class="table-hover table-bordered">
                <thead>
                    <th>Matrucule</th>
                    <th>Photo</th>
                    <th>Marque</th>
                    <th>Modele</th>
                    <th>statu</th>
                </thead>
                <tbody>
                    @foreach($Car as $data)
                    <tr>
                    <td><a href="{{ route('Car.show',['Car'=>$data['id']]) }}">{{ $data['Matricule'] }}</a></td>
                        <td></td>
                        <td>{{$data->Marque}}</td>
                        <td>{{$data->Model}}</td>
                        <td>
                            @if($data['Stutat'] == 1)
                            <spam class="statuYes">Disponible</spam>
                            @elseif($data['Stutat'] == 0)
                            <spam class="statuNon">Reserived</spam>
                            @endif
                        </td>
                    </tr>

                    @endforeach

                </tbody>
            </table>
        </div>
        <div class="col-md-4">
            <h5>Top Clients</h5>
            <table class="table-hover table-bordered">
                <thead>
                    <th>Nom</th>
                    <th>Address</th>
                    <th>Telephone</th>
                </thead>
                <tbody>
                    @foreach($Client as $data)
                    <tr>
                    <td><a href="{{route('Client.show',['Client'=>$data['id']])}}">{{ $data['last_name'] }} {{ $data['first_name'] }}</a></td>
                        <td>{{$data->Address}}</td>
                        <td>{{$data->Telephone}}</td>
                    </tr>
                    @endforeach

                </tbody>
            </table>
        </div>
    </div>
</div>
@endsection