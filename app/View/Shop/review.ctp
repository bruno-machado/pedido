<?php echo $this->set('title_for_layout', 'Conferencia dos dados'); ?>

<?php $this->Html->addCrumb('Conferencia dos dados'); ?>

<?php echo $this->Html->script(array('shop_review.js'), array('inline' => false)); ?>

<style type="text/css">
	#ccbox {
		background: transparent url("<?php echo $this->webroot; ?>img/cards.png");
		margin: 0 0 10px 0;
		padding: 0 0 0 150px;
		width: 0;
		height: 23px;
		overflow: hidden;
	}
</style>

<h1>Conferencia dos dados</h1>

<hr>

<div class="row">
	<div class="col col-sm-4">
		<div class="panel panel-default">
			<div class="panel-heading">
				<h3 class="panel-title">Info Cliente</h3>
			</div>
			<div class="panel-body">
				Nome: <?php echo $shop['Order']['first_name'];?><br />
				Sobrenome: <?php echo $shop['Order']['last_name'];?><br />
				Email: <?php echo $shop['Order']['email'];?><br />
				Fone: <?php echo $shop['Order']['phone'];?>
			</div>
		</div>
	</div>
	<div class="col col-sm-4">
		<div class="panel panel-default">
			<div class="panel-heading">
				<h3 class="panel-title">Endereço de entrega</h3>
			</div>
			<div class="panel-body">
				Endereço: <?php echo $shop['Order']['shipping_address'];?><br />
				Cidade: <?php echo $shop['Order']['shipping_city'];?><br />
				CEP: <?php echo $shop['Order']['shipping_zip'];?><br />
				Complemento: <?php echo $shop['Order']['shipping_country'];?>
			</div>
			<?php echo $this->Html->link('Alterar Dados', array('controller' => 'shop', 'action' => 'address'), array('class' => 'btn btn-default btn-primary', 'escape' => false)); ?>
		</div>
	</div>
</div>

<hr>

<div class="row">
	<div class="col col-sm-1">#</div>
	<div class="col col-sm-6">Item</div>
	<div class="col col-sm-1">Preço</div>
	<div class="col col-sm-1" style="text-align: right;">quantidade</div>
	<div class="col col-sm-1" style="text-align: right;">SUBTOTAL</div>
</div>

<br />
<br />

<?php foreach ($shop['OrderItem'] as $item): ?>
<div class="row item-carrinho">
	<div class="col col-sm-1"><?php echo $this->Html->image('/files/produtos/thumbnail/' . $item['Product']['Foto'][0]['url'], array('height' => 60, 'class' => 'px60')); ?></div>
	<div class="col col-sm-6">
	<?php echo $item['Product']['name']; ?>
	<?php if(isset($item['Product']['productmod_name'])) : ?>
	<br />
	<small><?php echo $item['Product']['productmod_name']; ?></small>
	<?php endif; ?>
	</div>
	<div class="col col-sm-1">$<?php echo $item['Product']['preco']; ?></div>
	<div class="col col-sm-1" style="text-align: right;"><?php echo $item['quantity']; ?></div>
	<div class="col col-sm-1" style="text-align: right;">$<?php echo $item['subtotal']; ?></div>
</div>
<?php endforeach; ?>

<hr>

<div class="row">
	<div class="col col-sm-10">Produtos: <?php echo $shop['Order']['order_item_count']; ?></div>
	<div class="col col-sm-1" style="text-align: right;">Items: <?php echo $shop['Order']['quantity']; ?></div>
	<div class="col col-sm-1" style="text-align: right;">Total<br /><strong>$<?php echo $shop['Order']['total']; ?></strong></div>
</div>

<hr>

<br />
<br />

<?php echo $this->Form->create('Order'); ?>
<?php echo $this->Form->button('Finalizar Pedido', array('class' => 'btn btn-primary btn-success', 'ecape' => false)); ?>

<?php echo $this->Form->end(); ?>

<br />
<br />

