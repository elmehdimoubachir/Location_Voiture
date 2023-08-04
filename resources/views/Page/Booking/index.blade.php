@extends('Layout/Layout')
@section('title','Booking')
@section('content')
<div class="content" id="contenthide">
    <div class="row">
        <div class="col-md-9">
            <h3>Booking</h3>
        </div>
        <div class="col-md-3">
            <a href="{{ route('Reservation.create')}}" class="btn btn-primary">Booking</a> 
        </div>
    </div>
    <table class="table-hover table-bordered">
        <thead>
            <th>N°Booking</th>
            <th>Client</th>
            <th>Car</th>
            <th>Date Start</th>
            <th>Date End</th>
            <th>with Driver</th>
        </thead>
        <tbody>
            @foreach($booking as $data)
            <tr>
                <td><a href="{{ route('Reservation.show',['Reservation'=>$data->id]) }}">{{$data->N_RentCar}}</a></td>
                <td><a href="{{ route('Client.show',['Client'=>$data->id_client]) }}">{{$data->last_name}}  {{$data->first_name}}</a></td>
                <td><a href="{{ route('Car.show',['Car'=>$data->id_car]) }}">{{$data->Matricule}} / {{$data->Categore}} ({{$data->Model}})</a></td>
                <td>{{$data->Date_start}}</td>
                <td>{{$data->Date_end}}</td>
                <td>
                    @if($data->id_driver == 0)
                        <b>NON</b>
                    @else
                        <b>Yes</b>
                    @endif
                </td>
            </tr>    

            @endforeach
        </tbody>
    </table>
</div>

@endsection