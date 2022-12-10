<?php

ob_start();
session_start();

setcookie("isAuth","",time() - 3600);
session_destroy();
setcookie("user","", time() - 3600);
    header("location: index.php");



ob_end_flush();

?>