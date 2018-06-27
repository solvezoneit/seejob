<?php
$title="Home";
$bntCap="Submit";
include("include/head.php");
$state_id="";
$state_name="";
$state_country_id="";
if(array_key_exists("edit",$_REQUEST))
{
		$bntCap="Update";
		$sql = "SELECT * from  state_tbl where state_id='$_REQUEST[edit]'";
		$result = $conn->query($sql);
		$row = $result->fetch_assoc();
		$state_id=$row['state_id'];
		$state_name=$row['state_name'];
		$state_country_id=$row['state_country_id'];
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

<div class="inner-block">
	<div class="blank">
		<?php
			if(array_key_exists("msg",$_REQUEST))
			{
			?>
				<div class="alert alert-danger" role="alert">
					<button type="button" class="close" data-dismiss="alert" aria-label="Close">  <span aria-hidden="true">&times;</span></button>
					<p><?php echo $_REQUEST['msg']; ?></p>
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
						<select class="form-control" name="state_country_id">
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
										if($s_id1 == $state_country_id)
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
					<th>
						State Name
					</th>
					<th > 
						<div class="row">
							<div class="col-md-8">
								<input type="text" name="state_name" placeholder="State Name" required="" class="form-control" value="<?php echo $state_name; ?>">
							</div>
						</div>
					</th >
					
					<th>
						<input class="btn btn-success" type="submit" name="add_satae" value="<?php echo $bntCap; ?>">
						<input type="hidden" value="<?php echo $state_id ?>" name="state_id">	
					</th>
				</tr>
			</table>
		</form>
		<table id="myTable1" class="table table-striped resposive" >  
			<thead>  
				<tr>
					<td><b>Sr. No.</b></b></td>
					<td><b>Country Name</b></td>
					<td><b>State Name</b></td>
					<td><b>Date</b></td>
					<td><b>Status</b></td>
					<td><b>Action</b></td>
				</tr>
			</thead>
			<?php
				$sr="1";
				$sql = "SELECT * from  state_tbl,country_tbl where state_country_id=country_id  ORDER BY state_id DESC";
				$result = $conn->query($sql);
				if ($result->num_rows > 0) 
				{
					// output data of each row
					while($row = $result->fetch_assoc()) 
					{
						?>
						<tr>
							<td><?php echo $sr; ?></td>
							<td><?php echo $row['country_name']; ?></td>
							<td><?php echo $row['state_name']; ?></td>
							<td><?php echo $row['date']; ?></td>
							<td><a href="activate.php?state_id=<?php echo $row['state_id'];?>">
							<?php
								$sqlstatus = mysqli_query($conn,"select * from state_tbl where state_id='$row[state_id]'");
								$rowstatus = mysqli_fetch_array($sqlstatus);
								if($rowstatus['status']==1)
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
							<td>
								<a href="add-state.php?edit=<?php echo  $row['state_id']; ?>" class="fa fa-edit btn btn-success btn-xs"></a>				
								<a href="#" onClick="delRecord('<?php echo  $row['state_id']; ?>')" class="fa fa-trash btn btn-danger btn-xs"></a>			
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
<input type="hidden" name="delete_state">
</form>
<script>
function delRecord(id)
{
	if(confirm("Are you Soure you want to delete"))
	{
		document.admin.delete_state.value=id;
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