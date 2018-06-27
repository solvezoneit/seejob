<?php
    //database configuration
    $dbHost = 'localhost';
    $dbUsername = 'root';
    $dbPassword = '';
    $dbName = 'seejob_2';
    
    //connect with the database
    $db = new mysqli($dbHost,$dbUsername,$dbPassword,$dbName);
    
if($_REQUEST['state_id'])
{
$c_id=$_REQUEST['state_id'];
$q=mysqli_query("select * from  city_tbl where city_state_id='$c_id'")or die(mysql_error());
$q2=mysqli_query("select * from  state_tbl where state_id='$c_id'")or die(mysql_error());
$res2=mysql_fetch_array($q2);
echo '<option value="Select sub-category">'.$res2['state_name'].'</option>';
while($res=mysql_fetch_array($q))
{
echo '<option value="'.$res['city_id'].'">'.$res['city_name'].'</option>';
}
}
?>