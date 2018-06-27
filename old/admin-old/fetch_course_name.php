<?php
include("include/conection.php");
$country = $_POST['country'];
$sql= "select * from states where country_id='$country'";
$query = $db->query($sql);
echo '<option value="">Select State</option>';
while($res = $query->fetch_assoc()){
echo '<option value="'.$res['name'].'">'.$res['name'].'</option>';
	
}
?>