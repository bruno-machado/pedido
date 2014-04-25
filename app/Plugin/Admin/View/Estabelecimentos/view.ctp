<div class="estabelecimentos view">
	<div class="row">
		<div class="col-md-12">
			<div class="page-header">
				<h1><?php echo __('Estabelecimento'); ?></h1>
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
									<li><?php echo $this->Html->link(__('<span class="glyphicon glyphicon-edit"></span>&nbsp&nbsp;Edit Estabelecimento'), array('action' => 'edit', $estabelecimento['Estabelecimento']['id']), array('escape' => false)); ?> </li>
		<li><?php echo $this->Form->postLink(__('<span class="glyphicon glyphicon-remove"></span>&nbsp;&nbsp;Delete Estabelecimento'), array('action' => 'delete', $estabelecimento['Estabelecimento']['id']), array('escape' => false), __('Are you sure you want to delete # %s?', $estabelecimento['Estabelecimento']['id'])); ?> </li>
		<li><?php echo $this->Html->link(__('<span class="glyphicon glyphicon-list"></span>&nbsp&nbsp;List Estabelecimentos'), array('action' => 'index'), array('escape' => false)); ?> </li>
		<li><?php echo $this->Html->link(__('<span class="glyphicon glyphicon-plus"></span>&nbsp&nbsp;New Estabelecimento'), array('action' => 'add'), array('escape' => false)); ?> </li>
		<li><?php echo $this->Html->link(__('<span class="glyphicon glyphicon-list"></span>&nbsp&nbsp;List Cidades'), array('controller' => 'cidades', 'action' => 'index'), array('escape' => false)); ?> </li>
		<li><?php echo $this->Html->link(__('<span class="glyphicon glyphicon-plus"></span>&nbsp&nbsp;New Cidade'), array('controller' => 'cidades', 'action' => 'add'), array('escape' => false)); ?> </li>
		<li><?php echo $this->Html->link(__('<span class="glyphicon glyphicon-list"></span>&nbsp&nbsp;List Pedidos'), array('controller' => 'pedidos', 'action' => 'index'), array('escape' => false)); ?> </li>
		<li><?php echo $this->Html->link(__('<span class="glyphicon glyphicon-plus"></span>&nbsp&nbsp;New Pedido'), array('controller' => 'pedidos', 'action' => 'add'), array('escape' => false)); ?> </li>
		<li><?php echo $this->Html->link(__('<span class="glyphicon glyphicon-list"></span>&nbsp&nbsp;List Pedidos Itens'), array('controller' => 'pedidos_itens', 'action' => 'index'), array('escape' => false)); ?> </li>
		<li><?php echo $this->Html->link(__('<span class="glyphicon glyphicon-plus"></span>&nbsp&nbsp;New Pedidos Iten'), array('controller' => 'pedidos_itens', 'action' => 'add'), array('escape' => false)); ?> </li>
		<li><?php echo $this->Html->link(__('<span class="glyphicon glyphicon-list"></span>&nbsp&nbsp;List Produtos'), array('controller' => 'produtos', 'action' => 'index'), array('escape' => false)); ?> </li>
		<li><?php echo $this->Html->link(__('<span class="glyphicon glyphicon-plus"></span>&nbsp&nbsp;New Produto'), array('controller' => 'produtos', 'action' => 'add'), array('escape' => false)); ?> </li>
		<li><?php echo $this->Html->link(__('<span class="glyphicon glyphicon-list"></span>&nbsp&nbsp;List Produtos Fotos'), array('controller' => 'produtos_fotos', 'action' => 'index'), array('escape' => false)); ?> </li>
		<li><?php echo $this->Html->link(__('<span class="glyphicon glyphicon-plus"></span>&nbsp&nbsp;New Produtos Foto'), array('controller' => 'produtos_fotos', 'action' => 'add'), array('escape' => false)); ?> </li>
		<li><?php echo $this->Html->link(__('<span class="glyphicon glyphicon-list"></span>&nbsp&nbsp;List Produtos Valores'), array('controller' => 'produtos_valores', 'action' => 'index'), array('escape' => false)); ?> </li>
		<li><?php echo $this->Html->link(__('<span class="glyphicon glyphicon-plus"></span>&nbsp&nbsp;New Produtos Valore'), array('controller' => 'produtos_valores', 'action' => 'add'), array('escape' => false)); ?> </li>
		<li><?php echo $this->Html->link(__('<span class="glyphicon glyphicon-list"></span>&nbsp&nbsp;List Tamanhos'), array('controller' => 'tamanhos', 'action' => 'index'), array('escape' => false)); ?> </li>
		<li><?php echo $this->Html->link(__('<span class="glyphicon glyphicon-plus"></span>&nbsp&nbsp;New Tamanho'), array('controller' => 'tamanhos', 'action' => 'add'), array('escape' => false)); ?> </li>
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
			<?php echo h($estabelecimento['Estabelecimento']['id']); ?>
			&nbsp;
		</td>
