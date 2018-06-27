<footer>
  <!-- login_emplogin-->
  <div class="modal fade" id="myModal_emologin" role="dialog">
    <div class="modal-dialog">
      <!-- login content-->
		<div class="modal-content login_margin">
			<div class="modal-header index_login_model">
			  <button type="button" class="close index_close" data-dismiss="modal">&times;</button>
			  <h3 class="modal-title login_hedding">Employer Login Here</h3>
			</div>
			<div class="modal-body index_model">
			 <form class="form-horizontal" id="my_form_employer_Login" action="<?=$url?>/php/user.php" method="POST">
				<div class="form-group">
				  <label class="control-label col-sm-3 login_input" for="email">Email:</label>
				  <div class="col-sm-9">
					<input type="email" class="form-control" id="email" placeholder="Enter email" name="userid" required="required">
				  </div>
				</div>
				<div class="form-group">
				  <label class="control-label col-sm-3 login_input" for="pwd"> Password:</label>
				  <div class="col-sm-9">          
					<input type="password" class="form-control" id="pwd" placeholder="Enter password" name="pwd" required="required">
				  </div>
				</div>
				
				<div class="form-group">        
				  <div class="col-sm-12 text-right">
				  <p class="login_p"><a href="#Forgot" data-toggle="modal" data-target="#Forgot">Forgot password?</a></p>
				  </div>
				</div>
				<div id="server-employer-login"></div>
				<div class="form-group login_btn_frm text-center">        
					<div class="form-group login_btn_frm text-center">        
					  <div class="col-sm-offset-2 col-sm-8 ">
						<input type="hidden" class="btn btn-primary" name="employer" value="Login"/>
						<input type="submit" class="btn btn-primary" name="login" value="Login"/>
						<p class="login_para">Not a member as yet?<span ><a href="employer-register.php">Register Now</a> </span></p>
					  </div>
					</div>
					<div class="hr-theme-slash-2">
					  <div class="hr-line"></div>
					  <div class="hr-icon"><i class="fa fa-lock" aria-hidden="true"></i></div>
					  <div class="hr-line"></div>
					</div>
					<div class="social_box">
						<h4 class="index_login_h4">Login</h4>
						<p>with your social media account</p>
					</div>
					<div class="form-group" id="login_icon" style="margin-bottom:0px; padding-bottom:0px;">       
						<div class="col-md-4 login_icon_fb">
							<div class="col-md-2 index_fb">
								<span><i class="fab fa-facebook-f fa-1x" aria-hidden="true"></i></span>
							</div>
							<div class="col-md-2">
								<p>Facebook</p>
							</div>
						</div>
						<div class="col-md-4 login_icon-linkedin">
							<div class="col-md-2 index_fb_likin">
								<span><i class="fab fa-linkedin-in fa-1x" aria-hidden="true"></i></span>
							</div>
							<div class="col-md-2">
								<p>Linkdin</p>
							</div>
						</div>
						<div class="col-md-4 login_icon_google">
							<div class="col-md-2 index_fb">
								<span><i class="fab fa-google-plus-g fa-1x" aria-hidden="true"></i></span>
							</div>
							<div class="col-md-2">
								<p>Google</p>
							</div>
						</div>
					</div>
				</div>
			 </form> 
			</div>
		</div>
	</div>
   </div>
    <!-- login_emplogin_End -->

  <!-- login -->
  <div class="modal fade" id="myModal" role="dialog">
    <div class="modal-dialog">
    
      <!-- login content-->
    <div class="modal-content login_margin">
        <div class="modal-header" style="padding:0px;">
          <button type="button" class="close index_close" data-dismiss="modal">&times;</button>
          <h3 class="modal-title login_hedding">Job Seeker Login Here</h3>
        </div>
		<div class="modal-body">
		<form class="form-horizontal" id="my_form_jobseeker_Login" action="<?=$url?>/php/user.php" Method="POST">
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
					<input type="hidden" class="btn btn-primary" name="jobseeker" value="Login"/>
					<input type="submit" class="btn btn-primary" name="login" value="Login"/>
				  <p class="login_para">Not a member as yet?<span ><a href="jobseeker-register.php">Register Now</a> </span></p>
				  </div>
				</div>
				<div class="hr-theme-slash-2">
				  <div class="hr-line"></div>
				  <div class="hr-icon"><i class="fa fa-lock" aria-hidden="true"></i></div>
				  <div class="hr-line"></div>
				</div>
				<div class="social_box">
					<h4>Login</h4>
					<p>with your social media account</p>
				</div>
				<div class="form-group" id="login_icon">        
					<div class="col-md-4 login_icon_fb">
						<div class="col-md-2">
							<span><i class="fab fa-facebook-f fa-1x" aria-hidden="true"></i></span>
						</div>
						<div class="col-md-2">
							<p>Facebook</p>
						</div>
					</div>
					<div class="col-md-4 login_icon-linkedin">
						<div class="col-md-2">
							<span><i class="fab fa-linkedin-in fa-1x" aria-hidden="true"></i></span>
						</div>
						<div class="col-md-2">
							<p>Linkdin</p>
						</div>
					</div>
					<div class="col-md-4 login_icon_google">
						<div class="col-md-2">
							<span><i class="fab fa-google-plus-g fa-1x" aria-hidden="true"></i></span>
						</div>
						<div class="col-md-2">
							<p>Google</p>
						</div>
					</div>
				</div>
			</div>
		</form>
      </div>
      
    </div>
  </div>
   </div>
  <!-- login_End -->
    <!-- Forgot -->
	<div class="modal fade" id="Forgot" role="dialog">
		<div class="modal-dialog modal-md">
		  <div class="modal-content login_margin">
			<div class="modal-header">
			  <button type="button" class="close" data-dismiss="modal">&times;</button>
			  <h4 class="modal-title forgot_heading">Forgot password</h4><br>
				<p class="forgot_para">Please enter account username or official (Registered) email address for password recovery.
				</p>
			</div>
			<div class="modal-body">
				<div class="row">
					<div class="col-md-6 text-center col-md-offset-3">
						<input type="email" class="form-control" id="email" placeholder="Enter email / User Name" name="email"><br>
						<button type="button" class="btn btn-primary"  data-toggle="modal" data-target="#OTP">Submit</button>
					</div>
				</div>
			</div>
		  </div>
		</div>
	</div>
	<!-- Forgot_End -->
	<!-- OTP -->
	<div class="modal fade" id="OTP" role="dialog">
		<div class="modal-dialog modal-sm">
		  <div class="modal-content login_margin">
			<div class="modal-header">
			  <button type="button" class="close" data-dismiss="modal">&times;</button>
			  <h4 class="modal-title forgot_heading">Enter OTP</h4><br>
			</div>
			<div class="modal-body">
				<div class="row">
					<div class="col-md-12 text-center">
						<input type="email" class="form-control" id="email" placeholder="Enter OTP" name="email"><br>
						<button type="button" class="btn btn-primary">Verify </button>
						<button type="button" class="btn btn-primary">Resend OTP</button>
					</div>
				</div>
			</div>
		  </div>
		</div>
	</div>
	<!-- OTP_End -->
	<!--Jobseeker -->
	<form id="my_form_cv_upload" action="<?=$url?>/php/cv_class.php" Method="POST" enctype="multipart/from-data">
	<div class="modal fade" id="Jobseeker" role="dialog">
		<div class="modal-dialog modal-lg">
		<!-- Jobseeker content-->
      
		   <div class="modal-content Jobseeker_margin">   
			<div class="modal-header">
				<div class="jobseeker_page">
				 <h3 class="jobseeker_heading">Jobseeker</h3>
				  <div class="scrollbar" id="style-7" >
					<div class="row">
						<div class="col-md-12 jobseeker_knowladge_box1">
							<div class="col-md-6 jobseeker_inside_salarybox" >
								<h4>Name</h4>	
								<input type="text" class="jobseeker_input" placeholder="Enter Name" name="name" required>
							</div>
							<div class="col-md-6 jobseeker_inside_salarybox" >
								<h4>Mobile Number</h4>	
								<input type="text" class="jobseeker_input" placeholder="Enter Mobile Number" name="contact" pattern="[6789][0-9]{9}" required>
							</div>
						</div>
					</div>
					<div class="row">
						<div class="col-md-12">
							<h4>My Resume</h4>
						</div>

						<div class="col-md-12 index_upload">
							<label for="imageUpload" class="btn btn-primary btn-block btn-outlined">Upload Resume</label>
							<input type="file" id="imageUpload" accept=".doc, .docx,.pdf" name="resume" class="jobseeker_display" required>
							<span class="Jobseeker_text">File should be doc, docx, pdf format and less than 500 KB</span>
						</div>
						
					</div>
					<br><br><br>
					<div class="row jobseeker_knowladge">
						<div class="col-md-12 jobseeker_knowladge_box">
							<h4 id="Gender">Do you have Basic knowledge of Microsoft Office?</h4>
							<div class="col-md-6 jobseeker_inside">
								<label class="box1">Yes
								  <input type="radio" name="msofc" checked value="1"> 
								  <span class="checkmark"></span>
								</label>
							</div>
							<div class="col-md-6 jobseeker_inside">
								<label class="box1">No
								  <input type="radio" name="msofc" value="0">
								  <span class="checkmark"></span>
								</label>
							</div>
						</div>
					</div>

					<div class="row">
						<div class="col-md-12 jobseeker_knowladge_box1">
							<h4> Which languages do you know?</h4>
						</div>
						<?php
						$sql_log = mysqli_query($db,"select * from cj_language where status='1'");
						while($get_loc = mysqli_fetch_array($sql_log))
						{
							?>
							<div class="col-md-3 jobseeker_inside1">
								<label class="box"><?=$get_loc['language']?>
									<input type="checkbox" name="language[]" value="<?=$get_loc['language']?>">
									<span class="checkmark"></span>
								</label>
							</div>
							<?php
						}
						?>
					</div>
					<div class="row jobseeker_salary">
						<div class="col-md-12 jobseeker_inside_salary">
							<h4> What is your monthly salary(in rupees) ?</h4>
							<div class="col-md-6 jobseeker_inside_salarybox">
								<input type="number" name="salary" placeholder="Enter Your selery in rupess" class="jobseeker_input" required>
							</div>
						</div>
					</div>
				

					<div class="row ">
						<div class="col-md-12 jobseeker_knowladge_box1">
							<h4>Which companies have you worked for?</h4>
							<div class="col-md-6 jobseeker_inside_companies">
								<input type="text" name="company" placeholder=" Enter Which companies have you worked for?" class="jobseeker_input" required>
							</div>
						</div>
					</div>

					

					<div class="row jobseeker_salary" >
						<div class="col-md-12 jobseeker_knowladge_box1">
							<h4> How many years of experience do you have in this role?</h4>
							<div class="col-md-6 jobseeker_inside_eperiance" >
								<select name="experience" class="form-control jobseeker_select" id="sel1">
								<?php
								for($i = 1; $i<11; $i++)
								{
									echo "<option value='".$i."'>".$i."</option>";
								}
								?>
							   </select>
							</div>
						</div>
					</div>
					

					<div class="row">
						<div class="col-md-12 jobseeker_knowladge_box1">
							<h4>Designation</h4>	
							<div class="col-md-6 jobseeker_inside_salarybox" >
								<input type="text" name="designation" placeholder="Designation" class="jobseeker_input" required>
							</div>
						</div>
					</div>

				

					<div class="row jobseeker_salary">
						<div class="col-md-12 jobseeker_knowladge_box1">
							<h4>Which board have you passed 1 to 10 classes?</h4>
							<div class="col-md-6 jobseeker_inside">
								<label class="box1">CBSE
								  <input type="radio" name="board" value="CBSE" checked="checked">
								  <span class="checkmark"></span>
								</label>
								<label class="box1">ICSE
								  <input type="radio" name="board" value="ICSE">
								  <span class="checkmark"></span>
								</label>
								<label class="box1">State boards
								  <input type="radio" name="board" value="State boards">
								  <span class="checkmark"></span>
								</label>
							</div>
							<div class="col-md-6 jobseeker_inside">
								<label class="box1">IB
								  <input type="radio" name="board" value="IB">
								  <span class="checkmark"></span>
								</label>
								<label class="box1">Other
								  <input type="radio" name="board" value="Other">
								  <span class="checkmark"></span>
								</label>
							</div>
						</div>
						<hr>
					</div>
					<div class="row">
						<div class="col-md-12 jobseeker_knowladge_box1">
							<div class="col-md-6 jobseeker_inside_salarybox" >
								<h4>Email</h4>	
								<input type="email" class="jobseeker_input" placeholder="Enter email" name="email" required>
							</div>
							<div class="col-md-6 jobseeker_inside_salarybox" >
								<h4>Password</h4>	
								<input type="password" class="jobseeker_input" placeholder="Enter password" name="pwd" required>
							</div>
						</div>
					</div>
						
				  </div>
					<div id="server-results5"></div>
					<div class="row">
						<div class="col-md-12">
							<div class="btn-group btn-group-justified">
								<div class="btn-group">
									<button class="btn btn-warning" data-dismiss="modal">Skip</button>
								</div>
								<div class="btn-group">
									<input type="hidden" class="btn btn-primary" name="cvuploadonhome" value="Apply">
									<input type="submit" class="btn btn-primary" name="cvuploadonhome" value="Apply">
								</div>
							</div>
						</div>
					</div>
					
				</div>
			</div>
		  </div>
		</div>
	</div>
	</form>
<!-- Jobseeker_End -->
</footer>
	<script>
		$("#my_form_employer_Login").submit(function(event){
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
				$("#server-employer-login").html(response);
			});
		});
		$("#my_form_jobseeker_Login").submit(function(event){
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
				$("#server-jobseeker-login").html(response);
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
		$("#my_form_cv_upload").submit(function(event){
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
				$("#server-results5").html(response);
			});
		});
		
	</script>
