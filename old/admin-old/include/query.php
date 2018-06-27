<?php  
include("conection.php");
#####################################  Login  Page  Start ######################################
if(array_key_exists("Admin_login",$_REQUEST))
{
	$sql="SELECT * from  admin_reg where admin_reg_email='$_REQUEST[admin_reg_email]' and admin_reg_password='$_REQUEST[admin_reg_password]'";
	$result = $conn->query($sql);
	if ($result->num_rows > 0)
	{
		// output data of each row
		$row = $result->fetch_assoc();
		if($row['admin_reg_password']==$_REQUEST['admin_reg_password'])
		{
			$_SESSION['user']=$row[admin_reg_name];
			header("location:../index.php");
		}
		else
		{
			$msg="Invalid Password! try again";
			header("Location:../login.php?msg=$msg ");
		}
	}
	else
	{
		$msg="Invalid Password! try again";
		header("Location:../login.php?msg=$msg ");
	}
}
#####################################  ----- End   --------------   ##############################################
################################   ---     Admin  Insert Update & Delete  Start  ---     ############################
//////// Registration (Insert & Update ) /////////
if(array_key_exists("admin_reg",$_REQUEST))
{
	if($_REQUEST['admin_reg']=="Submit")
	{
		$pass=md5($_REQUEST['admin_reg_password']);
		$sql="insert into admin_reg set
		admin_reg_name='$_REQUEST[admin_reg_name]',
		admin_reg_email='$_REQUEST[admin_reg_email]',
		admin_reg_password='$_REQUEST[admin_reg_password]'";
		if ($conn->query($sql) === TRUE) 
		{
			$msg= "Record Save successfully";
			header("Location:../rergistration.php?msg=$msg ");
		} 
		else 
		{
			echo "Error: " . $sql . "<br>" . $conn->error;
		}		
	}
	if($_REQUEST['admin_reg']=="Update")
	{
		$dt=time();
		$pass=md5($_REQUEST['admin_reg_password']);
		date_default_timezone_set('Asia/Calcutta');
		$date=date("l / d-m-Y / h:i:s (A)");
		$Destination = '../images';
		if(!isset($_FILES['ImageFile']) || !is_uploaded_file($_FILES['ImageFile']['tmp_name']))
		{
		 //   die('Something went wrong with Upload!');
		}
		$RandomNum   = rand(0, 9999999999);
		$ImageName      = str_replace(' ','-',strtolower($_FILES['ImageFile']['name']));
		$ImageType      = $_FILES['ImageFile']['type']; //"image/png", image/jpeg etc.
		$ImageExt = substr($ImageName, strrpos($ImageName, '.'));
		$ImageExt = str_replace('.','',$ImageExt);
		$ImageName      = preg_replace("/\.[^.\s]{3,4}$/", "", $ImageName);
		//Create new image name (with random number added).
		$NewImageName = $ImageName.'-'.$RandomNum.'.'.$ImageExt;
		$move= move_uploaded_file($_FILES['ImageFile']['tmp_name'], "$Destination/$NewImageName");		
		if($move)
		{
			$sql="Update admin_reg set
			admin_reg_name='$_REQUEST[admin_reg_name]',
			admin_reg_email='$_REQUEST[admin_reg_email]',
			admin_reg_password='$_REQUEST[admin_reg_password]',admin_reg_date='$date',uplode_image='$NewImageName' where admin_reg_id='$_REQUEST[admin_reg_id]'";
			if ($conn->query($sql) === TRUE) 
			{
				$msg= "Record Updated successfully";
				header("Location:../admin.php?msg=$msg ");
			} 
			else 
			{
				echo "Error: " . $sql . "<br>" . $conn->error;
			}
		}
		else
		{
			$sql2="Update admin_reg set
			admin_reg_name='$_REQUEST[admin_reg_name]',
			admin_reg_email='$_REQUEST[admin_reg_email]',
			admin_reg_password='$_REQUEST[admin_reg_password]',admin_reg_date='$date' where admin_reg_id='$_REQUEST[admin_reg_id]'";
			if ($conn->query($sql2) === TRUE) 
			{
				$msg= "Record Updated successfully";
				header("Location:../admin.php?msg=$msg ");
			} 
			else 
			{
				echo "Error: " . $sql2 . "<br>" . $conn->error;
			}
		}	
	}
}

