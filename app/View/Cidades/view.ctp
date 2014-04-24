<div class="cidades view">
	<div class="row">
		<div class="col-md-12">
			<div class="page-header">
				<h1><?php echo __('Cidade'); ?></h1>
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
								<li><?php echo $this->Html->link(__('<span class="glyphicon glyphicon-edit"></span>&nbsp&nbsp;Editar Cidade'), array('action' => 'edit', $cidade['Cidade']['id']), array('escape' => false)); ?> </li>
								<li><?php echo $this->Form->postLink(__('<span class="glyphicon glyphicon-remove"></span>&nbsp;&nbsp;Deletar Cidade'), array('action' => 'delete', $cidade['Cidade']['id']), array('escape' => false), __('Are you sure you want to delete # %s?', $cidade['Cidade']['id'])); ?> </li>
								<li><?php echo $this->Html->link(__('<span class="glyphicon glyphicon-list"></span>&nbsp&nbsp;Listagem Cidades'), array('action' => 'index'), array('escape' => false)); ?> </li>
								<li><?php echo $this->Html->link(__('<span class="glyphicon glyphicon-plus"></span>&nbsp&nbsp;Nova Cidade'), array('action' => 'add'), array('escape' => false)); ?> </li>
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
			<?php echo h($cidade['Cidade']['id']); ?>
			&nbsp;
		</td>
</tr>
<tr>
		<th><?php echo __('Nome Cidade'); ?></th>
		<td>
			<?php echo h($cidade['Cidade']['nome_cidade']); ?>
			&nbsp;
		</td>
</tr>
<tr>
		<th><?php echo __('Estado'); ?></th>
		<td>
			<?php echo $this->Html->link($cidade['Estado']['nome_estado'], array('controller' => 'estados', 'action' => 'view', $cidade['Estado']['id'])); ?>
			&nbsp;
		</td>
</tr>
<tr>
		<th><?php echo __('Created'); ?></th>
		<td>
			<?php echo h($cidade['Cidade']['created']); ?>
			&nbsp;
		</td>
</tr>
<tr>
		<th><?php echo __('Modified'); ?></th>
		<td>
			<?php echo h($cidade['Cidade']['modified']); ?>
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
	<?php if (!empty($cidade['Cliente'])): ?>
	<table cellpadding = "0" cellspacing = "0" class="table table-striped">
	<thead>
	<tr>
		<th><?php echo __('Id'); ?></th>
		<th><?php echo __('Nome Cliente'); ?></th>
		<th><?php echo __('Cpf Cliente'); ?></th>
		<th><?php echo __('Rg Cliente'); ?></th>
		<th><?php echo __('Celular Cliente'); ?></th>
		<th><?php echo __('Telefone Cliente'); ?></th>
		<th><?php echo __('Endereco Cliente'); ?></th>
		<th><?php echo __('Bairro Cliente'); ?></th>
		<th><?php echo __('Nr Endereco Cliente'); ?></th>
		<th><?php echo __('Cidade Id'); ?></th>
		<th><?php echo __('Cep Cliente'); ?></th>
		<th><?php echo __('Complemento Cliente'); ?></th>
		<th><?php echo __('Observacao Cliente'); ?></th>
		<th><?php echo __('Email Cliente'); ?></th>
		<th><?php echo __('Senha Cliente'); ?></th>
		<th><?php echo __('Created'); ?></th>
		<th><?php echo __('Modified'); ?></th>
		<th class="actions"></th>
	</tr>
	<thead>
	<tbody>
	<?php foreach ($cidade['Cliente'] as $cliente): ?>
		<tr>
			<td><?php echo $cliente['id']; ?></td>
			<td><?php echo $cliente['nome_cliente']; ?></td>
			<td><?php echo $cliente['cpf_cliente']; ?></td>
			<td><?php echo $cliente['rg_cliente']; ?></td>
			<td><?php echo $cliente['celular_cliente']; ?></td>
			<td><?php echo $cliente['telefone_cliente']; ?></td>
			<td><?php echo $cliente['endereco_cliente']; ?></td>
			<td><?php echo $cliente['bairro_cliente']; ?></td>
			<td><?php echo $cliente['nr_endereco_cliente']; ?></td>
			<td><?php echo $cliente['cidade_id']; ?></td>
			<td><?php echo $cliente['cep_cliente']; ?></td>
			<td><?php echo $cliente['complemento_cliente']; ?></td>
			<td><?php echo $cliente['observacao_cliente']; ?></td>
			<td><?php echo $cliente['email_cliente']; ?></td>
			<td><?php echo $cliente['senha_cliente']; ?></td>
			<td><?php echo $cliente['created']; ?></td>
			<td><?php echo $cliente['modified']; ?></td>
			<td class="actions">
				<?php echo $this->Html->link(__('<span class="glyphicon glyphicon-search"></span>'), array('controller' => 'clientes', 'action' => 'view', $cliente['id']), array('escape' => false)); ?>
				<?php echo $this->Html->link(__('<span class="glyphicon glyphicon-edit"></span>'), array('controller' => 'clientes', 'action' => 'edit', $cliente['id']), array('escape' => false)); ?>
				<?php echo $this->Form->postLink(__('<span class="glyphicon glyphicon-remove"></span>'), array('controller' => 'clientes', 'action' => 'delete', $cliente['id']), array('escape' => false), __('Are you sure you want to delete # %s?', $cliente['id'])); ?>
			</td>
		</tr>
	<?php endforeach; ?>
	</tbody>
	</table>
