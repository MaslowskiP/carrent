<?php

namespace AppBundle\Controller;

use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\HttpFoundation\RedirectResponse;
use Symfony\Component\HttpFoundation\RedirectRequest;


class DefaultController extends Controller
{
    
    public function indexAction(Request $request) {


		return new Response('to jest strona g��wna <BR>linki:<BR><a href="http://v-ie.uek.krakow.pl/~s181008/app_dev.php/lista">lista samochod�w</a><BR><a href="http://v-ie.uek.krakow.pl/~s181008/app_dev.php/rezerwacja">rezerwacja samochod�w</a><BR><a href="http://v-ie.uek.krakow.pl/~s181008/app_dev.php/platnosc/nazwa">p�atno�� samochod�w</a>');

    }

	public function listaAction() {
		return new Response('tutaj b�dzie lista samochod�w tak jak w projekcie');
	
	}

	public function rezerwacjaAction() {
		return new Response('tu mo�emy sobie rezerwowa� samochody');
	
	}

	public function platnoscAction(Request $request) {
		$id = $request->get('id_samochodu');
		return new Response('chce zap�aci� sa samoch�d $id');
	
	}




}