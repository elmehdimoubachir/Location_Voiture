@extends('Layout/Layout')
@section('title','Edit Client')
@section('content')
<div class="content" id="contenthide">
    <h2>Edit Client</h2>
    <form action="{{route('Client.update',['Client'=>$Client->id])}}" method="post">
    @csrf
    @method('PUT')
        <h5>Information Profision</h5>
        <div class="row">
            <div class="col-md-6">
                 <label for="">Last name</label>
                <input type="text" class="form-control" name="last_name" value="{{$Client->last_name}}" id="">
            </div>
            <div class="col-md-6">
                <div class="form-group">
                    <label for="">first name</label>
                    <input type="text" class="form-control" name="first_name" value="{{$Client->first_name}}" id="">
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-md-6">
                <div class="form-group">
                    <label for="">CIN</label>
                    <input type="text" class="form-control" name="CIN" value="{{$Client->CIN}}" id="">
                </div>
            </div>
            <div class="col-md-6">
                <div class="form-group">
                    <label for="">Age</label>
                    <input type="text" class="form-control" name="dateBrithy" value="{{$Client->dateBrithy}}" id="">
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-md-6">
                <div class="form-group">
                    <label for="">Address</label>
                    <input type="text" class="form-control" name="Address" value="{{$Client->Address}}" id="">
                </div>
            </div>
            <div class="col-md-6">
                <div class="form-group">
                    <label for="">Telephone</label>
                    <input type="tel" class="form-control" name="Telephone" value="{{$Client->Telephone}}" id="">
                </div>
            </div>
        </div>
        <h5>Details</h5>
        <div class="row">
            <div class="col-md-6">
                <div class="form-group">
                    <label for="">Pirme</label>
                    <input type="text" class="form-control" name="pirme" value="{{$Client->pirme}}" id="">
                </div> 
            </div>
            <div class="col-md-6">
                <div class="form-group">
                    <label for="">phpto CIN</label>
                    <input type="file" class="form-control" name=""  id="">
                </div>
            </div>
        </div>
        <button type="submit" class="btn btn-primary">Save Edit</button>
    </form>
</div>
@endsection