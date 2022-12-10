<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <link rel="stylesheet" href="styles.css">
    <title>Signup</title>
</head>
<body>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>


<?php require "nav/navSelector.php"; ?>


<div class="container" style="margin-top: 5% padding:2%">
    <div class="row">
        <div class="col-3"></div>
        <div class="col-6">
            <div class="container">
                <form method="post" action="signup_validation.php" style="margin-top: 10%">
                    <div class="form-row" style="margin-top: 5%">
                        <div class="row">
                            <div class="col-6">
                                <input type="text" class="form-control" placeholder="First name" name="fn" required>
                            </div>
                            <div class="col-6">
                                <input type="text" class="form-control" placeholder="Last name" name="ln" required>
                            </div>
                        </div>

                    </div>

                    <div class="form-row" style="margin-top: 5%">
                        <div class="col">
                            <input type="email" class="form-control" placeholder="Enter Email" name="email" required>
                        </div>
                    </div>

                    <div class="form-row" style="margin-top: 5%">

                        <div class="row">
                            <div class="col">
                                <input type="password" class="form-control" placeholder="Enter Password" name="password" required>
                            </div>
                            <div class="col">
                                <input type="password" class="form-control" placeholder="Re-enter Password" name="repass" required>
                            </div>
                        </div>

                    </div>

                    <div class="row">

                            <button type="submit" class="btn btn-primary" style="margin-top: 5%">Submit</button>

                    </div>




                </form>
            </div>

        </div>
        <div class="col-3"></div>
    </div>
</div>

<div class="row">
    <div class="col-3"></div>
    <div class="col-6" style="margin-top: 10%"> <?php
        $error_id = isset($_GET['err']) ? $_GET['err'] : "none";

        if ($error_id === "Password" ) {
            echo '<div class="alert alert-danger"> <strong> Password\'s don\'t match </strong> try again </div>';


        }
        ?>
    </div>
</div>

</body>
</html>