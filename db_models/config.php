<?php
$username = "root";
$password = "";
$hostname = "localhost"; 
$database = "test";

$con=mysqli_connect($localhost ,$username, $password, $database);

// Check connection
if (mysqli_connect_errno()) {
  echo "Failed to connect to MySQL: " . mysqli_connect_error();
}

?>