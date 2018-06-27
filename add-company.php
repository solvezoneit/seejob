<?php
	@session_start();
	include"php/main.php";
?>
<!DOCTYPE html>
<html>
	<head>
		<title>post-job</title>
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
		<!-- Latest compiled and minified CSS -->
		<link rel="stylesheet" href="css/bootstrap.min.css">
		<link rel="stylesheet" href="css/w3.css"><link rel="stylesheet" href="socicon/social_media.css">
		<link rel="stylesheet" href="socicon/social_media.css">
		<!-- jQuery library -->
		<script src="js/3.2.1-jquery.min.js"></script>
		<!-- Latest compiled JavaScript -->
		<script src="js/3.3.7-js-bootstrap.min.js"></script>
		<link rel="stylesheet" type="text/css" href="seejob.css">
		<script defer src="js/fontawesome.com.js"></script>

		<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/chosen/1.5.1/chosen.min.css">
		<script src="https://cdnjs.cloudflare.com/ajax/libs/chosen/1.5.1/chosen.jquery.min.js"></script>
		<link href="https://fonts.googleapis.com/css?family=PT+Sans:400,700" rel="stylesheet">
		<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.6.3/css/font-awesome.min.css" />
	</head>
<body>

	<!-- Header Menu Start-->
	<?php include"employer-header.php"?>
	<!-- Header Menu End -->

	<div class="container">
			<div class="row" style="margin-bottom:20px;">
			  <div class="col-md-9 col-md-offset-1">

				  <form id="form" action="php/create_company.php" method="POST" enctype="multipart/form-data">					
						<h3 class="Post_heading">Add company</h3>

						  <div class="form-group">
						    <label for="inputAddress">Company Name:</label>
						    <input type="text" class="form-control" id="c-name" name="c-name" placeholder="Enter company name">
						  </div>
						  <div class="form-group">
						    <label for="inputAddress">Company Email:</label>
						    <input type="email" class="form-control" id="c-email" name="c-email" placeholder="Enter company name">
						  </div>
						  <div class="form-group">
						    <label for="inputAddress">Company Address:</label>
						    <input type="text" class="form-control" id="c-add" name="c-add" placeholder="Enter state, city, Apartment">
						    <div class="form-group">
						    <label for="inputAddress">Company Image:</label>
						    <input type="file" class="form-control" id="file" name="file" placeholder="Select Company Image">
						  </div>
						  </div>
						  <div class="form-group">
						    <label for="inputAddress2">Company Description</label>
						    <textarea type="text" class="form-control" id="c-desc" name="c-desc" rows="7" placeholder="Apartment, studio, or floor"></textarea>
						  </div>						  
						  <input type="submit" name="submit" id="submit" value="Add company" class="btn btn-success pull-right">
					</form>
					<div id="server-pages-view"></div>
				</div>
			</div>
	</div>
	
	<?php include"footer.php"; ?>
	<!--Footer-->
	<script>
				$("#form").submit(function(event){
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
					}).done(function(response)
					{ //
						$("#server-pages-view").html(response);
					});
				});
			</script>
	</body>
</html>
