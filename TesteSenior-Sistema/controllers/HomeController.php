<?php

class HomeController extends controller {
 
    public function __construct() {
        parent::__construct();
    }

    public function index() {
       
        $array = array();
        $Produto = new Produto;
        $array['ultimoid'] = $Produto->getId();
        $this->loadTemplate('home',$array);
    }

    public function addProduto(){
        $array = array();
       if (isset($_POST['codigo_produto']) && !empty($_POST['codigo_produto'])) {
            $codigo_venda = addslashes($_POST['codigo_venda']);
            $codigo_produto = addslashes($_POST['codigo_produto']);
            $Produto = new Produto;
            $array['list'] = $Produto->getList($codigo_produto);
            
            $id_produto = $array['list']['id'];
            $id_documento =$codigo_venda;
            $Produto->addProduto($id_documento,$id_produto);

            $array['ultimoid'] = $Produto->getId();
       
            $array['list'] = $Produto->getVenda($id_documento);
           
        }
        //  header("Location: ".BASE_URL);
        $this->loadTemplate('home',$array);
    }

    public function addVenda(){
        $codigo_venda = addslashes($_POST['codigo_venda']);
        $total_venda = addslashes($_POST['total_venda']);

        $array = array();
        $Produto = new Produto;
        $array=$Produto->addVenda($codigo_venda,$total_venda);

        $array['ultimoid'] = $Produto->getId();
        header("Location: ".BASE_URL);
        // $this->loadTemplate('home',$array);
    }

    public function cancelarVenda(){
        $codigo_venda = addslashes($_POST['codigo_venda']);
        $total_venda = addslashes($_POST['total_venda']);
        $array = array();
        $Produto = new Produto;
        $array=$Produto->cancelarVenda($codigo_venda,$total_venda);

        $array['ultimoid'] = $Produto->getId();
        header("Location: ".BASE_URL);
        // $this->loadTemplate('home',$array);
    }

}