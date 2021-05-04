<!DOCTYPE html>
<html>

<head>
    <title>User Submission Form</title>
</head>

<body>
    <?php

	$servername = "localhost";
	$username = "root";
	$password = "";
	$dbname = "task16";

	// Create connection
	$conn = new mysqli($servername, $username, $password, $dbname);
	// Check connection
	if ($conn->connect_error) {
		die("Connection failed: " . $conn->connect_error);
	}

	if (isset($_POST["first_name"])) {
		$first_name = mysqli_real_escape_string($conn, $_POST["first_name"]);
	} else {
		$first_name = "";
	}
	if (isset($_POST["last_name"])) {
		$last_name = mysqli_real_escape_string($conn, $_POST["last_name"]);
	} else {
		$last_name = "";
	}
	if (isset($_POST["email"])) {
		$email = mysqli_real_escape_string($conn, $_POST["email"]);
	} else {
		$email = "";
	}
	if (isset($_POST["password"])) {
		$password = mysqli_real_escape_string($conn, $_POST["password"]);
	} else {
		$password = "";
	}
	if (isset($_POST["phone_number"])) {
		$phone_number = mysqli_real_escape_string($conn, $_POST["phone_number"]);
	} else {
		$phone_number = "";
	}




	// write validations code if any of the validation fails the record should not be submitted into the database.

	//Write Insert Query here for User form
	$sql = "INSERT INTO userinfo(firstname, lastname, email, password, phonenumber, time) VALUES (
		'" . $first_name . "','" . $last_name . "','$email','$password','$phone_number',CURRENT_TIME())";
	$query = mysqli_query($conn, $sql);

	if ($query) {

		echo "Data Inserted Successfullys";
	}

	$conn->close();
	?>

</body>

</html>