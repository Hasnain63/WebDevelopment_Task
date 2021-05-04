<?php 
	// Complete this function, it should return true in case of value is empty and false in case it is not empty
$str = "";
	//Validating username
	function username($value) {

		$striped = str_replace(' ','', $value);

		if(strlen($striped) <= 8 )
		{
			return true;

		}
		else
		{
			return false;
		}
	}

	//Validating password

	function password($password){

		$pass = array_filter(str_split($password),'ctype_alpha');

		if(preg_match('/[A-Z]/', $password))
		{
			if(sizeof($pass) >= 8)
			{
				if(preg_match('/[^A-Za-z\d]/', $password))
				{
					echo "<br>correct password";
				}
				else
				 {
					echo "<br>Password must have a special character";
					
						# code...
				 }
			}				
			else
			{
				echo "<br>password must have at  least 8 characters";

			}

		}
		else

		{
			echo " <br>Password must have capital letter ";
		}
}

		function email($mail)
		{
			if(preg_match('/[@]/',$mail) && preg_match('/[.]/',$mail))
			{
				echo "<br>Valid email";
			}
			else
			{
				echo "<br>invalid";
			}
		} 


	/*Complete this function, it should return true in case value is greater than max length and false in case it is not greater than max length*/
	function no($value) {
		$str = strval($value);
		{
			if(substr($str, 0,1) == '1' && strlen($str) == 11)
			{
				echo "<br>Valid number";
			}
			else
			{
				echo "<br>Invalid";
			}

		}

	}

?>