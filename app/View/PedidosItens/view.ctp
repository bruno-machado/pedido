<div class="pedidosItens view">
	<div class="row">
		<div class="col-md-12">
			<div class="page-header">
				<h1><?php echo __('Pedidos Iten'); ?></h1>
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
									<li><?php echo $this->Html->link(__('<span class="glyphicon glyphicon-edit"></span>&nbsp&nbsp;Edit Pedidos Iten'), array('action' => 'edit', $pedidosIten['PedidosIten']['id']), array('escape' => false)); ?> </li>
		<li><?php echo $this->Form->postLink(__('<span class="glyphicon glyphicon-remove"></span>&nbsp;&nbsp;Delete Pedidos Iten'), array('action' => 'delete', $pedidosIten['PedidosIten']['id']), array('escape' => false), __('Are you sure you want to delete # %s?', $pedidosIten['PedidosIten']['id'])); ?> </li>
		<li><?php echo $this->Html->link(__('<span class="glyphicon glyphicon-list"></span>&nbsp&nbsp;List Pedidos Itens'), array('action' => 'index'), array('escape' => false)); ?> </li>
		<li><?php echo $this->Html->link(__('<span class="glyphicon glyphicon-plus"></span>&nbsp&nbsp;New Pedidos Iten'), array('action' => 'add'), array('escape' => false)); ?> </li>
		<li><?php echo $this->Html->link(__('<span class="glyphicon glyphicon-list"></span>&nbsp&nbsp;List Estabelecimentos'), array('controller' => 'estabelecimentos', 'action' => 'index'), array('escape' => false)); ?> </li>
		<li><?php echo $this->Html->link(__('<span class="glyphicon glyphicon-plus"></span>&nbsp&nbsp;New Estabelecimento'), array('controller' => 'estabelecimentos', 'action' => 'add'), array('escape' => false)); ?> </li>
		<li><?php echo $this->Html->link(__('<span class="glyphicon glyphicon-list"></span>&nbsp&nbsp;List Produtos'), array('controller' => 'produtos', 'action' => 'index'), array('escape' => false)); ?> </li>
		<li><?php echo $this->Html->link(__('<span class="glyphicon glyphicon-plus"></span>&nbsp&nbsp;New Produto'), array('controller' => 'produtos', 'action' => 'add'), array('escape' => false)); ?> </li>
							</ul>
						</div><!-- end body -->
				</div><!-- end panel -->
			</div><!-- end actions -->
		</div><!-- end col md 3 -->

		<div class="col-md-9">			
			<table cellpadding="0" cellspacing="0" class="table table-striped">
				<tbody>
				<tr>
		<th><?php echo __('Id'); ?></th>
		<td>
			<?php echo h($pedidosIten['PedidosIten']['id']); ?>
			&nbsp;
		</td>
</tr>
<tr>
		<th><?php echo __('Estabelecimento'); ?></th>
		<td>
			<?php echo $this->Html->link($pedidosIten['Estabelecimento']['nome_fantasia'], array('controller' => 'estabelecimentos', 'action' => 'view', $pedidosIten['Estabelecimento']['id'])); ?>
			&nbsp;
		</td>
</tr>
<tr>
		<th><?php echo __('Produto'); ?></th>
		<td>
			<?php echo $this->Html->link($pedidosIten['Produto']['id'], array('controller' => 'produtos', 'action' => 'view', $pedidosIten['Produto']['id'])); ?>
			&nbsp;
		</td>
</tr>
<tr>
		<th><?php echo __('Quantidade'); ?></th>
		<td>
			<?php echo h($pedidosIten['PedidosIten']['quantidade']); ?>
			&nbsp;
		</td>
</tr>
<tr>
		<th><?php echo __('Valor Unitario'); ?></th>
		<td>
			<?php echo h($pedidosIten['PedidosIten']['valor_unitario']); ?>
			&nbsp;
		</td>
</tr>
<tr>
		<th><?php echo __('Valor Desconto'); ?></th>
		<td>
			<?php echo h($pedidosIten['PedidosIten']['valor_desconto']); ?>
			&nbsp;
		</td>
</tr>
<tr>
		<th><?php echo __('Percentual Desconto'); ?></th>
		<td>
			<?php echo h($pedidosIten['PedidosIten']['percentual_desconto']); ?>
			&nbsp;
		</td>
</tr>
<tr>
		<th><?php echo __('Valor Acrescimo'); ?></th>
		<td>
			<?php echo h($pedidosIten['PedidosIten']['valor_acrescimo']); ?>
			&nbsp;
		</td>
</tr>
<tr>
		<th><?php echo __('Precentaul Acrescimo'); ?></th>
		<td>
			<?php echo h($pedidosIten['PedidosIten']['precentaul_acrescimo']); ?>
			&nbsp;
		</td>
</tr>
<tr>
		<th><?php echo __('Created'); ?></th>
		<td>
			<?php echo h($pedidosIten['PedidosIten']['created']); ?>
			&nbsp;
		</td>
</tr>
<tr>
		<th><?php echo __('Modified'); ?></th>
		<td>
			<?php echo h($pedidosIten['PedidosIten']['modified']); ?>
			&nbsp;
		</td>
</tr>
				</tbody>
			</table>

		</div><!-- end col md 9 -->

	</div>
</div>

