<?php
  /* Database connection start */
  include_once("database.php");
  $error = false;

  #fetching the data
  $name1=$_FILES['imageinput']['name'];
  $name2=$_FILES['videoinput']['name'];
  $temp1=$_FILES['imageinput']['tmp_name'];
  $temp2=$_FILES['videoinput']['tmp_name'];
  $name = $_POST['name'];
  $genre = $_POST['genre'];
  $season = $_POST['season'];
  $episode = $_POST['episode'];
  $duration = $_POST['duration'];

  #connection checking
  if ($conn->connect_error) {
    die("Connection failed :".$conn->connect_error);
  }else{
    move_uploaded_file($temp1, "../uploads/images".$name1);
    move_uploaded_file($temp2, "../uploads/videos".$name2);
    $stmt = "INSERT INTO streamedvideos(name, genre, season, episode, duration, image, video) VALUES('$name','$genre','$season','$episode','$duration','$name1','$name2')";
    $run = mysqli_query($conn,$stmt);
    if($run == true)
    { 
      echo "Submitted Successfully";
    }
    else
    {
      echo "Not Submitted";
    }
  } 

?> 