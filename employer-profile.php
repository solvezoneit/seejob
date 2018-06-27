<?php
	include"php/main.php";
	if(!empty($profilerow["profile_pic"]) &&
	!empty($profilerow["description"]) &&
	!empty($profilerow["facebook"]) &&
	!empty($profilerow["twitter"]) &&
	!empty($profilerow["linkedin"]) &&
	!empty($profilerow["googleplus"]) && @$_REQUEST["profile"]=="status")
	{ header("location:employer-home.php"); }
?>	
<!DOCTYPE html>
<html>
	<head>
		<title>Myprofilepage</title>
		<meta charset="utf-8">
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<link rel="canonical" href=""/>
		<meta charset="UTF-8" /> 
		<meta http-equiv="X-UA-Compatible" content="IE=Edge" />
		<meta name="description" content=""/>
		<META NAME="ROBOTS" CONTENT="NOINDEX, NOFOLLOW">
		<meta name="google-site-verification" content="" />
		<meta name="keywords" content=""/>
		<meta http-equiv="Content-Language" content="en-us" > 
		<meta name="revisit-after" content="1 days" > 
		<meta name="RATING" content="General" > 
		<link rel="stylesheet" href="css/w3.css">
		<link rel="stylesheet" href="socicon/social_media.css">
		<!-- Latest compiled and minified CSS -->
		<link rel="stylesheet" href="css/bootstrap.min.css">
		<!-- jQuery library -->
		<script src="js/3.2.1-jquery.min.js"></script>
		<!-- Latest compiled JavaScript -->
		<script src="js/3.3.7-js-bootstrap.min.js"></script>
		<link rel="stylesheet" type="text/css" href="seejob.css">
		<script defer src="js/fontawesome.com.js"></script>
		<style>
		/*------------------*/
		* {
			box-sizing: border-box;
		}
		input[type=text], select, textarea {
			width: 100%;
			padding: 0px 10px;
			border: 1px solid #ccc;
			border-radius: 0px;
			resize: vertical;
		}
		label {
			 padding: 0px 10px;
			display: inline-block;
		}
		input[type=submit] {
			background-color: #2196F3;
			color: white;
			padding: 5px 15px;
			border: none;
			border-radius: 4px;
			cursor: pointer;
		}
		input[type=submit]:hover {
			background-color: #45a049;
		}
		.col-25 {
			float: left;
			width: 40%;
			margin-top: 6px;
			text-align:right;
			font-size:11px;
		}
		.col-75 {
			float: left;
			width: 50%;
			margin-top: 6px;
			font-size:11px;
		}

		/* Clear floats after the columns */
		.row:after {
			content: "";
			display: table;
			clear: both;
		}

		/* Responsive layout - when the screen is less than 600px wide, make the two columns stack on top of each other instead of next to each other */
		@media (max-width: 600px) {
			.col-25, .col-75, input[type=submit] {
				width: 100%;
				margin-top: 0;
			}
		}
		.switch {
		  position: relative;
		  display: inline-block;
		  width: 50px;
		  height: 24px;
		}

		.switch input {display:none;}

		.slider {
		  position: absolute;
		  cursor: pointer;
		  top: 0;
		  left: 0;
		  right: 0;
		  bottom: 0;
		  background-color: #ccc;
		  -webkit-transition: .4s;
		  transition: .4s;
		}

		.slider:before {
		  position: absolute;
		  content: "";
		  height: 16px;
		  width: 16px;
		  left: 4px;
		  bottom: 4px;
		  background-color: white;
		  -webkit-transition: .4s;
		  transition: .4s;
		}

		input:checked + .slider {
		  background-color: #2196F3;
		}

		input:focus + .slider {
		  box-shadow: 0 0 1px #2196F3;
		}

		input:checked + .slider:before {
		  -webkit-transform: translateX(26px);
		  -ms-transform: translateX(26px);
		  transform: translateX(26px);
		}

		/* Rounded sliders */
		.slider.round {
		  border-radius: 34px;
		}

		.slider.round:before {
		  border-radius: 50%;
		}
		</style>
		
	</head>
