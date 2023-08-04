@extends('Layout/Layout')
@section('title','Cars')
@section('content')
<div class="content" id="contenthide">
    <div class="row">
        <div class="col-md-8">
            <h3>List Cars</h3>
        </div>
        <div class="col-md-4">
            <div class="row">
                <div class="col-md-6">
                    <a href="{{ route('Car.create')}}" class="btn btn-primary">Add</a> 
                </div>
                <div class="col-md-6">
                    <form action="/Carsearch" method="GET">
                    @csrf
                        <input type="search" class="txtsearch1" name="searchCar" id="search">
                        <button type="submit"></button>
                    </form>
                </div>
            </div>
        </div>
    </div>

    <table class="table-hover table-bordered">
        <thead>
            <th>Matricule</th>
            <th>Photo</th>
            <th>Marque</th>
            <th>Categore</th>
            <th>Modele</th>
            <th>Color</th>
            <th>Statu</th>
        </thead>
        <tbody>
            @foreach($data as $info)
            <tr>
                <td><a href="{{ route('Car.show',['Car'=>$info['id']]) }}">{{ $info['Matricule'] }}</a></td>
                <td><img src="{{asset('assets/Images/'.$info->Photo_Car)}}" alt="" class="imgCarindex" srcset=""></td>
                <td>{{ $info['Marque'] }}</td>
                <td>{{ $info['Categore'] }}</td>
                <td>{{ $info['Model'] }}</td>
                <td>{{ $info['Color'] }}</td>
                <td>
                    @if($info['Stutat'] == 1)
                    <spam class="statuYes">Disponible</spam>
                    @elseif($info['Stutat'] == 0)
                    <spam class="statuNon">Reserived</spam>
                    @endif
                </td>
            </tr>
            @endforeach
        </tbody>
    </table>
</div>
@endsection