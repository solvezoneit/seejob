<?php
	session_start();
	include"cjobadmin/api/db_config.php";
	$get_details = mysqli_fetch_array(mysqli_query($db,"select * from cj_job_post where url='".$_REQUEST["url"]."'"));
	$get_comp = mysqli_fetch_array(mysqli_query($db,"select * from cj_company where com_id='".$get_details["company_id"]."'"));
?>
<!DOCTYPE html>
<html lang="en">
	
	<head>
		<title><?=$get_details['page_title']?></title>
		<meta charset="utf-8">
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<link rel="canonical" href=""/>
		<meta charset="UTF-8" /> 
		<meta http-equiv="X-UA-Compatible" content="IE=Edge" />
		<meta name="description" content="<?=$get_details['page_desc']?>"/>
		<META NAME="ROBOTS" CONTENT="NOINDEX, NOFOLLOW">
		<meta name="google-site-verification" content="" />
		<meta name="keywords" content="<?=$get_details['page_keyword']?>"/>
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
		<meta name="description" content="" />
		
		<style>
		.link_tab
		{
		color:white;
		text-decoration:none
		}
		.link_tab:hover
		{
		color:gray;
		text-decoration:none
		}
		.heding_color
		{
		margin-top:-20px;
		background-image:url(<?=$url?>/image/bannerh.jpg);
		width:100%;
		height:100px;
		}
		.button_index {
			background-color:#337ab7; 
			border: 1px solid #337ab7;;
			color:white;
			padding: 6px 22px;
			text-align: center;
			text-decoration: none;
			display: inline-block;
			font-size: 14px;
			margin: 4px 2px;
			cursor: pointer;
			-webkit-transition-duration: 0.4s; /* Safari */
			transition-duration: 0.4s;
			box-shadow: 0 12px 16px 0 rgba(0,0,0,0.24),0 17px 50px 0 rgba(0,0,0,0.19);
		}
		.buttonin:hover {
			background-color:white; /* Green */
			color: #337ab7;
			box-shadow: 0 0px 0px 0 rgba(0,0,0,0.24),0 17px 50px 0 rgba(0,0,0,0.19);
		}
		.checked {
			color: orange;
			font-size:12px;
		}
		.tag{
		text-decoration:none !important;
		border-radius: 2px;
		background-color: #f1f0f0;
		border-bottom: 1px solid #d8d8d8;
		display: inline-block;
		margin-bottom: 5px;
		margin-left: 3px;
		padding: 5px 8px;
		color: #949494;
		font-size: 13px;
		}
		.description_box
		{
		margin:10px;
		}
		
		.description
		{
		color:#2e6da4;
		}
		.option_exp
		{
		color:gray;
		}
		p{
		color:gray;
		font-size:15px;
		}
		#location-filter {
		  background-position: 10px 12px;
		  background-repeat: no-repeat;
		  width: 100%;
		  font-size: 14px;
		  padding: 6px 6px 6px 6px;
		  border: 1px solid #ddd;
		  margin-bottom: 12px;
		  margin-top: 12px;
		}
		#myUL {
		  list-style-type: none;
		  padding: 0;
		  margin: 0;
		}

		#myUL li a {
		  border: 1px solid #ddd;
		  margin-top: -1px; /* Prevent double borders */
		  background-color: #fff;
		  padding: 12px;
		  text-decoration: none;
		  font-size: 14px;
		  color: black;
		  display: block;
		  font-family:initial;
		}

		#myUL li a:hover:not(.header) {
		  background-color: #eee;
		}
		.employer_detail_margin
		{
			
			margin-top:-40px;
		}
		</style>
</head>
	
