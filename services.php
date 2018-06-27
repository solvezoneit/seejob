<?php
	session_start();
	include"cjobadmin/api/db_config.php";
	$get_details = mysqli_fetch_array(mysqli_query($db,"select * from cj_servicescategory where s_url='".$_REQUEST["url"]."'"));
?>
<!DOCTYPE html>
<html lang="en">
	
	<head>
		<title><?=$get_details['title']?></title>
		<meta charset="utf-8">
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<link rel="canonical" href=""/>
		<meta charset="UTF-8" /> 
		<meta http-equiv="X-UA-Compatible" content="IE=Edge" />
		<meta name="description" content="<?=$get_details['desc']?>"/>
		<META NAME="ROBOTS" CONTENT="NOINDEX, NOFOLLOW">
		<meta name="google-site-verification" content="" />
		<meta name="keywords" content="<?=$get_details['keyword']?>"/>
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
		background-image:url(<?=$url?>/cjobadmin/images/services/<?=$get_details['s_image']?>);
		background-repeat:no-repeat;
		background-size:cover;
		width:100%;
		height:170px;
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
			margin-top:-100px;
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
					<p style="background-color:#1750e8a6;padding:10px;width:83%;">
						<span>
						<a style="text-decoration:none;color:white;" href="<?=$url?>" class="link_tab">Home</a>&nbsp;
							<i class="fas fa-angle-double-right link_tab"></i>&nbsp;
						<a style="text-decoration:none;color:white;" href="#" class="link_tab">Services</a>&nbsp;
							<i class="fas fa-angle-double-right link_tab"></i>&nbsp;
						<a style="text-decoration:none;color:white;" href="#" class="link_tab"><?=$get_details['s_name']?></a>&nbsp;
						</span>
					</p>
				</div>
			</div>
		</div>
		<div class="container">
			<div class="row employer_detail_margin" style="">
				<div class="col-md-10">
					<div class="apply_box row">
						<div class="col-md-12">
							<h3 style="color:#2e6da4;"><?=$get_details['s_name']?></h3>
							<hr>
						</div>
						<div class="col-md-12">
							<p align="justify"><?=html_entity_decode($get_details['s_desc'])?></p>
							<!--div class="resume-para">
								<span>
									<button class="button_index buttonin"><i class="fas fa-angle-double-right"></i>&nbsp;Apply On Company Website</button>
								</span>
							</div-->
						</div>
					</div>
					
				</div>
				<div class="col-md-2 sticky text-center">
					<div style="margin-bottom:10px;">
						<div class="row" style="border:1px solid #ccc;background-color:white;">
							<h4 style="color:#2e6da4;">CEO</h4>
							<hr style="margin-top:10px;margin-bottom:10px;background-color:#2e6da4;">
							<div class="col-md-12">
							<img src="<?=$url?>/image/CEO.jpg" class="img-circle" alt="face" width="50%;" style="border:1px solid #ccc;">
								<hr style="margin-top:10px;margin-bottom:10px;">
								<div>
									<p style="font-size:11px;">Mr. Shasikant Sharma ( CEO )</p>
									<hr style="margin-top:5px;margin-bottom:5px;">
									<!--p style="font-size:11px;"><?=$get_profile['location']?></p-->
								</div>
							</div>
						</div>
					</div>
					
					<!-- Advertisement -->
					<?php include"right-add.php"?>
					<!-- Advertisement -->
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