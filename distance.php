<?php
$servername = "localhost";
$username = "root";
$password = "";
$port="3307";
$db="wayout";

// Create connection
$conn = mysqli_connect($servername,$username, $password,$db,$port);

// Check connection
if (!$conn) {
  die("Connection failed: " . mysqli_connect_error());
}
echo "Connected successfully";
?>