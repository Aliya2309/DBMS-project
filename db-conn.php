<?php
$servername = "localhost";
$username = "root";
$password = "alifa1305";

// Create connection
$conn = mysqli_connect($servername, $username, $password, 'restaurant');

// Check connection
if (!$conn) {
  die("Connection failed: " . mysqli_connect_error());
}
//echo "Connected successfully";
?> 