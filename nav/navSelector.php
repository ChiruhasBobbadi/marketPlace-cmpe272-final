<?php


if(!isset($_COOKIE['isAuth']) ){


    require "nav.php";

}else{
    require "nav_loggedin.php";
}

?>