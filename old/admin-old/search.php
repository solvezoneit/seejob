<?php
include("include/conection.php");
$searchTerm = $_GET['term'];
//get matched data from skills table
$query = $conn->query("SELECT * FROM location where NOT location_table_country_state_district_city='city' and location_name LIKE '%".$searchTerm."%' ORDER BY location_name ASC");
//$query = $conn->query("SELECT * FROM state_details,district_details,city_detail WHERE state_detail_id=district_state_id and city_detail_state_id=state_detail_id and city_detail_district_id=district_id and district_id=city_detail_district_id and city_detail_state_id=state_detail_id  and district_name LIKE '%".$searchTerm."%' ORDER BY city_detail_name ASC");
while ($row = $query->fetch_assoc()) {
    $data[] = $row['location_name'];
}
//return json data
echo json_encode($data);
?>