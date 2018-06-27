<?php
$title="Home";
$bntCap="Submit";
$subcity_id="";
$subcity_name="";
$subcity_country_id="";
$subcity_state_id="";
$subcity_district_id="";
$subcity_city_id="";
include("include/head.php");
###################    Insert  Update  Delete Start  ###################
               ####  Edit ########
if(array_key_exists("edit",$_REQUEST))
	{
		$bntCap="Update";
		$sql = "SELECT * from  subcity where subcity_id='$_REQUEST[edit]'";
		$result = $conn->query($sql);
		$row = $result->fetch_assoc();
		$subcity_id=$row['subcity_id'];
		$subcity_name=$row['subcity_name'];
		$subcity_country_id=$row['subcity_country_id'];
		$subcity_state_id=$row['subcity_state_id'];
		$subcity_district_id=$row['subcity_district_id'];
		$subcity_city_id=$row['subcity_city_id'];
	}
?>
<!-- Paging Start -->
<link href="http://maxcdn.bootstrapcdn.com/bootstrap/3.2.0/css/bootstrap.min.css" rel="stylesheet">
<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.7.1/jquery.min.js"></script>
<link rel="stylesheet" href="http://cdn.datatables.net/1.10.2/css/jquery.dataTables.min.css"></style>
<script type="text/javascript" src="http://cdn.datatables.net/1.10.2/js/jquery.dataTables.min.js"></script>
<!-- Paging end -->

<!--  Select start -->

<!-- Select end -->


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
						<?php
							if(array_key_exists("edit",$_REQUEST))
								{
						?>
									<div class="row form-group" >
									  <div class="col-lg-12 text-center">
											<div class="row">
												<div class="col-lg-4">
													City | Town | Sector Name  	
												</div>
												<div class="col-lg-4">
													<input type="text" value="<?php echo $subcity_name; ?>" name="subcity_name"  placeholder=" Add Sub City Name" class="form-control" required  title="Please Enter City Name " /> 
												</div>
												<div class="col-lg-2">
													<input type="hidden" name="subcity_id" value="<?php echo $subcity_id;?>" />
													<input class="btn btn-success" type="submit" name="add_Subcity" value="Update">	
												</div>
											</div>
									  </div>
									</div>
						<?php
								}
							else
								{
						?>
									<div class="row form-group" >
										<div class="col-md-2 text-center">
											Country Name  
										</div>
										<div class="col-md-2">
											<select class="form-control" name="subcity_country_id" onChange="showCountry(this);">  								
												<?php
												$sql = "SELECT * from  country";
												$result = $conn->query($sql);
												if ($result->num_rows > 0) 
													{
													echo "<option >Plese Select Country Name </option>";
														 while($row = $result->fetch_assoc()) 
															{
																$sel="";
																if($row['country_id'] == $subcity_country_id)
																	{
																		$sel="selected";
																	}	
												?>	
												<option <?php echo $sel; ?>   value="<?php echo  $row['country_id']; ?>"><?php echo  $row['country_name']; ?></option>
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
										<div class="col-md-4 text-center" id="output1" ></div>
										<div  class="col-md-4 text-center"   id="output2"></div>
									</div>
									<div class="row form-group"  id="output3" >
									</div>
						<?php
								}
						?>
					</form>
				</td>
			</tr>
		</table>
	<table id="myTable" class="table table-striped table-bordered responsive" width="100%" >  
        <thead>  
          <tr>
		  		<td>Sr. No.</td>
				<td>Country Name</td>
				<td>State Name</td>
				<td>District Name</td>
				<td>City Name</td>
				<td>City | Sector | Town Name</td>
				<td>Action</td>
		  </tr>
        </thead>  
        <tbody>  
 <?php
$sr="1";
$sql = "SELECT * from subcity,city,district,state,country where subcity_country_id=country_id and subcity_state_id=state_id and subcity_district_id=district_id and subcity_city_id=city_id ORDER BY subcity_id DESC";
$result = $conn->query($sql);
if($result-> num_rows > 0) 
	{
		// output data of each row
		while($row = $result->fetch_assoc()) 
		{
		?>
			 <tr>
					<td><?php echo $sr; ?> </td>
					<td><?php //echo  $row['state_district_city_detail']; ?><?php echo  $row['country_name']; ?></td>
					<td><?php //echo  $row['state_district_city_detail']; ?><?php echo  $row['state_name']; ?></td>
					<td><?php //echo  $row['city_detail_district_id']; ?><?php echo  $row['district_name']; ?></td>
					<td><?php echo  $row['city_name']; ?></td>
					<td><?php echo  $row['subcity_name']; ?></td>
					<td class="text-center">
					
					<a href="add-sub-city.php?edit=<?php echo  $row['subcity_id']; ?>"><label class="glyphicon glyphicon-edit"></label></a>
					<a href="#" onClick="delRecord('<?php echo  $row['subcity_id']; ?>')"> <label class="glyphicon glyphicon-trash"></label></a>
					</td>
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
<input type="hidden" name="delete_subcity">
</form>
<script>
function delRecord(id)
{
	if(confirm("Are you Soure you want to delete"))
	{
		document.admin.delete_subcity.value=id;
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
<script src="jquery-1.9.0.min.js"></script>
        <script>
                    function showCountry(sel) {
                        var country_id = sel.options[sel.selectedIndex].value;
                        $("#output1").html("");
                        $("#output2").html("");
						$("#output3").html("");
                        if (country_id.length > 0) {

                            $.ajax({
                                type: "POST",
                                url: "fetch_state.php",
                                data: "country_id=" + country_id,
                                cache: false,
                                beforeSend: function() {
                                    $('#output1').html('<img src="loader.gif" alt="" width="24" height="24">');
                                },
                                success: function(html) {
                                    $("#output1").html(html);
                                }
                            });
                        }
                    }
					
					 

                    function showState(sel) {
                        var state_id = sel.options[sel.selectedIndex].value;
						 if (state_id.length > 0) {
                            $.ajax({
                                type: "POST",
                                url: "fetch_district.php",
                                data: "state_id=" + state_id,
                                cache: false,
                                beforeSend: function() {
                                    $('#output2').html('<img src="loader.gif" alt="" width="24" height="24">');
                                },
                                success: function(html) {
                                    $("#output2").html(html);
                                }
                            });
                        } else {
                            $("#output2").html("");
                        }
                    }
					
					
					function showDistrict(sel) {
                        var district_id = sel.options[sel.selectedIndex].value;
						if (district_id.length > 0) {
                            $.ajax({
                                type: "POST",
                                url: "fetch_city.php",
                                data: "district_id=" + district_id,
                                cache: false,
                                beforeSend: function() {
                                    $('#output3').html('<img src="loader.gif" alt="" width="24" height="24">');
                                },
                                success: function(html) {
                                    $("#output3").html(html);
                                }
                            });
                        } else {
                            $("#output3").html("");
                        }
                    }
					
					
					
        </script>
</html>                     