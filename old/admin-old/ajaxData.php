<?php
//Include database configuration file
include("include/conection.php");

if(isset($_POST["country_id"]) && !empty($_POST["country_id"])){
    //Get all state data
    $query = $conn->query("SELECT * FROM highest_qualification_course WHERE highest_qualification_course_h_q_id = ".$_POST['country_id']." ORDER BY highest_qualification_course_name ASC");
    
    //Count total number of rows
    $rowCount = $query->num_rows;
    
    //Display states list
    if($rowCount > 0){
        echo '<option value="">Select state</option>';
        while($row = $query->fetch_assoc()){ 
            echo '<option value="'.$row['highest_qualification_course_id'].'">'.$row['highest_qualification_course_name'].'</option>';
        }
    }else{
        echo '<option value="">State not available</option>';
    }
}

if(isset($_POST["state_id"]) && !empty($_POST["state_id"])){
    //Get all city data
	 $query1 = $db->query("SELECT * FROM qualification_specialization WHERE qs_hqc_id = ".$_POST['state_id']." ORDER BY hq_name ASC");
    //Count total number of rows
    $rowCount1 = $query1->num_rows;
    
    //Display cities list
    if($rowCount1 > 0){
        echo '<option value="">Select city</option>';
        while($row = $query1->fetch_assoc()){ 
            echo '<option value="'.$row['qs_id'].'">'.$row['hq_name'].'</option>';
        }
    }else{
        echo '<option value="">City not available</option>';
    }
}
?>