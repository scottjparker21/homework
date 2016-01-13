<?php

	class Fibonacci {

		
		var $c = 0;
		var $a = 0;
		var $b;
		var $n;
		var $counter = 0;
		

		function __construct($shift,$fin) {

				$this->b = $shift;
				$this->n = $fin + 1;

		}

		function generator() {

			

			if ($this->n == 0) {
				
				echo "exit if";
				print_r($this->array);
				return 0;
				
			}
				$this->a = $this->b + $this->c;
				$this->b = $this->c;
				$this->c = $this->a;


				$this->array[$this->counter] = $this->b ;
				

			if ($this->b != 0) {
				
				$this->counter++;
		
				}

				 $this->n = $this->n - 1;
			
			return $this->generator();

		}
			// return generator($this->$n - 1);
		

	}

	$fibonacci = new Fibonacci(5,9);
	echo $fibonacci->generator();

	 

	// function fib($a,$n) {

	// 		$c = 0;
	// 		$b = $a;

	// 	for($i = 0; $i < $n; $i++) {

	// 			$a = $b + $c;
	// 			$b = $c;
	// 			$c = $a;
				
				
				

	// 			echo  $i . " number in fib sequence  = " . $b . "\n";

	// 	}






	// }

	// fib(5,9);

?>