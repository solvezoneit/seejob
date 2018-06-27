<table width="100%">
	<tr>
		<td class="text-center">State Name</td> 
		<td>
			<select class='form-control' name="subcity_state_id" onchange="showState(this);"> 
				<?php
				include("include/conection.php");
				$country_id = ($_REQUEST["country_id"] <> "") ? trim($_REQUEST["country_id"]) : "";
				$sql = "SELECT * from  state where state_country_id='$country_id'";
				$result = $conn->query($sql);
				if ($result->num_rows > 0) 
					{
					echo "<option  selected='selected'  >Plese Select State Name </option>";
						 while($row = $result->fetch_assoc()) 
							{	
				?>	
				<option  value="<?php echo  $row['state_id']; ?>"><?php echo  $row['state_name']; ?></option>
				<?php
							 }
					}
				else
					{
						echo "<option >No State </option>";
					}
				?>
			</select>
		</td>
	</tr>
</table>