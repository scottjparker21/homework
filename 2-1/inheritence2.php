<?php

	//referring to road legal vehicles//

 	class Vehicle {

 		var $something;
//still runs

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
 			;
 		}


 		
 	}

 	class Car extends MotorVehicle {

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
 		$turnSignals = 2;

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

 	?>