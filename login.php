<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <link rel="stylesheet" href="styles.css">
    <title>Login</title>
</head>
<body>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>


<?php require "nav/navSelector.php"; ?>




<div class="container" >
    <div class="row">
        <div class="col-4"></div>
        <div class="col-4">
            <form method="post" action="login_validation.php" style="margin-top: 10% padding:2%">
                <div class="form-group">
                    <label for="exampleInputEmail1">Email address</label>
                    <input type="email" name="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Enter email" required>
                    <small id="emailHelp" class="form-text text-muted">We'll never share your email with anyone else.</small>
                </div>
                <div class="form-group">
                    <label for="exampleInputPassword1">Password</label>
                    <input type="password" name="password" class="form-control" id="exampleInputPassword1" placeholder="Password" required>
                </div>
                <button type="submit" class="btn btn-primary" style="margin-top: 3%">Submit</button>
            </form></div>
        <div class="col-4"></div>
    </div>
</div>

<div class="row">
    <div class="col-4"></div>
    <div class="col-4" style="margin-top: 10%"> <?php
        $error_id = isset($_GET['err']) ? $_GET['err'] : "none";

        if ($error_id === "Login_Failed" ) {
            echo '<div class="alert alert-danger"> <strong> Login_Failed </strong> recheck and try again </div>';


        }
        ?>
    </div>
</div>


</body>
</html>