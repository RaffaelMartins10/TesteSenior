<?php
namespace Controllers;

use \Core\Controller;
use \Models\Produtos;

class HomeController extends Controller {

	private $user;
	private $arrayInfo;

	public function __construct() {
	}

	public function index() {

		$array = array();
		$venda = new Produtos;
		$array['venda'] = $venda->totalvenda();
		$this->loadTemplate('home', $array);
	}

}