</tr>
<tr>
		<th><?php echo __('Nome Fantasia'); ?></th>
		<td>
			<?php echo h($estabelecimento['Estabelecimento']['nome_fantasia']); ?>
			&nbsp;
		</td>
</tr>
<tr>
		<th><?php echo __('Razao Social'); ?></th>
		<td>
			<?php echo h($estabelecimento['Estabelecimento']['razao_social']); ?>
			&nbsp;
		</td>
</tr>
<tr>
		<th><?php echo __('Cpf'); ?></th>
		<td>
			<?php echo h($estabelecimento['Estabelecimento']['cpf']); ?>
			&nbsp;
		</td>
</tr>
<tr>
		<th><?php echo __('Cnpj'); ?></th>
		<td>
			<?php echo h($estabelecimento['Estabelecimento']['cnpj']); ?>
			&nbsp;
		</td>
</tr>
<tr>
		<th><?php echo __('Endereco'); ?></th>
		<td>
			<?php echo h($estabelecimento['Estabelecimento']['endereco']); ?>
			&nbsp;
		</td>
</tr>
<tr>
		<th><?php echo __('Cidade'); ?></th>
		<td>
			<?php echo $this->Html->link($estabelecimento['Cidade']['id'], array('controller' => 'cidades', 'action' => 'view', $estabelecimento['Cidade']['id'])); ?>
			&nbsp;
		</td>
</tr>
<tr>
		<th><?php echo __('Bairro'); ?></th>
		<td>
			<?php echo h($estabelecimento['Estabelecimento']['bairro']); ?>
			&nbsp;
		</td>
</tr>
<tr>
		<th><?php echo __('Cep'); ?></th>
		<td>
			<?php echo h($estabelecimento['Estabelecimento']['cep']); ?>
			&nbsp;
		</td>
</tr>
<tr>
		<th><?php echo __('Ativo'); ?></th>
		<td>
			<?php echo h($estabelecimento['Estabelecimento']['ativo']); ?>
			&nbsp;
		</td>
</tr>
<tr>
		<th><?php echo __('Aberto'); ?></th>
		<td>
			<?php echo h($estabelecimento['Estabelecimento']['aberto']); ?>
			&nbsp;
		</td>
</tr>
<tr>
		<th><?php echo __('Empresa Destaque'); ?></th>
		<td>
			<?php echo h($estabelecimento['Estabelecimento']['empresa_destaque']); ?>
			&nbsp;
		</td>
</tr>
<tr>
		<th><?php echo __('Email'); ?></th>
		<td>
			<?php echo h($estabelecimento['Estabelecimento']['email']); ?>
			&nbsp;
		</td>
</tr>
<tr>
		<th><?php echo __('Senha'); ?></th>
		<td>
			<?php echo h($estabelecimento['Estabelecimento']['senha']); ?>
			&nbsp;
		</td>
</tr>
<tr>
		<th><?php echo __('Created'); ?></th>
		<td>
			<?php echo h($estabelecimento['Estabelecimento']['created']); ?>
			&nbsp;
		</td>
