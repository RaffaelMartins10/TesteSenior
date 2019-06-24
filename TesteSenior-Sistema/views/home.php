<h2><label>Venda Atual : </label>
	<label for="codigo_venda"> 1</label></h2>
	<div style="clear:both"></div>
	<br/>

	<h2> <label>Lista de Produtos</label></h2>
	<div class="listaProdutos" >
	<table id="products_table" class="products_table">
		<tr>
			<th>Codigo do Produto</th>
			<th>Descrição do Produto</th>
			<th>Preço</th>
		</tr>
		
		<?php foreach($list as $item): ?>
        	<tr>
        		<td><?php echo $item['codigo']; ?></td>
				<td><?php echo $item['descricao']; ?></td>
				<td><?php echo $item['preco']; ?></td>
        	</tr>
        <?php endforeach; ?>
	</table>
	</div>
	<br/>
	<div>

	
	<form method="POST" action="<?php echo BASE_URL; ?>Home/getTeste" >
	<fieldset>
		<legend>Produtos</legend>
			<input required type="number" name="codigo_produto" />
			<input type="submit" class="adicionar" value="Adicionar Produto" />
		<br/><br/>
	</fieldset>
	</div>
	</form>

	<div >
	<form action="<?php echo BASE_URL; ?>Home/saveTeste" method="post"></form>
	<input type="submit" class="cancelar" value="Cancelar Venda" />
	<input type="submit" class="adicionar" value="Adicionar Venda" />
	</form>
	</div>


<script type="text/javascript" src="<?php echo BASE_URL; ?>/assets/js/jquery.mask.js"></script>
<script type="text/javascript" src="<?php echo BASE_URL; ?>/assets/js/script_sales_add.js"></script>