<?php
$title="Home";
include("include/head.php"); 
?>

<div class="page-container" >	
<div class="left-content">
<div class="mother-grid-inner">
<!--header start here-->
				<div class="header-main">
					<div class="header-left">
							<div class="logo-name">
									 <a href="index.php"><img src="../images/job-logo.png" class="img-responsive" />
									<!--<img id="logo" src="" alt="Logo"/>--> 
								  </a> 								
							</div>
							
							<div class="clearfix"> </div>
						 </div>
						 <div class="header-right">
							<div class="profile_details_left"><!--notifications of menu start -->
								<ul class="nofitications-dropdown">
									<li class="dropdown head-dpdn">
										<a href="#" class="dropdown-toggle" data-toggle="dropdown" aria-expanded="false"><i class="fa fa-envelope"></i><span class="badge">3</span></a>
										<ul class="dropdown-menu">
											<li>
												<div class="notification_header">
													<h3>You have 3 new messages</h3>
												</div>
											</li>
											<li><a href="#">
											   <div class="user_img"><img src="images/p4.png" alt=""></div>
											   <div class="notification_desc">
												<p>Lorem ipsum dolor</p>
												<p><span>1 hour ago</span></p>
												</div>
											   <div class="clearfix"></div>	
											</a></li>
											<li class="odd"><a href="#">
												<div class="user_img"><img src="images/p2.png" alt=""></div>
											   <div class="notification_desc">
												<p>Lorem ipsum dolor </p>
												<p><span>1 hour ago</span></p>
												</div>
											  <div class="clearfix"></div>	
											</a></li>
											<li><a href="#">
											   <div class="user_img"><img src="images/p3.png" alt=""></div>
											   <div class="notification_desc">
												<p>Lorem ipsum dolor</p>
												<p><span>1 hour ago</span></p>
												</div>
											   <div class="clearfix"></div>	
											</a></li>
											<li>
												<div class="notification_bottom">
													<a href="#">See all messages</a>
												</div> 
											</li>
										</ul>
									</li>
									<li class="dropdown head-dpdn">
										<a href="#" class="dropdown-toggle" data-toggle="dropdown" aria-expanded="false"><i class="fa fa-bell"></i><span class="badge blue">3</span></a>
										<ul class="dropdown-menu">
											<li>
												<div class="notification_header">
													<h3>You have 3 new notification</h3>
												</div>
											</li>
											<li><a href="#">
												<div class="user_img"><img src="images/p5.png" alt=""></div>
											   <div class="notification_desc">
												<p>Lorem ipsum dolor</p>
												<p><span>1 hour ago</span></p>
												</div>
											  <div class="clearfix"></div>	
											 </a></li>
											 <li class="odd"><a href="#">
												<div class="user_img"><img src="images/p6.png" alt=""></div>
											   <div class="notification_desc">
												<p>Lorem ipsum dolor</p>
												<p><span>1 hour ago</span></p>
												</div>
											   <div class="clearfix"></div>	
											 </a></li>
											 <li><a href="#">
												<div class="user_img"><img src="images/p7.png" alt=""></div>
											   <div class="notification_desc">
												<p>Lorem ipsum dolor</p>
												<p><span>1 hour ago</span></p>
												</div>
											   <div class="clearfix"></div>	
											 </a></li>
											 <li>
												<div class="notification_bottom">
													<a href="#">See all notifications</a>
												</div> 
											</li>
										</ul>
									</li>	
									<li class="dropdown head-dpdn">
										<a href="#" class="dropdown-toggle" data-toggle="dropdown" aria-expanded="false"><i class="fa fa-tasks"></i><span class="badge blue1">9</span></a>
										<ul class="dropdown-menu">
											<li>
												<div class="notification_header">
													<h3>You have 8 pending task</h3>
												</div>
											</li>
											<li><a href="#">
												<div class="task-info">
													<span class="task-desc">Database update</span><span class="percentage">40%</span>
													<div class="clearfix"></div>	
												</div>
												<div class="progress progress-striped active">
													<div class="bar yellow" style="width:40%;"></div>
												</div>
											</a></li>
											<li><a href="#">
												<div class="task-info">
													<span class="task-desc">Dashboard done</span><span class="percentage">90%</span>
												   <div class="clearfix"></div>	
												</div>
												<div class="progress progress-striped active">
													 <div class="bar green" style="width:90%;"></div>
												</div>
											</a></li>
											<li><a href="#">
												<div class="task-info">
													<span class="task-desc">Mobile App</span><span class="percentage">33%</span>
													<div class="clearfix"></div>	
												</div>
											   <div class="progress progress-striped active">
													 <div class="bar red" style="width: 33%;"></div>
												</div>
											</a></li>
											<li><a href="#">
												<div class="task-info">
													<span class="task-desc">Issues fixed</span><span class="percentage">80%</span>
												   <div class="clearfix"></div>	
												</div>
												<div class="progress progress-striped active">
													 <div class="bar  blue" style="width: 80%;"></div>
												</div>
											</a></li>
											<li>
												<div class="notification_bottom">
													<a href="#">See all pending tasks</a>
												</div> 
											</li>
										</ul>
									</li>	
								</ul>
								<div class="clearfix"> </div>
							</div>
							<!--notification menu end -->
							<div class="profile_details">		
								<ul>
									<li class="dropdown profile_details_drop">
										<a href="#" class="dropdown-toggle" data-toggle="dropdown" aria-expanded="false">
											<div class="profile_img">	
												<span class="prfil-img"><img src="images/p1.png" alt=""> </span> 
												<div class="user-name">
													<p>Admin</p>
													<span><?php echo $_SESSION['user']; ?></span>
												</div>
												<i class="fa fa-angle-down lnr"></i>
												<i class="fa fa-angle-up lnr"></i>
												<div class="clearfix"></div>	
											</div>	
										</a>
										<ul class="dropdown-menu drp-mnu">
											<li> <a href="#"><i class="fa fa-cog"></i> Settings</a> </li> 
											<li> <a href="#"><i class="fa fa-user"></i> Profile</a> </li> 
											<li> <a href="#"><i class="fa fa-sign-out"></i> Logout</a> </li>
										</ul>
									</li>
								</ul>
							</div>
							
							
							<div class="clearfix"> </div>				
						</div>
						<br><br>
					
				     <div class="clearfix"> </div>	
					 	<script>function date_time(id){        date = new Date;        year = date.getFullYear();        month = date.getMonth();        months = new Array('January', 'February', 'March', 'April', 'May', 'June', 'July', 'August', 'September', 'October', 'November', 'December');        d = date.getDate();        day = date.getDay();        days = new Array('Sunday', 'Monday', 'Tuesday', 'Wednesday', 'Thursday', 'Friday', 'Saturday');        H = date.getHours();		ampm = " PM ";		if (H < 12){ampm = " AM "}if (H>12){     H-= 12}        m = date.getMinutes();        if(m<10)        {                m = "0"+m;        }        s = date.getSeconds();        if(s<10)        {                s = "0"+s;        }        result = ''+days[day]+' '+months[month]+' '+d+', '+year+' '+H+':'+m+':'+s+''+ampm;        document.getElementById(id).innerHTML = result;        setTimeout('date_time("'+id+'");','1000');        return true;}</script>        <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />        <title>Display Date and Time in Javascript</title>        <script type="text/javascript" src="date_time.js"></script>          <center><span id="date_time" style="font-size:20px; font-weight:bold;"></span></center>            <script type="text/javascript">window.onload = date_time('date_time');</script><br><h2 style="color:#000"><marquee direction="left" width="50%" bgcolor="856363" style="font-size:20px; font-weight:bold;"><i><font face="Stencil">Welcome Admin Panel<font></i></marquee><marquee direction="right" width="50%" bgcolor="A67D3D" style="font-size:20px; font-weight:bold;"><i><font face="Stencil">Welcome Admin Panel<font></i></marquee><h2>	
