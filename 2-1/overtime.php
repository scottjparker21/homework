<?php

	$hours = 45;
	$rate = 10;
	$overtime = $rate * 1.5;

	if ($hours <= 40){

	 $pay =  $hours * $rate;

	}

	if ($hours > 40 ) {

		$pay = (40 * $rate) + (($hours - 40) * $overtime);

	}

	echo "Total Pay: " . $pay . "   ";