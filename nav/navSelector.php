<?php

if(isset($_COOKIE['isAuth']) && $_COOKIE['isAuth']){

    require "nav_loggedin.php";

}else{
    require "nav.php";
}

?>