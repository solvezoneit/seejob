<?php
include '../api/db_config.php';
session_start();
if($_SESSION['FLAG']=='1')
{
	 if(isset($_POST['submit']))
	 {
		if(!empty($_POST['title']) || !empty($_POST['conatct']) || !empty($_POST['conatct1']) || !empty($_POST['email']) || !empty($_POST['email1']) || !empty($_POST['addr']) || !empty($_POST['map']) || !empty($_POST['page_title']) || !empty($_POST['desc']) || !empty($_POST['keyword']) || !empty($_FILES['file']['name']))
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
					$targetPath = "../images/contact/".$fileName;
					if(move_uploaded_file($sourcePath,$targetPath))
					{
						$uploadedFile = $fileName;
					}
				}
			}
			$title= $_POST['title'];
			$conatct = $_POST['conatct'];
			$alt_conatct = $_POST['conatct1'];			
			$email= $_POST['email'];
			$alt_email = $_POST['email1'];		
			$addr= $_POST['addr'];
			$map = $_POST['map'];
			$page_title = $_POST['page_title'];			
			$desc= $_POST['desc'];
			$keyword = $_POST['keyword'];

				//insert form data in the database
				$insert = $db->query("INSERT cj_contact ( `title`, `contact`, `alt_contact`, `email`, `alt_email`, `address`, `map`, `page_title`, `page_desc`, `keyword`, `banner_img`, `add_date`) VALUES ('".$title."','".$conatct."','".$alt_conatct."','".$email."','".$alt_email."','".$addr."','".$map."','".$page_title."','".$desc."','".$keyword."','".$uploadedFile."',NOW())");	
				if($insert)
				{
					echo '<div class="alert alert-success alert-dismissible"><button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button><h4><i class="icon fa fa-check"></i> Success!</h4>Form has been submitted</div>';
			}else{
				
				echo '<div class="alert alert-danger alert-dismissible"><button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button><h4><i class="icon fa fa-ban"></i> Warning!</h4>oops some problem occured, please try again</div>';
			}
		}
	}


	//..............Code for delete advertise............................

	if(isset($_GET['delete']))
	{
		$b=$_GET['delete'];
		$sql = "select banner_img from cj_contact where id='$b'";
		$run_sql = mysqli_query($db, $sql);
		$img_data = mysqli_fetch_array($run_sql);
		$img_name = $img_data['banner_img'];
		//echo "$img_name";
		//$filePath = "../cjobadmin/images/";

		if (!@unlink("../../cjobadmin/images/contact/".$img_name))
		{
			$query1 = "DELETE FROM `cj_contact` WHERE id='$b'";
			$run_query1 = mysqli_query($db, $query1);
			 
			if($run_query1)
			{				
				echo "<script>window.open('../contact.php','_self')</script>";
				echo "<script>alert('Your data is successfully deleted')</script>";
			}	
		}
		else
		{
			$query = "DELETE FROM `cj_contact` WHERE id='$b'";
			$run_query = mysqli_query($db, $query);
			 
			if($run_query)
			{
				
				echo "<script>window.open('../contact.php','_self')</script>";
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