<!-- <h1>Factorial</h1> -->
<?php




function getfactorial($x)
{

	$facto = 1;

	if (is_int($x)) {
		for ($i = 1; $i <= $x; $i++) {
			$facto = $facto * $i;
		}

		return $facto;
	} else {
		echo "Not an integer ";
	}
}

$res = getfactorial(6);

echo $res;
?>
<hr>
<?php /*Following HTML + PHP Code Generates Chess Board. Use Loops to create 
black and white chess boxes. Chess Board should contain 8 Rows and 8 Columns
*/   ?>
<h1>Chess Board</h1>


<?php

function iseven($n1, $n2)

{
	if (($n1 + $n2) % 2) {
		return true;
	} else {

		return false;
	}
}

function createChessBoard()
{
	for ($row = 1; $row <= 8; $row++) {
		echo "<br>";
		for ($col = 1; $col <= 8; $col++) {
			if (iseven($row, $col)) {

				echo "<div style='height:35px; width:35px; background-color:#000000;display:inline-block'></div> ";
			} else {
				echo "<div style='height:35px; width:35px; background-color:#fff;display:inline-block'></div> ";
			}
		}
	}
}
createChessBoard();
?>