//////////////////////// Delete ////////////////////////////////////////
if(array_key_exists('delete',$_REQUEST))
{
	echo $sql="delete from admin_reg where admin_reg_id=$_REQUEST[delete]";
	if ($conn->query($sql) === TRUE) 
	{
		$msg= "Record Deleted Successfully";
		header("Location:../view_rergistration.php?msg=$msg ");
	} 
	else 
	{
		echo "Error: " . $sql . "<br>" . $conn->error;
	}
}
################################   ---     Admin  Insert Update & Delete  End  ---     ############################
//////////////////////////////////////////////////////
							
							
							
							
#################-------------------------         Add country  Insert  Update & Delete                 -------------------#####################################
if(array_key_exists("add_country",$_REQUEST))
{
	if($_REQUEST['add_country']=="Submit")
	{
		date_default_timezone_set('Asia/Calcutta');
		$date=date("l / d-m-Y / h:i:s (A)");
		$sql="insert into country_tbl set
		country_name='$_REQUEST[country_name]',
		countrycode='$_REQUEST[countrycode]',status='1',date='$date'";
		if ($conn->query($sql) === TRUE) 
		{
			$location="country_tbl";
			$sql1 = "SELECT * from  country_tbl ORDER BY country_id DESC";
			$result1 = $conn->query($sql1);
			$row1 = $result1->fetch_assoc();
			$country_id=$row1['country_id'];
			$country_name=$row1['country_name'];
					###############
			$sql2="insert into location set
			location_name='$country_name',
			location_id_country_state_district_city='$country_id',
			location_table_country_state_district_city='$location'";
			$conn->query($sql2);
					#########
			$msg= "Record Save successfully";
			header("Location:../add-country.php?msg=$msg ");
		} 
		else 
		{
			echo "Error: " . $sql . "<br>" . $conn->error;
		}		
	}
	if($_REQUEST['add_country']=="Update")
	{
		date_default_timezone_set('Asia/Calcutta');
		$date=date("l / d-m-Y / h:i:s (A)");
		$u_contry_id=$_REQUEST['country_id'];
		$sql="Update country_tbl set
		country_name='$_REQUEST[country_name]',
		countrycode='$_REQUEST[countrycode]',date='$date' where country_id='$_REQUEST[country_id]'";
		if ($conn->query($sql) === TRUE) 
		{
			$location="country_tbl";
			$sql1 = "SELECT * from  country_tbl Where country_id='$u_contry_id'";
			$result1 = $conn->query($sql1);
			$row1 = $result1->fetch_assoc();
			$country_id=$row1['country_id'];
			$country_name=$row1['country_name'];
					###############
			$sql2="Update location set
			location_name='$_REQUEST[country_name]' where location_id_country_state_district_city='$u_contry_id' and location_table_country_state_district_city='$location'";
			$conn->query($sql2);
					#########
			$msg= "Record Updated successfully";
			header("Location:../add-country.php?msg=$msg ");
		} 
		else 
		{
			echo "Error: " . $sql . "<br>" . $conn->error;
		}		
	}
}
if(array_key_exists('delete_country',$_REQUEST))
{
	$u_contry_id=$_REQUEST['delete_country'];
	$sql="delete from country_tbl where country_id=$_REQUEST[delete_country]";
	if ($conn->query($sql) === TRUE) 
	{
		$sql3="delete from location where location_id_country_state_district_city=$_REQUEST[delete_country]";
		$conn->query($sql3);					
		$msg= "Record Deleted Successfully";
		header("Location:../add-country.php?msg=$msg ");
	} 
	else 
	{
		echo "Error: " . $sql . "<br>" . $conn->error;
	}
} 
########################## ---------  End ---- #########################################


							
#################-------------------------         Add skills  Insert  Update & Delete                 -------------------#####################################
if(array_key_exists("add_skills",$_REQUEST))
{
	if($_REQUEST['add_skills']=="Submit")
	{
		date_default_timezone_set('Asia/Calcutta');
		$date=date("l / d-m-Y / h:i:s (A)");
		$sql="insert into skills_tbl set
		skills_name='$_REQUEST[skills_name]',
		status='1',date='$date'";
		if ($conn->query($sql) === TRUE) 
		{
			$location="skills_tbl";
			$sql1 = "SELECT * from  skills_tbl ORDER BY skills_id DESC";
			$result1 = $conn->query($sql1);
			$row1 = $result1->fetch_assoc();
			$skills_id=$row1['skills_id'];
			$skills_name=$row1['skills_name'];
					###############
			$sql2="insert into location set
			location_name='$country_name',
			location_id_country_state_district_city='$country_id',
			location_table_country_state_district_city='$location'";
			$conn->query($sql2);
					#########
			$msg= "Record Save successfully";
			header("Location:../skills.php?msg=$msg ");
		} 
		else 
		{
			echo "Error: " . $sql . "<br>" . $conn->error;
		}		
	}
	if($_REQUEST['add_skills']=="Update")
	{
		date_default_timezone_set('Asia/Calcutta');
		$date=date("l / d-m-Y / h:i:s (A)");
		$u_contry_id=$_REQUEST['skills_id'];
		$sql="Update  skills_tbl set
		skills_name='$_REQUEST[skills_name]',
		date='$date' where skills_id='$_REQUEST[skills_id]'";
		if ($conn->query($sql) === TRUE) 
		{
			$location=" skills_tbl";
			$sql1 = "SELECT * from   skills_tbl Where skills_id='$u_contry_id'";
			$result1 = $conn->query($sql1);
			$row1 = $result1->fetch_assoc();
			$skills_id=$row1['skills_id'];
			$skills_name=$row1['skills_name'];
					###############
			$sql2="Update location set
			location_name='$_REQUEST[skills_name]' where location_id_country_state_district_city='$u_contry_id' and location_table_country_state_district_city='$location'";
			$conn->query($sql2);
					#########
			$msg= "Record Updated successfully";
			header("Location:../skills.php?msg=$msg ");
		} 
		else 
		{
			echo "Error: " . $sql . "<br>" . $conn->error;
		}		
	}
}  
if(array_key_exists('delete_skills',$_REQUEST))
{
	$u_contry_id=$_REQUEST['skills_id'];
	$sql="delete from skills_tbl where skills_id=$_REQUEST[skills_id]";
	if ($conn->query($sql) === TRUE) 
	{
		$sql3="delete from location where location_id_country_state_district_city=$_REQUEST[delete_skills]";
		$conn->query($sql3);					
		$msg= "Record Deleted Successfully";
		header("Location:../skills.php?msg=$msg ");
	}
	else 
	{
		echo "Error: " . $sql . "<br>" . $conn->error;
	}
} 
########################## ---------  End ---- #########################################




