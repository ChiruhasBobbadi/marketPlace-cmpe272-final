<!doctype html>
<html lang="en">
<head>

    <title>Reviews</title>
    <?php require "head.php"?>


</head>
<body>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p"
        crossorigin="anonymous"></script>


<?php require "nav/navSelector.php"; ?>


<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
      integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM"
        crossorigin="anonymous"></script>


<div class="dropup position-absolute bottom-0 end-0 rounded-circle m-5">


    <button onclick="window.location.href='/marketPlace/addReview.php'" type="button" class="btn btn-success btn-lg hide-toggle">
        <i class="fa-solid fa-plus"></i>
    </button>


</div>


<div class="row">
    <div class="col-4"></div>
    <div class="col-4">
        <?php
        require "dbconnect.php";


        $sql = "SELECT * FROM reviews order by id desc ";

        $result = $conn->query($sql);

        while ($row = $result->fetch_assoc()) {

            $full = intval($row['rating']);
            $half = 0;
            $empty = 0;
            if ($full != $row['rating']) {
                $half = 1;
                $empty = 4 - $full;
            }else{
                $empty = 5 - $full;
            }


            $star = '<span style="display: flex;align-items: flex-end">';

            for ($x = 0; $x <$full; $x++) {
                $star = $star.'<i class="fa-solid fa-star" style="color: gold"></i>';
            }

            if($half==1){
                $star=$star.'<i class="fa-solid fa-star-half-stroke" style="color: gold"></i>';
            }

            for ($x = 0; $x <$empty; $x++) {
                $star = $star.'<i class="fa-regular fa-star" style="color: gold"></i>';
            }

            $star=$star.'</span>';



            echo "
<br>
             
              <div class='container'>
    <div class='card' >
        <div class='card-body'>
        <div class='row'>
        
        <div class='col-8'>
         <h5 class='card-title' >{$row['title']}</h5>
            </div>
            <div class='col-4'>
            
            {$star}

            </div>
            
        
        </div>
            <p class='card-text'>{$row['description']}</p>
            <p class='card-text'>Posted by : {$row['user']}</p>

        </div>
    </div>
</div>
            
                        
                      
    ";
        }


        ?>
    </div>
</div>


</body>
</html>