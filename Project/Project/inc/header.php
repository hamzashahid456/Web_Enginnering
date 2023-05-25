<!DOCTYPE html>
<html lang="en">

	<head>
		<div class="container">
			<h1>
				<center>Islam Online</center>	
			</h1>
			<img class="logo" src="Logo/logo.png"alt="The Analog Specialists" width="130" height="130" />
		</div>
		

		<link href="CSS/style.css" type="text/css" rel="stylesheet" />
	</head>
	
	<?php session_start(); // Start the session ?>
	<!-- <br> -->
	<ul class="navbar">
		<li class="nav"><a href="questions.php">Q/A</a></li>
		<li class="nav"><a href="articles.php">Articles</a></li>
		<li class="nav"><a href="ContactUs.php">Contact us</a></li>
		<li class="nav"><a href="AboutUs.php">About us</a></li>
		<?php if(isset($_SESSION['userID'])) { ?>
			<li class="nav"><a href="logout.php">Logout</a></li>
		<?php } else { ?>
			<li class="nav"><a href="login.php">Login</a></li>
			<?php } ?>
		<li class="nav"><a href="index.php">Home</a></li>
	</ul>