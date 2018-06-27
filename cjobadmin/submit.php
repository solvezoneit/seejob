<?php
session_start();
require 'pages/db_conn.php';
//ini_set('upload_max_filesize', '10M');
date_default_timezone_set('Asia/Calcutta');
//$date = date("Y-m-d H:i:s");

if (isset($_POST['submit'])) {
    
	
	$city_id        = $_POST['city_id'];
	$city_name      = $_POST['city_name'];
    
   
   mysqli_query($con, "INSERT INTO city (city_id,city_name)
VALUES ('$city_id','$city_name')");
     echo "<head><script>alert('City Added Successfully.');</script></head></html>";
	echo "<meta http-equiv='refresh' content='0; url=add-city.php'>";
} else {
    echo "<head><script>alert('city NOT Added, Check Again');</script></head></html>";
    echo "<meta http-equiv='refresh' content='0; url=add-city.php'>";
    
}




?>