<div class="conteudo-capa clearfix">
	<h1 class="titulo-principal-capa">Procure abaixo onde fazer seu pedido</h1>
	
	<?php echo $this->Form->input('cidades', array('name'=>'country_id', 'label'=> false, 'id' => 'country_id'));?>	

	<div class="cozinheiro">Cozinheiro</div>
</div>
<script type="text/javascript">
	$(function () {
		$("#country_id").selectbox();
	});
</script>