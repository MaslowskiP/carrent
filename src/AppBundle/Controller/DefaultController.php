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
use CarRent\Formularz;


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

	public function akceptacjaAction(Request $request) {
		$id = $request->get('id_samochodu');
		$header = new Header();
		$page = new Formularz($id);
		return $this->render('default/styles.html.twig');   

	
	}

	public function kontaktAction() {
		$header = new Header();
		$page = new Kontakt();
		return $this->render('default/styles.html.twig'); 
	}

	public function platnoscAction(Request $request) {
			$params = array(
			'id' => '789420',
			'amount' => $_GET['cost'],
			'description' => $_GET['description'],
			'control' => 'z1',

			
		);

		
		
		

		//https://ssl.dotpay.pl/test_payment/?id=789420&amount=666.66
		 $url = sprintf(
            		'%s?%s',
            		'https://ssl.dotpay.pl/test_payment/',
           		 http_build_query($params)
       	 );		
		return new RedirectResponse($url);
	}

	public function potwierdzenieAction(Request $request) {
		$id = $request->get('id_samochodu');
		return new Response('chce zap³aciæ sa samochód $id');
	
	}





}