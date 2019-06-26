<div class="container-fluid" >
<h2><label>Venda Atual :</label>
<?php 
	$codId = implode($ultimoid);
		if(empty($codId)):
			$codId = 1 ;
		else: 
				$codId = $codId +1;
			?>		
<?php endif?>	
<input type="number" id="id2" name="codigo_venda" class="form-control-plaintext" readonly value="<?php echo $codId;?>">
	<br/>	
	<div class="form-row">
    <div class="form-group col-sm-8">
	<h2> <label>Lista de Produtos</label></h2>
	<table id="products_table" class="table table-hover">
		<tr>
			<th scope="col">Codigo do Produto</th>
			<th scope="col">Descrição do Produto</th>
			<th scope="col">Preço</th>
		</tr>
		<?php 
		$total =0;
		if(!empty($list)):
		foreach($list as $item):
		$total += (floatval($item['preco']));
		?>
			<tr>
			<th scope="row"><?php echo $item['codigo']; ?></th>
			<td><?php echo $item['descricao']; ?></td>
			<td>R$ <?php echo number_format($item['preco'],2 ,',','.') ; ?></td>
			</tr>
		<?php endforeach?>
		<?php endif?>	
		<tr>	
		<td colspan="2">Total :</td>
		<td>R$ <?php echo number_format($total,2 ,',','.') ; ?></td>
		</tr>
	</table>
	</div>
    <div class="form-group col-md-4">
	<form method="POST" action="<?php echo BASE_URL; ?>home/addProduto" >
		<fieldset>
		<legend>Produtos</legend>
			<input type="hidden" name="codigo_venda" id="id1">
			<input required type="number" name="codigo_produto" class="form-control" />
			<input type="submit" class="adicionar" value="Adicionar Produto" />
		<br/><br/>
		</fieldset>
	</form>
	</div>
	
	<div class="row">
    	<div class="col">	
	<form method="POST" action="<?php echo BASE_URL; ?>home/cancelarVenda">
	<input type="hidden" name="total_venda" value="<?php echo $total; ?>">
	<input type="hidden" name="codigo_venda" id="id4">
	<input type="submit" class="cancelar" value="Cancelar Venda" />
	</form>	
	</div>
    <div class="col">	
	<form method="POST" action="<?php echo BASE_URL; ?>home/addVenda">
	<input type="hidden" name="total_venda" value="<?php echo $total; ?>">
	<input type="hidden" name="codigo_venda" id="id3">
	<input type="submit" class="adicionar" value="Adicionar Venda" />
	</form>
	</div>
  </div>
	</div>
	</div>
	<script>
	window.onload = function(){
	document.getElementById('id1').value = document.getElementById('id2').value;
	document.getElementById('id3').value = document.getElementById('id2').value;
	document.getElementById('id4').value = document.getElementById('id2').value;
}
</script>
<script type="text/javascript" src="<?php echo BASE_URL; ?>/assets/js/jquery.min.js"></script>
<script type="text/javascript" src="<?php echo BASE_URL; ?>/assets/js/script.js"></script>