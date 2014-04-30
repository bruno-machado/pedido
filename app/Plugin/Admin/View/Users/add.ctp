<?php echo $this->Form->create('User');?>
    <fieldset>
        <legend><?php echo __('Add User'); ?></legend>
        <?php echo $this->Form->input('username');
        echo $this->Form->input('password');
        echo $this->Form->input('role', array(  'options' => array('admin' => 'Admin', 'author' => 'Author')));
        echo $this->Form->input('User.photo', array('type' => 'file'));
    	echo $this->Form->input('User.photo_dir', array('type' => 'hidden'));
        
    ?>
    </fieldset>
<?php echo $this->Form->end(__('Submit'));?>
