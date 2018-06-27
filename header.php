	<?php
		@session_start();
		include"cjobadmin/api/db_config.php";

		$query = mysqli_query($db,"select contact, email from cj_contact");
		$data =$query->fetch_assoc();
		$contact =$data['contact'];
		$email =$data['email'];
		//$email1 =strtolower($email);
		
	?>

	<ul class="list-inline index_ul" style="background-color:black;">
		<li>
		 <a href="#" class="index-a">
			<span><i class="fas fa-phone-volume"></i>&nbsp;</span><?=$contact?>
		 </a>
		</li>
		<li>
			<a href="#" style="color: #bfbfbf;">
				<span><i class="fas fa-envelope"></i>&nbsp;</span><?=$email?>
			</a>
		</li>
		<!-- <li>
			<a href="#" class="index-a">
				<span><i class="fas fa-comments"></i>&nbsp; </span>Live Chat (10 am to 7 pm)
			</a>
		</li> -->
	</ul>
	<!-- main header -->
	<nav class="navbar navbar-default megamenu 1sticky" style="z-index:1; margin-bottom:0px;font-family: -webkit-pictograph;">
	  <div class="container<?php if(basename($_SERVER["SCRIPT_NAME"])=="index.php"){ echo '-fluid'; } ?>">
	      <!-- Brand and toggle get grouped for better mobile display -->
	      <div class="navbar-header">
	        <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
	          <span class="sr-only">Toggle navigation</span>
	          <span class="icon-bar"></span>
	          <span class="icon-bar"></span>
	          <span class="icon-bar"></span>
	        </button>
	        <a class="navbar-brand" href="<?=$url?>/index.php"><img src="<?=$url?>/image/seelogo.png" alt="logo" width="150"></a>
	      </div>

	      <!-- Collect the nav links, forms, and other content for toggling -->
	      <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
	        <ul class="nav navbar-nav">
	          <!--li><a href="<?=$url?>/jobs.php"><i class="fas fa-search font_color"></i> Jobs<span class="sr-only">(current)</span></a></li-->
	          <li class="dropdown megamenu-fw" style="display:none;">
	            <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false"><i class="far fa-file-alt"></i> Resume Writing<span class="caret"></span></a>
	            <ul class="dropdown-menu megamenu-content" role="menu">
	              	<li>
					    <div class="row">
					        <div class="col-sm-4">
					      		<h3 class="title">Featured Products</h3>
								
								<div data-ride="carousel" class="carousel slide" id="myCarousel">
	                              <div class="carousel-inner">
	                                <div class="item active left">
	                                    <a href="#"><img alt="product 1" class="img-responsive" src="http://placehold.it/350x200/3498db/f5f5f5/&amp;text=Featured+Product"></a>
	                                    <h4><small>Featured Product 1</small></h4>                                        
	                                    <button type="button" class="btn btn-default" href="#"><span class="glyphicon glyphicon-heart"></span> Add to Wishlist</button>       
	                                </div><!-- End Item -->
	                                <div class="item next left">
	                                    <a href="#"><img alt="product 2" class="img-responsive" src="http://placehold.it/350x200/ef5e55/f5f5f5/&amp;text=Featured+Product"></a>
	                                    <h4><small>Featured Product 2</small></h4>                                        
	                                    <button type="button" class="btn btn-default" href="#"><span class="glyphicon glyphicon-heart"></span> Add to Wishlist</button>        
	                                </div><!-- End Item -->
	                                <div class="item">
	                                    <a href="#"><img alt="product 3" class="img-responsive" src="http://placehold.it/350x200/2ecc71/f5f5f5/&amp;text=Featured+Product"></a>
	                                    <h4><small>Featured Product 3</small></h4>                                        
	                                    <button type="button" class="btn btn-default" href="#"><span class="glyphicon glyphicon-heart"></span> Add to Wishlist</button>      
	                                </div><!-- End Item -->                                
	                              </div><!-- End Carousel Inner -->
	                            </div>
					        </div><!-- end col-4 -->
					        <div class="col-sm-4">
					      		<h3 class="title">Latest Tutorials</h3>
					            <ul class="media-list">
					                <li class="media"><a class="pull-right" href="#"><img width="70" class="img-thumbnail media-object" alt="" src="http://placehold.it/60x35/3498db/f5f5f5/&amp;text=Featured+Product"></a>
					                    <div class="media-body">
					                        <p><a href="#">How To Master Fireworks’ CSS Properties Panel And CSS Professionalzr</a></p>
					                    </div>
					                </li>
					                <li class="media"><a class="pull-right" href="#"><img width="70" class="img-thumbnail media-object" alt="" src="http://placehold.it/60x35/ef5e55/f5f5f5/&amp;text=Featured+Product"></a>
					                    <div class="media-body">
					                        <p><a href="#">Making A Complete Polyfill For The HTML5 Details Element</a></p>
					                    </div>
					                </li>
					                <li class="media"><a class="pull-right" href="#"><img width="70" class="img-thumbnail media-object" alt="" src="http://placehold.it/60x35/2ecc71/f5f5f5/&amp;text=Featured+Product"></a>
					                    <div class="media-body">
					                        <p><a href="#">Creating A “Save For Later” Chrome Extension With Modern Web Tools</a></p>
					                    </div>
					                </li>
					                <li class="media"><a class="pull-right" href="#"><img width="70" class="img-thumbnail media-object" alt="" src="http://placehold.it/60x35/3498db/f5f5f5/&amp;text=Featured+Product"></a>
					                    <div class="media-body">
					                        <p><a href="#">Scaling Down The BEM Methodology For Small Projects</a></p>
					                    </div>
					                </li>
					            </ul>
					        </div><!-- end col-4 -->
					        <div class="col-sm-4">
					      		<h3 class="title">Google Map</h3>
					      			<iframe width="340" height="240" frameborder="0" scrolling="no" marginheight="0" marginwidth="0" src="http://my.ctrlq.org/maps/#roadmap|10|41.001769314909254|-74.88742636132815"></iframe>
					        </div><!-- end col-4 -->
					    </div><!-- end row -->
					    <hr>
					    <div class="row">
					    	<div class="col-sm-6">
					      		<h3 class="title">About Us</h3>
					        	<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.</p>
					        </div><!-- end col-6 -->
					    	<div class="col-sm-3">
					      		<h3 class="title">Follow Us</h3>
					        	<p></p>
					        </div><!-- end col-3 -->
					    	<div class="col-sm-3">
					      		<h3 class="title">Subscribe</h3>
					        	<form class="navbar-form nopadding" method="post" action="">
									<input type="text" class="form-control" placeholder="Enter email" name="email">
									<input type="submit" value="Go" class="btn btn-primary">
								</form>   
					   		</div>               
					    </div>
					</li>
	            </ul>
	          </li>
	          <li class="dropdown active">
	            <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false"><i class="fa fa-search"></i> Jobs<span class="caret"></span></a>
	            <ul class="dropdown-menu" role="menu">
					<li><a href="<?=$url?>/jobs/"><i class="fa fa-briefcase" aria-hidden="true"></i>&nbsp;All Jobs</a></li>
					<li class="divider"></li>
					<?php
					$head_cat_job = mysqli_query($db,"select * from cj_job_post group by job_cat ");
					while($head_get_cat = mysqli_fetch_array($head_cat_job))
					{
						?>
						<li><a href="<?=$url?>/jobs/?job_cat=<?=$head_get_cat['job_cat']?>"><i class="fa fa-caret-right" aria-hidden="true"></i>&nbsp;<?=$head_get_cat['job_cat']?></a></li>
						<?php
					}
					?>
	            </ul>
	          </li>
	          <li class="dropdown">
	            <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false"><i class="fa fa-info-circle"></i> Information<span class="caret"></span></a>
	            <ul class="dropdown-menu" role="menu">
					<li><a><i class="fa fa-building" aria-hidden="true"></i>&nbsp;Company</a></li>
					<li class="divider"></li>
					<?php
					$head_pages_sql = mysqli_query($db,"select name,url from cj_pages where id!='6'");
					while($head_pages_row = mysqli_fetch_array($head_pages_sql))
					{
						?>
							<li><a href="<?=$url?>/company-<?=$head_pages_row["url"]?>" class="1footer_content"><i class="fa fa-caret-right" aria-hidden="true"></i>&nbsp;<?=$head_pages_row['name']?></a></li>
						<?php
					}
					?>  
	            </ul>
	          </li>
	          <li class="dropdown">
	            <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false"><i class="fa fa-table"></i> Services<span class="caret"></span></a>
	            <ul class="dropdown-menu" role="menu">
					<li><a><i class="fa fa-table" aria-hidden="true"></i>&nbsp;Services</a></li>
					<li class="divider"></li>
					<?php
					$head_ser_sql = mysqli_query($db,"select s_name,s_url from `cj_servicescategory`");
					while($head_ser_row = mysqli_fetch_array($head_ser_sql))
					{
						?>
							<li><a href="<?=$url?>/services-<?=$head_ser_row["s_url"]?>" class="1footer_content"><i class="fa fa-caret-right" aria-hidden="true"></i>&nbsp;<?=$head_ser_row['s_name']?></a></li>
						<?php
					}
					?>  
	            </ul>
	          </li>
	          <!--li class="dropdown">
	            <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false"><i class="far fa-handshake"></i> Recruiter Reach<span class="caret"></span></a>
	            <ul class="dropdown-menu" role="menu">
	              <li><a href="#">Action</a></li>
	              <li><a href="#">Another action</a></li>
	              <li><a href="#">Something else here</a></li>
	              <li class="divider"></li>
	              <li><a href="#">Separated link</a></li>
	              <li class="divider"></li>
	              <li><a href="#">One more separated link</a></li>
	            </ul>
	          </li>
			   <li class="dropdown">
	            <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false"><i class="far fa-file"></i> Latter<span class="caret"></span></a>
	            <ul class="dropdown-menu" role="menu">
	              <li><a href="#">Action</a></li>
	              <li><a href="#">Another action</a></li>
	              <li><a href="#">Something else here</a></li>
	              <li class="divider"></li>
	              <li><a href="#">Separated link</a></li>
	              <li class="divider"></li>
	              <li><a href="#">One more separated link</a></li>
	            </ul>
	          </li>
			  
			  <li><a href="#"><i class="far fa-bell"></i> Notification<br> </a></li-->
	        </ul>
	        <!-- <form class="navbar-form navbar-left" role="search"> -->
	          <!-- <div class="form-group"> -->
	            <!-- <input type="text" class="form-control" placeholder="Search"> -->
	          <!-- </div> -->
	          <!-- <button type="submit" class="btn btn-default">Submit</button> -->
	        <!-- </form> -->
	        <ul class="nav navbar-nav navbar-right">
				<li><a href="#Jobseeker" data-toggle="modal" data-target="#Jobseeker"><i class="fas fa-upload"></i>&nbsp;Upload Resume</a></li>
				<li><a href="#Jobseeker" data-toggle="modal" data-target="#myModal_emologin"><i class="fas fa-upload"></i>&nbsp;Employer-zone</a></li>
				<!--li class="dropdown">
					<a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false"><i class="fas fa-users"></i>&nbsp;Employer-zone <span class="caret"></span></a>
					<ul class="dropdown-menu" role="menu">
						<li><a href="#myModal_emologin" data-toggle="modal" data-target="#myModal_emologin">Find CV</a></li>
						<li class="divider"></li>
						<li><a href="#myModal_emologin" data-toggle="modal" data-target="#myModal_emologin">Find Job</a></li>
					</ul>
				</li-->
				<?php
				if(@$_SESSION['role']=='Job Seeker')
				{
					?>
					<li><a href="#" ><i class="far fa-bell" style="border:px solid green;color:green;;margin:px;font-size:20px;font-weight:bold;"></i></a></li>
					<li class="dropdown">
						<a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false"><i class="far fa-user"></i> User<span class="caret"></span></a>
						<ul class="dropdown-menu" role="menu">
							<li><a href="<?=$url?>/profile.php" ><i class="fas fa-user-plus myp_btn"></i>&nbsp;Edit Profile</a></li>
							<li><a href="<?=$url?>/profile.php" ><i class="fas fa-spinner myp_btn"></i>&nbsp;Profile Performance</a></li>
							<li><a href="<?=$url?>/profile-setting.php#Privacy-Setting"><i class="fa fa-cog myp_btn"></i>&nbsp;Privacy Setting</a></li>
							<li><a href="<?=$url?>/profile-setting.php#Change-Password"><i class="fas fa-lock-open myp_btn"></i>&nbsp;Change Password</a></li>
							<li class="divider"></li>
							<li><a href="<?=$url?>/logout.php"><i class="fas fa-sign-out-alt myp_btn"></i>Logout</a></li>
						</ul>
					</li>
					<?php
				}
				elseif(@$_SESSION['role']=='Employer')
				{
					?>
					<li><a href="#" ><i class="far fa-bell" style="border:px solid green;color:green;;margin:px;font-size:20px;font-weight:bold;"></i></a></li>
					<li class="dropdown">
						<a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false"><i class="far fa-user"></i> User<span class="caret"></span></a>
						<ul class="dropdown-menu" role="menu">
							<li><a href="<?=$url?>/employer-profile-update.php" ><i class="fas fa-user-plus myp_btn"></i>&nbsp;Edit Profile</a></li>
							<li><a href="<?=$url?>/employer-profile.php" ><i class="fas fa-spinner myp_btn"></i>&nbsp;Profile Performance</a></li>
							<li><a href="<?=$url?>/employer-profile-update.php"><i class="fas fa-ban myp_btn"></i>&nbsp;Block Companies</a></li>
							<li><a href="<?=$url?>/employer-profile-update.php"><i class="fas fa-lock-open myp_btn"></i>&nbsp;Change Password</a></li>
							<li class="divider"></li>
							<li><a href="<?=$url?>/logout.php"><i class="fas fa-sign-out-alt myp_btn"></i>Logout</a></li>
						</ul>
					</li>
					<?php
				}
				else
				{
					?><li class="active" data-toggle="modal" data-target="#myModal"><a href="#"><i class="fas fa-sign-in-alt "></i>&nbsp;<span>Login</span></a></li><?php
				}
				?>
	        </ul>
	      </div><!-- /.navbar-collapse -->
	  </div>
	</nav>	
		
	<nav class="navbar1 navbar-default megamenu sticky" style="z-index:1; display:none;">
	  <div class="container-fluid">
	      <!-- Brand and toggle get grouped for better mobile display -->
	      <div class="navbar-header">
	        <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
	          <span class="sr-only">Toggle navigation</span>
	          <span class="icon-bar"></span>
	          <span class="icon-bar"></span>
	          <span class="icon-bar"></span>
	        </button>
	        <a class="navbar-brand" href="index.php"><img src="image/seelogo.png" alt="logo" width="150"></a>
	      </div>

	      <!-- Collect the nav links, forms, and other content for toggling -->
	      <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
				<ul class="nav navbar-nav">
				  <li class="dropdown text-center">
					<a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false"><i class="fas fa-search font_color"></i><br> Jobs<span class="caret"></span></a>
					<ul class="dropdown-menu" role="menu">
					  <li><a href="#">Action</a></li>
					  <li><a href="#">Another action</a></li>
					  <li><a href="#">Something else here</a></li>
					  <li class="divider"></li>
					  <li><a href="#">Separated link</a></li>
					  <li class="divider"></li>
					  <li><a href="#">One more separated link</a></li>
					</ul>
				  </li>
				   <li class="dropdown megamenu-fw text-center">
					<a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false"><i class="far fa-file-alt"></i><br> Resume Writing<span class="caret"></span></a>
					<ul class="dropdown-menu megamenu-content" role="menu">
						<li>
							<div class="row">
								<div class="col-sm-4">
									<h3 class="title">Featured Products</h3>
									
									<div data-ride="carousel" class="carousel slide" id="myCarousel">
									  <div class="carousel-inner">
										<div class="item active left">
											<a href="#"><img alt="product 1" class="img-responsive" src="http://placehold.it/350x200/3498db/f5f5f5/&amp;text=Featured+Product"></a>
											<h4><small>Featured Product 1</small></h4>                                        
											<button type="button" class="btn btn-default" href="#"><span class="glyphicon glyphicon-heart"></span> Add to Wishlist</button>       
										</div><!-- End Item -->
										<div class="item next left">
											<a href="#"><img alt="product 2" class="img-responsive" src="http://placehold.it/350x200/ef5e55/f5f5f5/&amp;text=Featured+Product"></a>
											<h4><small>Featured Product 2</small></h4>                                        
											<button type="button" class="btn btn-default" href="#"><span class="glyphicon glyphicon-heart"></span> Add to Wishlist</button>        
										</div><!-- End Item -->
										<div class="item">
											<a href="#"><img alt="product 3" class="img-responsive" src="http://placehold.it/350x200/2ecc71/f5f5f5/&amp;text=Featured+Product"></a>
											<h4><small>Featured Product 3</small></h4>                                        
											<button type="button" class="btn btn-default" href="#"><span class="glyphicon glyphicon-heart"></span> Add to Wishlist</button>      
										</div><!-- End Item -->                                
									  </div><!-- End Carousel Inner -->
									</div>
								</div><!-- end col-4 -->
								<div class="col-sm-4">
									<h3 class="title">Latest Tutorials</h3>
									<ul class="media-list">
										<li class="media"><a class="pull-right" href="#"><img width="70" class="img-thumbnail media-object" alt="" src="http://placehold.it/60x35/3498db/f5f5f5/&amp;text=Featured+Product"></a>
											<div class="media-body">
												<p><a href="#">How To Master Fireworks’ CSS Properties Panel And CSS Professionalzr</a></p>
											</div>
										</li>
										<li class="media"><a class="pull-right" href="#"><img width="70" class="img-thumbnail media-object" alt="" src="http://placehold.it/60x35/ef5e55/f5f5f5/&amp;text=Featured+Product"></a>
											<div class="media-body">
												<p><a href="#">Making A Complete Polyfill For The HTML5 Details Element</a></p>
											</div>
										</li>
										<li class="media"><a class="pull-right" href="#"><img width="70" class="img-thumbnail media-object" alt="" src="http://placehold.it/60x35/2ecc71/f5f5f5/&amp;text=Featured+Product"></a>
											<div class="media-body">
												<p><a href="#">Creating A “Save For Later” Chrome Extension With Modern Web Tools</a></p>
											</div>
										</li>
										<li class="media"><a class="pull-right" href="#"><img width="70" class="img-thumbnail media-object" alt="" src="http://placehold.it/60x35/3498db/f5f5f5/&amp;text=Featured+Product"></a>
											<div class="media-body">
												<p><a href="#">Scaling Down The BEM Methodology For Small Projects</a></p>
											</div>
										</li>
									</ul>
								</div><!-- end col-4 -->
								<div class="col-sm-4">
									<h3 class="title">Google Map</h3>
										<iframe width="340" height="240" frameborder="0" scrolling="no" marginheight="0" marginwidth="0" src="http://my.ctrlq.org/maps/#roadmap|10|41.001769314909254|-74.88742636132815"></iframe>
								</div><!-- end col-4 -->
							</div><!-- end row -->
							<hr>
							<div class="row">
								<div class="col-sm-6">
									<h3 class="title">About Us</h3>
									<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.</p>
								</div><!-- end col-6 -->
								<div class="col-sm-3">
									<h3 class="title">Follow Us</h3>
									<p></p>
								</div><!-- end col-3 -->
								<div class="col-sm-3">
									<h3 class="title">Subscribe</h3>
									<form class="navbar-form nopadding" method="post" action="">
										<input type="text" class="form-control" placeholder="Enter email" name="email">
										<input type="submit" value="Go" class="btn btn-primary">
									</form>   
								</div>               
							</div>
						</li>
					</ul>
				  </li>
					  <li class="dropdown text-center">
						<a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false"><i class="far fa-handshake"></i><br> Recruiter Reach <span class="caret"></span></a>
						<ul class="dropdown-menu" role="menu">
						  <li><a href="#">Action</a></li>
						  <li><a href="#">Another action</a></li>
						  <li><a href="#">Something else here</a></li>
						  <li class="divider"></li>
						  <li><a href="#">Separated link</a></li>
						  <li class="divider"></li>
						  <li><a href="#">One more separated link</a></li>
						</ul>
					  </li>
					  <li class="dropdown text-center">
						<a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false"><i class="far fa-file"></i><br> Latter<span class="caret"></span></a>
						<ul class="dropdown-menu" role="menu">
						  <li><a href="#">Action</a></li>
						  <li><a href="#">Another action</a></li>
						  <li><a href="#">Something else here</a></li>
						  <li class="divider"></li>
						  <li><a href="#">Separated link</a></li>
						  <li class="divider"></li>
						  <li><a href="#">One more separated link</a></li>
						</ul>
					  </li>
					  
					<li class="text-center" data-toggle="modal" data-target="#myModal"><a href="#"><i class="fas fa-sign-in-alt"></i><br><span>Login</span></a></li>
					<li class="text-center"><a href="#"><i class="far fa-bell"></i><br>Notification<br> </a></li>
	            </ul>
	        <!-- <form class="navbar-form navbar-left" role="search"> -->
	          <!-- <div class="form-group"> -->
	            <!-- <input type="text" class="form-control" placeholder="Search"> -->
	          <!-- </div> -->
	          <!-- <button type="submit" class="btn btn-default">Submit</button> -->
	        <!-- </form> -->
	        <ul class="nav navbar-nav navbar-right">
	          <div class="index_rightnav">
				  <div class="nav navbar-nav navbar-right text-center">
					<div class="index_icon_img">
						<li><a href="#Jobseeker" data-toggle="modal" data-target="#Jobseeker" >
								<img id="myModal1" src="image/UPLOAD.png" style="width: 120px;">
							</a>
						</li>
					</div>
					<li>
						<a href="#myModal" data-toggle="modal" data-target="#myModal" style="padding:0px;margin:10px;">
							<img id="myModal1" src="image/emplyeeezone.png" style="width: 120px;">
						</a>
					</li>
				  </div>
				</div>
	        </ul>
	      </div><!-- /.navbar-collapse -->
	  </div>
	</nav>	
	<?php
	if(basename($_SERVER["SCRIPT_NAME"])=="index.php")
	{
		?>
		<div class="container-fluid index_search">
			<div class="row second_header">
			  <div class="col-md-2 index_inputsearch">
				<div class="skill_row">
					<input class="w3-input w3-border w3-hover-Pale-Blue first_box index_box" placeholder="Skill Designations Companies"  type="text">
				</div>
			  </div>
			  <div class="col-md-2 index_inputsearch">
				<div class="sub_row">
				  <input class="w3-input w3-border w3-hover-Pale-Blue first_box index_box"  placeholder="Location"  type="text">
				</div>
			  </div>
			  <div class="col-md-2 index_inputsearch">
				<div class="sub_row">
				  <input class="w3-input w3-border w3-hover-Pale-Blue first_box index_box"  placeholder="Sub Location"  type="text">
				</div>
			  </div>
			  <div class="col-md-2 index_inputsearch">
				<div class="Exp_row" >
				  <input class="w3-input w3-border w3-hover-Pale-Blue first_box index_box"  placeholder="Experience"  type="text">
				</div>
			  </div>
			  <div class="col-md-2 index_inputsearch">
				<div class="Salary">
				  <input class="w3-input w3-border w3-hover-Pale-Blue  first_box index_box"  placeholder="Salary"  type="text">
				</div>
			  </div>
			  <div>
				<div class="col-md-2 index_inputsearch">
				<input type="submit" class="btn-block btn-submit" value="Submit">
				</div>
			  </div>
			</div>
		</div>
		<?php
	}
	?>
	
