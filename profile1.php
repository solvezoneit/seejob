<?php
	session_start();
	include"cjobadmin/api/db_config.php";
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
								<div id="collapse0" class="panel-collapse collapse in" >
									<ul class="list-group">

										<a href="#Profile Picture ">
											<li class="list-group-item">
												<div class="radio">
													<label><i class="fa fa-angle-right"></i> Profile Picture </label>
												</div>
											</li>
										</a>
										<a href="#Resume Headline ">
											<li class="list-group-item">
												<div class="radio">
													<label><i class="fa fa-angle-right"></i> Resume Headline </label>
												</div>
											</li>
										</a>
										<a href="#Education ">
											<li class="list-group-item">
												<div class="radio">
													<label><i class="fa fa-angle-right"></i> Education </label>
												</div>
											</li>
										</a>
										<a href="#Personal Details ">
											<li class="list-group-item">
												<div class="radio">
													<label><i class="fa fa-angle-right"></i> Personal Details </label>
												</div>
											</li>
										</a>
										<a href="#Basic Details ">
											<li class="list-group-item">
												<div class="radio">
													<label><i class="fa fa-angle-right"></i> Basic Details </label>
												</div>
											</li>
										</a>
										<a href="#Attachment Resume ">
											<li class="list-group-item">
												<div class="radio">
													<label><i class="fa fa-angle-right"></i> Attachment Resume </label>
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
									  <div class="progress-bar progress-bar-success" role="progressbar" style="width:40%">
										Free Space
									  </div>
									  <div class="progress-bar progress-bar-warning" role="progressbar" style="width:10%">
										Warning
									  </div>
									  <div class="progress-bar progress-bar-danger" role="progressbar" style="width:20%">
										Danger
									  </div>
									</div>
									<!---progress bar-->
									<h3 style="color:#4A90E2;" class="apjob_heading1"><b>Profile Picture </b> 
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
						<form>
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
													Upload
													<input type="file" id="file_name1" alt="1" accept="image/*" name="file" style=" position: absolute;font-size: 50px;opacity: 0;right: 0;top: 0;"/>
												</div>
											</div>
										</div>
									</center>
								</div>
								<div class="modal-footer">
								  <button type="button" class="btn btn-default pull-left" data-dismiss="modal">Close</button>
								  <button type="button" class="btn btn-primary" data-dismiss="modal">Save</button>
								</div>
							  </div>
							</div>
						  </div>
						</form>
						<!-- Modal -->
						<div class="col-md-12">
							<div class="row">
								<div class="col-md-12 apjob_bottom" style="padding:20px;">
								
									<div class="col-md-12">
										<center>
											<div class="row1 " style="background-color:#4A90E2;color:#fff;">
												<div class="col-md-12">
												<img id="img1" src="<?=$url?>/image/dp/<?=$profilerow['profile_pic']?>"  class="img-circle" alt="face" width="50%;" style="border:1px solid #ccc;">
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
										<a href="" data-toggle="modal" data-target="#<?=$i?>" ><img src="image/edit4.png" style="width:30px;"  data-toggle="tooltip" data-placement="top" title="Edit"></a>
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
						  <div class="modal fade" id="<?=$i?>" role="dialog">
							<div class="modal-dialog modal-lg">
							  <div class="modal-content">
								<div class="modal-header">
								  <button type="button" class="close" data-dismiss="modal">&times;</button>
								  <h4 class="modal-title">Modal Header</h4>
								</div>
								<div class="modal-body">
								
								  <p>This is a large modal.</p>
								</div>
								<div class="modal-footer">
								  <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
								</div>
							  </div>
							</div>
						  </div>
						<!-- Modal -->
						<div class="col-md-12">
							<div class="row">
								<div class="col-md-12 apjob_bottom" style="padding:20px;">
									<div class="col-md-1">
										<span><i class="fas fa-snowflake"></i></span>
									</div>
									<div class="col-md-11">
										<span>
											Call Center BPO Data Entry Operation Inbound Calling Night Shift MNC Customer Care Executive backend Domestic bpo telecaller international bpo bpo fresher
										</span>
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
										<a href="" data-toggle="modal" data-target="#<?=$i?>" ><img src="image/edit4.png" style="width:30px;"  data-toggle="tooltip" data-placement="top" title="Edit"></a>
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
						  <div class="modal fade" id="<?=$i?>" role="dialog">
							<div class="modal-dialog modal-lg">
							  <div class="modal-content">
								<div class="modal-header">
								  <button type="button" class="close" data-dismiss="modal">&times;</button>
								  <h4 class="modal-title">Modal Header</h4>
								</div>
								<div class="modal-body">
								
								  <p>This is a large modal.</p>
								</div>
								<div class="modal-footer">
								  <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
								</div>
							  </div>
							</div>
						  </div>
						<!-- Modal -->
						<div class="col-md-12">
							<div class="row">
								<div class="col-md-12 apjob_bottom" style="padding:20px;">
									<div class="col-md-1">
										<span><i class="fas fa-snowflake"></i></span>
									</div>
									<div class="col-md-11">
										<span>
											Call Center BPO Data Entry Operation Inbound Calling Night Shift MNC Customer Care Executive backend Domestic bpo telecaller international bpo bpo fresher
										</span>
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
										<a href="" data-toggle="modal" data-target="#<?=$i?>" ><img src="image/edit4.png" style="width:30px;"  data-toggle="tooltip" data-placement="top" title="Edit"></a>
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
						  <div class="modal fade" id="<?=$i?>" role="dialog">
							<div class="modal-dialog modal-lg">
							  <div class="modal-content">
								<div class="modal-header">
								  <button type="button" class="close" data-dismiss="modal">&times;</button>
								  <h4 class="modal-title">Modal Header</h4>
								</div>
								<div class="modal-body">
								
								  <p>This is a large modal.</p>
								</div>
								<div class="modal-footer">
								  <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
								</div>
							  </div>
							</div>
						  </div>
						<!-- Modal -->
						<div class="col-md-12">
							<div class="row">
								<div class="col-md-12 apjob_bottom" style="padding:20px;">
									<div class="col-md-1">
										<span><i class="fas fa-snowflake"></i></span>
									</div>
									<div class="col-md-11">
										<span>
											Call Center BPO Data Entry Operation Inbound Calling Night Shift MNC Customer Care Executive backend Domestic bpo telecaller international bpo bpo fresher
										</span>
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
										<a href="" data-toggle="modal" data-target="#<?=$i?>" ><img src="image/edit4.png" style="width:30px;"  data-toggle="tooltip" data-placement="top" title="Edit"></a>
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
						  <div class="modal fade" id="<?=$i?>" role="dialog">
							<div class="modal-dialog modal-lg">
							  <div class="modal-content">
								<div class="modal-header">
								  <button type="button" class="close" data-dismiss="modal">&times;</button>
								  <h4 class="modal-title">Modal Header</h4>
								</div>
								<div class="modal-body">
								
								  <p>This is a large modal.</p>
								</div>
								<div class="modal-footer">
								  <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
								</div>
							  </div>
							</div>
						  </div>
						<!-- Modal -->
						<div class="col-md-12">
							<div class="row">
								<div class="col-md-12 apjob_bottom" style="padding:20px;">
									<div class="col-md-1">
										<span><i class="fas fa-snowflake"></i></span>
									</div>
									<div class="col-md-11">
										<span>
											Call Center BPO Data Entry Operation Inbound Calling Night Shift MNC Customer Care Executive backend Domestic bpo telecaller international bpo bpo fresher
										</span>
									</div>	
								</div>
							</div>
						</div>
					</div>
					</div>
					<!-- Basic Details start-->
					
					<!-- Attachment Resume start-->
					<div id="Attachment Resume" style="padding-top:40px;">
					<div class="apply_box row" style="padding-bottom:30px;">
						<div id="accordion1" class="panel1 1panel-primary 1behclick-panel" style="border:1px solid #;">
							<div class="panel-heading" style="background-color:#4A90E2;">
								<span class="panel-title">
									<h3 style="color:#fff;" class="apjob_heading1"><b>Attachment Resume </b> 
									<span class="pull-right">
										<a href="" data-toggle="modal" data-target="#<?=$i?>" ><img src="image/edit4.png" style="width:30px;"  data-toggle="tooltip" data-placement="top" title="Edit"></a>
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
						  <div class="modal fade" id="<?=$i?>" role="dialog">
							<div class="modal-dialog modal-lg">
							  <div class="modal-content">
								<div class="modal-header">
								  <button type="button" class="close" data-dismiss="modal">&times;</button>
								  <h4 class="modal-title">Modal Header</h4>
								</div>
								<div class="modal-body">
								
								  <p>This is a large modal.</p>
								</div>
								<div class="modal-footer">
								  <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
								</div>
							  </div>
							</div>
						  </div>
						<!-- Modal -->
						<div class="col-md-12">
							<div class="row">
								<div class="col-md-12 apjob_bottom" style="padding:20px;">
									<p>Resume is the most important document recruiters look for. Recruiters generally do not look at profiles without resumes.</p>
									<div class="col-md-12" style="padding:120px 0px 120px 0px ;border:1px solid lightgray;">
										<center>
											<span style="background-color:#4A90E2;color:#fff;padding:15px;text-align:center;margin-left:0px;margin-right:0px;">Upload Resume</span>
											<br><br><br>
											<p>Format Supported only : doc, docx, pdf, upto 2 MB</p>
										</center>
									</div>
								</div>
							</div>
						</div>
					</div>
					</div>
					<!-- Attachment Resume start-->
					
					
				</div>
					
					
				
				
				<!--Employer Job-->
				
				<!-- profile -->
				<div class="col-md-3 text-center apply_box" style="position:sticky;top:40px;border:5px solid #fff;background-color:#4A90E2;color:#fff;">
					<div style="margin-bottom:10px;">
						<div class="row1 " style="background-color:#4A90E2;color:#fff;">
							<h4 style="color:#fff;"><b>Yogesh</b></h4>
							<hr style="margin-top:10px;margin-bottom:10px;background-color:#2e6da4;">
							<div class="col-md-12">
							<img id="img1" src="<?=$url?>/image/dp/<?=$profilerow['profile_pic']?>" class="img-circle" alt="face" width="50%;" style="border:1px solid #ccc;">
							<?php
							/*
							if($get_profile['profile_pic']=='')
							{
								?><img src="<?=$url?>/image/profile.jpg" class="img-circle" alt="face" width="50%;" style="border:1px solid #ccc;"><?php
							}else{
								?><img src="<?=$url?>/image/dp/<?=$get_profile['profile_pic']?>" class="img-circle" alt="face" width="50%;" style="border:1px solid #ccc;"><?php
							}*/
							?>
								<hr style="margin-top:10px;margin-bottom:10px;">
								<div>
									<p style="font-size:11px;">Senior PHP Developer at solvezone</p>
									<hr style="margin-top:5px;margin-bottom:5px;">
									<p style="font-size:11px;">Noida Delhi</p>
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
	
	</script>
</html>