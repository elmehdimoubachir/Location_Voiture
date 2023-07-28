@extends('Layout/Layout')
@section('title','Edit Car')
@section('content')
<div class="content" id="contenthide">
    <form action="{{ route('Car.update',['Car'=>$Car->id]) }}" method="POST">
    @csrf
    @method('PUT')
        <h3>Edit Car</h3>
        <div class="row">
            <div class="col-md-6">
                <div class="form-group">
                    <label for="">Matricule</label>
                    <input type="text" class="form-control" value="{{$Car->Matricule}}" name="Matricule" id="">
                </div>
            </div>
            <div class="col-md-6">
                <div class="form-group">
                    <label for="">Marque</label>
                    <input type="text" class="form-control" value="{{$Car->Marque}}" name="Marque" id="">
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-md-6">
                <div class="form-group">
                    <label for="">Modele</label>
                    <input type="text" class="form-control" value="{{$Car->Model}}" name="Model" id="">
                </div>
            </div>
            <div class="col-md-6">
                <div class="form-group">
                    <label for="">Categore</label>
                    <input type="text" class="form-control" name="Categore" value="{{$Car->Categore}}" id="">
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-md-6">
                <div class="form-group">
                    <label for="">Color</label>
                    <input type="text" class="form-control" value="{{$Car->Color}}" name="Color" id="">
                </div>
            </div>
            <div class="col-md-6">
                <div class="form-group">
                    <label for="">Prix</label>
                    <input type="text" class="form-control" value="{{$Car->Prix}}" name="Prix" id="">
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-md-6">
                <div class="form-group">
                    <label for="">Photo Car</label>
                    <input type="file" class="" name="" id="">
                </div>
            </div>
            <div class="col-md-6">

            </div>
        </div>

        <button type="submit" class="btn btn-primary">Save Edit</button>
    </form>
</div>
@endsection