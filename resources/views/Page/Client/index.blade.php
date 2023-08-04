@extends('Layout/Layout')
@section('titlepage','Clients')
@section('title','List Client')
@section('content')
<div class="content" id="contenthide">
    <div class="row">
        <div class="col-md-7">
            <div class="titlepage">
                <h4>Liste Clients</h4>
            </div>
        </div>
        <div class="col-md-5 text-right">
            <div class="row">
                <div class="col-md-3">
                    <a href="{{route('Client.create')}}" class="btn"> Add</a>
                </div>
                <div class="col-md-3">
                    <button type="submit" class="btn">Import PDF</button>
                </div>
                <div class="col-md-5">
                    <form action="/Clientsearch" method="GET">
                    @csrf
                        <input type="search" class="txtsearch1" name="searchClient" id="search">
                        <button type="submit"></button>
                    </form>
                </div>
            </div>
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
                    <button class="btn btn-danger" type="submit" onclick="Delete();">Delete</button>
                    <div class="logout" id="Delete">
                      <div class="formModel">
                        <form action="{{route('Client.destroy',['Client'=>$info->id])}}" method="POST">
                        @csrf
                        @method('DELETE')
                          <p>Are you sure Delete this Client ?</p>
                          <button type="submit" class="btn float-left">Yes</button>
                          <a href="javascript:void(0)" class="btn btn-drak float-right" onclick="DeleteNon();">Non</a>
                        </form>
                        </div>
                    </div>
                </td>
            </tr>
            @endforeach
        </tbody>
    </table>
</div>


@endsection