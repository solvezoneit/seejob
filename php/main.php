<?php
	session_start();
	include"cjobadmin/api/db_config.php";
	if(!isset($_SESSION["flag"])){header("location:index.php");}
	$profilerow = mysqli_fetch_array(mysqli_query($db,"select * from cj_user where id='".$_SESSION["id"]."'"));
?>
