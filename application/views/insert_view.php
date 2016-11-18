<html>
<head>
<title>Welcome</title>
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
<link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>assets/css/style.css" />
</head>
<body>

<br>
<h1> Login </h1>
<div id="container" style="margin-left:20%">
<div class="col-lg-10">

	<?php echo form_open('insert_ctrl', array('class' => 'form-horizontal')); ?>
	<div class="form-group">
	 <label for="username" class="control-label col-sm-2">User Name</label><?php echo form_error('uname'); ?>
			<div class="col-lg-6">
				<?php echo form_input(array('id' => 'uname', 'name' => 'uname','class' => 'form-control')); ?><br/>
			</div>
	</div>

	<div class="form-group">
	<label for="password" class="control-label col-sm-2">Password</label><?php echo form_error('pass'); ?>
			<div class="col-lg-6">
				<?php echo form_input(array('id' => 'pass', 'name' => 'pass', 'class' => 'form-control')); ?>
			</div>
	</div>

	<div class="form-group">
	<label for="logIn" class="control-label col-sm-2">Log In </label>
		<div class="col-lg-6">
			<?php
			$options = array(
			        'patient' 	 => 'Patient',
			        'caregiver'  => 'Care Giver',
			        'admin'      => 'Admin',
			);		
			echo form_dropdown('type', $options,'', array('class' => 'form-control'));
			?> 
		</div>
	</div>
	
	<div class="form-group">
    	<div class="col-sm-offset-2 col-sm-10" style="width:10%;">
			<?php echo form_submit(array('id' => 'submit', 'value' => 'Submit', 'class' => 'btn btn-primary btn-block btn-large')); ?>
			<?php echo form_close(); ?>
		</div>
	</div>
	
</div>
</div>
</body>
</html>