<?php

namespace AppBundle\Controller;

use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\HttpFoundation\RedirectResponse;
use Symfony\Component\HttpFoundation\RedirectRequest;
use CarRent\Header;



class DefaultController extends Controller
{
    
    public function indexAction(Request $request) {

		$strona = new Header();
		//return new Response('to jest strona g³ówna <BR>linki:<BR><a href="http://v-ie.uek.krakow.pl/~s181008/app_dev.php/lista">lista samochodów</a><BR><a href="http://v-ie.uek.krakow.pl/~s181008/app_dev.php/rezerwacja">rezerwacja samochodów</a><BR><a href="http://v-ie.uek.krakow.pl/~s181008/app_dev.php/platnosc/nazwa">p³atnoœæ samochodów</a>');
		return $this->render('default/styles.html.twig');    }

	public function listaAction() {
		return new Response('tutaj bêdzie lista samochodów tak jak w projekcie');
	
	}

	public function rezerwacjaAction() {
		return new Response('tu mo¿emy sobie rezerwowaæ samochody');
	
	}

	public function kontaktAction() {
		return new Response('tu bedzie kontakt jakis telefon itp itd');

	}

	public function platnoscAction(Request $request) {
		$id = $request->get('id_samochodu');
		return new Response('chce zap³aciæ sa samochód $id');
	
	}




}