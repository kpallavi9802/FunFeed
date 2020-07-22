<?php
  session_start();
  if(!isset($_SESSION['loggedin']) || $_SESSION['loggedin']!=true){
    header('location:login.php');
    exit;
  }
?>
<!doctype html>
<html lang="en">

<head>
  <!-- Required meta tags -->

  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

  <!-- Bootstrap CSS -->
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css"
    integrity="sha384-9aIt2nRpC12Uk9gS9baDl411NQApFmC26EwAOH8WgZl5MYYxFfc+NcPb1dKGj7Sk" crossorigin="anonymous">

  <!--linking CSS file-->
  <link rel="stylesheet" type=text/css href="../css/homepage.css">
  <link rel="stylesheet" type=text/css href="../css/explore.css">
  <title>FunFeed-Welcome to the Trap World</title>

  <link href="https://fonts.googleapis.com/css2?family=Lato:wght@700&display=swap" rel="stylesheet">
</head>

<body>

  <div id="carouselCaptions" class="carousel slide" data-ride="carousel">
    <nav class="navbar navbar-expand-md ">
      <a class="navbar-brand" href="#"
        style="color:#FFC312;font-size:30px;text-shadow: darksalmon;font-weight: bold;">FunFeed</a>
      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent"
        aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>

      <div class="collapse navbar-collapse" id="navbarSupportedContent">
        <ul class="navbar-nav mr-auto">
          <li class="nav-item active">
            <a class="nav-link" href="#">Home<span class="sr-only">(current)</span></a>
          </li>
          <li class="nav-item">
            <a class="nav-link disabled" href="#">Explore</a>
          </li>

          <li class="nav-item">
            <a class="nav-link disabled" href="#" tabindex="-1" aria-disabled="true">About Us</a>
          </li>
        </ul>
        
        <a href="upload.php"><button class="btn btn-outline-success my-2 my-sm-0">Upload</button></a>
        &nbsp;&nbsp;<a href="homepage.php"><button class="btn btn-outline-success my-2 my-sm-0" onclick="logout()" >Logout</button></a>
        <script>
          function logout() {
            session_unset();
            session_destroy();
            header('Location:homepage.php');
          }
        </script>


      </div>
    </nav>

    <?php 
      include_once("../php/database.php");
      $sql = "select * from streamedvideos";
      $result = mysqli_query($conn,$sql);
      // console.log($result);
      while($row = mysqli_fetch_array($result)){
        // echo "$row['name']";
        echo "<div class='card' style='box-shadow:2px 2px black;background-color:white;'>";
          // echo "<a href='../uploads/videos/".$row['video']."'><img class='card-img-top' style='height:150px;width:300px;' src='../uploads/images/".$row['image']."'></a>";
          // echo "<iframe class='card-img-top' style='height:150px;width:100%;background-color:white;' src='../uploads/videos/".$row['video']."' frameborder='0' allowfullscreen autoplay='0' volume='0'></iframe>";
          echo "<video class='card-img-top' style='width:100%;' controls autoplay loop muted><source src='../uploads/videos/".$row['video']."'></video>";

          

          echo "<h3 style='color:black';>" .$row['name']. "</h3>";
          echo "<p style='color:black;'>" .$row['genre']."&nbsp;|&nbsp;season". $row['season']."&nbsp;|&nbsp;episode".$row['episode']."&nbsp;|&nbsp;".$row['duration']. "</p>";
          // <a href="https://www.youtube.com/watch?v=6QoBpFUX6CE">Watch now</a>
       echo  "</div>";

      }
    ?>



    <!-- <div class="card">
      <img class="card-img-top" src="../asset/broken .jpg" alt="">
      <h3>Broken</h3>
      <p>broken|seoson1:episode 1|12:09min</p>
      <a href="https://www.youtube.com/watch?v=6QoBpFUX6CE">Watch now</a>
    </div>
    <div class="card">
      <img class="card-img-top" src="../asset/broken .jpg" alt="">
      <h3>Broken</h3>
      <p>broken|seoson1:episode 1|12:09min</p>
      <a href="https://www.youtube.com/watch?v=6QoBpFUX6CE">Watch now</a>
    </div>
    <div class="card">
      <img class="card-img-top" src="../asset/broken .jpg" alt="">
      <h3>Broken</h3>
      <p>broken|seoson1:episode 1|12:09min</p>
      <a href="https://www.youtube.com/watch?v=6QoBpFUX6CE">Watch now</a>
    </div>
    <div class="card">
      <img class="card-img-top" src="../asset/broken .jpg" alt="">
      <h3>Broken</h3>
      <p>broken|seoson1:episode 1|12:09min</p>
      <a href="https://www.youtube.com/watch?v=6QoBpFUX6CE">Watch now</a>
    </div>
    <div class="card">
      <img class="card-img-top" src="../asset/broken .jpg" alt="">
      <h3>Broken</h3>
      <p>broken|seoson1:episode 1|12:09min</p>
      <a href="https://www.youtube.com/watch?v=6QoBpFUX6CE">Watch now</a>
    </div>
    <div class="card">
      <img class="card-img-top" src="../asset/broken .jpg" alt="">
      <h3>Broken</h3>
      <p>broken|seoson1:episode 1|12:09min</p>
      <a href="https://www.youtube.com/watch?v=6QoBpFUX6CE">Watch now</a>
    </div>
    <div class="card">
      <img class="card-img-top" src="../asset/broken .jpg" alt="">
      <h3>Broken</h3>
      <p>broken|seoson1:episode 1|12:09min</p>
      <a href="https://www.youtube.com/watch?v=6QoBpFUX6CE">Watch now</a>
    </div>
    <div class="card">
      <img class="card-img-top" src="../asset/broken .jpg" alt="">
      <h3>Broken</h3>
      <p>broken|seoson1:episode 1|12:09min</p>
      <a href="https://www.youtube.com/watch?v=6QoBpFUX6CE">Watch now</a>
    </div>
    <div class="card">
      <img class="card-img-top" src="../asset/broken .jpg" alt="">
      <h3>Broken</h3>
      <p>broken|seoson1:episode 1|12:09min</p>
      <a href="https://www.youtube.com/watch?v=6QoBpFUX6CE">Watch now</a>
    </div>
    <div class="card">
      <img class="card-img-top" src="../asset/broken .jpg" alt="">
      <h3>Broken</h3>
      <p>broken|seoson1:episode 1|12:09min</p>
      <a href="https://www.youtube.com/watch?v=6QoBpFUX6CE">Watch now</a>
    </div>
    <div class="card">
      <img class="card-img-top" src="../asset/broken .jpg" alt="">
      <h3>Broken</h3>
      <p>broken|seoson1:episode 1|12:09min</p>
      <a href="https://www.youtube.com/watch?v=6QoBpFUX6CE">Watch now</a>
    </div>
    <div class="card">
      <img class="card-img-top" src="../asset/broken .jpg" alt="">
      <h3>Broken</h3>
      <p>broken|seoson1:episode 1|12:09min</p>
      <a href="https://www.youtube.com/watch?v=6QoBpFUX6CE">Watch now</a>
    </div>
    <div class="card">
      <img class="card-img-top" src="../asset/broken .jpg" alt="">
      <h3>Broken</h3>
      <p>broken|seoson1:episode 1|12:09min</p>
      <a href="https://www.youtube.com/watch?v=6QoBpFUX6CE">Watch now</a>
    </div>
    <div class="card">
      <img class="card-img-top" src="../asset/broken .jpg" alt="">
      <h3>Broken</h3>
      <p>broken|seoson1:episode 1|12:09min</p>
      <a href="https://www.youtube.com/watch?v=6QoBpFUX6CE">Watch now</a>
    </div>
    <div class="card">
      <img class="card-img-top" src="../asset/broken .jpg" alt="">
      <h3>Broken</h3>
      <p>broken|seoson1:episode 1|12:09min</p>
      <a href="https://www.youtube.com/watch?v=6QoBpFUX6CE">Watch now</a>
    </div>
    <div class="card">
      <img class="card-img-top" src="../asset/broken .jpg" alt="">
      <h3>Broken</h3>
      <p>broken|seoson1:episode 1|12:09min</p>
      <a href="https://www.youtube.com/watch?v=6QoBpFUX6CE">Watch now</a>
    </div>

     -->


        <!-- Optional JavaScript -->
        <!-- jQuery first, then Popper.js, then Bootstrap JS -->
        <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"
          integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous">
        </script>
        <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js"
          integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous">
        </script>
        <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js"
          integrity="sha384-OgVRvuATP1z7JjHLkuOU7Xw704+h835Lr+6QL9UvYjZE3Ipu6Tp75j7Bh/kR0JKI" crossorigin="anonymous">
        </script>


</body>

</html>