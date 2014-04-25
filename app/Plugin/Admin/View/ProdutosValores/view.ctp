<div class="produtosValores view">
	<div class="row">
		<div class="col-md-12">
			<div class="page-header">
				<h1><?php echo __('Produtos Valore'); ?></h1>
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
									<li><?php echo $this->Html->link(__('<span class="glyphicon glyphicon-edit"></span>&nbsp&nbsp;Edit Produtos Valore'), array('action' => 'edit', $produtosValore['ProdutosValore']['id']), array('escape' => false)); ?> </li>
		<li><?php echo $this->Form->postLink(__('<span class="glyphicon glyphicon-remove"></span>&nbsp;&nbsp;Delete Produtos Valore'), array('action' => 'delete', $produtosValore['ProdutosValore']['id']), array('escape' => false), __('Are you sure you want to delete # %s?', $produtosValore['ProdutosValore']['id'])); ?> </li>
		<li><?php echo $this->Html->link(__('<span class="glyphicon glyphicon-list"></span>&nbsp&nbsp;List Produtos Valores'), array('action' => 'index'), array('escape' => false)); ?> </li>
		<li><?php echo $this->Html->link(__('<span class="glyphicon glyphicon-plus"></span>&nbsp&nbsp;New Produtos Valore'), array('action' => 'add'), array('escape' => false)); ?> </li>
		<li><?php echo $this->Html->link(__('<span class="glyphicon glyphicon-list"></span>&nbsp&nbsp;List Produtos'), array('controller' => 'produtos', 'action' => 'index'), array('escape' => false)); ?> </li>
		<li><?php echo $this->Html->link(__('<span class="glyphicon glyphicon-plus"></span>&nbsp&nbsp;New Produto'), array('controller' => 'produtos', 'action' => 'add'), array('escape' => false)); ?> </li>
		<li><?php echo $this->Html->link(__('<span class="glyphicon glyphicon-list"></span>&nbsp&nbsp;List Tamanhos'), array('controller' => 'tamanhos', 'action' => 'index'), array('escape' => false)); ?> </li>
		<li><?php echo $this->Html->link(__('<span class="glyphicon glyphicon-plus"></span>&nbsp&nbsp;New Tamanho'), array('controller' => 'tamanhos', 'action' => 'add'), array('escape' => false)); ?> </li>
		<li><?php echo $this->Html->link(__('<span class="glyphicon glyphicon-list"></span>&nbsp&nbsp;List Estabelecimentos'), array('controller' => 'estabelecimentos', 'action' => 'index'), array('escape' => false)); ?> </li>
		<li><?php echo $this->Html->link(__('<span class="glyphicon glyphicon-plus"></span>&nbsp&nbsp;New Estabelecimento'), array('controller' => 'estabelecimentos', 'action' => 'add'), array('escape' => false)); ?> </li>
							</ul>
						</div><!-- end body -->
				</div><!-- end panel -->
			</div><!-- end actions -->
		</div><!-- end col md 3 -->

		<div class="col-md-9">			
			<table cellpadding="0" cellspacing="0" class="table table-striped">
				<tbody>
				<tr>
		<th><?php echo __('Produto'); ?></th>
		<td>
			<?php echo $this->Html->link($produtosValore['Produto']['id'], array('controller' => 'produtos', 'action' => 'view', $produtosValore['Produto']['id'])); ?>
			&nbsp;
		</td>
</tr>
<tr>
		<th><?php echo __('Tamanho'); ?></th>
		<td>
			<?php echo $this->Html->link($produtosValore['Tamanho']['id'], array('controller' => 'tamanhos', 'action' => 'view', $produtosValore['Tamanho']['id'])); ?>
			&nbsp;
		</td>
</tr>
<tr>
		<th><?php echo __('Valor Produtos'); ?></th>
		<td>
			<?php echo h($produtosValore['ProdutosValore']['valor_produtos']); ?>
			&nbsp;
		</td>
</tr>
<tr>
		<th><?php echo __('Estabelecimento'); ?></th>
		<td>
			<?php echo $this->Html->link($produtosValore['Estabelecimento']['nome_fantasia'], array('controller' => 'estabelecimentos', 'action' => 'view', $produtosValore['Estabelecimento']['id'])); ?>
			&nbsp;
		</td>
</tr>
<tr>
		<th><?php echo __('Created'); ?></th>
		<td>
			<?php echo h($produtosValore['ProdutosValore']['created']); ?>
			&nbsp;
		</td>
</tr>
<tr>
		<th><?php echo __('Modified'); ?></th>
		<td>
			<?php echo h($produtosValore['ProdutosValore']['modified']); ?>
			&nbsp;
		</td>
</tr>
				</tbody>
			</table>

		</div><!-- end col md 9 -->

	</div>
</div>

