<?php
	session_start();
	include"cjobadmin/api/db_config.php";
	$home_meta = mysqli_fetch_array(mysqli_query($db,"select * from cj_pages where id='6'"));
?>
<html>
	<head>
		<title><?=$home_meta['page_title'];?></title>
		<meta charset="utf-8">
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<link rel="canonical" href=""/>
		<meta charset="UTF-8" /> 
		<meta http-equiv="X-UA-Compatible" content="IE=Edge"/>
		<meta name="description" content="<?=$home_meta['page_desc'];?>"/>
		<META NAME="ROBOTS" CONTENT="NOINDEX, NOFOLLOW">
		<meta name="google-site-verification" content="" />
		<meta name="keywords" content="<?=$home_meta['page_keywords'];?>"/>
		<meta http-equiv="Content-Language" content="en-us">
		<meta name="revisit-after" content="1 days"> 
		<meta name="RATING" content="General"> 
		<script src="js/3.2.1-jquery.min.js"></script>
		<script src="js/3.3.7-js-bootstrap.min.js"></script>
		<script defer src="js/fontawesome.com.js"></script>
		<link rel="stylesheet" href="css/w3.css">
		<link rel="stylesheet" href="socicon/social_media.css">
		<!-- Latest compiled and minified CSS -->
		<link rel="stylesheet" href="css/bootstrap.min.css">
		<link rel="stylesheet" type="text/css" href="seejob.css">
		<style>
		.link_more
		{
		background-color:#f6f6f6;
		text-decoration:none;
		padding:10px;
		border:1px solid lightgray
		}
		.link_more:hover{
		background-color:white;
		}
		.Recent_jbox
		{
		margin-top:20px;
		margin-bottom:40px;
		}
		.index_content
		{
		margin-top:18px;
		margin-bottom:10px;
		padding:0px;
		
		}
		.service_para
		{
			color:gray;
			font-size:12px;
		}
		.button_index {
			background-color:white; /* Green */
			border: 1px solid #337ab7;;
			color: #337ab7;
			padding: 12px 29px;
			text-align: center;
			text-decoration: none;
			display: inline-block;
			font-size: 13px;
			margin: 4px 2px;
			cursor: pointer;
			-webkit-transition-duration: 0.4s; /* Safari */
			transition-duration: 0.4s;
		}

		.buttonin:hover {
			background-color:#337ab7; 
			color:white;
			box-shadow: 0 12px 16px 0 rgba(0,0,0,0.24),0 17px 50px 0 rgba(0,0,0,0.19);
		}
		.service_box
		{
		background-color:white;
		}
		.service_box:hover {
			box-shadow: 0 12px 16px 0 rgba(0,0,0,0.24),0 17px 50px 0 rgba(0,0,0,0.19);
		}
		.categrie_hover
		{
		color:#09c;
		border:solid;
		padding:18px;
		margin:10px;
		}
		.categrie_hover:hover
		{
		color:#09c;
		border:solid;
		}

		.job_categrie
		{
		border:1px solid lightgray; background-color: #f6f6f6;
		}
		.job_categrie:hover {
			border:1px solid lightgray;
			background-color: #09c;color:#fff;
			box-shadow: 0 12px 16px 0 rgba(0,0,0,0.24),0 17px 50px 0 rgba(0,0,0,0.19);
		}
		.font_categrie
		{
		border:1px solid red; background-color: #f6f6f6;
		}
		.font_categrie:hover {
			border:1px solid lightgray;
			background-color:#fff;color:#fff;
			box-shadow: 0 12px 16px 0 rgba(0,0,0,0.24),0 17px 50px 0 rgba(0,0,0,0.19);
		}	
		  .jumbotron {
			  background-color: #f4511e;
			  color: #fff;
			  padding: 100px 25px;
			  font-family: Montserrat, sans-serif;
		  }
		 
		  .bg-grey {
			  background-color: #f6f6f6;
		  }
		  .logo-small {
			  color: #f4511e;
			  font-size: 50px;
		  }
		  .logo {
			  color: #f4511e;
			  font-size: 200px;
		  }
		  .thumbnail {
			 
			  border: none;
			  border-radius: 0;
		  }

		  .carousel-control.right, .carousel-control.left {
			  background-image: none;
			  color: #337ab7;
		  }
		  .carousel-indicators li {
			  border-color: #337ab7;
		  }
		  .carousel-indicators li.active {
			  background-color: #337ab7;
		  }
		  .item h4 {
			  font-size: 19px;
			  line-height: 1.375em;
			  font-weight: 400;
			  font-style: italic;
			  margin: 70px 0;
		  }
		  .item span {
			  font-style: normal;
		  }
		  .panel {
			  border: 1px solid #f4511e; 
			  border-radius:0 !important;
			  transition: box-shadow 0.5s;
		  }
		  .panel:hover {
			  box-shadow: 5px 0px 40px rgba(0,0,0, .2);
		  }
		  .panel-footer .btn:hover {
			  border: 1px solid #f4511e;
			  background-color: #fff !important;
			  color: #f4511e;
		  }
		  .panel-heading {
			  color: #fff !important;
			  background-color: #f4511e !important;
			  padding: 25px;
			  border-bottom: 1px solid transparent;
			  border-top-left-radius: 0px;
			  border-top-right-radius: 0px;
			  border-bottom-left-radius: 0px;
			  border-bottom-right-radius: 0px;
		  }
		  .panel-footer {
			  background-color: white !important;
		  }
		  .panel-footer h3 {
			  font-size: 32px;
		  }
		  .panel-footer h4 {
			  color: #aaa;
			  font-size: 14px;
		  }
		  .panel-footer .btn {
			  margin: 15px 0;
			  background-color: #f4511e;
			  color: #fff;
		  }
		  footer .glyphicon {
			  font-size: 20px;
			  margin-bottom: 20px;
			  color: #f4511e;
		  }
		  .slideanim {visibility:hidden;}
		  .slide {
			  animation-name: slide;
			  visibility: visible;
		  }
		  @keyframes slide {
			0% {
			  opacity: 0;
			  transform: translateY(70%);
			} 
			100% {
			  opacity: 1;
			  transform: translateY(0%);
			}
		  }
		  @-webkit-keyframes slide {
			0% {
			  opacity: 0;
			  -webkit-transform: translateY(70%);
			} 
			100% {
			  opacity: 1;
			  -webkit-transform: translateY(0%);
			}
		  }
		  @media screen and (max-width: 768px) {
			.col-sm-4 {
			  text-align: center;
			  margin: 25px 0;
			}
			.btn-lg {
				width: 100%;
				margin-bottom: 35px;
			}
		  }
		  @media screen and (max-width: 480px) {
			.logo {
				font-size: 150px;
			}
		  }
		/* Slider */
		#slider{
		  width:100%;
		  height:540px;
		  position:relative;
		  overflow:hidden;
		}
		@keyframes load{
		  from{left:-100%;}
		  to{left:0;}
		}
		.slides{
		  width:400%;
		  height:100%;
		  position:relative;
		  -webkit-animation:slide 30s infinite;
		  -moz-animation:slide 30s infinite;
		  animation:slide 30s infinite;
		}
		.slider{
		  width:25%;
		  height:100%;
		  float:left;
		  position:relative;
		  overflow:hidden;
		}
		.image{
		  width:100%;
		  height:100%;
		}
		.image img{
		  width:100%;
		  height:100%;
		}
		/* Legend */
		.legend{
		  border:500px solid transparent;
		  border-left:800px solid rgba(52, 73, 94, .7);
		  border-bottom:0;
		  position:absolute;
		  bottom:0;
		}
		/* Contents */
		.content{
		  width:100%;
		  height:100%;
		  position:absolute;
		  overflow:hidden;
		}
		.content-txt{
		  width:400px;
		  height:150px;
		  float:left;
		  position:relative;
		  top:300px;
		  -webkit-animation:content-s 7.5s infinite;
		  -moz-animation:content-s 7.5s infinite;
		  animation:content-s 7.5s infinite;
		}
		.content-txt h1{
		  font-family:Arial;
		  text-transform:uppercase;
		  font-size:24px;
		  color:#fff;
		  text-align:left;
		  margin-left:30px;
		  padding-bottom:10px;
		}
		.content-txt h2{
		  font-family:arial;
		  font-weight:normal;
		  font-size:14px;
		  font-style:italic;
		  color:#fff;
		  text-align:left;
		  margin-left:30px;
		}

		/* Switch */
		.switch{
		  width:120px;
		  height:10px;
		  position:absolute;
		  bottom:50px;
		  z-index:99;
		  left:30px;
		}
		.switch > ul{
		  list-style:none;
		}
		.switch > ul > li{
		  width:10px;
		  height:10px;
		  border-radius:50%;
		  background:#333;
		  float:left;
		  margin-right:5px;
		  cursor:pointer;
		}
		.switch ul{
		  overflow:hidden;
		}
		.on{
		  width:100%;
		  height:100%;
		  border-radius:50%;
		  background:#f39c12;
		  position:relative;
		  -webkit-animation:on 25s infinite;
		  -moz-animation:on 25s infinite;
		  animation:on 25s infinite;
		}

		/* Animation */
		@-webkit-keyframes slide{
		  0%,100%{
			margin-left:0%;
		  }
		  21%{
			margin-left:0%;
		  }
		  25%{
			margin-left:-100%;
		  }
		  46%{
			margin-left:-100%;
		  }
		  50%{
			margin-left:-200%;
		  }
		  71%{
			margin-left:-200%;
		  }
		  75%{
			margin-left:-300%;
		  }
		  96%{
			margin-left:-300%;
		  }
		}
		@-moz-keyframes slide{
		  0%,100%{
			margin-left:0%;
		  }
		  21%{
			margin-left:0%;
		  }
		  25%{
			margin-left:-100%;
		  }
		  46%{
			margin-left:-100%;
		  }
		  50%{
			margin-left:-200%;
		  }
		  71%{
			margin-left:-200%;
		  }
		  75%{
			margin-left:-300%;
		  }
		  96%{
			margin-left:-300%;
		  }
		}
		@keyframes slide{
		  0%,100%{
			margin-left:0%;
		  }
		  21%{
			margin-left:0%;
		  }
		  25%{
			margin-left:-100%;
		  }
		  46%{
			margin-left:-100%;
		  }
		  50%{
			margin-left:-200%;
		  }
		  71%{
			margin-left:-200%;
		  }
		  75%{
			margin-left:-300%;
		  }
		  96%{
			margin-left:-300%;
		  }
		}

		@-webkit-keyframes content-s{
		  0%{left:-420px;}
		  10%{left:0px;}
		  30%{left:0px;}
		  40%{left:0px;}
		  50%{left:0px;}
		  60%{left:0px;}
		  70%{left:0;}
		  80%{left:-420px;}
		  90%{left:-420px;}
		  100%{left:-420px;}
		}
		@-moz-keyframes content-s{
		  0%{left:-420px;}
		  10%{left:0px;}
		  30%{left:0px;}
		  40%{left:0px;}
		  50%{left:0px;}
		  60%{left:0px;}
		  70%{left:0;}
		  80%{left:-420px;}
		  90%{left:-420px;}
		  100%{left:-420px;}
		}
		@keyframes content-s{
		  0%{left:-420px;}
		  10%{left:20px;}
		  15%{left:0px;}
		  30%{left:0px;}
		  40%{left:0px;}
		  50%{left:0px;}
		  60%{left:0px;}
		  70%{left:0;}
		  80%{left:-420px;}
		  90%{left:-420px;}
		  100%{left:-420px;}
		}

		@-webkit-keyframes on{
		  0%,100%{
			margin-left:0%;
		  }
		  21%{
			margin-left:0%;
		  }
		  25%{
			margin-left:15px;
		  }
		  46%{
			margin-left:15px;
		  }
		  50%{
			margin-left:30px;
		  }
		  71%{
			margin-left:30px;
		  }
		  75%{
			margin-left:45px;
		  }
		  96%{
			margin-left:45px;
		  }
		}

		@-moz-keyframes on{
		  0%,100%{
			margin-left:0%;
		  }
		  21%{
			margin-left:0%;
		  }
		  25%{
			margin-left:15px;
		  }
		  46%{
			margin-left:15px;
		  }
		  50%{
			margin-left:30px;
		  }
		  71%{
			margin-left:30px;
		  }
		  75%{
			margin-left:45px;
		  }
		  96%{
			margin-left:45px;
		  }
		}

		@keyframes on{
		  0%,100%{
			margin-left:0%;
		  }
		  21%{
			margin-left:0%;
		  }
		  25%{
			margin-left:15px;
		  }
		  46%{
			margin-left:15px;
		  }
		  50%{
			margin-left:30px;
		  }
		  71%{
			margin-left:30px;
		  }
		  75%{
			margin-left:45px;
		  }
		  96%{
			margin-left:45px;
		  }
		}

		/* main */
		/* Reset */
		</style>		
	</head>
