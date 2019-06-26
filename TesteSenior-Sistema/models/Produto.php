<?php

class Produto extends model {

	public function getList($codigo_produto) {
		$array = array();
		$sql = $this->db->prepare("SELECT * FROM produto WHERE codigo = $codigo_produto");
		$sql->bindValue(":codigo", $codigo_produto);
		$sql->execute();
			if($sql->rowCount() > 0) {
			$array = $sql->fetch(\PDO::FETCH_ASSOC);	
		}	
			return $array;
	}
    	

	

	public function addProduto($id_documento,$id_produto) {
		$array = array();
		$sql = $this->db->prepare("INSERT INTO item SET id_documento = :id_documento , id_produto = :id_produto");
		$sql->bindValue(":id_documento", $id_documento);
		$sql->bindValue(":id_produto", $id_produto);
		$sql->execute();


	}


	public function getVenda($id_documento){
        $array = array();
		$sql = "SELECT p.codigo,p.descricao,p.preco, i.id_produto, i.id_documento
        FROM item i 
      	INNER JOIN produto p on i.id_produto = p.id
		WHERE  i.id_documento = $id_documento" ;     
		$sql = $this->db->prepare($sql); 
		$sql->execute();
		if($sql->rowCount() > 0) {
			$array = $sql->fetchAll(\PDO::FETCH_ASSOC);
		}
		return $array;


		}
		public function addVenda($codigo_venda,$total_venda) {
			
		$sql = $this->db->prepare("INSERT INTO documento SET cod_venda = :id_documento , total_venda = :total_venda, status_venda=1");
		$sql->bindValue(":id_documento", $codigo_venda);
		$sql->bindValue(":total_venda", $total_venda);
		$sql->execute();
			
			
		}
		public function cancelarVenda($codigo_venda,$total_venda) {
		
		$sql = $this->db->prepare("INSERT INTO documento SET cod_venda = :id_documento , total_venda = :total_venda, status_venda=2");
		$sql->bindValue(":id_documento", $codigo_venda);
		$sql->bindValue(":total_venda", $total_venda);
		$sql->execute();
		}

		public function getId(){
			$array = array();
			$sql= $this->db->prepare("SELECT id FROM documento ORDER BY id DESC LIMIT 1");
			$sql->execute();
			if($sql->rowCount() > 0) {
				$array = $sql->fetch(\PDO::FETCH_ASSOC);
			}
			return $array;

		}
	}