</tr>
<tr>
		<th><?php echo __('Modified'); ?></th>
		<td>
			<?php echo h($estabelecimento['Estabelecimento']['modified']); ?>
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
	<h3><?php echo __('Related Pedidos'); ?></h3>
	<?php if (!empty($estabelecimento['Pedido'])): ?>
	<table cellpadding = "0" cellspacing = "0" class="table table-striped">
	<thead>
	<tr>
		<th><?php echo __('Id'); ?></th>
		<th><?php echo __('Estabelecimento Id'); ?></th>
		<th><?php echo __('Cliente Id'); ?></th>
		<th><?php echo __('Data Emissao'); ?></th>
		<th><?php echo __('Created'); ?></th>
		<th><?php echo __('Modified'); ?></th>
		<th class="actions"></th>
	</tr>
	<thead>
	<tbody>
	<?php foreach ($estabelecimento['Pedido'] as $pedido): ?>
		<tr>
			<td><?php echo $pedido['id']; ?></td>
			<td><?php echo $pedido['estabelecimento_id']; ?></td>
			<td><?php echo $pedido['cliente_id']; ?></td>
			<td><?php echo $pedido['data_emissao']; ?></td>
			<td><?php echo $pedido['created']; ?></td>
			<td><?php echo $pedido['modified']; ?></td>
			<td class="actions">
				<?php echo $this->Html->link(__('<span class="glyphicon glyphicon-search"></span>'), array('controller' => 'pedidos', 'action' => 'view', $pedido['id']), array('escape' => false)); ?>
				<?php echo $this->Html->link(__('<span class="glyphicon glyphicon-edit"></span>'), array('controller' => 'pedidos', 'action' => 'edit', $pedido['id']), array('escape' => false)); ?>
				<?php echo $this->Form->postLink(__('<span class="glyphicon glyphicon-remove"></span>'), array('controller' => 'pedidos', 'action' => 'delete', $pedido['id']), array('escape' => false), __('Are you sure you want to delete # %s?', $pedido['id'])); ?>
			</td>
		</tr>
	<?php endforeach; ?>
	</tbody>
	</table>
<?php endif; ?>

	<div class="actions">
		<?php echo $this->Html->link(__('<span class="glyphicon glyphicon-plus"></span>&nbsp;&nbsp;New Pedido'), array('controller' => 'pedidos', 'action' => 'add'), array('escape' => false, 'class' => 'btn btn-default')); ?> 
	</div>
	</div><!-- end col md 12 -->
</div>
<div class="related row">
	<div class="col-md-12">
	<h3><?php echo __('Related Pedidos Itens'); ?></h3>
	<?php if (!empty($estabelecimento['PedidosIten'])): ?>
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
	<?php foreach ($estabelecimento['PedidosIten'] as $pedidosIten): ?>
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

	<div class="actions">
		<?php echo $this->Html->link(__('<span class="glyphicon glyphicon-plus"></span>&nbsp;&nbsp;New Pedidos Iten'), array('controller' => 'pedidos_itens', 'action' => 'add'), array('escape' => false, 'class' => 'btn btn-default')); ?> 
	</div>
	</div><!-- end col md 12 -->
</div>
<div class="related row">
	<div class="col-md-12">
	<h3><?php echo __('Related Produtos'); ?></h3>
	<?php if (!empty($estabelecimento['Produto'])): ?>
	<table cellpadding = "0" cellspacing = "0" class="table table-striped">
	<thead>
	<tr>
		<th><?php echo __('Id'); ?></th>
		<th><?php echo __('Estabelecimento Id'); ?></th>
		<th><?php echo __('Categoria Id'); ?></th>
		<th><?php echo __('Nome Produto'); ?></th>
		<th><?php echo __('Descricao Produto'); ?></th>
		<th><?php echo __('Created'); ?></th>
		<th><?php echo __('Modified'); ?></th>
		<th class="actions"></th>
	</tr>
	<thead>
	<tbody>
	<?php foreach ($estabelecimento['Produto'] as $produto): ?>
		<tr>
			<td><?php echo $produto['id']; ?></td>
			<td><?php echo $produto['estabelecimento_id']; ?></td>
			<td><?php echo $produto['categoria_id']; ?></td>
			<td><?php echo $produto['nome_produto']; ?></td>
			<td><?php echo $produto['descricao_produto']; ?></td>
			<td><?php echo $produto['created']; ?></td>
			<td><?php echo $produto['modified']; ?></td>
			<td class="actions">
				<?php echo $this->Html->link(__('<span class="glyphicon glyphicon-search"></span>'), array('controller' => 'produtos', 'action' => 'view', $produto['id']), array('escape' => false)); ?>
				<?php echo $this->Html->link(__('<span class="glyphicon glyphicon-edit"></span>'), array('controller' => 'produtos', 'action' => 'edit', $produto['id']), array('escape' => false)); ?>
				<?php echo $this->Form->postLink(__('<span class="glyphicon glyphicon-remove"></span>'), array('controller' => 'produtos', 'action' => 'delete', $produto['id']), array('escape' => false), __('Are you sure you want to delete # %s?', $produto['id'])); ?>
			</td>
		</tr>
	<?php endforeach; ?>
	</tbody>
	</table>
