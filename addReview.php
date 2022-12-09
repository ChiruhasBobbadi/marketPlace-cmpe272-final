<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Reviews</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <link rel="stylesheet" href="styles.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.1/css/all.min.css" integrity="sha512-MV7K8+y+gLIBoVD59lQIYicR65iaqukzvf/nwasF0nqhPay5w/9lJmVM2hMDcnK1OnMGCdVK+iQrJ7lzPJQd1w==" crossorigin="anonymous" referrerpolicy="no-referrer" />
</head>
<body>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>

<?php require "nav/navSelector.php"; ?>

<div class="container">
    <div class="row">
        <div class="col-3"></div>
        <div class="col-6">

            <form method="post" action="review_validation.php" style="margin-top: 5%">
                <div class="form-group">
                    <label for="exampleInputEmail1">Review Title</label>
                    <input type="text" name="title" class="form-control"  placeholder="Enter Review Title" required>
                    <small " class="form-text text-muted">Enter the title that you want to set to the review</small>
                </div>
                <div class="form-group" style="margin-top: 5%">
                    <label for="exampleInputEmail1">Review Description</label>
                    <textarea class="form-control" name="description" rows="3" placeholder="Enter review Description" required></textarea>
                </div>

                <div class="form-group" style="margin-top: 5%">

                    <select class="form-control" name="rating" required>
                        <option>Select a rating</option>
                        <option>0</option>
                        <option>0.5</option>
                        <option>1</option>
                        <option>1.5</option>
                        <option>2</option>
                        <option>2.5</option>
                        <option>3</option>
                        <option>3.5</option>
                        <option>4</option>
                        <option>4.5</option>
                        <option>5</option>

                    </select>
                </div>

                <div class="row">
                    <button type="submit" class="btn btn-primary" style="margin-top: 3%">Submit</button>
                </div>

            </form>

        </div>
    </div>
</div>

<div class="row">
    <div class="col-4"></div>
    <div class="col-4" style="margin-top: 10%"> <?php
        $error_id = isset($_GET['err']) ? $_GET['err'] : "none";

        if ($error_id === "rating" ) {
            echo '<div class="alert alert-danger"> <strong> Choose an appropriate rating </strong> recheck and try again </div>';

        }else if($error_id === "login" ){
            echo '<div class="alert alert-danger"> <strong> Please login before posting a review </strong></div>';

        }
        ?>
    </div>
</div>




</body>
</html>