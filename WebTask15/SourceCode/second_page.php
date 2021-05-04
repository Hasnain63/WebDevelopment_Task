<!DOCTYPE html>
<html>

<head>
    <title>form submit</title>
</head>

<body>
    <?php
	session_start();


	// Recieve values from POST one by one
	if ($_POST) {
		if (isset($_POST['first_name']) && !empty($_POST['first_name'])) {
			$firstname = $_POST['first_name'];
		}
		if (isset($_POST['last_name']) && !empty($_POST['last_name'])) {
			$lastname = $_POST['last_name'];
		}
		if (isset($_POST['email']) && !empty($_POST['email'])) {
			$mail = $_POST['email'];
		}
		if (isset($_POST['password']) && !empty($_POST['password'])) {
			$pwd = $_POST['password'];
		}
		if (isset($_POST['phone_number']) && !empty($_POST['phone_number'])) {
			$phonenumber = $_POST['phone_number'];
		}
	}

	// write validations code if any of the validation fails the record should not be submitted into the database.

	$servername = "localhost";
	$username = "root";
	$password = "";
	$dbname = "mydb";


	// Create connection
	$conn = new mysqli($servername, $username, $password, $dbname);
	// Check connection
	$insert = "INSERT INTO information (firstname,lastname,email,password,phonenumber)
		VALUES ('$firstname','$lastname','$mail','$password','$phonenumber')";

	$q = "SELECT * FROM information WHERE firstname = 'husnain'";
	$result = mysqli_query($conn, $q);

	// print_r($result);


	$ins = mysqli_query($conn, $insert);

	if ($ins) {
		echo "Successfull";
	} else {
		echo "Failed";
	}




	//Write Insert Query here for User form



	$conn->close();
	?>

</body>

</html>