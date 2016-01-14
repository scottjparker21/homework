<?php

	//referring to road legal vehicles//

 	class Vehicle {

 		var $wheels = 4;
 		var $engine;
 		var $steering;
 		var $brakes;
 		var $speed = 15;


 		function __construct(){

 		$wheels;
 		$engine;
 		$steering;
 		$brakes;

 		}

 		function accelerate($desiredSpeed) {

 			while ($this->speed < $desiredSpeed) {

 				echo "acceleratering. \n";
 				$this->speed++;
 			}

 		 

 		}

 		function brake() {

 			//use brakes and decrease speed.
 			//pass in time that brake is depressed.
 			//in while loop (while depressed this->speed minus set number of decellerate)
 			;

 		}

 		function steer($direction) {

 			if ($direction == "left") {

 				echo "turning hard portside Captain. \n";
 			}
 			else if ($direction == "right") {

 				echo "turning hard starboard Captain. \n";
 			}
 		}

 		function slamBrakes($spd) {

 			$this->speed = $spd;
 			$count = $this->speed / 3;
 			$screech = 'screech';
 			

 			while ($count < $this->speed) {

 				$screech .= 'h';
 				$count++;

 			}

 			$screech .= '!';
 			echo "$screech \n";
 		}

 	}

 	class MotorVehicle extends Vehicle {

 		var $wheels;
 		var $brakes;
 		var $accelerator;
 		var $seats;
 		var $fuel = 9;
 		var $fuelTank;
 		var $engine;
 		var $steering;
 		var $ignition;
 		var $oil;
 		var $gear = 4;
 		var $clutch;
 		var $mpgRating;
 		var $transmission = 'automatic';
 		var $gearTotal = 4;

 		function __construct($mpg,$tankSize,$oil) {

 		$wheels;
 		$brakes;
 		$accelerator;
 		$seats;
 		$fuel;
 		$this->fuelTank = $tankSize;
 		$engine;
 		$steering;
 		$ignition;
 		$this->oil = $oil;
 		$gear;
 		$clutch;
 		$this->mpgRating = $mpg;

 		}


 		function changeGear($newGear) {

 			//use gears and clutch to change to a different gear.
 			if ($newGear <= $this->gearTotal) {

 			echo "changing gears \n";
 			$this->gear = $newGear;
 			echo "Vehicle is now in $this->gear gear. \n";

 			}
 			else {

 				echo "grinndddddd, pick a gear. \n";
 			}

 		}

 		function checkOil() {

 			if ($this->oil == "good") {

 				echo "dont change the oil yet.";
 			}
 			else if ($this->oil == "bad") {

 				echo "quick change the oil.";
 			}

 		}
 	

 		function startEngine($onOrOff) {

 			if ( $onOrOff == TRUE) {

 				echo "vroom-vroom \n";
 			}

 			else if ($onOrOff == FALSE) {

 				echo " this vehicle is not on.";
 			}
 			

 		}

 		function fillFuelTank() {

 			//use fuel and fuelTank to add more fuel.
 			if ($this->fuel < $this->fuelTank){

 				echo "filling up tank.\n";
 				$this->fuel = $this->fuelTank;
 				echo "fuel tank is full.\n";
 			}
 			else {

 				echo "tank already full.\n";
 			}

 		}

 		


 	function moped() {

 		$this->gear = 5;
 		$this->wheels = 2;
 		echo "moped has $this->wheels. wheels! \n ";


 	}


 		
 	}

 	class Car extends MotorVehicle {

 		var $tires;
 		var $discBrakes;
 		var $headLights = FALSE;
 		var $brakeLights;
 		var $engine;
 		var $transmission;
 		var $seats;
 		var $gasPedal;
 		var $brakePedal;
 		var $turnSignals;
 		var $direction;
 		var $tirePressure = 1;
 		var $name;
 		var $color;
 		var $odometer = 0;
 		var $fuel = 8;
 		var $rpm = 0;
 		var $redline = 7000;
 	

 		function __construct($name,$color,$milesPerGallon){

 		$tires = 4;
 		$discBrakes = 4;
 		$headLights = 2;
 		$brakeLights = 2;
 		$engine = 1;
 		$transmission = 1;
 		$seats = 0;
 		$gasPedal = 1;
 		$brakePedal = 1;
 		$turnSignals = 4;
 		$this->name = $name;
 		$this->color = $color;
 		$this->mpgRating = $milesPerGallon;

 		}

 		function headLightsOnOff($onOff) {

 			if ($onOff == TRUE) {

 				echo "headlights on. \n";
 			}
 			else if ($onOff == FALSE) {

 				echo "headlights off. \n";
 			}

 			
 		}


 		function manualCar() {

 			$this->transmission = "manual";
 			$this->gearTotal = 5;

 			echo "this $this->name's transmission is $this->transmission. \n";
 		}

 		function odometer($miles) {

 			$mileage = 0;

 			for($i = 0 ; $i < $miles; $i++) {

 				$mileage++;

 			}
 				$this->odometer = $this->odometer + $mileage;

 				echo "this $this->name's mileage = $this->odometer. \n";

 		}	


 		function turnSignal($dir) {

 			$direction = $dir;

 			if ($direction == 'left') {

					echo " \033[5mLeft Blinker\033[0m \n";
				
			}

			if ($direction == 'right') {
 				
	 		echo " \033[5mRight Blinker\033[0m \n";	

 			}
 		}

 		function milesUntilEmpty() {

 			echo ($this->mpgRating * $this->fuel) . " miles until empty \n";

 		}

 		function dragRace() {


 			for ( $this->gear = 0; $this->gear < $this->gearTotal; $this->gear++) {

	 				if($this->gear > 0) {
	 					//turbo blow off valve noise.
	 					echo "pshhtt ";
	 				}
	 				if ($this->gear == 0) {

	 					$this->rpm = 0;
	 				}
	 				else if($this->gear > 0) {

	 					$this->rpm = 4000;
	 				}

 				for ($i = $this->rpm; $i < $this->redline; $i= $i + 1000) {

 					echo $i . " ";
 					
 				}

 					echo "shift! ";

 			}

 		}

 		function windshieldWipers($onOff) {

 			if ($onOff == "on") {

 				while ($i < 6) {

 					echo "wipe wipe. ";
 					$i++;
 				}

 				echo "\n";

 			}


 		}

 	}


 	$explorer = new MotorVehicle(13,18,"good");
	$explorer->fillFuelTank();
	$explorer->changeGear(3);
	$explorer->startEngine(1);
	$explorer->slamBrakes(45);
	$explorer->steer("left");

	$scooter = new MotorVehicle(90,3,"bad");
	$scooter->moped();

	$miata = new Car('miata','red',35);
	$miata->manualCar();
	$miata->changeGear(5);
	$miata->headLightsOnOff(1);
	$miata->odometer(25);
	$miata->accelerate(20);
	$miata->turnSignal("left");
	$miata->milesUntilEmpty();
	$miata->dragRace();
	$miata->windshieldWipers("on")
	

 	?>