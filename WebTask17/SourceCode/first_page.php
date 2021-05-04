<?php 
	//Write Select Query here and get data from database
	$server = "localhost";
	$username = "root";
	$password = "";
	$dbname = "task17";
	$conn = mysqli_connect($server , $username , $password , $dbname);


?>

<!DOCTYPE html>
<html>
<head>
	<title>First Page</title>
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/js/bootstrap.min.js"></script>
</head>
<body>
	<h1 style="text-align: center;">Add User</h1>
	<div class="container">
	<form method="POST" action="" class="form-group">
		<label>First Name:</label>
		<input type="text" name="first_name" id="first_name" value="" required class="form-control">
		<br>

		<label>Last Name:</label>
		<input type="text" name="last_name" id="last_name" value="" required class="form-control">
		<br>

		<label>Email Address:</label>
		<input type="email" name="email" id="email" value="" required class="form-control">
		<br>

		<label>Password</label>
		<input type="password" name="password" id="password" value="" required class="form-control">
		<br>

		<label>Phone Number:</label>
		<input type="number" name="phone_number" id="phone_number" value="" required class="form-control">
		<br>
		<input type="submit" name="submit" class="btn btn-primary">


		<br>
	</form>
</div>

<?php

	
	if(isset($_POST['submit']))
	{
		if(isset($_POST["first_name"])) 
		{
			$first_name = strip_tags(mysqli_real_escape_string($conn,$_POST["first_name"]));
			
		} 
		else
		{
			$first_name = "";
			
		}
		if(isset($_POST["last_name"])) 
		{
			$last_name = strip_tags(mysqli_real_escape_string($conn,$_POST["last_name"]));
		} else {
			$last_name = "";
		}
		if(isset($_POST["email"])) 
		{
			$email = strip_tags(mysqli_real_escape_string($conn,$_POST["email"]));
		} else {
			$email = "";
		}
		if(isset($_POST["password"])) 
		{
			$password = strip_tags(mysqli_real_escape_string($conn,$_POST["password"]));
		} else {
			$password = " ";
		}
		if(isset($_POST["phone_number"])) 
		{
			$phone_number = strip_tags(mysqli_real_escape_string($conn,$_POST["phone_number"]));
		} else {
			$phone_number = " ";
		}
	$sql = "INSERT INTO userinfo(firstname, lastname, email, password, phonenumber, time) VALUES (
		'".$first_name."','".$last_name."','".$email."','".$password."','".$phone_number."',CURRENT_TIMESTAMP())";
		$query = mysqli_query($conn , $sql);

		if ($query) {

			?>
			<script>
				alert("Added");
			</script>


			<?php

			}
	}


		// $conn->close();


 ?>

	<div class="container">
	  <h2>Users List</h2>
	  <table class="table table-condensed">
	    <thead>
	      <tr>
	      	<th>ID</th>
	        <th>Firstname</th>
	        <th>Lastname</th>
	        <th>Email</th>
	        <th>phone Number</th>
	        <th>Created at</th>
	        
	        
	      </tr>
	    </thead>
	    <tbody>
	    	<?php
	    	$selectquery = "SELECT * FROM userinfo";
	    	$query = mysqli_query($conn , $selectquery);

	    	while ($result = mysqli_fetch_assoc($query)) {

	    		?>

	      <tr>
	        <td><?php echo $result['id'];?></td>
	        <td><?php echo $result['firstname'];?></td>
	        <td><?php echo $result['lastname'];?></td>
	        <td><?php echo $result['email'];?></td>
	        <td><?php echo $result['phonenumber'];?></td>
	        <td><?php echo $result['time'];?></td>

	        <?php 
	    }

	    ?>
	      </tr>
	    </tbody>
	  </table>
	</div>
</body>
</html>