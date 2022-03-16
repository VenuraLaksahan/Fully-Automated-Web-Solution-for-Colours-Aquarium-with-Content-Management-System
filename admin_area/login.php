<?php

session_start();
include("includes/db.php");

?>

<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Admin Dashboard</title>
    <link rel="stylesheet" href="css/bootstrap-337.min.css">
    <link rel="stylesheet" href="font-awsome/css/font-awesome.min.css">
    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="css/login.css">
</head>

 <body>

 	<div class="container">

 		<form action="" class="form-login" method="post">

 			<h2 class="form-login-heading"><b> Admin Login </b> </h2>

 			<br>

 			<input type="email" class="form-control" placeholder="Email Address" name="admin_email" required>

 			<br>

 			<input type="password" class="form-control" placeholder="Password" name="admin_pass" required>

 			<br>

 			<button type="submit" class="btn btn-lg btn-primary btn-block" name="admin_login">

 				Login

 			</button>

			<br>

       		<p>

            <a style="text-decoration: none; color:black; font-size: 130%; margin-left: 5px;" href="adminfpw.php"><b><i> Forgot Password?</i></b></a>

        	</p>
 			
 		</form>
 		
 	</div>
 
 </body>
 
 </html>

 <?php

if (isset($_POST['admin_login'])) {

 	$admin_email = mysqli_real_escape_string($con,$_POST['admin_email']);

 	$admin_pass = mysqli_real_escape_string($con,$_POST['admin_pass']);

 	$get_admin = "select * from admins where admin_email='$admin_email' AND admin_pass='$admin_pass'";

 	$run_admin = mysqli_query($con,$get_admin);

 	$count = mysqli_num_rows($run_admin);

 	if($count==1){

 		$_SESSION['admin_email']=$admin_email;

 		echo "<script>alert('Logged In. Welcome Back')</script>";

 		echo "<script>window.open('index.php?dashboard','_self')</script>";

 	}else{

 		echo "<script>alert('Invalid Email or Password')</script>";
 	}
 } 

 ?>