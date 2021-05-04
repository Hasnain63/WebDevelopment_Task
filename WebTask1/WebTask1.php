<?php
function showVariableDataType()
{

	$x = 5;
	$y = "hello";
	$z = 5.67;
	$a = array(1, 2);
	$result = is_int($y);
	if (is_int($x)) {
		echo "$x is integer";
	} else {
		echo "$x is not integer";
	}
	echo "<br>";

	if (is_string($y)) {
		echo "$y is String";
	} else {
		echo "$y is not String";
	}

	echo "<br> <br>";

	if (is_float($z)) {
		echo "$z is Float";
	} else {
		echo "$z is not Float";
	}

	echo "<br>";

	if (is_array($a)) {
		// print_r($a);
		echo json_encode($a) . 'is array';
	} else {
		print_r($a) . 'is not array';
	}




	/*
      Sample Output 
      $x is integer
      $y is string
      $z is Floating Point
      $a is an array */
}



function changeDataType()
{
	//For changing Datatype of variable code should be in this function
	$x = 3;
	$y = "hello";
	$z = 5.67;
	$a = array(1, 2);

	echo "<br>";

	var_dump($x);
	echo "<br>";
	var_dump($y);
	echo "<br>";
	var_dump($a);

	echo "<br>";
}

function typeCastVariables()
{
	//For casting Variables code should be in this function

	$x = 3;
	$y = "hello";
	$z = 5.67;
	$a = array(1, 2);
	echo "Before Typecasting <br>";
	var_dump($x);

	echo "<br> After Typecasting <br>";
	$x = (string) 3;

	var_dump($x);

	echo "<br> Y before type casting <br>";
	var_dump($y);

	echo "<br> Y after type casting<br>";
	$y = (int) 112;
	var_dump($y);


	echo "<br> Z before type casting <br>";
	var_dump($z);
	echo "<br> Z After type casting <br>";

	$y = (int) $y;

	$y = (string) "Jokes";

	$y =  "Coddalics";

	var_dump($y);
}

echo showVariableDataType();
echo changeDataType();
echo typeCastVariables();