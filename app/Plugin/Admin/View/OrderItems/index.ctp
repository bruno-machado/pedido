<div class="orderItems index">

	<div class="row">
		<div class="col-md-12">
			<div class="page-header">
				<h1><?php echo __('Order Items'); ?></h1>
			</div>
		</div><!-- end col md 12 -->
	</div><!-- end row -->



	<div class="row">

		<div class="col-md-3">
			<div class="actions">
				<div class="panel panel-default">
					<div class="panel-heading">Actions</div>
						<div class="panel-body">
							<ul class="nav nav-pills nav-stacked">
								<li><?php echo $this->Html->link(__('<span class="glyphicon glyphicon-plus"></span>&nbsp;&nbsp;New Order Item'), array('action' => 'add'), array('escape' => false)); ?></li>
								<li><?php echo $this->Html->link(__('<span class="glyphicon glyphicon-list"></span>&nbsp;&nbsp;List Orders'), array('controller' => 'orders', 'action' => 'index'), array('escape' => false)); ?> </li>
		<li><?php echo $this->Html->link(__('<span class="glyphicon glyphicon-plus"></span>&nbsp;&nbsp;New Order'), array('controller' => 'orders', 'action' => 'add'), array('escape' => false)); ?> </li>
		<li><?php echo $this->Html->link(__('<span class="glyphicon glyphicon-list"></span>&nbsp;&nbsp;List Products'), array('controller' => 'products', 'action' => 'index'), array('escape' => false)); ?> </li>
		<li><?php echo $this->Html->link(__('<span class="glyphicon glyphicon-plus"></span>&nbsp;&nbsp;New Product'), array('controller' => 'products', 'action' => 'add'), array('escape' => false)); ?> </li>
							</ul>
						</div><!-- end body -->
				</div><!-- end panel -->
			</div><!-- end actions -->
		</div><!-- end col md 3 -->

		<div class="col-md-9">
			<table cellpadding="0" cellspacing="0" class="table table-striped">
				<thead>
					<tr>
						<th><?php echo $this->Paginator->sort('id'); ?></th>
						<th><?php echo $this->Paginator->sort('order_id'); ?></th>
						<th><?php echo $this->Paginator->sort('product_id'); ?></th>
						<th><?php echo $this->Paginator->sort('name'); ?></th>
						<th><?php echo $this->Paginator->sort('quantity'); ?></th>
						<th><?php echo $this->Paginator->sort('weight'); ?></th>
						<th><?php echo $this->Paginator->sort('price'); ?></th>
						<th><?php echo $this->Paginator->sort('subtotal'); ?></th>
						<th><?php echo $this->Paginator->sort('productmod_name'); ?></th>
						<th><?php echo $this->Paginator->sort('created'); ?></th>
						<th><?php echo $this->Paginator->sort('modified'); ?></th>
						<th class="actions"></th>
					</tr>
				</thead>
				<tbody>
				<?php foreach ($orderItems as $orderItem): ?>
					<tr>
						<td><?php echo h($orderItem['OrderItem']['id']); ?>&nbsp;</td>
								<td>
			<?php echo $this->Html->link($orderItem['Order']['id'], array('controller' => 'orders', 'action' => 'view', $orderItem['Order']['id'])); ?>
		</td>
								<td>
			<?php echo $this->Html->link($orderItem['Product']['id'], array('controller' => 'products', 'action' => 'view', $orderItem['Product']['id'])); ?>
		</td>
						<td><?php echo h($orderItem['OrderItem']['name']); ?>&nbsp;</td>
						<td><?php echo h($orderItem['OrderItem']['quantity']); ?>&nbsp;</td>
						<td><?php echo h($orderItem['OrderItem']['weight']); ?>&nbsp;</td>
						<td><?php echo h($orderItem['OrderItem']['price']); ?>&nbsp;</td>
						<td><?php echo h($orderItem['OrderItem']['subtotal']); ?>&nbsp;</td>
						<td><?php echo h($orderItem['OrderItem']['productmod_name']); ?>&nbsp;</td>
						<td><?php echo h($orderItem['OrderItem']['created']); ?>&nbsp;</td>
						<td><?php echo h($orderItem['OrderItem']['modified']); ?>&nbsp;</td>
						<td class="actions">
							<?php echo $this->Html->link('<span class="glyphicon glyphicon-search"></span>', array('action' => 'view', $orderItem['OrderItem']['id']), array('escape' => false)); ?>
							<?php echo $this->Html->link('<span class="glyphicon glyphicon-edit"></span>', array('action' => 'edit', $orderItem['OrderItem']['id']), array('escape' => false)); ?>
							<?php echo $this->Form->postLink('<span class="glyphicon glyphicon-remove"></span>', array('action' => 'delete', $orderItem['OrderItem']['id']), array('escape' => false), __('Are you sure you want to delete # %s?', $orderItem['OrderItem']['id'])); ?>
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