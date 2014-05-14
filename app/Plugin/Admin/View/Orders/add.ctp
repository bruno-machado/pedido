<div class="orders form">

	<div class="row">
		<div class="col-md-12">
			<div class="page-header">
				<h1><?php echo __('Add Order'); ?></h1>
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

																<li><?php echo $this->Html->link(__('<span class="glyphicon glyphicon-list"></span>&nbsp;&nbsp;List Orders'), array('action' => 'index'), array('escape' => false)); ?></li>
									<li><?php echo $this->Html->link(__('<span class="glyphicon glyphicon-list"></span>&nbsp;&nbsp;List Order Items'), array('controller' => 'order_items', 'action' => 'index'), array('escape' => false)); ?> </li>
		<li><?php echo $this->Html->link(__('<span class="glyphicon glyphicon-plus"></span>&nbsp;&nbsp;New Order Item'), array('controller' => 'order_items', 'action' => 'add'), array('escape' => false)); ?> </li>
							</ul>
						</div>
					</div>
				</div>			
		</div><!-- end col md 3 -->
		<div class="col-md-9">
			<?php echo $this->Form->create('Order', array('role' => 'form')); ?>

				<div class="form-group">
					<?php echo $this->Form->input('first_name', array('class' => 'form-control', 'placeholder' => 'First Name'));?>
				</div>
				<div class="form-group">
					<?php echo $this->Form->input('last_name', array('class' => 'form-control', 'placeholder' => 'Last Name'));?>
				</div>
				<div class="form-group">
					<?php echo $this->Form->input('email', array('class' => 'form-control', 'placeholder' => 'Email'));?>
				</div>
				<div class="form-group">
					<?php echo $this->Form->input('phone', array('class' => 'form-control', 'placeholder' => 'Phone'));?>
				</div>
				<div class="form-group">
					<?php echo $this->Form->input('billing_address', array('class' => 'form-control', 'placeholder' => 'Billing Address'));?>
				</div>
				<div class="form-group">
					<?php echo $this->Form->input('billing_address2', array('class' => 'form-control', 'placeholder' => 'Billing Address2'));?>
				</div>
				<div class="form-group">
					<?php echo $this->Form->input('billing_city', array('class' => 'form-control', 'placeholder' => 'Billing City'));?>
				</div>
				<div class="form-group">
					<?php echo $this->Form->input('billing_zip', array('class' => 'form-control', 'placeholder' => 'Billing Zip'));?>
				</div>
				<div class="form-group">
					<?php echo $this->Form->input('billing_state', array('class' => 'form-control', 'placeholder' => 'Billing State'));?>
				</div>
				<div class="form-group">
					<?php echo $this->Form->input('billing_country', array('class' => 'form-control', 'placeholder' => 'Billing Country'));?>
				</div>
				<div class="form-group">
					<?php echo $this->Form->input('shipping_address', array('class' => 'form-control', 'placeholder' => 'Shipping Address'));?>
				</div>
				<div class="form-group">
					<?php echo $this->Form->input('shipping_address2', array('class' => 'form-control', 'placeholder' => 'Shipping Address2'));?>
				</div>
				<div class="form-group">
					<?php echo $this->Form->input('shipping_city', array('class' => 'form-control', 'placeholder' => 'Shipping City'));?>
				</div>
				<div class="form-group">
					<?php echo $this->Form->input('shipping_zip', array('class' => 'form-control', 'placeholder' => 'Shipping Zip'));?>
				</div>
				<div class="form-group">
					<?php echo $this->Form->input('shipping_state', array('class' => 'form-control', 'placeholder' => 'Shipping State'));?>
				</div>
				<div class="form-group">
					<?php echo $this->Form->input('shipping_country', array('class' => 'form-control', 'placeholder' => 'Shipping Country'));?>
				</div>
				<div class="form-group">
					<?php echo $this->Form->input('weight', array('class' => 'form-control', 'placeholder' => 'Weight'));?>
				</div>
				<div class="form-group">
					<?php echo $this->Form->input('order_item_count', array('class' => 'form-control', 'placeholder' => 'Order Item Count'));?>
				</div>
				<div class="form-group">
					<?php echo $this->Form->input('subtotal', array('class' => 'form-control', 'placeholder' => 'Subtotal'));?>
				</div>
				<div class="form-group">
					<?php echo $this->Form->input('tax', array('class' => 'form-control', 'placeholder' => 'Tax'));?>
				</div>
				<div class="form-group">
					<?php echo $this->Form->input('shipping', array('class' => 'form-control', 'placeholder' => 'Shipping'));?>
				</div>
				<div class="form-group">
					<?php echo $this->Form->input('total', array('class' => 'form-control', 'placeholder' => 'Total'));?>
				</div>
				<div class="form-group">
					<?php echo $this->Form->input('order_type', array('class' => 'form-control', 'placeholder' => 'Order Type'));?>
				</div>
				<div class="form-group">
					<?php echo $this->Form->input('authorization', array('class' => 'form-control', 'placeholder' => 'Authorization'));?>
				</div>
				<div class="form-group">
					<?php echo $this->Form->input('transaction', array('class' => 'form-control', 'placeholder' => 'Transaction'));?>
				</div>
				<div class="form-group">
					<?php echo $this->Form->input('status', array('class' => 'form-control', 'placeholder' => 'Status'));?>
				</div>
				<div class="form-group">
					<?php echo $this->Form->input('ip_address', array('class' => 'form-control', 'placeholder' => 'Ip Address'));?>
				</div>
				<div class="form-group">
					<?php echo $this->Form->submit(__('Submit'), array('class' => 'btn btn-default')); ?>
				</div>

			<?php echo $this->Form->end() ?>

		</div><!-- end col md 12 -->
	</div><!-- end row -->
</div>
