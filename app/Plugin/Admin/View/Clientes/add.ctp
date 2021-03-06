<div class="clientes form">

	<div class="row">
		<div class="col-md-12">
			<div class="page-header">
				<h1><?php echo __('Add Cliente'); ?></h1>
			</div>
		</div>
	</div>



	<div class="row">
		<div class="col-md-3">
			<div class="actions">
				<div class="panel panel-default">
					<div class="panel-heading">Actions</div>
						<div class="panel-body">
							<ul class="nav nav-pills nav-stacked">

																<li><?php echo $this->Html->link(__('<span class="glyphicon glyphicon-list"></span>&nbsp;&nbsp;List Clientes'), array('action' => 'index'), array('escape' => false)); ?></li>
									<li><?php echo $this->Html->link(__('<span class="glyphicon glyphicon-list"></span>&nbsp;&nbsp;List Cidades'), array('controller' => 'cidades', 'action' => 'index'), array('escape' => false)); ?> </li>
		<li><?php echo $this->Html->link(__('<span class="glyphicon glyphicon-plus"></span>&nbsp;&nbsp;New Cidade'), array('controller' => 'cidades', 'action' => 'add'), array('escape' => false)); ?> </li>
		<li><?php echo $this->Html->link(__('<span class="glyphicon glyphicon-list"></span>&nbsp;&nbsp;List Pedidos'), array('controller' => 'pedidos', 'action' => 'index'), array('escape' => false)); ?> </li>
		<li><?php echo $this->Html->link(__('<span class="glyphicon glyphicon-plus"></span>&nbsp;&nbsp;New Pedido'), array('controller' => 'pedidos', 'action' => 'add'), array('escape' => false)); ?> </li>
							</ul>
						</div>
					</div>
				</div>			
		</div><!-- end col md 3 -->
		<div class="col-md-9">
			<?php echo $this->Form->create('Cliente', array('role' => 'form')); ?>

				<div class="form-group">
					<?php echo $this->Form->input('nome_cliente', array('class' => 'form-control', 'placeholder' => 'Nome Cliente'));?>
				</div>
				<div class="form-group">
					<?php echo $this->Form->input('cpf_cliente', array('class' => 'form-control', 'placeholder' => 'Cpf Cliente'));?>
				</div>
				<div class="form-group">
					<?php echo $this->Form->input('rg_cliente', array('class' => 'form-control', 'placeholder' => 'Rg Cliente'));?>
				</div>
				<div class="form-group">
					<?php echo $this->Form->input('celular_cliente', array('class' => 'form-control', 'placeholder' => 'Celular Cliente'));?>
				</div>
				<div class="form-group">
					<?php echo $this->Form->input('telefone_cliente', array('class' => 'form-control', 'placeholder' => 'Telefone Cliente'));?>
				</div>
				<div class="form-group">
					<?php echo $this->Form->input('endereco_cliente', array('class' => 'form-control', 'placeholder' => 'Endereco Cliente'));?>
				</div>
				<div class="form-group">
					<?php echo $this->Form->input('bairro_cliente', array('class' => 'form-control', 'placeholder' => 'Bairro Cliente'));?>
				</div>
				<div class="form-group">
					<?php echo $this->Form->input('nr_endereco_cliente', array('class' => 'form-control', 'placeholder' => 'Nr Endereco Cliente'));?>
				</div>
				<div class="form-group">
					<?php echo $this->Form->input('cidade_id', array('class' => 'form-control', 'placeholder' => 'Cidade Id'));?>
				</div>
				<div class="form-group">
					<?php echo $this->Form->input('cep_cliente', array('class' => 'form-control', 'placeholder' => 'Cep Cliente'));?>
				</div>
				<div class="form-group">
					<?php echo $this->Form->input('complemento_cliente', array('class' => 'form-control', 'placeholder' => 'Complemento Cliente'));?>
				</div>
				<div class="form-group">
					<?php echo $this->Form->input('observacao_cliente', array('class' => 'form-control', 'placeholder' => 'Observacao Cliente'));?>
				</div>
				<div class="form-group">
					<?php echo $this->Form->input('email_cliente', array('class' => 'form-control', 'placeholder' => 'Email Cliente'));?>
				</div>
				<div class="form-group">
					<?php echo $this->Form->input('senha_cliente', array('class' => 'form-control', 'placeholder' => 'Senha Cliente'));?>
				</div>
				<div class="form-group">
					<?php echo $this->Form->submit(__('Submit'), array('class' => 'btn btn-default')); ?>
				</div>

			<?php echo $this->Form->end() ?>

		</div><!-- end col md 12 -->
	</div><!-- end row -->
</div>
