<?php
  /* Database connection start */
  include '../partial/dbconnect.php';
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

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Funfeed-Video Upload</title>

  <link href="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
    <script src="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.min.js"></script>
    <script src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
   
	<!--Bootsrap 4 CDN-->
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
    
    <!--Fontawesome CDN-->
	<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.3.1/css/all.css" integrity="sha384-mzrmE5qonljUremFsqc01SB46JvROS7bZs3IO2EmfFsd15uHvIt+Y8vEf7N7fWAU" crossorigin="anonymous">


	<link href="https://unpkg.com/tailwindcss@^1.0/dist/tailwind.min.css" rel="stylesheet">
	<!--Custom styles-->
    <link rel="stylesheet" type="text/css" href="../css/login.css">
</head>

<body>
  <!-- <div class="container">
    <div class="header"></div>
    <form method="POST" action="upload.php" enctype="multipart/form-data">
      <div class="form-group">
        <label for="exampleInput">Name of Web Series</label>
        <input type="text" class="form-control" id="name" aria-describedby="emailHelp"
          placeholder="Enter web series" name="name">
      </div>

      <div class="form-group">
        <label for="sel1">Genre of Web Series</label>
        <select class="form-control" id="genre" name="genre">
          <option>Comedy</option>
          <option>Drama</option>
          <option>Thriller</option>
          <option>Children</option>
          <option>Sci-fi/Fantacy</option>
          <option>Other</option>
        </select>
      </div>

      <div class="form-group">
        <label for="sel1">Number of Seasons</label>
        <input type="number" class="form-control" id="season" aria-describedby="emailHelp"
          placeholder="Enter seasons" name="season">
      </div>

      <div class="form-group">
        <label for="sel1">Number of Episodes</label>
        <input type="number" class="form-control" id="episode" aria-describedby="emailHelp"
          placeholder="no. of episodes" name="episode">
      </div>

      <div class="form-group">
        <label for="sel1">Duration of Episodes</label>
        <input type="text" class="form-control" id="duration" aria-describedby="emailHelp" placeholder="Duration"
          name="duration">
      </div>


      <div class="form-group">
        <label for="sel1"> Rating</label>
        <select class="form-control" id="rating" name="rating">
          <option>1 star</option>
          <option>2 star</option>
          <option>3 star</option>
          <option>4 star</option>
          <option>5 star</option>
        </select>
      </div>

      <div class="form-group">
        <label for="sel1"> IMDB</label>
        <select class="form-control" id="imdb" name="imdb">
          <option>1 star</option>
          <option>2 star</option>
          <option>3 star</option>
          <option>4 star</option>
          <option>5 star</option>
        </select>
      </div>


      <div class="form-group">
        <label for="exampleFormControlFile1">Image input</label>
        <input type="file" class="form-control-file" id="imageinput" name="imageinput">
        <label for="exampleFormControlFile1">Video input</label>
        <input type="file" class="form-control-file" id="videoinput" name="videoinput">
      </div>

      <button type="submit" name="submit" class="btn btn-primary" style="float: left;">Upload</button><br><br>

    </form>
  </div>


  <div>

    <button type="button" class="btn btn-danger" data-dismiss="modal">Close</button>
  </div>


</div> -->

<!-- testing -->
<div id="particles-js">
    <div class="container">
        <div class="d-flex justify-content-center h-100">
            <div class="card" style="width:500px;height:550px;margin-top:5%;margin-left:15%;box-shadow: 10px 10px 10px 10px #ffc312;">
                <div class="card-header" style="height:100px;">
                    <h3 style="text-align:center;font-size:40px;color:#ffc312;padding-top:20px">Upload Video</h3>
                </div>
                <div class="card-body" style="padding:20px 80px;height:320px;">
                  <form action="upload.php" method="POST" enctype="multipart/form-data">
                    <div class="form-row">
                      <div class="form-group col-md-12">
                        <!-- <label for="inputAddress">Address</label> -->
                        <input type="text" class="form-control" id="name" placeholder="Enter Web series Name" name="name">
                      </div>

                      <div class="form-group col-md-6">
                        <!-- <label for="inputEmail4">Email</label> -->
                        <input type="text" class="form-control" id="season" name="season" placeholder="Season">
                      </div>
                      <div class="form-group col-md-6">
                        <!-- <label for="inputPassword4">Password</label> -->
                        <input type="text" class="form-control" id="episode" placeholder="episode" name="episode">
                      </div>
                    </div>

                    <div class="form-row">
                      <div class="form-group col-md-6">
                        <!-- <label for="inputPassword4">Password</label> -->
                        <input type="text" class="form-control" id="duration" name="duration" placeholder="duration">
                      </div>
                      <div class="form-group col-md-6">
                        <select class="form-control" id="genre" name="genre">
                          <option>Comedy</option>
                          <option>Drama</option>
                          <option>Thriller</option>
                          <option>Children</option>
                          <option>Fantacy</option>
                          <option>Other</option>
                        </select>
                      </div>
                    </div>

                    <div class="form-row">
                      <div class="form-group col-md-6">
                        <!-- <label for="sel1"> Rating</label> -->
                        <select class="form-control" id="rating" name="rating">
                          <option>Rating</option>
                          <option>1 star</option>
                          <option>2 star</option>
                          <option>3 star</option>
                          <option>4 star</option>
                          <option>5 star</option>
                        </select>
                      </div>

                      <div class="form-group col-md-6">
                        
                        <select class="form-control" id="imdb" name="imdb">
                          <option>IMDB Rating</option>  
                          <option>1 star</option>
                          <option>2 star</option>
                          <option>3 star</option>
                          <option>4 star</option>
                          <option>5 star</option>
                        </select>
                      </div>
                    </div>

                    <div class="form-group" style="background-color:grey;" >
                      <label for="exampleFormControlFile1" style="color:white;">Image input</label>
                      <input  type="file" class="form-control-file" id="imageinput" name="imageinput">
                      <label for="exampleFormControlFile1" >Video input</label>
                      <input type="file" class="form-control-file" id="videoinput" name="videoinput">
                    </div>

                    
                    <!-- <div class="form-row">
                    <div class="form-group col-md-2"></div>
                    <div class="form-group col-md-4">
                      <label for="exampleFormControlFile1" style="color:white;">Image input</label>
                      <input type="file" class="form-control-file" id="imageinput" name="imageinput">
                    </div>
                    <div class="form-group col-md-2"></div> -->
                    <!-- <div class="form-group col-md-4">
                    <label for="exampleFormControlFile1" style="color:white;">Video input</label>
                    <input style="text-color:white;" type="file" class="form-control-file" id="videoinput" name="videoinput">
                  </div>
                  <div class="form-group col-md-1"></div>
                  </div> -->
                   
                  <div class="form-row">
                    <div class="form-group col-md-3"></div> 
                    <div class="form-group col-md-3"> 
                      <button type="submit" name="submit" class="btn btn-primary" style="float: left;">Upload</button></div>
                    <div class="form-group col-md-4"> 
                    <a href="explore.php" style="text-decoration:none;"><button type="button" class="btn btn-danger" data-dismiss="modal">Close</button></a></div>
                  
                    <div class="form-group col-md-1"></div> 
                  </div>
                </form>
                  </div>

            </div>      
      
        </div>
    </div>  
</div>
    
<!-- testing ends -->

</body>

</html>