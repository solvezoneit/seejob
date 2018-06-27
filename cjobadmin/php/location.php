<?php
	include '../api/db_config.php';
	// $db = mysqli_connect("localhost","root","","cjobcjob");
	if(isset($_POST["deleteid"]))
	{
		$id = $_POST["deleteid"];
		$delete_location = mysqli_query($db,"delete from cj_location where id='$id'") or die (mysqli_error($db));
		if($delete_location)
		{
			// header('Location: ' . $_SERVER['HTTP_REFERER']);
			include"loc_view.php";
		}
	}
	else if(isset($_POST["enterlocation"]))
	{
		$tl = $_POST["tl"];
		$l1 = $_POST["l1"];
		$l2 = $_POST["l2"];
		$l2 = explode(',',$l2);
		foreach($l2 as $sublocation)
		{
			$insert_location = mysqli_query($db,"insert into cj_location values('','$tl','$l1','$sublocation')") or die (mysqli_error($db));
			if($insert_location)
			{
				// $msg = '<i class="fa fa-check-square-o"></i> Uploaded Successfully...!!!';
			}
		}
		// echo @$msg;
		include"loc_view.php";
	}
?>
