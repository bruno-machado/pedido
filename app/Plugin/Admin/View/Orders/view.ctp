<div class="orders view">
	<div class="row">
		<div class="col-md-12">
			<div class="page-header">
				<h1>
				<?php echo __('Order'); ?>
				</h1>
			</div>
		</div>
	</div>

	<div class="row">
		<div class="col-md-9">
			<table cellpadding="0" cellspacing="0" class="table table-striped">
				<tbody>
					<tr>
						<th><?php echo __('Id'); ?>
						</th>
						<td><?php echo h($order['Order']['id']); ?> &nbsp;</td>
					</tr>
					<tr>
						<th><?php echo __('First Name'); ?>
						</th>
						<td><?php echo h($order['Order']['first_name']); ?> &nbsp;</td>
					</tr>
					<tr>
						<th><?php echo __('Last Name'); ?>
						</th>
						<td><?php echo h($order['Order']['last_name']); ?> &nbsp;</td>
					</tr>
					<tr>
						<th><?php echo __('Email'); ?>
						</th>
						<td><?php echo h($order['Order']['email']); ?> &nbsp;</td>
					</tr>
					<tr>
						<th><?php echo __('Phone'); ?>
						</th>
						<td><?php echo h($order['Order']['phone']); ?> &nbsp;</td>
					</tr>
					<tr>
						<th><?php echo __('Billing Address'); ?>
						</th>
						<td><?php echo h($order['Order']['billing_address']); ?> &nbsp;</td>
					</tr>
					<tr>
						<th><?php echo __('Billing Address2'); ?>
						</th>
						<td><?php echo h($order['Order']['billing_address2']); ?> &nbsp;</td>
					</tr>
					<tr>
						<th><?php echo __('Billing City'); ?>
						</th>
						<td><?php echo h($order['Order']['billing_city']); ?> &nbsp;</td>
					</tr>
					<tr>
						<th><?php echo __('Billing Zip'); ?>
						</th>
						<td><?php echo h($order['Order']['billing_zip']); ?> &nbsp;</td>
					</tr>
					<tr>
						<th><?php echo __('Billing State'); ?>
						</th>
						<td><?php echo h($order['Order']['billing_state']); ?> &nbsp;</td>
					</tr>
					<tr>
						<th><?php echo __('Billing Country'); ?>
						</th>
						<td><?php echo h($order['Order']['billing_country']); ?> &nbsp;</td>
					</tr>
					<tr>
						<th><?php echo __('Shipping Address'); ?>
						</th>
						<td><?php echo h($order['Order']['shipping_address']); ?> &nbsp;</td>
					</tr>
					<tr>
						<th><?php echo __('Shipping Address2'); ?>
						</th>
						<td><?php echo h($order['Order']['shipping_address2']); ?> &nbsp;
						</td>
					</tr>
					<tr>
						<th><?php echo __('Shipping City'); ?>
						</th>
						<td><?php echo h($order['Order']['shipping_city']); ?> &nbsp;</td>
					</tr>
					<tr>
						<th><?php echo __('Shipping Zip'); ?>
						</th>
						<td><?php echo h($order['Order']['shipping_zip']); ?> &nbsp;</td>
					</tr>
					<tr>
						<th><?php echo __('Shipping State'); ?>
						</th>
						<td><?php echo h($order['Order']['shipping_state']); ?> &nbsp;</td>
					</tr>
					<tr>
						<th><?php echo __('Shipping Country'); ?>
						</th>
						<td><?php echo h($order['Order']['shipping_country']); ?> &nbsp;</td>
					</tr>
					<tr>
						<th><?php echo __('Weight'); ?>
						</th>
						<td><?php echo h($order['Order']['weight']); ?> &nbsp;</td>
					</tr>
					<tr>
						<th><?php echo __('Order Item Count'); ?>
						</th>
						<td><?php echo h($order['Order']['order_item_count']); ?> &nbsp;</td>
					</tr>
					<tr>
						<th><?php echo __('Subtotal'); ?>
						</th>
						<td><?php echo h($order['Order']['subtotal']); ?> &nbsp;</td>
					</tr>
					<tr>
						<th><?php echo __('Tax'); ?>
						</th>
						<td><?php echo h($order['Order']['tax']); ?> &nbsp;</td>
					</tr>
					<tr>
						<th><?php echo __('Shipping'); ?>
						</th>
						<td><?php echo h($order['Order']['shipping']); ?> &nbsp;</td>
					</tr>
					<tr>
						<th><?php echo __('Total'); ?>
						</th>
						<td><?php echo h($order['Order']['total']); ?> &nbsp;</td>
					</tr>
					<tr>
						<th><?php echo __('Order Type'); ?>
						</th>
						<td><?php echo h($order['Order']['order_type']); ?> &nbsp;</td>
					</tr>
					<tr>
						<th><?php echo __('Authorization'); ?>
						</th>
						<td><?php echo h($order['Order']['authorization']); ?> &nbsp;</td>
					</tr>
					<tr>
						<th><?php echo __('Transaction'); ?>
						</th>
						<td><?php echo h($order['Order']['transaction']); ?> &nbsp;</td>
					</tr>
					<tr>
						<th><?php echo __('Status'); ?>
						</th>
						<td><?php echo h($order['Order']['status']); ?> &nbsp;</td>
					</tr>
					<tr>
						<th><?php echo __('Ip Address'); ?>
						</th>
						<td><?php echo h($order['Order']['ip_address']); ?> &nbsp;</td>
					</tr>
					<tr>
						<th><?php echo __('Created'); ?>
						</th>
						<td><?php echo h($order['Order']['created']); ?> &nbsp;</td>
					</tr>
					<tr>
						<th><?php echo __('Modified'); ?>
						</th>
						<td><?php echo h($order['Order']['modified']); ?> &nbsp;</td>
					</tr>
				</tbody>
			</table>

		</div>
		<!-- end col md 9 -->

	</div>
</div>

<div class="related row">
	<div class="col-md-12">
		<h3>
		<?php echo __('Related Order Items'); ?>
		</h3>
		<?php if (!empty($order['OrderItem'])): ?>
		<table cellpadding="0" cellspacing="0" class="table table-striped">
			<thead>
				<tr>
					<th><?php echo __('Nº Pedido'); ?></th>
					<th><?php echo __('Product Id'); ?></th>
					<th><?php echo __('Nome'); ?></th>
					<th><?php echo __('Quantity'); ?></th>
					<th><?php echo __('Preço'); ?></th>
					<th><?php echo __('Subtotal'); ?></th>
					<th><?php echo __('Created'); ?></th>
					<th class="actions"></th>
				</tr>
			
			
			<thead>
			
			
			<tbody>
			<?php foreach ($order['OrderItem'] as $orderItem): ?>
				<tr>	
					<td><?php echo $orderItem['order_id']; ?></td>
					<td><?php echo $orderItem['product_id']; ?></td>
					<td><?php echo $orderItem['Product']['productmod_name']; ?></td>
					<td><?php echo $orderItem['quantity']; ?></td>
					<td><?php echo $orderItem['preco']; ?></td>
					<td><?php echo $orderItem['subtotal']; ?></td>
					<td><?php echo $orderItem['created']; ?></td>
				</tr>
				<?php endforeach; ?>
			</tbody>
		</table>
		<?php endif; ?>
	</div>
	<!-- end col md 12 -->
</div>
