<?php

	// $string = "I walked to the store to buy milk.";
	// $delim = " ";
 //  	$array = array();
 //  	$stringlength = 0;

 //  	while ($string[$i] != " ") {

 //  		echo $i;

 //  	}

$string = "I walked to the store to buy milk.";
$x = 0;
$i = 0;
$word = '';
$delim = " ";
$array = [];
$length = 0;

//finds the length of string

while ($string[$length] != '') {

  			$length++;
  	}
 
//loops through and assigns each word to a space in the array.

for($j = 0; $j <= $length; $j++){

	
	if($string[$i] != $delim) {

		$word .= $string[$i];
		$i++;

	}

	else if ($string[$i] == $delim){

			$array[$x] = $word ;
			$x++;
			$i++;
			$word = '';


	}

}

//this is so last word prints out.

$array[$x] = $word;

print_r($array);

  	


?>