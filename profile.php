<?php
	session_start();
	include"cjobadmin/api/db_config.php";
	if(!isset($_SESSION["flag"])){header("location:index.php");}
	$profilerow = mysqli_fetch_array(mysqli_query($db,"select * from cj_user where id='".$_SESSION["id"]."'"));
?>
<!DOCTYPE html>
<html lang="en">
	
	<head>
		<title>Job</title>
		<meta charset="utf-8">
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<link rel="canonical" href=""/>
		<meta charset="UTF-8" /> 
		<meta http-equiv="X-UA-Compatible" content="IE=Edge" />
		<meta name="description" content=""/>
		<meta name="robots" content="noindex, nofollow">
		<meta name="google-site-verification" content="" />
		<meta name="keywords" content=""/>
		<meta http-equiv="Content-Language" content="en-us" > 
		<meta name="revisit-after" content="1 days" > 
		<meta name="RATING" content="General" > 
		<!-- bootstrap & fontawesome -->
		<link rel="stylesheet" href="<?=$url?>/css/w3.css">
		<link rel="stylesheet" href="<?=$url?>/socicon/social_media.css">
		<link rel="stylesheet" href="<?=$url?>/css/bootstrap.min.css">
		<link rel="stylesheet" type="text/css" href="<?=$url?>/seejob.css">
		<link rel="stylesheet" href="<?=$url?>/socicon/social_media.css">
		<!-- page specific plugin styles -->
		<script src="<?=$url?>/js/3.2.1-jquery.min.js"></script>
		<script src="<?=$url?>/js/3.3.7-js-bootstrap.min.js"></script>
		<script defer src="<?=$url?>/js/fontawesome.com.js"></script>
		
		<style>
		.heding_color
		{
			margin-top:-20px;
			background-image:url(<?=$url?>/image/bannerh.jpg);
			width:100%;
			height:100px;
		}
		/*filter code*/
    	.behclick-panel  .list-group {
    		margin-bottom: 0px;
		}
		.behclick-panel .list-group-item:first-child {
			border-top-left-radius:0px;
			border-top-right-radius:0px;
		}
		.behclick-panel .list-group-item {
			border-right:0px;
			border-left:0px;
		}
		.behclick-panel .list-group-item:last-child{
			border-bottom-right-radius:0px;
			border-bottom-left-radius:0px;
		}
		.behclick-panel .list-group-item {
			padding: 5px;
		}
		.behclick-panel .panel-heading {
			/* 				padding: 10px 15px;
                            border-bottom: 1px solid transparent; */
			border-top-right-radius: 0px;
			border-top-left-radius: 0px;
			border-bottom: 1px solid darkslategrey;
		}
		.behclick-panel .panel-heading:last-child{
			/* border-bottom: 0px; */
		}
		.behclick-panel {
			border-radius: 0px;
			border-right: 0px;
			border-left: 0px;
			border-bottom: 0px;
			box-shadow: 0 0px 0px rgba(0, 0, 0, 0);
		}
		.behclick-panel .radio, .checkbox {
			margin: 0px;
			padding-left: 10px;
		}
		.behclick-panel .panel-title > a, .panel-title > small, .panel-title > .small, .panel-title > small > a, .panel-title > .small > a {
			outline: none;
		}
		.behclick-panel .panel-body > .panel-heading{
			padding:10px 10px;
		}
		.behclick-panel .panel-body {
			padding: 0px;
		}
		.employer_detail_margin
		{
			
			margin-top:-40px;
		}
		// .fixed-leftbar{
			// position:fixed;
			// z-index:1;
			// width:300px;
		// }
		</style>

	</head>
	
