<?php 

?>
<!DOCTYPE html>
<html>
<head>
	<title>First Page</title>
</head>
<body>
	<h1>Add User</h1>	<form method="POST" action="second_page.php">
		<label>First Name:</label>
		<input type="text" name="first_name" id="first_name" required >
		
		<br>

		<label>Last Name:</label>
		<input type="text" name="last_name" id="last_name" required>
		<br>

		<label>Email Address:</label>
		<input type="email" name="email" id="email" required >
		<br>

		<label>Password</label>
		<input type="password" name="password" id="password" required>
		<br>

		<label>Phone Number:</label>
		<input type="number" name="phone_number" id="phone_number" required>
		<input type="submit" name="submit">


		<br>
	</form>
</body>
</html>

