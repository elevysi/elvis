<div class="container">
<?php echo $this->Form->create('User', array('class' => 'form-horizontal')); ?>	
<fieldset>
		<legend><?php echo __('REGISTER'); ?></legend>
	<div class="form-group"><?php echo $this->Form->input('username', array('class' => 'form-control', 'placeholder' => 'Username'));?></div>
	<div class="form-group"><?php echo $this->Form->input('password', array('class' => 'form-control', 'placeholder' => 'Password')); ?></div>
	<div class="form-group"><?php echo $this->Form->input('first_name', array('class' => 'form-control', 'placeholder' => 'First Name')); ?></div>
	<div class="form-group"><?php	echo $this->Form->input('last_name', array('class' => 'form-control', 'placeholder' => 'Last Name')); ?></div>
	<div class="form-group"><?php	echo $this->Form->input('email', array('class' => 'form-control', 'placeholder' => 'Email')); ?></div>
	</fieldset>
<?php echo $this->Form->submit(__('REGISTER'), array('class' => 'btn btn-primary')); ?>
	</div>

    






