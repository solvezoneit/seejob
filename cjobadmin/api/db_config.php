<?php
	if(@$_SERVER['HTTP_HOST']=="localhost") 
	{
		@$db = mysqli_connect("localhost","root","","cjobcjob");
		$url = "//localhost/seejob.in";
	} else {
		@$db = mysqli_connect("132.148.154.97","xtvpm2l_seejob","GodhelpME@123","cjobcjob");
		$url = "//www.seejob.in"; 
	}
	if(mysqli_connect_errno($db)) {
		echo "Failed to connect to MySQL: " . mysqli_connect_error();
	}
	date_default_timezone_set('Asia/Kolkata');
?>