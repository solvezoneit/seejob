<?php
include("include/conection.php");
if(isset($_POST["country"]))
	{
		$country = $_POST["country"];
		$sql = "SELECT * from  country  where country_id=' $country' ";
		$result = $conn->query($sql);
		$countryArr= $result->fetch_assoc();
		if($country !== 'Select')
			{
				//echo "<div class='row'><div class='col-md-4 text-center'> Locality</div>";
				//echo "<div class='col-md-8'><select class='form-control'>";
				echo "<select class='state form-control' name='subcity_state_id' required> ";
				$sql = "SELECT * from  country,state where state_country_id=country_id and state_country_id='$country' ORDER BY state_name ASC ";
				$result = $conn->query($sql);
				if ($result->num_rows > 0)
					 {
						 echo "<option>Please Select Your Location</option>";
						// output data of each row
						while($row = $result->fetch_assoc()) 
							{
								 echo "<option>". $row['state_name']. "</option>";
							}
					 }
				else
					 {
						 echo "<option> No data </option>";
					 }
			}
			echo "</select>";
	} 
###################################################
if(isset($_POST["state"]))
	{
		$state = $_POST["state"];
		$sql = "SELECT * from  state  where state_id=' $state' ";
		$result = $conn->query($sql);
		$stateArr= $result->fetch_assoc();
		if($state !== 'Select')
			{
				//echo "<div class='row'><div class='col-md-4 text-center'> Locality</div>";
				//echo "<div class='col-md-8'><select class='form-control'>";
				echo "<select class='form-control' name='subcity_state_id' required> ";
				$sql = "SELECT * from  district,state where district_state_id=state_id and district_state_id='$state' ORDER BY state_name ASC ";
				$result = $conn->query($sql);
				if ($result->num_rows > 0)
					 {
						 echo "<option>Please Select Your Location</option>";
						// output data of each row
						while($row = $result->fetch_assoc()) 
							{
								 echo "<option>". $row['state_name']. "</option>";
							}
					 }
				else
					 {
						 echo "<option> No data </option>";
					 }
			}
			echo "</select>";
	} 
?>
<script>
$(document).ready(function(){
    $("select.state").change(function(){
        var selectedstate = $(".state option:selected").val();
        $.ajax({
            type: "POST",
            url: "process-request.php",
            data: { state : selectedstate } 
        }).done(function(data){
            $("#response1").html(data);
        });
    });
});

</script>