@extends('Layout/Layout')
@section('title','Add Offers')
@section('content')
<div class="content" id="contenthide">
    <h3 class="m-3">Add Offer</h3>
    <form action="{{route('Offer.store')}}" method="POST">
    @csrf
        <div class="row">
            <div class="col-md-6">
                <div class="form-group">
                    <label for="">Car</label>
                    <select name="id_Car" id="" class="form-control">
                        <option value="">-----Selected Car----------</option>
                        @foreach($data as $car)
                            <option value="{{$car->id}}">{{$car->Marque}} / Model : {{$car->Model}}</option>
                        @endforeach
                    </select>
                    @error('id_Car')
                    <div class="form-error">
                        {{$message}}
                    </div>
                    @enderror
                </div>
            </div>
            <div class="col-md-6">
                <div class="form-group">
                    <label for="">Days</label>
                    <input type="number" name="Days" id="" class="form-control">
                    @error('Days')
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
                    <label for="">Pric</label>
                    <input type="text" name="Pric" class="form-control" id="">
                    @error('Pric')
                    <div class="form-error">
                        {{$message}}
                    </div>
                    @enderror
                </div>
            </div>
            <div class="col-md-6">
                <div class="form-group">
                   
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-md-6">
                <div class="form-group">
                    <label for="">From</label>
                    <input type="date" name="Date_From" class="form-control" id="">
                </div>
            </div>
            <div class="col-md-6">
                <div class="form-group">
                    <label for="">To</label>
                    <input type="date" name="Date_To" class="form-control" id="">
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-md-6">
                <div class="form-group">
                  <label for="text">Description</label><br>
                  <textarea id="w3review" name="Decription" rows="4" cols="50" style=" width: 100%;
                    height: 150px;
                    padding: 12px 20px;
                    box-sizing: border-box;
                    border: 2px solid #ccc;
                    border-radius: 4px;
                    background-color: #f8f8f8;
                    font-size: 16px;
                    resize: none;"></textarea>
                     @error('Decription')
                    <div class="form-error">
                        {{$message}}
                    </div>
                    @enderror
                </div>
            </div>
        </div>
        <button type="submit" class="btn btn-primary">Save</button>
    </form>
</div>
@endsection