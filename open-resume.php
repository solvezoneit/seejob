<?php
	include"php/main.php";
?>
<!DOCTYPE html>
<html lang="en">
	
	<head>
		<title>Jobseeker-detaile</title>
		<meta charset="utf-8">
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<link rel="canonical" href=""/>
		
		<link rel="stylesheet" media="print" href="bootstrap.css" />
		<link rel="stylesheet" media="screen" href="bootstrap.css" />
		
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
		<link rel="stylesheet" media="screen" href="css/bootstrap.min.css">
		<link rel="stylesheet" type="text/css" href="seejob.css">
		<!-- page specific plugin styles -->
		<script src="js/3.2.1-jquery.min.js"></script>
		<script src="js/3.3.7-js-bootstrap.min.js"></script>
		<script defer src="js/fontawesome.com.js"></script>
		<meta name="description" content="" />
		<style>
		</style>
	</head>
	<body>
<div class="container-fluid" id="content">
<div class="row">
<div class="resume-3" style="width:25%;float:left;">
<div style="margin-left:15px;">
	<?php
		if (isset($_GET['data'])) 
		{
			$u_id= $_GET['data'];
			$query = mysqli_query($db,"SELECT * FROM cj_user WHERE user_id='$u_id'");
			$data = mysqli_fetch_array($query);
			
		}
	?>
	<h2><?=$data['name']?></h2>
	<h4><?=$data['designation']?></h4>
	<h3 class="resume-heading">Personal Info</h3>
		<p><b>Address</b></p>
		<?=$data['address']?>
		<p><b>Phone</b></p>
		<p><?=$data['contact'].','.$data['alter_contact']?></p>
		<p><b>E-mail</b></p>
		<p><?=$data['email']?></p>
		<p><b>Linkdin</b></p>
		<p><?=$data['linkedin']?></p>
		<h3 class="resume-heading">Skill</h3>
		<p><?=$data['specialization']?></p>
		<p><?=$data['course']?></p>
		
		<h3 class="resume-heading">Software</h3>
		<p><?=$data['course']?></p>
		
		<h3 class="resume-heading">Language</h3>
		<p><?=$data['specialization']?></p>
</div>
</div>
<div class="resume-9" style="width:75%;float:left;">
	<div class="col-md-12">
		<p>In order for a resume to highlight your educational background or stress your skills/qualifications and achievements as well resume to highlight your educational background or stress your skills/qualifications and achievements as wel as duties and responsibilities. For more information,In order for a resume to make a positive impression, you must develop a theme. Do you want to show your extensive work history? Do you want to highlight your educat For more information,</p>
		<hr class="CV-hr">
		<h2 class="resume-h">Experiance</h2>
		<hr class="CV-hr">
	
		<div class="row">
			<div class="col-md-12"style="margin-top:12px">
				<div class="col-md-2" style="padding:0px;">
					<h4 class="resume-heding-3"><?=$data['experience']?> -</h4>
					<p>Present</p>
				</div>
				<div class="col-md-10">
					<h3 class="resume-heding-3"><?=$data['resume_headline']?></h3>
					<p><?=$data['role']?></p>
					<ul style="padding-left:13px;">
						<li><?=$data['description']?>,</li>
						<li><?=$data['description']?>,</li>
						<li><?=$data['description']?>,</li>
						<li><?=$data['description']?>,</li>
					</ul>
				</div>
			</div>
		</div>
		<div class="row" style="margin-top:12px">
			<div class="col-md-12">
				<div class="col-md-2" style="padding:0px;">
					<h4 class="resume-heding-3"><?=$data['experience']?></h4>
					<p>Present</p>
				</div>
				<div class="col-md-10">
					<h3 class="resume-heding-3"><?=$data['resume_headline']?></h3>
					<p>Senior Hosipital</p>
					<ul style="padding-left:13px;">
						<li><?=$data['description']?>,</li>
						<li><?=$data['description']?>,</li>
						<li><?=$data['description']?>,</li>
						
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
					<h3 class="resume-heding-3"><?=$data['education']?></h3>
					<ul style="padding-left:13px;">
						<li><?=$data['course']?></li>
						<li><?=$data['description']?>,</li>
						<li><?=$data['description']?>,</li>
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
					<p><?=$data['specialization']?></p>
					<p><?=$data['description']?></p>
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
					<p><?=$data['a_job_cat']?></p>
					<p><?=$data['description']?></p>
				</div>
			</div>
		</div>
	</div>
</div>
</div>
</div>
</body>
</html>