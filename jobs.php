<?php
	session_start();
	include"cjobadmin/api/db_config.php";
?>
<!DOCTYPE html>
<html lang="en">
	
	<head>
		<title>Job</title>
		<meta charset="utf-8">
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<link rel="canonical" href=""/>
		<meta charset="UTF-8" /> 
		<meta http-equiv="X-UA-Compatible" content="IE=Edge" />
		<meta name="description" content=""/>
		<meta name="robots" content="noindex, nofollow">
		<meta name="google-site-verification" content="" />
		<meta name="keywords" content=""/>
		<meta http-equiv="Content-Language" content="en-us" > 
		<meta name="revisit-after" content="1 days" > 
		<meta name="RATING" content="General" > 
		<link rel="shortcut icon" href="<?=$url?>/image/seelogo.png" type="image/png">
		<!-- bootstrap & fontawesome -->
		<link rel="stylesheet" href="<?=$url?>/css/w3.css">
		<link rel="stylesheet" href="<?=$url?>/socicon/social_media.css">
		<link rel="stylesheet" href="<?=$url?>/css/bootstrap.min.css">
		<link rel="stylesheet" type="text/css" href="<?=$url?>/seejob.css">
		<!-- page specific plugin styles -->
		<script src="<?=$url?>/js/3.2.1-jquery.min.js"></script>
		<script src="<?=$url?>/js/3.3.7-js-bootstrap.min.js"></script>
		<script defer src="<?=$url?>/js/fontawesome.com.js"></script>
		
		<style>
		/*filter code*/
    	.behclick-panel  .list-group {
    		margin-bottom: 0px;
		}
		.behclick-panel .list-group-item:first-child {
			border-top-left-radius:0px;
			border-top-right-radius:0px;
		}
		.behclick-panel .list-group-item {
			border-right:0px;
			border-left:0px;
		}
		.behclick-panel .list-group-item:last-child{
			border-bottom-right-radius:0px;
			border-bottom-left-radius:0px;
		}
		.behclick-panel .list-group-item {
			padding: 5px;
		}
		.behclick-panel .panel-heading {
			/* 				padding: 10px 15px;
                            border-bottom: 1px solid transparent; */
			border-top-right-radius: 0px;
			border-top-left-radius: 0px;
			border-bottom: 1px solid darkslategrey;
		}
		.behclick-panel .panel-heading:last-child{
			/* border-bottom: 0px; */
		}
		.behclick-panel {
			border-radius: 0px;
			border-right: 0px;
			border-left: 0px;
			border-bottom: 0px;
			box-shadow: 0 0px 0px rgba(0, 0, 0, 0);
		}
		.behclick-panel .radio, .checkbox {
			margin: 0px;
			padding-left: 10px;
		}
		.behclick-panel .panel-title > a, .panel-title > small, .panel-title > .small, .panel-title > small > a, .panel-title > .small > a {
			outline: none;
		}
		.behclick-panel .panel-body > .panel-heading{
			padding:10px 10px;
		}
		.behclick-panel .panel-body {
			padding: 0px;
		}
		 /* unvisited link */
		.behclick-panel a:link {
		    text-decoration:none;
		}

		/* visited link */
		.behclick-panel a:visited {
		    text-decoration:none;
		}

		/* mouse over link */
		.behclick-panel a:hover {
		    text-decoration:none;
		}

		/* selected link */
		.behclick-panel a:active {
		    text-decoration:none;
		}		
		</style>

	</head>
	
