@extends('Layout/Layout')
@section('title','Offers')
@section('content')
<div class="content" id="contenthide">
    <div class="row m-3">
        <div class="col-md-9"><h3>Offers</h3></div>
        <div class="col-md-3">
            <a href="{{route('Offer.create')}}" class="btn btn-primary">Add</a>
        </div>
    </div>
    <div class="row m-3 rowshow">
        @foreach($Offers as $offer)
        <div class="col-md-3 card">
            <a href="{{route('Offer.show',['Offer'=>$offer->id])}}">
                <span class="span">New</span>
                <img src="{{url('assets/Images/'.$offer->Photo_Car)}}" class="imgOffer" alt="" srcset="">
                <div class="infoCar_O text-dark">
                    <h4>{{$offer->Marque}} {{$offer->Categore}}</h4><p>({{$offer->Model}})</p>
                </div>
                    <p class="text-muted">{{$offer->Discription}}</p>
                <div class="card-footer">
                    <b class=" text-danger">{{$offer->Days}} Days / {{$offer->Pric}}  DH</b>
                    <p class=" text-muted">To : {{$offer->Date_To}}</p>
                </div>
            </a>
        </div>
        @endforeach
    </div>
</div>
@endsection