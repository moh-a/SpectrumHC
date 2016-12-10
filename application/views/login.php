
<?php 
$this->load->view('../layout/header'); 
?>

<!-- Where all the magic happens -->
<!-- LOGIN FORM -->
<br>
<br>
<div class="container">
	<div class="row">
		<div class="col-md-4 col-md-offset-4">
			<div class="form-body">
				<div class="innter-form">

  						<?php echo validation_errors(); ?>
  						<?php
							if (isset($success_message)) {
							echo "<div class='message'>";
							echo "<p><font color='red'> <h3 align=center>";
							echo $success_message;
							echo "</h3></font></p>";
							echo "</div>";}?>	
  						
				        <?php echo form_open('welcome/validateUser', array('class' => 'sa-innate-form')); ?>
				            <label>Email Address</label>
				            <input type="text" name="username">
				            <label>Password</label>
				            <input type="password" name="password">
				            <label>Are you ?</label>
				            <?php
				            $options = array(
									        'Patient'       => 'Patient',
									        'Caregiver'     => 'Caregiver',
									        'Admin'         => 'Admin',
									);
							echo form_dropdown('role', $options);
							?>
				            <button type="submit">Sign In</button>
				           <p>New User? <a href="<?php echo site_url('welcome/signup')?>">create new account</a></p>
				        </form>
			  	</div>
		  	</div>
		</div>
	</div>
</div>	