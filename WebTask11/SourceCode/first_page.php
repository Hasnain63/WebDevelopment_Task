<!DOCTYPE html>
<html>
<head>
	<title>First Page</title>
</head>
<body>
	<h1>Form Validations</h1>
	<form method="POST" action="second_page.php">
		<label>First Name:</label>
		<input type="text" name="first_name" required id="first_name">
		<br>

		<label>Last Name:</label>
		<input type="text" name="last_name" id="last_name">
		<br>

		<label>Email Address:</label>
		<input type="email" name="email" id="email">
		<br>

		<label>Password</label>
		<input type="password" name="password" id="password">
		<br>

		<label>Phone Number:</label>
		<input type="number" name="phone_number" id="phone_number">
		<br>
		<input type="submit" name="submit">
		


		<br>
	</form>
</body>
</html>