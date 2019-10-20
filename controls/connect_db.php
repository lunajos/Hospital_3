<?php 
$servername = "localhost";
$username = "2019hospital3";
$password = "2019hospital3";
$dbname = "2019hospital3";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);

// Check connection
if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}

?>