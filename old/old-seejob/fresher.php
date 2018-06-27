
<?php
include("admin/include/conection.php");
if($_REQUEST['submit'])
{
	$firstName=$_POST['firstName'];
	$lastName=$_POST['lastName'];
	$password=$_POST['password'];
	$phone=$_POST['phone'];
	$location=$_POST['location'];
	$resume=$_POST['resume'];
	$profile=$_POST['profile'];
	$education=$_POST['education'];
	$subjects=$_POST['subjects'];
	$specialization=$_POST['specialization'];
	$college=$_POST['college'];
	$type=$_POST['type'];
	$passing=$_POST['passing'];
	$skills=$_POST['skills'];
	$sql = mysqli_query($conn,"insert into  fresher_tbl (fname,lname,password,mobile,location,job_profile,education,subjects,universityname,type,passing_yearv,skills,status,date) VALUES
	('$firstName','$lastName','$password','$phone','$location','$resume','$profile','$education','$subjects','$specialization','$college','$type','$passing','$skills')
	");
}
?>