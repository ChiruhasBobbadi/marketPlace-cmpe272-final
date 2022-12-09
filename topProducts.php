<!doctype html>
<html lang="en">
<head>
    <?php require "head.php"?>

    <title>Top Products</title>


</head>
<body>

<?php require "nav/navSelector.php" ?>


<h2  style="text-align: center;margin-top: 5%">Top viewed Products</h2>

<h3  style="margin: 5%;text-align: center">Burger Shack</h3>

<div class="row">
    <div class="col-1"></div>
    <?php
    $ass = array();
        $curl_handle = curl_init();
        curl_setopt($curl_handle, CURLOPT_URL, "http://chiruhas.com/BurgerShack-CMPE-272/curl_expose_topViewed.php");
        curl_setopt($curl_handle, CURLOPT_HEADER, 0);
        curl_setopt($curl_handle,CURLOPT_RETURNTRANSFER,true);
        $content = curl_exec($curl_handle);

       // echo $content;
        $contents = explode(",", $content);


        foreach ($contents as $c) {
            $temp = explode(":", $c);
            $ass[$temp[0]] = intval($temp[1]);
            echo "<div class='col-2'>
            
            <div class='card' style='padding: 2%; height:10rem'>
  <div class='card-body'>
    <h5 class='card-title'>{$temp[0]}</h5>
    <h6 class='card-subtitle mb-2 text-muted'>Product Views</h6>
    <p class='card-text'>{$temp[1]}</p>
   
  </div>
</div> </div>";


        }
        ?>
    <div class="col-1"></div>

</div>


<h3  style="margin: 5%;text-align: center">Watch</h3>

<div class="row">
    <div class="col-1"></div>
    <?php

    $curl_handle = curl_init();
    curl_setopt($curl_handle, CURLOPT_URL, "http://chiruhas.com/BurgerShack-CMPE-272/curl_expose_topViewed.php");
    curl_setopt($curl_handle, CURLOPT_HEADER, 0);
    curl_setopt($curl_handle,CURLOPT_RETURNTRANSFER,true);
    $content = curl_exec($curl_handle);

    // echo $content;
    $contents = explode(",", $content);

    $i=1;
    foreach ($contents as $c) {
        $temp = explode(":", $c);
        $ass[$temp[0]] = intval($temp[1]);
        echo "<div class='col-2'>
            
            <div class='card' style='padding: 2%; height:10rem'>
  <div class='card-body'>
    <h5 class='card-title'>{$temp[0]}</h5>
    <h6 class='card-subtitle mb-2 text-muted'>Product Views</h6>
    <p class='card-text'>{$temp[1]}</p>
   
  </div>
</div> </div>";
        $i++;

    }
    ?>
    <div class="col-1"></div>

</div>

<h3  style="margin: 5%;text-align: center">IphoneStore</h3>

<div class="row">
    <div class="col-1"></div>
    <?php

    $curl_handle = curl_init();
    curl_setopt($curl_handle, CURLOPT_URL, "http://chiruhas.com/BurgerShack-CMPE-272/curl_expose_topViewed.php");
    curl_setopt($curl_handle, CURLOPT_HEADER, 0);
    curl_setopt($curl_handle,CURLOPT_RETURNTRANSFER,true);
    $content = curl_exec($curl_handle);

    // echo $content;
    $contents = explode(",", $content);

    $i=1;
    foreach ($contents as $c) {
        $temp = explode(":", $c);
        $ass[$temp[0]] = intval($temp[1]);
        echo "<div class='col-2'>
            
            <div class='card' style='padding: 2%; height:10rem'>
  <div class='card-body'>
    <h5 class='card-title'>{$temp[0]}</h5>
    <h6 class='card-subtitle mb-2 text-muted'>Product Views</h6>
    <p class='card-text'>{$temp[1]}</p>
   
  </div>
</div> </div>";
        $i++;

    }
    ?>
    <div class="col-1"></div>

</div>

<h3  style="margin: 5%;text-align: center">GreenLeaf Elektronics</h3>

<div class="row">
    <div class="col-1"></div>
    <?php



    $curl_handle = curl_init();
    curl_setopt($curl_handle, CURLOPT_URL, "https://adeshlandge.com/exposetopviewed.php");
    curl_setopt($curl_handle, CURLOPT_HEADER, 0);
    curl_setopt($curl_handle,CURLOPT_RETURNTRANSFER,true);
    $content = curl_exec($curl_handle);

    // echo $content;
    $contents = explode(",", $content);

    $i=1;
    foreach ($contents as $c) {
        $temp = explode(":", $c);
        $ass[$temp[0]] = intval($temp[1]);
        echo "<div class='col-2'>
            
            <div class='card' style='padding: 2%; height:10rem'>
  <div class='card-body'>
    <h5 class='card-title'>{$temp[0]}</h5>
    <h6 class='card-subtitle mb-2 text-muted'>Product Views</h6>
    <p class='card-text'>{$temp[1]}</p>
   
  </div>
</div> </div>";
        $i++;

    }
    ?>
    <div class="col-1"></div>

</div>


<?php arsort($ass);?>

<h3  style="margin: 5%;text-align: center">Top Viewed among the Website</h3>
<div class="row">
    <div class="col-1"></div>
    <?php

$i=0;

    foreach ($ass as $k=>$val) {
        if($i==5)
            break;
        echo "<div class='col-2'>
            
            <div class='card' style='padding: 2%; height:10rem'>
  <div class='card-body'>
    <h5 class='card-title'>{$k}</h5>
    <h6 class='card-subtitle mb-2 text-muted'>Product Views</h6>
    <p class='card-text'>{$val}</p>
   
  </div>
</div> </div>";
        $i++;

    }
    ?>
    <div class="col-1"></div>

</div>
<br>
<br>

<div class="row">

</div>






</body>
</html>