<body>
	<div class="">
	<!-- Header Menu Start-->
	<?php include"header.php"?>
	<!-- Header Menu End -->

	<!--div class="container-fluid heding_color sticky"></div-->
	 <div class="container employer_detail_margin" style="margin-top:10px;">
		<div class="row " style="margin-top:20px;">
				<!--Filter-->
				<div class="col-md-2 apply_box " style="position:sticky;top:40px;">
					<form class="example" action="" method="GET" >
						<div id="accordion" class="panel panel-primary behclick-panel" style="border:1px solid #;">
							<div class="panel-heading" style="background-color:#4A90E2;">
								<h3 class="panel-title">Quick Links</h3>
							</div>
							<br>
							<div class="panel-body" >
								<div id="collapse" class="panel-collapse collapse in" >
									<ul class="list-group">

										<a href="#Profile Picture ">
											<li class="list-group-item">
												<div class="1radio">
													<label><i class="fa fa-angle-right"></i> Profile Picture </label>
												</div>
											</li>
										</a>
										<a href="#Resume Headline ">
											<li class="list-group-item">
												<div class="1radio">
													<label><i class="fa fa-angle-right"></i> Resume Headline </label>
												</div>
											</li>
										</a>
										<a href="#Education ">
											<li class="list-group-item">
												<div class="1radio">
													<label><i class="fa fa-angle-right"></i> Education </label>
												</div>
											</li>
										</a>
										<a href="#Personal Details ">
											<li class="list-group-item">
												<div class="1radio">
													<label><i class="fa fa-angle-right"></i> Personal Details </label>
												</div>
											</li>
										</a>
										<a href="#Basic Details ">
											<li class="list-group-item">
												<div class="1radio">
													<label><i class="fa fa-angle-right"></i> Basic Details </label>
												</div>
											</li>
										</a>
										<a href="#Accepted Career Profile ">
											<li class="list-group-item">
												<div class="1radio">
													<label><i class="fa fa-angle-right"></i> Accepted Career Profile </label>
												</div>
											</li>
										</a>
										<a href="#Social Media Profile ">
											<li class="list-group-item">
												<div class="1radio">
													<label><i class="fa fa-angle-right"></i> Social Media Profile </label>
												</div>
											</li>
										</a>
										<a href="#Attachment Resume ">
											<li class="list-group-item">
												<div class="1radio">
													<label><i class="fa fa-angle-right"></i> Attachment Resume </label>
												</div>
											</li>
										</a>
										<a href="profile-setting.php ">
											<li class="list-group-item">
												<div class="1radio">
													<label><i class="fa fa-angle-right"></i> Setting </label>
												</div>
											</li>
										</a>
										
									</ul>
								</div>

							</div>
						</div>
					</form>
				</div>
				<!--Filter-->
			
				<!--Employer Job-->
				<div class="col-md-7">
					<div class="apply_box">
						<div id="accordion1" class="panel1 1panel-primary 1behclick-panel" style="border:1px solid #;">
							<div class="panel-heading" style="background-color:#fff;color:#4A90E2;">
								<span class="panel-title">
									<!---progress bar-->
									<div class="progress">
									  <div class="progress-bar progress-bar-danger" role="progressbar" style="width:10%">
										10%
									  </div>
									  <div class="progress-bar progress-bar-warning" role="progressbar" style="width:20%">
										20%
									  </div>
									  <div class="progress-bar progress-bar-info" role="progressbar" style="width:30%">
										30%
									  </div>
									  <div class="progress-bar progress-bar-success" role="progressbar" style="width:40%">
										40%
									  </div>
									</div>
									<!---progress bar-->
									<h3 style="color:#4A90E2;" class="apjob_heading1"><b>Profile Completion Bar </b> 
									</h3>
								</span>
							</div>
						</div>
					</div>
				
					<!-- Profile Picture start-->
					
					<div id="Profile Picture" style="padding-top:40px;">
					<div class="apply_box row" style="padding-bottom:30px;">
						<div id="accordion1" class="panel1 1panel-primary 1behclick-panel" style="border:1px solid #;">
							<div class="panel-heading" style="background-color:#4A90E2;">
								<span class="panel-title">
									<h3 style="color:#fff;" class="apjob_heading1"><b>Profile Picture </b> 
									<span class="pull-right">
										<a href="" data-toggle="modal" data-target="#model1" ><img src="image/edit4.png" style="width:30px;"  data-toggle="tooltip" data-placement="top" title="Edit"></a>
										<!--a href="" style="color:#fff;" data-toggle="modal" data-target="#<?=$i?>" ><i class="fa fa-edit" data-toggle="tooltip" data-placement="top" title="Edit"></i></a>
										<a href="" data-toggle="modal" data-target="#<?=$i?>" ><img src="image/edit1.png" style="width:30px;background-color:#fff;"  data-toggle="tooltip" data-placement="top" title="Edit"></a-->
										<script>
											$(function () {
											  $('[data-toggle="tooltip"]').tooltip()
											})
										</script>
									<span>
									</h3>
								</span>
							</div>
						</div>
						<!--div class="col-md-12 apply_content1">
							<h3 style="color:#000;" class="apjob_heading1"><b>Profile <?=$i?></b> 
							<a href="" data-toggle="modal" data-target="#<?=$i?>" ><img src="image/edit1.png" style="width:30px;" data-toggle="tooltip" data-placement="top" title="Edit"></a></h3><hr>
							<script>
								$(function () {
								  $('[data-toggle="tooltip"]').tooltip()
								})
							</script>
						</div-->
						<!-- Modal -->
						<form id="pu1" action="<?=$url?>/php/profile_update.php" method="POST">
						  <div class="modal fade" id="model1" role="dialog">
							<div class="modal-dialog modal-md">
							  <div class="modal-content" style="padding:0px;">
								<div class="modal-header" style="background-color:#4A90E2;color:#fff;">
								  <button type="button" class="close" data-dismiss="modal">&times;</button>
								  <h4 class="modal-title">Modal Header</h4>
								</div>
								<div class="modal-body">
									<center>
										<div class="row">
											<div class="col-md-12">
												<img id="img1" src="<?=$url?>/image/dp/<?=$profilerow['profile_pic']?>" class="img-circle" alt="face" width="50%;" style="border:1px solid #ccc;" onError="this.src='image/dp/profile.jpg'"/>
												<br><br>
												<div class="file btn btn-primary" style="position: relative;overflow: hidden;">
													Upload Profile Pic
													<input type="file" id="file_name1" alt="1" accept="image/*" name="image" style=" position: absolute;font-size: 50px;opacity: 0;right: 0;top: 0;"/>
												</div>
											</div>
										</div>
									</center>
								</div>
								<div class="modal-footer">
									<div id="pu1-results"></div>
									<button type="button" class="btn btn-default pull-left" data-dismiss="modal">Close</button>
									<input type="hidden" name="pu1" />
									<input type="submit" class="btn btn-primary" value="Save">
								</div>
							  </div>
							</div>
						  </div>
						</form>
						<!-- Modal -->
						<div class="col-md-12">
							<div class="row">
								<div class="col-md-12 apjob_bottom" style="padding:;">
								
									<div class="col-md-12">
										<center>
											<div class="row1 " style="background-color:#4A90E2;color:#fff;">
												<div class="col-md-12">
												<img id="img1" src="<?=$url?>/image/dp/<?=$profilerow['profile_pic']?>"  class="img-circle" alt="face" width="50%;" style="border:1px solid #ccc;"  onError="this.src='image/dp/profile.jpg'" 
												<?php
												/*
												if($get_profile['profile_pic']=='')
												{
													?><img src="<?=$url?>/image/profile.jpg" class="img-circle" alt="face" width="50%;" style="border:1px solid #ccc;"><?php
												}else{
													?><img src="<?=$url?>/image/dp/<?=$get_profile['profile_pic']?>" class="img-circle" alt="face" width="50%;" style="border:1px solid #ccc;"><?php
												}*/
												?>
												</div>
											</div>
										</center>

									</div>
									
								</div>
							</div>
						</div>
					</div>
					</div>
					<!-- Profile Picture start-->
					
					<!-- Resume Headline start-->
					<div id="Resume Headline" style="padding-top:40px;">
					<div class="apply_box row" style="padding-bottom:30px;">
						<div id="accordion1" class="panel1 1panel-primary 1behclick-panel" style="border:1px solid #;">
							<div class="panel-heading" style="background-color:#4A90E2;">
								<span class="panel-title">
									<h3 style="color:#fff;" class="apjob_heading1"><b>Resume Headline </b> 
									<span class="pull-right">
										<a href="" data-toggle="modal" data-target="#model2" ><img src="image/edit4.png" style="width:30px;"  data-toggle="tooltip" data-placement="top" title="Edit"></a>
										<!--a href="" style="color:#fff;" data-toggle="modal" data-target="#<?=$i?>" ><i class="fa fa-edit" data-toggle="tooltip" data-placement="top" title="Edit"></i></a>
										<a href="" data-toggle="modal" data-target="#<?=$i?>" ><img src="image/edit1.png" style="width:30px;background-color:#fff;"  data-toggle="tooltip" data-placement="top" title="Edit"></a-->
										<script>
											$(function () {
											  $('[data-toggle="tooltip"]').tooltip()
											})
										</script>
									<span>
									</h3>
								</span>
							</div>
						</div>
						<!--div class="col-md-12 apply_content1">
							<h3 style="color:#000;" class="apjob_heading1"><b>Profile <?=$i?></b> 
							<a href="" data-toggle="modal" data-target="#<?=$i?>" ><img src="image/edit1.png" style="width:30px;" data-toggle="tooltip" data-placement="top" title="Edit"></a></h3><hr>
							<script>
								$(function () {
								  $('[data-toggle="tooltip"]').tooltip()
								})
							</script>
						</div-->
						<!-- Modal -->
						<form id="pu2" action="<?=$url?>/php/profile_update.php" method="POST">
						  <div class="modal fade" id="model2" role="dialog">
							<div class="modal-dialog modal-md">
							  <div class="modal-content" style="padding:0px;">
								<div class="modal-header" style="background-color:#4A90E2;color:#fff;">
								  <button type="button" class="close" data-dismiss="modal">&times;</button>
								  <h4 class="modal-title">resume Headline</h4>
								</div>
								<div class="modal-body">
									<center>
										<div class="row">
											<div class="col-md-12">
												<textarea name="resume_headline" class="form-control" rows="5" required><?=$profilerow["resume_headline"]?></textarea>	
											</div>
										</div>
									</center>
								</div>
								<div class="modal-footer">
									<div id="pu2-results"></div>
									<button type="button" class="btn btn-default pull-left" data-dismiss="modal">Close</button>
									<input type="hidden" name="pu2" />
									<input type="submit" class="btn btn-primary" value="Save">
								</div>
							  </div>
							</div>
						  </div>
						</form>
						<!-- Modal -->
						<div class="col-md-12">
							<div class="row">
								<div class="col-md-12 apjob_bottom" style="padding:;">
									<div class="col-md-1">
										<span><i class="fas fa-snowflake"></i></span>
									</div>
									<div class="col-md-11">
										<span><?=$profilerow['resume_headline']?></span>
									</div>	
								</div>
							</div>
						</div>
					</div>
					</div>
					<!-- Resume Headline start-->
					
					<!-- Education start-->
					<div id="Education" style="padding-top:40px;">
					<div class="apply_box row" style="padding-bottom:30px;">
						<div id="accordion1" class="panel1 1panel-primary 1behclick-panel" style="border:1px solid #;">
							<div class="panel-heading" style="background-color:#4A90E2;">
								<span class="panel-title">
									<h3 style="color:#fff;" class="apjob_heading1"><b>Education </b> 
									<span class="pull-right">
										<a href="" data-toggle="modal" data-target="#model3" ><img src="image/edit4.png" style="width:30px;"  data-toggle="tooltip" data-placement="top" title="Edit"></a>
										<!--a href="" style="color:#fff;" data-toggle="modal" data-target="#<?=$i?>" ><i class="fa fa-edit" data-toggle="tooltip" data-placement="top" title="Edit"></i></a>
										<a href="" data-toggle="modal" data-target="#<?=$i?>" ><img src="image/edit1.png" style="width:30px;background-color:#fff;"  data-toggle="tooltip" data-placement="top" title="Edit"></a-->
										<script>
											$(function () {
											  $('[data-toggle="tooltip"]').tooltip()
											})
										</script>
									<span>
									</h3>
								</span>
							</div>
						</div>
						<!--div class="col-md-12 apply_content1">
							<h3 style="color:#000;" class="apjob_heading1"><b>Profile <?=$i?></b> 
							<a href="" data-toggle="modal" data-target="#<?=$i?>" ><img src="image/edit1.png" style="width:30px;" data-toggle="tooltip" data-placement="top" title="Edit"></a></h3><hr>
							<script>
								$(function () {
								  $('[data-toggle="tooltip"]').tooltip()
								})
							</script>
						</div-->
						<!-- Modal -->
						<form id="pu3" action="<?=$url?>/php/profile_update.php" method="POST">
						  <div class="modal fade" id="model3" role="dialog">
							<div class="modal-dialog modal-md">
							  <div class="modal-content" style="padding:0px;">
								<div class="modal-header" style="background-color:#4A90E2;color:#fff;">
								  <button type="button" class="close" data-dismiss="modal">&times;</button>
								  <h4 class="modal-title">Education</h4>
								</div>
								<div class="modal-body">
									<div class="row">
										<div class="form-group">
											<div class="col-md-3" style="font-weight:bold;">
												<label>Education<label>
											</div>
											<div class="col-md-7">
												<select name="education" class="form-control" required>
													<option value="">Select Education</option>
													<option <?=(($profilerow['education']=='Post Graduate')?'selected':'')?> value="Post Graduate">Post Graduate</option>
													<option <?=(($profilerow['education']=='Graduate')?'selected':'')?> value="Graduate">Graduate</option>
													<option <?=(($profilerow['education']=='12th')?'selected':'')?> value="12th">12th</option>
													<option <?=(($profilerow['education']=='10th')?'selected':'')?> value="10th">10th</option>
												</select>
											</div>
										</div><br><br>
									</div><br><br>
									<div class="row">
										<div class="form-group">
											<div class="col-md-3" style="font-weight:bold;">
												<label>Course<label>
											</div>
											<div class="col-md-7">
												<input type="text" name="course" class="form-control" required placeholder="Enter Course" value="<?=$profilerow['course']?>"/>
											</div>
										</div><br><br>
										<div class="form-group">
											<div class="col-md-3" style="font-weight:bold;">
												<label>Specialization<label>
											</div>
											<div class="col-md-7">
												<input type="text" name="specialization" class="form-control" required placeholder="Enter Specialization" value="<?=$profilerow['specialization']?>"/>
											</div>
										</div><br><br>
										<div class="form-group">
											<div class="col-md-3" style="font-weight:bold;">
												<label>University/Institute<label>
											</div>
											<div class="col-md-7">
												<input type="text" name="u_i" class="form-control" required placeholder="Enter University or Institute" value="<?=$profilerow['u_i']?>"/>
											</div>
										</div><br><br>
									</div>
								</div>
								<div class="modal-footer">
									<div id="pu3-results"></div>
									<button type="button" class="btn btn-default pull-left" data-dismiss="modal">Close</button>
									<input type="hidden" name="pu3" />
									<input type="submit" class="btn btn-primary" value="Save">
								</div>
							  </div>
							</div>
						  </div>
						</form>
						<!-- Modal -->
						<div class="col-md-12">
							<div class="row">
								<div class="col-md-12 apjob_bottom" style="padding:;">
									<div class="col-md-3" style="font-weight:bold;">
										<span>Education</span>
									</div>
									<div class="col-md-7">
										<span><?=$profilerow['education']?></span>
									</div>	
								</div>
								<div class="col-md-12 apjob_bottom" style="padding:;">
									<div class="col-md-3" style="font-weight:bold;">
										<span>Course</span>
									</div>
									<div class="col-md-7">
										<span><?=$profilerow['course']?></span>
									</div>	
								</div>
								<div class="col-md-12 apjob_bottom" style="padding:;">
									<div class="col-md-3" style="font-weight:bold;">
										<span>Specialization</span>
									</div>
									<div class="col-md-7">
										<span><?=$profilerow['specialization']?></span>
									</div>	
								</div>
								<div class="col-md-12 apjob_bottom" style="padding:;">
									<div class="col-md-3" style="font-weight:bold;">
										<span>University/Institute</span>
									</div>
									<div class="col-md-7">
										<span><?=$profilerow['u_i']?></span>
									</div>	
								</div>
							</div>
						</div>
					</div>
					</div>
					<!-- Education start-->
					
					<!-- Personal Details start-->
					<div id="Personal Details" style="padding-top:40px;">
					<div class="apply_box row" style="padding-bottom:30px;">
						<div id="accordion1" class="panel1 1panel-primary 1behclick-panel" style="border:1px solid #;">
							<div class="panel-heading" style="background-color:#4A90E2;">
								<span class="panel-title">
									<h3 style="color:#fff;" class="apjob_heading1"><b>Personal Details </b> 
									<span class="pull-right">
										<a href="" data-toggle="modal" data-target="#model4" ><img src="image/edit4.png" style="width:30px;"  data-toggle="tooltip" data-placement="top" title="Edit"></a>
										<!--a href="" style="color:#fff;" data-toggle="modal" data-target="#<?=$i?>" ><i class="fa fa-edit" data-toggle="tooltip" data-placement="top" title="Edit"></i></a>
										<a href="" data-toggle="modal" data-target="#<?=$i?>" ><img src="image/edit1.png" style="width:30px;background-color:#fff;"  data-toggle="tooltip" data-placement="top" title="Edit"></a-->
										<script>
											$(function () {
											  $('[data-toggle="tooltip"]').tooltip()
											})
										</script>
									<span>
									</h3>
								</span>
							</div>
						</div>
						<!--div class="col-md-12 apply_content1">
							<h3 style="color:#000;" class="apjob_heading1"><b>Profile <?=$i?></b> 
							<a href="" data-toggle="modal" data-target="#<?=$i?>" ><img src="image/edit1.png" style="width:30px;" data-toggle="tooltip" data-placement="top" title="Edit"></a></h3><hr>
							<script>
								$(function () {
								  $('[data-toggle="tooltip"]').tooltip()
								})
							</script>
						</div-->
						<!-- Modal -->
						<form id="pu4" action="<?=$url?>/php/profile_update.php" method="POST">
						  <div class="modal fade" id="model4" role="dialog">
							<div class="modal-dialog modal-md">
							  <div class="modal-content" style="padding:0px;">
								<div class="modal-header" style="background-color:#4A90E2;color:#fff;">
								  <button type="button" class="close" data-dismiss="modal">&times;</button>
								  <h4 class="modal-title">Personal Details</h4>
								</div>
								<div class="modal-body">
									<div class="row">
										<div class="form-group">
											<div class="col-md-3" style="font-weight:bold;">
												<label>Category<label>
											</div>
											<div class="col-md-7">
												<select name="category" class="form-control" required>
													<option value="">Select Category</option>
													<option <?=(($profilerow['category']=='General')?'selected':'')?> value="General">General</option>
													<option <?=(($profilerow['category']=='SC')?'selected':'')?> value="SC">SC</option>
													<option <?=(($profilerow['category']=='ST')?'selected':'')?> value="ST">ST</option>
													<option <?=(($profilerow['category']=='OBC')?'selected':'')?> value="OBC">OBC</option>
												</select>
											</div>
										</div><br><br>
										<div class="form-group">
											<div class="col-md-3" style="font-weight:bold;">
												<label>Marital Status<label>
											</div>
											<div class="col-md-7">
												<select name="m_s" class="form-control" required>
													<option value="">Select Marital Status</option>
													<option <?=(($profilerow['m_s']=='Single')?'selected':'')?> value="Single">Single</option>
													<option <?=(($profilerow['m_s']=='Married')?'selected':'')?> value="Married">Married</option>
													<option <?=(($profilerow['m_s']=='Widowed')?'selected':'')?> value="Widowed">Widowed</option>
													<option <?=(($profilerow['m_s']=='Divorced')?'selected':'')?> value="Divorced">Divorced</option>
													<option <?=(($profilerow['m_s']=='Separated')?'selected':'')?> value="Separated">Separated</option>
													<option <?=(($profilerow['m_s']=='Other')?'selected':'')?> value="Other">Other</option>
												</select>
											</div>
										</div><br><br>
										<div class="form-group">
											<div class="col-md-3" style="font-weight:bold;">
												<label>Gender<label>
											</div>
											<div class="col-md-7">
												<select name="gender" class="form-control" required>
													<option value="">Select Marital Status</option>
													<option <?=(($profilerow['gender']=='Male')?'selected':'')?> value="Male">Male</option>
													<option <?=(($profilerow['gender']=='Female')?'selected':'')?> value="Female">Female</option>
													<option <?=(($profilerow['gender']=='Other')?'selected':'')?> value="Other">Other</option>
												</select>
											</div>
										</div><br><br>
										<div class="form-group">
											<div class="col-md-3" style="font-weight:bold;">
												<label>Date of Birth<label>
											</div>
											<div class="col-md-7">
												<input type="date" name="dob" class="form-control" required placeholder="Enter dob" value="<?=$profilerow['dob']?>"/>
											</div>
										</div><br><br>
										<div class="form-group">
											<div class="col-md-3" style="font-weight:bold;">
												<label>Address<label>
											</div>
											<div class="col-md-7">
												<textarea name="address" class="form-control" required placeholder="Enter Address"?><?=$profilerow['address']?></textarea>
											</div>
										</div><br><br>
									</div>
								</div>
								<div class="modal-footer">
									<div id="pu4-results"></div>
									<button type="button" class="btn btn-default pull-left" data-dismiss="modal">Close</button>
									<input type="hidden" name="pu4" />
									<input type="submit" class="btn btn-primary" value="Save">
								</div>
							  </div>
							</div>
						  </div>
						</form>
						<!-- Modal -->
						<div class="col-md-12">
							<div class="row">
								<div class="col-md-12 apjob_bottom" style="padding:;">
									<div class="col-md-3" style="font-weight:bold;">
										<span>Permanent Address</span>
									</div>
									<div class="col-md-7">
										<span><?=$profilerow['address']?></span>
									</div>	
								</div>
								<div class="col-md-12 apjob_bottom" style="padding:;">
									<div class="col-md-3" style="font-weight:bold;">
										<span>Date Of birth</span>
									</div>
									<div class="col-md-7">
										<span><?=$profilerow['dob']?></span>
									</div>	
								</div>
								<div class="col-md-12 apjob_bottom" style="padding:;">
									<div class="col-md-3" style="font-weight:bold;">
										<span>Marital Status</span>
									</div>
									<div class="col-md-7">
										<span><?=$profilerow['m_s']?></span>
									</div>	
								</div>
								<div class="col-md-12 apjob_bottom" style="padding:;">
									<div class="col-md-3" style="font-weight:bold;">
										<span>Category</span>
									</div>
									<div class="col-md-7">
										<span><?=$profilerow['category']?></span>
									</div>	
								</div>
								<div class="col-md-12 apjob_bottom" style="padding:;">
									<div class="col-md-3" style="font-weight:bold;">
										<span>Gender</span>
									</div>
									<div class="col-md-7">
										<span><?=$profilerow['gender']?></span>
									</div>	
								</div>
							</div>
						</div>
					</div>
					</div>
					<!-- Personal Details start-->
					
					<!-- Basic Details start-->
					<div id="Basic Details" style="padding-top:40px;">
					<div class="apply_box row" style="padding-bottom:30px;">
						<div id="accordion1" class="panel1 1panel-primary 1behclick-panel" style="border:1px solid #;">
							<div class="panel-heading" style="background-color:#4A90E2;">
								<span class="panel-title">
									<h3 style="color:#fff;" class="apjob_heading1"><b>Basic Details </b> 
									<span class="pull-right">
										<a href="" data-toggle="modal" data-target="#model5" ><img src="image/edit4.png" style="width:30px;"  data-toggle="tooltip" data-placement="top" title="Edit"></a>
										<!--a href="" style="color:#fff;" data-toggle="modal" data-target="#<?=$i?>" ><i class="fa fa-edit" data-toggle="tooltip" data-placement="top" title="Edit"></i></a>
										<a href="" data-toggle="modal" data-target="#<?=$i?>" ><img src="image/edit1.png" style="width:30px;background-color:#fff;"  data-toggle="tooltip" data-placement="top" title="Edit"></a-->
										<script>
											$(function () {
											  $('[data-toggle="tooltip"]').tooltip()
											})
										</script>
									<span>
									</h3>
								</span>
							</div>
						</div>
						<!--div class="col-md-12 apply_content1">
							<h3 style="color:#000;" class="apjob_heading1"><b>Profile <?=$i?></b> 
							<a href="" data-toggle="modal" data-target="#<?=$i?>" ><img src="image/edit1.png" style="width:30px;" data-toggle="tooltip" data-placement="top" title="Edit"></a></h3><hr>
							<script>
								$(function () {
								  $('[data-toggle="tooltip"]').tooltip()
								})
							</script>
						</div-->
						<!-- Modal -->
						<form id="pu5" action="<?=$url?>/php/profile_update.php" method="POST">
						  <div class="modal fade" id="model5" role="dialog">
							<div class="modal-dialog modal-md">
							  <div class="modal-content" style="padding:0px;">
								<div class="modal-header" style="background-color:#4A90E2;color:#fff;">
								  <button type="button" class="close" data-dismiss="modal">&times;</button>
								  <h4 class="modal-title">Basic Details</h4>
								</div>
								<div class="modal-body">
									<div class="row">
										<div class="form-group">
											<div class="col-md-3" style="font-weight:bold;">
												<label>Name<label>
											</div>
											<div class="col-md-7">
												<input type="text" name="name" class="form-control" required placeholder="Enter Name" value="<?=$profilerow['name']?>"/>
											</div>
										</div><br><br>
										<div class="form-group">
											<div class="col-md-3" style="font-weight:bold;">
												<label>Contact<label>
											</div>
											<div class="col-md-7">
												<input type="text" name="contact" class="form-control" required placeholder="Enter Contact" value="<?=$profilerow['contact']?>" pattern="[6789][0-9]{9}"/>
											</div>
										</div><br><br>
										<div class="form-group">
											<div class="col-md-3" style="font-weight:bold;">
												<label>Alternate Contact<label>
											</div>
											<div class="col-md-7">
												<input type="text" name="alter_contact" class="form-control" required placeholder="Enter Alternate Contact" value="<?=$profilerow['alter_contact']?>" pattern="[6789][0-9]{9}"/>
											</div>
										</div><br><br>
										<div class="form-group">
											<div class="col-md-3" style="font-weight:bold;">
												<label>Address<label>
											</div>
											<div class="col-md-7" style="padding:0px;">
												<div class="col-md-5">
													<select name="country" class="form-control" required>
														<option value="">Select Country</option>
														<?php
														$sql_coun = mysqli_query($db,"select l1 from cj_location where tl='Country' group by l1");
														while($get_country = mysqli_fetch_array($sql_coun))
														{
															?><option <?=(($get_country['l1']==$profilerow['country'])?'selected':'')?> value="<?=$get_country['l1']?>"><?=$get_country['l1']?></option><?php
														}
														?>
													</select>
												</div>
												<div class="col-md-7">
													<select name="state" id="state" class="form-control" required onchange="fetch_select_city(this.value);">
														<option value="">Select State</option>
														<?php
														$sql_state = mysqli_query($db,"select l1 from cj_location where tl='State' group by l1");
														while($get_state = mysqli_fetch_array($sql_state))
														{
															?><option <?=(($get_state['l1']==$profilerow['state'])?'selected':'')?> value="<?=$get_state['l1']?>"><?=$get_state['l1']?></option><?php
														}
														?>
													</select>
												</div>
												<br><br>
												<div class="col-md-12">
													<select name="city" id="new_select_location" class="form-control js-example-basic-single 1livesearch_sublocation" >
														<option value="<?=$profilerow['city']?>"><?=$profilerow['city']?></option>
													</select>
												</div>
											</div>
										</div><br><br><br><br>
										<div class="form-group">
											<div class="col-md-3" style="font-weight:bold;">
												<label>Home Town<label>
											</div>
											<div class="col-md-7">
												<input type="text" name="home_town" class="form-control" required placeholder="Enter Home Town" value="<?=$profilerow['home_town']?>"/>
											</div>
										</div><br><br>
										<div class="form-group">
											<div class="col-md-3" style="font-weight:bold;">
												<label>Location<label>
											</div>
											<div class="col-md-7">
												<input type="text" name="location" class="form-control" required placeholder="Enter location" value="<?=$profilerow['location']?>"/>
											</div>
										</div><br><br>
										<div class="form-group">
											<div class="col-md-3" style="font-weight:bold;">
												<label>Pin Code<label>
											</div>
											<div class="col-md-7">
												<input type="number" name="pincode" class="form-control" required placeholder="Enter Pin Code" value="<?=$profilerow['pincode']?>"/>
											</div>
										</div><br><br>
										<div class="form-group">
											<div class="col-md-3" style="font-weight:bold;">
												<label>Annual Salary<label>
											</div>
											<div class="col-md-4">
												<select name="salary_lakh" class="form-control" required>
													<option value="">Lakhs</option>
													<?php
													for($i=1; $i<=100; $i++)
													{
														?><option <?=(($profilerow['salary_lakh']==$i)?'selected':'')?> value="<?=$i?>"><?=$i?> Lakh</option><?php
													}
													?>
												</select>
											</div>
											<div class="col-md-3">
												<select name="salary_thousand" class="form-control" required>
													<option value="">Thousands</option>
													<?php
													for($j=1; $j<=100; $j++)
													{
														?><option <?=(($profilerow['salary_thousand']==$j)?'selected':'')?> value="<?=$j?>"><?=$j?> Thousands</option><?php
													}
													?>
												</select>
											</div>
										</div><br><br>
										<div class="form-group">
											<div class="col-md-3" style="font-weight:bold;">
												<label>Total Experience<label>
											</div>
											<div class="col-md-4">
												<select name="exp_year" class="form-control" required>
													<option value="">Years</option>
													<?php
													for($k=0; $k<=35; $k++)
													{
														?><option <?=(($profilerow['exp_year']==$k)?'selected':'')?> value="<?=$k?>"><?=$k?> Years</option><?php
													}
													?>
												</select>
											</div>
											<div class="col-md-3">
												<select name="exp_month" class="form-control" required>
													<option value="">Months</option>
													<?php
													for($l=0; $l<=11; $l++)
													{
														?><option <?=(($profilerow['exp_month']==$l)?'selected':'')?> value="<?=$l?>"><?=$l?> Months</option><?php
													}
													?>
												</select>
											</div>
										</div><br><br>
									</div>
								</div>
								<div class="modal-footer">
									<div id="pu5-results"></div>
									<button type="button" class="btn btn-default pull-left" data-dismiss="modal">Close</button>
									<input type="hidden" name="pu5" />
									<input type="submit" class="btn btn-primary" value="Save">
								</div>
							  </div>
							</div>
						  </div>
						</form>
						<!-- Modal -->
						<div class="col-md-12">
							<div class="row">
								<div class="col-md-12 apjob_bottom" style="padding:;">
									<div class="col-md-3" style="font-weight:bold;">
										<span>Name</span>
									</div>
									<div class="col-md-7">
										<span><?=$profilerow['name']?></span>
									</div>	
								</div>
								<div class="col-md-12 apjob_bottom" style="padding:;">
									<div class="col-md-3" style="font-weight:bold;">
										<span>Email</span>
									</div>
									<div class="col-md-7">
										<span><?=$profilerow['email']?></span>
									</div>	
								</div>
								<div class="col-md-12 apjob_bottom" style="padding:;">
									<div class="col-md-3" style="font-weight:bold;">
										<span>Contact</span>
									</div>
									<div class="col-md-7">
										<span><?=$profilerow['contact']?></span>
									</div>	
								</div>
								<div class="col-md-12 apjob_bottom" style="padding:;">
									<div class="col-md-3" style="font-weight:bold;">
										<span>Alternate Contact</span>
									</div>
									<div class="col-md-7">
										<span><?=$profilerow['alter_contact']?></span>
									</div>	
								</div>
								<div class="col-md-12 apjob_bottom" style="padding:;">
									<div class="col-md-3" style="font-weight:bold;">
										<span>Address</span>
									</div>
									<div class="col-md-7">
										<span><address><?=$profilerow['location'].', '.$profilerow['home_town'].', '.$profilerow['city'].', '.$profilerow['state'].', '.$profilerow['country'].', '.$profilerow['pincode']?></address></span>
									</div>	
								</div>
								<div class="col-md-12 apjob_bottom" style="padding:;">
									<div class="col-md-3" style="font-weight:bold;">
										<span>Experience</span>
									</div>
									<div class="col-md-7">
										<span><?=$profilerow['exp_year'].' Years - '.$profilerow['exp_month']?> Months</span>
									</div>	
								</div>
								<div class="col-md-12 apjob_bottom" style="padding:;">
									<div class="col-md-3" style="font-weight:bold;">
										<span>Annual Salary</span>
									</div>
									<div class="col-md-7">
										<span><?=$profilerow['salary_lakh'].' Lakhs - '.$profilerow['salary_thousand']?> Thousands</span>
									</div>	
								</div>
							</div>
						</div>
					</div>
					</div>
					<!-- Basic Details start-->
					
					
					<!-- Accepted Career Profile start-->
					<div id="Accepted Career Profile" style="padding-top:40px;">
					<div class="apply_box row" style="padding-bottom:30px;">
						<div id="accordion1" class="panel1 1panel-primary 1behclick-panel" style="border:1px solid #;">
							<div class="panel-heading" style="background-color:#4A90E2;">
								<span class="panel-title">
									<h3 style="color:#fff;" class="apjob_heading1"><b>Accepted Career Profile </b> 
									<span class="pull-right">
										<a href="" data-toggle="modal" data-target="#model6" ><img src="image/edit4.png" style="width:30px;"  data-toggle="tooltip" data-placement="top" title="Edit"></a>
										<!--a href="" style="color:#fff;" data-toggle="modal" data-target="#<?=$i?>" ><i class="fa fa-edit" data-toggle="tooltip" data-placement="top" title="Edit"></i></a>
										<a href="" data-toggle="modal" data-target="#<?=$i?>" ><img src="image/edit1.png" style="width:30px;background-color:#fff;"  data-toggle="tooltip" data-placement="top" title="Edit"></a-->
										<script>
											$(function () {
											  $('[data-toggle="tooltip"]').tooltip()
											})
										</script>
									<span>
									</h3>
								</span>
							</div>
						</div>
						<!--div class="col-md-12 apply_content1">
							<h3 style="color:#000;" class="apjob_heading1"><b>Profile <?=$i?></b> 
							<a href="" data-toggle="modal" data-target="#<?=$i?>" ><img src="image/edit1.png" style="width:30px;" data-toggle="tooltip" data-placement="top" title="Edit"></a></h3><hr>
							<script>
								$(function () {
								  $('[data-toggle="tooltip"]').tooltip()
								})
							</script>
						</div-->
						<!-- Modal -->
						<form id="pu6" action="<?=$url?>/php/profile_update.php" method="POST">
						  <div class="modal fade" id="model6" role="dialog">
							<div class="modal-dialog modal-md">
							  <div class="modal-content" style="padding:0px;">
								<div class="modal-header" style="background-color:#4A90E2;color:#fff;">
								  <button type="button" class="close" data-dismiss="modal">&times;</button>
								  <h4 class="modal-title">Basic Details</h4>
								</div>
								<div class="modal-body">
									<div class="row">
										<div class="form-group">
											<div class="col-md-3" style="font-weight:bold;">
												<label>Industry<label>
											</div>
											<div class="col-md-7">
												<select name="a_job_cat" id="state" class="form-control" required onchange="fetch_select_job_cat(this.value);">
													<option value="">Select Industry</option>
													<?php
													$sql_job_cat = mysqli_query($db,"select job_cat from cj_jobs group by job_cat");
													while($get_job_cat = mysqli_fetch_array($sql_job_cat))
													{
														?><option <?=(($get_job_cat['job_cat']==$profilerow['a_job_cat'])?'selected':'')?> value="<?=$get_job_cat['job_cat']?>"><?=$get_job_cat['job_cat']?></option><?php
													}
													?>
												</select>
											</div>
										</div><br><br>
										<div class="form-group">
											<div class="col-md-3" style="font-weight:bold;">
												<label>Department<label>
											</div>
											<div class="col-md-7">
												<select name="a_job" id="new_select_job_cat" required class="form-control js-example-basic-single 1livesearch_sublocation" >
													<option value="<?=$profilerow['a_job']?>"><?=$profilerow['a_job']?></option>
												</select>
											</div>
										</div><br><br>
										<div class="form-group">
											<div class="col-md-3" style="font-weight:bold;">
												<label>Role<label>
											</div>
											<div class="col-md-7">
												<input type="text" name="a_role" class="form-control" required placeholder="Enter Role" value="<?=$profilerow['a_role']?>"/>
											</div>
										</div><br><br>
										<div class="form-group">
											<div class="col-md-3" style="font-weight:bold;">
												<label>Job Type<label>
											</div>
											<div class="col-md-7">
												<select name="a_job_type" class="form-control" required1>
													<option value="">Select Job Type</option>
													<option <?=(($profilerow['a_job_type']=='Full Time')?'selected':'')?> value="Full Time">Full Time</option>
													<option <?=(($profilerow['a_job_type']=='Part Time')?'selected':'')?> value="Part Time">Part Time</option>
												</select>
											</div>
										</div><br><br>
										<div class="form-group">
											<div class="col-md-3" style="font-weight:bold;">
												<label>Work Shift<label>
											</div>
											<div class="col-md-7">
												<select name="a_work_shift" class="form-control" required1>
													<option value="">Select Work Shift</option>
													<option <?=(($profilerow['a_work_shift']=='Morning')?'selected':'')?> value="Morning">Morning</option>
													<option <?=(($profilerow['a_work_shift']=='Noon')?'selected':'')?> value="Noon">Noon</option>
													<option <?=(($profilerow['a_work_shift']=='Evening')?'selected':'')?> value="Evening">Evening</option>
													<option <?=(($profilerow['a_work_shift']=='Night')?'selected':'')?> value="Night">Night</option>
												</select>
											</div>
										</div><br><br>
										<div class="form-group">
											<div class="col-md-3" style="font-weight:bold;">
												<label>Desired Annual Salary<label>
											</div>
											<div class="col-md-4">
												<select name="a_salary_lakh" class="form-control" required>
													<option value="">Lakhs</option>
													<?php
													for($i=1; $i<=100; $i++)
													{
														?><option <?=(($profilerow['a_salary_lakh']==$i)?'selected':'')?> value="<?=$i?>"><?=$i?> Lakh</option><?php
													}
													?>
												</select>
											</div>
											<div class="col-md-3">
												<select name="a_salary_thousand" class="form-control" required>
													<option value="">Thousands</option>
													<?php
													for($j=1; $j<=100; $j++)
													{
														?><option <?=(($profilerow['a_salary_thousand']==$j)?'selected':'')?> value="<?=$j?>"><?=$j?> Thousands</option><?php
													}
													?>
												</select>
											</div>
										</div><br><br>
										<div class="form-group">
											<div class="col-md-3" style="font-weight:bold;">
												<label>Desired Location<label>
											</div>
											<div class="col-md-7">
												<input type="text" name="a_location" class="form-control" required1 placeholder="Enter Desired Location" value="<?=$profilerow['a_location']?>"/>
											</div>
										</div><br><br>
									</div>
								</div>
								<div class="modal-footer">
									<div id="pu6-results"></div>
									<button type="button" class="btn btn-default pull-left" data-dismiss="modal">Close</button>
									<input type="hidden" name="pu6" />
									<input type="submit" class="btn btn-primary" value="Save">
								</div>
							  </div>
							</div>
						  </div>
						</form>
						<!-- Modal -->
						<div class="col-md-12">
							<div class="row">
								<div class="col-md-12 apjob_bottom" style="padding:;">
									<div class="col-md-3" style="font-weight:bold;">
										<span>Industry</span>
									</div>
									<div class="col-md-7">
										<span><?=$profilerow['a_job_cat']?></span>
									</div>	
								</div>
								<div class="col-md-12 apjob_bottom" style="padding:;">
									<div class="col-md-3" style="font-weight:bold;">
										<span>Department</span>
									</div>
									<div class="col-md-7">
										<span><?=$profilerow['a_job']?></span>
									</div>	
								</div>
								<div class="col-md-12 apjob_bottom" style="padding:;">
									<div class="col-md-3" style="font-weight:bold;">
										<span>Role</span>
									</div>
									<div class="col-md-7">
										<span><?=$profilerow['a_role']?></span>
									</div>	
								</div>
								<div class="col-md-12 apjob_bottom" style="padding:;">
									<div class="col-md-3" style="font-weight:bold;">
										<span>Job Type</span>
									</div>
									<div class="col-md-7">
										<span><?=$profilerow['a_job_type']?></span>
									</div>	
								</div>
								<div class="col-md-12 apjob_bottom" style="padding:;">
									<div class="col-md-3" style="font-weight:bold;">
										<span>Work Shift</span>
									</div>
									<div class="col-md-7">
										<span><?=$profilerow['a_work_shift']?></span>
									</div>	
								</div>
								<div class="col-md-12 apjob_bottom" style="padding:;">
									<div class="col-md-3" style="font-weight:bold;">
										<span>Desired Annual Salary</span>
									</div>
									<div class="col-md-7">
										<span><?=$profilerow['a_salary_lakh'].' Lakhs - '.$profilerow['a_salary_thousand']?> Thousands</span>
									</div>	
								</div>
								<div class="col-md-12 apjob_bottom" style="padding:;">
									<div class="col-md-3" style="font-weight:bold;">
										<span>Desired Location</span>
									</div>
									<div class="col-md-7">
										<span><?=$profilerow['a_location']?></span>
									</div>	
								</div>
							</div>
						</div>
					</div>
					</div>
					<!-- Accepted Career Profile end-->
					
					
					<!-- Social Media Profile start-->
					<div id="Social Media Profile" style="padding-top:40px;">
					<div class="apply_box row" style="padding-bottom:30px;">
						<div id="accordion1" class="panel1 1panel-primary 1behclick-panel" style="border:1px solid #;">
							<div class="panel-heading" style="background-color:#4A90E2;">
								<span class="panel-title">
									<h3 style="color:#fff;" class="apjob_heading1"><b>Social Media Profile </b> 
									<span class="pull-right">
										<a href="" data-toggle="modal" data-target="#model7" ><img src="image/edit4.png" style="width:30px;"  data-toggle="tooltip" data-placement="top" title="Edit"></a>
										<!--a href="" style="color:#fff;" data-toggle="modal" data-target="#<?=$i?>" ><i class="fa fa-edit" data-toggle="tooltip" data-placement="top" title="Edit"></i></a>
										<a href="" data-toggle="modal" data-target="#<?=$i?>" ><img src="image/edit1.png" style="width:30px;background-color:#fff;"  data-toggle="tooltip" data-placement="top" title="Edit"></a-->
										<script>
											$(function () {
											  $('[data-toggle="tooltip"]').tooltip()
											})
										</script>
									<span>
									</h3>
								</span>
							</div>
						</div>
						<!--div class="col-md-12 apply_content1">
							<h3 style="color:#000;" class="apjob_heading1"><b>Profile <?=$i?></b> 
							<a href="" data-toggle="modal" data-target="#<?=$i?>" ><img src="image/edit1.png" style="width:30px;" data-toggle="tooltip" data-placement="top" title="Edit"></a></h3><hr>
							<script>
								$(function () {
								  $('[data-toggle="tooltip"]').tooltip()
								})
							</script>
						</div-->
						<!-- Modal -->
						<form id="pu7" action="<?=$url?>/php/profile_update.php" method="POST">
						  <div class="modal fade" id="model7" role="dialog">
							<div class="modal-dialog modal-md">
							  <div class="modal-content" style="padding:0px;">
								<div class="modal-header" style="background-color:#4A90E2;color:#fff;">
								  <button type="button" class="close" data-dismiss="modal">&times;</button>
								  <h4 class="modal-title">Social Media Details</h4>
								</div>
								<div class="modal-body">
									<div class="row">
										<div class="form-group">
											<div class="col-md-3" style="font-weight:bold;">
												<label>Facebook<label>
											</div>
											<div class="col-md-7">
												<input type="url" name="facebook" class="form-control" required1 placeholder="Enter Facebook Url" value="<?=$profilerow['facebook']?>"/>
											</div>
										</div><br><br>
										<div class="form-group">
											<div class="col-md-3" style="font-weight:bold;">
												<label>linkedin<label>
											</div>
											<div class="col-md-7">
												<input type="url" name="linkedin" class="form-control" required1 placeholder="Enter linkedin Url" value="<?=$profilerow['linkedin']?>"/>
											</div>
										</div><br><br>
										<div class="form-group">
											<div class="col-md-3" style="font-weight:bold;">
												<label>twitter<label>
											</div>
											<div class="col-md-7">
												<input type="url" name="twitter" class="form-control" required1 placeholder="Enter twitter Url" value="<?=$profilerow['twitter']?>"/>
											</div>
										</div><br><br>
										<div class="form-group">
											<div class="col-md-3" style="font-weight:bold;">
												<label>Google Plus<label>
											</div>
											<div class="col-md-7">
												<input type="url" name="googleplus" class="form-control" required1 placeholder="Enter Google Plus Url" value="<?=$profilerow['googleplus']?>"/>
											</div>
										</div><br><br>
									</div>
								</div>
								<div class="modal-footer">
									<div id="pu7-results"></div>
									<button type="button" class="btn btn-default pull-left" data-dismiss="modal">Close</button>
									<input type="hidden" name="pu7" />
									<input type="submit" class="btn btn-primary" value="Save">
								</div>
							  </div>
							</div>
						  </div>
						</form>
						<!-- Modal -->
						<div class="col-md-12">
							<div class="row">
								<div class="col-md-12 apjob_bottom" style="padding:;">
									<ul class="soc" style="padding:10px;text-align:center;">
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
							</div>
						</div>
					</div>
					</div>
					<!-- Social Media Profile end-->
					
					<!-- Attachment Resume start-->
					<div id="Attachment Resume" style="padding-top:40px;">
					<div class="apply_box row" style="padding-bottom:30px;">
						<div id="accordion1" class="panel1 1panel-primary 1behclick-panel" style="border:1px solid #;">
							<div class="panel-heading" style="background-color:#4A90E2;">
								<span class="panel-title">
									<h3 style="color:#fff;" class="apjob_heading1"><b>Attachment Resume </b> 
									<span class="pull-right">
										<a href="" data-toggle="modal" data-target="#model8" ><img src="image/edit4.png" style="width:30px;"  data-toggle="tooltip" data-placement="top" title="Edit"></a>
										<!--a href="" style="color:#fff;" data-toggle="modal" data-target="#<?=$i?>" ><i class="fa fa-edit" data-toggle="tooltip" data-placement="top" title="Edit"></i></a>
										<a href="" data-toggle="modal" data-target="#<?=$i?>" ><img src="image/edit1.png" style="width:30px;background-color:#fff;"  data-toggle="tooltip" data-placement="top" title="Edit"></a-->
										<script>
											$(function () {
											  $('[data-toggle="tooltip"]').tooltip()
											})
										</script>
									<span>
									</h3>
								</span>
							</div>
						</div>
						<!--div class="col-md-12 apply_content1">
							<h3 style="color:#000;" class="apjob_heading1"><b>Profile <?=$i?></b> 
							<a href="" data-toggle="modal" data-target="#<?=$i?>" ><img src="image/edit1.png" style="width:30px;" data-toggle="tooltip" data-placement="top" title="Edit"></a></h3><hr>
							<script>
								$(function () {
								  $('[data-toggle="tooltip"]').tooltip()
								})
							</script>
						</div-->
						<!-- Modal -->
						<form id="pu8" action="<?=$url?>/php/profile_update.php" method="POST">
						  <div class="modal fade" id="model8" role="dialog">
							<div class="modal-dialog modal-md">
							  <div class="modal-content" style="padding:0px;">
								<div class="modal-header" style="background-color:#4A90E2;color:#fff;">
								  <button type="button" class="close" data-dismiss="modal">&times;</button>
								  <h4 class="modal-title">Upload Resume</h4>
								</div>
								<div class="modal-body">
									<center>
										<div class="row">
											<div class="col-md-12">
												<div class="file btn btn-primary" style="position: relative;overflow: hidden;">
													Upload Resume
													<input type="file" id="file_name1" alt="1" name="resume" required style1=" position: absolute;font-size: 50px;opacity: 0;right: 0;top: 0;"/>
												</div>
											</div>
										</div>
									</center>
								</div>
								<div class="modal-footer">
									<div id="pu8-results"></div>
									<button type="button" class="btn btn-default pull-left" data-dismiss="modal">Close</button>
									<input type="hidden" name="pu8" />
									<input type="submit" class="btn btn-primary" value="Save">
								</div>
							  </div>
							</div>
						  </div>
						</form>
						<!-- Modal -->
						<div class="col-md-12">
							<div class="row">
								<div class="col-md-12 apjob_bottom" style="padding:;">
									<p>Resume is the most important document recruiters look for. Recruiters generally do not look at profiles without resumes.</p>
									<div class="col-md-12" style="padding:120px 0px 120px 0px ;border:1px solid lightgray;">
										<center>
											<a href="" style="text-decoration:none;" data-toggle="modal" data-target="#model8" ><span style="background-color:#4A90E2;color:#fff;padding:15px;text-align:center;margin-left:0px;margin-right:0px;"><?=((empty($profilerow["resume"]))?'Upload Resume':'Update Your Resume')?></span></a>
											<br><br><br>
											<p>Format Supported only : doc, docx, pdf, upto 2 MB</p>
										</center>
									</div>
								</div>
							</div>
						</div>
					</div>
					</div>
					<br><br><br><br><br>
					<!-- Attachment Resume start-->
					
					
				</div>
					
					
				
				
				<!--Employer Job-->
				
				<!-- profile -->
				<div class="col-md-3 text-center apply_box" style="position:sticky;top:40px;border:5px solid #fff;background-color:#4A90E2;color:#fff;">
					<div style="margin-bottom:10px;">
						<div class="row1 " style="background-color:#4A90E2;color:#fff;">
							<h4 style="color:#fff;"><b><?=$profilerow['name']?></b></h4>
							<hr style="margin-top:10px;margin-bottom:10px;background-color:#2e6da4;">
							<div class="col-md-12">
							<img id="img1" src="<?=$url?>/image/dp/<?=$profilerow['profile_pic']?>" class="img-circle" alt="face" width="50%;" style="border:1px solid #ccc;" onError="this.src='image/dp/profile.jpg'">
								<hr style="margin-top:10px;margin-bottom:10px;">
								<div>
									<p style="font-size:11px;"><?=$profilerow['resume_headline']?></p>
									<hr style="margin-top:5px;margin-bottom:5px;">
									<p style="font-size:11px;"><?=$profilerow['address']?></p>
								</div>
							</div>
						</div>
					</div>
					
				</div>
				<!-- profile -->
		</div>
	 </div>
	</div>
	<div id="wait" style="display:none;padding:2px;"><center><img src="images/load2.gif" style="width:70px;position: absolute;top:0;bottom: 0;left: 0;right: 0;margin: auto;"></center></div>
	<!--Footer-->
	<?php include"footer.php"; ?>
	<!--Footer-->
	<!-- inline scripts related to this page -->
	
