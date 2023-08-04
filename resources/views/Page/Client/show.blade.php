@extends('Layout/Layout')
@section('title','Client')
@section('content')
<div class="row Upinfo" id="contenthide">
        <div class="col-md-12">
            <div class="row">
                <div class="col-md-2">
                    <div class="imgClient">
                        <img src="{{url('assets/Images/avatar2.png')}}" alt="" srcset="">
                    </div>
                </div>
                <div class="col-md-6">
                    <h3>{{ $Client['last_name'] }} {{$Client['first_name']}}</h3>
                    <p></p>
                    <p>Address : {{$Client['Address']}}</p>
                </div>
            </div>
        </div>
    </div>
<div class="content showclient" id="contenthide">
<a href="{{route('Client.edit',['Client'=>$Client['id']])}}" class="btn btn-info float-right">Edit</a>
    <br>

    <h5>Informations Profision</h5>

    <div class="row">
        <div class="col-md-6">
            <div class="form-group">
                <label for="">Last name</label>
                <spam class="form-control" name="" id="" >{{$Client['last_name']}}</spam>
            </div>
        </div>
        <div class="col-md-6">
            <div class="form-group">
                <label for="">first name</label>
                <spam class="form-control" name="" id="" >{{$Client['first_name']}}</spam>
            </div>
        </div>
    </div>

    <div class="row">
        <div class="col-md-6">
            <div class="form-group">
                <label for="">CIN</label>
                <spam class="form-control" name="" id="" >{{$Client['CIN']}}</spam>
            </div>
        </div>
        <div class="col-md-6">
            <div class="form-group">
                <label for="">Age</label>
                <spam class="form-control" name="" id="" >{{$Client['dateBrithy']}}</spam>
            </div>
        </div>
    </div>

    <div class="row">
        <div class="col-md-6">
            <div class="form-group">
                <label for="">Address</label>
                <spam class="form-control" name="" id="" >{{$Client['Address']}}</spam>
            </div>
        </div>
        <div class="col-md-6">
            <div class="form-group">
                <label for="">Telephone</label>
                <spam class="form-control" name="" id="" >{{$Client['Telephone']}}</spam>
            </div>
        </div>
    </div>

    <h5>Details</h5>

    <div class="row">
        <div class="col-md-6">
            <div class="form-group">
                <label for="">Pirme</label>
                <spam class="form-control" name="" id="" >{{$Client['pirme']}}</spam>
            </div>
        </div>
        <div class="col-md-6">
            <div class="form-group">
                <label for="">Auter</label>
                <spam class="form-control" name="" id="" ></spam>
            </div>
        </div>
    </div>





</div>


@endsection