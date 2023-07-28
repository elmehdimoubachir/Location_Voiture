@extends('Layout/Layout')
@section('title','Car')
@section('content')
<div class="content" id="contenthide">
<a href="{{route('Car.edit',['Car'=>$Car['id']])}}" class="btn btn-info float-right">Edit</a>
    <div class="row">
        <div class="col-ms-6">
            <div class="imgCar">
                <center><h2>Matricule : {{$Car['Matricule']}}</h2></center>
                <img src="" alt="" srcset="" >
            </div>
        </div>
        <div class="col-md-6 infocar">
            <div class="row">
                <div class="col-md-6">
                    <div class="form-group">
                        <label for="">Marque : </label>
                        <b>{{$Car['Marque']}}</b>
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="form-group">
                        <label for="">Modele : </label>
                        <b>{{$Car['Model']}}</b>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-md-6">
                    <div class="form-group">
                        <label for="">Categore : </label>
                        <b>{{$Car['Categore']}}</b>
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="form-group">
                        <label for="">Color : </label>
                        <b>{{$Car['Color']}}</b>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-md-6">
                    <div class="form-group">
                        <label for="">Prix : </label>
                        <b>{{$Car['Prix']}}</b>
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="form-group">
                        <!-- <label for="">Satut : </label>
                        <b>{{$Car['Stutat']}}</b> -->
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection