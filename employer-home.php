<?php
	include"php/main.php";
?>
<!DOCTYPE html>
<html lang="en">
	
	<head>
		<title>Employer-detaile</title>
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
		<!-- bootstrap & fontawesome -->
		<link rel="stylesheet" href="css/w3.css"><link rel="stylesheet" href="socicon/social_media.css">
		<link rel="stylesheet" href="css/bootstrap.min.css">
		<link rel="stylesheet" type="text/css" href="seejob.css">
		<!-- page specific plugin styles -->
		<script src="js/3.2.1-jquery.min.js"></script>
		<script src="js/3.3.7-js-bootstrap.min.js"></script>
		<script defer src="js/fontawesome.com.js"></script>
		<meta name="description" content="" />
		<script src="https://code.jquery.com/jquery-2.2.0.min.js" type="text/javascript"></script>
		<script src="https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.6.0/slick.js"></script>
		<link href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" rel="stylesheet">
		
		<style>
		h2{
		  text-align:center;
		  padding: 20px;
		}
		/* Slider */

		.slick-slide {
			margin: 0px 20px;
		}

		.slick-slide img {
			width: 100%;
		}

		.slick-slider
		{
			position: relative;
			display: block;
			box-sizing: border-box;
			-webkit-user-select: none;
			-moz-user-select: none;
			-ms-user-select: none;
					user-select: none;
			-webkit-touch-callout: none;
			-khtml-user-select: none;
			-ms-touch-action: pan-y;
				touch-action: pan-y;
			-webkit-tap-highlight-color: transparent;
		}

		.slick-list
		{
			position: relative;
			display: block;
			overflow: hidden;
			margin: 0;
			padding: 0;
		}
		.slick-list:focus
		{
			outline: none;
		}
		.slick-list.dragging
		{
			cursor: pointer;
			cursor: hand;
		}

		.slick-slider .slick-track,
		.slick-slider .slick-list
		{
			-webkit-transform: translate3d(0, 0, 0);
			   -moz-transform: translate3d(0, 0, 0);
				-ms-transform: translate3d(0, 0, 0);
				 -o-transform: translate3d(0, 0, 0);
					transform: translate3d(0, 0, 0);
		}

		.slick-track
		{
			position: relative;
			top: 0;
			left: 0;
			display: block;
		}
		.slick-track:before,
		.slick-track:after
		{
			display: table;
			content: '';
		}
		.slick-track:after
		{
			clear: both;
		}
		.slick-loading .slick-track
		{
			visibility: hidden;
		}

		.slick-slide
		{
			display: none;
			float: left;
			height: 100%;
			min-height: 1px;
		}
		[dir='rtl'] .slick-slide
		{
			float: right;
		}
		.slick-slide img
		{
			display: block;
		}
		.slick-slide.slick-loading img
		{
			display: none;
		}
		.slick-slide.dragging img
		{
			pointer-events: none;
		}
		.slick-initialized .slick-slide
		{
			display: block;
		}
		.slick-loading .slick-slide
		{
			visibility: hidden;
		}
		.slick-vertical .slick-slide
		{
			display: block;
			height: auto;
			border: 1px solid transparent;
		}
		.slick-arrow.slick-hidden {
			display: none;
		}
		.comparison {
		  max-width:940px;
		  margin:0 auto;
		  font:13px/1.4 "Helvetica Neue",Helvetica,Arial,sans-serif;
		  text-align:center;
		  padding:10px;
		}

		.comparison table {
		  width:100%;
		  border-collapse: collapse;
		  border-spacing: 0;
		  table-layout: fixed;
		  border-bottom:1px solid #CCC;
		}

		.comparison td, .comparison th {
		  border-right:1px solid #CCC;
		  empty-cells: show;
		  padding:10px;
		}

		.compare-heading {
		  font-size:18px;
		  font-weight:bold !important;
		  border-bottom:0 !important;
		  padding-top:10px !important;
		}

		.comparison tbody tr:nth-child(odd) {
		  display:none;
		}

		.comparison .compare-row {
		  background:#F5F5F5;
		}

		.comparison .tickblue {
		  color:#0078C1;
		}

		.comparison .tickgreen {
		  color:#009E2C;
		}

		.comparison th {
		  font-weight:normal;
		  padding:0;
		  border-bottom:1px solid #CCC;
		}

		.comparison tr td:first-child {
		  text-align:left;
		}
		  
		.comparison .qbse, .comparison .qbo, .comparison .tl {
		  color:#FFF;
		  padding:10px;
		  font-size:13px;
		  border-right:1px solid #CCC;
		  border-bottom:0;
		}

		.comparison .tl2 {
		  border-right:0;
		}

		.comparison .qbse {
		  background:#0078C1;
		  border-top-left-radius: 3px;
		  border-left:0px;
		}

		.comparison .qbo {
		  background:#009E2C;
		  border-top-right-radius: 3px;
		  border-right:0px;
		}

		.comparison .price-info {
		  padding:5px 15px 15px 15px;
		}

		.comparison .price-was {
		  color:#999;
		  text-decoration: line-through;
		}

		.comparison .price-now, .comparison .price-now span {
		  color:#ff5406;
		}

		.comparison .price-now span {
		  font-size:32px;
		}

		.comparison .price-small {
			font-size: 18px !important;
			position: relative;
			top: -11px;
			left: 2px;
		}

		.comparison .price-buy {
		  background:#ff5406;
		  padding:10px 20px;
		  font-size:12px;
		  display:inline-block;
		  color:#FFF;
		  text-decoration:none;
		  border-radius:3px;
		  text-transform:uppercase;
		  margin:5px 0 10px 0;
		}

		.comparison .price-try {
		  font-size:12px;
		}

		.comparison .price-try a {
		  color:#202020;
		}

		@media (max-width: 767px) {
		  .comparison td:first-child, .comparison th:first-child {
			display: none;
		  }
		  .comparison tbody tr:nth-child(odd) {
			display:table-row;
			background:#F7F7F7;
		  }
		  .comparison .row {
			background:#FFF;
		  }
		  .comparison td, .comparison th {
			border:1px solid #CCC;
		  }
		  .price-info {
		  border-top:0 !important;
		  
		}
		  
		}

		@media (max-width: 639px) {
		  .comparison .price-buy {
			padding:5px 10px;
		  }
		  .comparison td, .comparison th {
			padding:10px 5px;
		  }
		  .comparison .hide-mobile {
			display:none;
		  }
		  .comparison .price-now span {
		  font-size:16px;
		}

		.comparison .price-small {
			font-size: 16px !important;
			top: 0;
			left: 0;
		}
		  .comparison .qbse, .comparison .qbo {
			font-size:12px;
			padding:10px 5px;
		  }
		  .comparison .price-buy {
			margin-top:10px;
		  }
		  .compare-heading {
		  font-size:13px;
		}
		}
			.img_postion
			{
			position: relative;
			width:100%;
			height: auto;
			
			}
			.price_list
			{
				margin-top:20px;
				margin-bottom:20px;
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
			.price_box:hover {
				
				box-shadow: 0 12px 16px 0 rgba(0,0,0,0.24),0 17px 50px 0 rgba(0,0,0,0.19);
			}

			.buttonin:hover {
				background-color:#337ab7; 
				color:white;
				box-shadow: 0 12px 16px 0 rgba(0,0,0,0.24),0 17px 50px 0 rgba(0,0,0,0.19);
			}
				.button_index1 {
				background-color:transparent; /* Green */
				border: 1px solid #fff;
				color: #fff;
				padding: 12px 32px;
				text-align: center;
				text-decoration: none;
				display: inline-block;
				font-size: 13px;
				margin: 4px 2px;
				cursor: pointer;
				-webkit-transition-duration: 0.4s; /* Safari */
				transition-duration: 0.4s;
			}

			.buttonin1:hover {
				background-color:#337ab7; 
				color:white;
				box-shadow: 0 12px 16px 0 rgba(0,0,0,0.24),0 17px 50px 0 rgba(0,0,0,0.19);
				border:none;
			}
				.button_index2 {
				background-color:#337ab7; /* Green */
				color: #fff;
				padding: 12px 32px;
				text-align: center;
				text-decoration: none;
				display: inline-block;
				font-size: 13px;
				margin: 4px 2px;
				cursor: pointer;
				-webkit-transition-duration: 0.4s; /* Safari */
				transition-duration: 0.4s;
			}

			.buttonin2:hover {
				background-color:transparent; 
				color:white;
				box-shadow: 0 12px 16px 0 rgba(0,0,0,0.24),0 17px 50px 0 rgba(0,0,0,0.19);
				border:1px solid #fff;
			}
			.employer_content
			{
			margin-top:100px;
			background-color:#17131385;
			margin:80px;
			padding:20px;
			}
			.employer_heading
			{
				color:#fff;
			}
			.emp_city
			{
			margin:5px;
			width:92%;
			color:gray;
			padding:6px;
			background-color:white;
			border:1px solid lightgray;
			}
			.heding_color
			{
			
			}
			.inquiry_form
			{
			background-color:#ffffffcf;
			border:1px solid lightgray;
			padding:20px;
			margin:20px;
			margin-top:40px;
			}
			.input_emp
			{
			margin:5px;
			padding:5px;
			background-color:white;
			border:1px solid lightgray;
			}
			.emp_btn
			{
			
			padding:6px 12px;
			margin:5px;
			}
		</style>
</head>
	
<body class="apjobbg">
  <div class="container-fluid" style="padding-left:0px;padding-right:0px;">
	<!-- Header Menu Start-->
	<?php include"employer-header.php"?>
	<!-- Header Menu End -->
		
	<div class="container-fluid heding_color" style="background-image:url(image/employer_banner6.jpg);background-image:cover;width:100%;height:auto;">
		<div class="row">
			<div class="col-md-6">
				<div class="employer_content">
					<div class="employer_heading">Hire people for your business with ease</h1>
						<p class="employer_heading">Search over 1 crore+ blue-collar and entry-level resumes.</p>
						<div class="text-center">
							<a href="employer-post-job.php" class="button_index1 buttonin1">Post Job</a>
							<a href="employer-find-job.php" class="button_index2 buttonin2">Find CV</a>
						</div>
					</div>
				</div>
			</div>
			
			<div class="col-md-3 col-md-offset-3" style="display:none1;">
				<div class="inquiry_form">
					<form id="employer-data-query" action="php/query.php" method="post">
						<div class=" inside_form text-center">
							<div class=" col-md-12 text-center"style="margin-top:-50px;">
								<!--i class="fas fa-user fa-4x img-circle" style="border:solid;padding:5px;background-color:white;color:lightgray;"></i-->
								<img <?php if(empty($profilerow['profile_pic'])){ ?>src="image/dp/profile.jpg"<?php }else{ ?>src="image/dp/<?=$profilerow['profile_pic']?>"<?php }?> class="img-circle" style="border:solid;padding:5px;background-color:white;color:lightgray;width:60px;">
							</div>
							<p>For any query text us!</p>
							<hr style="margin:5px;">
							<div class="form-group">
								<div class="input-group1 1col-md-12 ">
									<input id="uname" type="name" class="form-control" name="name" placeholder="Enter Username" style="border:none;z-index:0;" value="<?=$profilerow['name']?>" required>
								</div>
							</div>
							<div class="form-group">
								<div class="input-group1 1col-md-12 ">
									<input id="email" type="email" class="form-control" name="email" placeholder="Enter Email" style="border:none;z-index:0;" value="<?=$profilerow['email']?>" required>
								</div>
							</div>

							<div class="form-group">
								<div class="input-group1 1col-md-12 ">
									<input id="tel" type="tel" class="form-control" name="contact" placeholder="Enter Number" style="border:none;z-index:0;" value="<?=$profilerow['contact']?>" required>
								</div>
							</div>
							
							<div class="form-group">
								<div class="input-group1 1col-md-12 ">
									<input id="tel" type="text" class="form-control" name="location" placeholder="Enter Location" style="border:none;z-index:0;" value="<?=$profilerow['location']?>" required>
								</div>
							</div>
							
							<div class="form-group">
								<div class="input-group1 1col-md-12 ">
									<textarea class="form-control" name="message" placeholder="Enter Query" style="border:none;z-index:0;" required></textarea>
								</div>
							</div>
							
							<!--div class="form-group">
								<div class="input-group1 1col-md-12 ">
									<select class="chosen-select form-control" id="" style="border:none;" required>
										<option value="australia">Delhi</option>
										<option value="canada">Noida</option>
										<option value="usa">Bangalore</option>
									</select>
								</div>
							</div-->
							<div id="employer-data-query-result"></div>
							<div class="form-group">
								<div class="input-group1 1col-md-12 ">
									<input type="hidden" name="employer_data_query">
									<button type="submit" class="btn btn-warning btn-block " class="">Send Request</button>
								</div>
							</div>
							<span style="font-size:10px;">For any query call us at 789987644</span>
						</div>
					</form>
				</div>
			</div>
		</div>
	</div>
	
	<div class="container-fluid wait"  style="background: linear-gradient(to top,lightgray  0%, #fff 100%);padding-bottom:20px;">
		<div class="row text-center">
			<h2>What We Offer</h2>
			<p>Save time and receive relevant responses using our intelligent filter technologies</p>
			<hr>
			<div class="container">
				<div class="row">
					<div class="col-md-3 col-md-offset-3">
						<div style="background-color:white;margin-top:10px;">
							<img src="image/for-employer.jpg" alt="icon" class="" style="width:100%;height:150px;">
							<div style="padding:5px;">
								<h4>ADVERTISE YOUR JOB</h4>
								<hr>
								<p>India’s no. 1 hiring platform for blue collar and entry level white collarfor blue collar and entry level white  roles.</p>
							</div>
						</div>
					</div>
					<div class="col-md-3">
						<div style="background-color:white;margin-top:10px;">
							<img src="image/find-candidate.jpg" alt="icon" class="" style="width:100%;height:150px;">
							<div style="padding:5px;">
								<h4>Find Job</h4>
								<hr>
								<p>India’s no. 1 hiring  platform for blue collar and entry level white collarfor blue collar and entry level white  roles.</p>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
	

	<!-- Container (Pricing Section) -->
	
	<div class="comparison">
		<div class="text-center">
			<h2>Pricing List</h2>
			<h4>Choose a payment plan that works for you</h4>
			<hr>
		</div>
	  <table>
		<thead>
		  <tr>
			<th class="tl tl2"></th>
			<th class="qbse">
			  Self-Employed & Freelance
			</th>
			<th colspan="3" class="qbo">
			  Small businesses that need accounting, invoicing or payroll
			</th>
		  </tr>
		  <tr>
			<th class="tl"></th>
			<th class="compare-heading price-info">
			  Self-Employed
			</th>
			<th class="compare-heading price-info">
			  Simple Start
			</th>
			<th class="compare-heading price-info">
			  Essentials
			</th>
			<th class="compare-heading price-info">
			  Plus
			</th>
		  </tr>
		  <tr>
			<th></th>
			<th class="price-info">
			  <div class="price-was">Was <!--i class="fa fa-rupee-sign"></i-->$6.00</div>
			  <div class="price-now"><span><!--i class="fa fa-rupee-sign"></i-->$4<span class="price-small">.20</span></span> /month</div>
			  <div><a href="#" class="price-buy">Buy <span class="hide-mobile">Now</span></a></div>
			  <div class="price-try"><span class="hide-mobile">or </span><a href="#">try <span class="hide-mobile">it free</span></a></div>
			</th>
			<th class="price-info">
			  <div class="price-was">Was <!--i class="fa fa-rupee-sign"></i-->$7.00</div>
			  <div class="price-now"><span><!--i class="fa fa-rupee-sign"></i-->$5<span class="price-small">.60</span></span> /month</div>
			  <div><a href="#" class="price-buy">Buy <span class="hide-mobile">Now</span></a></div>
			  <div class="price-try"><span class="hide-mobile">or </span><a href="#">try <span class="hide-mobile">it free</span></a></div>
			</th>
			<th class="price-info">
			  <div class="price-was">Was <!--i class="fa fa-rupee-sign"></i-->$15.00</div>
			  <div class="price-now"><span><!--i class="fa fa-rupee-sign"></i-->$10<span class="price-small">.50</span></span> /month</div>
			  <div><a href="#" class="price-buy">Buy <span class="hide-mobile">Now</span></a></div>
			  <div class="price-try"><span class="hide-mobile">or </span><a href="#">try <span class="hide-mobile">it free</span></a></div>
			</th>
			<th class="price-info">
			  <div class="price-was">Was <!--i class="fa fa-rupee-sign"></i-->$25.00</div>
			  <div class="price-now"><span><!--i class="fa fa-rupee-sign"></i-->$15<span class="price-small">.00</span></span> /month</div>
			  <div><a href="#" class="price-buy">Buy <span class="hide-mobile">Now</span></a></div>
			  <div class="price-try"><span class="hide-mobile">or </span><a href="#">try <span class="hide-mobile">it free</span></a></div>
			</th>
		  </tr>
		</thead>
		<tbody>
		  <tr>
			<td><i class="fa fa-times" style="color:red;"></i></td>
			<td colspan="4">Seperate business from personal spending</td>
		  </tr>
		  <tr class="compare-row">
			<td>Seperate business/personal</td>
			<td><span class="tickblue">✔</span></td>
			<td><i class="fa fa-times" style="color:red;"></i></td>
			<td><i class="fa fa-times" style="color:red;"></i></td>
			<td><i class="fa fa-times" style="color:red;"></i></td>
		  </tr>
		  <tr>
			<td>&nbsp;</td>
			<td colspan="4">Estimate tax payments</td>
		  </tr>
		  <tr>
			<td>Estimate tax payments</td>
			<td><span class="tickblue">✔</span></td>
			<td><i class="fa fa-times" style="color:red;"></i></td>
			<td><i class="fa fa-times" style="color:red;"></i></td>
			<td><i class="fa fa-times" style="color:red;"></i></td>
		  </tr>
		  <tr>
			<td>&nbsp;</td>
			<td colspan="4">Track deductible mileage</td>
		  </tr>
		  <tr class="compare-row">
			<td>Track deductible mileage</td>
			<td><span class="tickblue">✔</span></td>
			<td><i class="fa fa-times" style="color:red;"></i></td>
			<td><i class="fa fa-times" style="color:red;"></i></td>
			<td><i class="fa fa-times" style="color:red;"></i></td>
		  </tr>
		  <tr>
			<td>&nbsp;</td>
			<td colspan="4">Download online banking</td>
		  </tr>
		  <tr>
			<td>Download online banking</td>
			<td><span class="tickblue">✔</span></td>
			<td><span class="tickgreen">✔</span></td>
			<td><span class="tickgreen">✔</span></td>
			<td><span class="tickgreen">✔</span></td>
		  </tr>
		  <tr>
			<td>&nbsp;</td>
			<td colspan="4">Works on PC, Mac & mobile</td>
		  </tr>
		  <tr class="compare-row">
			<td>Multi-device</td>
			<td><span class="tickblue">✔</span></td>
			<td><span class="tickgreen">✔</span></td>
			<td><span class="tickgreen">✔</span></td>
			<td><span class="tickgreen">✔</span></td>
		  </tr>
		  <tr>
			<td>&nbsp;</td>
			<td colspan="4">Create invoices & estimates</td>
		  </tr>
		  <tr>
			<td>Create invoices & estimates</td>
			<td><i class="fa fa-times" style="color:red;"></i></td>
			<td><span class="tickgreen">✔</span></td>
			<td><span class="tickgreen">✔</span></td>
			<td><span class="tickgreen">✔</span></td>
		  </tr>
		  <tr>
			<td>&nbsp;</td>
			<td colspan="4">Manage VAT</td>
		  </tr>
		  <tr class="compare-row">
			<td>Manage VAT</td>
			<td><i class="fa fa-times" style="color:red;"></i></td>
			<td><span class="tickgreen">✔</span></td>
			<td><span class="tickgreen">✔</span></td>
			<td><span class="tickgreen">✔</span></td>
		  </tr>
		  <tr>
			<td>&nbsp;</td>
			<td colspan="4">Run payroll</td>
		  </tr>
		  <tr>
			<td>Run payroll</td>
			<td><i class="fa fa-times" style="color:red;"></i></td>
			<td><span class="tickgreen">✔</span></td>
			<td><span class="tickgreen">✔</span></td>
			<td><span class="tickgreen">✔</span></td>
		  </tr>
		  <tr>
			<td>&nbsp;</td>
			<td colspan="4">Number of users</td>
		  </tr>
		  <tr class="compare-row">
			<td>Number of users</td>
			<td class="tickblue">1 user</td>
			<td class="tickgreen">1 user</td>
			<td class="tickgreen">3 users</td>
			<td class="tickgreen">5 users</td>
		  </tr>
		  <tr>
			<td>&nbsp;</td>
			<td colspan="4">Manage bills & payments</td>
		  </tr>
		  <tr>
			<td>Manage bills & payments</td>
			<td><i class="fa fa-times" style="color:red;"></i></td>
			<td><i class="fa fa-times" style="color:red;"></i></td>
			<td><span class="tickgreen">✔</span></td>
			<td><span class="tickgreen">✔</span></td>
		  </tr>
		  <tr>
			<td>&nbsp;</td>
			<td colspan="4">Handle multiple currencies</td>
		  </tr>
		  <tr class="compare-row">
			<td>Handle multiple currencies</td>
			<td><i class="fa fa-times" style="color:red;"></i></td>
			<td><i class="fa fa-times" style="color:red;"></i></td>
			<td><span class="tickgreen">✔</span></td>
			<td><span class="tickgreen">✔</span></td>
		  </tr>
		  <tr>
			<td>&nbsp;</td>
			<td colspan="4">Create budgets</td>
		  </tr>
		  <tr>
			<td>Create budgets</td>
			<td><i class="fa fa-times" style="color:red;"></i></td>
			<td><i class="fa fa-times" style="color:red;"></i></td>
			<td><i class="fa fa-times" style="color:red;"></i></td>
			<td><span class="tickgreen">✔</span></td>
		  </tr>
		  <tr>
			<td>&nbsp;</td>
			<td colspan="4">Track employee time</td>
		  </tr>
		  <tr class="compare-row">
			<td>Track employee time</td>
			<td><i class="fa fa-times" style="color:red;"></i></td>
			<td><i class="fa fa-times" style="color:red;"></i></td>
			<td><i class="fa fa-times" style="color:red;"></i></td>
			<td><span class="tickgreen">✔</span></td>
		  </tr>
		  <tr>
			<td>&nbsp;</td>
			<td colspan="4">Stock control</td>
		  </tr>
		  <tr>
			<td>Stock control</td>
			<td><i class="fa fa-times" style="color:red;"></i></td>
			<td><i class="fa fa-times" style="color:red;"></i></td>
			<td><i class="fa fa-times" style="color:red;"></i></td>
			<td><span class="tickgreen">✔</span></td>
		  </tr>
		</tbody>
	  </table>
	</div>

	<!-- <div class="container"> -->
		<!-- <div class="price_list"> -->
		  
			<!-- <div class="row"> -->
				<!-- <div class="col-sm-4 col-xs-12"> -->
				  <!-- <div class="panel panel-default text-center price_box"> -->
					<!-- <div class="panel-heading" style="background-color:#337ab7;"> -->
					  <!-- <h1 style="color:white;">Free</h1> -->
					<!-- </div> -->
					<!-- <div class="panel-body"> -->
					  <!-- <p><strong>20</strong> Lorem</p> -->
					  <!-- <p><strong>15</strong> Ipsum</p> -->
					  <!-- <p><strong>5</strong> Dolor</p> -->
					  <!-- <p><strong>2</strong> Sit</p> -->
					  <!-- <p><strong>Endless</strong> Amet</p> -->
					<!-- </div> -->
					<!-- <div class="panel-footer"> -->
					  <!-- <h3>$19</h3> -->
					  <!-- <h4>per month</h4> -->
					  <!-- <button class="button_index buttonin btn btn-lg">Sign Up</button> -->
					<!-- </div> -->
				  <!-- </div>       -->
				<!-- </div>      -->
				<!-- <div class="col-sm-4 col-xs-12 "> -->
				 <!-- <div class="panel panel-default text-center price_box"> -->
					<!-- <div class="panel-heading" style="background-color:#337ab7;"> -->
					  <!-- <h1 style="color:white;">Basic</h1> -->
					<!-- </div> -->
					<!-- <div class="panel-body"> -->
					  <!-- <p><strong>50</strong> Lorem</p> -->
					  <!-- <p><strong>25</strong> Ipsum</p> -->
					  <!-- <p><strong>10</strong> Dolor</p> -->
					  <!-- <p><strong>5</strong> Sit</p> -->
					  <!-- <p><strong>Endless</strong> Amet</p> -->
					<!-- </div> -->
					<!-- <div class="panel-footer"> -->
					  <!-- <h3>$29</h3> -->
					  <!-- <h4>per month</h4> -->
						<!-- <button class="button_index buttonin btn btn-lg">Sign Up</button> -->
					<!-- </div> -->
				  <!-- </div>       -->
				<!-- </div>        -->
				<!-- <div class="col-sm-4 col-xs-12"> -->
				  <!-- <div class="panel panel-default text-center price_box"> -->
					<!-- <div class="panel-heading" style="background-color:#337ab7;"> -->
					  <!-- <h1 style="color:white;">Premium</h1> -->
					<!-- </div> -->
					<!-- <div class="panel-body"> -->
					  <!-- <p><strong>100</strong> Lorem</p> -->
					  <!-- <p><strong>50</strong> Ipsum</p> -->
					  <!-- <p><strong>25</strong> Dolor</p> -->
					  <!-- <p><strong>10</strong> Sit</p> -->
					  <!-- <p><strong>Endless</strong> Amet</p> -->
					<!-- </div> -->
					<!-- <div class="panel-footer"> -->
					  <!-- <h3>$49</h3> -->
					  <!-- <h4>per month</h4> -->
					  <!-- <button class="button_index buttonin btn btn-lg">Sign Up</button> -->
					<!-- </div> -->
				  <!-- </div>       -->
				<!-- </div>     -->
			<!-- </div> -->
		<!-- </div> -->
	<!-- </div> -->
	<div class="container-fluid" style="margin-top:10px;margin-bottom:10px;background-color:#fff;">
		<div class="container">
			<h2>Our Company</h2>
			<hr>
			<section class="customer-logos slider">
			<?php
			$company_sql = mysqli_query($db,"select * from cj_company where user_id='".$_SESSION["user_id"]."' order by com_id desc");
			while($get_comp = mysqli_fetch_array($company_sql))
			{
				?>
					<div class="slide" style="background-color:#fff;"><center><img src="image/company/<?=$get_comp['com_img']?>" align="center" width="auto" style=" display: block;margin: 0 auto;"></center></div>
				<?php
			}
			?>
			</section>
		</div>
	</div>
	
	<!-- Slider image -->

	<!-- <div style="background-color:#fff;"> -->
		<!-- <div class="container" style="border:solid1; "> -->
			<!-- <marquee> -->
				<!-- <ul  class="list-inline" style="list-style-type:none;"> -->
					<!-- <li style="border-radius:5px;"><img src="image/icic_icon.jpg" alt="img" style="width:130px;border:solid;"></li> -->
					<!-- <li style="border-radius:5px;"><img src="image/axis_icon.png" alt="img" style="width:130px;border:solid;"></li> -->
					<!-- <li style="border-radius:5px;"><img src="image/city_icon.png" alt="img" style="width:130px;border:solid;"></li> -->
					<!-- <li style="border-radius:5px;"><img src="image/facebook_circle-512.png" alt="img" style="width:100px;border:solid;"></li> -->
					<!-- <li style="border-radius:5px;"><img src="image/google.png" alt="img" style="width:130px;border:solid;"></li> -->
					<!-- <li style="border-radius:5px;"><img src="image/hdfc_logo.jpg" alt="img" style="width:130px;border:solid;"></li> -->
					<!-- <li style="border-radius:5px;"><img src="image/icic_icon.jpg" alt="img" style="width:130px;border:solid;"></li> -->
					<!-- <li style="border-radius:5px;"><img src="image/kotak_icon.jpg" alt="img" style="width:130px;border:solid;"></li> -->
				<!-- </ul> -->
			<!-- </marquee> -->
		<!-- </div> -->
	<!-- </div> -->
	
	<!-- Slider image-end -->
	<!--Footer-->
	<?php include"footer.php"; ?>
	<!--Footer-->
	
	<script>
		$(document).ready(function(){
		$('.customer-logos').slick({
			slidesToShow: 6,
			slidesToScroll: 1,
			autoplay: true,
			autoplaySpeed: 1500,
			arrows: false,
			dots: false,
			pauseOnHover: false,
			responsive: [{
				breakpoint: 768,
				settings: {
					slidesToShow: 4
				}
			}, {
				breakpoint: 520,
				settings: {
					slidesToShow: 3
				}
			}]
		});
	});
	</script>
		
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
	$("#employer-data-query").submit(function(event){
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
			$("#employer-data-query-result").html(response);
		});
	});
	</script>
</body>
</html>				
