<?php
use Models\Sales;
class salesController extends controller {

	private $user;

    public function __construct() {
        parent::__construct();
    }

    public function index() {
        $dados = array();

        if (isset($_POST['codigo_produto']) && !empty($_POST['codigo_produto'])) {
            $codigo_produto = addslashes($_POST['codigo_produto']);

            echo "Entrou no Controller";
            $sale = new Sales;
            $sale-> getList($codigo_produto);

        }

        $this->loadTemplate('home', $dados);
    }

}