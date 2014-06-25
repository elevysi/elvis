<div class="container">
<?php  $this->start('actions_left'); ?>
	<div class="col-sm-3 col-md-2 sidebar">
          <ul class="nav nav-sidebar">
            <li><?php echo $this->Html->link(__('List Users'), array('action' => 'index')); ?></li>
          </ul>
        </div>
<?php $this->end(); ?>
<?php echo $this->Form->create('User', array('class' => 'form-horizontal')); ?>
	<fieldset>
		<legend><?php echo __('Add User'); ?></legend>
		<div class="form-group">
		<?php echo $this->Form->input('username', array('class' => 'form-control', 'placeholder' => 'Username'));?>
		</div>
	<div class="form-group"><?php echo $this->Form->input('password', array('class' => 'form-control', 'placeholder' => 'password')); ?></div>
	<div class="form-group"><?php echo $this->Form->input('first_name', array('class' => 'form-control', 'placeholder' => 'First Name')); ?></div>
	<div class="form-group"><?php	echo $this->Form->input('last_name', array('class' => 'form-control', 'placeholder' => 'Last Name')); ?></div>
	<div class="form-group"><?php	echo $this->Form->input('email', array('class' => 'form-control', 'placeholder' => 'Email')); ?></div>
	<div class="form-group"><?php	echo $this->Form->input('security_descriptor', array('class' => 'form-control', 'placeholder' => 'Security Descriptor'));?></div>
	<div class="form-group"><?php	echo $this->Form->input('fonction', array('class' => 'form-control', 'placeholder' => 'Function'));?></div>
	
	</fieldset>
<?php echo $this->Form->submit(__('Submit'), array('class' => 'btn btn-primary')); ?>
</div>

    






