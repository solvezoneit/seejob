<?php
	session_start();
	include"../cjobadmin/api/db_config.php";
	if(@$_POST["employersignup"]=="Register Now")
	{
		$user_id = time();
		$name = $_REQUEST["name"];
		$email = $_REQUEST["email"];
		$username = explode('@',$email);
		$username = $username[0];
		$pwd = $_REQUEST["pwd"];
		$cpwd = $_REQUEST["cpwd"];
		$contact = $_REQUEST["contact"];
		if($pwd==$cpwd)
		{
			$a1 = mysqli_fetch_assoc(mysqli_query($db,"SELECT email FROM cj_user WHERE `email`='".$email."' && `role`='Employer'"));
			echo $a1["email"];
			$mailchk = mysqli_query($db,"SELECT count(email) as countemail FROM cj_user WHERE email='".$email."' && role='Employer'") or die(mysqli_error($db));
			$mailchkcount = mysqli_fetch_array($mailchk);
			if($mailchkcount["countemail"]>0)
			{
				$_SESSION["err"] = " Entered E-mail id is Already Registered. <br />Please Enter another e-mail id.";
				echo'<div class="alert alert-danger alert-dismissible"><button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button><h4><i class="icon fa fa-ban"></i> Warning!</h4>'.$_SESSION['err'].'</div>'; 
				// echo'<span style="color:red;"><b><i class="icon fa fa-ban"></i> Warning!</b><br>'.$_SESSION['err'].'</span>';
			}else{
				$registered = mysqli_query($db,"INSERT INTO cj_user (user_id,name,email,username,contact,password,role,add_date) VALUES ('$user_id','$name','$email','$username','$contact','$pwd','Employer',Now())") or die(mysqli_error($db));
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
						echo '<script>window.location="employer-profile.php"</script>';
					}
				}
			}
		}else{
			$_SESSION["err"] = "Password not match";
			echo'<div class="box-body"><div class="alert alert-danger alert-dismissible"><button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button><h4><i class="icon fa fa-ban"></i> Warning!</h4>'.$_SESSION['err'].'</div></div>'; 
			// echo'<span style="color:red;"><b><i class="icon fa fa-ban"></i> Warning!</b><br>'.$_SESSION['err'].'</span>';
		}
	}
	elseif(@$_POST["jobseekersignup"]=="Register Now")
	{
		$user_id = time();
		$name = $_REQUEST["name"];
		$email = $_REQUEST["email"];
		$username = explode('@',$email);
		$username = $username[0];
		$pwd = $_REQUEST["pwd"];
		$cpwd = $_REQUEST["cpwd"];
		$contact = $_REQUEST["contact"];
		if($pwd===$cpwd)
		{
			$mailchk = mysqli_query($db,"SELECT email FROM cj_user WHERE email='$email' && role='Job Seeker'") or die(mysqli_error($db));
			$mailchkcount = mysqli_num_rows($mailchk);
			if($mailchkcount>0)
			{
				$_SESSION["err"] = " Entered E-mail id is Already Registered. <br />Please Enter another e-mail id.";
				echo'<div class="alert alert-danger alert-dismissible"><button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button><h4><i class="icon fa fa-ban"></i> Warning!</h4>'.$_SESSION['err'].'</div>'; 
				// echo'<span style="color:red;"><b><i class="icon fa fa-ban"></i> Warning!</b><br>'.$_SESSION['err'].'</span>';
			}else{
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
						echo '<script>window.location="profile.php"</script>';
					}
				}
			}
		}else{
			$_SESSION["err"] = "Password not match";
			// echo'<div class="box-body"><div class="alert alert-danger alert-dismissible"><button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button><h4><i class="icon fa fa-ban"></i> Warning!</h4>'.$_SESSION['err'].'</div></div>'; 
			echo'<span style="color:red;"><b><i class="icon fa fa-ban"></i> Warning!</b><br>'.$_SESSION['err'].'</span>';
		}
	}
	elseif(@$_POST["jobseeker"]=="Login")
	{
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
				}else{
					$_SESSION["id"] = $row["id"];
					$_SESSION["user_id"] = $row["user_id"];
					$_SESSION["name"] = $row["name"];
					$_SESSION["email"] = $row["email"];
					$_SESSION["username"] = $row["username"];
					$_SESSION["contact"] = $row["contact"];
					$_SESSION["role"] = $row["role"];
					$_SESSION["flag"] = $row["flag"];
					echo '<script>window.location="profile.php"</script>';
				}
			}else{
				$_SESSION["err"] = "Your User ID / Password is incorrect";
				echo'<div class="alert alert-danger alert-dismissible"><button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button><h4><i class="icon fa fa-ban"></i> Warning!</h4>'.$_SESSION['err'].'</div>'; 
			}
	}
	elseif(@$_POST["employer"]=="Login")
	{
			$userid = $_REQUEST["userid"];
			$pwd = $_REQUEST["pwd"];
			$sql = mysqli_query($db,"SELECT * FROM cj_user WHERE (user_id='$userid' || email='$userid' || contact='$userid' || username='$userid') && password='$pwd' && role='Employer'") or die(mysqli_error($db));
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
					echo '<script>window.location="employer-profile.php?profile=status"</script>';
				}
			}else{
				$_SESSION["err"] = "Your User ID / Password is incorrect";
				echo'<div class="alert alert-danger alert-dismissible"><button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button><h4><i class="icon fa fa-ban"></i> Warning!</h4>'.$_SESSION['err'].'</div>'; 
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
	elseif(@$_POST["employerprofileupdate"]=="Update")
	{
		$designation = $_REQUEST["designation"];
		$description = $_REQUEST["description"];
		$name = $_REQUEST["name"];
		$address = $_REQUEST["address"];
		$location = $_REQUEST["location"];
		$city = $_REQUEST["city"];
		$state = $_REQUEST["state"];
		$country = strtoupper($_REQUEST["country"]);
		$pincode = $_REQUEST["pincode"];
		$contact = $_REQUEST["contact"];
		$alter_contact = $_REQUEST["alter_contact"];
		$anual_salary = $_REQUEST["anual_salary"];
		$gender = $_REQUEST["gender"];
		$experience = $_REQUEST["experience"];
		$m_s = $_REQUEST["m_s"];
		
		if(empty($description) ||
		empty($designation) ||
		empty($name) ||
		empty($address) ||
		empty($location) ||
		empty($city) ||
		empty($state) ||
		empty($country) ||
		empty($pincode) ||
		empty($contact) ||
		empty($alter_contact) ||
		empty($anual_salary) ||
		empty($gender) ||
		empty($experience) ||
		empty($m_s))	
		{
			$_SESSION["err"] = " All Field Mandetory.";
			echo'<div class="alert alert-danger alert-dismissible"><button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button><h4><i class="icon fa fa-ban"></i> Warning!</h4>'.$_SESSION['err'].'</div>'; 
		}
		else
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
					$_SESSION["err"] = "Please select a valid file format.<br>Extension not allowed, please choose a JPG,JPEG,PNG or GIF Images.";
					echo '<div class="alert alert-danger alert-dismissible"><button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button><h4><i class="icon fa fa-ban"></i> Warning!</h4>'.$_SESSION['err'].'</div>';
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
			mysqli_query($db,"UPDATE cj_user SET 
			description='$description',
			designation='$designation',
			name='$name',
			address='$address',
			location='$location',
			city='$city',
			state='$state',
			country='$country',
			pincode='$pincode',
			contact='$contact',
			alter_contact='$alter_contact',
			anual_salary='$anual_salary',
			gender='$gender',
			experience='$experience',
			m_s='$m_s',
			profile_pic='$image',mod_date=Now() WHERE id='".$_SESSION["id"]."' ");
			$_SESSION["msg"] = "Profile Has been Update Suuccessfully!";
			echo '<script>window.location="employer-profile.php"</script>';
		}
	}
	elseif(@$_POST["changeprofilestatus"]=="Update")
	{
		$profile_status = $_REQUEST["profile_status"];
		$socialmedia_status = $_REQUEST["socialmedia_status"];
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
			$_SESSION["msg"] = "Privacy Setting Has been Update Suuccessfully!";
			echo '<script>window.location="employer-profile.php"</script>';
		// }
	}
	elseif(@$_POST["changeprofilesocialmedia"]=="Update")
	{
		$facebook = $_REQUEST["facebook"];
		$linkedin = $_REQUEST["linkedin"];
		$twitter = $_REQUEST["twitter"];
		$googleplus = $_REQUEST["googleplus"];
		// if(empty($facebook) ||
		// empty($linkedin) ||
		// empty($twitter) ||
		// empty($googleplus))	
		// {
			// $_SESSION["err"] = " All Field Mandetory.";
			// echo'<div class="alert alert-danger alert-dismissible"><button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button><h4><i class="icon fa fa-ban"></i> Warning!</h4>'.$_SESSION['err'].'</div>'; 
		// }
		// else
		// {
			mysqli_query($db,"UPDATE cj_user SET 
			facebook='$facebook',
			linkedin='$linkedin',
			twitter='$twitter',
			googleplus='$googleplus',
			mod_date=Now() WHERE id='".$_SESSION["id"]."' ");
			$_SESSION["msg"] = "Social Media Has been Update Suuccessfully!";
			echo '<script>window.location="employer-profile.php"</script>';
		// }
	}
	elseif(@$_POST["changeemployerpwd"]=="Update")
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
					echo '<script>window.location="employer-profile.php"</script>';
				}else{
					$_SESSION["err"] = "Confirm Password is not match!";
					echo'<div class="alert alert-danger alert-dismissible"><button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button><h4><i class="icon fa fa-ban"></i> Warning!</h4>'.$_SESSION['err'].'</div>'; 
				}
			}
			else
			{
				$_SESSION["err"] = "Current Password is not match! Enter correct current Password.";
				echo'<div class="alert alert-danger alert-dismissible"><button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button><h4><i class="icon fa fa-ban"></i> Warning!</h4>'.$_SESSION['err'].'</div>'; 
			}
		}
	}
	elseif(@$_POST["jobseekerprofileupdate"]=="Update")
	{
		$designation = $_REQUEST["designation"];
		$description = $_REQUEST["description"];
		$name = $_REQUEST["name"];
		$address = $_REQUEST["address"];
		$location = $_REQUEST["location"];
		$city = $_REQUEST["city"];
		$state = $_REQUEST["state"];
		$country = strtoupper($_REQUEST["country"]);
		$pincode = $_REQUEST["pincode"];
		$contact = $_REQUEST["contact"];
		$alter_contact = $_REQUEST["alter_contact"];
		$anual_salary = $_REQUEST["anual_salary"];
		$gender = $_REQUEST["gender"];
		$experience = $_REQUEST["experience"];
		$m_s = $_REQUEST["m_s"];
		
		if(empty($description) ||
		empty($designation) ||
		empty($name) ||
		empty($address) ||
		empty($location) ||
		empty($city) ||
		empty($state) ||
		empty($country) ||
		empty($pincode) ||
		empty($contact) ||
		empty($alter_contact) ||
		empty($anual_salary) ||
		empty($gender) ||
		empty($experience) ||
		empty($m_s))	
		{
			$_SESSION["err"] = " All Field Mandetory.";
			echo'<div class="alert alert-danger alert-dismissible"><button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button><h4><i class="icon fa fa-ban"></i> Warning!</h4>'.$_SESSION['err'].'</div>'; 
		}
		else
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
					$_SESSION["err"] = "Please select a valid file format.<br>Extension not allowed, please choose a JPG,JPEG,PNG or GIF Images.";
					echo '<div class="alert alert-danger alert-dismissible"><button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button><h4><i class="icon fa fa-ban"></i> Warning!</h4>'.$_SESSION['err'].'</div>';
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
			mysqli_query($db,"UPDATE cj_user SET 
			description='$description',
			designation='$designation',
			name='$name',
			address='$address',
			location='$location',
			city='$city',
			state='$state',
			country='$country',
			pincode='$pincode',
			contact='$contact',
			alter_contact='$alter_contact',
			anual_salary='$anual_salary',
			gender='$gender',
			experience='$experience',
			m_s='$m_s',
			profile_pic='$image',mod_date=Now() WHERE id='".$_SESSION["id"]."' ");
			$_SESSION["msg"] = "Profile Has been Update Suuccessfully!";
			echo '<script>window.location="jobseeker-profile.php"</script>';
		}
	}
	elseif(@$_POST["jobseekerchangeprofilestatus"]=="Update")
	{
		$profile_status = $_REQUEST["profile_status"];
		$socialmedia_status = $_REQUEST["socialmedia_status"];
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
			$_SESSION["msg"] = "Privacy Setting Has been Update Suuccessfully!";
			echo '<script>window.location="jobseeker-profile.php"</script>';
		// }
	}
	elseif(@$_POST["jobseekerchangeprofilesocialmedia"]=="Update")
	{
		$facebook = $_REQUEST["facebook"];
		$linkedin = $_REQUEST["linkedin"];
		$twitter = $_REQUEST["twitter"];
		$googleplus = $_REQUEST["googleplus"];
		// if(empty($facebook) ||
		// empty($linkedin) ||
		// empty($twitter) ||
		// empty($googleplus))	
		// {
			// $_SESSION["err"] = " All Field Mandetory.";
			// echo'<div class="alert alert-danger alert-dismissible"><button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button><h4><i class="icon fa fa-ban"></i> Warning!</h4>'.$_SESSION['err'].'</div>'; 
		// }
		// else
		// {
			mysqli_query($db,"UPDATE cj_user SET 
			facebook='$facebook',
			linkedin='$linkedin',
			twitter='$twitter',
			googleplus='$googleplus',
			mod_date=Now() WHERE id='".$_SESSION["id"]."' ");
			$_SESSION["msg"] = "Social Media Has been Update Suuccessfully!";
			echo '<script>window.location="jobseeker-profile.php"</script>';
		// }
	}
	elseif(@$_POST["jobseekerchangeemployerpwd"]=="Update")
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
					$_SESSION["err"] = "Confirm Password is not match!";
					echo'<div class="alert alert-danger alert-dismissible"><button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button><h4><i class="icon fa fa-ban"></i> Warning!</h4>'.$_SESSION['err'].'</div>'; 
				}
			}
			else
			{
				$_SESSION["err"] = "Current Password is not match! Enter correct current Password.";
				echo'<div class="alert alert-danger alert-dismissible"><button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button><h4><i class="icon fa fa-ban"></i> Warning!</h4>'.$_SESSION['err'].'</div>'; 
			}
		}
	}
	elseif(@$_POST["postjob"]=="Post")
	{
		$job_title = $_REQUEST["job_title"];
		$job_titles = $_REQUEST["job_title"].'-'.$_REQUEST["job"].'('.$_REQUEST["optradioname"].')'.$_REQUEST["location"].' '.$_REQUEST["sub_location"].' '.$_REQUEST["exp_min"].' '.$_REQUEST["exp_max"].' year of experience';
		
		# Prep string with some basic normalization
		$url = strtolower($job_titles);
		$url = strip_tags($url);
		$url = stripslashes($url);
		$url = html_entity_decode($url);

		# Remove quotes (can't, etc.)
		$url = str_replace('\'', '', $url);

		# Replace non-alpha numeric with hyphens
		$match = '/[^a-z0-9]+/';
		$replace = '-';
		$url = preg_replace($match, $replace, $url);

		$url = trim($url, '-');
		$tt = time();
		$url = $url.'-'.$tt;
		
		$job_cat = $_REQUEST["optradioname"];
		$job = $_REQUEST["job"];
		$job_type = $_REQUEST["job_type"];
		$comp = mysqli_fetch_array(mysqli_query($db,"select com_id,com_name from cj_company where com_id='".$_REQUEST["company_name"]."'"));
		
		$location = $_REQUEST["location"];
		$sub_location = $_REQUEST["sub_location"];
		$exp_min = $_REQUEST["exp_min"];
		$exp_max = $_REQUEST["exp_max"];
		$education = $_REQUEST["education"];
		$salary_min = $_REQUEST["salary_min"];
		$salary_max = $_REQUEST["salary_max"];
		$work_shifts = $_REQUEST["work_shifts"];
		$gender = $_REQUEST["gender"];
		$age_min = $_REQUEST["age_min"];
		$age_max = $_REQUEST["age_max"];
		$job_desc = $_REQUEST["job_desc"];
		$remail = $_REQUEST["remail"];
		$rcontact = $_REQUEST["rcontact"];
		
		for($i = 0; $i<count($job); $i++)
		{
			$job_cat_row = mysqli_fetch_array(mysqli_query($db,"SELECT job_cat FROM cj_jobs WHERE job='".$job[$i]."'"));
			$registered = mysqli_query($db,"INSERT INTO cj_job_post (
			user_id,
			job_title,
			url,
			page_title,
			page_desc,
			page_keyword,
			job_cat,
			job,
			job_type,
			company_id,
			company_name,
			location,
			sub_location,
			exp_min,
			exp_max,
			education,
			salary_min,
			salary_max,
			work_shifts,
			gender,
			age_min,
			age_max,
			job_desc,
			remail,
			rcontact,
			add_date
			) VALUES (
			'$_SESSION[user_id]',
			'$job_title',
			'$url',
			'$job_title',
			'$job_title',
			'$job_title',
			'$job_cat_row[job_cat]',
			'$job[$i]',
			'$job_type',
			'$comp[com_id]',
			'$comp[com_name]',
			'$location',
			'$sub_location',
			'$exp_min',
			'$exp_max',
			'$education',
			'$salary_min',
			'$salary_max',
			'$work_shifts',
			'$gender',
			'$age_min',
			'$age_max',
			'$job_desc',
			'$remail',
			'$rcontact',
			Now())") or die(mysqli_error($db));
		}
		$_SESSION["msg"] = "Job has been post.";
		echo'<div class="alert alert-success alert-dismissible"><button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button><h4><i class="icon fa fa-check"></i> Success!</h4>'.$_SESSION['msg'].'</div>'; 
	}
?>
<script>
window.setTimeout(function() {
    $(".alert").fadeTo(500, 0).slideUp(500, function(){
        $(this).remove(); 
    });
}, 4000);
</script>
