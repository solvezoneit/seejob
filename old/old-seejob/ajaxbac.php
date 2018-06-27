<?php
include("admin/include/conection.php");

if($_REQUEST['state_id'])
{
$c_id=$_REQUEST['state_id'];
$sql = "SELECT * from  city_tbl where city_state_id='$c_id'";
$result = $conn->query($sql);
$q2="select * from  state_tbl where state_id='$c_id'";
$result2 = $conn->query($q2);
$row2 = $result2->fetch_assoc();
	echo '
	<option>All '.$row2['state_name'].'</option>
	';
while($row = $result->fetch_assoc()) 
	{
		echo '
		<option value="'.$row['city_name'].'">'.$row['city_name'].'</option>';
}
}
?>
