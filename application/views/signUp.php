<?php 
$this->load->view('../layout/header');
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <title>Registration</title>
</head>
<body>
<div class="container">
	<div class="row">
		<h2 align="center"> Registration form</h2>
	</div>
</div>
<br>
<br>

<body>

<div class="container">

  <!-- Trigger the modal with a button -->

  <!-- Modal -->
 

<div class="container">
<div class="row">
<div class="box-size">
<div class="form-body">
    <ul class="nav nav-tabs final-login">
        <li class="active"><a data-toggle="tab"  href="#sectionA">Patient</a></li>
        <li><a data-toggle="tab" href="#sectionB">Care-Giver</a></li>
    </ul>
    <div class="tab-content">	
        <div id="sectionA" class="tab-pane fade in active">
	        <div class="innter-form">
	      		<?php echo validation_errors(); ?>
	      		<?php
					if (isset($err_message)) {
					echo "<div class='message'>";
					echo "<p><font color='red'> <h3 align=center>";
					echo $err_message;
					echo "</h3></font></p>";
					echo "</div>";}?>
	            
	            <?php echo form_open('welcome/insertPatient', array('class' => 'sa-innate-form')); ?>

	             	<label>Name</label>
		            <input type="text" name="name" placeholder=" Enter your Full Name" required>
		             <label>Email Address</label><br>
		            <input type="email" name="email" placeholder=" Enter Email Address. Use this as Login ID after registration" required><br>
		            <label>Choose a Password</label>
		            <input type="password" name="pass" placeholder=" Choose a Strong password and Keep it Safe (Minimum 8 character)"required>
		            <label>Gender</label>
		            <div class="row">
						<div class="col-sm-2 form-group">
			            	<div class="radio" >
	  							<label><input type="radio" name="gender" value="male" checked>Male</label>
							</div>
						</div>
						<div class="col-sm-2 form-group">
							<div class="radio">
							 	<label><input type="radio" name="gender" value="female" >Female</label>
							</div>
						</div>
					</div>	
					<label>Preferred  Language</label>
		            <div class="row">
						<div class="col-sm-2 form-group">
			            	<div class="radio">
	  							<label><input type="radio" name="language" value="English" checked>English</label>
							</div>
						</div>
						<div class="col-sm-2 form-group">
							<div class="radio">
							 	<label><input type="radio" name="language" value="French">French</label>
							</div>
						</div>
					</div>
					<label>Date of Birth</label>
		            <input type="date" name="dob" max="2016-01-01" required>
						
					<div class="form-group">
						<label >Address</label>  
						<input id="add1" name="add1" type="text" placeholder=" House number and street Name" class="form-control input-md" required>
					</div>
					<div class="row">
							<div class="col-sm-4 form-group">
								<label>City</label>
								<input type="text"  name="city" placeholder="Enter City Name Here.." class="form-control" required>
							</div>	
							<div class="col-sm-4 form-group">
								<label>State</label>
								<input type="text" name="state" placeholder="Enter State Name Here.." class="form-control" required>
							</div>	
							<div class="col-sm-4 form-group">
								<label>Postal</label>
								<input type="text" name="postalcode" placeholder="Enter Zip Code Here.." class="form-control" required>
							</div>		
					</div>
		            <label>Telephone </label>
		            <input type="number" name="Tphno" placeholder="Enter Telephone number without spaces: 5140001111"required>
		            <button type="submit">Sign Up</button>

	            </form>
	        </div>
        </div>
        <div id="sectionB" class="tab-pane fade">
			 <div class="innter-form">
	            <form class="sa-innate-form" method="post">
	             	<label>Name</label>
		            <input type="text" name="name">
		            <label>Telephone</label>
		            <input type="number" name="Tphno">
		            <label>Gender</label>
		            <div class="radio">
  						<label><input type="radio" name="male">Male</label>
					</div>
					<div class="radio">
					 	<label><input type="radio" name="Fmale">Female</label>
					</div>
						<div class="form-group">
						<label >Address</label>  
						<input id="add1" name="add1" type="text" placeholder="" class="form-control input-md" required="">
					</div>
					<div class="row">
							<div class="col-sm-4 form-group">
								<label>City</label>
								<input type="text" placeholder="Enter City Name Here.." class="form-control">
							</div>	
							<div class="col-sm-4 form-group">
								<label>State</label>
								<input type="text" placeholder="Enter State Name Here.." class="form-control">
							</div>	
							<div class="col-sm-4 form-group">
								<label>Postal Code</label>
								<input type="text" placeholder="Enter Zip Code Here.." class="form-control">
							</div>		
					</div>
		            <label>Email Address</label>
		            <input type="text" name="email">
		            <label>Password</label>
		            <input type="password" name="password">
		            <button type="submit">Sign Up</button>
		            
	            </form>
	        </div>
        </div>
    </div>
    </div>
    </div>
    </div>
    </div>
    </div>

</body>
</html>
