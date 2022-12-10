<?php

if(!isset($_COOKIE['isAuth'])){

    require "nav_home.php";


}else{
    require "nav_home_isloggedin.php";
}

?>