<?php
 session_start();
include"../cjobadmin/api/db_config.php";
if(!empty($_POST['c-name']) || !empty($_POST['c-add']) || !empty($_POST['c-desc']) || !empty($_FILES['file']['name']))
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
				$targetPath = "../image/company-image/".$fileName;
				if(move_uploaded_file($sourcePath,$targetPath))
				{
					$uploadedFile = $fileName;
				}
			}
		}
		$com_name= $_POST['c-name'];
		$com_add = $_POST['c-add'];
		$com_desc = $_POST['c-desc'];
		$com_email =$_POST['c-email'];    
		
		//insert form data in the database
		$insert = $db->query("INSERT cj_company (`com_name`,`com_email`,`com_address`,`com_img`,`com_desc`,`add_date`) VALUES ('".$com_name."','".$com_email."','".$com_add."','".$uploadedFile."','".$com_desc."',NOW())");	

		if($insert)
		{		
			$_SESSION["msg"] = "Form has been submit";
			echo '<div class="alert alert-success alert-dismissible"><button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button><h4><i class="icon fa fa-check"></i> Success!</h4>'.$_SESSION['msg'].'</div>';
		}
		else
		{
			$_SESSION["msg"] = "Oops some problem occured...";
			echo '<div class="alert alert-danger alert-dismissible"><button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button><h4><i class="icon fa fa-check"></i> Alert!</h4>'.$_SESSION['msg'].'</div>';

		}
	}

?>
<script>
	window.setTimeout(function() {
		$(".alert").fadeTo(500, 0).slideUp(500, function(){
			$(this).remove(); 
		});
	}, 4000);
</script>