#######    ----------   State  ( Update , Delete & Insert  ----------------     #########
if(array_key_exists("add_satae",$_REQUEST))
{
	if($_REQUEST['add_satae']=="Submit")
	{
		date_default_timezone_set('Asia/Calcutta');
		$date=date("l / d-m-Y / h:i:s (A)");		
		$sql="insert into state_tbl set
		state_name='$_REQUEST[state_name]',
		status='1',
		state_country_id='$_REQUEST[state_country_id]',date='$date'";
		if ($conn->query($sql) === TRUE) 
		{
			$location="state";
			$sql1 = "SELECT * from  state_tbl ORDER BY state_id DESC";
			$result1 = $conn->query($sql1);
			$row1 = $result1->fetch_assoc();
			$country_id=$row1['state_id'];
			$country_name=$row1['state_name'];
					###############
			$sql2="insert into location set
			location_name='$country_name',
			location_id_country_state_district_city='$country_id',
			location_table_country_state_district_city='$location'";
			if($conn->query($sql2) == true)
			{
				$msg= "Record Save successfully";
				header("Location:../add-state.php?msg=$msg ");
			}
			else
			{
				echo "Error: " . $sql . "<br>" . $conn->error;
			}
		} 
		else 
		{
			echo "Error: " . $sql . "<br>" . $conn->error;
		}		
	}
	if($_REQUEST['add_satae']=="Update")
	{
		date_default_timezone_set('Asia/Calcutta');
		$date=date("l / d-m-Y / h:i:s (A)");	
		$u_state_id=$_REQUEST['state_id'];
		echo $sql="Update state_tbl set
		state_name='$_REQUEST[state_name]',
		state_country_id='$_REQUEST[state_country_id]',date='$date' where state_id='$u_state_id'";
		if ($conn->query($sql) === TRUE) 
		{
			$location="state_tbl";
			$sql1 = "SELECT * from  state_tbl where state_id='$u_state_id'";
			$result1 = $conn->query($sql1);
			$row1 = $result1->fetch_assoc();
			$country_id=$row1['state_id'];
			$country_name=$row1['state_name'];
					###############
			$sql2="Update location set
			location_name='$country_name',
			location_table_country_state_district_city='$location' where location_id_country_state_district_city='$country_id' and location_table_country_state_district_city='$location'";
			if($conn->query($sql2) == true)
			{
				$msg= "Record Updated successfully";
				header("Location:../add-state.php?msg=$msg ");
			}
			else
			{
				echo "Error: " . $sql . "<br>" . $conn->error;
			}
		} 
		else 
		{
			echo "Error: " . $sql . "<br>" . $conn->error;
		}		
	}
}  
if(array_key_exists('delete_state',$_REQUEST))
{
	$state_id=$_REQUEST['delete_state'];
	$sql="delete from state_tbl where state_id=$_REQUEST[delete_state]";
	if ($conn->query($sql) === TRUE) 
	{
		$sql3="delete from location where location_id_country_state_district_city='$state_id'";
		$conn->query($sql3);
		$msg= "Record Deleted Successfully";
		header("Location:../add-state.php?msg=$msg ");
	} 
	else 
	{
		echo "Error: " . $sql . "<br>" . $conn->error;
	}
} 