</div>

<script>
		$(document).ready(function() {
			 var navoffeset=$(".header-main").offset().top;
			 $(window).scroll(function(){
				var scrollpos=$(window).scrollTop(); 
				if(scrollpos >=navoffeset){
					$(".header-main").addClass("fixed");
				}else{
					$(".header-main").removeClass("fixed");
				}
			 });
			 
		});
</script>
		<!-- /script-for sticky-nav -->
		
		<br><br><br>

<!-- main Content Start --->


<!--inner block start here-->
<div class="inner-block">
    <div class="blank">
    	<!--  Blog Start -->
		<div class="col-md-4 market-update-gd">
				<div class="market-update-block clr-block-1">
					<div class="col-md-8 market-update-left">
						
<?php
$sr="1";
$sql = "SELECT * from  admin_reg ORDER BY admin_reg_id DESC";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
    // output data of each row
    while($row = $result->fetch_assoc()) 
	{
?>
						<h3><?php echo $sr; //echo  $row['admin_reg_id']; ?></h3>
						<h4>Registered User</h4>
						<p>Administrator</p>
<?php
$sr++;
    }
}
 else 
	{
		echo "<h3>0</h3>";	
	}

//$conn->close();
?>
					</div>
					<div class="col-md-4 market-update-right">
						 <label class="dashboard_lable_icon glyphicon glyphicon-user"> </label>
					</div>
				  <div class="clearfix"> </div>
				</div>
			</div>
		<!-- Blog End-->
		<!--  Blog Start -->
		<div class="col-md-4 market-update-gd">
				<div class="market-update-block clr-block-1">
					<div class="col-md-8 market-update-left">
<a href="add-country.php">				
<?php
$sr1="0";
$sql = "SELECT * from  country_tbl";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
    // output data of each row
    while($row = $result->fetch_assoc()) 
	{
	
    $sr1++;}
