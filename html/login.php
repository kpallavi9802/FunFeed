<!------ Include the above in your HEAD tag ---------->
<?php
    include '../partial/dbconnect.php';
    if($_SERVER["REQUEST_METHOD"] == "POST"){
        $login = false;
        $showError = false;
        $username = $_POST['username'];
        $password = $_POST['password'];
        
        $query = "SELECT * FROM `users` WHERE username = '$username' ";
        $result = mysqli_query($conn,$query);
        $checkUser = mysqli_num_rows($result);

        // if( $username == "" || $password ==""){
        //     $showError = "Please fill all the fields";
        // }
		// else 
		    if($checkUser == 1 ){
				while($row=mysqli_fetch_assoc($result)){
					if(password_verify($password, $row['password'])){
						$login = true;
						session_start();
						$_SESSION['loggedin'] = true;
						$_session['username'] = $useremail;
						header("location:explore.php");
					}
					else{
						$showError = "Wrong Password.";
					}
				}
            }
			else{
				$showError = "User Not Found";
			}
		}
?>

<!DOCTYPE html>
<html>

<head>
	<title>FunFeed-Login Page</title>

	<link href="https://unpkg.com/tailwindcss@^1.0/dist/tailwind.min.css" rel="stylesheet">
	<link href="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
	<script src="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.min.js"></script>
	<script src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>

	<!--Custom styles-->
	<link rel="stylesheet" type="text/css" href="../css/login.css">
	<!--Bootsrap 4 CDN-->
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css"
		integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">

	<!--Fontawesome CDN-->
	<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.3.1/css/all.css"
		integrity="sha384-mzrmE5qonljUremFsqc01SB46JvROS7bZs3IO2EmfFsd15uHvIt+Y8vEf7N7fWAU" crossorigin="anonymous">

	<style >
		#particles-js{
			background-color:black;
			/* background-size:cover;
			height:680px;
			position:absolute; */

		}
	</style>
</head>

<body>
	
	<div id="particles-js">
	<?php 
    if($login){
        echo '<div class="alert alert-success alert-dismissible fade show" role="alert">
        <strong>Success!</strong> You have successfully looged in.
        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
            <span aria-hidden="true">&times;</span>
        </button>
        </div>';
        
    }
    if($showError){
        echo '<div class="alert alert-danger alert-dismissible fade show" role="alert">
        <strong>Invalid Credentials!</strong>' . $showError. 
        '<button type="button" class="close" data-dismiss="alert" aria-label="Close">
            <span aria-hidden="true">&times;</span>
        </button>
        </div>';
    }
    ?>
	<div class="container">
		<div class="d-flex justify-content-center  h-100">

			<div class="card" style="width:550px;height:450px;margin-top:10%;margin-left:20%;box-shadow: 10px 10px 10px 10px #ffc312;">
				<div class="card-header" style="height: 130px;">
					<img style="margin:auto;border-radius:50%;width:70px;" ; src="../asset/images.png" alt="Sign Un"
						class="d-flex justify-content-center">
					<h3 style="text-align: center; color:#ffc312;">Login to FunFeed</h3>
				</div>
				<div  class="card-body" > 
					<form action="login.php" method="POST">
						<div class="input-group form-group">
							<div class="input-group-prepend">
								<span class="input-group-text"><i class="fas fa-user"></i></span>
							</div>
							<input type="text" class="form-control" placeholder="username" name="username">

						</div>
						<div class="input-group form-group">
							<div class="input-group-prepend">
								<span class="input-group-text"><i class="fas fa-key"></i></span>
							</div>
							<input type="password" class="form-control" placeholder="password" name="password">
						</div>
						<div class="row align-items-center remember">
							<input type="checkbox">Remember Me
						</div>

						<div class="form-group">
							<input type="submit" id="loginbtn" value="Login" class="btn float-right login_btn">
							<a style="text-decoration:none" href="homepage.php" style="color:yellow;">Back to homepage</a>
						</div>
						<div  class="d-flex justify-content-center links">
						Don't have an account?<a href="signup.php">Sign Up</a>
					</div>
					<div class="d-flex justify-content-center">
						<a href="forgetPassword.php">Forgot your password?</a>
					</div>
					</form>
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