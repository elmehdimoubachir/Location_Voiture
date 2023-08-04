<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
    
    <!-- bootsrap -->
    <link rel="stylesheet" href="{{ url('assets/plugins/bootstrap/css/bootstrap.min.css') }}" />

     <!-- css -->
     <link rel="stylesheet" href="{{ url('assets/css/style.css') }}">
     <!-- Icon  -->
     <link rel="icon" href="{{ url('assets/Images/iconapp.jpg')}}" type="imge/x-icon" />


</head>
<style>
    .section{
        margin:10% auto;
        width:400px;
        box-shadow: 0 4px 8px 3px rgba(0, 0, 0, 0.2);
        padding:20px;
        background-color:#fff;
    }
    .btnlogin{
        width:200px;
    }
</style>
<body>
    <center><h1>CarShop</h1></center>
    <div class="section">
        <center>
            <h2>Login</h2>
        </center>
        <div class="msgError">
            <p id="msg"></p>
        </div>
        <form action="{{route('Auth.store')}}" method="POST">
        @csrf
            <div class="form-group">
                <label for="">Email</label>
                <input type="text" class="form-control" name="email" id="">
                @error('email')
                <div class="form-error">
                    {{$message}}
                </div>
                @enderror
            </div>
            <div class="form-group">
                <label for="">Password</label>
                <input type="password" class="form-control" name="password" id="">
                @error('password')
                <div class="form-error">
                    {{$message}}
                </div>
                @enderror
            </div>
            <div class="row">
                <div class="col"><a href="/forgotpassword">forgot password ?</a></div>
                <div class="col"><button type="submit" class="btn btn-primary btnlogin">Login</button></div>
            </div>     
        </form>
    </div>
    
</body>
</html>