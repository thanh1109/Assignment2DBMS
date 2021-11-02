<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "fabricAgency";

// Create connection
$conn = mysqli_connect($servername, $username, $password, $dbname);
// Check connection
if (!$conn) {
  die("Connection failed: " . mysqli_connect_error());
}

// Create database
$sql = "CREATE TABLE users(
    fullname VARCHAR(50) NOT NULL,
    username VARCHAR(30) NOT NULL,
    password VARCHAR(50) NOT NULL
)";

if (mysqli_query($conn, $sql)) {
  echo "New record created successfully";
} else {
  echo "Error: " . mysqli_error($conn);
}

mysqli_close($conn);
?>