<body class="apjobbg">
  <div class="container-fluid" style="padding-left:0px;padding-right:0px;">
	<!-- Header Menu Start-->
	<?php include"header.php"?>
	<!-- Header Menu End -->
	
		<div class="container-fluid heding_color">
			<div class="container">
				<div style="margin-top:30px;">
					<p>
						<a href="#" class="link_tab">Home</a>&nbsp;
							<i class="fas fa-angle-double-right link_tab"></i>&nbsp;
						<a href="#" class="link_tab"><?=$get_details['job_cat']?></a>&nbsp;
							<i class="fas fa-angle-double-right link_tab"></i>&nbsp;
						<a href="#" class="link_tab "><?=$get_details['job']?></a>
					</p>
				</div>
			</div>
		</div>
		<div class="container">
			<div class="row employer_detail_margin" style="">
				<div class="col-md-10">
					<div class="apply_box row">
						<div class="col-md-12">
							<h3 style="color:#2e6da4;"><?=$get_details['job_title']?></h3>
							<div style="float:right;">
								<img src="<?=$url?>/image/company/<?=$get_comp['com_img']?>" class="thumbnail1" alt="icon" width="100px;"><br>
								<button class="button_index buttonin" onclick="document.getElementById('id01').style.display='block'" ><i class="fas fa-angle-double-right"></i>&nbsp;Apply</button>
							</div>
							<div><h4 class="apjob_heading1">Hiring for <?=$get_details['job_title']?>&nbsp;&nbsp;<span class="fa fa-star checked"></span><span class="fa fa-star checked"></span><span class="fa fa-star checked"></span><span class="fa fa-star checked"></span>
							<span class="fa fa-star checked"></span>&nbsp;&nbsp;<span style="font-size:12px;">2.50/5&nbsp;&nbsp;<a href="#">Follow</a></span>
							</h4>
							</div>
							
							<!--div>
								<p>Keyskill :
								<a title="" target="_blank" href="#" class="tag"><span>html</span></a>
								<a title="" target="_blank" href="#" class="tag" ><span>CSS</span></a>
								<a title="" target="_blank" href="#" class="tag" ><span>Bootstrap</span></a>
								<a title="" target="_blank" href="#" class="tag" ><span>java script</span></a>
								<a title="" target="_blank" href="#" class="tag" ><span>xhtml</span></a></p>
							</div-->
							<div>
								<i class="fas fa-map-marker" style="color:#337ab7;"></i>&nbsp;<span><?=$get_details['location']?>, <?=$get_details['sub_location']?></span>
								<p>Posted: <?=date("d M Y, h:i A",strtotime($get_details["add_date"]))?></p>
							</div>
							<hr>
						</div>
						
			
						<div class="col-md-12">
							<h2>Job Description</h2>
							<p><?=$get_details['job_desc']?></p>
							<div class="col-md-12 resume-para">
								<p>
									<em>Selery:</em>
									<span><?=$get_details['salary_min']?> - <?=$get_details['salary_min']?> Per Month</span>
								</p>
								<p>
									<em>Experience:</em>
									<span><?=$get_details['exp_min']?> - <?=$get_details['exp_min']?> Year</span>
								</p>
								<p>
									<em>Industry:</em>
									<span><?=$get_details['company_name']?></span>
								</p>
								<p>
									<em>Education:</em>
									<span><?=$get_details['education']?></span>
								</p>
								<p>
									<em>Work Shift:</em>
									<span><?=$get_details['work_shifts']?></span>
								</p>
								<p>
									<em>Employment Type:</em>
									<span><?=$get_details['job_type']?></span>
								</p>
							</div>
							<!--div class="resume-para" >
								<h4>Keyskill</h4>
								<p>Content Development</p>
							</div>
							<div class="resume-para" >
								<h4>Desired Candidate Profile</h4>
								<p>Please refer to the Job description above</p>
							</div-->
							<h2>Company Details:</h2>
							<div class="resume-para" >
								<p>
									<em>Company Name:</em>
									<span><?=$get_comp['com_name']?></span>
								</p>
								<p>
									<em>Company Address:</em>
									<span><?=$get_comp['com_address']?></span>
								</p>
								<p>
									<em>Company Email:</em>
									<span><?=$get_comp['com_email']?></span>
								</p>
								<p><?=html_entity_decode($get_comp['com_desc'])?></p>
							</div>
							<div class="resume-para">
								<span>
									<button class="button_index buttonin"><i class="fas fa-angle-double-right"></i>&nbsp;Apply On Company Website</button>
								</span>
							</div>
						</div>
					</div>
					
					<div id="id01" class="w3-modal w3-animate-opacity">
						<div class="w3-modal-content w3-card-4" style="border:2px solid #2e6da4;">
						  <header class="w3-container"> 
							<span onclick="document.getElementById('id01').style.display='none'" 
							class="w3-button w3-large w3-display-topright">&times;</span>
							<h2 class="apply-heading"></h2>
						  </header>
						  <div class="w3-container description_box">
							<form id="job_apply" action="<?=$url?>/apply-job.php" method="POST">
								<div class="resume-form">
									<div class="col-md-6">
									  <input type="hidden" name="job_post_id" value="<?=$get_details["job_post_id"]?>" >
									  <input type="text" class="apply-input" id="fname" name="name" placeholder="enter name" value="<?=@$_SESSION['apply_name']?>" required >
									</div>
									<div class="col-md-6">
									  <input type="text" class="apply-input" id="lname" name="contact" placeholder="enter number" pattern="[6789][0-9]{9}" value="<?=@$_SESSION['apply_contact']?>" required >
									</div>
									<div class="col-md-6">
									  <input type="email" class="apply-input" id="fname" name="email" placeholder="enter email" value="<?=@$_SESSION['apply_email']?>" required >
									</div>
									<div class="col-md-6">
									  <input type="text" class="apply-input" id="lname" name="location" placeholder="enter location" value="<?=@$_SESSION['apply_location']?>" required >
									</div>
									<div class="col-md-12" id="job_apply_result"></div>
									<div class="apply-btn-resume">
										<span>
											<!--a href="#Jobseeker" onclick="document.getElementById('#').style.display='block'" class="btn-aply btn-aply1" id="flip<?=$get_details["job_post_id"]?>" >Apply with more detaile</a-->
											<input type="hidden" name="apply-job" value="Apply">
											<button type="submit" onClick="return confirm('Apply Successfully...')" name="apply-job" class="btn-download btn-download1 text-center">Apply</button>
										</span>
									</div>
								</div>
							</form>
							<form>
								<div class="modal-content Jobseeker_margin" id="panel<?=$get_details["job_post_id"]?>" style="display:none;">   
									<div class="modal-header">
										<div class="jobseeker_page">
										 <h3 class="jobseeker_heading">Job seeker <?=$get_details["job_post_id"]?></h3>
										  <div class="scrollbar" id="style-7" >
											<div class="row">
												<div class="col-md-12">
													<h4>My Resume</h4>
												</div>

												<div class="col-md-12 index_upload">
													<label for="imageUpload" class="btn btn-primary btn-block btn-outlined">Upload Resume</label>
													<input type="file" id="imageUpload" accept="image/*" class="jobseeker_display">
													<span class="Jobseeker_text">File should be doc, docx, pdf format and less than 500 KB
													</span>
												</div>
											</div>

											<div class="row jobseeker_knowladge">
												<div class="col-md-12 jobseeker_knowladge_box">
													<h4 id="Gender">Do you have Basic knowledge of Microsoft Excel?</h4>
													<div class="col-md-6 jobseeker_inside">
														<label class="box1">Yes
														  <input type="radio"  name="radio" checked="checked"> 
														  <span class="checkmark"></span>
														</label>
													</div>
													<div class="col-md-6 jobseeker_inside">
														<label class="box1">No
														  <input type="radio" name="radio">
														  <span class="checkmark"></span>
														</label>
													</div>
												</div>
											</div>

												<div class="row">
													<div class="col-md-12 jobseeker_knowladge_box1">
														<h4> Which languages do you know?</h4>
													</div>
													<div class="col-md-3 jobseeker_inside1">
														<label class="box">Hindi
															<input type="checkbox" checked="checked" >
															<span class="checkmark"></span>
														</label>
														<label class="box">Kannada
															<input type="checkbox">
															<span class="checkmark"></span>
														</label>
														<label class="box">English
															<input type="checkbox">
															<span class="checkmark"></span>
														</label>
														<label class="box">Malayalam
															<input type="checkbox">
															<span class="checkmark"></span>
														</label>
													</div>

													<div class="col-md-3 jobseeker_inside1">
														<label class="box">Hindi
															<input type="checkbox">
															<span class="checkmark"></span>
														</label>
														<label class="box">Kannada
															<input type="checkbox">
															<span class="checkmark"></span>
														</label>
														<label class="box">English
															<input type="checkbox">
															<span class="checkmark"></span>
														</label>
														<label class="box">Malayalam
															<input type="checkbox">
															<span class="checkmark"></span>
														</label>
													</div>

													<div class="col-md-3 jobseeker_inside1" >
														<label class="box">Hindi
															<input type="checkbox">
															<span class="checkmark"></span>
														</label>
														<label class="box">Kannada
															<input type="checkbox">
															<span class="checkmark"></span>
														</label>
														<label class="box">English
															<input type="checkbox">
															<span class="checkmark"></span>
														</label>
														<label class="box">Malayalam
															<input type="checkbox">
															<span class="checkmark"></span>
														</label>
													</div>

													<div class="col-md-3 jobseeker_inside1">
														<label class="box">Hindi
															<input type="checkbox">
															<span class="checkmark"></span>
														</label>
														<label class="box">Kannada
															<input type="checkbox">
															<span class="checkmark"></span>
														</label>
														<label class="box">English
															<input type="checkbox">
															<span class="checkmark"></span>
														</label>
														<label class="box">Malayalam
															<input type="checkbox">
															<span class="checkmark"></span>
														</label>
													</div>
												</div>

												<div class="row jobseeker_salary">
													<div class="col-md-12 jobseeker_inside_salary">
														<h4> What is your monthly salary(in rupees) ?</h4>
														<div class="col-md-6 jobseeker_inside_salarybox">
															<input type="text" name="selery" placeholder="Enter Your selery in rupess" class="jobseeker_input">
														</div>
													</div>
												</div>
											

												<div class="row ">
													<div class="col-md-12 jobseeker_knowladge_box1">
														<h4>Which companies have you worked for?</h4>
														<div class="col-md-6 jobseeker_inside_companies">
															<input type="text" name="selery" placeholder=" Enter Which companies have you worked for?" class="jobseeker_input" >
														</div>
													</div>
												</div>

												

												<div class="row jobseeker_salary" >
													<div class="col-md-12 jobseeker_knowladge_box1">
														<h4> How many years of experience do you have in this role?</h4>
														<div class="col-md-6 jobseeker_inside_eperiance" >
															<select class="form-control jobseeker_select" id="sel1">
																<option>1</option>
																<option>2</option>
																<option>3</option>
																<option>4</option>
														   </select>
														</div>
													</div>
												</div>
												

												<div class="row">
													<div class="col-md-12 jobseeker_knowladge_box1">
														<h4>Designation</h4>	
														<div class="col-md-6 jobseeker_inside_salarybox" >
															<input type="text" name="selery" placeholder="Designation" class="jobseeker_input" >
														</div>
													</div>
												</div>
												
												<div class="row jobseeker_salary">
													<div class="col-md-12 jobseeker_knowladge_box1">
														<h4>Which board have you passed 1 to 10 classes?</h4>
														<div class="col-md-6 jobseeker_inside">
															<label class="box1">CBSE
															  <input type="radio" checked="checked" name="radio">
															  <span class="checkmark"></span>
															</label>
															<label class="box1">ICSE
															  <input type="radio" name="radio">
															  <span class="checkmark"></span>
															</label>
															<label class="box1">State boards
															  <input type="radio" name="radio">
															  <span class="checkmark"></span>
															</label>
														</div>
														<div class="col-md-6 jobseeker_inside">
															<label class="box1">IB
															  <input type="radio" name="radio">
															  <span class="checkmark"></span>
															</label>
															<label class="box1">Other
															  <input type="radio" name="radio">
															  <span class="checkmark"></span>
															</label>
														</div>
													</div>
													<hr>
												</div>
											</div>
											<div class="row">
												<div class="col-md-12">
													<div class="col-md-6" style="padding:0px;">
														<a href="#" onclick="document.getElementById('panel<?=$get_details["job_post_id"]?>').style.display='none'" class="btn-print btn-print1 btn-block text-center">skip</a>
													</div>
													<div class="col-md-6" style="padding:0px;">
														<button class="btn-download btn-download1 text-center btn-block">Apply</button>
													</div>
												</div>
											</div>
										</div>
									</div>
							   </div>
							</form>
							<!-- Resume of candidate -->
						  </div>
						</div>
					 </div>
				</div>
				<div class="col-md-2 sticky text-center">
					<?php
					$get_profile = mysqli_fetch_array(mysqli_query($db,"select * from cj_user where user_id='".$get_details["user_id"]."'"));
					?>
					<div style="margin-bottom:10px;">
						<div class="row" style="border:1px solid #ccc;background-color:white;">
							<h4 style="color:#2e6da4;">Job Posted By</h4>
							<hr style="margin-top:10px;margin-bottom:10px;background-color:#2e6da4;">
							<div class="col-md-12">
							<?php
							if($get_profile['profile_pic']=='')
							{
								?><img src="<?=$url?>/image/dp/profile.jpg" class="img-circle" alt="face" width="50%;" style="border:1px solid #ccc;"><?php
							}else{
								?><img src="<?=$url?>/image/dp/<?=$get_profile['profile_pic']?>" class="img-circle" alt="face" width="50%;" style="border:1px solid #ccc;"><?php
							}
							?>
								<hr style="margin-top:10px;margin-bottom:10px;">
								<div>
									<p style="font-size:11px;"><?=$get_profile['name']?> ( <?=$get_profile['designation']?> )</p>
									<hr style="margin-top:5px;margin-bottom:5px;">
									<p style="font-size:11px;"><?=$get_profile['location']?></p>
								</div>
							</div>
						</div>
					</div>
					
				</div>
			</div>
		</div>
	</div>
	<!--Footer-->
	<?php include"footer.php"; ?>
	<!--Footer-->
		
<!-- inline scripts related to this page -->
	<script>
	$('document').ready(function(){
		$('.post_li').on('click',function(){
			var getval = $("input[name=optradioname]:checked").val();
			if(getval){
				$('.hideoptradio').hide();
				$('#'+getval).show();
			}
		})
	})
    </script>
	<script> 
	$(document).ready(function(){
		$("#flip<?=$srow['job_post_id']?>").click(function(){
			$("#panel<?=$srow['job_post_id']?>").slideToggle("slow");
		});
	});
	</script>
	<script>
	$("#job_apply").submit(function(event){
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
			$("#job_apply_result").html(response);
		});
	});
	</script>
</body>
</html>				