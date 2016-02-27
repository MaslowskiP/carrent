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
use CarRent\Udany;

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
			'control' => $_GET['id'],
			'api_version' => 'dev',
			'URL' => 'http://v-ie.uek.krakow.pl/~s181008/app_dev.php/dziekujemy',
			'type' => '0',
		);
		 $url = sprintf(
            		'%s?%s',
            		'https://ssl.dotpay.pl/test_payment/',
           		 http_build_query($params)
       	 );		
		return new RedirectResponse($url);
	}

	public function potwierdzenieAction(Request $request) {

			$PIN = "igdN78jSAWTfuG8H3prwlCT2klt76JMa";

			$sign=$PIN.
				$request->request->get('id').
				$request->request->get('operation_number').
				$request->request->get('operation_type').
				$request->request->get('operation_status').
				$request->request->get('operation_amount').
				$request->request->get('operation_currency').
				$request->request->get('operation_withdrawal_amount').
				$request->request->get('operation_commission_amount').
				$request->request->get('operation_original_amount').
				$request->request->get('operation_original_currency').
				$request->request->get('operation_datetime').
				$request->request->get('operation_related_number').
				$request->request->get('control').
				$request->request->get('description').
				$request->request->get('email').
				$request->request->get('p_info').
				$request->request->get('p_email').
				$request->request->get('channel').
				$request->request->get('channel_country').
				$request->request->get('geoip_country');
			$signature=hash('sha256', $sign);
			$signature_check = $request->request->get('signature');
			
		if ($signature_check == $signature) {
	
			$mailto = $request->request->get('email');
			$topic = "Wypożyczenie samochodu";
			$message = "Transakcja przebiegła prawidłowo. Dziękujemy za skorzystanie z usług naszego serwisu.";
			$message = wordwrap($message, 70);
			$mailHeader = "From: Rycerze_Jedi; kontakt@rycerzejedi.com";
			mail($mailto, $topic, $message, $mailHeader) or die('Błąd: wiadomość nie została wysłana');
			$xml_doc = 'cars.xml';
			$asd = simplexml_load_file($xml_doc);
			$control_all = $request->request->get('control');
			list($id, $howLong) = explode("A", $control_all);
			$id = $id - 1;
			$time = date('d-m-Y H:i'); 
			$nowa = strtotime("+ ".$howLong." day",strtotime($time));
			$nowa = date('d-m-Y H:i', $nowa);
			$asd->carlist->car[$id]->date = $nowa;

			$asd -> asXML("cars.xml");
			
			return new Response('OK');
		} else {
			return new Response('FAIL');
		}
	}
	
	public function udanyAction() {
		$header = new Header();
		$page = new Udany();
		return $this->render('default/styles.html.twig');   
	
	}
}