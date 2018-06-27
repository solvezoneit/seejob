<?php
//fetch.php
include '../api/db_config.php';
//$connect = mysqli_connect("localhost", "root", "", "cjobcjob");
$request = mysqli_real_escape_string($db, $_POST["query"]);
//$request =$_POST['query'];
$query = " SELECT * FROM cj_jobs WHERE job_cat LIKE '%".$request."%' GROUP BY job_cat";

$result = mysqli_query($db, $query);

$data = array();

if(mysqli_num_rows($result) > 0)
{
 while($row = mysqli_fetch_assoc($result))
 {
  $data[] = $row["job_cat"];
 }
 echo json_encode($data);
}

?>