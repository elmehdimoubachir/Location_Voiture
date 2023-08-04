@extends('Layout/Layout')
@section('title','Add Client')
@section('content')
<div class="content" id="contenthide">
    <h2>Add Client</h2>
    <form action="{{route('Client.store')}}" method="post" enctype="multipart/form-data">
        @csrf
        <h5>Information Profision</h5>
        <div class="row">
            <div class="col-md-6">
                <label for="">Last name</label>
                <input type="text" class="form-control" name="last_name" id="">
                @error('last_name')
                <div class="form-error">
                    {{$message}}
                </div>
                @enderror
            </div>
            <div class="col-md-6">
                <div class="form-group">
                    <label for="">first name</label>
                    <input type="text" class="form-control" name="first_name" id="">
                    @error('first_name')
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
                    <label for="">CIN</label>
                    <input type="text" class="form-control" name="CIN" id="">
                    @error('CIN')
                    <div class="form-error">
                        {{$message}}
                    </div>
                    @enderror
                </div>
            </div>
            <div class="col-md-6">
                <div class="form-group">
                    <label for="">dateBrithy</label>
                    <input type="date" class="form-control" name="dateBrithy" id="">
                    @error('dateBrithy')
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
                    <label for="">Address</label>
                    <input type="text" class="form-control" name="Address" id="">
                    @error('Address')
                    <div class="form-error">
                        {{$message}}
                    </div>
                    @enderror
                    
                </div>
            </div>
            <div class="col-md-6">
                <div class="form-group">
                    <label for="">Telephone</label>
                    <input type="tel" class="form-control" name="Telephone" id="">
                    @error('Telephone')
                    <div class="form-error">
                        {{$message}}
                    </div>
                    @enderror
                </div>
            </div>
        </div>
        <h5>Details</h5>
        <div class="row">
            <div class="col-md-6">
                <div class="form-group">
                    <label for="">Pirme</label>
                    <input type="text" class="form-control" name="pirme" id="">
                </div> 
            </div>
            <div class="col-md-6">
                <div class="form-group">
                    <label for="">phpto CIN</label>
                    <input type="file" class="form-control" name="image" id="">
                </div>
            </div>
        </div>
        <button type="submit" class="btn btn-primary">Save</button>
    </form>
</div>
@endsection