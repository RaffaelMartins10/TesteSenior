<?php

class Home extends model {

	public function getList($codigo_produto) {

    	$array = array();

		$sql = $this->db->prepare("SELECT codigo,descricao,preco FROM produto WHERE codigo = :codigo");
		$sql->bindValue(":codigo", $codigo_produto);
		$sql->execute();
		
		if($sql->rowCount() > 0) {
			$array = $sql->fetchAll(\PDO::FETCH_ASSOC);	
		}else {
			echo('Produto Invalido');
		}
		return $array;
	}

	

	public function addSale() {
		$sql = $this->db->prepare("INSERT INTO documento SET id_company = :id_company");
		$sql->bindValue(":id_company", $id_company);
		$sql->execute();

		

	}

	
}









