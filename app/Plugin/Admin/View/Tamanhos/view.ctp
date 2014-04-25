<div class="tamanhos view">
	<div class="row">
		<div class="col-md-12">
			<div class="page-header">
				<h1><?php echo __('Tamanho'); ?></h1>
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
									<li><?php echo $this->Html->link(__('<span class="glyphicon glyphicon-edit"></span>&nbsp&nbsp;Edit Tamanho'), array('action' => 'edit', $tamanho['Tamanho']['id']), array('escape' => false)); ?> </li>
		<li><?php echo $this->Form->postLink(__('<span class="glyphicon glyphicon-remove"></span>&nbsp;&nbsp;Delete Tamanho'), array('action' => 'delete', $tamanho['Tamanho']['id']), array('escape' => false), __('Are you sure you want to delete # %s?', $tamanho['Tamanho']['id'])); ?> </li>
		<li><?php echo $this->Html->link(__('<span class="glyphicon glyphicon-list"></span>&nbsp&nbsp;List Tamanhos'), array('action' => 'index'), array('escape' => false)); ?> </li>
		<li><?php echo $this->Html->link(__('<span class="glyphicon glyphicon-plus"></span>&nbsp&nbsp;New Tamanho'), array('action' => 'add'), array('escape' => false)); ?> </li>
		<li><?php echo $this->Html->link(__('<span class="glyphicon glyphicon-list"></span>&nbsp&nbsp;List Estabelecimentos'), array('controller' => 'estabelecimentos', 'action' => 'index'), array('escape' => false)); ?> </li>
		<li><?php echo $this->Html->link(__('<span class="glyphicon glyphicon-plus"></span>&nbsp&nbsp;New Estabelecimento'), array('controller' => 'estabelecimentos', 'action' => 'add'), array('escape' => false)); ?> </li>
		<li><?php echo $this->Html->link(__('<span class="glyphicon glyphicon-list"></span>&nbsp&nbsp;List Produtos Valores'), array('controller' => 'produtos_valores', 'action' => 'index'), array('escape' => false)); ?> </li>
		<li><?php echo $this->Html->link(__('<span class="glyphicon glyphicon-plus"></span>&nbsp&nbsp;New Produtos Valore'), array('controller' => 'produtos_valores', 'action' => 'add'), array('escape' => false)); ?> </li>
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
			<?php echo h($tamanho['Tamanho']['id']); ?>
			&nbsp;
		</td>
</tr>
<tr>
		<th><?php echo __('Descricao'); ?></th>
		<td>
			<?php echo h($tamanho['Tamanho']['descricao']); ?>
			&nbsp;
		</td>
</tr>
<tr>
		<th><?php echo __('Qtd Sabores'); ?></th>
		<td>
			<?php echo h($tamanho['Tamanho']['qtd_sabores']); ?>
			&nbsp;
		</td>
</tr>
<tr>
		<th><?php echo __('Estabelecimento'); ?></th>
		<td>
			<?php echo $this->Html->link($tamanho['Estabelecimento']['nome_fantasia'], array('controller' => 'estabelecimentos', 'action' => 'view', $tamanho['Estabelecimento']['id'])); ?>
			&nbsp;
		</td>
</tr>
<tr>
		<th><?php echo __('Created'); ?></th>
		<td>
			<?php echo h($tamanho['Tamanho']['created']); ?>
			&nbsp;
		</td>
</tr>
<tr>
		<th><?php echo __('Modified'); ?></th>
		<td>
			<?php echo h($tamanho['Tamanho']['modified']); ?>
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
	<h3><?php echo __('Related Produtos Valores'); ?></h3>
	<?php if (!empty($tamanho['ProdutosValore'])): ?>
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
	<?php foreach ($tamanho['ProdutosValore'] as $produtosValore): ?>
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
