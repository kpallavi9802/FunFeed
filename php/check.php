<?php
/* Attempt MySQL server connection. Assuming you are running MySQL
server with default setting (user 'root' with no password) */
$mysqli = new mysqli("localhost", "root", "", "funfeed");
 
// Check connection
if($mysqli === false){
    die("ERROR: Could not connect. " . $mysqli->connect_error);
}
 
// Escape user inputs for security
$first_name = $mysqli->real_escape_string($_REQUEST['user_name']);
$last_name = $mysqli->real_escape_string($_REQUEST['user_email']);
$email = $mysqli->real_escape_string($_REQUEST['password']);
 
// Attempt insert query execution
$sql = "INSERT INTO user (user_name, user_email, user_password) VALUES ('$first_name', '$last_name', '$email')";
if($mysqli->query($sql) === true){
    echo "Records inserted successfully.";
} else{
    echo "ERROR: Could not able to execute $sql. " . $mysqli->error;
}
 
// Close connection
$mysqli->close();
?>