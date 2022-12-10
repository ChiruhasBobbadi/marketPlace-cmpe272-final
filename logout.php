<?php

ob_start();

setcookie("isAuth",false,time() - 3600,'/');

setcookie("user","", time() - 3600,'/');

header("location: index.php");


ob_end_flush();



?>