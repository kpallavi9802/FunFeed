<?php
  /* Database connection start */
  include_once("database.php");
  $error = false;

  if ($conn->connect_error) {
    die("Connection failed :".$conn->connect_error);
  }
  

  #fetching the data
//   $name1=$_FILES['file1']['name'];
//   $name2=$_FILES['file2']['name'];
//   $temp1=$_FILES['file1']['tmp_name'];
//   $temp2=$_FILES['file2']['tmp_name'];
  if(isset($_POST['submit'])){
  $inputname = $_POST['name'];
  $genre = $_POST['genre'];
  $inputseason = $_POST['season'];
  $inputepisode = $_POST['episode'];
  $inputduration = $_POST['duration'];
  $rating = $_POST['rating'];
  $imdb = $_POST['imdb'];
  

  $target1="../uploads/images/".basename($_FILES['imageinput']['name']);
  $target2="../uploads/videos/".basename($_FILES['videoinput']['name']);

  $imageinput1=$_FILES['imageinput']['name'];
  $videoinput1=$_FILES['videoinput']['name'];


  #connection checking
  
    // if($_POST[''])
    move_uploaded_file($_FILES['imageinput']['tmp_name'],$target1);
    move_uploaded_file($_FILES['videoinput']['tmp_name'], $target2);
    $sql = "INSERT INTO streamedvideos(name,genre,season,episode,duration,image,video) VALUES ('$inputname','$genre','$inputseason','$inputepisode','$inputduration','$imageinput1','$videoinput1')";
    // $run = mysqli_query($conn,$stmt);
    if($conn->query($sql) === TRUE)
    { 
	  echo "Submitted Successfully";
    header("Location:../html/explore.php");
  

    }
    else
    {
      echo "Not Submitted";
    }
  } 


?> 