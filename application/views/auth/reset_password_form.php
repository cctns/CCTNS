<div class="span9">
	<?php
	$new_password = array(
		'name'	=> 'new_password',
		'id'	=> 'new_password',
		'maxlength'	=> $this->config->item('password_max_length', 'tank_auth'),
		'size'	=> 30,
	);
	$confirm_new_password = array(
		'name'	=> 'confirm_new_password',
		'id'	=> 'confirm_new_password',
		'maxlength'	=> $this->config->item('password_max_length', 'tank_auth'),
		'size' 	=> 30,
	);
	?>
	<?php echo form_open($this->uri->uri_string()); ?>
	<legend>Create new password here!</legend>
	<div class="control-group">
		<?php echo form_label('New Password', $new_password['id']); ?>
		<div class="controls">
			<?php echo form_password($new_password); ?>
			<td style="color: red;"><?php echo form_error($new_password['name']); ?><?php echo isset($errors[$new_password['name']])?$errors[$new_password['name']]:''; ?>
		</div>
	</div>
	<div class="control-group">
		<?php echo form_label('Confirm New Password', $confirm_new_password['id']); ?>
		<div class="controls">
			<?php echo form_password($confirm_new_password); ?>
			<td style="color: red;"><?php echo form_error($confirm_new_password['name']); ?><?php echo isset($errors[$confirm_new_password['name']])?$errors[$confirm_new_password['name']]:''; ?>
		</div>
	</div>
	<div class="control-group">
		<div class="form-actions">
			<?php echo form_submit($btn, 'Register'); 
 			echo form_close(); ?>
 			<button type="button" class="btn">Cancel</button>
		</div>
	</div>
</div>