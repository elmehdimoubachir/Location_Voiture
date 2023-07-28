@extends('Layout/Layout')
@section('title','Driver')
@section('content')
<div class="content" id="contenthide">
<a href="{{route('Driver.edit',['Driver'=>$Driver['id']])}}" class="btn btn-info float-right">Edit</a>
    <h3>Driver</h3>
    <div class="row">
        <div class="col-md-6">
            <div class="imgDriver">
                <img src="" alt="" srcset="">
            </div>
        </div>
        <div class="col-md-6">
            <div class="row">
                <div class="col-md-3">Nom : </div>
                <div class="col-md-6">{{$Driver['last_name']}} {{$Driver['first_name']}}</div>
            </div>
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