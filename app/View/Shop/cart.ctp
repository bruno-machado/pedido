<?php echo $this->set('title_for_layout', 'Minha Comida'); ?>

<?php echo $this->Html->script(array('cart.js'), array('inline' => false)); ?>

<h1>Minha Comida</h1>

<?php if(empty($shop['OrderItem'])) : ?>

Shopping Cart is empty

<?php else: ?>

<?php echo $this->Form->create(NULL, array('url' => array('controller' => 'shop', 'action' => 'cartupdate'))); ?>

<hr>

<div class="row">
	<div class="col col-sm-1">Img</div>
	<div class="col col-sm-7">Item</div>
	<div class="col col-sm-1">Preço</div>
	<div class="col col-sm-1">Quantidade</div>
	<div class="col col-sm-1">Subtotal</div>
	<div class="col col-sm-1">Remover</div>
</div>

<?php $tabindex = 1; ?>
<?php foreach ($shop['OrderItem'] as $key => $item): ?>
	<div class="row item-carrinho" id="row-<?php echo $key; ?>">
		<div class="col col-sm-1"><?php echo $this->Html->image('/files/produtos/thumbnail/' . $item['Product']['Foto'][0]['url'], array('class' => 'px60')); ?></div>
		<div class="col col-sm-7">
			<strong><?php echo $item['Product']['nome_produto']; ?></strong>
			<?php
			$mods = 0;
			if(isset($item['Product']['productmod_name'])) :
			$mods = $item['Product']['productmod_id'];
			?>
			<br />
			<small><?php echo $item['Product']['productmod_name']; ?></small>
			<?php endif; ?>
		</div>
		<div class="col col-sm-1" id="price-<?php echo $key; ?>"><?php echo $item['Product']['preco']; ?></div>
		<div class="col col-sm-1"><?php echo $this->Form->input('quantity-' . $key, array('div' => false, 'class' => 'numeric form-control input-small', 'label' => false, 'size' => 2, 'maxlength' => 2, 'tabindex' => $tabindex++, 'data-id' => $item['Product']['id'], 'data-mods' => $mods, 'value' => $item['quantity'])); ?></div>
		<div class="col col-sm-1" id="subtotal_<?php echo $key; ?>"><?php echo $item['subtotal']; ?></div>
		<div class="col col-sm-1"><span class="remove" id="<?php echo $key; ?>">eadasd</span></div>
	</div>
<?php endforeach; ?>

<hr>

<div class="row">
	<div class="col col-sm-12">
		<div class="pull-right">
		<?php echo $this->Html->link('<i class="icon-remove icon"></i> Limpar carrinho', array('controller' => 'shop', 'action' => 'clear'), array('class' => 'btn btn-danger', 'escape' => false)); ?>
		&nbsp; &nbsp;
		<?php echo $this->Form->button('<i class="icon-refresh icon"></i> Recalcular Valores', array('class' => 'btn btn-default', 'escape' => false));?>
		<?php echo $this->Form->end(); ?>
		</div>
	</div>
</div>

<hr>

<div class="row">
	<div class="col col-sm-12 pull-right tr">
		Subtotal: <span class="normal" id="subtotal">$<?php echo $shop['Order']['subtotal']; ?></span>
		<br />
		Valor Total: <span class="red" id="total">$<?php echo $shop['Order']['total']; ?></span>
		<br />
		<br />

		<?php echo $this->Html->link('<i class="glyphicon glyphicon-arrow-right"></i> Finalizar', array('controller' => 'shop', 'action' => 'address'), array('class' => 'btn btn-primary', 'escape' => false)); ?>

		<br />
		<br />

		<?php echo $this->Form->create(NULL, array('url' => array('controller' => 'shop', 'action' => 'step1'))); ?>
		<?php echo $this->Form->end(); ?>


	</div>
</div>

<br />
<br />

<?php endif; ?>
