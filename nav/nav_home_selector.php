<?php

if(isset($_COOKIE['isAuth']) && $_COOKIE['isAuth']){

    require "nav_home_isloggedin.php";

}else{
    require "nav_home.php";
}

?>