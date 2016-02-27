<?php

namespace CarRent;



class Lista {

	public function __construct() {

		$xml_doc = 'cars.xml';
		$asd = simplexml_load_file($xml_doc); 
		if($asd) 
			{ 
			echo '<h1>Lista samochodów:</h1>'; 
			$cars = $asd->carlist->car; 
			echo "<center><table border='1'>";
			echo "<tr><td>Marka</td><td>Model</td><td>Rocznik</td><td>Kolor</td><td>Segment</td><td>Cena za dzień</td></tr>";
			foreach($cars as $car) 
			{ 
				$brand = $car->brand; 
				$model = $car->model; 
				$year = $car->year; 
				$color = $car->color;
				$class = $car->class; 
				$cost = $car->cost;  
				$class = $car->class;

				echo '<tr><td>'.$brand.'</td><td>'.$model.'</td><td>'.$year.'</td><td>'.$color.'</td><td>'.$class.'</td><td>'.$cost.' zł</td></tr>';

			} 
		}
	}
}