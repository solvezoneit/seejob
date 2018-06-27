<?php
	session_start();
	include"cjobadmin/api/db_config.php";
	if(isset($_POST["limit"],$_POST["start"]))
	{
		$fquery = "select * from cj_job_post WHERE status='1' ";
		if(!empty($_POST["job_cat"]))
		{
			$fquery .= " && job_cat = '".$_POST["job_cat"]."' ";
		}
		if(!empty($_POST["company_name"]) && count($_REQUEST['company_name']))
		{
			$fquery .= " && company_name in ({$_POST["company_name"]}) ";
		}
		if(!empty($_POST["location"]) && count($_REQUEST['location']))
		{
			$fquery .= " && location in ({$_POST["location"]}) ";
		}
		if(!empty($_POST["job_type"]) && count($_REQUEST['job_type']))
		{
			$fquery .= " && job_type in ({$_POST["job_type"]}) ";
		}
		if(!empty($_POST["work_shifts"]) && count($_REQUEST['work_shifts']))
		{
			$fquery .= " && work_shifts in ({$_POST["work_shifts"]}) ";
		}
		if(!empty($_POST["salary"]))
		{
			$salarys = explode('-',$_POST['salary']);
			$fquery .= " && salary_min >= '".$salarys[0]."' && salary_max <= '".$salarys[1]."' ";
		}
		if(!empty($_POST["odr"]))
		{
			if($_POST["odr"]=='hl')
			{
				$fquery .= "ORDER BY salary_max DESC ";
			}else{
				$fquery .= "ORDER BY salary_min ";
			}
		}
		$fquery .= "LIMIT ".$_POST["start"].", ".$_POST["limit"]." ";
		$equery = mysqli_query($db,$fquery);
		while($srow = mysqli_fetch_array($equery))
		{
			?>
			<div class="apply_box row" style="margin-bottom:5px;">
				<div class="col-md-12 apply_content1">
					<h5 class="apjob_heading1"><!--Hiring for-->
						<a href="<?=$url?>/job-info-<?=$srow["url"]?>" style="text-decoration:none;" target="_blank">
							<?=$srow["job_title"].'/'.$srow["job"]?> ( <?=$srow["job_cat"]?> ),<?=$srow["location"].', '.$srow["sub_location"]?>
						</a>
					</h5>
				</div>
				
				<div class="col-md-12">
					<div class="col-md-9 apjob_container">
						<div class="col-md-12">
							<div class="col-md-6 apjob_incontainer">
								<div class="col-md-12 apjob_subcontainer">
									<div class="col-md-6 text-center apjob_subincontainer">
										<span><i class="fas fa-flask"></i></span><br>
										<span>Experiance</span><br>
										<span><?=$srow["exp_min"].'-'.$srow["exp_max"]?>- years</span>
									</div>
									
									<div class="col-md-6 text-center apjob_subincontainer">
										<span><i class="fas fa-rupee-sign"></i></span><br>
										<span>Monthly</span><br>
										<span><?=$srow["salary_min"].'-'.$srow["salary_max"]?></span>
									</div>
								</div>
							</div>
							<div class="col-md-6 apjob_sec_container">
								<div class="col-md-12 apjob_sec_incontainer">
									<div class="col-md-6 text-center apjob_subincontainer">
										<span><i class="fa fa-clock"></i></span><br>
										<span >Shift Timing</span><br>
										<span><?=$srow["work_shifts"]?></span>
									</div>
									
									<div class="col-md-6 text-center">
										<span><i class="far fa-building"></i></span><br>
										<span >Company</span><br>
										<span><?=$srow["company_name"]?></span>
									</div>
								</div>
							</div>
						</div>
						<div class="row">
							<div class="col-md-12 apjob_bottom">
								<div class="col-md-1">
									<span><i class="fas fa-snowflake"></i></span>
								</div>
								<div class="col-md-11">
									<span>Keys kills-</span>
									<span><?=$srow["job_desc"]?></span>
								</div>	
							</div>
							<div class="col-md-12">
								<div class="col-md-1 apjob_inbottom">
									<i class="fa fa-map-marker"></i>
								</div>
								<div class="col-md-11 apjob_inbottom">
									<span> <?=$srow["location"].', '.$srow["sub_location"]?></span>
								</div>	
							</div>
						</div>
					</div>
					<div class="col-md-3">
						<div class="apply_box2- row" style="border-top:0px solid #004080;color:;">
							<div class="row apjob_subbottom">
								<div class="col-md-12">
									<span>Posted by Individual<br>
										<?=date("d M Y, h:i A",strtotime($srow["add_date"]))?>
									</span>
								</div>
								
								<div class="col-md-12 apjob_subinbottom">
									<i class="fa fa-check-circle"></i>
									<span>Phone Verified
									</span>
								</div>
								
								<div class="col-md-12">
									<span>
									<?php
									if(@$_SESSION['role']=='Job Seeker')
									{
										$aply_check_count = mysqli_num_rows(mysqli_query($db,"SELECT * FROM cj_apply_job WHERE job_post_id='".$srow["job_post_id"]."' && jobseeker_id='".$_SESSION["id"]."'" ));
										if($aply_check_count>0)
										{
											?><span style="background-color:green;color:#fff;border-radius:15px;border:1px solid green;padding:5px;"><i class="fa fa-check-circle"></i> Applied</span><?php
										}else{
											?>
											<div id="direct_apply_result<?=$srow["job_post_id"]?>"></div>
											<form id="direct_apply<?=$srow["job_post_id"]?>" action="<?=$url?>/apply-job.php" method="POST">
												<input type="hidden" name="user_id" value='<?=$_SESSION["email"]?>'>
												<input type="hidden" name="pwd" value='<?=$_SESSION["password"]?>'>
												<input type="hidden" name="job_post_id" value="<?=$srow["job_post_id"]?>" >
												<input type="hidden" class="btn btn-primary" name="jobseekerdirect" value="Login"/>
												<button type="submit" class="1btn btn-primary btn-sm btn-block">Apply</button>
											<form>
											<?php
										}
									}else{
										?><button onclick="document.getElementById('<?=$srow["job_post_id"]?>').style.display='block'"type="button" class="1btn btn-primary btn-sm btn-block">Apply</button><?php
									}
									?>
									</span>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
			<div id="<?=$srow["job_post_id"]?>" class="w3-modal w3-animate-opacity" >
				<div class="w3-modal-content w3-card-4" style="border:2px solid #2e6da4;">
				  <header class="w3-container"> 
					<span onclick="document.getElementById('<?=$srow["job_post_id"]?>').style.display='none'" class="w3-button w3-large w3-display-topright">&times;</span>
					<h4 class="apply-heading">Apply For <?=$srow["job"]?> Job </h4><hr>
				  </header>
				  <div class="w3-container">
					<form id="job_apply<?=$srow["job_post_id"]?>" action="<?=$url?>/apply-job.php" method="POST">
						<div class="resume-form">
							<div class="modal-header">
								<div class="jobseeker_page">
									<!--h3 class="jobseeker_heading">Job seeker </h3-->
									<div class="scrollbar1" id="style-7" >
									
										<!-- Job categories -->
										<div class="row" style="display:none;">
											<div class="col-md-12">
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
											</div>
										</div>
										<!-- Job categories end-->
									
										<div class="row">
											<div class="col-md-6">
											  <input type="hidden" name="job_post_id" value="<?=$srow["job_post_id"]?>" >
											  <input type="text" class="apply-input" id="fname" name="name" placeholder="Enter Name" value="" required >
											</div>
											<div class="col-md-6">
											  <input type="text" class="apply-input" id="lname" name="contact" placeholder="Enter Number" pattern="[6789][0-9]{9}" value="" required >
											</div>
											<div class="col-md-6">
											  <input type="email" class="apply-input" id="fname" name="email" placeholder="Enter Email" value="" required >
											</div>
											<div class="col-md-6">
											  <input type="text" class="apply-input" id="lname" name="location" placeholder="Enter Location" value="" required >
											</div>
										</div>
										<div class="row" style="display:none;">
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

										<div class="row jobseeker_knowladge" style="display:none;">
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

										<div class="row" style="display:none;">
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

										<div class="row jobseeker_salary" style="display:none;">
											<div class="col-md-12 jobseeker_inside_salary">
												<h4> What is your monthly salary(in rupees) ?</h4>
												<div class="col-md-6 jobseeker_inside_salarybox">
													<input type="text" name="selery" placeholder="Enter Your selery in rupess" class="jobseeker_input">
												</div>
											</div>
										</div>
									

										<div class="row " style="display:none;">
											<div class="col-md-12 jobseeker_knowladge_box1">
												<h4>Which companies have you worked for?</h4>
												<div class="col-md-6 jobseeker_inside_companies">
													<input type="text" name="selery" placeholder=" Enter Which companies have you worked for?" class="jobseeker_input" >
												</div>
											</div>
										</div>

										

										<div class="row jobseeker_salary"  style="display:none;">
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
										

										<div class="row" style="display:none;">
											<div class="col-md-12 jobseeker_knowladge_box1">
												<h4>Designation</h4>	
												<div class="col-md-6 jobseeker_inside_salarybox" >
													<input type="text" name="selery" placeholder="Designation" class="jobseeker_input" >
												</div>
											</div>
										</div>
										
										<div class="row jobseeker_salary" style="display:none;">
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
									<div id="job_apply_result<?=$srow["job_post_id"]?>">
									</div>
									<div class="row">
										<div class="col-md-12">
											<div class="col-md-6" style="padding:0px;">
												<a href="#" onclick="document.getElementById('<?=$srow["job_post_id"]?>').style.display='none'" style="text-decoration:none;color:#fff;" class="btn-print btn-print1 btn-block text-center">Skip</a>
											</div>
											<div class="col-md-6" style="padding:0px;">
												<input type="hidden" name="apply-job">
												<input type="submit" class="btn-download btn-download1 text-center btn-block" value="Apply">
											</div>
										</div>
									</div>
								</div>
							</div>
						</div>
					</form>
				  </div>
				</div>
			</div>
			<!-- login -->
			<div class="modal fade" id="loginaply<?=$srow["job_post_id"]?>" role="dialog">
				<div class="modal-dialog">
				
				<!-- login content-->
				<div class="modal-content login_margin">
					<div class="modal-header" style="padding:0px;">
					  <button type="button" class="close index_close" data-dismiss="modal">&times;</button>
					  <h3 class="modal-title login_hedding">Job Seeker Login Here</h3>
					</div>
					<div class="modal-body">
					<form class="form-horizontal" id="my_form_jobseeker_Login" action="<?=$url?>/apply-job.php" Method="POST">
						<div class="form-group">
						  <label class="control-label col-sm-3" for="email" id="login_input">Email:</label>
						  <div class="col-sm-9">
							<input type="email" class="form-control" id="email" placeholder="Enter email" name="userid">
						  </div>
						</div>
						<div class="form-group">
						  <label class="control-label col-sm-3" for="pwd" id="login_input"> Password:</label>
						  <div class="col-sm-9">          
							<input type="password" class="form-control" id="pwd" placeholder="Enter password" name="pwd">
						  </div>
						</div>
						
						<div class="form-group">        
						  <div class="col-sm-12 text-right">
						  <p class="login_p"><a href="#Forgot" data-toggle="modal" data-target="#Forgot">Forgot password?</a></p>
						  </div>
						</div>
						<div id="server-jobseeker-login"></div>
						<div class="form-group login_btn_frm text-center">        
							<div class="form-group login_btn_frm text-center">        
							  <div class="col-sm-offset-2 col-sm-8 ">
								<input type="hidden" name="job_post_id" value="<?=$srow["job_post_id"]?>" >
								<input type="hidden" class="btn btn-primary" name="jobseeker" value="Login"/>
								<input type="submit" class="btn btn-primary" name="login" value="Login"/>
							  </div>
							</div>
							<div class="hr-theme-slash-2">
							  <div class="hr-line"></div>
							  <div class="hr-icon"><i class="fa fa-lock" aria-hidden="true"></i></div>
							  <div class="hr-line"></div>
							</div>
						</div>
					</form>
				  </div>
				  
				</div>
			  </div>
			</div>
			<!-- login_End -->
			
			<div id="wait" style="display:none;padding:2px;"><center><img src="images/load2.gif" style="width:70px;position: absolute;top:0;bottom: 0;left: 0;right: 0;margin: auto;"></center></div>

			<script> 
			$(document).ready(function(){
				$("#flip<?=$srow['job_post_id']?>").click(function(){
					$("#panel<?=$srow['job_post_id']?>").slideToggle("slow");
				});
			});
			</script>
			<script>
			$("#job_apply<?=$srow["job_post_id"]?>").submit(function(event){
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
					$("#job_apply_result<?=$srow["job_post_id"]?>").html(response);
				});
			});
			$("#direct_apply<?=$srow["job_post_id"]?>").submit(function(event){
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
					$("#direct_apply_result<?=$srow["job_post_id"]?>").html(response);
				});
			});
			</script>
			<script>
			// wait loader script
			$(document).ready(function(){
			});
			</script>
			<?php
		}
	}
	if(isset($_POST['get_option']))
	{
		// echo "<option>Select</option>";
		$k = $_POST['get_option'];
		for($j=$k+1; $j<=20; $j++)
		{
			?><option <?=((@$_POST['exp_max']==$j)? ' selected':'')?> value='<?=$j;?>'><?=$j;?></option><?php
		}
		exit;
	}
	if(isset($_POST['get_salary']))
	{
		// echo "<option>Select</option>";
		$k = $_POST['get_salary']/1000;
		$am = "000";
		for($j=$k; $j<=99; $j++)
		{
			?><option <?=((@$_POST['salary_max']==$j.$am)? ' selected':'')?> value='<?=$j.$am?>'><?=$j.$am?></option><?php
		}
		exit;
	}
	if(isset($_POST['get_age']))
	{
		// echo "<option>Select</option>";
		$k = $_POST['get_age'];
		for($j=$k+1; $j<=40; $j++)
		{
			echo "<option value='".$j."'>".$j."</option>";
		}
		exit;
	}
	if(isset($_POST['get_location']))
	{
		echo "<option value=''>Select Sub location</option>";
		$locsql = mysqli_query($db,"SELECT sub_location FROM cj_job_post WHERE location='".$_POST['get_location']."' GROUP BY sub_location") or die(mysqli_error($db));
		while($locarow = mysqli_fetch_array($locsql))
		{
			echo "<option value='".$locarow['sub_location']."'>".$locarow['sub_location']."</option>";
		}
		exit;
	}
	if(isset($_POST['get_loc']))
	{
		echo "<option value=''>Select Sub location</option>";
		$locsql = mysqli_query($db,"SELECT l2 FROM cj_location WHERE l1='".$_POST['get_loc']."' GROUP BY l2") or die(mysqli_error($db));
		while($locarow = mysqli_fetch_array($locsql))
		{
			echo "<option value='".$locarow['l2']."'>".$locarow['l2']."</option>";
		}
		exit;
	}
	if(isset($_POST['get_job']))
	{
		echo "<option value=''>Select Job</option>";
		$locsql = mysqli_query($db,"SELECT job FROM cj_jobs WHERE job_cat='".$_POST['get_job']."' GROUP BY job") or die(mysqli_error($db));
		while($locarow = mysqli_fetch_array($locsql))
		{
			echo "<option value='".$locarow['job']."'>".$locarow['job']."</option>";
		}
		exit;
	}
		
?>
