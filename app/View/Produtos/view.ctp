<div class="produtos view">
	<div class="row">
		<div class="col-md-12">
			<div class="page-header">
				<h1><?php echo __('Produto'); ?></h1>
			</div>
		</div>
	</div>

	<div class="row">

		<div class="col-md-3">
			<div class="actions">
				<div class="panel panel-default">
					<div class="panel-heading">Ações</div>
						<div class="panel-body">
							<ul class="nav nav-pills nav-stacked">
									<li><?php echo $this->Html->link(__('<span class="glyphicon glyphicon-edit"></span>&nbsp&nbsp;Editar Produto'), array('action' => 'edit', $produto['Produto']['id']), array('escape' => false)); ?> </li>
		<li><?php echo $this->Form->postLink(__('<span class="glyphicon glyphicon-remove"></span>&nbsp;&nbsp;Excluir Produto'), array('action' => 'delete', $produto['Produto']['id']), array('escape' => false), __('Tem certeza que deseja excluir o produto? # %s?', $produto['Produto']['id'])); ?> </li>
		<li><?php echo $this->Html->link(__('<span class="glyphicon glyphicon-list"></span>&nbsp&nbsp;Listar Produtos'), array('action' => 'index'), array('escape' => false)); ?> </li>
		<li><?php echo $this->Html->link(__('<span class="glyphicon glyphicon-plus"></span>&nbsp&nbsp;Novo Produto'), array('action' => 'add'), array('escape' => false)); ?> </li>
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
			<?php echo h($produto['Produto']['id']); ?>
			&nbsp;
		</td>
</tr>
<tr>
		<th><?php echo __('Categoria'); ?></th>
		<td>
			<?php echo $this->Html->link($produto['Categoria']['descricao'], array('controller' => 'categorias', 'action' => 'view', $produto['Categoria']['id'])); ?>
			&nbsp;
		</td>
</tr>
<tr>
		<th><?php echo __('Nome Produto'); ?></th>
		<td>
			<?php echo h($produto['Produto']['nome_produto']); ?>
			&nbsp;
		</td>
</tr>
<tr>
		<th><?php echo __('Descricao Produto'); ?></th>
		<td>
			<?php echo h($produto['Produto']['descricao_produto']); ?>
			&nbsp;
		</td>
</tr>
<tr>
		<th><?php echo __('Created'); ?></th>
		<td>
			<?php echo h($produto['Produto']['created']); ?>
			&nbsp;
		</td>
</tr>
<tr>
		<th><?php echo __('Modified'); ?></th>
		<td>
			<?php echo h($produto['Produto']['modified']); ?>
			&nbsp;
		</td>
</tr>
				</tbody>
			</table>

		</div><!-- end col md 9 -->

	</div>
</div>

<div class="related row">
	<div class="col-md-12">
	<?php if (!empty($produto['PedidosIten'])): ?>
	<table cellpadding = "0" cellspacing = "0" class="table table-striped">
	<thead>
	<tr>
		<th><?php echo __('Id'); ?></th>
		<th><?php echo __('Estabelecimento Id'); ?></th>
		<th><?php echo __('Produto Id'); ?></th>
		<th><?php echo __('Quantidade'); ?></th>
		<th><?php echo __('Valor Unitario'); ?></th>
		<th><?php echo __('Valor Desconto'); ?></th>
		<th><?php echo __('Percentual Desconto'); ?></th>
		<th><?php echo __('Valor Acrescimo'); ?></th>
		<th><?php echo __('Precentaul Acrescimo'); ?></th>
		<th><?php echo __('Created'); ?></th>
		<th><?php echo __('Modified'); ?></th>
		<th class="actions"></th>
	</tr>
	<thead>
	<tbody>
	<?php foreach ($produto['PedidosIten'] as $pedidosIten): ?>
		<tr>
			<td><?php echo $pedidosIten['id']; ?></td>
			<td><?php echo $pedidosIten['estabelecimento_id']; ?></td>
			<td><?php echo $pedidosIten['produto_id']; ?></td>
			<td><?php echo $pedidosIten['quantidade']; ?></td>
			<td><?php echo $pedidosIten['valor_unitario']; ?></td>
			<td><?php echo $pedidosIten['valor_desconto']; ?></td>
			<td><?php echo $pedidosIten['percentual_desconto']; ?></td>
			<td><?php echo $pedidosIten['valor_acrescimo']; ?></td>
			<td><?php echo $pedidosIten['precentaul_acrescimo']; ?></td>
			<td><?php echo $pedidosIten['created']; ?></td>
			<td><?php echo $pedidosIten['modified']; ?></td>
			<td class="actions">
				<?php echo $this->Html->link(__('<span class="glyphicon glyphicon-search"></span>'), array('controller' => 'pedidos_itens', 'action' => 'view', $pedidosIten['id']), array('escape' => false)); ?>
				<?php echo $this->Html->link(__('<span class="glyphicon glyphicon-edit"></span>'), array('controller' => 'pedidos_itens', 'action' => 'edit', $pedidosIten['id']), array('escape' => false)); ?>
				<?php echo $this->Form->postLink(__('<span class="glyphicon glyphicon-remove"></span>'), array('controller' => 'pedidos_itens', 'action' => 'delete', $pedidosIten['id']), array('escape' => false), __('Are you sure you want to delete # %s?', $pedidosIten['id'])); ?>
			</td>
		</tr>
	<?php endforeach; ?>
	</tbody>
	</table>
<?php endif; ?>
	</div><!-- end col md 12 -->
</div>
