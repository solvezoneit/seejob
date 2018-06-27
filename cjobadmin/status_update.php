<?php
ob_start();
include 'api/db_config.php';
session_start();
if(@$_REQUEST["change_statuss"]=='1' && isset($_REQUEST["status"]))
{
	mysqli_query($db,"update cj_advertise set status='0' where id='".$_REQUEST["status"]."'");
	header("location:add_advertise.php");
	exit();
}
if(@$_REQUEST["change_statuss"]=='0' && isset($_REQUEST["status"]))
{
	mysqli_query($db,"update cj_advertise set status='1' where id='".$_REQUEST["status"]."'");
	header("location:add_advertise.php");
	exit();
}
?>
