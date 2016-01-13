<?php

	//referring to road legal vehicles//

 	class Vehicle {

 		var $wheels;
 		var $engine;
 		var $steering;
 		var $brakes;


 		function __construct(){

 		$wheels;
 		$engine;
 		$steering;
 		$brakes;

 		}

 		function accelerate() {

 		 //use accelerator, fuel, and engine to increase speed.
 			;

 		}

 		function brake() {

 			//use brakes and decrease speed.
 			;

 		}

 		function steer() {

 			//use variable steering to alter direction.
 			;
 		}

 	}

 	class MotorVehicle extends Vehicle {

 		var $wheels;
 		var $brakes;
 		var $accelerator;
 		var $seats;
 		var $fuel = 60;
 		var $fuelTank;
 		var $engine;
 		var $steering;
 		var $ignition;
 		var $oil;
 		var $gears;
 		var $clutch;

 		function __construct() {

 		$wheels;
 		$brakes;
 		$accelerator;
 		$seats;
 		$fuel;
 		$fuelTank;
 		$engine;
 		$steering;
 		$ignition;
 		$oil;
 		$gears;
 		$clutch;

 		}


 		function changeGear() {

 			//use gears and clutch to change to a different gear.
 			;

 		}

 		function changeOil() {

 			//empty out old oil and add new oil.
 			;

 		}

 		function stopEngine() {

 			//use ignition to stop engine.
 			;

 		}
 	

 		function startEngine() {

 			//use ignition, fuel, and engine to start up engine.
 			;

 		}

 		function fillFuelTank() {

 			//use fuel and fuelTank to add more fuel.
 			if ($this->fuel < 100){

 				echo "filling up tank.\n";
 				$this->fuel = 100;
 				echo "fuel tank is" . $this->fuel . "percent full.\n";
 			}

 		}


 		
 	}

 	class Car extends MotorVehicle {

 		var $tires;
 		var $discBrakes;
 		var $headLights;
 		var $brakeLights;
 		var $engine;
 		var $transmission;
 		var $seats;
 		var $gasPedal;
 		var $brakePedal;
 		var $turnSignals;

 		function __construct(){

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

 		}

 		function headLightsOn () {

 			//turn the headlights on for better visibility.
 			;

 		}

 		function turnSignal() {

 			//takes in left of right, lights up accordingly.
 			;

 		}

 		function inflateTires() {

 			//use pump to inflate tires.
 			;

 		}





 	}

 	$explorer = new MotorVehicle();
	$explorer->fillFuelTank();

 	?>