<?php 
session_start();
session_unset();
session_destroy();
// $_SESSION["err"]="You Are Has Been Log Out";
header("location:".$_SERVER["HTTP_REFERER"]);
?>