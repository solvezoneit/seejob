<?php
$title="Home";
$bntCap="Submit";
$city_id="";
$city_name="";
$city_country_id="";
$city_state_id="";
$city_district_id="";
include("include/head.php");
###################    Insert  Update  Delete Start  ###################
               ####  Edit ########
			   
if(array_key_exists("edit",$_REQUEST))
	{
		$bntCap="Update";
		$sql = "SELECT * from  city_tbl where city_id='$_REQUEST[edit]'";
		$result = $conn->query($sql);
		$row = $result->fetch_assoc();
		$city_id=$row['city_id'];
		$city_name=$row['city_name'];
		$city_country_id=$row['city_country_id'];
		$city_state_id=$row['city_state_id'];
		$city_district_id=$row['city_district_id'];
	}
?>

<!-- Paging Start -->
<link href="http://maxcdn.bootstrapcdn.com/bootstrap/3.2.0/css/bootstrap.min.css" rel="stylesheet">
<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.7.1/jquery.min.js"></script>
<link rel="stylesheet" href="http://cdn.datatables.net/1.10.2/css/jquery.dataTables.min.css"></style>
<script type="text/javascript" src="http://cdn.datatables.net/1.10.2/js/jquery.dataTables.min.js"></script>
<!-- Paging end -->
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
<!---Start -->
	<table class="table table-bordered">
			<tr>
				<td> <?php ?>
					<form name="city_request" action="include/query.php" method="post" enctype="multipart/form-data">
					<div class="row form-group" >
						<div class="col-md-2 text-center">
							State Name  
						</div>
						<div class="col-md-2">
							<select class="form-control" name="city_state_id" required> 
								
<?php
$sql = "SELECT * from  state_tbl";
$result = $conn->query($sql);
if ($result->num_rows > 0) 
	{
	echo "<option >Plese Select State Name </option>";
		 while($row = $result->fetch_assoc()) 
			{
				$sel="";
				if($row['state_id'] == $city_state_id)
					{
						$sel="selected";
					}	
?>	
<option <?php echo $sel; ?>   value="<?php echo  $row['state_id']; ?>"><?php echo  $row['state_name']; ?></option>
<?php
			 }
	}
else
	{
		echo "<option >No State </option>";
	}
?>
							 </select>
						</div>
						<div class="col-md-2 text-center">
							District Name 
						</div>
						<div class="col-md-2">
							<select class="form-control" name="city_district_id">
								
<?php
$sql1 = "SELECT * from  district_tbl";
$result1 = $conn->query($sql1);
	if ($result1->num_rows > 0) 
		{
			echo "<option >Plese Select District Name </option>";
			// output data of each row
			while($row = $result1->fetch_assoc()) 
				{
					$sel1="";
					if($row['district_id'] == $city_district_id)
						{
							$sel1="selected";
						}	
?>	
					<option <?php echo $sel1; ?>  value="<?php echo  $row['district_id']; ?>"><?php echo  $row['district_name']; ?></option>
<?php
				}
		}
	else
		{
			echo "<option >No Distrct Name </option>";
		}
?>
							 </select>
						</div>
						<div class="col-md-1 text-center">
							Location Name
						</div>
						<div class="col-md-3 text-center">
							<div class="row">
								<div class="col-md-7">
								<input type="text" name="city_name" value="<?php echo $city_name; ?>" placeholder=" Add Location" class="form-control" required  title="Please Enter Location " />
								</div>
								<div class="col-md-2">
									<input class="btn btn-success" type="submit" name="add_city" value="<?php echo $bntCap; ?>">
									<input type="hidden" value="<?php echo $city_id ?>" name="city_id">	
								</div>
							</div>
							
						</div>
						
					</div>
					</form>
				</td>
</tr>

</table>

	<table id="myTable" class="table table-striped table-bordered responsive" width="100%" >  
        <thead>  
          <tr>
		  		<td><center>Sr. No.</center></td>
				<td><center>State Name</center></td>
				<td><center>District Name</center></td>
				<td><center>Location Name</center></td>
				<td><center>Action</center></td>
		  </tr>
        </thead>  
        <tbody>  
		
<?php
$sr="1";
$sql = "SELECT * from city_tbl,district_tbl,state_tbl,country_tbl where city_district_id=district_id and city_state_id=state_id and city_country_id=country_id ORDER BY city_id DESC";
$result = $conn->query($sql);
if($result-> num_rows > 0) 
	{
		// output data of each row
		while($row = $result->fetch_assoc()) 
		{
		?>
			 <tr>
					<td><center><?php echo $sr; ?> </center></td>
					<td><center><?php //echo  $row['state_district_city_detail']; ?><?php echo  $row['state_name']; ?></center></td>
					<td><center><?php //echo  $row['city_detail_district_id']; ?><?php echo  $row['district_name']; ?></center></td>
					<td><center><?php echo  $row['city_name']; ?></center></td>
					<td class="text-center"><center>
					
<a href="add-city.php?edit=<?php echo  $row['city_id']; ?>" class="btn btn-primary a-btn-slide-text">
        <span class="glyphicon glyphicon-edit" aria-hidden="true"></span>
        <span><strong>Edit</strong></span>            
</a>				
				
	  	<a href="#" onClick="delRecord('<?php echo  $row['city_id']; ?>')" class="btn btn-danger a-btn-slide-text">
       <span class="glyphicon glyphicon-remove" aria-hidden="true"></span>
        <span><strong>Delete</strong></span>            
    </a>				
					
					
					
					
					
					</center></td>
			  </tr>
<?php
		$sr++;
		}
	}
$conn->close();
?>          
        </tbody>  
    </table>  
<script>
$(document).ready(function(){
    $('#myTable').dataTable();
});
</script>

<!--- end -->
    
	<br />	
		
    </div>
</div>
<!--inner block end here-->
</form>
<form name="admin" action="include/query.php" method="get">       	
<input type="hidden" name="delete_city">
</form>
<script>
function delRecord(id)
{
	if(confirm("Are you Soure you want to delete"))
	{
		document.admin.delete_city.value=id;
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
</html>                     