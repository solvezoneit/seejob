<?php
include '../api/db_config.php';
session_start();
if($_SESSION['FLAG']=='1')
{
	if(!empty($_POST['name']) || !empty($_POST['email']) || !empty($_POST['heading']) || !empty($_POST['startdate']) || !empty($_POST['enddate']) || !empty($_FILES['file']['name']))
	{
		$uploadedFile = '';
		if(!empty($_FILES["file"]["type"]))
		{
			$fileName = time().'_'.$_FILES['file']['name'];
			$valid_extensions = array("jpeg", "jpg", "png");
			$temporary = explode(".", $_FILES["file"]["name"]);
			$file_extension = end($temporary);
			if((($_FILES["file"]["type"] == "image/png") || ($_FILES["file"]["type"] == "image/jpg") || ($_FILES["file"]["type"] == "image/jpeg")) && in_array($file_extension, $valid_extensions))
			{
				$sourcePath = $_FILES['file']['tmp_name'];
				$targetPath = "../images/add/".$fileName;
				if(move_uploaded_file($sourcePath,$targetPath))
				{
					$uploadedFile = $fileName;
				}
			}
		}

		$heading= $_POST['heading'];
		$name = $_POST['name'];
		$email = $_POST['email'];    
		$startdate = $_POST['startdate'];
		$enddate= $_POST['enddate'];
		$ad_location= $_POST['ad_location'];
		$link= $_POST['link'];   
		$status = 1;

		
		
		//insert form data in the database
		  $insert = $db->query("INSERT cj_advertise (heading,name,email,upload_time,startdate,enddate,advertise_location,link,status,image) VALUES ('".$heading."','".$name."','".$email."',NOW(),'".$startdate."','".$enddate."','".$ad_location."','".$link."','".$status."','".$uploadedFile."')");

		
		
		 echo $insert?'ok':'err';
	}

	//..............Code for delete advertise............................

	if(isset($_GET['delete']))
	{
		$b=$_GET['delete'];
		$sql = "select image from cj_advertise where id='$b'";
		$run_sql = mysqli_query($db, $sql);
		$img_data = mysqli_fetch_array($run_sql);
		$img_name = $img_data['image'];
		//echo "$img_name";
		//$filePath = "../cjobadmin/images/";

		if (!unlink("../../cjobadmin/images/add/".$img_name))
		{
			$query1 = "DELETE FROM `cj_advertise` WHERE id='$b'";
			$run_query1 = mysqli_query($db, $query1);
			 
			if($run_query1)
			{
				
				echo "<script>window.open('../add_advertise.php','_self')</script>";
				echo "<script>alert('Your data is successfully deleted')</script>";
			}
				
		}
		else
		{
			$query = "DELETE FROM `cj_advertise` WHERE id='$b'";
			$run_query = mysqli_query($db, $query);
			 
			if($run_query)
			{
				
				echo "<script>window.open('../add_advertise.php','_self')</script>";
				echo "<script>alert('Your data is successfully deleted')</script>";
			}
				echo "<script>alert('Image deleted')</script>"; 
		}   
	}
}
else
{
	header('location:index.php');
}
?>
