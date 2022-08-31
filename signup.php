<!--<?php 
	include 'db_connection.php';


 ?>-->











<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<title>Signup Form</title>
	<link rel="stylesheet" type="text/css" href="signup.css">
	<link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
</head>
<body>
	<div class="wrapper">
		<div class="header-area">
			<h2>MAKE TRIPS</h2>
			<h3>USER SIGN-UP</h3>
		</div>
		<div class="social-area">
			<i class="fa fa-facebook"></i>
			<i class="fa fa-twitter"></i>
			<i class="fa fa-google"></i>
		</div>
		<form action="login.php" method="POST">
		<div class="form-area">
			<i class="fa fa-user-circle"></i>
			<input type="text" name="name" placeholder="Enter your Name" required>
			<i class="fa fa-home"></i>
			<input type="text" name="address" placeholder="Enter your address" required>
			<i class="fa fa-envelope"></i>
			<input type="email" name="email" placeholder="Enter Email Address" required>
			<i class="fa fa-phone"></i>
			<input type="number" name="phone" placeholder="Enter Phone Number" required>
			<i class="fa fa-users"></i>
			<input type="text" name="username" placeholder="Enter Username" required>
			<i class="fa fa-key"></i>
			<input type="password" name="password" placeholder="Enter Password" required>
			
			
			<input type="submit" value="sign-up" >
		</div>
	    </form>
	</div>
</body>
</html>