<body>
	<div class="">
	<!-- Header Menu Start-->
	<?php include"header.php"?>
	<!-- Header Menu End -->

	 <div class="container">
		<div class="row filter_row">
				<!--Filter-->	
					<?php include"left-filter-job.php"?>
				<!--Filter-->
			
				<!--Employer Job-->
				<div class="col-md-7">
					<div id="accordion" class="panel panel-primary behclick-panel" style="border:1px solid #;">
						<div class="panel-heading">
							<span class="panel-title">Jobs</span>
							<span class="panel-title pull-right">
							<!--form action="" method="GET">
								Salary
								<select name="odr" style="color:#000;" onchange="submit();">
									<option <?=((@$_REQUEST[odr]=='')?'selected':'')?> value="">Select</option>
									<option <?=((@$_REQUEST[odr]=='hl')?'selected':'')?> value="hl">High to Low</option>
									<option <?=((@$_REQUEST[odr]=='lh')?'selected':'')?> value="lh">Low to High</option>
								<select>
								<input type="hidden" name="location" value="<?=(isset($_REQUEST['location'])?$locations:'')?>">
								<input type="hidden" name="salary" value="<?=@$_REQUEST['salary']?>">
								<input type="hidden" name="company_name" value="<?=(isset($_REQUEST['company_name'])?$company_names:'')?>">
								<input type="hidden" name="job_type" value="<?=(isset($_REQUEST['job_type'])?$job_types:'')?>">
								<input type="hidden" name="work_shifts" value="<?=(isset($_REQUEST['work_shifts'])?$work_shiftss:'')?>">
								
							</form-->
							</span>
						</div>
						
					</div>
					<div id="load_data"></div>
					<div id="load_data_message" style="margin-top:20px;"></div>
				</div>
				<!--Employer Job-->
				
				<!-- Advertisement -->
					<?php include"right-add.php"?>
				<!-- Advertisement -->
		</div>
	 </div>
	</div>
	<div id="wait" style="display:none;padding:2px;"><center><img src="images/load2.gif" style="width:70px;position: absolute;top:0;bottom: 0;left: 0;right: 0;margin: auto;"></center></div>
	<!--Footer-->
	<?php include"footer.php"; ?>
	<!--Footer-->
	<!-- inline scripts related to this page -->
	<script>
	function fetch_select(val)
	{
		$.ajax({
			type: 'post',
			url: 'job-fetch.php',
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
			url: 'job-fetch.php',
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
			url: 'job-fetch.php',
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
			url: 'job-fetch.php',
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
			url: 'job-fetch.php',
			data: {get_job:val},
			success: function (response) {
				document.getElementById("new_select_job").innerHTML=response; 
			}
		});
	}
	</script>
	<script>
	$('document').ready(function(){
		
		$(".js-example-basic-single").select2();
		$(function() {
		   $("#geStd").click(function() {
			  if ($(this).attr('id') === "geStd") {
				$("select#appearance").val("green").trigger('change');
			  } else {
				 $("#geStd").prop('checked', false);
			  }
		   });
		   $("select").change(function() {
			  if (this.value !== "green") {
				 $("#geStd").prop('checked', false);
			  }
		   });
		});
		// wait loader script
		$(document).ajaxStart(function(){
			$("#wait").css("display", "block");
		});
		$(document).ajaxComplete(function(){
			$("#wait").css("display", "none");
		});
		$("button").click(function(){
			$("#txt").load("demo_ajax_load.asp");
		});
		
	})
    </script>
	<script>

	$(document).ready(function()
	{
		
	 var limit = 10;
	 var start = 0;
	 var action = 'inactive';
	 function load_country_data(limit,start)
	 {
	  $.ajax({
	   url:"<?=$url?>/job-fetch.php",
	   method:"POST",
	   data:{
			limit:limit,
			start:start,
			<?php if(isset($_REQUEST['job_cat'])){?>job_cat:"<?=$_REQUEST['job_cat']?>",<?php } else {} ?>
			<?php if(isset($company_names)){?>company_name:"<?=$company_names?>",<?php } else {} ?>
			<?php if(isset($locations)){?>location:"<?=$locations?>",<?php } else {} ?>
			<?php if(isset($_REQUEST['salary'])){?>salary:"<?=$_REQUEST['salary']?>",<?php } else {} ?>
			<?php if(isset($job_types)){?>job_type:"<?=$job_types?>",<?php } else {} ?>
			<?php if(isset($work_shiftss)){?>work_shifts:"<?=$work_shiftss?>",<?php } else {} ?>
			<?php if(isset($odrs)){?>odr:"<?=$_REQUEST['odr']?>"<?php } else {} ?>
			},
	   cache:false,
	   success:function(data)
	   {
		$('#load_data').append(data);
		if(data == '')
		{
		 $('#load_data_message').html("");
		 action = 'active';
		}
		else
		{
		 $('#load_data_message').html("<div class='apply_box row' style='background-color:#fff;padding:20px;'><center><img src='<?=$url?>/image/load5.gif' height='50'></center></div>");
		 action = "inactive";
		}
	   }
	  });
	 }

	 if(action == 'inactive')
	 {
	  action = 'active';
	  load_country_data(limit, start);
	 }
	 $(window).scroll(function(){
	  if($(window).scrollTop() + $(window).height() > $("#load_data").height() && action == 'inactive')
	  {
	   action = 'active';
	   start = start + limit;
	   setTimeout(function(){
		load_country_data(limit, start);
	   }, 1000);
	  }
	 });
	 
	 
	 
	 
	});
	
	</script>
	
</body>
<!--Model Form-->
<?php include"model.php"; ?>
<!--Model Form-->
</html>