########################## ---------  District Detail Add  Start ---- #########################################
if(array_key_exists("add_district",$_REQUEST))
{
	if($_REQUEST['add_district']=="Submit")
	{
		date_default_timezone_set('Asia/Calcutta');
		$date=date("l / d-m-Y / h:i:s (A)");
		$sql="insert into district_tbl set
		district_name='$_REQUEST[district_name]',
		district_country_id='$_REQUEST[district_country_id]',
		district_state_id='$_REQUEST[district_state_id]',status='1',date='$date'";
		if ($conn->query($sql) === TRUE) 
		{
			$location="district_tbl";
			$sql1 = "SELECT * from  district_tbl ORDER BY district_id DESC";
			$result1 = $conn->query($sql1);
			$row1 = $result1->fetch_assoc();
			$country_id=$row1['district_id'];
			$country_name=$row1['district_name'];
					###############
			$sql2="insert into location set
			location_name='$country_name',
			location_id_country_state_district_city='$country_id',
			location_table_country_state_district_city='$location'";
			if($conn->query($sql2) == true)
			{
				$msg= "Record Save successfully";
				header("Location:../add-district.php?msg=$msg ");
			}
			else
			{
				echo "Error: " . $sql . "<br>" . $conn->error;
			}
		} 
		else 
		{
			echo "Error: " . $sql . "<br>" . $conn->error;
		}		
	}
	if($_REQUEST['add_district']=="Update")
	{
		$u_district_id=$_REQUEST['district_id'];
		$sql="Update district_tbl set
		district_name='$_REQUEST[district_name]',
		district_country_id='$_REQUEST[district_country_id]',
		district_state_id='$_REQUEST[district_state_id]' where district_id='$_REQUEST[district_id]'";
		if ($conn->query($sql) === TRUE) 
		{
			$location="district_tbl";
			$sql1 = "SELECT * from  district_tbl where district_id='$u_district_id'";
			$result1 = $conn->query($sql1);
			$row1 = $result1->fetch_assoc();
			$country_id=$row1['district_id'];
			$country_name=$row1['district_name'];
					###############
					
			$sql2="Update location set
			location_name='$country_name',
			location_table_country_state_district_city='$location' where location_id_country_state_district_city='$country_id' and location_table_country_state_district_city='district'";
			if($conn->query($sql2) == true)
			{
				$msg= "Record Updated successfully";
				header("Location:../add-district.php?msg=$msg ");
			}
			else
			{
				echo "Error: " . $sql . "<br>" . $conn->error;
			}
		} 
		else 
		{
			echo "Error: " . $sql . "<br>" . $conn->error;
		}		
	}
}
if(array_key_exists('delete_district',$_REQUEST))
{
	$sql="delete from district_tbl where district_id=$_REQUEST[delete_district]";
	if ($conn->query($sql) === TRUE) 
	{
		$sql3="delete from location where location_id_country_state_district_city='$_REQUEST[delete_district]' and location_table_country_state_district_city='district'";
		$conn->query($sql3);
		$msg= "Record Deleted Successfully";
		header("Location:../add-district.php?msg=$msg ");
	} 
	else 
	{
		echo "Error: " . $sql . "<br>" . $conn->error;
	}
} 
########################## ---------  End ---- #########################################
                   ##############  City  Insert Update Delete ################
