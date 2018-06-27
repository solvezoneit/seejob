<table width="100%">
	<tr>
		<td class="text-center">State Name</td> 
		<td>
			<select class='form-control' name="subcity_district_id" onchange="showDistrict(this);"> 
				<?php
				include("include/conection.php");
				$state_id = ($_REQUEST["state_id"] <> "") ? trim($_REQUEST["state_id"]) : "";
				$sql = "SELECT * from  district where district_state_id='$state_id'";
				$result = $conn->query($sql);
				if ($result->num_rows > 0) 
					{
					echo "<option  selected='selected'>Plese Select District Name </option>";
						 while($row = $result->fetch_assoc()) 
							{	
				?>	
				<option value="<?php echo  $row['district_id']; ?>"><?php echo  $row['district_name']; ?></option>
				<?php
							 }
					}
				else
					{
						echo "<option >No District </option>";
					}
				?>
			</select>
		</td>
	</tr>
</table>