<?php
    include '../partial/dbconnect.php';
    if($_SERVER["REQUEST_METHOD"] == "POST"){
        $showAlert = false;
        $showError = false;
        $username = $_POST["username"];
        $useremail = $_POST["useremail"];
        $password = $_POST["password"];
        $cpassword = $_POST["cpassword"]; 
        
        $existsQuery = "SELECT * FROM `users` WHERE username = '$username' ";
        $result = mysqli_query($conn,$existsQuery);
        $numUserExists = mysqli_num_rows($result);

        if($username=="" || $password =="" || $useremail == "" || $cpassword==""){
            $showError = "Some fields are empty,Please fill all the fields";
        }
        else{
        
            if($numUserExists > 1 ){
                $showError = "User Already exists";
            }
            else{
                if($password == $cpassword){
                    $hashedPassword = password_hash($password,PASSWORD_DEFAULT);
                    $sql = "INSERT INTO `users` (`username`, `email`, `password`, `createdat`) VALUES ( '$username', '$useremail', '$hashedPassword', current_timestamp())";
                    $result = mysqli_query($conn,$sql);
                    if($result){
                        $showAlert = true;

                    }
                }
                
                else{
                    $showError = "Password do not match,Please enter again..";
                }
            }
        }

    }
?>
<!DOCTYPE html>
<html>
<head>
	<title>SignUp to FunFeed</title>

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
    <?php 
    if($showAlert){
        echo '<div class="alert alert-success alert-dismissible fade show" role="alert">
        <strong>Success!</strong> You have successfully created your account,You can login now.
        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
            <span aria-hidden="true">&times;</span>
        </button>
        </div>';
        
    }
    if($showError){
        echo '<div class="alert alert-danger alert-dismissible fade show" role="alert">
        <strong>Failed to Create User!</strong>' . $showError. 
        '<button type="button" class="close" data-dismiss="alert" aria-label="Close">
            <span aria-hidden="true">&times;</span>
        </button>
        </div>';
    }
    ?>
<div id="particles-js">
    <div class="container">
        <div class="d-flex justify-content-center h-100">
            <div class="card" style="width:500px;height:550px;margin-top:5%;margin-left:15%;box-shadow: 10px 10px 10px 10px #ffc312;">
                <div class="card-header" style="height:140px;">
                    <img style="margin:auto;border-radius:50%;width:70px;"; src="../asset/images.png" alt="Sign Un" class="d-flex justify-content-center"> -->
                    <h3 style="text-align:center;font-size:20px;color:#ffc312;">Sign Up Now</h3>
                </div>
                <div class="card-body" style="padding:30px 80px;height:320px;">
                    <form  action='signup.php' method="POST">
                        <div class="input-group form-group style="border-radius:80px;">
                            <div class="input-group-prepend" >
                                <span class="input-group-text"><i class="fas fa-user"></i></span>
                            </div> 
                            <input type="text" class="form-control" placeholder="username" maxlength="30" id="username" name="username">
                            
                        </div>
                        <div class="input-group form-group">
                            <div class="input-group-prepend">
                                <span class="input-group-text"><i class="fas fa-envelope"></i></span>
                            </div>
                            <input type="email" class="form-control" placeholder="email" id="useremail" name="useremail">
                            
                        </div>
                        <div class="input-group form-group">
                            <div class="input-group-prepend">
                                <span class="input-group-text"><i class="fas fa-key"></i></span>
                            </div>
                            <input type="password" class="form-control" maxlength="20" placeholder="Password" id="password" name="password">
                        </div>
                        <div class="input-group form-group">
                            <div class="input-group-prepend">
                                <span class="input-group-text"><i class="fas fa-check"></i></span>
                            </div>
                            <input type="password" class="form-control" maxlength="20" placeholder="Confirm Password" id="cpassword" name="cpassword">
                        </div>
                        <div class="form-group d-flex justify-content-center" style="border-radius:60px;">
                            <input type="submit" name="submit" value="register" class="btn float-left login_btn">
                           
                        </div>
                    </form>
                    <div class="d-flex justify-content-center links" >
                        Already have an account?<a style="color:blue;" href="login.php">Sign In</a>
                    </div>
                </div>
                
            </div>
        </div>
    </div>  
</div>
    
<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
    <!-- particles js files -->
	<script type="text/javascript" src="../js/particles.min.js"></script>
    <script type="text/javascript" src="../js/app.js"></script>


</body>
</html>