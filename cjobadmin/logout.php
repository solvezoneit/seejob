<?php 
session_start();
unset($_SESSION['FLAG']);
$_SESSION["err"]="You Are Has Been Log Out";
header("location:index.php?errmsg=$errmsg");
?>