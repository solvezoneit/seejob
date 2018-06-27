<?php
	include"php/main.php";
?>
<!DOCTYPE html>
<html>
	<head>
		<title>post-job</title>
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
		<link rel="stylesheet" href="css/w3.css"><link rel="stylesheet" href="socicon/social_media.css">
		<!-- Latest compiled and minified CSS -->
		<link rel="stylesheet" href="css/bootstrap.min.css">
		<link rel="stylesheet" href="css/w3.css"><link rel="stylesheet" href="socicon/social_media.css">
		<link rel="stylesheet" href="socicon/social_media.css">
		<!-- jQuery library -->
		<script src="js/3.2.1-jquery.min.js"></script>
		<!-- Latest compiled JavaScript -->
		<script src="js/3.3.7-js-bootstrap.min.js"></script>
		<link rel="stylesheet" type="text/css" href="seejob.css">
		<script defer src="js/fontawesome.com.js"></script>

		<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/chosen/1.5.1/chosen.min.css">
		<script src="https://cdnjs.cloudflare.com/ajax/libs/chosen/1.5.1/chosen.jquery.min.js"></script>
		<link href="https://fonts.googleapis.com/css?family=PT+Sans:400,700" rel="stylesheet">
		<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.6.3/css/font-awesome.min.css" />
		<style>
		* {
		  box-sizing: border-box;
		}

		#myInput {
		  background-image: url('css/searchicon.png');
		  background-position: 13px 13px;
		  background-repeat: no-repeat;
		  width: 100%;
		  font-size: 16px;
		  padding: 12px 20px 12px 40px;
		  border: 1px solid #ddd;
		  margin-bottom: 12px;
		}
		</style>

	
	</head>