?>
						<h3><?php echo $sr1; //echo  $row['admin_reg_id']; ?></h3>
						<h4>Total Country</h4>
						<p>&nbsp;</p>
<?php

}
 else 
	{
		echo "<h3>0</h3>";	
	}

//$conn->close();
?>
</a>
					</div>
					<div class="col-md-4 market-update-right">
						 <label class="dashboard_lable_icon glyphicon glyphicon-map-marker"> </label>
					</div>
				  <div class="clearfix"> </div>
				</div>
			</div>
		<!-- Blog End-->
		<!--  Blog Start -->
		<div class="col-md-4 market-update-gd">
				<div class="market-update-block clr-block-1">
					<div class="col-md-8 market-update-left">
		<a href="add-state.php">			
<?php
$sr2="0";
$sql = "SELECT * from  state_tbl";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
    // output data of each row
    while($row = $result->fetch_assoc()) 
	{

    }
	$sr2++;
	echo "<h3>".$sr2."</h3> <h4>Total State</h4><p>&nbsp;</p>";
?>
						
<?php
}
 else 
	{
		echo "<h3>".$sr2."</h3> <h4>Total State</h4><p>&nbsp;</p>";
	}

//$conn->close();
?>
</a>
					</div>
					<div class="col-md-4 market-update-right">
						 <label class="dashboard_lable_icon glyphicon glyphicon-map-marker"> </label>
						 <p></p>
					</div>
				  <div class="clearfix"> </div>
				</div>
			</div>
		<!-- Blog End--><br /><br /><br /><br /><br /><br /><br /><br /><br />
		<!--  Blog Start -->
		<div class="col-md-4 market-update-gd">
				<div class="market-update-block clr-block-1">
					<div class="col-md-8 market-update-left">
		<a href="add-district.php">				
<?php
$sr3="0";
$sql = "SELECT * from  district_tbl";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
    // output data of each row
    while($row = $result->fetch_assoc()) 
	{

    }
	$sr3++;
	echo "<h3>".$sr3."</h3> <h4>Total District</h4><p>&nbsp;</p>";
?>
						
<?php
}
 else 
	{
		echo "<h3>".$sr3."</h3> <h4>Total District</h4><p>&nbsp;</p>";
	}

//$conn->close();
?>
</a>
					</div>
					<div class="col-md-4 market-update-right">
						 <label class="dashboard_lable_icon glyphicon glyphicon-map-marker"> </label>
						 <p></p>
					</div>
				  <div class="clearfix"> </div>
				</div>
			</div>
		<!-- Blog End-->
		<!--  Blog Start -->
		<div class="col-md-4 market-update-gd">
				<div class="market-update-block clr-block-1">
					<div class="col-md-8 market-update-left">
	<a href="add-city.php">					
<?php
$sr4="0";
$sql = "SELECT * from  city_tbl";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
    // output data of each row
    while($row = $result->fetch_assoc()) 
	{

    }
	$sr4++;
	echo "<h3>".$sr4."</h3> <h4>Total City</h4><p>&nbsp;</p>";
?>
						
<?php
}
 else 
	{
		echo "<h3>".$sr4."</h3> <h4>Total City</h4><p>&nbsp;</p>";
	}

//$conn->close();
?>
</a>
					</div>
					<div class="col-md-4 market-update-right">
						 <label class="dashboard_lable_icon glyphicon glyphicon-map-marker"> </label>
						 <p></p>
					</div>
				  <div class="clearfix"> </div>
				</div>
			</div>
		<!-- Blog End-->
		<!--  Blog Start -->
		<div class="col-md-4 market-update-gd">
				<div class="market-update-block clr-block-1">
					<div class="col-md-8 market-update-left">
						
<?php
$sr5="0";
$sql = "SELECT * from  subcity";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
    // output data of each row
    while($row = $result->fetch_assoc()) 
	{

    }
	$sr5++;
	echo "<h3>".$sr5."</h3> <h4>Sector | Sub City | Vilage</h4><p>&nbsp;</p>";
?>
						
<?php
}
 else 
	{
		echo "<h3>".$sr5."</h3> <h4>Sector | Sub City | Vilage</h4><p>&nbsp;</p>";
	}

//$conn->close();
?>
					</div>
					<div class="col-md-4 market-update-right">
						 <label class="dashboard_lable_icon glyphicon glyphicon-map-marker"> </label>
						 <p></p>
					</div>
				  <div class="clearfix"> </div>
				</div>
			</div>
		<!-- Blog End-->
		
		
		
			
			
			
			


		
    </div>
</div>
<!--inner block end here-->



<!-- ----main Content End  --->
<?php include("include/footer.php"); ?>
</div>
</div>
<?php include("include/sidemenu.php"); ?>

<!--scrolling js-->
		<script src="js/jquery.nicescroll.js"></script>
		<script src="js/scripts.js"></script>
		<!--//scrolling js-->
<script src="js/bootstrap.js"> </script>
<!-- mother grid end here-->
</body>
</html>                     