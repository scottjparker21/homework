<?php

	$array = array(1,4,6,10,5,3);
	$i = 0;

	foreach ($array as $value) {

		if ($value > $i) {

			$i = $value;
		}
	}
	
	echo $i . "\n";


?>