<?php
$title="Home";
$bntCap="Submit";
include("include/head.php");
$country_id="";
$country_name="";
$country_sort_name="";
$country_pin_code="";
if(array_key_exists("edit",$_REQUEST))
{
	$bntCap="Update";
	$sql = "SELECT * from  country_tbl where country_id='$_REQUEST[edit]'";
	$result = $conn->query($sql);
	$row = $result->fetch_assoc();
	$country_id=$row['country_id'];
	$country_name=$row['country_name'];
	$country_pin_code=$row['countrycode'];
} 
?>

<link href="http://maxcdn.bootstrapcdn.com/bootstrap/3.2.0/css/bootstrap.min.css" rel="stylesheet">
<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.7.1/jquery.min.js"></script>
<link rel="stylesheet" href="http://cdn.datatables.net/1.10.2/css/jquery.dataTables.min.css"></style>
<script type="text/javascript" src="http://cdn.datatables.net/1.10.2/js/jquery.dataTables.min.js"></script>
<script type="text/javascript" src="http://maxcdn.bootstrapcdn.com/bootstrap/3.2.0/js/bootstrap.min.js"></script>
<div class="page-container" >	
	<div class="left-content">
		<div class="mother-grid-inner">
        <?php include("include/header.php"); ?>   

		<!-- main Content Start --->

		<!--inner block start here-->
		<div class="inner-block">
			<div class="blank">
			<?php
			if(array_key_exists("msg",$_REQUEST))
			{
				?>
				<div class="alert alert-info" role="alert">
					<button type="button" class="close" data-dismiss="alert" aria-label="Close">  <span aria-hidden="true">&times;</span></button>
					<p class="text-center"><?php echo $_REQUEST['msg']; ?></p>
				</div>
				<?php
			} 
			?>
			<br />

			
			<form action="include/query.php" method="post" enctype="multipart/form-data">
				<table class="table table-bordered">
					<tr>
						<th class="text-center">Country Name</th>
						<th ><input type="text" name="country_name" value="<?php echo $country_name; ?>" placeholder="Country Name" required="" class="form-control"></th>
						<th>Country Code</th>
						<td><input type="text" name="countrycode" value="<?php echo $country_pin_code; ?>" placeholder="Pin Name"  class="form-control"></td>
						<th>
							<input class="btn btn-success" type="submit" name="add_country" value="<?php echo $bntCap; ?>">
							<input type="hidden" value="<?php echo $country_id ?>" name="country_id">	
						</th>
					</tr>
				</table>
			</form>
					
				<table id="myTable1" class="table table-striped resposive"  width="100%">  
					<thead>
						<tr>
							<td><center><b>Sr. No.</b></center></td>
							<td><center><b>Country Name</b></center></td>
							<td><center><b>Pin Code</b></center></td>
							<td><center><b>Date</b></center></td>
							<td><center><b>Active & Deactive</b></center></td>
							<td><center><b>Action</b></center></td>
						</tr>
					</thead>
					<?php
					$sr="1";
					$sql = "SELECT * from  country_tbl ORDER BY country_id DESC";
					$result = $conn->query($sql);
					if ($result->num_rows > 0) 
					{
						// output data of each row
						while($row = $result->fetch_assoc()) 
						{
							?>
							<tr>
								<td><center><?php echo $sr; ?></center></td>
								<td><center><?php echo  $row['country_name']; ?></center></td>
								<td><center><?php echo  $row['countrycode']; ?></center></td>
								<td><center><?php echo  $row['date']; ?></center></td>
								<td>
									<a href="activate.php?country_id=<?php echo $row['country_id'];?>">
										<center><img src="
										<?php
										if($row['status']==1)
										{
											echo $img="images/success.gif";
										}
										else
										{
											echo $img="images/deactivate.gif";
										}
										?>"/>
										</center>
									</a>
								</td>
								<td class="text-center">
									<a href="add-country.php?edit=<?php echo  $row['country_id']; ?>" class="glyphicon glyphicon-edit btn btn-success btn-xs"></a>				
									<a href="#" onClick="delRecord('<?php echo  $row['country_id']; ?>')" class="glyphicon glyphicon-trash btn btn-danger btn-xs"></a>
								</td>
							</tr>
							<?php
							$sr++;
						}
					}
					$conn->close();
					?>
				</table>
			</div>
		</div>
		<!--inner block end here-->

		</form>
		<form name="admin" action="include/query.php" method="get">       	
			<input type="hidden" name="delete_country">
		</form>
		<script>
		function delRecord(id)
		{
			if(confirm("Are you Soure you want to delete"))
			{
				document.admin.delete_country.value=id;
				document.admin.submit();
			}
		}
		</script>	

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
<script>
$(document).ready(function(){
    $('#myTable1').dataTable();
});
</script>
</html>