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
			echo "<tr><td>Marka</td><td>Model</td><td>Rocznik</td><td>Kolor</td><td>Segment</td><td>Cena za dzień</td><td>Aktualny status samochodu</td></tr>";
			$dzisiaj = date('d-m-Y H:i'); 
			foreach($cars as $car) 
				{ 
				$brand = $car->brand; 
				$model = $car->model; 
				$year = $car->year; 
				$color = $car->color;
				$id = $car->id; 
				$cost = $car->cost; 
				$status = $car->status; 
				$date = $car->date;
				$class = $car->class;
				if ($status == 1 && $dzisiaj > $date)
				{
					$status = "<a href='http://v-ie.uek.krakow.pl/~s181008/app_dev.php/akceptacja/$id'>Rezerwuj samochód</a>";
				} else {
					$status = "Zarezerwowany do $date";
				}
					
				echo '<tr><td>'.$brand.'</td><td>'.$model.'</td><td>'.$year.'</td><td>'.$color.'</td><td>'.$class.'</td><td>'.$cost.' zł</td><td>'.$status.'</td></tr>';
				}
			}
	}		
}