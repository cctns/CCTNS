

<div class="span9">
	
	<?php  if ($use_username) {
		$username = array(
			'name'	=> 'username',
			'id'	=> 'username',
			'value' => set_value('username'),
			'maxlength'	=> $this->config->item('username_max_length', 'tank_auth'),
			'size'	=> 30,
			'class' => 'control-label',
			
		);
	}
	$email = array(
		'name'	=> 'email',
		'id'	=> 'email',
		'value'	=> set_value('email'),
		'maxlength'	=> 80,
		'size'	=> 30,
		
	);
	$password = array(
		'name'	=> 'password',
		'id'	=> 'password',
		'value' => set_value('password'),
		'maxlength'	=> $this->config->item('password_max_length', 'tank_auth'),
		'size'	=> 30,
		
	);
	$confirm_password = array(
		'name'	=> 'confirm_password',
		'id'	=> 'confirm_password',
		'value' => set_value('confirm_password'),
		'maxlength'	=> $this->config->item('password_max_length', 'tank_auth'),
		'size'	=> 30,
	);
	$captcha = array(
		'name'	=> 'captcha',
		'id'	=> 'captcha',
		'maxlength'	=> 8,
	);
	$phone = array(
		'id' => 'prependedInput' ,
		'name' => 'phone' ,
		'size' => 16,
		'value'=>set_value('phone'),
		'type'=>'text',
		'maxlength' => 10 ,
		
		 );
	$address=array(
		'id'=>'address',
		'rows' =>3 ,
		'cols' =>5 ,
		'name'=> 'address',
		'type'=>'textarea'
		 );
	$form = array(
		'class' => 'form-horizontal' 
		);
	$btn = array(
		'class' => 'btn btn-inverse ',
		'name' => 'register'
		 );
	$label=array(
		'class' => ' control-label'
	);
		echo form_open($this->uri->uri_string(),$form); ?>
		<legend>Register !</legend>
			 <?php if ($use_username) { ?>
			<div class="control-group">
				<?php echo form_label('Username', $username['id'],$username);?>
				<div class="controls"> 
					 <?php echo form_input($username); 
					 echo form_error($username['name']); 
					 echo isset($errors[$username['name']])?$errors[$username['name']]:'';
					 } ?>
				</div>
				</div>
			<div class="control-group">
				<?php echo form_label('Email Address', $email['id'],$label); ?>
				<div class="controls"> 
					<?php echo form_input($email); 
					 echo form_error($email['name']);  echo isset($errors[$email['name']])?$errors[$email['name']]:'';?> 
				</div>
				</div>
			
		<div class="control-group">
				<?php	echo form_label('Password', $password['id'],$label); ?>
				<div class="controls"> 
				 	<?php echo form_password($password); ?>
					<?php  echo form_error($password['name']); ?>
				</div>
				</div>
		<div class="control-group">	
		<?php echo form_label('Confirm Password', $confirm_password['id'],$label); 
				 echo form_error($password['name']); ?>	
				 <div class="controls"> 
					 <?php echo form_password($confirm_password); 
					 echo form_error($confirm_password['name']); ?>
				</div>
		</div>

				<div class="control-group">
					<?php echo form_label('Phone', $phone['id'],$label); ?>
						<div class="controls"> 
							<?php echo form_input($phone); 
							 echo form_error($confirm_password['name']);?> 
						</div>
				</div>

				 <div class="control-group">
    					<label class="control-label" for="inputEmail">Email</label>
    					<div class="controls">
      						<input type="text" id="inputEmail" placeholder="Email">
    					</div>
  				</div>
				
		<div class="control-group">
				<?php echo form_label('Address', $address['id'],$label); ?>
				<div class="controls"> 
					<?php echo form_textarea($address); 
					 echo form_error($address['name']); ?>
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

