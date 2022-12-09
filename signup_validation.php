<?php
ob_start();
require "dbconnect.php";

$email=$_POST['email'];
$password=$_POST['password'];
$repass = $_POST['repass'];
$fn=$_POST['fn'];
$ln = $_POST['ln'];

if($password===$repass){
    $sql = "INSERT INTO users (firstname,lastname,email,password) VALUES 
('".$fn."','".$ln."','".$email."','".$password."')";
    $conn->query($sql);
    $conn->close();
    setcookie("isAuth",true,time()+60*60*24,'/');
    setcookie("user",$fn." ".$ln,time()+60*60*24,'/');
    header("location: index.php");

}
else{
    header("location: signup.php?err=Password");
}



ob_end_flush();
?>