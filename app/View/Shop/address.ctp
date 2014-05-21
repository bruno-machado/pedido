<?php echo $this->set('title_for_layout', 'Endereço de Entrega'); ?>

<?php $this->Html->addCrumb('Endereço de Entrega'); ?>

<?php 
	echo $this->Html->script(array('shop_address.js'), array('inline' => false));

	echo $this->Html->script('jquery.maskedinput.min.js');
?>
<script type="text/javascript">
jQuery(function($){
	   $("#telefone").mask("(99)9999-9999");
	   $("#cep").mask("99999-999");
	});
</script>
<h1>Endereço de Entrega</h1>

<?php echo $this->Form->create('Order'); ?>

<hr>

<div class="row">
<div class="col col-sm-4">

<?php echo $this->Form->input('first_name', array('class' => 'form-control', 'label' => 'Nome:')); ?>
<br />
<?php echo $this->Form->input('last_name', array('class' => 'form-control','label' => 'Sobrenome:')); ?>
<br />
<?php echo $this->Form->input('email', array('class' => 'form-control','email' => 'Sobrenome:', 'type' => 'email')); ?>
<br />
<?php echo $this->Form->input('phone', array('class' => 'form-control','label' => 'Telefone:','id'=>'telefone')); ?>
<br />
</div>
<div class="col col-sm-4">

<?php echo $this->Form->input('shipping_address', array('class' => 'form-control', 'label' => 'Endereço:')); ?>
<br />
<?php echo $this->Form->input('shipping_city', array('class' => 'form-control','label'=> 'Cidade:')); ?>
<br />
<?php echo $this->Form->input('shipping_zip', array('class' => 'form-control','label' => 'Cep:', 'id' => 'cep')); ?>
<br />
<?php echo $this->Form->input('shipping_country', array('class' => 'form-control','label' => 'Proximidades:')); ?>
<br />
<br />

</div>
</div>

<br />

<?php echo $this->Form->button('Conferir dados', array('class' => 'btn btn-success btn-primary'));?>
<?php echo $this->Form->end(); ?>

