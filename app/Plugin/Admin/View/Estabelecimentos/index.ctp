<div class="estabelecimentos index">

	<div class="row">
		<div class="col-md-12">
			<div class="page-header">
				<h1>
				<?php echo __('Estabelecimentos'); ?>
				</h1>
			</div>
		</div>
		<!-- end col md 12 -->
	</div>
	<!-- end row -->



	<div class="row">

		<div class="col-md-3">
			<div class="actions">
				<div class="panel panel-default">
					<div class="panel-heading">Actions</div>
					<div class="panel-body">
						<ul class="nav nav-pills nav-stacked">
							<li><?php echo $this->Html->link(__('<span class="glyphicon glyphicon-plus"></span>&nbsp;&nbsp;New Estabelecimento'), array('action' => 'add'), array('escape' => false)); ?>
							</li>
							<li><?php echo $this->Html->link(__('<span class="glyphicon glyphicon-list"></span>&nbsp;&nbsp;List Cidades'), array('controller' => 'cidades', 'action' => 'index'), array('escape' => false)); ?>
							</li>
							<li><?php echo $this->Html->link(__('<span class="glyphicon glyphicon-plus"></span>&nbsp;&nbsp;New Cidade'), array('controller' => 'cidades', 'action' => 'add'), array('escape' => false)); ?>
							</li>
							<li><?php echo $this->Html->link(__('<span class="glyphicon glyphicon-list"></span>&nbsp;&nbsp;List Pedidos'), array('controller' => 'pedidos', 'action' => 'index'), array('escape' => false)); ?>
							</li>
							<li><?php echo $this->Html->link(__('<span class="glyphicon glyphicon-plus"></span>&nbsp;&nbsp;New Pedido'), array('controller' => 'pedidos', 'action' => 'add'), array('escape' => false)); ?>
							</li>
							<li><?php echo $this->Html->link(__('<span class="glyphicon glyphicon-list"></span>&nbsp;&nbsp;List Pedidos Itens'), array('controller' => 'pedidos_itens', 'action' => 'index'), array('escape' => false)); ?>
							</li>
							<li><?php echo $this->Html->link(__('<span class="glyphicon glyphicon-plus"></span>&nbsp;&nbsp;New Pedidos Iten'), array('controller' => 'pedidos_itens', 'action' => 'add'), array('escape' => false)); ?>
							</li>
							<li><?php echo $this->Html->link(__('<span class="glyphicon glyphicon-list"></span>&nbsp;&nbsp;List Produtos'), array('controller' => 'produtos', 'action' => 'index'), array('escape' => false)); ?>
							</li>
							<li><?php echo $this->Html->link(__('<span class="glyphicon glyphicon-plus"></span>&nbsp;&nbsp;New Produto'), array('controller' => 'produtos', 'action' => 'add'), array('escape' => false)); ?>
							</li>
							<li><?php echo $this->Html->link(__('<span class="glyphicon glyphicon-list"></span>&nbsp;&nbsp;List Produtos Fotos'), array('controller' => 'produtos_fotos', 'action' => 'index'), array('escape' => false)); ?>
							</li>
							<li><?php echo $this->Html->link(__('<span class="glyphicon glyphicon-plus"></span>&nbsp;&nbsp;New Produtos Foto'), array('controller' => 'produtos_fotos', 'action' => 'add'), array('escape' => false)); ?>
							</li>
							<li><?php echo $this->Html->link(__('<span class="glyphicon glyphicon-list"></span>&nbsp;&nbsp;List Produtos Valores'), array('controller' => 'produtos_valores', 'action' => 'index'), array('escape' => false)); ?>
							</li>
							<li><?php echo $this->Html->link(__('<span class="glyphicon glyphicon-plus"></span>&nbsp;&nbsp;New Produtos Valore'), array('controller' => 'produtos_valores', 'action' => 'add'), array('escape' => false)); ?>
							</li>
							<li><?php echo $this->Html->link(__('<span class="glyphicon glyphicon-list"></span>&nbsp;&nbsp;List Tamanhos'), array('controller' => 'tamanhos', 'action' => 'index'), array('escape' => false)); ?>
							</li>
							<li><?php echo $this->Html->link(__('<span class="glyphicon glyphicon-plus"></span>&nbsp;&nbsp;New Tamanho'), array('controller' => 'tamanhos', 'action' => 'add'), array('escape' => false)); ?>
							</li>
						</ul>
					</div>
					<!-- end body -->
				</div>
				<!-- end panel -->
			</div>
			<!-- end actions -->
		</div>
		<!-- end col md 3 -->

		<div class="col-md-9">
			<table cellpadding="0" cellspacing="0" class="table table-striped">
				<thead>
					<tr>
						<th><?php echo $this->Paginator->sort('id'); ?>
						</th>
						<th><?php echo $this->Paginator->sort('nome_fantasia'); ?>
						</th>
						<th><?php echo $this->Paginator->sort('razao_social'); ?>
						</th>
						<th><?php echo $this->Paginator->sort('cpf'); ?>
						</th>
						<th><?php echo $this->Paginator->sort('cnpj'); ?>
						</th>
						<th><?php echo $this->Paginator->sort('endereco'); ?>
						</th>
						<th><?php echo $this->Paginator->sort('cidade_id'); ?>
						</th>
						<th><?php echo $this->Paginator->sort('bairro'); ?>
						</th>
						<th><?php echo $this->Paginator->sort('cep'); ?>
						</th>
						<th><?php echo $this->Paginator->sort('ativo'); ?>
						</th>
						<th><?php echo $this->Paginator->sort('aberto'); ?>
						</th>
						<th><?php echo $this->Paginator->sort('empresa_destaque'); ?>
						</th>
						<th><?php echo $this->Paginator->sort('email'); ?>
						</th>
						<th><?php echo $this->Paginator->sort('senha'); ?>
						</th>
						<th><?php echo $this->Paginator->sort('created'); ?>
						</th>
						<th><?php echo $this->Paginator->sort('modified'); ?>
						</th>
						<th class="actions"></th>
					</tr>
				</thead>
				<tbody>
				<?php foreach ($estabelecimentos as $estabelecimento): ?>
					<tr>
						<td><?php echo h($estabelecimento['Estabelecimento']['id']); ?>&nbsp;</td>
						<td><?php echo h($estabelecimento['Estabelecimento']['nome_fantasia']); ?>&nbsp;</td>
						<td><?php echo h($estabelecimento['Estabelecimento']['razao_social']); ?>&nbsp;</td>
						<td><?php echo h($estabelecimento['Estabelecimento']['cpf']); ?>&nbsp;</td>
						<td><?php echo h($estabelecimento['Estabelecimento']['cnpj']); ?>&nbsp;</td>
						<td><?php echo h($estabelecimento['Estabelecimento']['endereco']); ?>&nbsp;</td>
						<td><?php echo $this->Html->link($estabelecimento['Cidade']['id'], array('controller' => 'cidades', 'action' => 'view', $estabelecimento['Cidade']['id'])); ?>
						</td>
						<td><?php echo h($estabelecimento['Estabelecimento']['bairro']); ?>&nbsp;</td>
						<td><?php echo h($estabelecimento['Estabelecimento']['cep']); ?>&nbsp;</td>
						<td><?php echo h($estabelecimento['Estabelecimento']['ativo']); ?>&nbsp;</td>
						<td><?php echo h($estabelecimento['Estabelecimento']['aberto']); ?>&nbsp;</td>
						<td><?php echo h($estabelecimento['Estabelecimento']['empresa_destaque']); ?>&nbsp;</td>
						<td><?php echo h($estabelecimento['Estabelecimento']['email']); ?>&nbsp;</td>
						<td><?php echo h($estabelecimento['Estabelecimento']['senha']); ?>&nbsp;</td>
						<td><?php echo h($estabelecimento['Estabelecimento']['created']); ?>&nbsp;</td>
						<td><?php echo h($estabelecimento['Estabelecimento']['modified']); ?>&nbsp;</td>
						<td class="actions"><?php echo $this->Html->link('<span class="glyphicon glyphicon-search"></span>', array('action' => 'view', $estabelecimento['Estabelecimento']['id']), array('escape' => false)); ?>
						<?php echo $this->Html->link('<span class="glyphicon glyphicon-edit"></span>', array('action' => 'edit', $estabelecimento['Estabelecimento']['id']), array('escape' => false)); ?>
						<?php echo $this->Form->postLink('<span class="glyphicon glyphicon-remove"></span>', array('action' => 'delete', $estabelecimento['Estabelecimento']['id']), array('escape' => false), __('Are you sure you want to delete # %s?', $estabelecimento['Estabelecimento']['id'])); ?>
						</td>
					</tr>
					<?php endforeach; ?>
				</tbody>
			</table>

			<p>
				<small><?php echo $this->Paginator->counter(array('format' => __('Page {:page} of {:pages}, showing {:current} records out of {:count} total, starting on record {:start}, ending on {:end}')));?>
				</small>
			</p>

			<?php
			$params = $this->Paginator->params();
			if ($params['pageCount'] > 1) {
				?>
			<ul class="pagination pagination-sm">
			<?php
			echo $this->Paginator->prev('&larr; Previous', array('class' => 'prev','tag' => 'li','escape' => false), '<a onclick="return false;">&larr; Previous</a>', array('class' => 'prev disabled','tag' => 'li','escape' => false));
			echo $this->Paginator->numbers(array('separator' => '','tag' => 'li','currentClass' => 'active','currentTag' => 'a'));
			echo $this->Paginator->next('Next &rarr;', array('class' => 'next','tag' => 'li','escape' => false), '<a onclick="return false;">Next &rarr;</a>', array('class' => 'next disabled','tag' => 'li','escape' => false));
				?>
			</ul>
			<?php } ?>

		</div>
		<!-- end col md 9 -->
	</div>
	<!-- end row -->


</div>
<!-- end containing of content -->
