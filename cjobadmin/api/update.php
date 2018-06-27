<?php
	include '../api/db_config.php';
	$mysqli = $db;

	$id  = $_POST["id"];
	$post = $_POST;

	$sql = "UPDATE cj_location SET l1 = '".$post['title']."',l2 = '".$post['description']."' WHERE id = '".$id."'";

	$result = $mysqli->query($sql);

	$sql = "SELECT * FROM cj_location WHERE id = '".$id."'"; 

	$result = $mysqli->query($sql);

	$data = $result->fetch_assoc();
	echo json_encode($data);

?>