<?php endif; ?>

	</div><!-- end col md 12 -->
</div>
<div class="related row">
	<div class="col-md-12">
	<?php if (!empty($cidade['Estabelecimento'])): ?>
	<table cellpadding = "0" cellspacing = "0" class="table table-striped">
	<thead>
	<tr>
		<th><?php echo __('Id'); ?></th>
		<th><?php echo __('Nome Fantasia'); ?></th>
		<th><?php echo __('Razao Social'); ?></th>
		<th><?php echo __('Cpf'); ?></th>
		<th><?php echo __('Cnpj'); ?></th>
		<th><?php echo __('Endereco'); ?></th>
		<th><?php echo __('Cidade Id'); ?></th>
		<th><?php echo __('Bairro'); ?></th>
		<th><?php echo __('Cep'); ?></th>
		<th><?php echo __('Ativo'); ?></th>
		<th><?php echo __('Aberto'); ?></th>
		<th><?php echo __('Empresa Destaque'); ?></th>
		<th><?php echo __('Email'); ?></th>
		<th><?php echo __('Senha'); ?></th>
		<th><?php echo __('Created'); ?></th>
		<th><?php echo __('Modified'); ?></th>
		<th class="actions"></th>
	</tr>
	<thead>
	<tbody>
	<?php foreach ($cidade['Estabelecimento'] as $estabelecimento): ?>
		<tr>
			<td><?php echo $estabelecimento['id']; ?></td>
			<td><?php echo $estabelecimento['nome_fantasia']; ?></td>
			<td><?php echo $estabelecimento['razao_social']; ?></td>
			<td><?php echo $estabelecimento['cpf']; ?></td>
			<td><?php echo $estabelecimento['cnpj']; ?></td>
			<td><?php echo $estabelecimento['endereco']; ?></td>
			<td><?php echo $estabelecimento['cidade_id']; ?></td>
			<td><?php echo $estabelecimento['bairro']; ?></td>
			<td><?php echo $estabelecimento['cep']; ?></td>
			<td><?php echo $estabelecimento['ativo']; ?></td>
			<td><?php echo $estabelecimento['aberto']; ?></td>
			<td><?php echo $estabelecimento['empresa_destaque']; ?></td>
			<td><?php echo $estabelecimento['email']; ?></td>
			<td><?php echo $estabelecimento['senha']; ?></td>
			<td><?php echo $estabelecimento['created']; ?></td>
			<td><?php echo $estabelecimento['modified']; ?></td>
			<td class="actions">
				<?php echo $this->Html->link(__('<span class="glyphicon glyphicon-search"></span>'), array('controller' => 'estabelecimentos', 'action' => 'view', $estabelecimento['id']), array('escape' => false)); ?>
				<?php echo $this->Html->link(__('<span class="glyphicon glyphicon-edit"></span>'), array('controller' => 'estabelecimentos', 'action' => 'edit', $estabelecimento['id']), array('escape' => false)); ?>
				<?php echo $this->Form->postLink(__('<span class="glyphicon glyphicon-remove"></span>'), array('controller' => 'estabelecimentos', 'action' => 'delete', $estabelecimento['id']), array('escape' => false), __('Are you sure you want to delete # %s?', $estabelecimento['id'])); ?>
			</td>
		</tr>
	<?php endforeach; ?>
	</tbody>
	</table>
<?php endif; ?>

	</div><!-- end col md 12 -->
</div>
