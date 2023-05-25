<?php include 'inc/header.php'; ?>
<!DOCTYPE html>
<html>
<head>
	<title>Contact Us</title>
	<style>
		body {
			background-color: #1a1a1a;
			color: #fff;
			font-family: Arial, sans-serif;
			font-size: 16px;
			line-height: 1.6;
			margin: 0;
			padding: 0;
		}
		
		label {
			font-size: 24px;
			margin-bottom: 10px;
		}
		input, textarea {
			background-color: #333;
			border: none;
			border-radius: 5px;
			color: #fff;
			font-size: 16px;
			margin-bottom: 20px;
			padding: 10px;
			width: 100%;
			max-width: 600px;
		}
		textarea {
			height: 200px;
			resize: none;
		}
		button {
			background-color: #fff;
			border: none;
			border-radius: 5px;
			color: #333;
			font-size: 24px;
			margin-top: 20px;
			padding: 10px 30px;
			cursor: pointer;
		}
		button:hover {
			background-color: #333;
			color: #fff;
		}
	</style>
</head>
<body>
	<div class="content">
		<center><h2>Contact Us</h2></center>	
		<form>
			<h3 for="name">Name:</h3>
			<input type="text" id="name" name="name" required><br>

			<h3 for="email">Email:</h3><br>
			<input type="email" id="email" name="email" required><br>

			<h3 for="message">Message:</h3><br>
			<textarea id="message" name="message" required></textarea><br>

			<button type="submit">Send Message</button>
		</form>
	</div>
</body>
</html>

	
