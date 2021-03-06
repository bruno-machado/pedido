<div class="orders index">

	<div class="row">
		<div class="col-md-12">
			<div class="page-header">
				<h1><?php echo __('Orders'); ?></h1>
			</div>
		</div><!-- end col md 12 -->
	</div><!-- end row -->



	<div class="row">
		<div class="col-md-9">
			<table cellpadding="0" cellspacing="0" class="table table-striped">
				<thead>
					<tr>
						<th><?php echo $this->Paginator->sort('id'); ?></th>
						<th><?php echo $this->Paginator->sort('Nome'); ?></th>
						<th><?php echo $this->Paginator->sort('Sobrenome'); ?></th>
						<th><?php echo $this->Paginator->sort('email'); ?></th>
						<th><?php echo $this->Paginator->sort('Fone'); ?></th>
						<th><?php echo $this->Paginator->sort('Endereco'); ?></th>
						<th><?php echo $this->Paginator->sort('Cida.'); ?></th>
						<th><?php echo $this->Paginator->sort('CEP'); ?></th>
						<th><?php echo $this->Paginator->sort('Complemento'); ?></th>
						<th><?php echo $this->Paginator->sort('qtd'); ?></th>
						<th><?php echo $this->Paginator->sort('total'); ?></th>
						<th><?php echo $this->Paginator->sort('created'); ?></th>
						<th class="actions"></th>
					</tr>
				</thead>
				<tbody>
				<?php foreach ($orders as $order): ?>
					<tr>
						<td><?php echo h($order['Order']['id']); ?>&nbsp;</td>
						<td><?php echo h($order['Order']['first_name']); ?>&nbsp;</td>
						<td><?php echo h($order['Order']['last_name']); ?>&nbsp;</td>
						<td><?php echo h($order['Order']['email']); ?>&nbsp;</td>
						<td><?php echo h($order['Order']['phone']); ?>&nbsp;</td>
						<td><?php echo h($order['Order']['shipping_address']); ?>&nbsp;</td>
						<td><?php echo h($order['Order']['shipping_city']); ?>&nbsp;</td>
						<td><?php echo h($order['Order']['shipping_zip']); ?>&nbsp;</td>
						<td><?php echo h($order['Order']['shipping_country']); ?>&nbsp;</td>
						<td><?php echo h($order['Order']['order_item_count']); ?>&nbsp;</td>
						<td><?php echo h($order['Order']['total']); ?>&nbsp;</td>
						<td><?php echo h($order['Order']['created']); ?>&nbsp;</td>
						<td class="actions">
							<?php echo $this->Html->link('<span class="glyphicon glyphicon-search"></span>', array('action' => 'view', $order['Order']['id']), array('escape' => false)); ?>
							<?php echo $this->Html->link('<span class="glyphicon glyphicon-edit"></span>', array('action' => 'edit', $order['Order']['id']), array('escape' => false)); ?>
							<?php echo $this->Form->postLink('<span class="glyphicon glyphicon-remove"></span>', array('action' => 'delete', $order['Order']['id']), array('escape' => false), __('Are you sure you want to delete # %s?', $order['Order']['id'])); ?>
						</td>
					</tr>
				<?php endforeach; ?>
				</tbody>
			</table>

			<p>
				<small><?php echo $this->Paginator->counter(array('format' => __('Page {:page} of {:pages}, showing {:current} records out of {:count} total, starting on record {:start}, ending on {:end}')));?></small>
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

		</div> <!-- end col md 9 -->
	</div><!-- end row -->


</div><!-- end containing of content -->