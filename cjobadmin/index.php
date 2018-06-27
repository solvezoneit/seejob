<?php
ob_start();
include 'api/db_config.php';
session_start();
if(@$_POST['btnRegister']=="Register")
{
	$name=$_REQUEST['name'];
	$email=$_REQUEST['email'];
	$mobile=$_REQUEST['mobile'];
	$pwd=$_REQUEST['pwd'];
	$mailckh = mysqli_num_rows(mysqli_query($db,"SELECT * FROM cj_user WHERE email='$email' && role='Admin'"));
	if(!$mailckh>0)
	{
		// id	merchant_id	name	business_name	contact	email	username	password	address	location	city	state	country	pincode	latitude	longitude	status	admin_status	profile_status	profile_pic	banner_pic	title	keyword	description	add_date	mod_date	joining	website	gst	pan_card	tin
		$reginsert = mysqli_query($db,"INSERT INTO cj_user (name,username,email,contact,password,role) values('$name','$email','$email','$mobile','$pwd','Admin')") or die (mysqli_query($db));
		if($reginsert)
		{
			$result=mysqli_query($db,"SELECT * FROM cj_user WHERE email='".$email."' and password='".$pwd."' && role='Admin'") or die(mysql_error($db));
			$row=mysqli_fetch_array($result);
			$_SESSION['USERID']=$row['id'];
			$_SESSION['NAME']=$row['name'];
			$_SESSION['EMAIL']=$row['email'];
			$_SESSION['FLAG']=$row['flag'];
			$_SESSION['PROFILE_PIC']=$row['profile_pic'];
			$numRows=mysqli_num_rows($result);
			if($numRows > 0)
			{
				if($row['flag'] == 1)
				{header("location: dashboard.php");}
				else
				{$_SESSION["err"]="Your Account has been blocked...";}
			}
			else
			{
				$_SESSION["err"]="Username Or Password is Invalid...";
			}
		}
	}
	else
	{
		$_SESSION["err"]="Email id all ready registered <br> Change Mail ID...";
	}
}
if(@$_POST['btnLogin']=="Login")
{
	$email=mysqli_real_escape_string($db,$_REQUEST['userid']);
	$pwd=mysqli_real_escape_string($db,$_REQUEST['password']);
	$result=mysqli_query($db,"SELECT * FROM cj_user WHERE email='".$email."' and password='".$pwd."' && role='Admin'") or die(mysql_error($db));
	$row=mysqli_fetch_array($result);
	$_SESSION['USERID']=$row['id'];
	$_SESSION['NAME']=$row['name'];
	$_SESSION['EMAIL']=$row['email'];
	$_SESSION['PROFILE_PIC']=$row['profile_pic'];
	$_SESSION['FLAG']=$row['flag'];
	$numRows=mysqli_num_rows($result);
	if($numRows > 0)
	{
		if($row['flag'] == 1)
		{header("location: dashboard.php");}
		else
		{$_SESSION["err"]="Your Account has been blocked...";}
	}
	else
	{
		$_SESSION["err"]="Username Or Password is Invalid...";
	}
}
if(@$_POST['btnSend']=='Send Me!')
{
	$email=$_REQUEST['email'];
	$result_select=mysqli_query($db,"SELECT * FROM cj_user WHERE email='$email' && role='Admin'")   or die(mysql_error());
	$num_rows=mysqli_num_rows($result_select);	
	$row_select=mysqli_fetch_array($result_select); 
	if($num_rows>0)
	{
		if($row_select['email']!="")
		{
			$email=$row_select['email'];
			$adminName=$row_select['adminName'];
			$password=$row_select['adminPassword'];		
			//////Password sending/////
			$msg=" =============================================================="."\n";		
			$msg.="Password Information "."\n";		
			$msg.="=============================================================="."\n";		
			$msg.="Here below is your login information :- "."\n";		
			$msg.="Username  :".$adminName."\n";		
			$msg.="Password  :".$password."\n";		
			$msg.="HTTP Referer : ".$_SERVER['HTTP_REFERER']."\r\n";		
			$msg.=" =============================================================="."\n";
			$to=$email;
			$sub="forgot password details:";
			$header='From:solvezone@gmail.com' ."\r\n";
			$header.='Bcc:solvezone@gmail.com';
			$mail=mail($to,$sub,$msg,$header);
			
			$_SESSION["msg"]="your password send to your mail...";			
		}
		else
		{
			$_SESSION["err"]="Entered E-mail for the reset password.";
		}
	}
	else
	{
		$_SESSION["err"]="Entered E-mail id is not valid. <br />Please Enter correct e-mail id.";
	}
}
?>
<!DOCTYPE html>
<html lang="en">
	<head>
		<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />
		<meta charset="utf-8" />
		<title>See Job</title>

		<meta name="description" content="User login page" />
		<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0" />

		<!-- bootstrap & fontawesome -->
		<link rel="stylesheet" href="assets/css/bootstrap.min.css" />
		<link rel="stylesheet" href="assets/font-awesome/4.5.0/css/font-awesome.min.css" />

		<!-- text fonts -->
		<link rel="stylesheet" href="assets/css/fonts.googleapis.com.css" />

		<!-- ace styles -->
		<link rel="stylesheet" href="assets/css/ace.min.css" />

		<!--[if lte IE 9]>
			<link rel="stylesheet" href="assets/css/ace-part2.min.css" />
		<![endif]-->
		<link rel="stylesheet" href="assets/css/ace-rtl.min.css" />

		<!--[if lte IE 9]>
		  <link rel="stylesheet" href="assets/css/ace-ie.min.css" />
		<![endif]-->

		<!-- HTML5shiv and Respond.js for IE8 to support HTML5 elements and media queries -->

		<!--[if lte IE 8]>
		<script src="assets/js/html5shiv.min.js"></script>
		<script src="assets/js/respond.min.js"></script>
		<![endif]-->
		
		
		<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
		<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
		
		
	</head>

	<body class="login-layout">
		<div class="main-container">
			<div class="main-content">
				<div class="row">
					<div class="col-sm-10 col-sm-offset-1">
						<div class="login-container">
							<div class="center">

								<h1>
									<!--i class="ace-icon fa fa-leaf green"></i-->
									<span class="red">See</span>
									<span class="white" id="id-text2">Job.Com/Admin</span>
								</h1>
								<!--h4 class="blue" id="id-company-text">&copy; Company Name</h4-->
							</div>

							
							
							<div class="space-6"></div>

							<div class="position-relative">
								<?php
								if(!empty($_SESSION['msg']))
								{ 
									echo '<div class="box-body"><div class="alert alert-success alert-dismissible"><button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button><h4><i class="icon fa fa-check"></i> Success!</h4>'.$_SESSION['msg'].'</div></div>';
									unset($_SESSION['msg']);
								}
								if(!empty($_SESSION['err']))
								{
									echo'<div class="box-body"><div class="alert alert-danger alert-dismissible"><button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button><h4><i class="icon fa fa-ban"></i> Warning!</h4>'.$_SESSION['err'].'</div></div>'; 
									unset($_SESSION['err']);
								}?>

								<div id="login-box" class="login-box visible widget-box no-border">
									<div class="widget-body">
										<div class="widget-main">
											<h4 class="header blue lighter bigger">
												<i class="ace-icon fa fa-user blue"></i>
												Please Enter Your Information
											</h4>
											<div class="space-6"></div>

											<form method="POST">
												<fieldset>
													<label class="block clearfix">
														<span class="block input-icon input-icon-right">
															<input type="text" class="form-control" name="userid" placeholder="User ID" />
															<i class="ace-icon fa fa-envelope"></i>
														</span>
													</label>

													<label class="block clearfix">
														<span class="block input-icon input-icon-right">
															<input type="password" class="form-control" name="password" placeholder="Password" />
															<i class="ace-icon fa fa-lock"></i>
														</span>
													</label>

													<div class="space"></div>

													<div class="clearfix">
														<label class="inline">
															<input type="checkbox" class="ace" />
															<span class="lbl"> Remember Me</span>
														</label>

														<button name="btnLogin" type="submit" value="Login" class="width-35 pull-right btn btn-sm btn-primary">
															<i class="ace-icon fa fa-key"></i>
															<span class="bigger-110">Login</span>
														</button>
													</div>

													<div class="space-4"></div>
												</fieldset>
											</form>

											<div class="social-or-login center">
												<span class="bigger-110">Or Login Using</span>
											</div>

											<div class="space-6"></div>

											<div class="social-login center">
												<a class="btn btn-primary">
													<i class="ace-icon fa fa-facebook"></i>
												</a>

												<a class="btn btn-info">
													<i class="ace-icon fa fa-twitter"></i>
												</a>

												<a class="btn btn-danger">
													<i class="ace-icon fa fa-google-plus"></i>
												</a>
											</div>
										</div><!-- /.widget-main -->

										<div class="toolbar clearfix">
											<div>
												<a href="#" data-target="#forgot-box" class="forgot-password-link">
													<i class="ace-icon fa fa-arrow-left"></i>
													I forgot my password
												</a>
											</div>

											<div>
												<a href="#" data-target="#signup-box" class="user-signup-link">
													I want to register
													<i class="ace-icon fa fa-arrow-right"></i>
												</a>
											</div>
										</div>
									</div><!-- /.widget-body -->
								</div><!-- /.login-box -->

								<div id="forgot-box" class="forgot-box widget-box no-border">
									<div class="widget-body">
										<div class="widget-main">
											<h4 class="header red lighter bigger">
												<i class="ace-icon fa fa-key red"></i>
												Retrieve Password
											</h4>

											<div class="space-6"></div>
											<p>
												Enter your email and to receive instructions
											</p>

											<form method="POST">
												<fieldset>
													<label class="block clearfix">
														<span class="block input-icon input-icon-right">
															<input type="email" name="email" class="form-control" placeholder="Email" />
															<i class="ace-icon fa fa-envelope"></i>
														</span>
													</label>

													<div class="clearfix">
														<button type="submit" name="btnSend" value="Send Me!" class="width-35 pull-right btn btn-sm btn-danger">
															<i class="ace-icon fa fa-lightbulb-o"></i>
															<span class="bigger-110">Send Me!</span>
														</button>
													</div>
												</fieldset>
											</form>
										</div><!-- /.widget-main -->

										<div class="toolbar center">
											<a href="#" data-target="#login-box" class="back-to-login-link">
												Back to login
												<i class="ace-icon fa fa-arrow-right"></i>
											</a>
										</div>
									</div><!-- /.widget-body -->
								</div><!-- /.forgot-box -->

								<div id="signup-box" class="signup-box widget-box no-border">
									<div class="widget-body">
										<div class="widget-main">
											<h4 class="header green lighter bigger">
												<i class="ace-icon fa fa-users green"></i>
												New User Registration
											</h4>

											<div class="space-6"></div>
											<p> Enter your details to begin: </p>

											<form method="POST">
												<fieldset>
													<label class="block clearfix">
														<span class="block input-icon input-icon-right">
															<input type="text" name="name" class="form-control" placeholder="Name" required />
															<i class="ace-icon fa fa-user"></i>
														</span>
													</label>

													<label class="block clearfix">
														<span class="block input-icon input-icon-right">
															<input type="number" name="mobile" class="form-control" placeholder="Mobile" required />
															<i class="ace-icon fa fa-phone"></i>
														</span>
													</label>

													<label class="block clearfix">
														<span class="block input-icon input-icon-right">
															<input type="email" name="email" class="form-control" placeholder="Email" required />
															<i class="ace-icon fa fa-envelope"></i>
														</span>
													</label>

													<label class="block clearfix">
														<span class="block input-icon input-icon-right">
															<input type="password" name="pwd" class="form-control" placeholder="Password" required />
															<i class="ace-icon fa fa-lock"></i>
														</span>
													</label>

													<!--label class="block clearfix">
														<span class="block input-icon input-icon-right">
															<input type="password" class="form-control" placeholder="Repeat password" />
															<i class="ace-icon fa fa-retweet"></i>
														</span>
													</label-->

													<label class="block">
														<input type="checkbox" class="ace" />
														<span class="lbl">
															I accept the
															<a href="#">Term & Condetion</a>
														</span>
													</label>

													<div class="space-24"></div>

													<div class="clearfix">
														<button type="reset" class="width-30 pull-left btn btn-sm">
															<i class="ace-icon fa fa-refresh"></i>
															<span class="bigger-110">Reset</span>
														</button>

														<button type="submit" name="btnRegister" value="Register" class="width-65 pull-right btn btn-sm btn-success">
															<span class="bigger-110">Register</span>
															<i class="ace-icon fa fa-arrow-right icon-on-right"></i>
														</button>
													</div>
												</fieldset>
											</form>
										</div>

										<div class="toolbar center">
											<a href="#" data-target="#login-box" class="back-to-login-link">
												<i class="ace-icon fa fa-arrow-left"></i>
												Back to login
											</a>
										</div>
									</div><!-- /.widget-body -->
								</div><!-- /.signup-box -->
							</div><!-- /.position-relative -->

							<div class="navbar-fixed-top align-right">
								<br />
								&nbsp;
								<a id="btn-login-dark" href="#">Dark</a>
								&nbsp;
								<span class="blue">/</span>
								&nbsp;
								<a id="btn-login-blur" href="#">Blur</a>
								&nbsp;
								<span class="blue">/</span>
								&nbsp;
								<a id="btn-login-light" href="#">Light</a>
								&nbsp; &nbsp; &nbsp;
							</div>
						</div>
					</div><!-- /.col -->
				</div><!-- /.row -->
			</div><!-- /.main-content -->
		</div><!-- /.main-container -->

		<!-- basic scripts -->

		<!--[if !IE]> -->
		<script src="assets/js/jquery-2.1.4.min.js"></script>

		<!-- <![endif]-->

		<!--[if IE]>
