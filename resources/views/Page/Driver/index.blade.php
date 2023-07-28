@extends('Layout/Layout')
@section('title','Driver')
@section('content')
<div class="content" id="contenthide">
    <div class="row">
        <div class="col-md-10">
            <div class="titlepage">
                <h4>Liste Drivers</h4>
            </div>
        </div>
        <div class="col-md-2">
            <a href="{{route('Driver.create')}}" class="btn"> Add</a>
        </div>
    </div>

    <table>
        <thead class="table-hover table-bordered">
            <th>Nom</th>
            <th>CIN</th>
            <th>Age</th>
            <th>Address</th>
            <th>Telephone</th>
            <th>N°Pirme</th>
        </thead>
        <tbody>
        @foreach($data as $info)
            <tr>
                <td><a href="{{ route('Driver.show',['Driver'=>$info['id']])}}">{{$info['last_name']}} {{$info['first_name']}}</a></td>
                <td>{{$info['CIN']}}</td>
                <td>{{$info['dateBrithy']}}</td>
                <td>{{$info['Address']}}</td>
                <td>{{$info['Telephone']}}</td>
                <td>{{$info['pirme']}}</td>
            </tr>
        @endforeach

        </tbody>
    </table>
    
</div>

@endsection