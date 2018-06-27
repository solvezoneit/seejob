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
    $query = $db->query("SELECT * FROM skills_tbl WHERE skills_name LIKE '".$searchTerm."%' ORDER BY skills_name ASC");
    while ($row = $query->fetch_assoc()) {
        $data[] = $row['skills_name'];
    }
    
    //return json data
    echo json_encode($data);
?>