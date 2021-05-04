<<h1>Reverse Array</h1>
    <?php

	function reverseArray($Arr)
	{

		$temp = [];



		for ($i = (count($Arr) - 1); $i >= 0; $i--) {

			$temp[] = $Arr[$i];
		}

		return $temp;
	}


	$fruits = [1, 2, 3, 4, 5, 6, 7, 8, 9, 0];
	$result = reverseArray($fruits);

	for ($i = 0; $i < count($result); $i++) {
		echo $result[$i];
	}
	?>
    <hr>

    <h1>Find Max Number in Array</h1>
    <?php

	function findMaxOfArray($Arr)
	{
		$max = 0;

		for ($i = 0; $i < count($Arr); $i++) {
			if ($max < $Arr[$i]) {
				$max = $Arr[$i];
			}
		}

		return $max;
	}

	$numbers = [23, 41, 63, 14, 540, 11, 66, 610];
	$result = findMaxOfArray($numbers);

	echo "Maximum of array is ";
	echo $result;
	?>
    <hr>
    <hr>
    <h1>Find and Return List of Even and Odd Numbers</h1>
    <?php
	function isEven($n)
	{
		if ($n % 2) {
			return false;
		} else {
			return true;
		}
	}
	function getEvenAndOddNumbers($Arr)
	{
		$odd = [];
		$even = [];

		for ($i = 0; $i < count($Arr); $i++) {

			if (isEven($Arr[$i])) {
				$even[] = $Arr[$i];
			} else {

				$odd[] = $Arr[$i];
			}
		}

		echo "<br>Even numbers are <br>";
		for ($i = 0; $i < count($even); $i++) {

			echo $even[$i];
		}

		echo "<br>Odd Numbers are <br>";
		for ($i = 0; $i < count($odd); $i++) {
			echo $odd[$i];
		}
	}
	$numbers = [1, 2, 3, 4, 5, 6, 7, 8, 9, 10, 11, 12, 13, 14];
	getEvenAndOddNumbers($numbers);





	// $ali = ["Mango","Strawberry","Bananas","Pineapple"];
	// echo "<br>";
	// $len=count($ali);
	// echo $len;

	?>
    <hr>