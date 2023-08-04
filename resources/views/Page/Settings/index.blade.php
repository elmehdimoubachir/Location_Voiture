@extends('Layout/Layout')
@section('title','Setting')
@section('content')
<div class="content" id="contenthide">
    <h3>Setting</h3>
    <center><h4>Information Genirale</h4></center>
    <form action="{{ route('settings.update',['setting'=>$data->id]) }}" method="POST"  enctype="multipart/form-data">
    @csrf
    @method('PUT')
        <div class="row">
            <div class="col-md-12">
                <div class="row">
                    <div class="col-md-6">
                        <div class="form-group">
                            <label for="">Logo Agance</label>
                            <input type="file" name="LogoApp" class="" style="height:50px;width:300px;padding:10px;">
                            <img src="{{asset('assets/Images/'.$data->photo_App)}}" alt="" class="imgSetting" srcset="">
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="form-group">
                            <label for="">Min Logo Agance</label>
                            <input type="file" name="MinLogo" class="" style="height:50px;width:300px;padding:10px;">
                            <img src="{{asset('assets/Images/'.$data->Icon_App)}}" alt="" class="imgSetting" srcset="">   
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-md-6">
                <label for="">Nom Agance</label>
                <input type="text" class="form-control" name="Name_App" value="{{$data->Name_App}}" class="" placeholder="Nom application">
                    
            </div>

            <div class="col-md-6">
                <label for="">Addrese</label>
                <input type="text" class="form-control" name="Addrsse" value="{{$data->Addrsse}}" class="" placeholder="Agadir Morocco">
            </div>
        </div>
        <div class="row">
            <div class="col-md-6">
                <label for="">Telephone</label>
                <input type="text" class="form-control" name="Telephone" value="{{$data->Telephone}}" class="" placeholder="05 00 00 00 00">
            </div>
            <div class="col-md-6">
                <label for="">E-mail</label>
                <input type="text" class="form-control" name="Email" value="{{$data->Email}}" class="" placeholder="exomple@gmail.com">
            </div>
        </div>
        <div class="row">
            <div class="col-md-6">
                <label for="">Site Web</label>
                <input type="text" class="form-control" name="Site_Web" value="{{$data->Site_Web}}" class="" placeholder="www.exomple.com">
            </div>
            <div class="col-md-6">
                <label for="">N° Banque RIB </label>
                <input type="text" class="form-control" name="N_Banque" value="{{$data->N_Banque}}" class="" placeholder="8****************45">
            </div>
        </div>
        <center><h4 class="m-4">Information site Web</h4></center>
        <div class="row">
            <div class="col-md-6">
                <label for="">xxx</label>
                <input type="text" class="form-control" name="" class="">
            </div>
            <div class="col-md-6">
                <label for="">xxx</label>
                <input type="text" class="form-control" name="" class="">
            </div>
        </div>
        <br>
        <button type="submit" class="btn btn-primary">Save</button>
    </form>
</div>

@endsection