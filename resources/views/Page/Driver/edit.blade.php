@extends('Layout/Layout')
@section('title',' Edit Driver')
@section('content')
<div class="content" id="contenthide">
    <h2>Edit Client</h2>
    <br>
    <form action="{{route('Driver.update',['Driver'=>$Driver->id])}}" method="post">
    @csrf
        <div class="row">
            <div class="col-md-6">
                <div class="form-group">
                    <label for="">Last name</label>
                    <input type="text" class="form-control" value="{{$Driver->last_name}}" name="last_name" id="">
                </div>
            </div>
            <div class="col-md-6">
                <div class="form-group">
                    <label for="">First name</label>
                    <input type="text" class="form-control" value="{{$Driver->first_name}}" name="first_name" id="">
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-md-12">
                <div class="form-group">
                    <label for="">Addrees</label>
                    <input type="text" class="form-control" value="{{$Driver->Address}}" name="Address" id="">
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-md-6">
                <div class="form-group">
                    <label for="">CIN</label>
                    <input type="text" class="form-control" value="{{$Driver->CIN}}" name="CIN" id="">
                </div>
                <div class="form-group">
                    <label for="">Date Birthiy</label>
                    <input type="date" class="form-control" value="{{$Driver->dateBrithy}}" name="dateBrithy" id="">
                </div>
            </div>
 
            <div class="col-md-6">
                <div class="form-group">
                    <label for="">Telephone</label>
                    <input type="tel" class="form-control" value="{{$Driver->Telephone}}" name="Telephone" id="">
                </div>
                <div class="form-group">
                    <label for="">N°Pirme</label>
                    <input type="text" class="form-control" value="{{$Driver->pirme}}" name="pirme" id="">
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-md-6">
                <div class="form-group">
                    <label for="">Photo Cart National</label>
                    <input type="file" name="photoCin" id="">
                </div>
            </div>
            <div class="col-md-6">
                <div class="form-group">
                    <label for="">Photo Pirme</label>
                    <input type="file" name="photoPirme" id="">
                </div>
            </div>
        </div>
        <button type="submit" class="btn btn-primary">Save Edit</button>
    </form>
</div>

@endsection