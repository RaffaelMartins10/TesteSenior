<?php
namespace Controllers;

use \Core\Controller;
use \Models\Users;

class HomeController extends Controller {

	private $user;
	private $arrayInfo;

	public function __construct() {
	}

	public function index() {
		$this->loadTemplate('home');
	}

}