if(array_key_exists("add_city",$_REQUEST))
{
	$sql = "SELECT * from  state_tbl where state_id='$_REQUEST[city_state_id]'";
	$result = $conn->query($sql);
	$row = $result->fetch_assoc();
	$city_country_id=$row['state_country_id'];
	if($_REQUEST['add_city']=="Submit")
	{
		$sql="insert into city_tbl set
		city_name='$_REQUEST[city_name]',
		city_country_id='$city_country_id',
		city_state_id='$_REQUEST[city_state_id]',
		city_district_id='$_REQUEST[city_district_id]'"; 
		if ($conn->query($sql) === TRUE) 
		{
			$location="city_tbl";
			$sql1 = "SELECT * from  city_tbl ORDER BY city_id DESC";
			$result1 = $conn->query($sql1);
			$row1 = $result1->fetch_assoc();
			$country_id=$row1['city_id'];
			$country_name=$row1['city_name'];
					###############
			$sql2="insert into location set
			location_name='$country_name',
			location_id_country_state_district_city='$country_id',
			location_table_country_state_district_city='$location'";
			if($conn->query($sql2) == true)
			{
				$msg= "Record Save successfully";
				header("Location:../add-city.php?msg=$msg ");
			}
			else
			{
				echo "Error: " . $sql . "<br>" . $conn->error;
			}
		} 
		else 
		{
			echo "Error: " . $sql . "<br>" . $conn->error;
		}		
	}
	if($_REQUEST['add_city']=="Update")
	{
		$sql="Update city_tbl set
		city_name='$_REQUEST[city_name]',
		city_country_id='$city_country_id',
		city_state_id='$_REQUEST[city_state_id]',
		city_district_id='$_REQUEST[city_district_id]' where city_id='$_REQUEST[city_id]'";
		if ($conn->query($sql) === TRUE) 
		{
			$location="city";
			$sql1 = "SELECT * from  city_tbl where city_id='$_REQUEST[city_id]'";
			$result1 = $conn->query($sql1);
			$row1 = $result1->fetch_assoc();
			$country_id=$row1['city_id'];
			$country_name=$row1['city_name'];
					###############
			$sql2="Update location set
			location_name='$_REQUEST[city_name]' where location_id_country_state_district_city='$country_id' and location_table_country_state_district_city='city'";
			if($conn->query($sql2) == true)
			{
				$msg= "Record Updated successfully";
				header("Location:../add-city.php?msg=$msg ");
			}
			else
			{
				echo "Error: " . $sql . "<br>" . $conn->error;
			}
		} 
		else 
		{
			echo "Error: " . $sql . "<br>" . $conn->error;
		}	
	}
}
if(array_key_exists('delete_city',$_REQUEST))
{
	echo $sql="delete from city_tbl where city_id=$_REQUEST[delete_city]";
	if ($conn->query($sql) === TRUE) 
	{
		$sql3="delete from location where location_id_country_state_district_city='$_REQUEST[delete_city]' and location_table_country_state_district_city='city'";
		$conn->query($sql3);
		$msg= "Record Deleted Successfully";
		header("Location:../add-city.php?msg=$msg ");
	} 
	else 
	{
		echo "Error: " . $sql . "<br>" . $conn->error;
	}
}
################### Sub City   Insert Delete  Update Start  ###################
              ######  -  Delete --  ########
