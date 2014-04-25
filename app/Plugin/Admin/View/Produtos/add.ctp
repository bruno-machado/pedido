<div class="produtos form">

	<div class="row">
		<div class="col-md-12">
			<div class="page-header">
				<h1><?php echo __('Cadastrar Produto'); ?></h1>
			</div>
		</div>
	</div>



	<div class="row">
		<div class="col-md-3">
			<div class="actions">
				<div class="panel panel-default">
					<div class="panel-heading">Ação</div>
						<div class="panel-body">
							<ul class="nav nav-pills nav-stacked">

																<li><?php echo $this->Html->link(__('<span class="glyphicon glyphicon-list"></span>&nbsp;&nbsp;Listar Produtos'), array('action' => 'index'), array('escape' => false)); ?></li>
							</ul>
						</div>
					</div>
				</div>			
		</div><!-- end col md 3 -->
		<div class="col-md-9">
			<?php echo $this->Form->create('Produto', array('role' => 'form')); ?>

				<div class="form-group">
					<?php echo $this->Form->input('categoria_id', array('class' => 'form-control', 'placeholder' => 'Categoria Id'));?>
				</div>
				<div class="form-group">
					<?php echo $this->Form->input('nome_produto', array('class' => 'form-control', 'placeholder' => 'Nome Produto'));?>
				</div>
				<div class="form-group">
					<?php echo $this->Form->input('descricao_produto', array('class' => 'form-control', 'placeholder' => 'Descrição Produto', 'label' => 'Descrição Produto'));?>
				</div>
				<div class="form-group">
					<?php echo $this->Form->submit(__('Cadastrar'), array('class' => 'btn btn-default')); ?>
				</div>

			<?php echo $this->Form->end() ?>

		</div><!-- end col md 12 -->
	</div><!-- end row -->
</div>
