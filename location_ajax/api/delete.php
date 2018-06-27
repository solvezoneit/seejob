<?php

	require 'db_config.php';

	$id  = $_POST["id"];

	$sql = "DELETE FROM cj_location WHERE id = '".$id."'";

	$result = $mysqli->query($sql);

	echo json_encode([$id]);
 
?>