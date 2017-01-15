<?php

class Vehicle implements VehicleInterface{
      
    private $odometer = 0;
    private $petrol = 0;
            
    function __construct() {
	echo "I am a Vehicle!";
    }
    
    public function getpetrol() {
	return "I have " . $this->petrol . " litres of petrol!";
    }
    public function setpetrol($litres) {
	$this->petrol = $litres;
    }
    public function petrol() {
    }
    
    public function getodometer() {
        return "I have " . $this->odometer . " on my odometer";
    }
    public function setodometer($kilometers) {
        $this->odometer = $kilometers;
    }
    public function odometer() {
    }
    
    }