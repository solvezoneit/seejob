<?php
	ob_start();
	session_start();
	include"../cjobadmin/api/db_config.php";
	if(isset($_POST["companyinsert"]))
	{
		$user_id = $_SESSION["user_id"];
		$com_name = $_REQUEST['name'];
		$com_email = $_REQUEST['email'];
		$com_address = $_REQUEST['add'];
		// str_replace("'","&#39;",$_REQUEST['desc']);
		$com_desc = htmlspecialchars($_REQUEST['desc'],ENT_QUOTES);
		
		$name_chk = mysqli_num_rows(mysqli_query($db,"select * from cj_company where com_name='".$com_name."' && user_id='".$user_id."'"));
		if($name_chk > 0)
		{
			$_SESSION["err"] = "Company Name Already Registered.<br>Change Company Name.";
			echo '<div class="alert alert-danger alert-dismissible"><button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button><h4><i class="icon fa fa-ban"></i> Warning!</h4>'.$_SESSION['err'].'</div>';
		} else {
			if($_FILES["image"]["name"]!='')
			{
				$imagename = $_FILES["image"]["name"];
				$image=rand()."_".strtolower($imagename);
				$bits = explode('.',$imagename);
				$file_ext=strtolower(end($bits));
				$expensions= array("jpg","jpeg","png","gif");
				if(in_array($file_ext,$expensions)=== false)
				{
					$_SESSION["err"] = "Please select a valid file format.<br>Extension not allowed, please choose a JPG,JPEG,PNG or GIF Images.";
					echo '<div class="alert alert-danger alert-dismissible"><button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button><h4><i class="icon fa fa-ban"></i> Warning!</h4>'.$_SESSION['err'].'</div>';
					exit();
				}
				else
				{
					move_uploaded_file($_FILES["image"]["tmp_name"],"../image/company/".$image);
				}	
			}
			else
			{
				$image='';
			}
			$com_insert = mysqli_query($db,"INSERT INTO `cj_company`(
											`user_id`, `com_name`, `com_email`, `com_address`, `com_desc`, `com_img`, `add_date`
											) VALUES (
											'$user_id','$com_name','$com_email','$com_address','$com_desc','$image',NOW()
											)") or die(mysqli_error($db));
			// $com_insert = mysqli_query($db,"INSERT INTO cj_company 
											// (`user_id`,`com_name`,`com_email`,`com_address`,`com_desc`,`com_img`,`add_date`
											// ) VALUES (
											// '$user_id','$com_name','$com_email','$com_address','$com_desc','$image',Now()
											// )") or die(mysqli_error($db));
			if($com_insert){
				// $_SESSION["msg"] = "Form has been submitted";
				// echo'<div class="box-body"><div class="alert alert-success alert-dismissible"><button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button><h4><i class="icon fa fa-check"></i> Success!</h4>'.$_SESSION['msg'].'</div></div>'; 
				include'../employer-company-view.php';
			}
		}
	}
	if(isset($_POST["companyedit"]))
	{
		$com_id = $_POST["companyedit"];
		$user_id = $_SESSION["user_id"];
		$com_name = $_REQUEST['name'];
		$com_email = $_REQUEST['email'];
		$com_address = $_REQUEST['add'];
		$com_desc = htmlspecialchars($_REQUEST['desc'],ENT_QUOTES);
		
		// $name_chk = mysqli_num_rows(mysqli_query($db,"select * from cj_company where com_name='".$com_name."' && user_id='".$user_id."'"));
		// if($name_chk > 0){
			// $_SESSION["err"] = "Company Name Already Registered.<br>Change Company Name.";
			// echo '<div class="alert alert-danger alert-dismissible"><button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button><h4><i class="icon fa fa-ban"></i> Warning!</h4>'.$_SESSION['err'].'</div>';
		// } else {
			$sel_com = mysqli_fetch_array(mysqli_query($db,"select com_img from cj_company where com_id='".$com_id."'"));
			if($_FILES["image"]["name"]!='')
			{
				$imagename = $_FILES["image"]["name"];
				$image=rand()."_".strtolower($imagename);
				$bits = explode('.',$imagename);
				$file_ext=strtolower(end($bits));
				$expensions= array("jpg","jpeg","png","gif");
				if(in_array($file_ext,$expensions)=== false)
				{
					$_SESSION["err"] = "Please select a valid file format.<br>Extension not allowed, please choose a JPG,JPEG,PNG or GIF Images.";
					echo '<div class="alert alert-danger alert-dismissible"><button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button><h4><i class="icon fa fa-ban"></i> Warning!</h4>'.$_SESSION['err'].'</div>';
					exit();
				}
				else
				{
					@unlink('../image/company/'.$sel_com['com_img']);
					move_uploaded_file($_FILES["image"]["tmp_name"],"../image/company/".$image);
				}	
			}
			else
			{
				$image=$sel_com['com_img'];
			}
			// $com_insert = mysqli_query($db,"INSERT INTO `cj_company`(
											// `user_id`, `com_name`, `com_email`, `com_address`, `com_desc`, `com_img`, `add_date`
											// ) VALUES (
											// '$user_id','$com_name','$com_email','$com_address','$com_desc','$image',NOW()
											// )") or die(mysqli_error($db));
			$com_update = mysqli_query($db,"update cj_company set
											`user_id`='$user_id',
											`com_name`='$com_name',
											`com_email`='$com_email',
											`com_address`='$com_address',
											`com_desc`='$com_desc',
											`com_img`='$image',
											`mod_date`=Now()
											where com_id='$com_id' ") or die(mysqli_error($db));
			if($com_update){
				// $_SESSION["msg"] = "Form has been submitted";
				// echo'<div class="box-body"><div class="alert alert-success alert-dismissible"><button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button><h4><i class="icon fa fa-check"></i> Success!</h4>'.$_SESSION['msg'].'</div></div>'; 
				include'../employer-company-view.php';
			}
		// }
	}
	if(isset($_POST["deletelogocompany"]))
	{
		$id = $_POST["deletelogocompany"];
		$com_delete = mysqli_query($db,"delete from cj_company where com_id='".$id."'");
		if($com_delete){
			// $_SESSION["msg"] = "Delete Successfully";
			// echo'<div class="box-body"><div class="alert alert-success alert-dismissible"><button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button><h4><i class="icon fa fa-check"></i> Success!</h4>'.$_SESSION['msg'].'</div></div>'; 
			include'../employer-company-view.php';
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
