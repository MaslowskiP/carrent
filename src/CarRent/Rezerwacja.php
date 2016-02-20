<?php

namespace CarRent;

class Rezerwacja {

	public function __construct() {

		$xml_doc = 'cars.xml';
		$asd = simplexml_load_file($xml_doc); 
		if($asd) 
			{ 
			echo '<h1>Wybierz samochód:</h1>'; 
			$cars = $asd->carlist->car; 
			echo "<center><table border='1'>";
			echo "<tr><td>Marka</td><td>Model</td><td>Rocznik</td><td>Kolor</td><td>Cena za dzień</td><td>Status</td></tr>";
			foreach($cars as $car) 
				{ 
				$brand = $car->brand; 
				$model = $car->model; 
				$year = $car->year; 
				$color = $car->color;
				$id = $car->id; 
				$cost = $car->cost; 
				$status = $car->status; 
				if ($status == 1)
				{
					$status = "<a href='http://v-ie.uek.krakow.pl/~s181008/app_dev.php/akceptacja/$id'>Rezerwuj</a>";
				} else {
					$status = "Zaj�ty";
				}
					
				echo '<tr><td>'.$brand.'</td><td>'.$model.'</td><td>'.$year.'</td><td>'.$color.'</td><td>'.$cost.' zł</td><td>'.$status.'</td></tr>';
				}
			}
	}		
}