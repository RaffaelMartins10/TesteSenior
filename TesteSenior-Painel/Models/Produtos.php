<?php
namespace Models;

use \Core\Model;

class Produtos extends Model {

	public function add($codigo_produto,$produto_nome,$preco_produto) {
		$sql = "INSERT INTO produto (codigo, descricao, preco) VALUES (:codigo_produto, :produto_nome, :preco_produto)";
		$sql = $this->db->prepare($sql);
		$sql->bindValue(':codigo_produto', $codigo_produto);
		$sql->bindValue(':produto_nome', $produto_nome);
		$sql->bindValue(':preco_produto', $preco_produto);
		$sql->execute();
	}

	public function totalvenda(){
		$array = array();
		$sql = $this->db->prepare("SELECT SUM(total_venda) FROM documento WHERE status_venda =1");
		$sql->execute();
		if($sql->rowCount() > 0) {
			$array = $sql->fetch(\PDO::FETCH_ASSOC);	
		}	
			return $array;
	}
}













