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

										<a href="#Privacy-Setting ">
											<li class="list-group-item">
												<div class="1radio">
													<label><i class="fa fa-angle-right"></i> Privacy Setting </label>
												</div>
											</li>
										</a>
										<a href="#Change-Password ">
											<li class="list-group-item">
												<div class="1radio">
													<label><i class="fa fa-angle-right"></i> Change Password </label>
												</div>
											</li>
										</a>
										<a href="profile.php ">
											<li class="list-group-item">
												<div class="1radio">
													<label><i class="fa fa-angle-right"></i> Profile Update </label>
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
				
					<!-- Privacy Setting start-->
					
					<div id="Privacy-Setting" style="padding-top:40px;">
					<div class="apply_box row" style="padding-bottom:30px;">
						<div id="accordion1" class="panel1 1panel-primary 1behclick-panel" style="border:1px solid #;">
							<div class="panel-heading" style="background-color:#4A90E2;">
								<span class="panel-title">
									<h3 style="color:#fff;" class="apjob_heading1"><b>Privacy Setting </b> 
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
						<form id="Privacy" action="<?=$url?>/php/profile_update.php" method="POST">
						  <div class="modal fade" id="model1" role="dialog">
							<div class="modal-dialog modal-md">
							  <div class="modal-content" style="padding:0px;">
								<div class="modal-header" style="background-color:#4A90E2;color:#fff;">
								  <button type="button" class="close" data-dismiss="modal">&times;</button>
								  <h4 class="modal-title">Privacy Setting</h4>
								</div>
								<div class="modal-body">
									<div id="Privacy--" class="tab-pane fade1 profile_menu1">
											<div class="row">
												<div class="col-lg-4">
													<span style="font-weight:bold;">Profile View</span>
													<span style="float:right;">:</span>
												</div>
												<div class="col-lg-8">
													<span style="float:left;">Deactive</span>
													<span style="float:left;padding:0px 10px 0px 10px ;">
														<label class="switch">
														  <input type="checkbox" name="profile_status" <?php if($profilerow['profile_status']=="1") {echo "checked";}  ?> value="1">
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
														  <input type="checkbox" name="socialmedia_status" <?php if($profilerow['socialmedia_status']=="1") {echo "checked";}  ?>  value="1">
														  <span class="slider round"></span>
														</label>
													</span>
													<span style="float:left;">Active</span>
													<br><br><br><br>
												</div>
											</div>
									</div>
								</div>
								<div class="modal-footer">
									<div id="privacy-results"></div>
									<button type="button" class="btn btn-default pull-left" data-dismiss="modal">Close</button>
									<input type="hidden" class="form-control" name="jobseekerchangeprofilestatus" value="Update">
									<input type="submit" class="btn btn-primary" name="jobseekerchangeprofilestatus" value="Update">
								</div>
							  </div>
							</div>
						  </div>
						</form>
						<!-- Modal -->
						<div class="col-md-12">
							<div class="row">
								<div class="col-md-12 apjob_bottom" style="padding:;">
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
						</div>
					</div>
					</div>
					<!-- Privacy Setting End-->
					
					<!-- Resume Headline start-->
					<div id="Change-Password" style="padding-top:40px;">
					<div class="apply_box row" style="padding-bottom:30px;">
						<div id="accordion1" class="panel1 1panel-primary 1behclick-panel" style="border:1px solid #;">
							<div class="panel-heading" style="background-color:#4A90E2;">
								<span class="panel-title">
									<h3 style="color:#fff;" class="apjob_heading1"><b>Change Password </b> </h3>
								</span>
							</div>
						</div>
						<div class="col-md-12">
							<div class="row">
								<div class="col-md-12 apjob_bottom" style="padding:35px;">
								<form class="form-horizontal" id="change-pwd" action="php/user.php" method="POST">
									<div class="form-group">
									  <label class=" col-sm-3" style="padding:0px;">Old Password:</label>
									  <div class="input-group col-sm-6" style="padding:0px;">          
										<span class="input-group-addon  "><i class="fa fa-key"></i></span>
										<input type="password" class="form-control" placeholder="Enter Old Password:" name="opwd">
									  </div>
									</div>
									<div class="form-group ">
									  <label class="col-sm-3" style="padding:0px;"> New Password:</label>
									  <div class="input-group col-sm-6" style="padding:0px;">          
										<span class="input-group-addon  "><i class="fa fa-key"></i></span>
										<input type="password" class="form-control" placeholder="Enter New Password:" name="npwd">
									  </div>
									</div>
									<div class="form-group">
									  <label class="col-sm-3" style="padding:0px;"> Confirm Password:</label>
									  <div class="input-group col-sm-6" style="padding:0px;">          
										<span class="input-group-addon  "><i class="fa fa-lock"></i></span>
										<input type="password" class="form-control" placeholder="Confirm Password:" name="cpwd">
									  </div>
									</div>
									<div id="change-pwd-results"></div>
									<div class="form-group">
									  <label class="col-sm-3" style="padding:0px;"> </label>
									  <div class="input-group col-sm-6" style="padding:0px;">          
										<input type="hidden" class="btn btn-primary" name="jobseekerchangeemployerpwd" value="Update">
										<input type="submit" class="btn btn-primary btn-block" name="jobseekerchangeemployerpwd" value="Update">
									  </div>
									</div>
								</form> 
								</div>
							</div>
						</div>
					</div>
					</div>
					<!-- Resume Headline start-->
					
					
					<br><br><br><br><br><br><br><br><br><br>
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
	
	
	$("#Privacy").submit(function(event){
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
			$("#privacy-results").html(response);
		});
	});
	$("#change-pwd").submit(function(event){
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
			$("#change-pwd-results").html(response);
		});
	});
	
	
	</script>
</html>