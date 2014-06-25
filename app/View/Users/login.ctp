<?php 
	echo $this->Form->create('User', array('class' => 'form-signin', 'novalidate' => true));
?>
<h2 class="form-signin-heading">Please sign in</h2>
<?php
	echo $this->Form->input('username', array('type' => 'email', 'class' => 'form-control', 'placeholder' => 'Email', 'label' => FALSE));
	echo $this->Form->input('password', array('type' => 'password','class' => 'form-control', 'placeholder' => 'Password', 'label' => FALSE));
	echo $this->Form->input('remember', array('type' => 'checkbox', 'value' => 'rememberme', 'label' => 'Remember me'));
	
	echo $this->Form->submit('Sign In', array('class' => 'btn btn-lg btn-primary btn-block'));
?>
<?php	
	echo $this->Html->Link('Register', array('controller' => 'users', 'action' => 'register'));
?>
