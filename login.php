<?php
session_start();
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
    <title>Login</title>
</head>
<body>
    <div class="form-container d-flex justify-content-center mt-5">
        <form method="post" action="views/submit.inc.php">
      <!--  <div class="form-group">
                <label for="">Name account</label>
                <input type="text" class="form-control" name="mailuid">
        </div> --> 
        <div class="form-group">
                <label for="">Name account</label>
                <input type="text" class="form-control" name="uidUsers">
        </div>
        <div class="form-group">
                <label for="exampleInputEmail1">Email address</label>
                <input type="email" class="form-control" id="exampleInputEmail1" name="email" aria-describedby="emailHelp">
                <small id="emailHelp" class="form-text text-muted">We'll never share your email with anyone else.</small>
        </div>
        <div class="form-group">
                <label for="exampleInputPassword1">Password</label>
                <input type="password" class="form-control" name="password" id="exampleInputPassword1">
        </div>
        
        <div class="form-group d-none">
                <label for="exampleInputPassword1">Name account</label>
                <input type="text" class="form-control" name="idUser" id="exampleInputPassword1">
        </div>
        

            <button type="submit" class="btn btn-primary" name="button-submit">Sign up</button>
            </form>

         
    </div> 
    

</body>
</html>