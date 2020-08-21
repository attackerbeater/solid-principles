<?php 

class Engine {

	public function start() {
		return false;
	} 

}
class Battery {}
class Radiator {}
class Alternator {}
class FrontAxle {}
class Brakes {}
class FrontSteeringSuspension {}
class Transmission {}
class CatalyticConverter {}
class Muffler {}
class RearAxle {}
class TailPipe {}
class FuleTank {}
class RearSuspension {}
class Driver {

	public function available() {
		return false;
	} 
}

class Car {

	protected $_engine = false;
	protected $_battery = false;
	// protected $_driver = false;

	public function __construct(
		Engine $engine,
		Driver $driver
	) {
		$this->_engine = $engine;
		$this->_driver = $driver;	

	}

	public function run() {

		if(!$this->_driver->available()) {
			throw new Exception("The Driver is not available", 1);
		}		

		if(!$this->_engine->start()) {
			$this->_engine = true;
		}
		
		if($this->_engine && !$this->_battery){
		 	$this->_battery = true;	
		}

		echo 'xxxxxxxxxxxxxx';


	}

	public function stop() {

	} 
}


$objCar = new Car(
	new Engine(),
	new Driver()
);
$objCar->run();