<?php
	session_start();
	include"../cjobadmin/api/db_config.php";
	if(isset($_POST["pu1"]))
	{
		if($_FILES["image"]["name"]!='')
		{
			$img_nm1=mysqli_fetch_array(mysqli_query($db,"select profile_pic from cj_user where id='".$_SESSION["id"]."'"));
			@unlink("../image/dp/".$img_nm1['profile_pic']);
			$imagename = $_FILES["image"]["name"];
			$image=rand()."_".strtolower($imagename);
			$bits = explode('.',$imagename);
			$file_ext=strtolower(end($bits));
			$expensions= array("jpg","jpeg","png","gif");
			if(in_array($file_ext,$expensions)=== false)
			{
				echo '<div class="alert alert-danger alert-dismissible"><button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button><h4><i class="icon fa fa-ban"></i> Warning!</h4>Please select a valid file format.<br>Extension not allowed, please choose a JPG,JPEG,PNG or GIF Images.</div>';
				exit;
			}
			else
			{
				move_uploaded_file($_FILES["image"]["tmp_name"],"../image/dp/".$image);
			}	
		}
		else
		{
			$img_nm1=mysqli_fetch_array(mysqli_query($db,"select profile_pic from cj_user where id='".$_SESSION["id"]."'"));
			$image=$img_nm1['profile_pic'];
		}
		mysqli_query($db,"UPDATE cj_user SET profile_pic='$image',mod_date=Now() WHERE id='".$_SESSION["id"]."' ");
		echo '<script>window.location.href="profile.php"</script>';
	}
	elseif(isset($_POST["pu2"]))
	{
		$resume_headline = $_REQUEST["resume_headline"];
		mysqli_query($db,"UPDATE cj_user SET resume_headline='$resume_headline',mod_date=Now() WHERE id='".$_SESSION["id"]."' ");
		echo '<script>window.location.href="profile.php"</script>';
	}
	elseif(isset($_POST["pu3"]))
	{
		$education = $_REQUEST["education"];
		$course = $_REQUEST["course"];
		$specialization = $_REQUEST["specialization"];
		$u_i = $_REQUEST["u_i"];
		mysqli_query($db,"UPDATE cj_user SET education='$education',course='$course',specialization='$specialization',u_i='$u_i',mod_date=Now() WHERE id='".$_SESSION["id"]."' ");
		echo '<script>window.location.href="profile.php"</script>';
	}
	elseif(isset($_POST["pu4"]))
	{
		$address = $_REQUEST["address"];
		$dob = $_REQUEST["dob"];
		$gender = $_REQUEST["gender"];
		$m_s = $_REQUEST["m_s"];
		$category = $_REQUEST["category"];
		mysqli_query($db,"UPDATE cj_user SET address='$address',dob='$dob',gender='$gender',m_s='$m_s',category='$category',mod_date=Now() WHERE id='".$_SESSION["id"]."' ");
		echo '<script>window.location.href="profile.php"</script>';
	}
	elseif(isset($_POST["pu5"]))
	{
		$name = $_REQUEST["name"];
		$contact = $_REQUEST["contact"];
		$alter_contact = $_REQUEST["alter_contact"];
		$country = $_REQUEST["country"];
		$state = $_REQUEST["state"];
		$city = $_REQUEST["city"];
		$home_town = $_REQUEST["home_town"];
		$location = $_REQUEST["location"];
		$pincode = $_REQUEST["pincode"];
		$salary_lakh = $_REQUEST["salary_lakh"];
		$exp_year = $_REQUEST["exp_year"];
		$exp_month = $_REQUEST["exp_month"];
		$salary_thousand = $_REQUEST["salary_thousand"];
		mysqli_query($db,"UPDATE cj_user SET 
						country='$country',
						state='$state',
						city='$city',
						home_town='$home_town',
						location='$location',
						pincode='$pincode',
						exp_year='$exp_year',exp_month='$exp_month',name='$name',contact='$contact',alter_contact='$alter_contact',salary_lakh='$salary_lakh',salary_thousand='$salary_thousand',mod_date=Now() WHERE id='".$_SESSION["id"]."' ");
		echo '<script>window.location.href="profile.php"</script>';
	}
	elseif(isset($_POST["pu6"]))
	{
		$a_job_cat = $_REQUEST["a_job_cat"];
		$a_job = $_REQUEST["a_job"];
		$a_role = $_REQUEST["a_role"];
		$a_job_type = $_REQUEST["a_job_type"];
		$a_work_shift = $_REQUEST["a_work_shift"];
		$a_location = $_REQUEST["a_location"];
		$a_salary_lakh = $_REQUEST["a_salary_lakh"];
		$a_salary_thousand = $_REQUEST["a_salary_thousand"];
		mysqli_query($db,"UPDATE cj_user SET 
						a_job_cat='$a_job_cat',
						a_job='$a_job',
						a_role='$a_role',
						a_job_type='$a_job_type',
						a_work_shift='$a_work_shift',
						a_location='$a_location',
						a_salary_lakh='$a_salary_lakh',
						a_salary_thousand='$a_salary_thousand',mod_date=Now() WHERE id='".$_SESSION["id"]."' ");
		echo '<script>window.location.href="profile.php"</script>';
	}
	elseif(isset($_POST["pu7"]))
	{
		$facebook = $_REQUEST["facebook"];
		$linkedin = $_REQUEST["linkedin"];
		$twitter = $_REQUEST["twitter"];
		$googleplus = $_REQUEST["googleplus"];
		mysqli_query($db,"UPDATE cj_user SET 
						facebook='$facebook',
						linkedin='$linkedin',
						twitter='$twitter',
						googleplus='$googleplus',
						mod_date=Now() WHERE id='".$_SESSION["id"]."' ");
		echo '<script>window.location.href="profile.php"</script>';
	}
	elseif(isset($_POST["pu8"]))
	{
		if($_FILES["resume"]["name"]!='')
		{
			$img_nm1=mysqli_fetch_array(mysqli_query($db,"select resume from cj_user where id='".$_SESSION["id"]."'"));
			@unlink("../resume/".$img_nm1['resume']);
			$imagename = $_FILES["resume"]["name"];
			$resume=rand()."_".strtolower($imagename);
			$bits = explode('.',$imagename);
			$file_ext=strtolower(end($bits));
			$expensions= array("doc","docx","pdf");
			if(in_array($file_ext,$expensions)=== false)
			{
				echo '<div class="alert alert-danger alert-dismissible"><button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button><h4><i class="icon fa fa-ban"></i> Warning!</h4>Please select a valid file format.<br>Extension not allowed, please choose a DOC,DOCX or PDF File.</div>';
				exit;
			}
			else
			{
				move_uploaded_file($_FILES["resume"]["tmp_name"],"../resume/".$resume);
			}	
		}
		else
		{
			$img_nm1=mysqli_fetch_array(mysqli_query($db,"select resume from cj_user where id='".$_SESSION["id"]."'"));
			$resume=$img_nm1['resume'];
		}
		mysqli_query($db,"UPDATE cj_user SET resume='$resume',mod_date=Now() WHERE id='".$_SESSION["id"]."' ");
		echo '<script>window.location.href="profile.php"</script>';
	}
	elseif(isset($_POST["jobseekerchangeprofilestatus"]))
	{
		$profile_status = @$_REQUEST["profile_status"];
		$socialmedia_status = @$_REQUEST["socialmedia_status"];
		// if(empty($profile_status) ||
		// empty($socialmedia_status))	
		// {
			// $_SESSION["err"] = " All Field Mandetory.";
			// echo'<div class="alert alert-danger alert-dismissible"><button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button><h4><i class="icon fa fa-ban"></i> Warning!</h4>'.$_SESSION['err'].'</div>'; 
		// }
		// else
		// {
			mysqli_query($db,"UPDATE cj_user SET 
							profile_status='$profile_status',
							socialmedia_status='$socialmedia_status',
							mod_date=Now() WHERE id='".$_SESSION["id"]."' ");
			// $_SESSION["msg"] = "Privacy Setting Has been Update Successfully!";
			echo '<script>window.location="profile-setting.php"</script>';
		// }
	}
	elseif(isset($_POST["jobseekerchangeemployerpwd"]))
	{
		$opwd = $_REQUEST["opwd"];
		$npwd = $_REQUEST["npwd"];
		$cpwd = $_REQUEST["cpwd"];
		if(empty($opwd) || empty($npwd) || empty($cpwd))
		{
			$_SESSION["err"] = " All Password Mandetory.";
			echo'<div class="alert alert-danger alert-dismissible"><button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button><h4><i class="icon fa fa-ban"></i> Warning!</h4>'.$_SESSION['err'].'</div>'; 
		}
		else
		{
			$sql = mysqli_query($db,"SELECT * FROM cj_user WHERE password='$opwd' && id='".$_SESSION["id"]."' ") or die(mysqli_error($db));
			$row = mysqli_fetch_array($sql);
			if(mysqli_num_rows($sql)>0)
			{
				if($npwd==$cpwd){
					mysqli_query($db,"UPDATE cj_user SET 
					password='$npwd',
					mod_date=Now() WHERE id='".$_SESSION["id"]."' ");
					$_SESSION["msg"] = "Password Has been Update Suuccessfully!";
					echo '<script>window.location="jobseeker-profile.php"</script>';
				}else{
					echo'<div class="alert alert-danger alert-dismissible"><button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button><h4><i class="icon fa fa-ban"></i> Warning!</h4>Confirm Password is not match!</div>'; 
				}
			}
			else
			{
				echo'<div class="alert alert-danger alert-dismissible"><button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button><h4><i class="icon fa fa-ban"></i> Warning!</h4>Current Password is not match! Enter correct current Password.</div>'; 
			}
		}
	}
	elseif(@$_POST["forgetpwd"]=="Submit")
	{
		$email = $_REQUEST["email"];
		$result_select=mysqli_query($db,"SELECT * FROM cj_user WHERE email='$email'") or die(mysql_error());
		$num_rows=mysqli_num_rows($result_select);	
		$row_select=mysqli_fetch_array($result_select); 
		if($num_rows>0)
		{
			if($row_select['email']!="")
			{
				$email=$row_select['email'];
				$username=$row_select['username'];
				$password=$row_select['adminPassword'];		
				//////Password sending/////
				$msg=" =============================================================="."\n";		
				$msg.="Password Information "."\n";		
				$msg.="=============================================================="."\n";		
				$msg.="Here below is your login information :- "."\n";		
				$msg.="Username  :".$username."\n";
				$msg.="Password  :".$password."\n";
				$msg.="HTTP Referer : ".$_SERVER['HTTP_REFERER']."\r\n";		
				$msg.="=============================================================="."\n";
				$to=$email;
				$sub="forgot password details:";
				$header='From:solvezone@gmail.com' ."\r\n";
				$header.='Bcc:solvezone@gmail.com';
				$mail=mail($to,$sub,$msg,$header);
				$_SESSION["msg"]="your password send to your mail...";
			}
			else
			{
				echo $_SESSION["err"]="Entered E-mail for the reset password.";
			}
		}
		else
		{
			echo $_SESSION["err"]="Entered E-mail id is not valid. <br />Please Enter correct e-mail id.";
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
