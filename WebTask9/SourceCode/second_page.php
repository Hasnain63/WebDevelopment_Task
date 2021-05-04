<!DOCTYPE html>
<html>
<head>
	<title>Second Page</title>
</head>
<body>
	<?php $firstPageVar = "I am variable passed from Second Page";

	// write code to echo $secondPageVar from GET
	if (isset($_GET['secondpageVar'])) {
		echo $_GET['secondpageVar'];
		echo "<br>";
	}
	


	?>
	<a href="first_page.php ? firstpage=<?php echo $firstPageVar?>">Move to First Page</a>

	<?php
	echo "<br>";
	if (isset($_POST['first_name']))
	 {
		echo $_POST['first_name'];
	}
	echo "<br>";
	if (isset($_POST['last_name'])) {
		echo $_POST['last_name'];
		# code...
	}
	echo "<br>";
	if (isset($_POST['email'])) {
		echo $_POST['email'];
		
	}
	echo "<br>";
	if (isset($_POST['phone'])) {
		echo $_POST['phone'];
		}
	echo "<br>";

	?>
	
</body>
</html>