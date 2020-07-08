<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Funfeed-Video Upload</title>
</head>
<body>
    <div class="container" style="align:center">

          <!-- Modal Header -->
          <div>
            <p class="modal-title" style="font-size: 33px; color: #215d88;">WebSeries Upload Form</p>
            <button type="button" class="close" data-dismiss="modal" style="color: red;">&times;</button>
          </div>

          
          <div>
            <form method="POST" action="../php/checvideo.php" enctype="multipart/form-data">
              <div class="form-group">
                <label for="exampleInput">Name of Web Series</label>
                <input type="text" class="form-control" id="inputname" aria-describedby="emailHelp"
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
                <input type="number" class="form-control" id="inputseason" aria-describedby="emailHelp"
                  placeholder="Enter seasons" name="season">
              </div>

              <div class="form-group">
                <label for="sel1">Number of Episodes</label>
                <input type="number" class="form-control" id="inputepisode" aria-describedby="emailHelp"
                  placeholder="no. of episodes" name="episode">
              </div>

              <div class="form-group">
                <label for="sel1">Duration of Episodes</label>
                <input type="text" class="form-control" id="inputduration" aria-describedby="emailHelp"
                  placeholder="Duration" name="duration">
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

              <!-- <div class="form-group">
            <label for="exampleFormControlFile1">Video file input</label>
            <input type="file" class="form-control-file" id="videoinput" name="videoinput">
          </div> -->

              <button type="submit" name="submit" class="btn btn-primary" style="float: left;">Upload</button><br><br>

            </form>
          </div>

          <!-- Modal footer -->
          <div >

            <button type="button" class="btn btn-danger" data-dismiss="modal">Close</button>
          </div>

        
    </div>
    
</body>
</html>