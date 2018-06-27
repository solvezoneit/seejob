<?php
include '../api/db_config.php';
session_start();
if(isset($_POST['addnew']))
{
	if(!empty($_POST['title']) || !empty($_POST['keyword']) || !empty($_POST['page_desc']) || !empty($_POST['url']) || !empty($_POST['name']) || !empty($_POST['body_part']) || !empty($_FILES['file']['name']))
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
				$targetPath = "../images/pages/".$fileName;
				if(move_uploaded_file($sourcePath,$targetPath))
				{
					$uploadedFile = $fileName;
				}
			}
		}
		$title= $_POST['title'];
		$keyword = $_POST['keyword'];
		$page_desc = $_POST['page_desc'];    
		$url = trim(preg_replace('/[^a-z0-9]+/', '-', str_replace('\'', '', html_entity_decode(stripslashes(strip_tags(strtolower($_POST['url'])))))), '-');

		
		$name= $_POST['name'];
		$body_part= $_POST['body_part'];
	    $chk = mysqli_num_rows(mysqli_query($db, "select * from cj_pages where name='".$name."' || url='".$url."' || page_title='".$title."'"));
		if(!$chk>0){
			//insert form data in the database
			$insert = $db->query("INSERT cj_pages (page_title,page_keyword,page_desc,url,name,body_part,add_date,banner_img) VALUES ('".$title."','".$keyword."','".$page_desc."','".$url."','".$name."','".$body_part."',NOW(),'".$uploadedFile."')");	

			$_SESSION["msg"] = "Form has been submit";
			echo '<div class="alert alert-success alert-dismissible"><button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button><h4><i class="icon fa fa-check"></i> Success!</h4>'.$_SESSION['msg'].'</div>';
		}else{
			$_SESSION["err"] = "Already exist";
			echo '<div class="alert alert-danger alert-dismissible"><button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button><h4><i class="icon fa fa-ban"></i> Warning!</h4>'.$_SESSION['err'].'</div>';
		}
	}
}
if(isset($_POST['update']))
{	
	$p_id=$_POST['id'];
	$title= $_POST['title'];
	$keyword = $_POST['keyword'];
	$page_desc = $_POST['page_desc'];    
	$url = trim(preg_replace('/[^a-z0-9]+/', '-', str_replace('\'', '', html_entity_decode(stripslashes(strip_tags(strtolower($_POST['url'])))))), '-');
	$name= $_POST['name'];
	$body_part= $_POST['body_part'];

	if($_FILES["file"]["name"]!='')
	{
		$img_nm1=mysqli_fetch_array(mysqli_query($db,"select banner_img from cj_pages where id='$p_id'"));
		@unlink("../images/pages/".$img_nm1['banner_img']);
		$imagename = $_FILES["file"]["name"];
		$image=rand()."_".strtolower($imagename);
		$bits = explode('.',$imagename);
		$file_ext=strtolower(end($bits));
		$expensions= array("jpg","jpeg","png","gif");
		if(in_array($file_ext,$expensions)=== false)
		{
			$_SESSION["err"] = "Please select a valid file format.<br>Extension not allowed, please choose a JPG,JPEG,PNG or GIF Images.";
			echo '<div class="alert alert-danger alert-dismissible"><button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button><h4><i class="icon fa fa-ban"></i> Warning!</h4>'.$_SESSION['err'].'</div>';
			exit;
		}
		else
		{
			move_uploaded_file($_FILES["file"]["tmp_name"],"../images/pages/".$image);
		}	
	}
	else
	{
		$img_nm1=mysqli_fetch_array(mysqli_query($db,"select banner_img from cj_pages where id='$p_id'"));
		$image=$img_nm1['banner_img'];
	}
	$update = mysqli_query($db,"UPDATE cj_pages SET 
	`page_title`='$title',
	`page_keyword`='$keyword',
	`page_desc`='$page_desc',
	`url`='$url',
	`name`='$name',
	`body_part`='$body_part',
	`banner_img`='$image' WHERE id='$p_id'");
	
	$_SESSION["msg"] = "Form has been submit";

	echo '<div class="alert alert-success alert-dismissible"><button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button><h4><i class="icon fa fa-check"></i> Success!</h4>'.$_SESSION['msg'].'</div>';
}
?>
<script>
	window.setTimeout(function() {
		$(".alert").fadeTo(500, 0).slideUp(500, function(){
			$(this).remove(); 
		});
	}, 4000);
</script>