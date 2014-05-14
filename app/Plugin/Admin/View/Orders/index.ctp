<div class="orders index">

	<div class="row">
		<div class="col-md-12">
			<div class="page-header">
				<h1><?php echo __('Orders'); ?></h1>
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
								<li><?php echo $this->Html->link(__('<span class="glyphicon glyphicon-plus"></span>&nbsp;&nbsp;New Order'), array('action' => 'add'), array('escape' => false)); ?></li>
								<li><?php echo $this->Html->link(__('<span class="glyphicon glyphicon-list"></span>&nbsp;&nbsp;List Order Items'), array('controller' => 'order_items', 'action' => 'index'), array('escape' => false)); ?> </li>
		<li><?php echo $this->Html->link(__('<span class="glyphicon glyphicon-plus"></span>&nbsp;&nbsp;New Order Item'), array('controller' => 'order_items', 'action' => 'add'), array('escape' => false)); ?> </li>
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
						<th><?php echo $this->Paginator->sort('first_name'); ?></th>
						<th><?php echo $this->Paginator->sort('last_name'); ?></th>
						<th><?php echo $this->Paginator->sort('email'); ?></th>
						<th><?php echo $this->Paginator->sort('phone'); ?></th>
						<th><?php echo $this->Paginator->sort('billing_address'); ?></th>
						<th><?php echo $this->Paginator->sort('billing_address2'); ?></th>
						<th><?php echo $this->Paginator->sort('billing_city'); ?></th>
						<th><?php echo $this->Paginator->sort('billing_zip'); ?></th>
						<th><?php echo $this->Paginator->sort('billing_state'); ?></th>
						<th><?php echo $this->Paginator->sort('billing_country'); ?></th>
						<th><?php echo $this->Paginator->sort('shipping_address'); ?></th>
						<th><?php echo $this->Paginator->sort('shipping_address2'); ?></th>
						<th><?php echo $this->Paginator->sort('shipping_city'); ?></th>
						<th><?php echo $this->Paginator->sort('shipping_zip'); ?></th>
						<th><?php echo $this->Paginator->sort('shipping_state'); ?></th>
						<th><?php echo $this->Paginator->sort('shipping_country'); ?></th>
						<th><?php echo $this->Paginator->sort('weight'); ?></th>
						<th><?php echo $this->Paginator->sort('order_item_count'); ?></th>
						<th><?php echo $this->Paginator->sort('subtotal'); ?></th>
						<th><?php echo $this->Paginator->sort('tax'); ?></th>
						<th><?php echo $this->Paginator->sort('shipping'); ?></th>
						<th><?php echo $this->Paginator->sort('total'); ?></th>
						<th><?php echo $this->Paginator->sort('order_type'); ?></th>
						<th><?php echo $this->Paginator->sort('authorization'); ?></th>
						<th><?php echo $this->Paginator->sort('transaction'); ?></th>
						<th><?php echo $this->Paginator->sort('status'); ?></th>
						<th><?php echo $this->Paginator->sort('ip_address'); ?></th>
						<th><?php echo $this->Paginator->sort('created'); ?></th>
						<th><?php echo $this->Paginator->sort('modified'); ?></th>
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
						<td><?php echo h($order['Order']['billing_address']); ?>&nbsp;</td>
						<td><?php echo h($order['Order']['billing_address2']); ?>&nbsp;</td>
						<td><?php echo h($order['Order']['billing_city']); ?>&nbsp;</td>
						<td><?php echo h($order['Order']['billing_zip']); ?>&nbsp;</td>
						<td><?php echo h($order['Order']['billing_state']); ?>&nbsp;</td>
						<td><?php echo h($order['Order']['billing_country']); ?>&nbsp;</td>
						<td><?php echo h($order['Order']['shipping_address']); ?>&nbsp;</td>
						<td><?php echo h($order['Order']['shipping_address2']); ?>&nbsp;</td>
						<td><?php echo h($order['Order']['shipping_city']); ?>&nbsp;</td>
						<td><?php echo h($order['Order']['shipping_zip']); ?>&nbsp;</td>
						<td><?php echo h($order['Order']['shipping_state']); ?>&nbsp;</td>
						<td><?php echo h($order['Order']['shipping_country']); ?>&nbsp;</td>
						<td><?php echo h($order['Order']['weight']); ?>&nbsp;</td>
						<td><?php echo h($order['Order']['order_item_count']); ?>&nbsp;</td>
						<td><?php echo h($order['Order']['subtotal']); ?>&nbsp;</td>
						<td><?php echo h($order['Order']['tax']); ?>&nbsp;</td>
						<td><?php echo h($order['Order']['shipping']); ?>&nbsp;</td>
						<td><?php echo h($order['Order']['total']); ?>&nbsp;</td>
						<td><?php echo h($order['Order']['order_type']); ?>&nbsp;</td>
						<td><?php echo h($order['Order']['authorization']); ?>&nbsp;</td>
						<td><?php echo h($order['Order']['transaction']); ?>&nbsp;</td>
						<td><?php echo h($order['Order']['status']); ?>&nbsp;</td>
						<td><?php echo h($order['Order']['ip_address']); ?>&nbsp;</td>
						<td><?php echo h($order['Order']['created']); ?>&nbsp;</td>
						<td><?php echo h($order['Order']['modified']); ?>&nbsp;</td>
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