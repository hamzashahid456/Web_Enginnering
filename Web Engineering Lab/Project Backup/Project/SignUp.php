<!DOCTYPE html>
<html lang="en">
	<head>
		<title> Signup Page </title>
		<link href="CSS/form.css" type="text/css" rel="stylesheet" />
	</head>
	<!-- <h1><center>Signup Page</center></h1> -->

	<body>
	<form class="signup" action="Database/insertUser.php" method="POST">
	<div class="container">
		<h3>Signup Page</h3>
			<p>Username: 
				<input type="text" name="username" size="15" maxlength="30" />
			</p>
			<p>Email: 
				<input type="email" name="email" size="15" maxlength="30" />
			</p>
			<p>Phone Number: 
				<input type="tel" name="phone" maxlength="12" pattern="[0-9]{12}" title="Invalid input! 12 digits maximum"/>
			</p>
			<p>Password: 
				<input type="password" name="password" size="15" maxlength="13" />
			</p>
			<p>Gender</p>
			<ul> 
				<li>
				<input id="rad" type="radio" name="gender" value="male" />Male
				<input id="rad" type="radio" name="gender" value="female" />Female
				<input id="rad" type="radio" name="gender" value="other" />Other
				</li>
			</ul>
			
			<button type="cancel" class="cancelbtn">Cancel</button>
			<button type="submit">Submit</button>
	</form>
	</body>
</html>
