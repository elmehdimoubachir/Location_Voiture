@extends('Layout/Layout')
@section('title','Reservation')
@section('content')
<div class="content" id="contenthide">
    <div class="titlepage">
        <h4>Reservation</h4>
    </div>
    <form action="{{route('Reservation.store')}}" method="post">
    @csrf
        <div class="row">
            <div class="col-md-3">
                <div class="form-group">
                    <label for="">Client</label>
                    <select name="id_client" id="" class="form-control">
                        <option value="">-------------Selecetion-------------</option>
                        @foreach($Client as $info)
                            <option value="{{$info->id}}">{{$info->last_name}} {{$info->first_name}}</option>
                        @endforeach
                        @error('id_client')
                        <div class="form-error">
                            {{$message}}
                        </div>
                        @enderror
                    </select>
                </div>
            </div>
            <div class="col-md-3">
                <div class="form-group">
                    <label for="">Car</label>
                    <select name="id_car" id="" class="form-control">
                        <option value="">-------------Selecetion-------------</option>
                        @foreach($Car as $info)
                            <option value="{{$info->id}}">{{$info->Marque}} / Model : {{$info->Model}}</option>
                        @endforeach
                        @error('id_car')
                        <div class="form-error">
                            {{$message}}
                        </div>
                        @enderror
                    </select>
                </div>
            </div>
            <div class="col-md-3">
                <div class="form-group">
                    <input type="checkbox" name="" id="checkDeiver" onclick="isDriver()">
                    <label for="">if you need Driver Click here ?</label>
                </div>
            </div>
            <div class="col-md-3">
                <div class="form-group" id="Adddeiver">
                    <label for="">Driver</label>
                    <select name="id_driver" id="" class="form-control">
                        <option value="">-------------Selecetion-------------</option>
                        @foreach($Driver as $info)
                            <option value="{{$info->id}}">{{$info->last_name}} {{$info->first_name}}</option>
                        @endforeach
                    </select>
                </div>
            </div>
        </div>
        <div class="row">

        </div>
        <div class="row">
            <div class="col-md-4">
                <div class="form-group">
                    <label for="">Date start</label>
                    <input type="date" class="form-control" name="Date_start" id="">
                    @error('Date_start')
                    <div class="form-error">
                        {{$message}}
                    </div>
                    @enderror
                </div>
            </div>
            <div class="col-md-4">
                <div class="form-group">
                    <label for="">Date End</label>
                    <input type="date" class="form-control" value="" name="Date_end" id="">
                    @error('Date_end')
                    <div class="form-error">
                        {{$message}}
                    </div>
                    @enderror
                </div>
            </div>
            <div class="col-md-4">
                <div class="form-group">
                    <label for="">Pric</label>
                    <input type="text" class="form-control" name="Pric_Day" id="">
                </div>
            </div>
        </div>
        <button type="submit" class="btn btn-primary">Save</button>
    </form>
</div>

@endsection