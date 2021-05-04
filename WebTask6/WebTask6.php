<h1>Find Tallest Candles To Blow</h1>
<?php
/*This function accepts an array and it should find the maximum of the array 
	and return its total Count*/
function findCandles($Arr)
{
	$Max = max($Arr);
	$CandleCount = 0;

	for ($i = 0; $i < sizeof($Arr); $i++) {
		if ($Arr[$i] === $Max) {
			$CandleCount++;
		}
	}

	echo $CandleCount;
}

$ar = [1, 2, 3, 6, 4, 4, 4, 6, 6, 6, 6];
echo "Candles Count: " . findCandles($ar);

?>
<hr>
<h1>Convert 12 Hour Format Time String to 24 Hour Format String</h1>
<?php
function convertTimeFormat($time12Hour)
{
	$timeInt = intval($time12Hour);
	echo $timeInt;
	$AMPM = substr($time12Hour, -2);

	if ($timeInt < 12 && $timeInt > 0 && $AMPM == 'PM') {
		if ($timeInt === 12) {
			$timeInt = "00";
			$time12Hour = substr_replace($time12Hour, "", -2);
			$time12Hour = substr($time12Hour, 2);


			return $timeInt . $time12Hour;
		} else {
			$timeInt = $timeInt + 12;
			$timeinstr = strval($timeInt);

			echo $timeinstr;
			// echo "<br>";

			$time12Hour = substr_replace($time12Hour, "", -2);


			$time12Hour = substr($time12Hour, 2);

			$final = $timeinstr . $time12Hour;
			return $final;
		}
	} else if ($timeInt > 12) {
		$result = "Invalid Time format";
		return $result;
	} else {
		$time12Hour = substr_replace($time12Hour, "", -2);
		return $time12Hour;
	}


	// echo "<br> Time in 24 Formate is ";



}
$time12Hour = "05:40:03PM";
$result = convertTimeFormat($time12Hour);

echo "Final  result for 24 hours  is ";
echo $result;
?>
<hr>
<hr>