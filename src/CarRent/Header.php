<?php

namespace CarRent;

class Header {

	public function __construct() {
		$homepage = "http://v-ie.uek.krakow.pl/~s181008/app_dev.php";
		$baner = "http://i.imgur.com/kcs9A4M.png";
		$button1 = "http://i.imgur.com/94AUorF.png";
		$button2 = "http://i.imgur.com/gquR8Z0.png";
		$button3 = "http://i.imgur.com/oKn6xn4.png";
		
		echo "<center><div class='header'>";
		echo "<center><a href='$homepage'><img src='$baner' alt='BANER' width='600' height='170' align='center'></a><br>";
		echo "<a href='$homepage/lista'><img src='$button1' alt='PRZYCISK1'></a>";
		echo "<a href='$homepage/rezerwacja'><img src='$button2' alt='PRZYCISK2'></a>";
		echo "<a href='$homepage/kontakt'><img src='$button3' alt='PRZYCISK3'></a>";


	}	
}
