<?php
	session_start();	
	include('db.php');
	if(isset($_POST['submit'])){
		$username = $_POST['username'];
		$password = $_POST['password'];
		
		$con = "SELECT * FROM `admin` WHERE username='".$username."' and password='".$password."'";
		$ss=mysqli_query($connection, $con);
		
		$run = mysqli_fetch_row($ss);
		
		if($run){
			$_SESSION['username']=$username;
    		header('location:index.php');
		}else{
			echo $message = '<div class="col-md-2 offset-md-5">
								<div class="alert alert-danger">
		    						<strong><center>Enter valid Username and Password</center></strong>
		  						</div>
							</div>';
		}
	}
?>


<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
	<link rel="icon" href="../images/icon.png" type="image/png">
	<title>Invoice Admin Panel | Lanware Systems</title>
	<link rel="stylesheet" type="text/css" href="css/all.css">
	<link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">
	<link rel="stylesheet" type="text/css" href="css/invoicelogin.css">

	<style>
		.card-signin{
			top: 36%;
		}
	</style>

</head>
<body>
	<div class="container">
		<div id="invoice-login">
			<div class="row">
      			<div class="col-sm-9 col-md-7 col-lg-5 mx-auto">
        			<div class="card card-signin my-5">
          				<div class="card-body">
            				<h5 class="card-title text-center">Sign In</h5>
            				<form class="form-signin" method="POST" action="">
	              				<div class="form-label-group">
				                	<input type="email" id="inputEmail" class="form-control" placeholder="Email address" required autofocus name="username">
				                	<label for="inputEmail">Email Address</label>
				             	</div>

              					<div class="form-label-group">
                					<input type="password" id="inputPassword" class="form-control" placeholder="Password" required name="password">
                					<label for="inputPassword">Password</label>
              					</div>

              					<div class="custom-control custom-checkbox mb-3">
                					<input type="checkbox" class="custom-control-input" id="customCheck1">
                					<label class="custom-control-label" for="customCheck1">Remember Password</label>
              					</div>
              					<button class="btn btn-lg btn-primary btn-block text-uppercase" type="submit" name="submit">Sign in</button>
              				</form>
              			</div>
              		</div>
              	</div>
            </div>  					
		</div>
	</div>

	<!-- Script -->
	<script src="js/bootstrap.bundle.min.js"></script>
	<script src="jquery.min.js"></script>
	<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
	<!-- END Script -->
</body>
</html>