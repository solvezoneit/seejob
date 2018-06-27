


<?php
$title="Home";
$bntCap="Submit";
include("include/head.php");
$admin_reg_id="";
$country_name="";
$country_sort_name="";
$country_pin_code="";
if(array_key_exists("edit",$_REQUEST))
	{
		$pgtitle ="Edit Sign Up";
		$bntCap="Update";
		$sql = "SELECT * from  admin_reg where admin_reg_id='$_REQUEST[edit]'";
		$result = $conn->query($sql);
		$row = $result->fetch_assoc();
		$admin_reg_id=$row['admin_reg_id'];
		$admin_reg_name=$row['admin_reg_name'];
		$admin_reg_email=$row['admin_reg_email'];
			$admin_image=$row['uplode_image'];
			$admin_reg_password=$row['admin_reg_password'];
	} 
?>

<div class="page-container">	
   <div class="left-content">
	   <div class="mother-grid-inner">
         <?php include("include/header.php"); ?>   

<!-- main Content Start --->

<!--inner block start here-->
<div class="signup-page-main">
     <div class="signup-main">  	
    	 <div class="signup-head">
				<h1><?php echo $pgtitle; ?></h1>
			</div>
<div class="signup-block">
			
<?php
if(array_key_exists("msg",$_REQUEST))
{
?>
							
				
<div class="alert alert-danger" role="alert">
						<button type="button" class="close" data-dismiss="alert" aria-label="Close">  <span aria-hidden="true">&times;</span></button>
						<p class="text-center"><?php echo $_REQUEST['msg']; ?></p>
</div>
				
<?php
} 
?>


				<form action="include/query.php" method="post" enctype="multipart/form-data">
				<h5>Name</h5>
				
					<input type="text" name="admin_reg_name" value="<?php echo $admin_reg_name; ?>" placeholder="Name" required="">
					
					
						<h5>Image</h5>
					<input type="file" name="ImageFile">
					<img src="images/<?php echo $admin_image;?>" height="50px">
					
					
				<h5>Email</h5>
					<input type="text" name="admin_reg_email" value="<?php echo $admin_reg_email ?>" placeholder="Email" required="">
					
					<?php
					if(array_key_exists("edit",$_REQUEST)){}
					else
						{
					?>
						
							<input type="password" name="admin_reg_password" class="lock" placeholder="Password">
					<?php } ?>
					<h5>Password</h5>
					<input type="text" name="admin_reg_password" value="<?php echo $admin_reg_password; ?>" placeholder="Password" required="">
					
					<input type="submit" name="admin_reg" value="<?php echo $bntCap; ?>">
					<input type="hidden" value="<?php echo $admin_reg_id ?>" name="admin_reg_id">														
				</form>
				
				
				
				
				<div class="sign-down">
				
			<!--	
				<h4>Already have an account? <a href="login.html"> Login here.</a></h4>
			-->
				
				  <h5><a href="index.html">Go Back to Home</a></h5>
				</div>
			</div>
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