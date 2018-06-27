<?php
	session_start();
	include"../cjobadmin/api/db_config.php";
	if(@$_POST["cvuploadonhome"]=="Apply")
	{
		$name = $_REQUEST["name"];
		$contact = $_REQUEST["contact"];
		$msofc = $_REQUEST["msofc"];
		$language = $_REQUEST["language"];
		foreach($language as $language1)
		{
			$language2 .= $language1.',';
		}
		$salary = $_REQUEST["salary"];
		$company = $_REQUEST["company"];
		$experience = $_REQUEST["experience"];
		$designation = $_REQUEST["designation"];
		$board = $_REQUEST["board"];
		$user_id = time();
		$email = $_REQUEST["email"];
		$pwd = $_REQUEST["pwd"];
		$username = explode('@',$email);
		$username = $username[0];
		
		if($_FILES["resume"]["name"]!='')
		{
			$resume = $_FILES["resume"]["name"];
			$resume=rand()."_".strtolower($resume);
			$bits = explode('.',$resume);
			$file_ext=strtolower(end($bits));
			$expensions= array("doc","docx","pdf");
			if(in_array($file_ext,$expensions)=== false)
			{
				$_SESSION["err"] = "Please select a valid file format.<br>Extension not allowed, please choose a DOC,DOCX, or PDF File.";
				echo '<div class="alert alert-danger alert-dismissible"><button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button><h4><i class="icon fa fa-ban"></i> Warning!</h4>'.$_SESSION['err'].'</div>';
			}
			else
			{
				$mailchk = mysqli_query($db,"SELECT email FROM cj_user WHERE email='$email' && role='Job Seeker'") or die(mysqli_error($db));
				if(mysqli_num_rows($mailchk)>0)
				{
					$sql = mysqli_query($db,"SELECT * FROM cj_user WHERE email='$email' && password='$pwd' && role='Job Seeker'" ) or die(mysqli_error($db));
					$row = mysqli_fetch_array($sql);
					if(mysqli_num_rows($sql)>0)
					{
						if($row["flag"]=='0')
						{
							$_SESSION["err"] = "Your Account has been blocked";
							echo'<div class="alert alert-danger alert-dismissible"><button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button><h4><i class="icon fa fa-ban"></i> Warning!</h4>'.$_SESSION['err'].'</div>'; 
						}else{
							$_SESSION["id"] = $row["id"];
							$_SESSION["user_id"] = $row["user_id"];
							$_SESSION["name"] = $row["name"];
							$_SESSION["email"] = $row["email"];
							$_SESSION["username"] = $row["username"];
							$_SESSION["contact"] = $row["contact"];
							$_SESSION["role"] = $row["role"];
							$_SESSION["flag"] = $row["flag"];
							mysqli_query($db,"INSERT INTO 	`cj_cv`(
															`user_id`,
															`cv_name`,
															`cv_contact`,
															`cv_resume`,
															`cv_msofc`,
															`cv_language`,
															`cj_salary`,
															`cj_company`,
															`cj_experience`,
															`cj_designation`,
															`cj_board`
															) VALUES (
															'$user_id',
															'$name',
															'$contact',
															'$resume',
															'$msofc',
															'$language2',
															'$salary',
															'$company',
															'$experience',
															'$designation',
															'$board'
															)") or die(mysqli_error($db));
							move_uploaded_file($_FILES["resume"]["tmp_name"],"../doc/resume/".$resume);
							echo '<script>window.location="index.php"</script>';
						}
					}else{
						$_SESSION["err"] = "Your User ID / Password is incorrect<br> Enter Correct password<hr>
											If you want to Sign Up then change Email ID and Choose Password";
						echo'<div class="alert alert-danger alert-dismissible"><button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button><h4><i class="icon fa fa-ban"></i> Warning!</h4>'.$_SESSION['err'].'</div>'; 
					}
				}
				else
				{
					$registered = mysqli_query($db,"INSERT INTO cj_user (user_id,name,email,username,contact,password,role,add_date) VALUES ('$user_id','$name','$email','$username','$contact','$pwd','Job Seeker',Now())") or die(mysqli_error($db));
					if($registered)
					{
						$sql = mysqli_query($db,"SELECT * FROM cj_user WHERE name='$name' && email='$email' && password='$pwd' && contact='$contact'") or die(mysqli_error($db));
						$row = mysqli_fetch_array($sql);
						if(mysqli_num_rows($sql)>0)
						{
							$_SESSION["id"] = $row["id"];
							$_SESSION["user_id"] = $row["user_id"];
							$_SESSION["name"] = $row["name"];
							$_SESSION["email"] = $row["email"];
							$_SESSION["username"] = $row["username"];
							$_SESSION["contact"] = $row["contact"];
							$_SESSION["role"] = $row["role"];
							$_SESSION["flag"] = $row["flag"];
							mysqli_query($db,"INSERT INTO 	`cj_cv`(
															`user_id`,
															`cv_name`,
															`cv_contact`,
															`cv_resume`,
															`cv_msofc`,
															`cv_language`,
															`cj_salary`,
															`cj_company`,
															`cj_experience`,
															`cj_designation`,
															`cj_board`
															) VALUES (
															'$user_id',
															'$name',
															'$contact',
															'$resume',
															'$msofc',
															'$language2',
															'$salary',
															'$company',
															'$experience',
															'$designation',
															'$board'
															)") or die(mysqli_error($db));
							move_uploaded_file($_FILES["resume"]["tmp_name"],"../doc/resume/".$resume);
							echo '<script>window.location="index.php"</script>';
						}
					}
				}
			}	
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