<?php endif; ?>

	<div class="actions">
		<?php echo $this->Html->link(__('<span class="glyphicon glyphicon-plus"></span>&nbsp;&nbsp;New Produto'), array('controller' => 'produtos', 'action' => 'add'), array('escape' => false, 'class' => 'btn btn-default')); ?> 
	</div>
	</div><!-- end col md 12 -->
</div>
<div class="related row">
	<div class="col-md-12">
	<h3><?php echo __('Related Produtos Fotos'); ?></h3>
	<?php if (!empty($estabelecimento['ProdutosFoto'])): ?>
	<table cellpadding = "0" cellspacing = "0" class="table table-striped">
	<thead>
	<tr>
		<th><?php echo __('Produto Id'); ?></th>
		<th><?php echo __('Estabelecimento Id'); ?></th>
		<th><?php echo __('Foto'); ?></th>
		<th><?php echo __('Foto Destaque'); ?></th>
		<th><?php echo __('Created'); ?></th>
		<th><?php echo __('Modified'); ?></th>
		<th class="actions"></th>
	</tr>
	<thead>
	<tbody>
	<?php foreach ($estabelecimento['ProdutosFoto'] as $produtosFoto): ?>
		<tr>
			<td><?php echo $produtosFoto['produto_id']; ?></td>
			<td><?php echo $produtosFoto['estabelecimento_id']; ?></td>
			<td><?php echo $produtosFoto['foto']; ?></td>
			<td><?php echo $produtosFoto['foto_destaque']; ?></td>
			<td><?php echo $produtosFoto['created']; ?></td>
			<td><?php echo $produtosFoto['modified']; ?></td>
			<td class="actions">
				<?php echo $this->Html->link(__('<span class="glyphicon glyphicon-search"></span>'), array('controller' => 'produtos_fotos', 'action' => 'view', $produtosFoto['id']), array('escape' => false)); ?>
				<?php echo $this->Html->link(__('<span class="glyphicon glyphicon-edit"></span>'), array('controller' => 'produtos_fotos', 'action' => 'edit', $produtosFoto['id']), array('escape' => false)); ?>
				<?php echo $this->Form->postLink(__('<span class="glyphicon glyphicon-remove"></span>'), array('controller' => 'produtos_fotos', 'action' => 'delete', $produtosFoto['id']), array('escape' => false), __('Are you sure you want to delete # %s?', $produtosFoto['id'])); ?>
			</td>
		</tr>
	<?php endforeach; ?>
	</tbody>
	</table>
<?php endif; ?>

	<div class="actions">
		<?php echo $this->Html->link(__('<span class="glyphicon glyphicon-plus"></span>&nbsp;&nbsp;New Produtos Foto'), array('controller' => 'produtos_fotos', 'action' => 'add'), array('escape' => false, 'class' => 'btn btn-default')); ?> 
	</div>
	</div><!-- end col md 12 -->
