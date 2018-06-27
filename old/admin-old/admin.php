
<?php
$title="Home";
include("include/head.php");
?>


<div class="page-container">
<div class="left-content">
<div class="mother-grid-inner">
   
   
<?php include("include/header.php"); ?>   


<!-- main Content Start --->

<!--inner block start here-->
<div class="inner-block">
    <div class="blank">
	<br><br>
    	<table class="table table-bordered">
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
		  <tr class="active success text-center" >
		  		<td><center>Sr. No.</center></td>
				<td><center>Name</center></td>
				<td><center>Image</center></id>
				<td><center>Email-Id</center></td>
				<td><center>Password</center></td>
				<td><center><center>Action</center></td>
		  </tr>
  
	
<?php
$sr="1";
$sql = "SELECT * from  admin_reg ORDER BY admin_reg_id DESC";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
    // output data of each row
    while($row = $result->fetch_assoc()) 
	{
        //echo "<br> id: ". $row["id"]. " - Name: ". $row["firstname"]. " " . $row["lastname"] . "<br>";
?>
		 <tr>
		  		<td><center><?php echo $sr; //echo  $row['admin_reg_id']; ?></center></td>
				<td><center><?php echo  $row['admin_reg_name']; ?></center></td>
					<td><center><img src="images/<?php echo  $row['uplode_image']; ?>" height="50px"></center></td>
					<td><center><?php echo  $row['admin_reg_email']; ?></center></td>
<td><center><?php echo  $row['admin_reg_password']; ?></center></td>
				<td class="text-center"><center>
				
	<a href="rergistration.php?edit=<?php echo  $row['admin_reg_id']; ?>" class="btn btn-primary a-btn-slide-text">
        <span class="glyphicon glyphicon-edit" aria-hidden="true"></span>
        <span><strong>Edit</strong></span>            
</a>				

				
				</center></td>
		  </tr>
<?php
$sr++;
    }
} else {
?>
<tr>
		  		<td colspan="4" class="text-center">There is No Data </td>
		  </tr>
<?php
}

$conn->close();

?>
</form>
<form name="admin" action="include/query.php" method="get">  	
<input type="hidden" name="delete">
</form>
<script>
function delRecord(id)
{
	if(confirm("Are you Soure you want to delete"))
	{
		document.admin.delete.value=id;
		document.admin.submit();
	}
}
</script>		 
		</table>
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