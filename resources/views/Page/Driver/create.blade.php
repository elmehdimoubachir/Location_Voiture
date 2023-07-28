@extends('Layout/Layout')
@section('title','Add Driver')
@section('content')
<div class="content" id="contenthide">
    <h2>Add Driver</h2>
    <br>
    <form action="{{route('Driver.store')}}" method="post">
    @csrf
        <div class="row">
            <div class="col-md-6">
                <div class="form-group">
                    <label for="">Last name</label>
                    <input type="text" class="form-control" name="last_name" id="">
                </div>
            </div>
            <div class="col-md-6">
                <div class="form-group">
                    <label for="">First name</label>
                    <input type="text" class="form-control" name="first_name" id="">
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-md-6">
                <div class="form-group">
                    <label for="">CIN</label>
                    <input type="text" class="form-control" name="CIN" id="">
                </div>
                <div class="form-group">
                    <label for="">Date Birthiy</label>
                    <input type="date" class="form-control" name="dateBrithy" id="">
                </div>
            </div>
 
            <div class="col-md-6">
                <div class="form-group">
                    <label for="">Telephone</label>
                    <input type="tel" class="form-control" name="Telephone" id="">
                </div>
                <div class="form-group">
                    <label for="">N°Pirme</label>
                    <input type="text" class="form-control" name="pirme" id="">
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-md-12">
                <div class="form-group">
                    <label for="">Adresse</label>
                    <input type="text" class="form-control" name="Address" id="">
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-md-6">
                <div class="form-group">
                    <label for="">Photo Cart National</label>
                    <input type="file" name="" id="">
                </div>
            </div>
            <div class="col-md-6">
                <div class="form-group">
                    <label for="">Photo Pirme</label>
                    <input type="file" name="" id="">
                </div>
            </div>
        </div>
        <button type="submit" class="btn btn-primary">Save</button>
    </form>
</div>

@endsection