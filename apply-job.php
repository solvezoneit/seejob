<?php
	session_start();
	include"cjobadmin/api/db_config.php";
	if(isset($_POST['apply-job']))
	{
		
		$name = $_POST['name'];
		$email = $_POST['email'];
		$contact = $_POST['contact'];
		$location = $_POST['location'];
		$job_post_id = $_POST['job_post_id'];
		$chk = mysqli_query($db,"select email from cj_user where email='$email' && role='Job Seeker'") or die (mysqli_error($db));
		if(mysqli_num_rows($chk)>0)
		{
			echo'<a href="#" class="btn-print btn-print1 text-center" data-toggle="modal" data-target="#loginaply'.$job_post_id.'" style="text-decoration:none;color:#fff;" ><i class="far fa-sign-in-alt"></i> login</a>';
			echo'<div class="alert alert-danger alert-dismissible"><button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button><h4><i class="icon fa fa-ban"></i> Warning!</h4>Mail ID already registered.click on login button otherwise change mail id</div>'; 
		}
		else
		{
			$user_id = time();
			$username = explode('@',$email);
			$username = $username[0];
			$registered = mysqli_query($db,"INSERT INTO cj_user (user_id,name,email,username,contact,password,location,role,add_date) VALUES ('$user_id','$name','$email','$username','$contact','$user_id','$location','Job Seeker',Now())") or die(mysqli_error($db));
			if($registered)
			{
				$sql = mysqli_query($db,"SELECT * FROM cj_user WHERE  name='$name' && email='$email' && user_id='$user_id' && contact='$contact'") or die(mysqli_error($db));
				$row = mysqli_fetch_array($sql);
				if(mysqli_num_rows($sql)>0)
				{
					$_SESSION["id"] = $row["id"];
					$_SESSION["user_id"] = $row["user_id"];
					$_SESSION["name"] = $row["name"];
					$_SESSION["email"] = $row["email"];
					$_SESSION["username"] = $row["username"];
					$_SESSION["password"] = $row["password"];
					$_SESSION["contact"] = $row["contact"];
					$_SESSION["location"] = $row["location"];
					$_SESSION["role"] = $row["role"];
					$_SESSION["flag"] = $row["flag"];
					mysqli_query($db,"insert into cj_apply_job (
									job_post_id,
									jobseeker_id,
									name,
									email,
									contact,
									location,
									add_date
									) VALUE (
									'$job_post_id',
									'$row[id]',
									'$name',
									'$email',
									'$contact',
									'$location',
									Now()
									)") or die (mysqli_error($db));
					$_SESSION["msg"] = "Apply Successfully";
					echo'<div class="alert alert-success alert-dismissible"><button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button><h4><i class="icon fa fa-check"></i> Success!</h4>'.$_SESSION['msg'].'</div>'; 
					// header("location:javascript://history.go(-1)");
					// exit;
				}
			}
			
		}
	}
	elseif(@$_POST["jobseeker"]=="Login")
	{
		$job_post_id = $_POST['job_post_id'];
		$userid = $_REQUEST["userid"];
		$pwd = $_REQUEST["pwd"];
		$sql = mysqli_query($db,"SELECT * FROM cj_user WHERE (user_id='$userid' || email='$userid' || contact='$userid' || username='$userid') && password='$pwd' && role='Job Seeker'" ) or die(mysqli_error($db));
		$row = mysqli_fetch_array($sql);
		if(mysqli_num_rows($sql)>0)
		{
			if($row["flag"]=='0')
			{
				$_SESSION["err"] = "Your Account has been blocked";
				echo'<div class="alert alert-danger alert-dismissible"><button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button><h4><i class="icon fa fa-ban"></i> Warning!</h4>'.$_SESSION['err'].'</div>'; 
			}
			else
			{
				$_SESSION["id"] = $row["id"];
				$_SESSION["user_id"] = $row["user_id"];
				$_SESSION["name"] = $row["name"];
				$_SESSION["email"] = $row["email"];
				$_SESSION["location"] = $row["location"];
				$_SESSION["password"] = $row["password"];
				$_SESSION["username"] = $row["username"];
				$_SESSION["contact"] = $row["contact"];
				$_SESSION["role"] = $row["role"];
				$_SESSION["flag"] = $row["flag"];
				mysqli_query($db,"insert into cj_apply_job (
								job_post_id,
								jobseeker_id,
								name,
								email,
								contact,
								location,
								add_date
								) VALUE (
								'$job_post_id',
								'$row[id]',
								'$row[name]',
								'$row[email]',
								'$row[contact]',
								'$row[location]',
								Now()
								)") or die (mysqli_error($db));
				echo '<script>window.location="jobs.php"</script>';
			}
		}
	}	
	elseif(@$_POST["jobseekerdirect"]=="Login")
	{
		$job_post_id = $_POST['job_post_id'];
		$userid = $_REQUEST['user_id'];
		$pwd = $_REQUEST["pwd"];
		$sql = mysqli_query($db,"SELECT * FROM cj_user WHERE (user_id='$userid' || email='$userid' || contact='$userid' || username='$userid') && password='$pwd' && role='Job Seeker'" ) or die(mysqli_error($db));
		$row = mysqli_fetch_array($sql);
		if(mysqli_num_rows($sql)>0)
		{
			if($row["flag"]=='0')
			{
				$_SESSION["err"] = "Your Account has been blocked";
				echo'<div class="alert alert-danger alert-dismissible"><button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button><h4><i class="icon fa fa-ban"></i> Warning!</h4>'.$_SESSION['err'].'</div>'; 
			}
			else
			{
				$_SESSION["id"] = $row["id"];
				$_SESSION["user_id"] = $row["user_id"];
				$_SESSION["name"] = $row["name"];
				$_SESSION["email"] = $row["email"];
				$_SESSION["location"] = $row["location"];
				$_SESSION["password"] = $row["password"];
				$_SESSION["username"] = $row["username"];
				$_SESSION["contact"] = $row["contact"];
				$_SESSION["role"] = $row["role"];
				$_SESSION["flag"] = $row["flag"];
				$aply_check_count = mysqli_num_rows(mysqli_query($db,"SELECT * FROM cj_apply_job WHERE job_post_id='$job_post_id' && jobseeker_id='$row[id]'" ));
				if($aply_check_count>0)
				{
					echo'<div class="alert alert-danger alert-dismissible"><button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button><h4><i class="icon fa fa-ban"></i> Already Applied </h4></div>'; 
				}else{
					mysqli_query($db,"insert into cj_apply_job (
									job_post_id,
									jobseeker_id,
									name,
									email,
									contact,
									location,
									add_date
									) VALUE (
									'$job_post_id',
									'$row[id]',
									'$row[name]',
									'$row[email]',
									'$row[contact]',
									'$row[location]',
									Now()
									)") or die (mysqli_error($db));
					echo'<div class="alert alert-success alert-dismissible"><button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button><h4><i class="icon fa fa-check"></i> Successfully</h4></div>'; 
				}
			}
		}
		else
		{
			echo'<div class="alert alert-danger alert-dismissible"><button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button><h4><i class="icon fa fa-ban"></i> Warning!</h4>Your User ID / Password is incorrect</div>'; 
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

