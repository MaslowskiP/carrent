<?php

namespace CarRent;

class Formularz {
	public function __construct($id) {

$xml_doc = 'cars.xml';
$asd = simplexml_load_file($xml_doc); 
if($asd) 
	{ 
		$cars = $asd->carlist->car; 
		foreach($cars as $car) 
			{ 
				$brand = $car->brand; 
				$model = $car->model;
				$cost = $car->cost;  
				$id2 = $car->id;
				if ($id == $id2) 
					{
						break;
					} else {}

			} 
		}


//--- początek formularza ---
if(empty($_POST['submit'])) {


echo "Wybra�e� samoch�d $brand $model. W celu dokonania zakupu podaj sw�j adres mailowy oraz liczb� dni na kt�re chcesz wypo�yczy� samoch�d. Cena za jeden dzie� wynosi $cost z�otych.<table><form action='' method='post'><tr><td>E-Mail:</td><td><input type='text' name='formEmail'/></td></tr><tr><td>Wybierz ilo�� dni:</td><td><select name='howLong'><option>1</option><option>2</option><option>3</option><option>4</option><option>5</option><option>6</option><option>7</option><option>8</option><option>9</option><option>10</option><option>11</option><option>12</option><option>13</option><option>14</option><option>15</option><option>16</option><option>17</option><option>18</option><option>19</option><option>20</option><option>21</option><option>22</option><option>23</option><option>24</option><option>25</option><option>26</option><option>27</option><option>28</option><option>29</option><option>30</option></select></td></tr><tr><td>&nbsp;</td><td><input type='submit' name='submit' value='Wypo�ycz'/></td></tr></form></table>";
}	else {

		//dane z formularza
		$formEmail = $_POST['formEmail'];
		$howLong = $_POST['howLong'];


		if(!empty($formEmail)) {
		//--- początek funkcji weryfikującej adres e-mail ---
				function checkMail($checkmail) {
					if(filter_var($checkmail, FILTER_VALIDATE_EMAIL)) {
						$mailParts = explode('@', $checkmail);
						if(checkdnsrr(array_pop($mailParts),"MX")){
							return true;
						}	else{
								return false;
							}
					} 	else {
							return false;
						}
				}
		//--- koniec funkcji ---
		

			if(checkMail($formEmail)) {
				
				//tu jest data i obliczenie daty minus 30 dni
					$time = date("Y-m-d");;
					$time_minus_30_cache = mktime(date('H'), date('i'), 0, date('m'), date('d') - 30, date('Y'));
					$time_minus_30 = date("Y-m-d", $time_minus_30_cache);
				
				//sprawdzanie czy już istnieje taki mail i czy nie jest starszy niż 30 dni
				$xml_doc = 'Maile.xml';
				$abc = simplexml_load_file($xml_doc);
				$a = 0;
				if($abc) {  
						$poczta = $abc->lista;
						
						foreach($poczta->adres as $adres) 
						{
							$jeden = $adres->value;
							$dwa = $adres->data;
							if($formEmail == $jeden && $dwa > $time_minus_30 ){ //tu jest ten warunek
								$a++;
							} else{}
						}
					
					//TU WYŚWIETLA CZY JEST RABAT CZY NIE MA
					if($a >1){

						
						$a++;
						$cena;
						echo "Poniewa� to twoje $a zam�wienie w przeci�gu miesi�ca otrzymujesz rabat w wysoko�ci 20%<BR>";
						$cena = $howLong * $cost;
						$rabat = 20*$cena/100;
						$cena = $cena-$rabat;
						$potwierdzenie = 'http://v-ie.uek.krakow.pl/~s181008/app_dev.php/platnosc/?cost='.$cena.'&description='.$brand.'+'.$model.'&id='.$id;
						echo "Ca�kowity koszt wynosi $cena z�otych <a href='$potwierdzenie'>- zap�a�</a>";
					} else{
						$cena = $howLong * $cost;
						if ($howLong > 7)
							{
								echo "Poniewa� wypo�yczy�e� samoch�d na wi�cej ni� tydzie� dostajesz rabat 10%<BR>";
								$rabat = 10*$cena/100;
								$cena = $cena-$rabat;
							}

						echo "Ca�kowity koszt wynosi $cena z�otych";
						
					}
				}
				
				if(checkMail($formEmail)) { 
				//--- dodawanie rekordu do XMLA ---
				$xml = simplexml_load_file("Maile.xml");
				$nowy = $xml -> lista -> addChild("adres");
				$nowy -> addChild("value", $_POST["formEmail"]);
				$nowy -> addChild("data", $time);
				$xml -> asXML("Maile.xml");
				}
				  
				//wyświetlanie zawartości XML po dodaniu !! TO MOŻNA USUNĄĆ W FINALNEJ WERSJI !!
				$xml_doc = 'Maile.xml';
				$abc = simplexml_load_file($xml_doc);
				if($abc) { 
						echo '<h1>Lista adresow po dodaniu:</h1>'; 
						$poczta = $abc->lista;
						echo "<table border='1'>";
						echo "<tr><td>Mail</td><td>Data</td></tr>";
						foreach($poczta->adres as $adres) 
						{
							$jeden = $adres->value;
							$dwa = $adres->data;
							echo '<tr><td>'.$jeden.'</td><td>'.$dwa.'</td></tr>';
						} 
				} //do tąd usuwanie	
				 
			}	else {
					echo 'Adres e-mail jest niepoprawny';
				}

		} 	else {
			  //komunikat w przypadku nie powodzenia
			  echo 'Wypełnij wszystkie pola formularza';
			}

		//		--- koniec formularza ---
	}
}
}