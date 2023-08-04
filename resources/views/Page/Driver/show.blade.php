@extends('Layout/Layout')
@section('title','Driver')
@section('content')
<div class="content" id="contenthide">
<a href="{{route('Driver.edit',['Driver'=>$Driver['id']])}}" class="btn btn-info float-right">Edit</a>
    <h3>Driver</h3>
    <div class="">
        <div class="imgDriver">
            <img src="{{url('assets/Images/avatar2.png')}}" alt="" srcset="">
            <h2>{{$Driver['last_name']}} {{$Driver['first_name']}}</h2>
        </div>
        <div class="infoDriver">
            <div class="row">
                <div class="col-md-3">CIN : </div>
                <div class="col-md-6">{{$Driver['CIN']}}</div>
            </div>
            <div class="row">
                <div class="col-md-3">Age : </div>
                <div class="col-md-6"></div>
            </div>
            <div class="row">
                <div class="col-md-3">Address : </div>
                <div class="col-md-6">{{$Driver['Address']}}</div>
            </div>
            <div class="row">
                <div class="col-md-3">Telephone : </div>
                <div class="col-md-6">{{$Driver['Telephone']}}</div>
            </div>
            <div class="row">
                <div class="col-md-3">N°Pirme : </div>
                <div class="col-md-6">{{$Driver['pirme']}}</div>
            </div>
        </div>
    </div>
</div>

@endsection