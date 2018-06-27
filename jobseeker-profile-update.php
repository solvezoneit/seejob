<?php
	include"php/main.php";
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
	<?php include"jobseeker-header.php"?>
	<!-- Header Menu End -->

	<div class="container" style="margin-bottom:20px;">
		<div class="row emplyer_align profile_row">
				<div class="col-md-2">
					<img id="img1" src="image/dp/<?=$profilerow["profile_pic"]?>" width="100%" onError="this.src='image/dp/profile.jpg'"/>
				</div>
				<div class="col-md-8">
					<div>
						<div>
							<div class="row my_heading">
								<h2 class="myprofile_heading"><?=ucwords($profilerow["name"])?></h2>
								<a href="jobseeker-profile.php" class="btn btn-primary my_btn" role="button">Back to Profile </a>
							</div>
							<p><span><b>Email ID</b> - <?=$profilerow["email"]?></span>
							<ul class="soc profile_social">
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
								}else{
									echo"Fill Your Social Media Link";
								}
								?>
							</ul>
							</p>
							<p><b>Designation</b> - <?=$profilerow["designation"]?></p>
							<p><?=$profilerow["description"]?></p>
						</div>
						<div class="profile_tab">
						  <ul class="nav nav-tabs profile_bottom">
							<li class="active"><a href="#profile"><i class="fa fa-user"></i> Profile</a></li>
							<li><a href="#Privacy"><i class="fa fa-key"></i> Privacy Setting</a></li>
							<li><a href="#Account"><i class="fa fa-video"></i> Social Media</a></li>
							<li><a href="#Re-pwd"><i class="fa fa-lock"></i> Reset Password</a></li>
						  </ul>

						<div class="tab-content">
							<div id="profile" class="tab-pane fade in active profile_menu">
								<form class="form-horizontal" id="my_form" action="php/user.php" method="POST" enctype="multipart/form-data">
									<div class="container-fluid">
									<div class="row">
										<div class="col-md-6  profile_option">
											<div class="row">
											  <div class="col-25" style="text-align:left;">
												<label for="lname"> Name</label>
											  </div>
											  <div class="col-75" style="padding:0px 10px 0px 10px ;">
												<input type="text" id="name" name="name" value="<?=$profilerow['name']?>" placeholder="Your name.." required="required">
											  </div>
											</div>
											<div class="row">
											  <div class="col-25" style="text-align:left;">
												<label for="lname"> Profile Picture</label>
											  </div>
											  <div class="col-75" style="padding:0px 0px 0px 0px ;">
												<label id="upload_button">
													<input type="file" id="file_name1" alt="1" accept="image/*" name="image">
													<div class="1btn btn-primary" style="padding:5px;color:#fff;width:100%;text-align:center;">Upload Profile Pic</div>
												</label>
											  </div>
											</div>
											<div class="row">
											  <div class="col-25" style="text-align:left;">
												<label for="lname"> Designation</label>
											  </div>
											  <div class="col-75" style="padding:0px 10px 0px 10px ;">
												<input type="text" name="designation" value="<?=$profilerow['designation']?>" placeholder="Your Designation.." required="required">
											  </div>
											</div>
											<div class="row">
											  <div class="col-25" style="text-align:left;">
												<label for="lname">Parmanent Address</label>
											  </div>
											  <div class="col-75" style="padding:0px 10px 0px 10px ;">
												<textarea name="address" placeholder="Enter Address.." style="height:auto" ><?=$profilerow['address']?></textarea>
											  </div>
											</div>
											<div class="row">
											  <div class="col-25" style="text-align:left;">
												<label for="lname">Current Location</label>
											  </div>
											  <div class="col-75" style="padding:0px 10px 0px 10px ;">
												<input type="text" name="location" value="<?=$profilerow['location']?>" placeholder="Enter Location.." required="required">
											  </div>
											</div>
											<div class="row">
											  <div class="col-25" style="text-align:left;">
												<label for="lname">Home Town/City</label>
											  </div>
											  <div class="col-75" style="padding:0px 10px 0px 10px ;">
												<input type="text" name="city" value="<?=$profilerow['city']?>" placeholder="Town/City.." required="required">
											  </div>
											</div>
											<div class="row">
											  <div class="col-25" style="text-align:left;">
												<label for="lname">State</label>
											  </div>
											  <div class="col-75" style="padding:0px 10px 0px 10px ;">
												<input type="text" name="state" value="<?=$profilerow['state']?>" placeholder="State.." required="required">
											  </div>
											</div>
											<div class="row">
											  <div class="col-25" style="text-align:left;">
												<label for="country">Country</label>
											  </div>
											  <div class="col-75" style="padding:0px 10px 0px 10px ;">
												<select name="country" required="required" required="required">
												  <option value="" selected>Select Country</option>
												  <option value="USA" <?php if($profilerow['country']=="USA") {echo "selected";}  ?> >USA</option>
												  <option value="INDIA" <?php if($profilerow['country']=="INDIA") {echo "selected";}  ?> >INDIA</option>
												</select>
											  </div>
											</div>
											<div class="row">
											  <div class="col-25" style="text-align:left;">
												<label for="lname">Pincode</label>
											  </div>
											  <div class="col-75" style="padding:0px 10px 0px 10px ;">
												<input type="number" name="pincode" value="<?=$profilerow['pincode']?>" placeholder="Pincode.." required="required">
											  </div>
											</div>
											<!--div class="row">
											  <div class="col-25" style="text-align:left;">
												<label for="country">Industry </label>
											  </div>
											  <div class="col-75" style="padding:0px 10px 0px 10px ;">
												<select name="country">
												  <option value="australia">IT</option>
												  <option value="canada">Marketing</option>
												  <option value="usa">HR</option>
												</select>
											  </div>
											</div>
											<div class="row">
											  <div class="col-25" style="text-align:left;">
												<label for="country">Role </label>
											  </div>
											  <div class="col-75" style="padding:0px 10px 0px 10px ;">
												<select name="country">
												  <option value="australia">IT</option>
												  <option value="canada">Marketing</option>
												  <option value="usa">HR</option>
												</select>
											  </div>
											</div>
											<div class="row">
											  <div class="col-25" style="text-align:left;">
												<label for="country">*Functional Area </label>
											  </div>
											  <div class="col-75" style="padding:0px 10px 0px 10px ;">
												<select name="country">
												  <option value="australia">IT</option>
												  <option value="canada">Marketing</option>
												  <option value="usa">HR</option>
												</select>
											  </div>
											</div-->
										</div>
										<div class="col-md-6  profile_option">
											<div class="row">
											  <div class="col-25" style="text-align:left;">
												<label for="subject">Resume Headline</label>
											  </div>
											  <div class="col-75" style="padding:0px 10px 0px 10px ;">
												<textarea id="subject" name="description" placeholder="Write something.." style="height:auto" ><?=$profilerow['description']?></textarea>
											  </div>
											</div>
											<div class="row">
											  <div class="col-25" style="text-align:left;">
												<label for="country">Experiance </label>
											  </div>
											  <div class="col-75" style="padding:0px 10px 0px 10px ;">
												<select name="experience" required="required">
												  <option value="" selected>Select Experience</option>
												  <option value="Fresher" <?php if($profilerow['experience']=="Fresher") {echo "selected";}  ?> >Fresher</option>
												  <option value="1 Years" <?php if($profilerow['experience']=="1 Years") {echo "selected";}  ?> >1 Years</option>
												  <option value="2 Years" <?php if($profilerow['experience']=="2 Years") {echo "selected";}  ?> >2 Years</option>
												</select>
											  </div>
											</div>
											
											<!-- <div class="row"> -->
											  <!-- <div class="col-25" style="text-align:left;"> -->
												<!-- <label for="lname"> Landline</label> -->
											  <!-- </div> -->
											  <!-- <div class="col-25" style="width:10%;"> -->
												<!-- <input type="text" name="lastname" placeholder="Your last name.."> -->
											  <!-- </div> -->
											  <!-- <div class="col-25" style="width:15%;"> -->
													<!-- <input type="text" name="lastname" placeholder="Your last name.."> -->
											  <!-- </div> -->
											  <!-- <div class="col-25" style="width:15%;" > -->
													<!-- <input type="text" name="lastname" placeholder="Your last name.."> -->
											  <!-- </div> -->
											<!-- </div> -->
											<div class="row">
											  <div class="col-25" style="text-align:left;">
												<label for="lname"> Gender</label>
											  </div>
											  <div class="col-75" style="padding:0px 10px 0px 10px ;">
												<div class="radio">
												  <label><input type="radio" name="gender" <?php if($profilerow["gender"]=="Female") {echo "checked"; }  ?> value="Female">Female</label>
												  <label><input type="radio" name="gender" <?php if($profilerow["gender"]=="Male") {echo "checked"; }  ?> value="Male">Male</label>
												</div>
											  </div>
											</div>
											<div class="row">
											  <div class="col-25" style="text-align:left;">
												<label for="country">Marital Status</label>
											  </div>
											  <div class="col-75" style="padding:0px 10px 0px 10px ;">
												<select name="m_s" required="required">
												  <option value="Single" <?php if($profilerow['m_s']=="Single") {echo "selected";}  ?> >Single</option>
												  <option value="Married" <?php if($profilerow['m_s']=="Married") {echo "selected";}  ?> >Married</option>
												  <option value="Divorced" <?php if($profilerow['m_s']=="Divorced") {echo "selected";}  ?> >Divorced</option>
												</select>
											  </div>
											</div>
											<div class="row">
											  <div class="col-25" style="text-align:left;">
												<label for="lname">Mobile</label>
											  </div>
											  <div class="col-75" style="padding:0px 10px 0px 10px ;">
												<input type="text" name="contact" value="<?=$profilerow['contact']?>" placeholder="Enter nu.." pattern="[6789][0-9]{9}" required="required">
											  </div>
											</div>
											<div class="row">
											  <div class="col-25" style="text-align:left;">
												<label for="lname">Alternate number </label>
											  </div>
											  <div class="col-75" style="padding:0px 10px 0px 10px ;">
												<input type="text" name="alter_contact" value="<?=$profilerow['alter_contact']?>" placeholder="Enter nu.." pattern="[6789][0-9]{9}">
											  </div>
											</div>
											<!-- <div class="row"> -->
											  <!-- <div class="col-25" style="text-align:left;"> -->
												<!-- <label for="lname">Anual Selery</label> -->
											  <!-- </div> -->
											  <!-- <div class="col-25" style="width:30%;"> -->
													<!-- <select name="country"> -->
													  <!-- <option value="australia">Lac</option> -->
													  <!-- <option value="canada">1Lac</option> -->
													  <!-- <option value="usa">2Lac</option> -->
													<!-- </select> -->
											  <!-- </div> -->
											   <!-- <div class="col-25" style="width:20%;"> -->
													<!-- <select name="country"> -->
													  <!-- <option value="Thousand">Thousand</option> -->
													  <!-- <option value="1k">1k</option> -->
													  <!-- <option value="2k">2k</option> -->
													<!-- </select> -->
											  <!-- </div> -->
											<!-- </div> -->
											
											<div class="row">
											  <div class="col-25" style="text-align:left;">
												<label for="lname">Anual Selery</label>
											  </div>
											  <div class="col-75" style="padding:0px 10px 0px 10px ;">
												<input type="number" name="anual_salary" value="<?=$profilerow['anual_salary']?>" placeholder="Enter Amount.." required="required">
											  </div>
											</div>
										</div>
									</div>
									<hr>
									<div id="server-results1"></div>
									<div class="input-group col-sm-3" style="padding:0px;">
										<input type="hidden" class="form-control" name="jobseekerprofileupdate" value="Update">
										<input type="submit" class="form-control" name="jobseekerprofileupdate" value="Update">
									</div>
									</div>
								</form>
							</div>
							<div id="Privacy" class="tab-pane fade profile_menu1">
								<form class="form-horizontal" id="my_form_privacy" action="php/user.php" method="POST">
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
											<div id="server-results2"></div>
											<div class="form-group">
											  <div class="input-group col-sm-3" style="padding:0px;">          
												<input type="hidden" class="form-control" name="jobseekerchangeprofilestatus" value="Update">
												<input type="submit" class="form-control" name="jobseekerchangeprofilestatus" value="Update">
											  </div>
											</div>
										</div>
									</div>
								</form>
							</div>
							<div id="Account" class="tab-pane fade profile_menu1">
								<form class="form-horizontal" id="my_form_account" action="php/user.php" method="POST">
									<div class="row" style="margin:0px 30px 0px 30px ;">
										<div class="form-group">
										  <label class=" col-sm-3" style="padding:0px;">Facebook:</label>
										  <div class="input-group col-sm-8" style="padding:0px;">          
											<span class="input-group-addon ">&nbsp;<i class="fab fa-facebook-f"></i>&nbsp;</span>
											<input id="text" type="text" class="form-control" name="facebook" placeholder="Enter facebook link" value="<?=$profilerow['facebook']?>">
										  </div>
										</div>
										<div class="form-group">
										  <label class="col-sm-3" style="padding:0px;"> Google Plus:</label>
										  <div class="input-group col-sm-8" style="padding:0px;">          
											<span class="input-group-addon  "><i class="fab fa-google-plus-g"></i></span>
											<input type="text" class="form-control " name="googleplus" placeholder="Enter google-plus link" value="<?=$profilerow['googleplus']?>">
										  </div>
										</div>
										<div class="form-group">
										  <label class="col-sm-3" style="padding:0px;">linkedin:</label>
										  <div class="input-group col-sm-8" style="padding:0px;">          
											<span class="input-group-addon  ">&nbsp;<i class="fab fa-linkedin-in"></i></span>
											<input type="text" class="form-control " name="linkedin" placeholder="Enter linkedin link" value="<?=$profilerow['linkedin']?>">
										  </div>
										</div>
										<div class="form-group">
										  <label class="col-sm-3" style="padding:0px;">Twitter:</label>
										  <div class="input-group col-sm-8" style="padding:0px;">          
											<span class="input-group-addon  ">&nbsp;<i class="fab fa-twitter-square"></i></span>
											<input type="text" class="form-control " name="twitter" placeholder="Enter Twitter link" value="<?=$profilerow['twitter']?>">
										  </div>
										</div>
										<div id="server-results3"></div>
										<div class="form-group">
										  <label class="col-sm-3" style="padding:0px;"> </label>
										  <div class="input-group col-sm-3" style="padding:0px;">          
											<input type="hidden" class="form-control" name="jobseekerchangeprofilesocialmedia" value="Update">
											<input type="submit" class="form-control" name="jobseekerchangeprofilesocialmedia" value="Update">
										  </div>
										</div>
										<!--p><input type="radio" name="citizenship" /><span>&nbsp;Visible Setting</span></p>
										<p><input type="radio" name="citizenship" /><span>&nbsp;Communication Setting</span></p>
										<p><input type="radio" name="citizenship" /><span>&nbsp;Block Companies </span></p>
										<p><input type="radio" name="citizenship" /><span>&nbsp;Change Password</span></p-->
									</div>
								</form>
							</div>
							<div id="Re-pwd" class="tab-pane fade profile_menu3" style="padding:30px;" >
								<form class="form-horizontal" id="my_form_re_pwd" action="php/user.php" method="POST">
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
									<div id="server-results4"></div>
									<div class="form-group">
									  <label class="col-sm-3" style="padding:0px;"> </label>
									  <div class="input-group col-sm-6" style="padding:0px;">          
										<input type="hidden" class="form-control" name="jobseekerchangeemployerpwd" value="Update">
										<input type="submit" class="form-control" name="jobseekerchangeemployerpwd" value="Update">
									  </div>
									</div>
								</form> 
							</div>
						</div>
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
	</script>
	<script>
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
		
		
		$("#my_form").submit(function(event){
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
				$("#server-results1").html(response);
			});
		});
		$("#my_form_privacy").submit(function(event){
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
				$("#server-results2").html(response);
			});
		});
		$("#my_form_account").submit(function(event){
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
				$("#server-results3").html(response);
			});
		});
		$("#my_form_re_pwd").submit(function(event){
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
				$("#server-results4").html(response);
			});
		});
		
	</script>
</body>
</html>
