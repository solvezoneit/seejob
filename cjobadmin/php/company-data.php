<?php
include '../api/db_config.php';
session_start();
if($_SESSION['FLAG']=='1')
{
	 if(isset($_POST['submit']))
	 {
		if(!empty($_POST['com_name']) || !empty($_POST['email']) || !empty($_POST['com_add']) || !empty($_POST['com_desc'])|| !empty($_FILES['file']['name']))
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
					$targetPath = "../images/company/".$fileName;
					if(move_uploaded_file($sourcePath,$targetPath))
					{
						$uploadedFile = $fileName;
					}
				}
			}
			$com_name= $_POST['com_name'];
			$email = $_POST['email'];
			$com_add = $_POST['com_add'];			
			$com_desc= $_POST['com_desc'];
			$user_id = $_SESSION['USERID'];

				//insert form data in the database
				$insert = $db->query("INSERT cj_company (user_id,com_name,com_email,com_address,com_desc,com_img,add_date) VALUES ('".$user_id."','".$com_name."','".$email."','".$com_add."','".$com_desc."','".$uploadedFile."',NOW())");	
				if($insert)
				{
					$_SESSION["msg"] = "Form has been submit";
					echo '<div class="alert alert-success alert-dismissible"><button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button><h4><i class="icon fa fa-check"></i> Success!</h4>'.$_SESSION['msg'].'</div>';
			}else{
				$_SESSION["err"] = "oops some problem occured, please try again";
				echo '<div class="alert alert-danger alert-dismissible"><button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button><h4><i class="icon fa fa-ban"></i> Warning!</h4>'.$_SESSION['err'].'</div>';
			}
		}
	}


	//..............Code for delete advertise............................

	if(isset($_GET['delete']))
	{
		$b=$_GET['delete'];
		$sql = "select com_img from cj_company where com_id='$b'";
		$run_sql = mysqli_query($db, $sql);
		$img_data = mysqli_fetch_array($run_sql);
		$img_name = $img_data['com_img'];
		//echo "$img_name";
		//$filePath = "../cjobadmin/images/";

		if (!@unlink("../../cjobadmin/images/company/".$img_name))
		{
			$query1 = "DELETE FROM `cj_company` WHERE com_id='$b'";
			$run_query1 = mysqli_query($db, $query1);
			 
			if($run_query1)
			{				
				echo "<script>window.open('../company.php','_self')</script>";
				echo "<script>alert('Your data is successfully deleted')</script>";
			}	
		}
		else
		{
			$query = "DELETE FROM `cj_company` WHERE com_id='$b'";
			$run_query = mysqli_query($db, $query);
			 
			if($run_query)
			{
				
				echo "<script>window.open('../company.php','_self')</script>";
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
<script>
	window.setTimeout(function() {
		$(".alert").fadeTo(500, 0).slideUp(500, function(){
			$(this).remove(); 
		});
	}, 4000);
</script>