<body>
<div class="">
	<!-- Header Menu Start-->
	<?php include"employer-header.php"?>
	<!-- Header Menu End -->

	<div class="container">
			<div class="row" style="margin-bottom:20px;">
			  <div class="col-md-9">
			  <form id="job_post" action="php/user.php" method="POST">
				<div class="post_page">
						<h3 class="Post_heading">Post a job</h3>
							<div>
								<div class="col-md-12" style="padding-left:px;">
									<h4>Job Titile</h4><hr class="post_hr">
									<input type="text" class="form-control" name="job_title" placeholder="Job Title" required="required">
								</div>

								<!--div class="col-md-12" style="padding-left:px;">
									<h4>Role</h4><hr class="post_hr">
									<div class="col-md-6 post-padding">
										<label>Job Type</label>
										<select class="livesearch_job_cat post_input" name="location" onchange="fetch_select_job(this.value);">
										<?php
											echo "<option value=''>Select Job Type</option>";
											$job_catsql = mysqli_query($db,"SELECT job_cat FROM cj_jobs GROUP BY job_cat") or die(mysqli_error($db));
											while($job_catrow = mysqli_fetch_array($job_catsql))
											{
												echo "<option value='".$job_catrow['job_cat']."'>".$job_catrow['job_cat']."</option>";
											}
										?>
										</select>
										<script>
										  $(".livesearch_job_cat").chosen();
										</script>
									</div>
									<div class="col-md-6 post-padding">
										<label>Job</label>
										<select class="1livesearch_job 1post_input" name="sublocation" id="new_select_job" style="width:100%;padding:2px;">
											<option value=''>Select Sub location</option>
										</select>
										<script>
										  $(".livesearch_job").chosen();
										</script>
									</div>
								</div-->
								<div class="row post-box">
									<div class="col-md-12">
										<h4 id="Role">Role:</h4><hr class="post_hr">
									</div>
									<div class="col-md-12">
										<span>
											<input type="text" name="search" id="myInput" onkeyup="myFunction()" placeholder="Marketing, IT, carpenter" class="inputbox">
										</span>	
									</div>
									<div class="col-md-12">
										<ul class="post_ul">
										 <div class="row">
										 <table id="myTable" border="0" style="width:100%;">
											<?php
											$job_catsql = mysqli_query($db,"SELECT job_cat FROM cj_jobs GROUP BY job_cat") or die(mysqli_error($db));
											while($job_catrow = mysqli_fetch_array($job_catsql))
											{
												?>
												<tr><td>
													<div class="row">
														<div class="col-md-12">
															<div>
																<div class="radio">
																  <label class="post_li "><input type="radio" name="optradioname" value="<?=str_replace(',','czmz',str_replace(' ','-',$job_catrow['job_cat']))?>"><?=$job_catrow['job_cat']?></label>
																</div>
															</div>
															<div class="post_div hideoptradio" style="display:none;" id="<?=str_replace(',','czmz',str_replace(' ','-',$job_catrow['job_cat']))?>">
																<div style="height:200px;overflow-y:scroll;background-color:#f9f9f9;">
																<?php
																$locsql = mysqli_query($db,"SELECT job FROM cj_jobs WHERE job_cat='".$job_catrow['job_cat']."' GROUP BY job") or die(mysqli_error($db));
																while($locarow = mysqli_fetch_array($locsql))
																{
																	?>
																	<label class="box">
																		<?=$locarow['job']?>
																		<input type="checkbox" name="job[]" value="<?=$locarow['job']?>">
																		<span class="checkmark"></span>
																	</label>
																	<?php
																}
																?>
																</div>
															</div>
														</div>
													</div>
												</td></tr>
												<?php
											}
											?>
										 </table>
										 </div>
										</ul>
									</div>
								</div>
								
								<div class="row post-box">
									<div class="col-md-12">
										<h4 id="job type">Job Type</h4><hr class="post_hr">
										<div class="col-md-6 post_option">
											<label class="box1">Work From Home
												<input type="radio" name="job_type" value="Work From Home" checked="checked">
												<span class="checkmark"></span>
											</label>
											<label class="box1">Full Time Jobs
												<input type="radio" name="job_type" value="Full Time Jobs" >
												<span class="checkmark"></span>
											</label>
											<label class="box1">Part Time Jobs
												<input type="radio" name="job_type" value="Part Time Jobs" >
												<span class="checkmark"></span>
											</label>
											
										</div>
										<div class="col-md-6 post_option" >
											<label class="box1">Work Abroad
												<input type="radio" name="job_type" name="Work Abroad" >
												<span class="checkmark"></span>
											</label>
											<label class="box1">Internships
												<input type="radio" name="job_type" name="Internships" >
												<span class="checkmark"></span>
											</label>
											
										</div>
									</div>
								</div>
								
								<div class="row post-box" >
									<div class="col-md-12">
										<h4 id="Location">Company Name</h4><hr class="post_hr">
										<select class="livesearch_location post_input" name="company_name" onchange="fetch_select_location(this.value);">
										<?php
											echo "<option value=''>Select Company</option>";
											$comsql = mysqli_query($db,"SELECT com_id,com_name FROM cj_company where user_id='".$_SESSION["user_id"]."'") or die(mysqli_error($db));
											while($comarow = mysqli_fetch_array($comsql))
											{
												echo "<option value='".$comarow['com_id']."'>".$comarow['com_name']."</option>";
											}
										?>
										</select>
									</div>
								</div>
									
								<div class="row post-box" >
									<div class="col-md-12" style="padding-left:px;">
										<h4>Locality</h4><hr class="post_hr">
										<div class="col-md-6 post-padding">
											<label>Location</label>
											<select class="livesearch_location post_input" name="location" onchange="fetch_select_location(this.value);">
											<?php
												echo "<option value=''>Select location</option>";
												$locsql = mysqli_query($db,"SELECT l1 FROM cj_location GROUP BY l1") or die(mysqli_error($db));
												while($locarow = mysqli_fetch_array($locsql))
												{
													echo "<option value='".$locarow['l1']."'>".$locarow['l1']."</option>";
												}
											?>
											</select>
											<script>
											  $(".livesearch_location").chosen();
											</script>
										</div>
										<div class="col-md-6 post-padding">
											<label>Sub Location</label>
											<select class="1livesearch_sublocation 1post_input" name="sub_location" id="new_select_location" style="width:100%;padding:2px;">
												<option value=''>Select Sub location</option>
											</select>
											<script>
											  $(".livesearch_sublocation").chosen();
											</script>
										</div>
									</div>
								</div>

								
								
								<div class="row post-box" >
									<div class="col-md-12">
										<h4 id="Experiance">Experiance</h4><hr class="post_hr">
									</div>
									<div class="col-md-6 post_col6">
										<div>
											<label>Min</label>
											<select class="post_select" name="exp_min" onchange="fetch_select(this.value);">
												<option>Select Experience</option>
												<?php
												for($i=0; $i<20; $i++)
												{
													echo "<option value='$i'>".$i."</option>";
												}
												?>
											</select>
										</div>
									</div>
									<div class="col-md-6 post_col6">
										<div>
											<label>Max</label>
											<select class="post_select" name="exp_max" id="new_select">
												<option>Select Experience</option>
											</select>
										</div>
									</div>
								</div>
									
									
								<div class="row post-box" >
									<div class="col-md-12">
										<h4 id="Educatuion">Education</h4><hr class="post_hr">
										<div class="col-md-6 post_col6">
											<label class="box1">10th
												<input type="radio" name="education" value="10">
												<span class="checkmark"></span>
											</label>
										</div>
										<div class="col-md-6 post_col6">
											<label class="box1">12th
												<input type="radio" name="education" value="12">
												<span class="checkmark"></span>
											</label>
										</div>
										<div class="col-md-6 post_col6">
											<label class="box1">Graduation
												<input type="radio" name="education" value="Graduation" checked="checked">
												<span class="checkmark"></span>
											</label>
										</div>
										<div class="col-md-6 post_col6">
											<label class="box1">Post Graduation
												<input type="radio" name="education" value="Post Graduation">
												<span class="checkmark"></span>
											</label>
										</div>
									</div>
								</div>
									
								<div class="row post-box" >
									<div class="col-md-12 post_col12">
										<h4 id="Salary">Salary</h4><hr class="post_hr">
									</div>
									<div class="col-md-6 post_col6">
										<div>
											<label>Min</label>
											<select class="post_select" name="salary_min" onchange="fetch_select_salary(this.value);">
												<option>Select Salary</option>
												<?php
												$am = "000";
												for($s=8; $s<50; $s++)
												{
													echo "<option value='".$s.$am."'>".$s.$am."</option>";
												}
												?>
											</select>
										</div>
									</div>
									<div class="col-md-6 post_col6">
										<div>
											<label>Max</label>
											<select class="post_select" name="salary_max" id="new_select_salary">
												<option>Select Salary</option>
											</select>
										</div>
									</div>
								</div>
								
								<div class="row post-box">
									<div class="col-md-12">
										<h4>Work Shifts</h4><hr class="post_hr">
										<div class="col-md-6 post_col6">
											<label class="box1">Morning
												<input type="radio" name="work_shifts" value="Morning" checked="checked">
												<span class="checkmark"></span>
											</label>
											<label class="box1">Noon
												<input type="radio" name="work_shifts" value="Noon">
												<span class="checkmark"></span>
											</label>
											
										</div>
										<div class="col-md-6 post_col6">
											<label class="box1">Evening
												<input type="radio" name="work_shifts" value="Evening">
												<span class="checkmark"></span>
											</label>
											<label class="box1">Night
												<input type="radio" name="work_shifts" value="Night">
												<span class="checkmark"></span>
											</label>
										</div>
									</div>
								</div>
											
								<div class="row post-box" >
									<div class="col-md-12">
										<h4 id="Gender">Gender</h4><hr class="post_hr">
										<div class="col-md-6 post_col6">
											<label class="box1">Female
												<input type="radio" name="gender" value="Female">
												<span class="checkmark"></span>
											</label>
											
										</div>
										<div class="col-md-6 post_col6">
											<label class="box1">male
												<input type="radio" name="gender" value="Male" checked="checked">
												<span class="checkmark"></span>
											</label>
										</div>
									</div>
								</div>
											
								<div class="row post-box" >
									<div class="col-md-12">
										<h4 id="Age">Age</h4><hr class="post_hr">
									</div>
									<div class="col-md-6 post_col6">
										<div>
											<label>Min</label>
											<select class="post_select" name="age_min" onchange="fetch_select_age(this.value);">
												<option>Select Age</option>
												<?php
												for($i=18; $i<=40; $i++)
												{
													echo "<option value='$i'>".$i."</option>";
												}
												?>
											</select>
										</div>
									</div>
									<div class="col-md-6 post_col6">
										<div>
											<label>Max</label>
											<select class="post_select" name="age_max" id="new_select_age">
												<option>Select Age</option>
											</select>
										</div>
									</div>
								</div>
								<div class="row post-box" style >
									<div class="col-md-12">
										
										<form>
											<div class="form-group">
											  <h4 id="Location">Job Description</h4><hr class="post_hr">
											  <textarea class="form-control" name="job_desc" rows="5" id="comment" placeholder="write something...."></textarea>
											</div>
										 </form>
									</div>
								</div>
													
								<div class="row post-box" >
									<div class="col-md-12 post_detaile">
									  <h4>Recruiter Detaile</h4><hr class="post_hr">
										<div class="col-md-12 post-padding">
											<div class="col-md-6 post-padding">
												<input type="email" name="remail" placeholder="Enter Your Email Id" value="<?=$profilerow["email"]?>" class="post_input">
											</div>
											<div class="col-md-6 post-padding">
												<input type="text" name="rcontact" placeholder="Enter Your mobile number" value="<?=$profilerow["contact"]?>" class="post_input" pattern="[6789][0-9]{9}">
											</div>
										</div>
									</div>
								</div>
								<div class="row post-box" >
									<div class="col-md-12 post_detaile">
										<div id="server-post-view"></div>
									</div>
								</div>
								<div class="row ">
									<div class="col-md-12">
									  <div class="btn-group btn-group-justified">
										<div class="btn-group">
										  <button type="submit" class="btn btn-danger">Reset All</button>
										</div>
										<div class="btn-group">
										  <input type="hidden" name="postjob" class="btn btn-info" value="Post">
										  <button type="submit" name="postjob" class="btn btn-info">Post</button>
										</div>
									  </div>
									</div>
								</div>
							</div>
				</div>
				
			   </form>
			  </div>
			  
					 <div class="col-md-3 sticky">
						<div class=" post-secbox sticky">
							<h3 class="post-secbox_heading">Payment</h3>
							<p>5 free localities&nbsp;<span class="post_para">&nbsp;<i class="fas fa-rupee-sign"></i> 0</span></p>
							<hr class="postsec_hr">
							<p>Total payment&nbsp;<span class="post_para">&nbsp;<i class="fas fa-rupee-sign"></i> 0</span></p>
							<a href="#" class="btn btn-warning btn-block" >Post Job</a>
						</div>
					 </div>
			</div>
	</div>
	<!--script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.2/jquery.min.js"></script>
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.2/js/bootstrap.min.js"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-select/1.10.0/js/bootstrap-select.min.js"></script-->
	<!--Footer-->
	<?php include"footer.php"; ?>
	<!--Footer-->
	
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
	function fetch_select(val)
	{
		$.ajax({
			type: 'post',
			url: 'employer-fetch-experience.php',
			data: {get_option:val},
			success: function (response) {
				document.getElementById("new_select").innerHTML=response; 
			}
		});
	}
	function fetch_select_salary(val)
	{
		$.ajax({
			type: 'post',
			url: 'employer-fetch-experience.php',
			data: {get_salary:val},
			success: function (response) {
				document.getElementById("new_select_salary").innerHTML=response; 
			}
		});
	}
	function fetch_select_age(val)
	{
		$.ajax({
			type: 'post',
			url: 'employer-fetch-experience.php',
			data: {get_age:val},
			success: function (response) {
				document.getElementById("new_select_age").innerHTML=response; 
			}
		});
	}
	function fetch_select_location(val)
	{
		$.ajax({
			type: 'post',
			url: 'employer-fetch-experience.php',
			data: {get_location:val},
			success: function (response) {
				document.getElementById("new_select_location").innerHTML=response; 
			}
		});
	}
	function fetch_select_job(val)
	{
		$.ajax({
			type: 'post',
			url: 'employer-fetch-experience.php',
			data: {get_job:val},
			success: function (response) {
				document.getElementById("new_select_job").innerHTML=response; 
			}
		});
	}
	
	
	function myFunction() {//Live search in job
	  var input, filter, table, tr, td, i;
	  input = document.getElementById("myInput");
	  filter = input.value.toUpperCase();
	  table = document.getElementById("myTable");
	  tr = table.getElementsByTagName("tr");
	  for (i = 0; i < tr.length; i++) {
		td = tr[i].getElementsByTagName("td")[0];
		if (td) {
		  if (td.innerHTML.toUpperCase().indexOf(filter) > -1) {
			tr[i].style.display = "";
		  } else {
			tr[i].style.display = "none";
		  }
		}       
	  }
	}	
	
	$("#job_post").submit(function(event){
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
			$("#server-post-view").html(response);
		});
	});
	
	</script>
	</body>
</html>
