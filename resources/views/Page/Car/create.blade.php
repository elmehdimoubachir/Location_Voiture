@extends('Layout/Layout')
@section('title','Add Car')
@section('content')
<div class="content" id="contenthide">
    <form action="{{route('Car.store')}}" method="post" enctype="multipart/form-data">
    @csrf
        <h3>Add Car</h3>
        <div class="row">
            <div class="col-md-6">
                <div class="form-group">
                    <label for="">Matricule</label>
                    <input type="text" class="form-control" name="Matricule" id="">
                    @error('Matricule')
                     <div class="form-error">
                         {{$message}}
                     </div>
                    @enderror
                </div>
            </div>
            <div class="col-md-6">
                <div class="form-group">
                    <label for="">Marque</label>
                    <input type="text" class="form-control" name="Marque" id="">
                    @error('Marque')
                     <div class="form-error">
                         {{$message}}
                     </div>
                    @enderror
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-md-6">
                <div class="form-group">
                    <label for="">Modele</label>
                    <input type="text" class="form-control" name="Model" id="">
                    @error('Model')
                     <div class="form-error">
                         {{$message}}
                     </div>
                    @enderror
                </div>
            </div>
            <div class="col-md-6">
                <div class="form-group">
                    <label for="">Categore</label>
                    <input type="text" class="form-control" name="Categore" id="">
                    @error('Categore')
                     <div class="form-error">
                         {{$message}}
                     </div>
                    @enderror
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-md-6">
                <div class="form-group">
                    <label for="">Color</label>
                    <input type="text" class="form-control" name="Color" id="">
                </div>
            </div>
            <div class="col-md-6">
                <div class="form-group">
                    <label for="">Prix</label>
                    <input type="text" class="form-control" name="Prix" id="">
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-md-6">
                <div class="form-group">
                    <label for="">Photo Car</label>
                    <input type="file" class="" name="Photo_Car" id="">
                </div>
            </div>
            <div class="col-md-6">

            </div>
        </div>

        <button type="submit" class="btn btn-primary">Save</button>
    </form>
</div>
@endsection