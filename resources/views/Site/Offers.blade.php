@include('Site/head')
@include('Site/NavBar')
<section id="offers">
    <center><h1>Offers</h1></center>
    <div class="row m-3 ">
        @foreach($Offers as $offer)
        <div class="col-md-3 card">
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
        </div>
        @endforeach
    </div>
</section>