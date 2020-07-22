<?php
 include_once('database.php');


//defining variable
$username = "";
$useremail = "";
$userpassword = "";



if(isset($_POST['submit'])){
$username = $_POST['username'];
$useremail = $_POST['useremail'];
$userpassword = $_POST['password'];
}

echo $useremail,$username,$userpassword;


$sql_query = "insert into user(user_name,user_email,user_password) values ('$username','$useremail','$userpassword')";
$result = $conn->query($sql_query);

// echo 'connected';
// if($result)
// {
//   header('Location: ../html/login.html');
// }
// else
// {
// 	die("connection failed");
// }
    header("Location:../html/login.html");
 $conn->close();

?> 