<?php
$servername = "localhost";
$name = "root";
$password = "";
$dbname = "funfeed";

// Create connection
$conn = new mysqli($servername, $name, $password,$dbname);

// Check connection
if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}

?>