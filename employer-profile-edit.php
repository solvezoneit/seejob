<?php
	include"php/main.php";
?>
<!DOCTYPE html>
<html>
	
	<head>
		<title>updateprofilepage</title>
		<meta charset="utf-8">
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<link rel="stylesheet" href="css/w3.css">
		<!-- Latest compiled and minified CSS -->
		<link rel="stylesheet" href="css/bootstrap.min.css">
		<!-- jQuery library -->
		<script src="js/3.2.1-jquery.min.js"></script>
		<!-- Latest compiled JavaScript -->
		<script src="js/3.3.7-js-bootstrap.min.js"></script>
		<link rel="stylesheet" type="text/css" href="seejob.css">
		<script defer src="js/fontawesome.com.js"></script>
	
	<style>
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
<body class="cart_body">
	<div class="container-fluid">
	 <div class="row">
		<div class="nav"  style="background-color:black;">
			<ul class="list-inline index_ul">
				<li>
				 <a href="#" class="index-a">
					<span><i class="fas fa-phone-volume"></i>&nbsp;</span>9999639876
				 </a>
				</li>
				<li>
					<a href="#" class="index-a">
						<span><i class="fas fa-envelope"></i>&nbsp; </span>sale@seejob.in
					</a>
				</li>
				<li>
					<a href="#" class="index-a">
						<span><i class="fas fa-comments"></i>&nbsp; </span>Live Chat (10 am to 7 pm)
					</a>
				</li>
			</ul>
		</div>
		<!-- main header -->

		<!-- Menu -->

		<div class="navbar navbar-default emp_margin" role="navigation" id="navbar">
			<div class="container_fluid index_nav_container">
				<div class="navbar-header emp_header">
					<a class="navbar-brand" href="index.php">
						<img src="image/seelogo.png" alt="Obaju logo">
					</a>
					<div class="navbar-buttons">
						<button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#navigation">
							<span class="sr-only">Toggle navigation</span>
							<i class="fa fa-align-justify"></i>
						</button>
					</div>
				</div>
				<!--/.navbar-header -->

				<div class="navbar-collapse collapseb index_margin_urjest" data-spy="affix" data-offset-top="197" id="navigation">
					<div>
						<ul class="nav navbar-nav navbar-left">
							<li class="dropdown text-center">
								<a href="#" class="dropdown-toggle " data-toggle="dropdown" data-hover="dropdown" data-delay="200"><span><img src="image/jobs_con.png" alt="icon"></span><br><span class="index_menu_icon">JOBS<b class="caret"></b></span></a>
								<ul class="dropdown-menu">
									<li>
										<div class="index_menu">
											<div class="row">
												<div class="col-sm-11 text-left index_submenu">
													<h4 ><a href="#" class="index_inmenu">All Job</a></h4><hr>
													<h5 ><a href="#" class="index_inmenu">Marketing Jobs</a></h5><hr class="index_hr">
													<h5 ><a href="#" class="index_inmenu">Finance Jobs</a></h5><hr class="index_hr">
													<h5><a href="#" class="index_inmenu">HR Jobs</a></h5><hr class="index_hr">
													<h5><a href="#" class="index_inmenu">Opertational Jobs</a></h5><hr class="index_hr">
													<h5><a href="#" class="index_inmenu">Software Jobs</a></h5><hr class="index_hr">
												</div>
											</div>
										</div>
										<!-- /.yamm-content -->
									</li>
								</ul>
							</li>

							<li class="dropdown text-center">
								<a href="#" class="dropdown-toggle" data-toggle="dropdown" data-hover="dropdown" data-delay="200"><span>
								<img src="image/resume_writing.png" alt="icon"></span><br><span class="index_menu_icon">RESUME WRITING<b class="caret"></b></span></a>
								<ul class="dropdown-menu">
									<li>
										<div class="index_menu_resume">
											<div class="row index_submenumenu_resume">
												<div class="col-sm-3 text-left index_submenumenu_box">
												  <h4><a href="#" class="index_inmenu">First Option </a></h4><hr class="index_submenu_hr">
													<h5 ><a href="#" class="index_inmenu">Entry-Level <br>(Exp:0 to 3 years)</a></h5><hr class="index_submenu_hr">
													<h5 ><a href="#" class="index_inmenu">Mid-Level<br>(Exp:3 to 8 years)</a></h5><hr class="index_submenu_hr">
													<h5><a href="#" class="index_inmenu">Senior-Level</a></h5><hr class="index_submenu_hr">
													<h5><a href="#" class="index_inmenu">Executive-Level<br>(Exp:15 years&above)</a></h5><hr class="index_submenu_hr">
												</div>
												<div class="col-sm-3 text-left index_submenumenu_box">
												  <h4><a href="#" class="index_inmenu">First Option </a></h4><hr class="index_submenu_hr">
													<h5 ><a href="#" class="index_inmenu">Entry-Level <br>(Exp:0 to 3 years)</a></h5><hr class="index_submenu_hr">
													<h5 ><a href="#" class="index_inmenu">Mid-Level<br>(Exp:3 to 8 years)</a></h5><hr class="index_submenu_hr">
													<h5><a href="#" class="index_inmenu">-Level</a></h5><hr class="index_submenu_hr">
													<h5><a href="#" class="index_inmenu">Executive-Level<br>(Exp:15 years&above)</a></h5><hr class="index_submenu_hr">
												</div>
												<div class="col-sm-4 text-left index_submenumenu_box">
												   <h4><a href="#" class="index_inmenu">First Option </a></h4><hr class="index_submenu_hr">
													<h5 ><a href="#" class="index_inmenu">Entry-Level <br>(Exp:0 to 3 years)</a></h5><hr class="index_submenu_hr">
													<h5 ><a href="#" class="index_inmenu">Mid-Level<br>(Exp:3 to 8 years)</a></h5><hr class="index_submenu_hr">
													<h5><a href="#" class="index_inmenu">Senior-Level</a></h5><hr class="index_submenu_hr">
													<h5><a href="#" class="index_inmenu">Executive-Level<br>(Exp:15 years&above)</a></h5><hr class="index_submenu_hr">
												</div>
											</div>
										</div>
									</li>
								</ul>
							</li>     
											  
							<li class="dropdown text-center">
								<a href="#" class="dropdown-toggle" data-toggle="dropdown" data-hover="dropdown" data-delay="200"><span>
								<img src="image/recruiter_icon.png" alt="icon"></span><br><span class="index_menu_icon">RECRUITER REACH<b class="caret"></b></span></a>
								<ul class="dropdown-menu">
									<li>
										<div class="index_resume_option">
											<div class="row">
											   <div class="col-sm-11 text-left index_submenumenu_box">
													<h4><a href="#" class="index_inmenu">Resume Option </a></h4><hr class="index_submenu_hr">
													<h5><a href="resumedisplaypage.php" class="index_inmenu">Resume Display</a></h5><hr class="index_hr">
													<h5><a href="resumewriting.php" class="index_inmenu">Recruiter Reach</a></h5><hr class="index_hr">
													<h5><a href="resumewriting.php" class="index_inmenu">Priority Applicant</a></h5><hr class="index_hr">
												</div>
											</div>
										</div>
										<!-- /.yamm-content -->
									</li>
								</ul>
							</li>

							<li class="dropdown text-center">
								<a href="#" class="dropdown-toggle" data-toggle="dropdown" data-hover="dropdown" data-delay="200"><span><img src="image/lerter_icon.png" alt="icon"></span><br><span class="index_menu_icon">LATTER<b class="caret"></b></span></a>
								<ul class="dropdown-menu">
									<li>
										<div class="index_letter">
											<div class="row">
												<div class="col-sm-11 text-left index_submenumenu_box">
													<h4><a href="resumewriting.php" class="index_inmenu">Letter Option </a></h4><hr class="index_submenu_hr">
													<h5><a href="resumewriting.php" class="index_inmenu">Cover Letter</a></h5><hr class="index_hr">
													<h5><a href="resumewriting.php" class="index_inmenu">Job Letter Sample</a></h5><hr class="index_hr">
												</div>
											</div>
										</div>
									</li>
								</ul>
							</li>

							<!-- <li class="index_menu_icon text-center index_login" data-toggle="modal" data-target="#myModal"><a href="#"><i class="fa fa-lock" aria-hidden="true" ></i><br><span >LOGIN</span></a></li> -->

							<li class=" text-center"><a href="#.html" ><span class="far fa-bell"></span><br><span class="index_menu_icon">Notification</span></a>
							</li>
						</ul>
					</div>

					<div style="margin-top:10px;">
						<div class="btn-group button_box">
							<button type="button" class=" w3-button w3-medium w3-circle w3-cyan dropdown-toggle" data-toggle="dropdown">
							<i class="fas fa-bell buy_color"></i><span class="alarm">2</span>
							</button>
							<div class="dropdown-menu myprofile_menu1" role="menu">
								<div class="row myprofile_option">
									<div class="col-md-10 myprofile_submenu1">
										<h4 class="myprofile_heading">Job Recommundation</h4>
										<p class="myprofile_para">Accosiate- Contract Drafting thomas return<p>
									</div>
									<div class="col-md-2">
										<h4 class="myprofile_heading1">12</h4>
									</div>
								</div>
								<div class="row myprofile_option">
									<div class="col-md-10 myprofile_submenu1">
										<h4 class="myprofile_heading">Job Recommundation</h4>
										<p class="myprofile_para">Accosiate- Contract Drafting thomas return<p>
									</div>
									<div class="col-md-2">
										<h4 class="myprofile_heading1">02</h4>
									</div>
								</div>
								<div class="row myprofile_option">
									<div class="col-md-10 myprofile_submenu1">
										<h4 class="myprofile_heading">Job Recommundation</h4>
										<p class="myprofile_para">Accosiate- Contract Drafting thomas return<p>
									</div>
									<div class="col-md-2">
										<h4 class="myprofile_heading1">12</h4>
									</div>
								</div>
								<div class="row myprofile_option">
									<div class="col-md-12 delete_option">
										<a href="applyjobseekerpage.php" class="see_all" ><span >See all</span></a>
									</div>
								</div>
							</div>	
						</div>
						<div class="btn-group myp_btn">
							<button type="button" class="w3-button w3-medium w3-circle w3-deep-purple  dropdown-toggle" data-toggle="dropdown">
								<i class="fas fa-user myp_bell"></i>
							</button>
							<ul class="dropdown-menu myprofile_menu" role="menu">
								<li><a href="updateprofilepage.php" class="anchor_margin"><i class="fas fa-user-plus myp_btn"></i>Edit Profile</a></li>
								<li><a href="#" class="anchor_margin"><i class="fas fa-spinner myp_btn"></i>Profile Performance</a></li>
								<li><a href="#" class="anchor_margin"><i class="fas fa-ban myp_btn"></i>Block Companies</a></li>
								<li><a href="#" class="anchor_margin"><i class="fas fa-lock-open myp_btn"></i>Change Password</a></li>
								<li><a href="loginpage.php" class="anchor_delete"><i class="fas fa-sign-out-alt myp_btn"></i>Logout</a></li>
							</ul>
						</div>
						<a href="Postjobpage.php" class="btn btn-info " role="button">Post for free </a>
					</div>
				</div>
			</div>
		</div>
		<div class="row">
			<div class="col-md-2">
			</div>
			<div class="col-md-8 emplyer_align profile_row">
				
				<div class="col-md-2 text-center">
						<label id="upload_button">
							<img src="image/CEO.jpg" alt="pic" width="100%">
							<input type="file">
							<span class="btn btn-primary upload_btn">Upload Files</span>
						</label>
				</div>
				<div class="col-md-8 update_pading ">
					
						<h2 class="profile_heading">Candidate Name</h2>
						<p><span class="update_heading">Email ID - </span>
							<span class="profile_social">
								<a href="#"><span><img src="image/facebook_circle-512.png" alt="fb_icon" class="profile_fb"></span></a>
								<a href="#" class="fab fa-twitter register_twiet"></a>
								<a href="#" class="fab fa-google register_google"></a>
							</span>
						</p>
						<p class="update_heading">Designation - </p>
						<p>Candidate Name Candidate Name Candidate Name Candidate Name Candidate Name Candidate Name Candidate Name Candidate Name  Candidate Name</p>
						
					<div class="profile_tab">
						<ul class="nav nav-tabs profile_bottom">
							<li class="active"><a href="#profile">profile</a></li>
							<li><a href="#Privacy">Privacy Setting</a></li>
							<li><a href="#Account">Account Setting</a></li>
							<li><a href="#Re-pwd">Reset Password</a></li>
						</ul>
						<div class="tab-content">
							<div id="profile" class="tab-pane fade in active profile_menu">
								<div class="col-md-6  profile_option">
									<div class="row">
									  <div class="col-25">
										<label for="subject">Resume Headline</label>
									  </div>
									  <div class="col-75">
										<textarea id="subject" name="subject" placeholder="Write something.." style="height:auto"></textarea>
									  </div>
									</div>
									<div class="row">
									  <div class="col-25">
										<label for="lname"> Name</label>
									  </div>
									  <div class="col-75">
										<input type="text" id="lname" name="lastname" placeholder="Your name..">
									  </div>
									</div>
									<div class="row">
									  <div class="col-25">
										<label for="lname">Parmanent Address</label>
									  </div>
									  <div class="col-75">
										<textarea name="subject" placeholder="Enter Address.." style="height:auto"></textarea>
									  </div>
									</div>
									<div class="row">
									  <div class="col-25">
										<label for="lname">Home Town/City</label>
									  </div>
									  <div class="col-75">
										<input type="text" name="lastname" placeholder="Town/City..">
									  </div>
									</div>
									<div class="row">
									  <div class="col-25">
										<label for="lname">Pincode</label>
									  </div>
									  <div class="col-75">
										<input type="text" name="lastname" placeholder="Pincode..">
									  </div>
									</div>
									<div class="row">
									  <div class="col-25">
										<label for="country">Current Location</label>
									  </div>
									  <div class="col-75">
										<select id="country" name="country">
										  <option value="australia">Australia</option>
										  <option value="canada">Canada</option>
										  <option value="usa">USA</option>
										</select>
									  </div>
									</div>
									<div class="row">
									  <div class="col-25">
										<label for="country">Preferred Location</label>
									  </div>
									  <div class="col-75">
										<select name="country">
										  <option value="australia">Australia</option>
										  <option value="canada">Canada</option>
										  <option value="usa">USA</option>
										</select>
									  </div>
									</div>
									<div class="row">
									  <div class="col-25">
										<label for="country">Industry </label>
									  </div>
									  <div class="col-75">
										<select name="country">
										  <option value="australia">IT</option>
										  <option value="canada">Marketing</option>
										  <option value="usa">HR</option>
										</select>
									  </div>
									</div>
									<div class="row">
									  <div class="col-25">
										<label for="country">Role </label>
									  </div>
									  <div class="col-75">
										<select name="country">
										  <option value="australia">IT</option>
										  <option value="canada">Marketing</option>
										  <option value="usa">HR</option>
										</select>
									  </div>
									</div>
									<div class="row">
									  <div class="col-25">
										<label for="country">*Functional Area </label>
									  </div>
									  <div class="col-75">
										<select name="country">
										  <option value="australia">IT</option>
										  <option value="canada">Marketing</option>
										  <option value="usa">HR</option>
										</select>
									  </div>
									</div>
								</div>
								<div class="col-md-6  profile_option">
									<div class="row">
									  <div class="col-25">
										<label for="country">Experiance </label>
									  </div>
									  <div class="col-75">
										<select name="country">
										  <option value="australia">Fresher</option>
										  <option value="canada">1 years</option>
										  <option value="usa">2 years</option>
										</select>
									  </div>
									</div>
									
									<!-- <div class="row"> -->
									  <!-- <div class="col-25"> -->
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
									  <div class="col-25">
										<label for="lname"> Gender</label>
									  </div>
									  <div class="col-75">
										<div class="radio">
										  <label><input type="radio">female</label>
										  <label><input type="radio" >male</label>
										</div>
									  </div>
									</div>
									<div class="row">
									  <div class="col-25">
										<label for="country">Marital Status</label>
									  </div>
									  <div class="col-75">
										<select name="country">
										  <option value="australia">single</option>
										  <option value="canada">married</option>
										  <option value="canada">divorced</option>
										</select>
									  </div>
									</div>
									<div class="row">
									  <div class="col-25">
										<label for="lname">Mobile</label>
									  </div>
									  <div class="col-75">
										<input type="text" name="lastname" placeholder="Enter nu.." pattern="[6789][0-9]{9}">
									  </div>
									</div>
									<div class="row">
									  <div class="col-25">
										<label for="lname">Alternate number </label>
									  </div>
									  <div class="col-75">
										<input type="text" name="lastname" placeholder="Enter nu.." pattern="[6789][0-9]{9}">
									  </div>
									</div>
									<!-- <div class="row"> -->
									  <!-- <div class="col-25"> -->
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
									  <div class="col-25">
										<label for="lname">Anual Selery</label>
									  </div>
									  <div class="col-75">
										<input type="text" name="lastname" placeholder="Enter Amount.." >
									  </div>
									</div>
									
									<div class="row">
									  <div class="col-25">
										<label for="lname">Social Media Link</label>
									  </div>
									  <div class="col-75">
									  <div class="input-group col-sm-12">
										<span class="input-group-addon update_f_icon"><i class="fab fa-facebook-f"></i></span>
										<input id="text" type="text" class="form-control update_input" name="email" placeholder="Enter facebook link">
									  </div><br>
									  <div class="input-group col-sm-12">
									  <span class="input-group-addon  update_g_icon"><i class="fab fa-google-plus-g"></i></span>
										<input type="text" class="form-control update_input" name="email" placeholder="Enter google-plus link">
									  </div><br>
									  <div class="input-group col-sm-12">
									  <span class="input-group-addon  update_in_icon"><i class="fab fa-linkedin-in"></i></span>
										<input type="text" class="form-control update_input" name="email" placeholder="Enter linkedin link">
									  </div><br>
									  </div>
									</div>
								</div>
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
										  <input type="checkbox" >
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
										  <input type="checkbox" >
										  <span class="slider round"></span>
										</label>
									</span>
									<span style="float:left;">Active</span>
								</div>
							</div>
							</div>
							<div id="Account" class="tab-pane fade profile_menu1">
								<p><input type="radio" name="citizenship" /><span>&nbsp;Visible Setting</span></p>
								<p><input type="radio" name="citizenship" /><span>&nbsp;Communication Setting</span></p>
								<p><input type="radio" name="citizenship" /><span>&nbsp;Block Companies </span></p>
								<p><input type="radio" name="citizenship" /><span>&nbsp;Change Password</span></p>
							</div>
							<div id="Re-pwd" class="tab-pane fade" style="padding:30px;" >
								<form class="form-horizontal" action="/action_page.php">
									<div class="form-group">
									  <label class=" col-sm-3 text-left" style="padding:0px;">Old Password:</label>
									  <div class="col-sm-3" style="padding:0px;">          
										<input type="password" class="form-control" placeholder="Enter Old Password:" name="pwd">
									  </div>
									</div>
									<div class="form-group ">
									  <label class="col-sm-3" style="padding:0px;"> New Password:</label>
									  <div class="col-sm-3" style="padding:0px;">          
										<input type="password" class="form-control" placeholder="Enter New Password:" name="pwd" >
									  </div>
									</div>
									<div class="form-group">
									  <label class="col-sm-3" style="padding:0px;"> Confirm Password:</label>
									  <div class="col-sm-3" style="padding:0px;">          
										<input type="password" class="form-control" placeholder="Confirm Password:" name="pwd">
									  </div>
									</div>
								 </form> 
							</div>
						</div>
						<div class="col-md-12 text-left up_submit">
							<hr>
							<a href="#" class="btn btn-info" role="button">Submit</a>
						</div>
					</div>
				</div>
				<div class="col-md-2" style="border-left:1px solid lightgray;">
					<h5>Already Register?</h5>
					<form action="/action_page.php">
						<div class="form-group">
						  <label for="email">Email:</label>
						  <input type="email" class="form-control" id="email" placeholder="Enter email" name="email">
						</div>
						<div class="form-group">
						  <label>Password:</label>
						  <input type="password" class="form-control" placeholder="Enter password" name="pwd">
						</div>
						<div class="checkbox">
						  <label><input type="checkbox" name="remember"><span style="font-size:12px;">Remember me</span></label>
						</div>
						<a href="#" class="btn btn-primary" role="button" >Submit </a>
					</form> 
				</div>
			</div>
			<div class="col-md-2">
			</div>
		</div>
	 </div>
	</div>
	<div class="row text-left index-footer">
		<div class="col-md-3" >
		  <ul class="f_list f_list1 index_footul">
			<li class="footer_heading">Information</li>
			<li><a href="index.php" class="footer_content">About Us</a></li>
			<li><a href="login.php"  class="footer_content">Terms&Conditions</a></li>
			<li><a href="login.php"  class="footer_content">Privacy Policy</a></li>
			<li><a href="about.php"  class="footer_content">Careers with Us</a></li>
			<li><a href="login.php"  class="footer_content">Contact Us</a></li>
			<li><a href="login.php"  class="footer_content">Fraud Alert</a></li>
			<li><a href="about.php"  class="footer_content">FAQs</a></li>
			<li><a href="index.php"  class="footer_content">Summons / Notices</a></li>
		  </ul>
		</div>

		<div class="col-md-3">
			 <ul class="f_list f_list1 index_footul">
			<li class="footer_heading">Job Seeker</li>
				<li><a href="index.php" class="footer_content">Resume Writing</a></li>
				<li><a href="login.php"  class="footer_content">Resume Display </a></li>
				<li><a href="login.php"  class="footer_content">Resume Forwording</a></li>
				<li><a href="about.php"  class="footer_content">Connect to Recruiter</a></li>
				<li><a href="login.php"  class="footer_content">Cover Letter</a></li>
				<li><a href="login.php"  class="footer_content">Job Search </a></li>
			</ul>
		</div>

		<div class="col-md-3">
			<ul class="f_list f_list1 index_footul">
				<li class="footer_heading">Employer Zone</li>
				<li><a href="index.php" class="footer_content"><i class="fa fa-caret-right" aria-hidden="true"></i>&nbsp;Post Jobs</a></li>
				<li><a href="login.php" class="footer_content"><i class="fa fa-caret-right" aria-hidden="true"></i>&nbsp;Find CV </a></li>
				<form class="example employer_exp" action="/action_page.php">
					<div> 
						<h4 class="index_news">Subscribe Our Newsletter</h4>
						<input type="text" placeholder="Enter your email-id" name="search2" style="background-color:transparent; padding:5px; width:70%;border-radius:0px;">
						<button type="submit" style="background: -webkit-linear-gradient(top,#f8e3ad,#eeba37); padding:7px;"><i class="fas fa-envelope"></i></button>
					</div>
				</form>
			</ul>
		</div>
		  
		<div class="col-md-3 ">
			<div class="form-group">
				<div class="col-sm-12">
					<div class="footer_heading">Contact Us</div>
					<div class="col-sm-6 index_footer">
						<input type="text" class="form-control index_foot_input" placeholder="Enter Name" name="name">
					</div>
					<div class="col-sm-6 index_footer">
						<input type="email" class="form-control index_foot_input" placeholder="Enter email" name="Name">
					</div>
					<div class="col-sm-12 index_footer">
						<textarea class="form-control index_foot_input" rows="5" id="comment" placeholder="Type your msg..."></textarea>
					</div>
					<div class="text-center">
						<button type="button" class="btn btn-warning btn-block">Submit</button>
					</div>
					<div class="index_social text-center">
					  <a href="#"><span><img src="image/facebook_circle-512.png" alt="fb_icon" class="fb"></span></a>
					  <a href="#" class="fab fa-twitter twiet"></a>
					  <a href="#" class="fab fa-google gogle"></a>
					  <a href="#"><span><img src="image/social-linkedin.png" alt="likdin_icon" class="likdin"></span></a>
					</div>
				</div>
			</div>
		</div>
	</div>
</div>
	
<div class="row text-left">
	<p class="index_foot_para">©2018 Seejob.com. All Rights Reserved.</p>
</div>

<script>
	$(document).ready(function(){
		$(".nav-tabs a").click(function(){
			$(this).tab('show');
		});
	});
</script>
</body>
</html>
