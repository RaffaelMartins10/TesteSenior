<!-- Content Header (Page header) -->
<?php
$variavel = implode($venda);
$valor_float = floatval ($variavel);
?>

<section class="content-header">
<div class="grid-1">
		<div class="db-grid-area">
			<div class="db-grid-area-count">R$ <?php echo (number_format($valor_float,2,',','.')); ?></div>
			<div class="db-grid-area-legend">Total Vendas Finalizadas</div>
		</div>
	</div>

</section>

<!-- Main content -->
<section class="content container-fluid">


</section>

<script type="text/javascript" src="<?php echo BASE_URL; ?>/assets/js/script.js"></script>