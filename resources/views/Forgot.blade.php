<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Forgot password</title>
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
    .btnsent{
        width:200px;
    }
</style>
<body>
<div class="section">
        <center>
            <h2>Verify your Email</h2>
        </center>
        <div class="msgError">
            <p id="msg"></p>
        </div>
        <form action="" method="post">
            <div class="form-group">
                <label for="">Email</label>
                <input type="text" class="form-control" name="username" id="">
            </div>
            <div class="row">
                <div class="col"><a href="{route('/login')}">Login</a></div>
                <div class="col"><button type="submit" class="btn btn-primary btnsent">Sent</button></div>
            </div>         
        </form>
    </div>
</body>
</html>
