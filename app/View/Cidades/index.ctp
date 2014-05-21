<div class="conteudo-capa clearfix">
	<h1 class="titulo-principal-capa">Procure abaixo onde fazer seu pedido</h1>
	
	<?php echo $this->Form->create(NULL, array('url' => array('controller' => 'estabelecimentos', 'action' => 'index'))); ?>
	<?php echo $this->Form->input('cidades', array('name'=>'country_id', 'label'=> false, 'id' => 'country_id'));?>	
    <?php echo $this->Form->button('BUSCAR', array('class' => 'btn-buscar addtocart'));?>
	<?php echo $this->Form->end(); ?>
	<div class="cozinheiro">Cozinheiro</div>
</div>
<script type="text/javascript">
	$(function () {
		$("#country_id").selectbox();
	});
</script>