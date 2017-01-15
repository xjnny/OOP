<?php

class Motorbike extends Vehicle {

    function __construct() {
	echo "I am a Motorbike!";
	parent::__construct();	
    }

     public function odometer() {
        return parent::odometer(). "on my odometer";
    }

    public function petrol() {
        return parent::petrol(). "litres of petrol";
    }   
}