</div>
<div class="related row">
	<div class="col-md-12">
	<h3><?php echo __('Related Produtos Valores'); ?></h3>
	<?php if (!empty($estabelecimento['ProdutosValore'])): ?>
	<table cellpadding = "0" cellspacing = "0" class="table table-striped">
	<thead>
	<tr>
		<th><?php echo __('Produto Id'); ?></th>
		<th><?php echo __('Tamanho Id'); ?></th>
		<th><?php echo __('Valor Produtos'); ?></th>
		<th><?php echo __('Estabelecimento Id'); ?></th>
		<th><?php echo __('Created'); ?></th>
		<th><?php echo __('Modified'); ?></th>
		<th class="actions"></th>
	</tr>
	<thead>
	<tbody>
	<?php foreach ($estabelecimento['ProdutosValore'] as $produtosValore): ?>
		<tr>
			<td><?php echo $produtosValore['produto_id']; ?></td>
			<td><?php echo $produtosValore['tamanho_id']; ?></td>
			<td><?php echo $produtosValore['valor_produtos']; ?></td>
			<td><?php echo $produtosValore['estabelecimento_id']; ?></td>
			<td><?php echo $produtosValore['created']; ?></td>
			<td><?php echo $produtosValore['modified']; ?></td>
			<td class="actions">
				<?php echo $this->Html->link(__('<span class="glyphicon glyphicon-search"></span>'), array('controller' => 'produtos_valores', 'action' => 'view', $produtosValore['id']), array('escape' => false)); ?>
				<?php echo $this->Html->link(__('<span class="glyphicon glyphicon-edit"></span>'), array('controller' => 'produtos_valores', 'action' => 'edit', $produtosValore['id']), array('escape' => false)); ?>
				<?php echo $this->Form->postLink(__('<span class="glyphicon glyphicon-remove"></span>'), array('controller' => 'produtos_valores', 'action' => 'delete', $produtosValore['id']), array('escape' => false), __('Are you sure you want to delete # %s?', $produtosValore['id'])); ?>
			</td>
		</tr>
	<?php endforeach; ?>
	</tbody>
	</table>
<?php endif; ?>

	<div class="actions">
		<?php echo $this->Html->link(__('<span class="glyphicon glyphicon-plus"></span>&nbsp;&nbsp;New Produtos Valore'), array('controller' => 'produtos_valores', 'action' => 'add'), array('escape' => false, 'class' => 'btn btn-default')); ?> 
	</div>
	</div><!-- end col md 12 -->
</div>
<div class="related row">
	<div class="col-md-12">
	<h3><?php echo __('Related Tamanhos'); ?></h3>
	<?php if (!empty($estabelecimento['Tamanho'])): ?>
	<table cellpadding = "0" cellspacing = "0" class="table table-striped">
	<thead>
	<tr>
		<th><?php echo __('Id'); ?></th>
		<th><?php echo __('Descricao'); ?></th>
		<th><?php echo __('Qtd Sabores'); ?></th>
		<th><?php echo __('Estabelecimento Id'); ?></th>
		<th><?php echo __('Created'); ?></th>
		<th><?php echo __('Modified'); ?></th>
		<th class="actions"></th>
	</tr>
	<thead>
	<tbody>
	<?php foreach ($estabelecimento['Tamanho'] as $tamanho): ?>
		<tr>
			<td><?php echo $tamanho['id']; ?></td>
			<td><?php echo $tamanho['descricao']; ?></td>
			<td><?php echo $tamanho['qtd_sabores']; ?></td>
			<td><?php echo $tamanho['estabelecimento_id']; ?></td>
			<td><?php echo $tamanho['created']; ?></td>
			<td><?php echo $tamanho['modified']; ?></td>
			<td class="actions">
				<?php echo $this->Html->link(__('<span class="glyphicon glyphicon-search"></span>'), array('controller' => 'tamanhos', 'action' => 'view', $tamanho['id']), array('escape' => false)); ?>
				<?php echo $this->Html->link(__('<span class="glyphicon glyphicon-edit"></span>'), array('controller' => 'tamanhos', 'action' => 'edit', $tamanho['id']), array('escape' => false)); ?>
				<?php echo $this->Form->postLink(__('<span class="glyphicon glyphicon-remove"></span>'), array('controller' => 'tamanhos', 'action' => 'delete', $tamanho['id']), array('escape' => false), __('Are you sure you want to delete # %s?', $tamanho['id'])); ?>
			</td>
		</tr>
	<?php endforeach; ?>
	</tbody>
	</table>
<?php endif; ?>

	<div class="actions">
		<?php echo $this->Html->link(__('<span class="glyphicon glyphicon-plus"></span>&nbsp;&nbsp;New Tamanho'), array('controller' => 'tamanhos', 'action' => 'add'), array('escape' => false, 'class' => 'btn btn-default')); ?> 
	</div>
	</div><!-- end col md 12 -->
</div>
