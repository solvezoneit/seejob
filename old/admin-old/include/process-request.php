<?php
include("include/conection.php");
if(isset($_POST["country"]))
	{
		$country = $_POST["country"];
		$sql = "SELECT * from  states  where s_id=' $country' ";
		$result = $conn->query($sql);
		$countryArr= $result->fetch_assoc();
		if($country !== 'Select')
			{
				echo "<div class='row'><div class='col-md-4 text-center'> Locality</div>";
				echo "<div class='col-md-8'><select class='form-control'>";
				$sql = "SELECT * from  cities,states where cities.state_id=states.s_id and state_id='$country' ORDER BY d_name ASC ";
				$result = $conn->query($sql);
				if ($result->num_rows > 0)
					 {
						 echo "<option>Please Select Your Location</option>";
						// output data of each row
						while($row = $result->fetch_assoc()) 
							{
								 echo "<option>". $row['d_name']. "</option>";
							}
					 }
				else
					 {
						 echo "<option> No data </option>";
					 }
			}
			echo "</select></div></div>";
	} 
?>
