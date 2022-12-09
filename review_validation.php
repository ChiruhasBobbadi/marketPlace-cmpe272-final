<?php
ob_start();
require "dbconnect.php";

$title=$_POST['title'];
$desc=$_POST['description'];
$rating = $_POST['rating'];
$user="";
if(isset($_COOKIE['user']) && strlen($_COOKIE['user'])!=0){

  $user = $_COOKIE['user'];
    if($rating==='Select a rating'){
        header("location: /marketPlace/addReview.php?err=rating");
    }else{
        $sql = "INSERT INTO reviews (title,description,rating,user) VALUES
('".$title."','".$desc."','".$rating."','".$user."')";
        $conn->query($sql);
        $conn->close();

        header("location: /marketPlace/reviews.php");

    }

}else{
    header("location: /marketPlace/addReview.php?err=login");
}






ob_end_flush();
?>