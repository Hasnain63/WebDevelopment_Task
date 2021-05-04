<!DOCTYPE html>
<html>
<head>
	<title>First Page</title>
</head>
<body>
	<?php $secondPageVar = "I am variable passed from First Page";
	
	echo $_GET['firstpage'];

	?>
	<a href="second_page.php ? secondPageVar=<?php echo $secondPageVar; ?>&name=Mudassar">Move to Second Page</a>

	<form action="second_page.php" method="post">
		<label>First Name:</label>
		<input type="text" name="first_name" id="first_name">
		<br>

		<label>Last Name:</label>
		<input type="text" name="last_name" id="first_name">
		<br>

		<label>Email Address:</label>
		<input type="email" name="email" id="first_name">
		<br>

		<label>Phone Number:</label>
		<input type="number" name="phone" id="first_name">
		<br>
		
		<input type="submit" name="submit">
	</form>
</body>
</html>