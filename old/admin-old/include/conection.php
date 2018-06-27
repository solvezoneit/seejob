<?php
$conn="";
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "cjobcjob";
// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
} 
///////////////////////////////
session_start();
// Turn off all error reporting
@error_reporting(0);

?>