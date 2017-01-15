<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <title>PHP OOP Example</title>
    </head>
    <body>
	<?php
	final class Index {

	    public function init() {
		spl_autoload_register(array($this, 'loadClass'));
	    }

	    public function loadClass($name) {
		$classes = array(
		    'VehicleInterface' => 'model/vehicleinterface.php',
		    'Vehicle' => 'model/vehicle.php',
		    'Car' => 'model/car.php',
		    'Motorbike' => 'model/motorbike.php'		    
		);
		if (!array_key_exists($name, $classes)) {
		    die('Class "' . $name . '" not found.');
		}
		require_once $classes[$name];
	    }

	    public function run() {
		$car = new Car();
		
                $car->setpetrol(20);
                $car->setodometer('95,000');
                
                echo $car->getpetrol()."<br/>";
                echo $car->getodometer()."<br/>";
						
		$motorbike = new Motorbike();
		
                $motorbike->setpetrol(5);
                $motorbike->setodometer('125,000');
                
                echo $motorbike->getpetrol()."<br/>";
                echo $motorbike->getodometer()."<br/>";
	    }
        }

	$index = new Index();
	$index->init();	
	$index->run();
	?>
    </body>
</html>
