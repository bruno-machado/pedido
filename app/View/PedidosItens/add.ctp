<div class="pedidosItens form">

	<div class="row">
		<div class="col-md-12">
			<div class="page-header">
				<h1><?php echo __('Add Pedidos Iten'); ?></h1>
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

																<li><?php echo $this->Html->link(__('<span class="glyphicon glyphicon-list"></span>&nbsp;&nbsp;List Pedidos Itens'), array('action' => 'index'), array('escape' => false)); ?></li>
									<li><?php echo $this->Html->link(__('<span class="glyphicon glyphicon-list"></span>&nbsp;&nbsp;List Estabelecimentos'), array('controller' => 'estabelecimentos', 'action' => 'index'), array('escape' => false)); ?> </li>
		<li><?php echo $this->Html->link(__('<span class="glyphicon glyphicon-plus"></span>&nbsp;&nbsp;New Estabelecimento'), array('controller' => 'estabelecimentos', 'action' => 'add'), array('escape' => false)); ?> </li>
		<li><?php echo $this->Html->link(__('<span class="glyphicon glyphicon-list"></span>&nbsp;&nbsp;List Produtos'), array('controller' => 'produtos', 'action' => 'index'), array('escape' => false)); ?> </li>
		<li><?php echo $this->Html->link(__('<span class="glyphicon glyphicon-plus"></span>&nbsp;&nbsp;New Produto'), array('controller' => 'produtos', 'action' => 'add'), array('escape' => false)); ?> </li>
							</ul>
						</div>
					</div>
				</div>			
		</div><!-- end col md 3 -->
		<div class="col-md-9">
			<?php echo $this->Form->create('PedidosIten', array('role' => 'form')); ?>

				<div class="form-group">
					<?php echo $this->Form->input('estabelecimento_id', array('class' => 'form-control', 'placeholder' => 'Estabelecimento Id'));?>
				</div>
				<div class="form-group">
					<?php echo $this->Form->input('produto_id', array('class' => 'form-control', 'placeholder' => 'Produto Id'));?>
				</div>
				<div class="form-group">
					<?php echo $this->Form->input('quantidade', array('class' => 'form-control', 'placeholder' => 'Quantidade'));?>
				</div>
				<div class="form-group">
					<?php echo $this->Form->input('valor_unitario', array('class' => 'form-control', 'placeholder' => 'Valor Unitario'));?>
				</div>
				<div class="form-group">
					<?php echo $this->Form->input('valor_desconto', array('class' => 'form-control', 'placeholder' => 'Valor Desconto'));?>
				</div>
				<div class="form-group">
					<?php echo $this->Form->input('percentual_desconto', array('class' => 'form-control', 'placeholder' => 'Percentual Desconto'));?>
				</div>
				<div class="form-group">
					<?php echo $this->Form->input('valor_acrescimo', array('class' => 'form-control', 'placeholder' => 'Valor Acrescimo'));?>
				</div>
				<div class="form-group">
					<?php echo $this->Form->input('precentaul_acrescimo', array('class' => 'form-control', 'placeholder' => 'Precentaul Acrescimo'));?>
				</div>
				<div class="form-group">
					<?php echo $this->Form->submit(__('Submit'), array('class' => 'btn btn-default')); ?>
				</div>

			<?php echo $this->Form->end() ?>

		</div><!-- end col md 12 -->
	</div><!-- end row -->
</div>
