<?php
	include"php/main.php";
?>
<!DOCTYPE html>
<html>
	
	<head>
		<meta charset="utf-8">
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<link rel="stylesheet" href="css/w3.css"><link rel="stylesheet" href="socicon/social_media.css">
		<!-- Latest compiled and minified CSS -->
		<link rel="stylesheet" href="css/bootstrap.min.css">
		<!-- jQuery library -->
		<script src="js/3.2.1-jquery.min.js"></script>
		<!-- Latest compiled JavaScript -->
		<script src="js/3.3.7-js-bootstrap.min.js"></script>
		<link rel="stylesheet" type="text/css" href="seejob.css">
		<script defer src="js/fontawesome.com.js"></script>

	<style>
			
		</style>
	</head>
			
<body class="emap_body1">
	<div class="container-fluid emap_container">
	<!-- Header Menu Start-->
	<?php include"employer-header.php"?>
	<!-- Header Menu End -->
		
		<div class="container applysearch-relative">
			<div class="row applysearch">
				<div class="col-md-12">
					<div class="row aplyinputsearch1 ">
					<form method="post" action="#">
					  <div class="col-md-2 emap_skill">
						<div class="skill_row">
							<input class="w3-input w3-border w3-hover-Pale-Blue aplyinputsearch" placeholder="Skill Designations Companies"  type="text" name="skill">
						</div>
					  </div>
					  <div class="col-md-2 emap_location">
						<div class="sub_row">
						  <input class="w3-input w3-border w3-hover-Pale-Blue  aplyinputsearch"  placeholder="Location"  type="text" name="location">
						</div>
					  </div>
					  <div class="col-md-2 emap_location">
						<div class="sub_row">
						  <input class="w3-input w3-border w3-hover-Pale-Blue aplyinputsearch"  placeholder="Sub Location"  type="text" name="sub_location">
						</div>
					  </div>

					  <div class="col-md-2 emap_location">
						<div class="Exp_row" >
						  <input class="w3-input w3-border w3-hover-Pale-Blue aplyinputsearch"  placeholder="Experience"  type="text" name="experience">
						</div>
					  </div>
					  <div class="col-md-2 emap_location">
						<div class="Salary">
						  <input class="w3-input w3-border w3-hover-Pale-Blue aplyinputsearch"  placeholder="Salary"  type="text" name="salary">
						</div>
					  </div>
					  <div >
						<div class="col-md-2 emap_location">
						  <input type="submit" name="search-data" id="search-data" class="btn btn-info emap_search" value="Search"></button>
						</div>
					  </div>
					</form>
					</div>
				</div>
			</div>
		</div>
		
		<div class="container emplyer_align">
			<div class="row" >
				<div class="col-md-3 emap_col3 sticky" style="top:80px;">
					<div class="text-center emap_col3_div">
						<h4 class="apply-detaile">
							Get detaile of every candidate
						</h4>
						<div class="buy-box">
							<div class="apply-buy">
								<p><span class="emap_para">&nbsp;60 Candidate Profile,</span><span>15 days</span></p>
								<span>
									<a href="buynowpage.html" class="btn btn-success btn-block employe_btn" role="button" ><i class="fas fa-rupee-sign"></i>499 / Buy Now</a>
								</span>
							</div>
							<div class="apply-buy">
								<p><span class="emap_p">50% discount</span><span class="emap_p1">&nbsp;200 Candidate Profile,</span><span class="emap_p2">30 days</span></p>
								<span>
									<a href="buynowpage.html" class="btn btn-success btn-block employe_btn" role="button" ><i class="fas fa-rupee-sign"></i>750 / Buy Now</a>
								</span>
							</div>
							<div class="apply-buy">
								<p><span class="emap_buy_p"><a href="#" class="emap_discount">60% discount</a></span><span class="emap_p1">&nbsp;500 Candidate Profile,</span><span class="emap_p2">60 days</span></p>
								<span>
									<a href="buynowpage.html" class="btn btn-success btn-block employe_btn" role="button" ><i class="fas fa-rupee-sign"></i>750 / Buy Now</a>
								</span>
							</div>
						</div>
					</div>
				</div>
				<div class="col-md-9">
				<?php
				@$skill =$_POST['skill'];
				@$location =$_POST['location'];
				@$sub_location =$_POST['sub-location'];
				@$experience =$_POST['experience'];
				@$salary =$_POST['salary'];

				$query = "select * from cj_user 
				inner join cj_apply_job ON cj_user.id=cj_apply_job.jobseeker_id where cj_apply_job.flag='1' ";
				if(isset($_REQUEST['$skill']))
				{
					$query .="OR designation='".$skill."'";
				}
				if(isset($_REQUEST['$location']))
				{
					$query .="OR location='".$location."'";
				}
				if(isset($_REQUEST['$experience']))
				{
					$query .="OR experience='".$experience."'";
				}
				if(isset($_REQUEST['$salary']))
				{
					$query .="OR anual_salary='".$salary."'";
				}
				if(@$_REQUEST["id"]!='')
				{
					$query .=" And cj_apply_job.jobseeker_id = '".@$_REQUEST["id"]."'";
				}
				if(@$_REQUEST["can_status_search"]!='')
				{
					$query .=" And cj_apply_job.status='".@$_REQUEST["can_status_search"]."'";
				}
				if(isset($_REQUEST["fcan"]))
				{
					$query .=" And cj_apply_job.name Like '%".@$_REQUEST["fcan"]."%'";
				}

				$can_sql = mysqli_query($db,$query);
				while($get_can = mysqli_fetch_array($can_sql))
				{

				?>
					<div class="col-md-12 employeeapply-box">
						<div class="col-md-8 employeeapply-eight">
							<div class="col-md-1 employe-icon">
								<span>
									<i class="fas fa-user-circle fa-3x img-circle" ></i>
								</span>
								<label class="employe-checkbox class=checked">
								  <input type="checkbox">
								  <span class="checkmark"></span>
								</label>
								
							</div>
							
							<div class="col-md-11">
								<div class="col-md-12 employeeapply-insidebox">
									<p><?=$get_can['name']?><br>
									<?="shift:-".$get_can['a_work_shift'].','.$get_can['a_job_type']?><br><?=$get_can['specialization']?></p>
									<div class="col-md-6 emap_box">
										<span><span><i class="fas fa-graduation-cap"></i></span>&nbsp;<?=$get_can['course']?></span><br>
										<span><span><i class="fas fa-book"></i></span>&nbsp;<?=$get_can['education']?></span><br>
										<span><span><i class="fas fa-briefcase"></i></span>&nbsp;<?=$get_can['designation']?></span><br>
										<span><i class="far fa-building"></i></span>&nbsp;<?=$get_can['a_job_cat']?></span>
									</div>
									<div class="col-md-6">
										<span><i class="fas fa-flask"></i></span>&nbsp;<?=$get_can['experience']?></span><br>
										<span><i class="fas fa-rupee-sign"></i></span>&nbsp;<?=$get_can['anual_salary']?></span><br>
										<span><i class="far fa-id-badge"></i></span>&nbsp;<?=$get_can['location']?></span><br>
									</div>
									<div class="col-md-6">
									</div>
								</div>
							</div>
						</div>
					
						<div class="col-md-4 employeeapply-verified">
							<div class="emap_verified">
								<span>Shortlisted by 8 Recruiters recently <br>
									Contact by 0 recriuter rently<br>
									<span>Last Activity yesterday</span>
								</span>
								<div>
									<div class="btn-group btn-group-justified" role="group" aria-label="...">
									  <div class="btn-group " role="group">
										<!-- <button type="button" class="btn btn-default btn-xs"><i class="fa fa-check-circle emap_fa"></i> Email</button> -->
										<a href="mailto:<?=$get_can['email']?>" class="btn btn-default btn-xs"><i class="fa fa-check-circle emap_fa"></i>Mail</a>
									  </div>
									  <div class="btn-group" role="group">
										<a href="tel:<?=$get_can['contact']?>" class="btn btn-default btn-xs"><i class="fa fa-check-circle emap_fa"></i>Contact</a>
									  </div>
									  <div class="btn-group" role="group">
										<button type="button" class="btn btn-default btn-xs"><i class="fa fa-ban emap_SMS"></i> SMS</button>
									  </div>
									</div>
									<div class="empap_btn">
										<button type="button" class="btn btn-default btn-block" data-toggle="modal" data-target="#myModal<?=$get_can['id']?>"><i class="fa fa-download emap_fa"></i> Download Resume</button>
									</div>
										<!-- <div class="empap_btn"> -->
										<!-- <button type="button" class="btn btn-default btn-block"><i class="fa fa-download emap_fa"></i> Download Resume</button> -->
									<!-- </div> -->
								</div>
							</div>
						</div>

						<!-- Resume Modal -->
						<div id="myModal<?=$get_can['id']?>" class="modal fade" role="dialog">
						  <div class="modal-dialog modal-lg">

							<!-- Modal content-->
							<div class="modal-content" style="padding:0px;">
							  <div class="modal-header" style="padding:2px;">
								<button type="button" class="close" data-dismiss="modal">&times;</button>
							  </div>
							  <div class="modal-body" style="padding:0px;">
								<div class="container-fluid">
									<div class="row">
										<div class="col-md-3 resume-3">
											<div style="margin-left:15px;">
												<h2><?=$get_can['name']?></h2>
												<h4><?=$get_can['designation']?></h4>
												<h3 class="resume-heading">Resume Headline</h3>
												<p><?=$get_can['resume_headline']?></p>
													<p><b>Address</b></p>
													<p><?=$get_can['address']?></p>
													
													<p><b>Phone</b></p>
													<p><?=$get_can['contact'].','.$get_can['alter_contact']?></p>
													<p><b>E-mail</b></p>
													<p><?=$get_can['email']?></p>
													<p><b>Linkdin</b></p>
													<p><?=$get_can['linkedin']?></p>

													<p><b>Facebook</b></p>
													<p><?=$get_can['facebook']?></p>
													<h3 class="resume-heading">Skill</h3>
													<p><?=$get_can['specialization']?></p>
													<p><?=$get_can['course']?></p>
													<p><?=$get_can['linkedin']?></p>
													<p><?=$get_can['linkedin']?></p>
													
													<h3 class="resume-heading">Software</h3>
													<p><?=$get_can['course']?></p>
													
													<h3 class="resume-heading">Language</h3>
													<p><?=$get_can['course']?></p>
													
											</div>
										</div>
										<div class="col-md-9 resume-9">
												<div class="col-md-12">
													<p>In order for a resume to highlight your educational background or stress your skills/qualifications and achievements as well resume to highlight your educational background or stress your skills/qualifications and achievements as wel as duties and responsibilities. For more information,In order for a resume to make a positive impression, you must develop a theme. Do you want to show your extensive work history? Do you want to highlight your educat For more information,</p>
													<hr class="CV-hr">
													<h2 class="resume-h">Experiance</h2>
													<hr class="CV-hr">
												
													<div class="row">
														<div class="col-md-12"style="margin-top:12px">
															<div class="col-md-2" style="padding:0px;">
																<h4 class="resume-heding-3"><?=$get_can['experience']?> -</h4>
																<p>Present</p>
															</div>
															<div class="col-md-10">
																<h3 class="resume-heding-3"><?=$get_can['resume_headline']?></h3>
																<p><?=$get_can['role']?></p>
																<ul style="padding-left:13px;">
																	<li><?=$get_can['description']?>,</li>
																	<li><?=$get_can['description']?>,</li>
																	<li><?=$get_can['description']?>,</li>
																	<li><?=$get_can['description']?>,</li>															
																</ul>
															</div>
														</div>
													</div>
													<div class="row" style="margin-top:12px">
														<div class="col-md-12">
															<div class="col-md-2" style="padding:0px;">
																<h4 class="resume-heding-3"><?=$get_can['experience']?> -</h4>
																<p>Present</p>
															</div>
															<div class="col-md-10">
																<h3 class="resume-heding-3"><?=$get_can['resume_headline']?></h3>
																<p><?=$get_can['role']?></p>
																<ul style="padding-left:13px;">
																	<li><?=$get_can['description']?>,</li>
																	<li><?=$get_can['description']?>,</li>
																	<li><?=$get_can['description']?>,</li>
																	<li><?=$get_can['description']?>,</li>
																	
																</ul>
															</div>
														</div>
													</div>
													<hr class="CV-hr">
													<h2 class="resume-h">Education</h2>
													<hr class="CV-hr">
													<div class="row" style="margin-top:12px">
														<div class="col-md-12">
															<div class="col-md-2" style="padding:0px;">
																<h4 class="resume-heding-3">Session -</h4>
																<p>2006-2012 - </p>
															</div>
															<div class="col-md-10">
																<h3 class="resume-heding-3"><?=$get_can['education']?></h3>
																<ul style="padding-left:13px;">
																	<li><?=$get_can['course']?></li>
																	<li><?=$get_can['description']?>,</li>
																	<li><?=$get_can['description']?>,</li>
																</ul>
															</div>
														</div>
													</div>
													<hr class="CV-hr">
													<h2 class="resume-h">Certification</h2>
													<hr class="CV-hr">
													<div class="row" style="margin-top:12px">
														<div class="col-md-12">
															<div class="col-md-2" style="padding:0px;">
																<h4 class="resume-heding-3">Duration -</h4>
																<p>2006-2012 - </p>
															</div>
															<div class="col-md-10">
																<p><?=$get_can['specialization']?></p>
																<p><?=$get_can['description']?></p>
															</div>
														</div>
													</div>
													<hr class="CV-hr">
													<h2 class="resume-h">Interest</h2>
													<hr class="CV-hr">
													<div class="row" style="margin-top:12px">
														<div class="col-md-12">
															<div class="col-md-2" style="padding:0px;">
															</div>
															<div class="col-md-10">
																<p><?=$get_can['a_job_cat']?></p>
																<p><?=$get_can['description']?></p>
															</div>
														</div>
													</div>
												</div>
												<center>
													<div class="btn group resume-btn">
														<a href="open-resume.php?data=<?=$get_can['user_id']?>"><button class="btn-print btn-print1 text-center"><i class="fas fa-print"></i>&nbsp;Print</button></a>
														<button class="btn-download btn-download1 text-center"><i class="fas fa-download"></i>&nbsp;Download</button>
														<button class="btn-close btn-close1 w3-dark-grey text-center" data-dismiss="modal"><i class="fas fa-times"></i>&nbsp;Close</button>
													</div>
												</center>
										</div>
									</div>
								</div>
								</div>
							</div>

						  </div>
						</div>		
						<!---Resume Model End--->
					</div>
				<?php } ?>
				</div>
			</div>
		</div>
		<br><br><br><br>
	</div>
	<!--Footer-->
	<?php include"footer.php"; ?>
	<!--Footer-->
</body>
</html>				