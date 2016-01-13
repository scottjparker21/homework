<?php


$array = array(1,4,9);
$new = array();
$offset = count($array) - 2;
$length = count($array);

// echo count($array);

	foreach ($array as $value) {

			$new[] = $value + 5; 

		}

	for ($y = 0 ; $y < $length; $y++) {

		$j = ($y + $offset) % $length;

		echo $new[$j] . ",";
	}

	// print_r($new);

?>