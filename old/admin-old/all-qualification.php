<?php
$title="Home";
$bntCap="Submit";
include("include/head.php"); 
?>
<div class="page-container" >	
   <div class="left-content">
	   <div class="mother-grid-inner">
         <?php include("include/header.php"); ?>   

<!-- Multiple Select Box Start --->
<script src="jquery.min.js"></script>
<script type="text/javascript">
$(document).ready(function(){
    $('#country').on('change',function(){
        var countryID = $(this).val();
        if(countryID){
            $.ajax({
                type:'POST',
                url:'ajaxData.php',
                data:'country_id='+countryID,
                success:function(html){
                    $('#state').html(html);
                    $('#city').html('<option value="">Select state first</option>'); 
                }
            }); 
        }else{
            $('#state').html('<option value="">Select country first</option>');
            $('#city').html('<option value="">Select state first</option>'); 
        }
    });
    
    $('#state').on('change',function(){
        var stateID = $(this).val();
        if(stateID){
            $.ajax({
                type:'POST',
                url:'ajaxData.php',
                data:'state_id='+stateID,
                success:function(html){
                    $('#city').html(html);
                }
            }); 
        }else{
            $('#city').html('<option value="">Select state first</option>'); 
        }
    });
});
</script>
<!--Multiple Select Box start here-->
<div class="inner-block">
    <div class="blank">
		
		 <select name="country" id="country">
        		<?php
							$sql = "SELECT * from  highest_qualification";
							$result = $conn->query($sql);
							
							if ($result->num_rows > 0) 
								{
									echo "<option> Please Select Highest Qualification</option>";
									// output data of each row
									while($row = $result->fetch_assoc()) 
									{
										$sel="";
										if($row['highest_qualification_id'] == $qs_hq_id)
											{
												$sel="selected";
											}
										?>
										<option value="<?php echo $row['highest_qualification_id']; ?>" <?php echo $sel;?> ><?php echo $row['highest_qualification_name']; ?></option>	
										<?php
									}
								}
							else
								{
									echo "<option> There Is No Data</option>";
								}
						?>
		  </select><br />
	<select name="state" id="state">
        <option value="">Select country first</option>
    </select><br />
    
    <select name="city" id="city">
        <option value="">Select state first</option>
    </select>
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
<script>
$(document).ready(function(){
    $('#myTable1').dataTable();
});
</script>
</html>                     