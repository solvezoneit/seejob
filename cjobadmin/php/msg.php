<?php
include '../api/db_config.php';
session_start();

if($_SESSION['FLAG']=='1')
{
	//..................To fetch user email behalf of Radion button of employer or job seeker.................
	
	if(isset($_POST['employ']))
	{
		$result = [];
		$emp_data =$_POST['employ'];
		$sql ="select email from cj_user where role='$emp_data'";
		$run_sql =mysqli_query($db, $sql);
		while($row = mysqli_fetch_array($run_sql))
		{
			array_push($result,$row['email']);
		}
		echo json_encode($result);
	}
	if(isset($_POST['job_seeker1']))
	{
		$result = [];
		$job_seeker2=$_POST['job_seeker1'];
		$sql ="select email from cj_user where role='$job_seeker2'";
		$run_sql =mysqli_query($db, $sql);
		while($row = mysqli_fetch_array($run_sql))
		{
			array_push($result,$row['email']);
		}
		echo json_encode($result);
	}

	//..................To fetch template behalf of subject........................................

	if(isset($_POST["sub_id"]))
	{
		$sql = "SELECT * FROM cj_template WHERE id='".$_POST["sub_id"]."'";
		$result =mysqli_query($db, $sql);

		while($row =mysqli_fetch_array($result))
		{
			echo $temp = $row['template'];
			//echo html_entity_decode($temp);
			//echo json_encode($row);		
		}
	}
	//...................To Send message/or insert data...............................
	if(isset($_POST['insert']))
	{
		$sub = $_POST['subject1'];
		$msg = $_POST['myEditor1'];
		$email = $_POST['email1'];
		$admin_email = $_SESSION['EMAIL'];
		if($sub == '' || $msg == '' || $email == '')
		{
			echo '<div class="alert alert-danger alert-dismissible"><button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button><h4><i class="icon fa fa-check"></i> Warning!</h4>please fill all fields</div>';
			exit();
		}	
		foreach ($email as $u_id)
		{
			$sql = "INSERT INTO cj_message (`from`, `to`, `subject`, `message`, `date`) VALUES ('$admin_email','$u_id','$sub','$msg',NOW())";
			$result = $db->query($sql);
		}
		if($result)
		{		
			echo '<div class="alert alert-success alert-dismissible"><button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button><h4><i class="icon fa fa-check"></i> Success!</h4>Form has been submit</div>';
		}
		else
		{ 		
			echo '<div class="alert alert-danger alert-dismissible"><button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button><h4><i class="icon fa fa-ban"></i> Warning!</h4>oops some problem occured, please try again</div>';
		}
	}

}
else
{
	header('location:index.php');
}

?>




