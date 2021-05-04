<!DOCTYPE html>
<html>

<head>
    <title>Submission Form</title>
</head>

<body>
    <?php

	require_once("validation_functions.php");
	//Name should not be greater than 8 letters


	$usernamee = $_POST["first_name"] . $_POST["last_name"];
	if (isset($usernamee)) {

		if (username($usernamee)) {
			echo $_POST['first_name'] . " " . $_POST["last_name"];
		} else {
			echo "User name must not be greater than 8 words";
		}
	} else {
		echo "Eptiedddd";
	}

	password($_POST["password"]);
	email($_POST['email']);
	no($_POST['phone_number']);
	?>


</body>

</html>