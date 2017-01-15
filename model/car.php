<?php

class Car extends Vehicle{

    function __construct() {
	echo "I am a car!";
    parent::__construct();
    }

    public function odometer() {
        return parent::odometer(). "on my odometer";
    }

    public function petrol() {
        return parent::petrol(). "litres of petrol";
       
    }
}