<script src="assets/js/jquery-1.11.3.min.js"></script>
<![endif]-->
		<script type="text/javascript">
			if('ontouchstart' in document.documentElement) document.write("<script src='assets/js/jquery.mobile.custom.min.js'>"+"<"+"/script>");
		</script>

		<!-- inline scripts related to this page -->
		<script type="text/javascript">
			jQuery(function($) {
			 $(document).on('click', '.toolbar a[data-target]', function(e) {
				e.preventDefault();
				var target = $(this).data('target');
				$('.widget-box.visible').removeClass('visible');//hide others
				$(target).addClass('visible');//show target
			 });
			});
			
			
			
			//you don't need this, just used for changing background
			jQuery(function($) {
			 $('#btn-login-dark').on('click', function(e) {
				$('body').attr('class', 'login-layout');
				$('#id-text2').attr('class', 'white');
				$('#id-company-text').attr('class', 'blue');
				
				e.preventDefault();
			 });
			 $('#btn-login-light').on('click', function(e) {
				$('body').attr('class', 'login-layout light-login');
				$('#id-text2').attr('class', 'grey');
				$('#id-company-text').attr('class', 'blue');
				
				e.preventDefault();
			 });
			 $('#btn-login-blur').on('click', function(e) {
				$('body').attr('class', 'login-layout blur-login');
				$('#id-text2').attr('class', 'white');
				$('#id-company-text').attr('class', 'light-blue');
				
				e.preventDefault();
			 });
			 
			});
		</script>
	</body>
</html>