<body>
<div class="">
	<!-- Header Menu Start-->
	<?php include"employer-header.php"?>
	<!-- Header Menu End -->

	<div class="container" style="margin-bottom:20px;">
		<div class="row emplyer_align profile_row">
				<div class="col-md-2">
				<?php if(empty($profilerow["profile_pic"]))
				{
					?><img src="image/dp/profile.jpg" alt="<?=ucwords($profilerow["name"])?> Profile Picture" width="100%"><?php
				}else{
					?><img src="image/dp/<?=$profilerow["profile_pic"]?>" alt="pic" width="100%"><?php
				}
				?>
					
				</div>
				<div class="col-md-8">
					<div>
						<div>
							<div class="row my_heading">
								<h2 class="myprofile_heading"><?=ucwords($profilerow["name"])?></h2>
								<a href="employer-profile-update.php" class="btn btn-primary my_btn" role="button">Update Profile </a>
							</div>
							<?php
							if(empty($profilerow["profile_pic"])){
								?>
								<div class="progress">
								  <div class="progress-bar progress-bar-danger" role="progressbar" aria-valuenow="40" aria-valuemin="0" aria-valuemax="100" style="width:60%">
									60% Profile Complete
								  </div>
								</div>
								<?php
							}elseif(empty($profilerow["description"])){
								?>
								<div class="progress">
								  <div class="progress-bar progress-bar-info" role="progressbar" aria-valuenow="50" aria-valuemin="0" aria-valuemax="100" style="width:70%">
									70% Profile Complete
								  </div>
								</div>
								<?php
							}elseif(empty($profilerow["facebook"]) || empty($profilerow["twitter"]) || empty($profilerow["linkedin"]) || empty($profilerow["googleplus"])){
								?>
								<div class="progress">
								  <div class="progress-bar progress-bar-warning" role="progressbar" aria-valuenow="60" aria-valuemin="0" aria-valuemax="100" style="width:80%">
									80% Profile Complete
								  </div>
								</div>
								<?php
							}else{
								?>
								<div class="progress">
								  <div class="progress-bar progress-bar-success" role="progressbar" aria-valuenow="70" aria-valuemin="0" aria-valuemax="100" style="width:100%">
									100% Profile Complete
								  </div>
								</div>
								<?php
							}?>	
							<div style="border:0px solid gray;"><span><b>Email ID</b> - <?=$profilerow["email"]?></span>
							<ul class="soc profile_social1 pull-right">
								<?php
								if(!empty($profilerow["facebook"]))
								{
									?><li><a class="soc-facebook" href="<?=$profilerow["facebook"]?>" target="_blank"></a></li><?php
								}
								if(!empty($profilerow["twitter"]))
								{
									?><li><a class="soc-twitter" href="<?=$profilerow["twitter"]?>" target="_blank"></a></li><?php
								}
								if(!empty($profilerow["googleplus"]))
								{
									?><li><a class="soc-googleplus" href="<?=$profilerow["googleplus"]?>" target="_blank"></a></li><?php
								}
								if(!empty($profilerow["linkedin"]))
								{
									?><li><a class="soc-linkedin" href="<?=$profilerow["linkedin"]?>" target="_blank"></a></li><?php
								}
								?>
							</ul>
							</div>
							<p><b>Designation</b> - <?=$profilerow["designation"]?></p>
							<p><?=$profilerow["description"]?></p>
							<?php
							if(!empty($_SESSION['msg']))
							{ 
								echo '<div class="box-body"><div class="alert alert-success alert-dismissible"><button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button><h4><i class="icon fa fa-check"></i> Success!</h4>'.$_SESSION['msg'].'</div></div>';
								unset($_SESSION['msg']);
							}
							// if(!empty($_SESSION['err']))
							// {
								// echo'<div class="box-body"><div class="alert alert-danger alert-dismissible"><button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button><h4><i class="icon fa fa-ban"></i> Warning!</h4>'.$_SESSION['err'].'</div></div>'; 
								// unset($_SESSION['err']);
							// }
							?>
						</div>
						<div class="profile_tab">
						  <ul class="nav nav-tabs profile_bottom">
							<li class="active"><a href="#profile">profile</a></li>
							<li><a href="#Privacy">Privacy Setting</a></li>
							<!--li><a href="#Account">Account Setting</a></li-->
						  </ul>

						  <div class="tab-content">
							<div id="profile" class="tab-pane fade in active profile_menu" >
								<div class="row" style="border-bottom:1px dashed lightgray;padding:5px;">
									<div class="col-md-2"><span class="profile_para"><b>Name </b></span></div>
									<div class="col-md-10" style="text-align:justify;"><?=$profilerow["name"]?></div>
								</div>
								<div class="row" style="border-bottom:1px dashed lightgray;padding:5px;">
									<div class="col-md-2"><span class="profile_para"><b>Contact </b></span></div>
									<div class="col-md-10" style="text-align:justify;"><?=$profilerow["contact"]?></div>
								</div>
								<div class="row" style="border-bottom:1px dashed lightgray;padding:5px;">
									<div class="col-md-2"><span class="profile_para"><b>Email ID </b></span></div>
									<div class="col-md-10" style="text-align:justify;"><?=$profilerow["email"]?></div>
								</div>
								<div class="row" style="border-bottom:1px dashed lightgray;padding:5px;">
									<div class="col-md-2"><span class="profile_para"><b>Address </b></span></div>
									<div class="col-md-10" style="text-align:justify;"><?=$profilerow["address"]?></div>
								</div>
								<div class="row" style="border-bottom:1px dashed lightgray;padding:5px;">
									<div class="col-md-2"><span class="profile_para"><b>Area </b></span></div>
									<div class="col-md-10" style="text-align:justify;"><?=$profilerow["location"].', '.$profilerow["city"].', '.$profilerow["state"].', '.$profilerow["country"].', '.$profilerow["pincode"]?></div>
								</div>
								<div class="row" style="border-bottom:1px dashed lightgray;padding:5px;">
									<div class="col-md-2"><span class="profile_para"><b>Joining Date </b></span></div>
									<div class="col-md-10" style="text-align:justify;"><?=date("d M, Y",strtotime($profilerow["add_date"]))?></div>
								</div>
								<div class="row" style="border-bottom:1px dashed lightgray;padding:5px;">
									<div class="col-md-2"><span class="profile_para"><b>Experience </b></span></div>
									<div class="col-md-10" style="text-align:justify;"><?=$profilerow["experience"]?></div>
								</div>
								<div class="row" style="border-bottom:1px dashed lightgray;padding:5px;">
									<div class="col-md-2"><span class="profile_para"><b>Anual Salary </b></span></div>
									<div class="col-md-10" style="text-align:justify;"><?=$profilerow["anual_salary"]?></div>
								</div>
								<div class="row" style="border-bottom:1px dashed lightgray;padding:5px;">
									<div class="col-md-2"><span class="profile_para"><b>Gender </b></span></div>
									<div class="col-md-10" style="text-align:justify;"><?=$profilerow["gender"]?></div>
								</div>
								<div class="row" style="border-bottom:1px dashed lightgray;padding:5px;">
									<div class="col-md-2"><span class="profile_para"><b>Martial Status </b></span></div>
									<div class="col-md-10" style="text-align:justify;"><?=$profilerow["m_s"]?></div>
								</div>
								<!--div class="row" style="border-bottom:1px dashed lightgray;padding:5px;">
									<div class="col-md-2"><span class="profile_para"><b></b></span></div>
									<div class="col-md-10" style="text-align:justify;">
									</div>
								</div-->
							</div>
							<div id="Privacy" class="tab-pane fade profile_menu1">
								<div class="row">
									<div class="col-lg-4">
										<span style="font-weight:bold;">Profile View</span>
										<span style="float:right;">:</span>
									</div>
									<div class="col-lg-8">
										<span style="float:left;">Deactive</span>
										<span style="float:left;padding:0px 10px 0px 10px ;">
											<label class="switch">
											  <input type="checkbox" disabled <?php if($profilerow["profile_status"]=="1") { echo"checked"; }?>>
											  <span class="slider round"></span>
											</label>
										</span>
										<span style="float:left;">Active</span>
									</div>
								</div>
								<hr>
								<div class="row">
									<div class="col-lg-4">
										<span style="font-weight:bold;">Social Media View</span>
										<span style="float:right;">:</span>
									</div>
									<div class="col-lg-8">
										<span style="float:left;">Deactive</span>
										<span style="float:left;padding:0px 10px 0px 10px ;">
											<label class="switch">
											  <input type="checkbox" disabled <?php if($profilerow["socialmedia_status"]=="1") { echo"checked"; }?>>
											  <span class="slider round"></span>
											</label>
										</span>
										<span style="float:left;">Active</span>
									</div>
								</div>
							</div>
							<div id="Account" class="tab-pane fade">
							  <h3>Menu 2</h3>
							  <p>Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium, totam rem aperiam.</p>
							</div>
						  </div>
						</div>
						<div class="col-md-12 text-left up_submit" style="margin-top:50px;">
							<a href="employer-profile-update.php" class="btn btn-default" role="button"><i class="fas fa-edit"></i> Update Your Profile</a>
						</div>
					</div>
				</div>
				<div class="col-md-2 myp_line">
					<h5>Already Register?</h5>
					<form action="/action_page.php">
						<div class="form-group">
						  <label for="email">Email:</label>
						  <input type="email" class="form-control" id="email" placeholder="Enter email" name="email">
						</div>
						<div class="form-group">
						  <label for="pwd">Password:</label>
						  <input type="password" class="form-control" id="pwd" placeholder="Enter password" name="pwd">
						</div>
						<div class="checkbox">
						  <label><input type="checkbox" name="remember">Remember me</label>
						</div>
						<a href="#" class="btn btn-primary" role="button" >Submit </a>
					</form>
				</div>
		</div>
	</div>

	<!--Footer-->
	<?php include"footer.php"; ?>
	<!--Footer-->
	
	<script>
		$(document).ready(function(){
			$(".nav-tabs a").click(function(){
				$(this).tab('show');
			});
		});
		jQuery(document).ready(function(){
			$(".dropdown").hover(
				function() { $('.dropdown-menu', this).fadeIn("fast");
				},
				function() { $('.dropdown-menu', this).fadeOut("fast");
			});
		});
		window.setTimeout(function() {
			$(".alert").fadeTo(500, 0).slideUp(500, function(){
				$(this).remove(); 
			});
		}, 1000);
	</script>
</body>
</html>
