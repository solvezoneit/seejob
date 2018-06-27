<!DOCTYPE html>
<html>
<head>
	<title>Employer Registration</title>
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
	<link rel="stylesheet" href="css/w3.css">
	<!-- Latest compiled and minified CSS -->
	<link rel="stylesheet" href="css/bootstrap.min.css">
	<!-- jQuery library -->
	<script src="js/3.2.1-jquery.min.js"></script>
	<!-- Latest compiled JavaScript -->
	<script src="js/3.3.7-js-bootstrap.min.js"></script>
	<link rel="stylesheet" type="text/css" href="seejob.css">
	<script defer src="js/fontawesome.com.js"></script>
	<script src="js/3.2.1-jquery.min.js"></script>
</head>
<body>
	<div class="container">
		<nav class="navbar navbar-default navbar-fixed-top">
		  <div class="container">
				<a class="navbar-brand home register_a" href="index.php">
					<img src="image/seelogo.png" alt="Obaju logo" class="hidden-xs">
				</a>
				<div class="register_nav">
					<a href="loginpage.php" class="btn btn-info option_link" role="button">Login</a>
				</div>
		  </div>
		</nav>
		<div class="row">
			<div class="register_page col-sm-5 col-md-offset-3">
			  <h3 class="register_heading">Job Seeker Registration Here</h3>
				<div class="register_form">
				<form class="form-horizontal" action="php/user.php" id="my_form" method="POST">
					<div class="form-group ">
						<div class="input-group col-sm-8 col-sm-offset-2">
							<span class="input-group-addon register_input"><i class="fa fa-user register_fa"></i></span>
							<input id="name" type="text" class="form-control" name="name" placeholder="Name">
						</div>
					</div>

					<div class="form-group">
						<div class="input-group col-sm-8 col-sm-offset-2">
							<span class="input-group-addon register_input"><i class="fas fa-envelope-open register_fa"></i></span>
							<input id="email" type="email" class="form-control" name="email" placeholder="Enter Email address">
						</div>
					</div>

					<div class="form-group">
						<div class="input-group col-sm-8 col-sm-offset-2">
							<span class="input-group-addon register_input"><i class="fas fa-key register_fa"></i></span>
							<input type="password" class="form-control" name="pwd" placeholder=" Password">
						</div>
					</div>

					<div class="form-group">
						<div class="input-group col-sm-8 col-sm-offset-2">
							<span class="input-group-addon register_input"><i class="fas fa-unlock register_fa"></i></span>
							<input type="password" class="form-control" name="cpwd" placeholder="Conform Password">
						</div>
					</div>

					<div class="form-group">
						<div class="input-group col-sm-8 col-sm-offset-2">
							<span class="input-group-addon register_input"><i class="fas fa-mobile register_fa"></i></span>
							<input type="text" pattern="[789][0-9]{9}" class="form-control" name="contact" placeholder="Enter Mobile Number" required>
						</div>
					</div>
					
					<div id="server-results"></div>

					<div class="register_btn">
						<input type="hidden" name="jobseekersignup" class="btn btn-primary" value="Register Now">
						<input type="submit" class="btn btn-primary" value="Register Now">
					</div>

					<div class="hr-theme-slash-2">
					  <div class="hr-line"></div>
					  <div class="hr-icon"><i class="fa fa-lock" aria-hidden="true"></i></div>
					  <div class="hr-line"></div>
					</div>

					<div class="form-group" id="register_social">        
						<a href="#">
						<div class="col-md-4 register_icon_fb">
							<div class="col-md-2">
								<span><i class="fab fa-facebook-f fa-1x" aria-hidden="true"></i></span>
							</div>
							<div class="col-md-2">
								<p>Facebook</p>
							</div>
						</div>
						</a>
						<a href="#">
						<div class="col-md-4 register_icon-gogle">
							<div class="col-md-2 " >
								<span><i class="fab fa-linkedin-in fa-1x" aria-hidden="true"></i></span>
							</div>
							<div class="col-md-2">
								<p>LinkedIn</p>
							</div>
						</div>
						</a>
						<a href="#">
						<div class="col-md-4 register_icon_twiet">
							<div class="col-md-2">
								<span><i class="fab fa-google-plus-g fa-1x" aria-hidden="true"></i></span>
							</div>
							<div class="col-md-2">
								<p>Google</p>
							</div>
						</div>
						</a>
					</div>
				</form> 
				</div>
			</div>
		</div>
	</div>
	<div class="sticky_footer" >
		<div class="profile-footer" >
			<ul class="list-inline registerexexp_ul">
				<li><a href="#" style="color:#fff;">About US</a></li>|
				<li><a href="#" style="color:#fff;">Privacy</a></li>|
				<li><a href="#" style="color:#fff;">Secuirty</a></li>|
				<li><a href="#" style="color:#fff;">Terms &amp; condition</a></li>
				<li class="registerexexp_social">
					<span>Follow Us on&nbsp;</span>
					<a href="#"><span><img src="image/facebook_circle-512.png" alt="fb_icon" class="register_fb"></span></a>
					<a href="#" class="fab fa-twitter register_twiet"></a>
					<a href="#" class="fab fa-google register_google"></a>
				</li>
			</ul>
		</div>
	</div>
    <script>
		$("#my_form").submit(function(event){
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
				$("#server-results").html(response);
			});
		});
    </script>
</body>
</html>