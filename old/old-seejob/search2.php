<?php
    //database configuration
    $dbHost = 'localhost';
    $dbUsername = 'root';
    $dbPassword = '';
    $dbName = 'seejob_2';
    
    //connect with the database
    $db = new mysqli($dbHost,$dbUsername,$dbPassword,$dbName);
    
    //get search term
    $searchTerm = $_GET['term'];
    
    //get matched data from skills table
    $query = $db->query("SELECT * FROM state_tbl WHERE state_name LIKE '".$searchTerm."%' ORDER BY state_name ASC");

	
	
    while ($row = $query->fetch_assoc()) {
		
		
		
        $data[] = $row['state_name'];
		

		

    }
    
    //return json data
    echo json_encode($data);
?>