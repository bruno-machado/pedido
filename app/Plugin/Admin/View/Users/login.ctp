<div class="users form">
<?php echo $this->Session->flash('auth'); ?>
<?php echo $this->Form->create('User');?>
        <legend><?php echo __('Entre com Usuário e Senha'); ?></legend>
       <div class="form-group"> <?php echo $this->Form->input('username', array('class' => 'form-control', 'placeholder' => 'Usuário', 'label' => ' Usuário')); ?></div>
        <div class="form-group"><?php echo $this->Form->input('password', array('class' => 'form-control', 'placeholder' => 'Senha', 'label' => ' Senha'));  ?></div>
		<div class="form-group">
			<?php echo $this->Form->submit(__('Submit'), array('class' => 'btn btn-default')); ?>
		</div>
<?php echo $this->Form->end() ?>
</div>