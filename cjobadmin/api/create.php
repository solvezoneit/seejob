<?php
	include '../api/db_config.php';
	$mysqli = $db;
	$post = $_POST;
	$l2 = $post["description"];
	$l2 = explode(',',$l2);
	foreach($l2 as $sublocation)
	{
		$sql = "INSERT INTO cj_location (tl,l1,l2) VALUES ('".$post['tl']."','".$post['title']."','".$sublocation."')";
		$result = $mysqli->query($sql);
	}	
	// $tl = $_POST["tl"];
	// $l1 = $_POST["title"];
	// $l2 = $_POST["description"];
	// $l2 = explode(',',$l2);
	// foreach($l2 as $sublocation)
	// {
		// $insert_location = mysqli_query($mysqli,"insert into cj_location values('','$tl','$l1','$sublocation')") or die (mysqli_error($mysqli));
	// }	
	
	$sql = "SELECT * FROM cj_location Order by id desc LIMIT 1"; 
	$result = $mysqli->query($sql);

	$data = $result->fetch_assoc();
	echo json_encode($data);
	
?>