if(array_key_exists('delete_subcity',$_REQUEST))
{
	echo $sql="delete from subcity where subcity_id=$_REQUEST[delete_subcity]";
	if ($conn->query($sql) === TRUE) 
	{
		$sql3="delete from location where location_id_country_state_district_city='$_REQUEST[delete_subcity]' and location_table_country_state_district_city='subcity'";
		$conn->query($sql3);
		$msg= "Record Deleted Successfully";
		header("Location:../add-sub-city.php?msg=$msg ");
	} 
	else 
	{
		echo "Error: " . $sql . "<br>" . $conn->error;
	}
}
if(array_key_exists("add_Subcity",$_REQUEST))
{
	if($_REQUEST['add_Subcity']=="Submit")
	{
		$sql="insert into subcity set
		subcity_name='$_REQUEST[subcity_name]',
		subcity_country_id='$_REQUEST[subcity_country_id]',
		subcity_state_id='$_REQUEST[subcity_state_id]',
		subcity_district_id='$_REQUEST[subcity_district_id]',
		subcity_city_id='$_REQUEST[subcity_city_id]'"; 
		if ($conn->query($sql) === TRUE) 
		{
			$location="subcity";
			$sql1 = "SELECT * from  subcity ORDER BY subcity_id DESC";
			$result1 = $conn->query($sql1);
			$row1 = $result1->fetch_assoc();
			$country_id=$row1['subcity_id'];
			$country_name=$row1['subcity_name'];
					###############
			$sql2="insert into location set
			location_name='$country_name',
			location_id_country_state_district_city='$country_id',
			location_table_country_state_district_city='$location'";
			if($conn->query($sql2) == true)
			{
				$msg= "Record Save successfully";
				header("Location:../add-sub-city.php?msg=$msg ");
			}
			else
			{
				echo "Error: " . $sql . "<br>" . $conn->error;
			}
		} 
		else 
		{
			echo "Error: " . $sql . "<br>" . $conn->error;
		}		
	}
	if($_REQUEST['add_Subcity']=="Update")
	{
		$dt=time();
		$sql="Update subcity set
		subcity_name='$_REQUEST[subcity_name]' where subcity_id='$_REQUEST[subcity_id]'";
		if ($conn->query($sql) === TRUE) 
		{
			$location="subcity";
			$sql1 = "SELECT * from  subcity where subcity_id='$_REQUEST[subcity_id]'";
			$result1 = $conn->query($sql1);
			$row1 = $result1->fetch_assoc();
			$country_id=$row1['subcity_id'];
			$country_name=$row1['subcity_name'];
					###############
			$sql2="Update location set
			location_name='$_REQUEST[subcity_name]' where location_id_country_state_district_city='$country_id' and location_table_country_state_district_city='subcity'";
			if($conn->query($sql2) == true)
			{
				$msg= "Record Updated successfully";
				header("Location:../add-sub-city.php?msg=$msg ");
			}
			else
			{
				echo "Error: " . $sql . "<br>" . $conn->error;
			}
		} 
		else 
		{
			echo "Error: " . $sql . "<br>" . $conn->error;
		}	
	}
}
###################    Insert Delete  Update End  ###################
######################  Qualification ###################
if(array_key_exists("add_highest_qualification",$_REQUEST))
{
	if($_REQUEST['add_highest_qualification']=="Submit")
	{
		$sql="insert into highest_qualification set
		highest_qualification_name='$_REQUEST[highest_qualification_name]'";
		if ($conn->query($sql) === TRUE) 
		{
			$msg= "Record Save successfully";
			header("Location:../highest-qualification.php?msg=$msg ");
		} 
		else 
		{
			echo "Error: " . $sql . "<br>" . $conn->error;
		}		
	}
	if($_REQUEST['add_highest_qualification']=="Update")
	{
		$sql="Update highest_qualification set
		highest_qualification_name='$_REQUEST[highest_qualification_name]' where highest_qualification_id='$_REQUEST[highest_qualification_id]'";
		if ($conn->query($sql) === TRUE) 
		{
			$msg= "Record Updated successfully";
			header("Location:../highest-qualification.php?msg=$msg ");
		} 
		else 
		{
			echo "Error: " . $sql . "<br>" . $conn->error;
		}		
	}
}
//////////////////////// Delete ////////////////////////////////////////
if(array_key_exists('delete_highest_qualification',$_REQUEST))
{
	$sql="delete from highest_qualification where highest_qualification_id='$_REQUEST[delete_highest_qualification]'";
	echo $sql;
	if ($conn->query($sql) === TRUE) 
	{
		$msg= "Record Deleted Successfully";
		header("Location:../highest-qualification.php?msg=$msg ");
	} 
	else 
	{
		echo "Error: " . $sql . "<br>" . $conn->error;
	}
}
######################  Qualification Course ###################
if(array_key_exists("add_highest_qualification_course",$_REQUEST))
{
	if($_REQUEST['add_highest_qualification_course']=="Submit")
	{
		$sql="insert into highest_qualification_course set
		highest_qualification_course_name='$_REQUEST[highest_qualification_course_name]',
		highest_qualification_course_h_q_id='$_REQUEST[highest_qualification_course_h_q_id]'";
		if ($conn->query($sql) === TRUE) 
		{
			$msg= "Record Save successfully";
			header("Location:../qualification-course.php?msg=$msg ");
		} 
		else 
		{
			echo "Error: " . $sql . "<br>" . $conn->error;
		}		
	}
	if($_REQUEST['add_highest_qualification_course']=="Update")
	{
		$sql="Update highest_qualification_course set
		highest_qualification_course_name='$_REQUEST[highest_qualification_course_name]',
		highest_qualification_course_h_q_id='$_REQUEST[highest_qualification_course_h_q_id]' where highest_qualification_course_id='$_REQUEST[highest_qualification_course_id]'";
		if ($conn->query($sql) === TRUE) 
		{
			$msg= "Record Updated successfully";
			header("Location:../qualification-course.php?msg=$msg ");
		} 
		else 
		{
			echo "Error: " . $sql . "<br>" . $conn->error;
		}		
	}
}
//////////////////////// Delete ////////////////////////////////////////
if(array_key_exists('delete_highest_qualification_course',$_REQUEST))
{
	$sql="delete from highest_qualification_course where highest_qualification_course_id='$_REQUEST[delete_highest_qualification_course]'";
	echo $sql;
	if ($conn->query($sql) === TRUE) 
	{
		$msg= "Record Deleted Successfully";
		header("Location:../qualification-course.php?msg=$msg ");
	} 
	else 
	{
		echo "Error: " . $sql . "<br>" . $conn->error;
	}
}
######################  Qualification Specialization ###################
if(array_key_exists("add_course_specialization",$_REQUEST))
{
	if($_REQUEST['add_course_specialization']=="Submit")
	{
		$sql="insert into qualification_specialization set
		qs_hq_id='$_REQUEST[qs_hq_id]',
		qs_hqc_id='$_REQUEST[qs_hqc_id]',
		hq_name='$_REQUEST[hq_name]'";
		if ($conn->query($sql) === TRUE) 
		{
			$msg= "Record Save successfully";
			header("Location:../qualification-course-pecialization.php?msg=$msg ");
		} 
		else 
		{
			echo "Error: " . $sql . "<br>" . $conn->error;
		}		
	}
	if($_REQUEST['add_course_specialization']=="Update")
	{
		$sql="Update qualification_specialization set
		qs_hq_id='$_REQUEST[qs_hq_id]',
		qs_hqc_id='$_REQUEST[qs_hqc_id]',
		hq_name='$_REQUEST[hq_name]' where qs_id='$_REQUEST[qs_id]'";
		if ($conn->query($sql) === TRUE) 
		{
			$msg= "Record Updated successfully";
			header("Location:../qualification-course-pecialization.php?msg=$msg ");
		} 
		else 
		{
			echo "Error: " . $sql . "<br>" . $conn->error;
		}		
	}
}
//////////////////////// Delete ////////////////////////////////////////
if(array_key_exists('delete_specialization',$_REQUEST))
{
	$sql="delete from qualification_specialization where qs_id='$_REQUEST[delete_specialization]'";
	echo $sql;
	if ($conn->query($sql) === TRUE) 
	{
		$msg= "Record Deleted Successfully";
		header("Location:../qualification-course-pecialization.php?msg=$msg ");
	} 
	else 
	{
		echo "Error: " . $sql . "<br>" . $conn->error;
	}
}
?>