<?php
$dbServername ="localhost";
$dbUsername="root";
$dbPassword="";
$dbName ="Test1";


// Create connection
$conn =  mysqli_connect($dbServername,$dbUsername,$dbPassword,$dbName);

// Check connection
if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}
// echo "Connected successfully";
?>