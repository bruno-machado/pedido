<?php echo $this->Html->script(array('addtocart.js'), array('inline' => false)); ?>

<?php
$this->Html->addCrumb($product['Product']['nome_produto']);
?>

<script>
$(document).ready(function() {

	$('#modselector').change(function(){
		$('#productprice').html($(this).find(':selected').data('price'));
		$('#modselected').val($(this).find(':selected').val());
	});

});
</script>

<h1><?php echo $product['Product']['nome_produto']; ?></h1>
<?php //var_dump($product);?>
<div class="row">

	<div class="col col-sm-7">
	<?php echo $this->Html->Image('/files/produtos/' . $product['ProdutosFoto'][0]['url'], array('alt' => $product['Product']['name'], 'class' => 'img-thumbnail img-responsive')); ?>
	</div>

	<div class="col col-sm-5">

		<strong><?php echo $product['Product']['nome_produto']; ?></strong>

		<br />
		<br />

		R$ <span id="productprice"><?php  echo $product['Product']['preco']; ?></span>

		<br />
		<br />

		<?php echo $this->Form->create(NULL, array('url' => array('controller' => 'shop', 'action' => 'add'))); ?>
		<?php echo $this->Form->input('id', array('type' => 'hidden', 'value' => $product['Product']['id'])); ?>

		<?php if(!empty($productmodshtml)):?>

			<div class="row">
  			<div class="col-sm-5">
			<span style="font-weight:bold">Product Options:</span> <?php echo $productmodshtml;?>
			</div>
			</div>
			<br />
			<input type="hidden" id="modselected" value="" />

		<?php endif;?>

		<?php echo $this->Form->button('Add to Cart', array('class' => 'btn btn-primary addtocart', 'id' => 'addtocart', 'id' => $product['Product']['id']));?>
		<?php echo $this->Form->end(); ?>

		<br />
                <b>Descrição:</b><br/>
		<?php echo $product['Product']['descricao_produto']; ?>

		<br />
		<br />

		

		Categoria: <?php echo $this->Html->link($product['Category']['descricao'], array('controller' => 'categories', 'action' => 'view', $product['Category']['id'])); ?>

		<br />

	</div>

</div>