</body>
<!--Model Form-->
<?php include"model.php"; ?>
<!--Model Form-->
	<script>
	//live city
	function fetch_select_city(val)
	{
		$.ajax({
			type: 'post',
			url: 'job-fetch.php',
			data: {get_loc:val},
			success: function (response) {
				document.getElementById("new_select_location").innerHTML=response; 
			}
		});
	}
	
	//live job
	function fetch_select_job_cat(val)
	{
		$.ajax({
			type: 'post',
			url: 'job-fetch.php',
			data: {get_job:val},
			success: function (response) {
				document.getElementById("new_select_job_cat").innerHTML=response; 
			}
		});
	}
	
	//image live upload
	var j = 1;
	while(j<=10)
	{
		$("#file_name"+j+"").on("change", function()
		{
			var alt = $(this).attr("alt");
			var files = !!this.files ? this.files : [];
			if (!files.length || !window.FileReader) return;
			if (/^image/.test( files[0].type)){
				var reader = new FileReader();
				reader.readAsDataURL(files[0]);
				reader.onloadend = function(){ 
					$("#img"+alt+"").attr('src',this.result);
				}
			}
		});
		j++;
	}
	// wait loader script
	$(document).ready(function(){
		$(document).ajaxStart(function(){
			$("#wait").css("display", "block");
		});
		$(document).ajaxComplete(function(){
			$("#wait").css("display", "none");
		});
		$("button").click(function(){
			$("#txt").load("demo_ajax_load.asp");
		});
	});
	
	
	$("#pu1").submit(function(event){
		event.preventDefault(); //prevent default action 
		var post_url = $(this).attr("action"); //get form action url
		var request_method = $(this).attr("method"); //get form GET/POST method
		var form_data = new FormData(this); //Creates new FormData object
		$.ajax({
			url : post_url,
			type: request_method,
			data : form_data,
			contentType: false,
			cache: false,
			processData:false
		}).done(function(response){ //
			$("#pu1-results").html(response);
		});
	});
	$("#pu2").submit(function(event){
		event.preventDefault(); //prevent default action 
		var post_url = $(this).attr("action"); //get form action url
		var request_method = $(this).attr("method"); //get form GET/POST method
		var form_data = new FormData(this); //Creates new FormData object
		$.ajax({
			url : post_url,
			type: request_method,
			data : form_data,
			contentType: false,
			cache: false,
			processData:false
		}).done(function(response){ //
			$("#pu2-results").html(response);
		});
	});
	$("#pu3").submit(function(event){
		event.preventDefault(); //prevent default action 
		var post_url = $(this).attr("action"); //get form action url
		var request_method = $(this).attr("method"); //get form GET/POST method
		var form_data = new FormData(this); //Creates new FormData object
		$.ajax({
			url : post_url,
			type: request_method,
			data : form_data,
			contentType: false,
			cache: false,
			processData:false
		}).done(function(response){ //
			$("#pu3-results").html(response);
		});
	});
	$("#pu4").submit(function(event){
		event.preventDefault(); //prevent default action 
		var post_url = $(this).attr("action"); //get form action url
		var request_method = $(this).attr("method"); //get form GET/POST method
		var form_data = new FormData(this); //Creates new FormData object
		$.ajax({
			url : post_url,
			type: request_method,
			data : form_data,
			contentType: false,
			cache: false,
			processData:false
		}).done(function(response){ //
			$("#pu4-results").html(response);
		});
	});
	$("#pu5").submit(function(event){
		event.preventDefault(); //prevent default action 
		var post_url = $(this).attr("action"); //get form action url
		var request_method = $(this).attr("method"); //get form GET/POST method
		var form_data = new FormData(this); //Creates new FormData object
		$.ajax({
			url : post_url,
			type: request_method,
			data : form_data,
			contentType: false,
			cache: false,
			processData:false
		}).done(function(response){ //
			$("#pu5-results").html(response);
		});
	});
	$("#pu6").submit(function(event){
		event.preventDefault(); //prevent default action 
		var post_url = $(this).attr("action"); //get form action url
		var request_method = $(this).attr("method"); //get form GET/POST method
		var form_data = new FormData(this); //Creates new FormData object
		$.ajax({
			url : post_url,
			type: request_method,
			data : form_data,
			contentType: false,
			cache: false,
			processData:false
		}).done(function(response){ //
			$("#pu6-results").html(response);
		});
	});
	$("#pu7").submit(function(event){
		event.preventDefault(); //prevent default action 
		var post_url = $(this).attr("action"); //get form action url
		var request_method = $(this).attr("method"); //get form GET/POST method
		var form_data = new FormData(this); //Creates new FormData object
		$.ajax({
			url : post_url,
			type: request_method,
			data : form_data,
			contentType: false,
			cache: false,
			processData:false
		}).done(function(response){ //
			$("#pu7-results").html(response);
		});
	});
	$("#pu8").submit(function(event){
		event.preventDefault(); //prevent default action 
		var post_url = $(this).attr("action"); //get form action url
		var request_method = $(this).attr("method"); //get form GET/POST method
		var form_data = new FormData(this); //Creates new FormData object
		$.ajax({
			url : post_url,
			type: request_method,
			data : form_data,
			contentType: false,
			cache: false,
			processData:false
		}).done(function(response){ //
			$("#pu8-results").html(response);
		});
	});
	
	
	</script>
</html>