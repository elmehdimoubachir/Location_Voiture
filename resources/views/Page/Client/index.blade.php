@extends('Layout/Layout')
@section('titlepage','Clients')
@section('title','List Client')
@section('content')
<div class="content" id="contenthide">
    <div class="titlepage">
        <h4>Liste Clients</h4>
    </div>
    <div class="row">
        <div class="col-md-9"></div>
        <div class="col-md-3 text-right">
            <a href="{{route('Client.create')}}" class="btn"> Add</a>
            <button type="submit">Import PDF</button>
        </div>
    </div>

    <table class="table-hover table-bordered">
        <thead>
            <tr>
                <th>N°Client</th>
                <th>Nom</th>
                <th>CIN</th>
                <th>Address</th>
                <th>Telephone</th>
                <th>Pirme</th>
                <th>Action</th>
            </tr>
        </thead>
        <tbody>
           @foreach($data as $info )
            <tr>
                <td>{{ $info['id'] }}</td>
                <td><a href="{{route('Client.show',['Client'=>$info['id']])}}">{{ $info['last_name'] }} {{ $info['first_name'] }}</a></td>
                <td>{{ $info['CIN'] }}</td>
                <td>{{ $info['Address'] }}</td>
                <td>{{ $info['Telephone'] }}</td>
                <td>{{ $info['pirme'] }}</td>
                <td class="text-right">
                    <button class="btn btn-danger">Delete</button>
                </td>
            </tr>
            @endforeach
        </tbody>
    </table>
</div>


@endsection