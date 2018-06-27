<?php
include '../api/db_config.php';
if(!empty($_POST['title']) || !empty($_POST['desc']) || !empty($_POST['url']) || !empty($_POST['order_no'])|| !empty($_FILES['file']['name']))
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
				$targetPath = "../images/sliderimage/".$fileName;
				if(move_uploaded_file($sourcePath,$targetPath))
				{
					$uploadedFile = $fileName;
				}
			}
		}

		$title= $_POST['title'];
		$desc = $_POST['desc'];
		$url = $_POST['url'];    
		$order_no = $_POST['order_no'];		
		
		//insert form data in the database
		  $insert = $db->query("INSERT cj_slider (title,slider_desc,url,order_no,image,upload_date) VALUES ('".$title."','".$desc."','".$url."','".$order_no."','".$uploadedFile."',NOW())");

		 echo $insert?'ok':'err';
	}

		//..............Code for delete advertise............................

	if(isset($_GET['delete']))
	{
		$b=$_GET['delete'];
		$sql = "select image from cj_slider where id='$b'";
		$run_sql = mysqli_query($db, $sql);
		$img_data = mysqli_fetch_array($run_sql);
		$img_name = $img_data['image'];
		//echo "$img_name";
		//$filePath = "../cjobadmin/images/";

		if (unlink("../../cjobadmin/images/sliderimage/".$img_name))
		{
			$query = "DELETE FROM `cj_slider` WHERE id='$b'";
			$run_query = mysqli_query($db, $query);
			 
			if($run_query)
			{
				
				echo "<script>window.open('../slider.php','_self')</script>";
				echo "<script>alert('Your data is successfully deleted')</script>";
			}						
		}
		else
		{
			$query1 = "DELETE FROM `cj_slider` WHERE id='$b'";
			$run_query1 = mysqli_query($db, $query1);			 
			if($run_query1)
			{				
				echo "<script>window.open('../slider.php','_self')</script>";
				echo "<script>alert('Your data is successfully deleted')</script>";
			}	
			
		}   
	}
?>