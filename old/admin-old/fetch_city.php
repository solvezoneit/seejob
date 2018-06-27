		<div  class="col-md-2 text-center" >City Name</div>
		<div  class="col-md-2">		
			<select class='form-control' name="subcity_city_id" > 
				<?php
				include("include/conection.php");
				$district_id = ($_REQUEST["district_id"] <> "") ? trim($_REQUEST["district_id"]) : "";
				$sql = "SELECT * from  city where city_district_id='$district_id'";
				$result = $conn->query($sql);
				if ($result->num_rows > 0) 
					{
					echo "<option  selected='selected'>Plese Select City Name </option>";
						 while($row = $result->fetch_assoc()) 
							{	
				?>	
				<option  value="<?php echo  $row['city_id']; ?>"><?php echo  $row['city_name']; ?></option>
				<?php
							 }
					}
				else
					{
						echo "<option >No City </option>";
					}
				?>
			</select>
		</div>
		<div class="col-md-2 text-center">
			City | Town | Sector Name  
		</div>
		<div class="col-md-4 text-center">
							<input type="text" name="subcity_name"  placeholder=" Add Sub City Name" class="form-control" required  title="Please Enter City Name " /> 
						</div>
						<div class="col-md-2">
							<input class="btn btn-success" type="submit" name="add_Subcity" value="Submit">	
						</div>