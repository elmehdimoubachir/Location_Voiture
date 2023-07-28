<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
    <link rel="stylesheet" href="../assets/plugins/bootstrap/css/bootstrap.min.css" />

</head>
<style>
    .section{
        margin:10% auto;
        width:400px;
        box-shadow:0px 0px 1px 2px rgba(0 ,0 ,0 ,0.1);
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
        <form action="" method="post">
            <div class="form-group">
                <label for="">Email</label>
                <input type="text" class="form-control" name="username" id="">
            </div>
            <div class="form-group">
                <label for="">Password</label>
                <input type="password" class="form-control" name="password" id="">
            </div>
            <div class="row">
                <div class="col"><a href="/forgotpassword">forgot password ?</a></div>
                <div class="col"><button type="submit" class="btn btn-primary btnlogin">Login</button></div>
            </div>     
        </form>
    </div>
    
</body>
</html>