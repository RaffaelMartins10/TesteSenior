<?php
namespace Controllers;

use \Core\Controller;
use \Models\Produtos;

class ProdutosController extends Controller {

	
	public function __construct() {
	}

	public function index() {
		$this->loadTemplate('produtos_add');
	}

	public function add_action(){
			
			$codigo_produto = $_POST['codigo_produto'];
			$produto_nome = $_POST['produto_nome'];
			$preco_produto = $_POST['preco_produto'];
	
			$produto = new Produtos();
			$produto->add($codigo_produto,$produto_nome,$preco_produto);
						
			$this->loadTemplate('produtos_add');
		
	}

	
}