<body style="overflow:hidden;">
<div class="">
	<!-- Menu -->
	<?php include"header.php"; ?>
	<!-- Menu -->
   
		<!-- banner-slider -->
		<div id="slider">
		  <div class="slides">
			  <?php
				$slider_sql = mysqli_query($db,"select * from cj_slider where status='1' order by order_no");
				while($get_slider = mysqli_fetch_array($slider_sql))
				{
					?>
					<div class="slider">
					  <div class="legend"></div>
					  <div class="content">
						<div class="content-txt">
						  <h1><?=$get_slider['title']?></h1> 
						  <h2><?=$get_slider['slider_desc']?></h2> 
						</div>
					  </div>
					  <div class="image">
						<img src="cjobadmin/images/sliderimage/<?=$get_slider['image']?>">
					  </div>
					</div>
					<?php
				}
			  ?>
		  </div>
		  <div class="switch">
			<ul>
			  <?php
				$slider_sql = mysqli_query($db,"select * from cj_slider where status='1' order by order_no");
				while($get_slider = mysqli_fetch_array($slider_sql))
				{
					?><li><div class="on--"></div></li><?php
				}
			  ?>
			</ul>
		  </div>
		</div>
			
			
			

		<!--auto banner end -->

		<!--<div class="jumbotron text-center">
		  <h1>Company</h1> 
		  <p>We specialize in blablabla</p> 
		  <form>
			<div class="input-group">
			  <input type="email" class="form-control" size="50" placeholder="Email Address" required>
			  <div class="input-group-btn">
				<button type="button" class="btn btn-danger">Subscribe</button>
			  </div>
			</div>
		  </form>
		</div>-->

		<div class="container-fluid" style="background-color:white;">
			<div class="container">
				<div class="row Recent_jbox">
					<h2 class="text-center">Recent Job<br><img src="image/hrline1.png" alt="img" width="180px"></h2><br>
					<?php
					$res_job = mysqli_query($db,"select * from cj_job_post WHERE status='1' order by job_post_id desc limit 7");
					while($get_r_job = mysqli_fetch_array($res_job))
					{
						?>
						<div class="row text-center" style="border:1px solid lightgray;background-color:#f6f6f6;">
							<div class="col-md-2">
								<div style="padding:5px;">
								<h4 class="thumbnail"><b><?=$get_r_job['company_name']?></b></h4>
								<!--img src="image/icic_icon.jpg" alt="img" width="100px;"-->
								</div>
							</div>
							<div class="col-md-2">
								<p class="index_content"><?=$get_r_job['job']?>
								</p>
							</div>
							<div class="col-md-2">
								<p class="index_content"><?=$get_r_job['location']. $get_r_job['sub_location']?></p>
							</div>
							<div class="col-md-2">
								<p class="index_content">Selery : <?=$get_r_job["salary_min"].' to '.$get_r_job["salary_max"]?></p>
							</div>
							<div class="col-md-2">
								<p class="index_content">Exp : <?=$get_r_job["exp_min"].'-'.$get_r_job["exp_max"]?> Years</p>
							</div>
							<div class="col-md-2">
								<a href="<?=$url?>/job-info-<?=$get_r_job["url"]?>" target="_blank" class="button_index buttonin index_content" style="text-decoration:none;">Apply</a>
							</div>
						</div>
						<?php
					}
					?>
					
					<div class="row text-center link_more">
						<a href="<?=$url?>/jobs/" target="_blank" style="text-decoration:none">See more</a>
					</div>
				</div>
			</div>
		</div>
		
		<div class="container-fluid" style="background-color:#f6f6f6;">
			<div class="container">
				<div class="row Recent_jbox">
					<h2 class="text-center">Walkin Job<br><img src="image/hrline1.png" alt="img" width="180px"></h2><br>
					<?php
					$w_job = mysqli_query($db,"select * from cj_job_post WHERE job_type='Part Time' order by job_post_id limit 5");
					while($get_w_job = mysqli_fetch_array($w_job))
					{
						?>
						<div class="row text-center" style="border:1px solid lightgray;padding:20px;background-color:white;">
							<div class="col-md-2">
								<h3 class="thumbnail"><b><?=$get_w_job['company_name']?></b></h3>
								<!--img src="image/icic_icon.jpg" alt="img" width="100px;"-->
							</div>
							<div class="col-md-2">
								<p class="index_content"><?=$get_w_job['job']?><br><?=$get_w_job['location']. $get_w_job['sub_location']?>
								</p>
							</div>
							<div class="col-md-2">
								<p class="index_content">Exp : <?=$get_w_job["exp_min"].'-'.$get_w_job["exp_max"]?> years<br>Selery : <?=$get_w_job["salary_min"].' to '.$get_w_job["salary_max"]?></p>
							</div>
							<div class="col-md-2">
								<p class="index_content">Post on: <br> <?=date("d-M, Y",strtotime($get_w_job['add_date']))?></p>
							</div>
							<div class="col-md-2">
								<p class="index_content">Work Shift <br><?=$get_w_job['work_shifts']?></p>
							</div>
							<div class="col-md-2">
								<a href="<?=$url?>/job-info-<?=$get_w_job["url"]?>" target="_blank" class="button_index buttonin index_content" style="margin-top:10px;padding-bottom:10px;">Apply</a>
							</div>
						</div>
						<?php
					}
					?>
				</div>
			</div>
		</div>
		
		<!-- Container (Services Section) -->
		<div id="services" class="container-fluid text-center" style="background-color:white;">
		  <div class="container">
			<div class="row Recent_jbox slideanim">
				 <h2>JOB CATEGORIES</h2>
				<h4>A better career is out there. We'll help you find it to use</h4>
				<br>
				<?php
				$cat_job = mysqli_query($db,"select * from cj_job_post group by job_cat ");
				while($get_cat = mysqli_fetch_array($cat_job))
				{
					?>
					<a href="<?=$url?>/jobs/?job_cat=<?=$get_cat['job_cat']?>">
					<div class="col-sm-4 job_categrie">
						<span><i class="fas fa-briefcase fa-5x img-circle font_categrie" style="color:#09c;border:1px solid #09c;padding:18px;margin:10px;"></i></span>
						<h4><?=$get_cat['job_cat']?></h4>
						<!--p>Lorem ipsum dolor sit amet..</p-->
						<br>
					</div>
					</a>
					<?php
				}
				?>
			</div>
		  </div>
		</div>
		
		<!-- Container (Portfolio Section) -->
		<div class="container-fluid text-center bg-grey">
			<div class="container">
				<div class="row Recent_jbox text-center slideanim">
					<h2>Services</h2>
					<h4>What we have created</h4>
					<br>
					<?php
					$ser_sql = mysqli_query($db,"select s_image,s_name,s_url from `cj_servicescategory` where s_status='1' order by s_order");
					while($get_ser = mysqli_fetch_array($ser_sql))
					{
						?>
						<div class="col-sm-3">
							<div class="service_box" style="1box-shadow: 0 12px 16px 0 rgba(0,0,0,0.24),0 17px 50px 0 rgba(0,0,0,0.19);border:1px solid lightgray;">
								<img src="cjobadmin/images/services/<?=$get_ser['s_image']?>" alt="<?=$get_ser['s_name']?>" style="width:100%;height:250px;" >
								<h4><?=$get_ser['s_name']?></h4>
								<!--p class="service_para">We built New York</p-->
								<a href="<?=$url?>/services-<?=$get_ser["s_url"]?>" class="button_index buttonin">More Info</a>
							</div>
						</div>
						<?php
					}
					?>
				</div>
			</div>
		</div>
		<?php
		$about_sql = mysqli_fetch_array(mysqli_query($db,"select * from cj_pages where id='2'"));
		?>  
		<div class="container-fluid text-left " style="background-color:white;">
			<div class="container">
				<div class="row Recent_jbox">
					<div class="col-sm-8">
						<h2><?=$about_sql['name']?></h2>
						<br>
						<?=$about_sql['body_part']?>
						<a href="<?=$url?>/company-<?=$about_sql["url"]?>" class="button_index buttonin">Get in Touch</a>
					</div>
					<div class="col-sm-4 text-center">
						<span><i class="fas fa-chart-bar fa-10x" style="color:#337ab7;margin-top:70px;"></i></span>
					</div>
				</div>
			</div>
		</div>
		<?php
		$about_sql = mysqli_fetch_array(mysqli_query($db,"select * from cj_pages where id='5'"));
		?>  
		<div class="container-fluid text-left ">
			<div class="container">
				<div class="row Recent_jbox">
					<div class="col-sm-4 text-center">
						<span><i class="fas fa-chart-pie fa-10x" style="color:#337ab7;margin-top:70px;"></i></span>
					</div>
					<div class="col-sm-8">
						<h2><?=$about_sql['name']?></h2>
						<br>
						<?=$about_sql['body_part']?>
						<a href="<?=$url?>/company-<?=$about_sql["url"]?>" class="button_index buttonin">Get in Touch</a>
					</div>
				</div>
			</div>
		</div>
		
		<!--auto banner end -->
		<div class="text-center ceo_box">
			<img src="image/CEO.jpg" alt="face" class="img_CEO">
			<p>SeeJob</p>
			<p>Get access to skilled freelancers within seconds.<br> It's quick, easy, and we only need a few details to get started.</p>
			<button type="button" class="btn btn-warning">Contact to CEO</button>
		</div>
		<div class="container-fluid bg-grey text-left" style="background-color:white;">
			<div class="container">
				<div class="row ">
					<h2 class="text-center">What our customers say</h2>
					<div id="myCarousel" class="carousel slide text-center" data-ride="carousel">
						<!-- Indicators -->
						<ol class="carousel-indicators">
						  <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
						  <li data-target="#myCarousel" data-slide-to="1"></li>
						  <li data-target="#myCarousel" data-slide-to="2"></li>
						</ol>

						<!-- Wrapper for slides -->
						<div class="carousel-inner" role="listbox">
						  <div class="item active">
							<h4>"This company is the best. I am so happy with the result!"<br><span>Michael Roe, Vice President, Comment Box</span></h4>
						  </div>
						  <div class="item">
							<h4>"One word... WOW!!"<br><span>John Doe, Salesman, Rep Inc</span></h4>
						  </div>
						  <div class="item">
							<h4>"Could I... BE any more happy with this company?"<br><span>Chandler Bing, Actor, FriendsAlot</span></h4>
						  </div>
						</div>

						<!-- Left and right controls -->
						<a class="left carousel-control" href="#myCarousel" role="button" data-slide="prev">
						  <span class="glynotfound" aria-hidden="true"></span>
						  <span class="sr-only">Previous</span>
						</a>
						<a class="right carousel-control" href="#myCarousel" role="button" data-slide="next">
						  <span class="glynotfound" aria-hidden="true"></span>
						  <span class="sr-only">Next</span>
						</a>
					</div>
				</div>
			</div>
		</div>    

	<!--Footer-->
	<?php include"footer.php"; ?>
	<!--Footer-->
	
</body>
		<script>
		$(document).ready(function(){
		  // Add smooth scrolling to all links in navbar + footer link
		  $(".navbar a, footer a[href='#myPage']").on('click', function(event) {
			// Make sure this.hash has a value before overriding default behavior
			if (this.hash !== "") {
			  // Prevent default anchor click behavior
			  event.preventDefault();

			  // Store hash
			  var hash = this.hash;

			  // Using jQuery's animate() method to add smooth page scroll
			  // The optional number (900) specifies the number of milliseconds it takes to scroll to the specified area
			  $('html, body').animate({
				scrollTop: $(hash).offset().top
			  }, 900, function(){
		   
				// Add hash (#) to URL when done scrolling (default click behavior)
				window.location.hash = hash;
			  });
			} // End if
		  });
		  
		  $(window).scroll(function() {
			$(".slideanim").each(function(){
			  var pos = $(this).offset().top;

			  var winTop = $(window).scrollTop();
				if (pos < winTop + 600) {
				  $(this).addClass("slide");
				}
			});
		  });
		})
		</script>
</html>
