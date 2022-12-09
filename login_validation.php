<?php
ob_start();
require "dbconnect.php";

$email=$_POST['email'];
$password=$_POST['password'];

$sql = "SELECT * FROM users where email='$email' and password='$password'";
$result = $conn->query($sql);

if (mysqli_num_rows($result) === 0) {
    setcookie("isAuth",false,time()+60*60*24,'/');
    header("location: login.php?err=Login_Failed");

}else{
// set a cookie that user is authenticated
    echo "authenticated";
    setcookie("isAuth",true,time()+60*60*24,'/');
    while($row = $result->fetch_assoc()){
        $users = $row["firstname"]." ".$row["lastname"];
        setcookie("user",$users,time()+60*60*24,'/');
    }

    header("location: /marketPlace/index.php");
}


ob_end_flush();

?>
