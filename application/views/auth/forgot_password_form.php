<div class="span9">	
	<?php
	$login = array(
		'name'	=> 'login',
		'id'	=> 'login',
		'value' => set_value('login'),
		'maxlength'	=> 80,
		'size'	=> 30,
	);
	$form = array(
		'class' => 'form-horizontal' 
	);
	$btn = array(
		'class' => 'btn btn-inverse ',
		'name' => 'register'
	 );
	$label=array(
		'class' => 'control-label'
	);
	if ($this->config->item('use_username', 'tank_auth')) {
		$login_label = 'Email or login';
	} else {
		$login_label = 'Email';
	}
	?>
	<?php echo form_open($this->uri->uri_string(),$form); ?>
	<legend>Generate new password here!</legend>
	<div class="control-group">
		<?php echo form_label('Your registered email-id', $login['id'],$label); ?>
		<div class="controls">
			<?php echo form_input($login); ?>
			<?php echo form_error($login['name']); ?><?php echo isset($errors[$login['name']])?$errors[$login['name']]:''; ?>
		</div>
	</div>
	<div class="control-group">
		<div class="form-actions">
			<?php echo form_submit($btn, 'Get a new Password!'); 
	 		echo form_close(); ?>
			<button type="button" class="btn">Cancel</button>
		</div>
	</div>
</div>