<div class="span9">


	
	<?php 
		$against = array(
			'name'	=> 'against',
			'id'	=> 'against',
			'value' => set_value('against'),
			'maxlength'	=> $this->config->item('username_max_length', 'tank_auth'),
			'size'	=> 30,
			'class'=>"control-label",
			'label'=>"Against",
		);

	$subject = array(
		'id'=>'subject',
		'rows' =>2 ,
		'cols' =>7,
		'name'=> 'subject',
		'type'=>'textarea'
		
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
		'class' => 'form-horizontal' ,
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
			
			
				 <?php echo form_label('Against', $against['id'],$against);?>
				
					 <?php echo form_input($against); 
					 echo form_error($against['name']); 
					 echo isset($errors[$against['name']])?$errors[$against['name']]:'';
					 ?>
				
		
				<?php echo form_label('Subject', $subject['id'],$label); ?>
				<div class="controls"> 
					<?php echo form_textarea($subject); 
					 echo form_error($subject['name']);  echo isset($errors[$subject['name']])?$errors[$subject['name']]:'';?> 
				</div>
		
				<?php	echo form_label('Password', $password['id'],$label); ?>
				<div class="controls"> 
				 	<?php echo form_password($password); 
				 	echo form_error($password['name']); ?>
				</div>
		
				 <?php echo form_label('Confirm Password', $confirm_password['id'],$label); ?>
				 <div class="controls"> 
					 <?php echo form_password($confirm_password); 
					 echo form_error($confirm_password['name']); ?>
				</div>
		
				<?php echo form_label('Phone', $phone['id'],$label); ?>
				<div class="controls"> 
					<?php echo form_input($phone); 
					 echo form_error($confirm_password['name']);?> 
				</div>
				
		
				<?php echo form_label('Address', $address['id'],$label); ?>
				<div class="controls"> 
					<?php echo form_textarea($address); 
					 echo form_error($address['name']); ?>
				</div>
		<div class="form-actions">
				<?php echo form_submit($btn, 'Register'); 
		 	echo form_close(); ?>
		 <button type="button" class="btn">Cancel</button>
		</div>
</div>

