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

}













