<?php
	include"php/main.php";
	if(isset($_REQUEST['editlogocompany']))
	{
		$com_id = $_REQUEST['editlogocompany'];
		@$getcom = mysqli_fetch_array(mysqli_query($db,"select * from cj_company where com_id='".$com_id."'"));
	}
?>
<!DOCTYPE html>
<html>
	<head>
		<title>Employer-update-profile</title>
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
		<link rel="stylesheet" href="socicon/social_media.css">
		<!-- Latest compiled and minified CSS -->
		<link rel="stylesheet" href="css/bootstrap.min.css">
		<!-- jQuery library -->
		<!-- Latest compiled JavaScript -->
		<link rel="stylesheet" type="text/css" href="seejob.css">
		<script defer src="js/fontawesome.com.js"></script>
		
		<!-- include libraries(jQuery, bootstrap) -->
		
		<script src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.js"></script> 
		<script src="//netdna.bootstrapcdn.com/bootstrap/3.3.5/js/bootstrap.js"></script> 

		<!-- include summernote css/js -->
		<link href="//cdnjs.cloudflare.com/ajax/libs/summernote/0.8.9/summernote.css" rel="stylesheet">
		<script src="//cdnjs.cloudflare.com/ajax/libs/summernote/0.8.9/summernote.js"></script>
		
	
	<style>
	* {
    box-sizing: border-box;
	}
	input[type=text], select, textarea {
		width: 100%;
		padding: 0px 10px;
		border: 1px solid #ccc;
		border-radius: 0px;
		resize: vertical;
	}
	label {
		 padding: 0px 10px;
		display: inline-block;
	}
	input[type=submit] {
		background-color: #2196F3;
		color: white;
		padding: 5px 15px;
		border: none;
		border-radius: 4px;
		cursor: pointer;
	}
	input[type=submit]:hover {
		background-color: #45a049;
	}
	.col-25 {
		float: left;
		width: 40%;
		margin-top: 6px;
		text-align:right;
		font-size:11px;
	}
	.col-75 {
		float: left;
		width: 50%;
		margin-top: 6px;
		font-size:11px;
	}

	/* Clear floats after the columns */
	.row:after {
		content: "";
		display: table;
		clear: both;
	}

	/* Responsive layout - when the screen is less than 600px wide, make the two columns stack on top of each other instead of next to each other */
	@media (max-width: 600px) {
		.col-25, .col-75, input[type=submit] {
			width: 100%;
			margin-top: 0;
		}
	}
	.switch {
	  position: relative;
	  display: inline-block;
	  width: 50px;
	  height: 24px;
	}

	.switch input {display:none;}

	.slider {
	  position: absolute;
	  cursor: pointer;
	  top: 0;
	  left: 0;
	  right: 0;
	  bottom: 0;
	  background-color: #ccc;
	  -webkit-transition: .4s;
	  transition: .4s;
	}

	.slider:before {
	  position: absolute;
	  content: "";
	  height: 16px;
	  width: 16px;
	  left: 4px;
	  bottom: 4px;
	  background-color: white;
	  -webkit-transition: .4s;
	  transition: .4s;
	}

	input:checked + .slider {
	  background-color: #2196F3;
	}

	input:focus + .slider {
	  box-shadow: 0 0 1px #2196F3;
	}

	input:checked + .slider:before {
	  -webkit-transform: translateX(26px);
	  -ms-transform: translateX(26px);
	  transform: translateX(26px);
	}

	/* Rounded sliders */
	.slider.round {
	  border-radius: 34px;
	}

	.slider.round:before {
	  border-radius: 50%;
	}
	.area3
	{
	width:100%;
	height:200px;

	}

	@media only screen and (max-width:425px) {
		area3 {
			background-color: lightblue;
		}
	}
	.button_index {
		background-color:#337ab7; 
		border: 1px solid #337ab7;
		color:white;
		padding: 6px 22px;
		text-align: center;
		text-decoration: none;
		display: inline-block;
		font-size: 14px;
		margin: 0px 0px;
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
	.buttonine:hover {
		background-color:white; /* Green */
		border: 1px solid green;
		color: green;
		box-shadow: 0 0px 0px 0 rgba(0,0,0,0.24),0 5px 10px 0 rgba(0,0,0,0.19);
	}
	.buttonind:hover {
		background-color:white; /* Green */
		border: 1px solid red;
		color: red;
		box-shadow: 0 0px 0px 0 rgba(0,0,0,0.24),0 5px 10px 0 rgba(0,0,0,0.19);
	}

	</style>
	</head>
	
<body>
<div class="">
	<!-- Header Menu Start-->
	<?php include"employer-header.php"?>
	<!-- Header Menu End -->

	<div class="container" style="margin-bottom:20px;margin-top:20px;">
		<div class="row emplyer_align profile_row apply_box">
			<div id="company-edit-view"></div>
			<div class="col-md-9">
				<div class="">
					<h2 class="text-center"><?php if(isset($_REQUEST['editlogocompany'])){ ?>Edit<?php } else { ?>Add<?php } ?> Company</h2>
					<hr>
					<form id="company-form" action="php/company.php" method="POST">
						<div class="row">
							<div class="col-md-3">
								<div>
									<label for="name">Company's Name:</label>
								</div>
							</div>
							<div class="col-md-9">
								<input type="name" class="" id="name" value="<?=@$getcom['com_name']?>" placeholder="Enter name" name="name" style="width:100%;margin:5px;background-color:#f8f8f8;padding:10px;border:none;" required >
							</div>
						</div>
						<div class="row">
							<div class="col-md-3">
								<div>
									<label for="email">Company's Email-ID:</label>
								</div>
							</div>
							<div class="col-md-9">
								<input type="email" class="" id="email" value="<?=@$getcom['com_email']?>" placeholder="Enter email" name="email" style="width:100%;margin:5px;background-color:#f8f8f8;padding:10px;border:none;" required >
							</div>
						</div>
						<div class="row">
							<div class="col-md-3">
								<div>
									<label for="name">Company's Address:</label>
								</div>
							</div>
							<div class="col-md-9">
								<input type="address" id="add" value="<?=@$getcom['com_address']?>" placeholder="Enter address" name="add" style="width:100%;margin:5px;background-color:#f8f8f8;padding:10px;border:none;" required >
							</div>
						</div>
						
						<div class="row">
							<div class="col-md-3">
									<label for="name">Company's logo:</label>
							</div>
							<div class="col-md-6">
								<div id="dropContainer" style="width:100%;height:150px;margin:5px;background-color:#f8f8f8;padding:10px;border:none;">
								   <center><span style="color:lightgray;font-size:40px;"><i class="fas fa-upload"></i> <br>Drop Here</span></center>
								</div>
							</div>
							<div class="col-md-3">
								<img id="img" src="image/company/<?php echo $getcom['com_img'];?>" width="100%" onError="this.src='image/imgerror.jpg'"/>
							</div>
							<div class="col-md-9 col-md-offset-3">
								Should update here:
								<input type="file" id="fileInput" name="image"/>
							</div>
						</div>
						<div class="row">
							<div class="col-md-3">
								<label for="name">Description:</label>
							</div>
							<div class="col-md-9" style="margin-top:10px; z-index: 1;">
								<textarea id="summernote" name="desc" rows="50"><?=@$getcom['com_desc']?></textarea>
								<?php
								if(isset($_REQUEST['editlogocompany'])){
									?>
									<input type="hidden" name="companyedit" value="<?=$_REQUEST['editlogocompany']?>"/>
									<button class="button_index buttonin" name="companyinsert" ><i class="fas fa-angle-double-right"></i>&nbsp;Update</button>
									<?php
								}else{
									?>
									<input type="hidden" name="companyinsert" />
									<button class="button_index buttonin" name="companyinsert" ><i class="fas fa-angle-double-right"></i>&nbsp;Submit</button>
									<?php
								}
								?>
							</div>
						</div>
					</form>
				</div>	
			</div>
		
			<div class="col-md-3" >
				<div id="company-view"><?php include'employer-company-view.php';?></div>
			</div>
			
			
		</div>
	</div>

	<!--Footer-->
	<?php include"footer.php"; ?>
	<!--Footer-->
	
	
	<script>
		$(document).ready(function(){
			dropContainer.ondragover = dropContainer.ondragenter = function(evt) {
		  evt.preventDefault();
		};

		dropContainer.ondrop = function(evt) {
		  // pretty simple -- but not for IE :(
		  fileInput.files = evt.dataTransfer.files;
		  evt.preventDefault();
		};
			});
	</script>
	<script>
		$(document).ready(function(){
				$(document).ready(function() {
				  $('#summernote').summernote();
				});
			});
	</script>

	<script>
		$(document).ready(function(){
			$(".nav-tabs a").click(function(){
				$(this).tab('show');
			});
		});
		jQuery(document).ready(function(){
			$(".dropdown").hover(
				function() { $('.dropdown-menu', this).fadeIn("fast");
				},
				function() { $('.dropdown-menu', this).fadeOut("fast");
			});
		});
	</script>
	<script>
	$("#company-form").submit(function(event){
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
			$("#company-view").html(response);
		});
	});
	</script>
	<script>
		$("#fileInput").on("change", function()
		{
			var files = !!this.files ? this.files : [];
			if (!files.length || !window.FileReader) return;
			if (/^image/.test( files[0].type)){
				var reader = new FileReader();
				reader.readAsDataURL(files[0]);
				reader.onloadend = function(){ 
					$("#img").attr('src',this.result);
				}
			}
		});	
	</script>
</body>
</html>
