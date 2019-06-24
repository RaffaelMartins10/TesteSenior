<?php

class HomeController extends controller {

	private $array = array('');

    public function __construct() {
        parent::__construct();
    }

    public function index() {
        $this->$array = array();
        $this->loadTemplate('home', $this->$array);
    }

    public function getTeste(){
        if (isset($_POST['codigo_produto']) && !empty($_POST['codigo_produto'])) {
            $codigo_produto = addslashes($_POST['codigo_produto']);

            $sale = new Home;
            $this->$array['list'] = $sale->getList($codigo_produto);
        }

        $this->loadTemplate('home', $this->$array);
    }

    public function saveTeste(){
        $codigo_produto = addslashes($_POST['codigo_produto']);

        $sale = new Home;
        $sale->addSale();
    }


}