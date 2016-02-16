<?php

namespace AppBundle\Controller;

use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\HttpFoundation\RedirectResponse;
use Symfony\Component\HttpFoundation\RedirectRequest;
use CarRent\Header;
use CarRent\Main;
use CarRent\Lista;
use CarRent\Rezerwacja;
use CarRent\Kontakt;
use Symfony\Component\Serializer\Serializer;
use Symfony\Component\Serializer\Encoder\XmlEncoder;
use Symfony\Component\Serializer\Normalizer\GetSetMethodNormalizer;


class DefaultController extends Controller
{
    
    public function indexAction(Request $request) {

		$header = new Header();
		$page = new Main();
		return $this->render('default/styles.html.twig');    
	}

	public function listaAction() {
		$header = new Header();
		$page = new Lista();
		return $this->render('default/styles.html.twig');   
	
	}

	public function rezerwacjaAction() {
		$header = new Header();
		$page = new Rezerwacja();
		return $this->render('default/styles.html.twig');   

	
	}

	public function kontaktAction() {
		$header = new Header();
		$page = new Kontakt();
		return $this->render('default/styles.html.twig'); 
	}

	public function platnoscAction(Request $request) {
		$id = $request->get('id_samochodu');
		return new Response('chce zap³aciæ sa samochód $id');
	
	}




}