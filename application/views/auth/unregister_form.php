<div class="span9">
	<?php
	$password = array(
		'name'	=> 'password',
		'id'	=> 'password',
		'size'	=> 30,
	);
	?>
	<?php echo form_open($this->uri->uri_string()); ?>
	<legend>Login here!</legend>
		<div class="control-group">
			<?php echo form_label('Password', $password['id']); ?>
			<div c;ass="controls">
				<?php echo form_password($password); ?>
				<td style="color: red;"><?php echo form_error($password['name']); ?><?php echo isset($errors[$password['name']])?$errors[$password['name']]:''; ?></td>
			</div>
			<div class="control-group">
				<div class="form-actions">
					<?php echo form_submit($btn, 'Register'); 
		 			echo form_close(); ?>
		 			<button type="button" class="btn">Cancel</button>
				</div>
			</div>
</div>