<!-- Content Header (Page header) 
O sistema deve possibilitar registrar: Código, Descrição e Preço dos produtos.

-->
<section class="content-header">
  <h1>
    Cadastro de Produtos
  </h1>
</section>

<!-- Main content -->
<section class="content container-fluid">

	<form method="POST" enctype="multipart/form-data" action="<?php echo BASE_URL; ?>produtos/add_action">
		<div class="box">
			<div class="box-header">
				<h3 class="box-title">Novo Produto</h3>
				<div class="box-tools">
					<input type="submit" class="btn btn-success" value="Salvar" />
				</div>
			</div>
			<div class="box-body">

			<div class="form-group ">
					<label for="p_stock">Codigo do Produto</label>
					<input required type="number" class="form-control" id="codigo_produto" name="codigo_produto" />
				</div>

				<div class="form-group">
					<label for="p_name">Nome do produto</label>
					<input required type="text" class="form-control" id="produto_nome" name="produto_nome" />
				</div>

				
				<div class="form-group">
					<label for="p_price">Preço</label>
					<input required type="text" class="form-control" id="preco_produto" name="preco_produto" />
				</div>
			</div>
		</div>
	</form>

</section>
<!-- /.content -->