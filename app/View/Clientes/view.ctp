<div class="clientes view">
	<div class="row">
		<div class="col-md-12">
			<div class="page-header">
				<h1><?php echo __('Cliente'); ?></h1>
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
									<li><?php echo $this->Html->link(__('<span class="glyphicon glyphicon-edit"></span>&nbsp&nbsp;Edit Cliente'), array('action' => 'edit', $cliente['Cliente']['id']), array('escape' => false)); ?> </li>
		<li><?php echo $this->Form->postLink(__('<span class="glyphicon glyphicon-remove"></span>&nbsp;&nbsp;Delete Cliente'), array('action' => 'delete', $cliente['Cliente']['id']), array('escape' => false), __('Are you sure you want to delete # %s?', $cliente['Cliente']['id'])); ?> </li>
		<li><?php echo $this->Html->link(__('<span class="glyphicon glyphicon-list"></span>&nbsp&nbsp;List Clientes'), array('action' => 'index'), array('escape' => false)); ?> </li>
		<li><?php echo $this->Html->link(__('<span class="glyphicon glyphicon-plus"></span>&nbsp&nbsp;New Cliente'), array('action' => 'add'), array('escape' => false)); ?> </li>
		<li><?php echo $this->Html->link(__('<span class="glyphicon glyphicon-list"></span>&nbsp&nbsp;List Cidades'), array('controller' => 'cidades', 'action' => 'index'), array('escape' => false)); ?> </li>
		<li><?php echo $this->Html->link(__('<span class="glyphicon glyphicon-plus"></span>&nbsp&nbsp;New Cidade'), array('controller' => 'cidades', 'action' => 'add'), array('escape' => false)); ?> </li>
		<li><?php echo $this->Html->link(__('<span class="glyphicon glyphicon-list"></span>&nbsp&nbsp;List Pedidos'), array('controller' => 'pedidos', 'action' => 'index'), array('escape' => false)); ?> </li>
		<li><?php echo $this->Html->link(__('<span class="glyphicon glyphicon-plus"></span>&nbsp&nbsp;New Pedido'), array('controller' => 'pedidos', 'action' => 'add'), array('escape' => false)); ?> </li>
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
			<?php echo h($cliente['Cliente']['id']); ?>
			&nbsp;
		</td>
</tr>
<tr>
		<th><?php echo __('Nome Cliente'); ?></th>
		<td>
			<?php echo h($cliente['Cliente']['nome_cliente']); ?>
			&nbsp;
		</td>
</tr>
<tr>
		<th><?php echo __('Cpf Cliente'); ?></th>
		<td>
			<?php echo h($cliente['Cliente']['cpf_cliente']); ?>
			&nbsp;
		</td>
</tr>
<tr>
		<th><?php echo __('Rg Cliente'); ?></th>
		<td>
			<?php echo h($cliente['Cliente']['rg_cliente']); ?>
			&nbsp;
		</td>
</tr>
<tr>
		<th><?php echo __('Celular Cliente'); ?></th>
		<td>
			<?php echo h($cliente['Cliente']['celular_cliente']); ?>
			&nbsp;
		</td>
</tr>
<tr>
		<th><?php echo __('Telefone Cliente'); ?></th>
		<td>
			<?php echo h($cliente['Cliente']['telefone_cliente']); ?>
			&nbsp;
		</td>
</tr>
<tr>
		<th><?php echo __('Endereco Cliente'); ?></th>
		<td>
			<?php echo h($cliente['Cliente']['endereco_cliente']); ?>
			&nbsp;
		</td>
</tr>
<tr>
		<th><?php echo __('Bairro Cliente'); ?></th>
		<td>
			<?php echo h($cliente['Cliente']['bairro_cliente']); ?>
			&nbsp;
		</td>
</tr>
<tr>
		<th><?php echo __('Nr Endereco Cliente'); ?></th>
		<td>
			<?php echo h($cliente['Cliente']['nr_endereco_cliente']); ?>
			&nbsp;
		</td>
</tr>
<tr>
		<th><?php echo __('Cidade'); ?></th>
		<td>
			<?php echo $this->Html->link($cliente['Cidade']['id'], array('controller' => 'cidades', 'action' => 'view', $cliente['Cidade']['id'])); ?>
			&nbsp;
		</td>
</tr>
<tr>
		<th><?php echo __('Cep Cliente'); ?></th>
		<td>
			<?php echo h($cliente['Cliente']['cep_cliente']); ?>
			&nbsp;
		</td>
</tr>
<tr>
		<th><?php echo __('Complemento Cliente'); ?></th>
		<td>
			<?php echo h($cliente['Cliente']['complemento_cliente']); ?>
			&nbsp;
		</td>
</tr>
<tr>
		<th><?php echo __('Observacao Cliente'); ?></th>
		<td>
			<?php echo h($cliente['Cliente']['observacao_cliente']); ?>
			&nbsp;
		</td>
</tr>
<tr>
		<th><?php echo __('Email Cliente'); ?></th>
		<td>
			<?php echo h($cliente['Cliente']['email_cliente']); ?>
			&nbsp;
		</td>
</tr>
<tr>
		<th><?php echo __('Senha Cliente'); ?></th>
		<td>
			<?php echo h($cliente['Cliente']['senha_cliente']); ?>
			&nbsp;
		</td>
</tr>
<tr>
		<th><?php echo __('Created'); ?></th>
		<td>
			<?php echo h($cliente['Cliente']['created']); ?>
			&nbsp;
		</td>
</tr>
<tr>
		<th><?php echo __('Modified'); ?></th>
		<td>
			<?php echo h($cliente['Cliente']['modified']); ?>
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
	<?php if (!empty($cliente['Pedido'])): ?>
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
	<?php foreach ($cliente['Pedido'] as $pedido): ?>
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
