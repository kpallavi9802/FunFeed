<?php
  
 $msg = "";
if(isset($_POST['submit']))
 {
 	
 	
 		// $target = '../uploads/images/'.basename($_FILES['imageinput']['name']);

 		// if(move_uploaded_file($_FILES['imageinput']['tmp_name'], $target))
		// {
		// 	$msg = "image upload sucessfully";
    // }
    
    // $target = '../uploads/videos/'.basename($_FILES['videoinput']['name']);

 		// if(move_uploaded_file($_FILES['videoinput']['tmp_name'], $target))
		// {
		// 	$msg = "video upload sucessfully";
    // }
    
    // include_once("database.php");

 	





$name = $_POST['name'];
$genre = $_POST['genre'];
$season = $_POST['season'];
$episode = $_POST['episode'];
$duration = $_POST['duration'];

$imageinput = $_FILES['imageinput']['name'];
$videoinput = $_FILES['videoinput']['name'];

echo $name;
$sql = "insert into streamedvideos values ('$name','$genre','$season','$episode','$duration','$imageinput','$videoinput')";
$result = $conn->query($sql);

$target = '../uploads/images/'.basename($_FILES['imageinput']['name']);

 		if(move_uploaded_file($_FILES['imageinput']['tmp_name'], $target))
		{
			$msg = "image upload sucessfully";
    }
    
    $target = '../uploads/videos/'.basename($_FILES['videoinput']['name']);

 		if(move_uploaded_file($_FILES['videoinput']['tmp_name'], $target))
		{
			$msg = "video upload sucessfully";
    }


if($result)
{
	header('Location: ../html/homepage.html');
	echo ("data inserted sucessfully");
	echo "<script>
	alert('data inserted sucessfully ');
	window.location.href='../html/homepage.html';
	</script>";
}

else
{
	die("connection failed");
}
 }


$conn->close();
?>