
<?php
$title="Home";
$bntCap="Submit";
include("include/head.php");
$district_id="";
$district_name="";
$district_country_id="";
$district_state_id="";
if(array_key_exists("edit",$_REQUEST))
{
	$pgtitle ="Edit Sign Up";
	$bntCap="Update";
	$sql = "SELECT * from  district_tbl where district_id='$_REQUEST[edit]'";
	$result = $conn->query($sql);
	$row = $result->fetch_assoc();
	$district_id=$row['district_id'];
	$district_name=$row['district_name'];
	$district_country_id=$row['district_country_id'];
	$district_state_id=$row['district_state_id'];
} 
?>
<!-- paging -->
<link href="http://maxcdn.bootstrapcdn.com/bootstrap/3.2.0/css/bootstrap.min.css" rel="stylesheet">
<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.7.1/jquery.min.js"></script>
<link rel="stylesheet" href="http://cdn.datatables.net/1.10.2/css/jquery.dataTables.min.css"></style>
<script type="text/javascript" src="http://cdn.datatables.net/1.10.2/js/jquery.dataTables.min.js"></script>
<script type="text/javascript" src="http://maxcdn.bootstrapcdn.com/bootstrap/3.2.0/js/bootstrap.min.js"></script>
<!-- paging -->
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
								<div class="alert alert-danger" role="alert">
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
								<th> Country Name</th>
								<td>
								<select class="form-control" name="district_country_id">
									<option value="" >Plese Select Country Name </option>
									<?php
									$sr="1";
									$state_detail_id="";
									$sel="";
									$sql = "SELECT * from  country_tbl ORDER BY country_id DESC";
									$result = $conn->query($sql);
									if ($result->num_rows > 0) 
									{
										// output data of each row
										while($row = $result->fetch_assoc()) 
										{
											$s_id1=$row['country_id'];
											if($s_id1 == $district_country_id)
											{
												$sel="selected";
											}
											else
											{
												$sel="";
											}		
											?>
											<option <?php echo $sel; ?>  value="<?php echo  $s_id1; ?>"><?php echo  $row['country_name']; ?></option>
											<?php
											$sr++;
										}
									}
									?>
								</select>
								</td>
								<th class="text-center">
									State Name
								</th>
								<th> 
									<div class="row">
										<div class="col-md-6">
											<select class="form-control" name="district_state_id">
											<?php
												$sr="1";
												$state_detail_id="";
												$sel="";
												$sql = "SELECT * from  state_tbl ORDER BY state_name DESC";
												$result = $conn->query($sql);
												if ($result->num_rows > 0) 
												{
													echo "<option >Plese Select State Name </option>";
													// output data of each row
													while($row = $result->fetch_assoc()) 
													{
														if($row['state_id'] == $district_state_id)
														{
															$sel="selected";
														}
														else
														{
															$sel="";
														}	
														?>
															<option <?php echo $sel; ?>  value="<?php echo  $row['state_id']; ?>"><?php echo  $row['state_name']; ?></option>
														<?php
														$sr++;
													}
												}
												else
												{
													echo "<option >Empty</option>";
												}
											?>
											</select>
										</div>
										<div class="col-md-6">
											<input type="text" name="district_name" placeholder="District Name" required="" class="form-control" value="<?php echo $district_name; ?>">
										</div>
									</div>
								</th >
								
								<th>
									<input class="btn btn-success" type="submit" name="add_district" value="<?php echo $bntCap; ?>">
									<input type="hidden" value="<?php echo $district_id ?>" name="district_id">	
								</th>
							</tr>
						</table>
					</form>
					<table id="myTable3" class="table table-striped resposive" >  
						<thead>
							<tr>
								<td><b>Sr. No.</b></td>
								<td><b>Country Name</b></td>
								<td><b>State Name</b></td>
								<td><b>District Name</b></td>
								<td><b>Status</b></td>
								<td><b>Action</b></td>
							</tr>
						</thead>
						<?php
						$sr="1";
						$sql = "SELECT * from  state_tbl,country_tbl,district_tbl where state_country_id=country_id and district_country_id=state_country_id and district_state_id=state_id  ORDER BY district_id DESC";
						$result = $conn->query($sql);

						if ($result->num_rows > 0) 
						{
							// output data of each row
							while($row = $result->fetch_assoc()) 
							{
								?>
								<tr>
									<td><?php echo $sr; ?></td>
									<td><?php echo  $row['country_name']; ?></td>
									<td><?php echo  $row['state_name']; ?></td>
									<td><?php echo  $row['district_name']; ?></td>
									<td><a href="activate.php?district_id=<?php echo $row['district_id'];?>">
									<?php
										$sqldist = mysqli_query($conn,"select * from district_tbl where district_id='$row[district_id]'");
										$rowdist = mysqli_fetch_array($sqldist);
										if($rowdist['status']==1)
										{
											echo '<i class="fa fa-check btn btn-success btn-xs"></i>';
										}
										else
										{
											echo '<i class="fa fa-ban btn btn-danger btn-xs"></i>';
										}
									?>
									</a>
									</td>			
									<td class="text-center">
									<!--
									<a href="#" class="btn btn-primary a-btn-slide-text">
										<span class="glyphicon glyphicon-eye-open" aria-hidden="true"></span>
										<span><strong>View</strong></span>            
									</a>
									-->
									<a href="add-district.php?edit=<?php echo  $row['district_id']; ?>" class="btn btn-primary btn-xs fa fa-edit"></a>
									<a href="#" onClick="delRecord('<?php echo  $row['district_id']; ?>')" class="btn btn-danger btn-xs fa fa-trash"></a>
									</td>
								</tr>
							  
								<script>
								$(document).ready(function(){
								$("#mytable #checkall").click(function () {
									if ($("#mytable #checkall").is(':checked')) {
											$("#mytable input[type=checkbox]").each(function () {
												$(this).prop("checked", true);
											});

										} else {
											$("#mytable input[type=checkbox]").each(function () {
												$(this).prop("checked", false);
											});
										}
									});
									$("[data-toggle=tooltip]").tooltip();
								});
								</script>
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
			<input type="hidden" name="delete_district">
			</form>
			<script>
			function delRecord(id)
			{
				if(confirm("Are you Soure you want to delete"))
				{
					document.admin.delete_district.value=id;
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
    $('#myTable3').dataTable();
});
</script>

</html>                     