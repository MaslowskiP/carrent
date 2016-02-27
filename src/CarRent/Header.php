<?php

namespace CarRent;

class Header {

	public function __construct() {
		$homepage = "http://v-ie.uek.krakow.pl/~s181008/app_dev.php";
		$baner = "http://v-ie.uek.krakow.pl/~s181008/RJ.png";
		$button1 = "http://v-ie.uek.krakow.pl/~s181008/przycisk1.jpg";
		$button2 = "http://v-ie.uek.krakow.pl/~s181008/przycisk2.jpg";
		$button3 = "http://v-ie.uek.krakow.pl/~s181008/przycisk3.jpg";
		$blank = "http://v-ie.uek.krakow.pl/~s181008/blank.jpg";
		
		echo "<head><meta charset='UTF-8'><title>Wypożyczalnia Rycerze Jedi</title></head><body>";
		echo "<div class='page'><center><div class='header'>";
		echo "<center><a href='$homepage'><img src='$baner' alt='BANER' width='600' height='170' align='center'></a><br>";
		echo "<img src='$blank'>";
		echo "<a href='$homepage/lista'><img src='$button1' alt='PRZYCISK1'></a>";
		echo "<a href='$homepage/rezerwacja'><img src='$button2' alt='PRZYCISK2'></a>";
		echo "<a href='$homepage/kontakt'><img src='$button3' alt='PRZYCISK3'></a>";
		echo "<img src='$blank'></center><BR>";



	}	
}
