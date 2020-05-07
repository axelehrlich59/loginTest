<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">

    <title>logpage</title>
</head>
<body>
    <div class="d-flex justify-content-center mt-5">
        <h1>Thank you for sign up, now you have to connect ! </h1>
    </div>


    <div class="d-flex justify-content-center mt-5">
        <form method="post" action="login.inc.php">
         
            <div class="form-group">
                    <label for="">Email account</label>
                    <input type="email" class="form-control" name="mailuid">
            </div>
            <div class="form-group">
                    <label for="exampleInputEmail1">Password</label>
                    <input type="password" class="form-control" id="exampleInputEmail1" name="password">
                    
            </div>
            <button type="submit" class="btn btn-primary" name="login-submit">Login</button>
    </div>

</body>
</html>