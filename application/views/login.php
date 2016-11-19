
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
				        <form class="sa-innate-form" method="post">
				            <label>Email Address</label>
				            <input type="text" name="username">
				            <label>Password</label>
				            <input type="password" name="password">
				            <button type="submit">Sign In</button>
				           <p>New User? <a href="<?php echo site_url('welcome/signup') ?>">create new account</a></p>
				        </form>
			  	</div>
		  	</div>
		</div>
	</div>
</div>	