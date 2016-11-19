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
		<h2>Registration form</h2>
	</div>
</div>
<br>
<br>
<div class="container">
<div class="row">
<div class="col-md-4 col-md-offset-4">
<div class="form-body">
    <ul class="nav nav-tabs final-login">
        <li class="active"><a data-toggle="tab"  href="#sectionA">Patient</a></li>
        <li><a data-toggle="tab" href="#sectionB">Care-Giver</a></li>
    </ul>
    <div class="tab-content">	
        <div id="sectionA" class="tab-pane fade in active">
	        <div class="innter-form">
	       
	            <?php echo form_open('welcome/insertPatient', array('class' => 'sa-innate-form')); ?>

	             	<label>Name</label>
		            <input type="text" name="name">
		            <label>Telephone</label>
		            <input type="number" name="Tphno">
		            <label>Gender</label>
		            <div class="radio">
  						<label><input type="radio" name="gender" value="male">Male</label>
					</div>
					<div class="radio">
					 	<label><input type="radio" name="gender" value="female">Female</label>
					</div>
					<div class="form-group">
						<label >Address 1</label>  
						<input id="add1" name="add1" type="text" placeholder="" class="form-control input-md" required="">
					</div>
					<div class="form-group">
						<label>City</label> 
						<input id="city" name="city" type="text" placeholder="city" class="form-control input-md" required="">
					</div>
					<div class="form-group">
						  <label>Zip Code</label>  
						  <input id="zip" name="zip" type="text" placeholder="Zip Code" class="form-control input-md" required="">
					</div>
					<div class="form-group">
						 <label>Country</label>  
						 <input id="ctry" name="ctry" type="text" placeholder="Country" class="form-control input-md" required="">
					</div>
		            <label>Email Address</label>
		            <input type="text" name="email">
		            <label>Password</label>
		            <input type="password" name="pass">
		            <button type="submit">Sign In</button>

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
					<label>Avability</label>
					<div class="checkbox">
						<label><input type="checkbox" value="">Monday</label>
					</div>
					<div class="checkbox">
						<label><input type="checkbox" value="">Tuesday</label>
					</div>
					<div class="checkbox">
					 	<label><input type="checkbox" value="">Wednesday</label>
					</div>
					<div class="checkbox">
						<label><input type="checkbox" value="">Thursday</label>
					</div>
					<div class="checkbox">
						<label><input type="checkbox" value="">Friday</label>
					</div>
					<div class="checkbox">
					 	<label><input type="checkbox" value="">Saturday</label>
					</div>
					<div class="checkbox">
					 	<label><input type="checkbox" value="">Sunday</label>
					</div>
					<div class="form-group">
						<label >Address 1</label>  
						<input id="add1" name="add1" type="text" placeholder="" class="form-control input-md" required="">
					</div>
					<div class="form-group">
						<label>Address 2</label> 
						<input id="add2" name="add2" type="text" placeholder="" class="form-control input-md">
					</div>
					<div class="form-group">
						<label>City</label> 
						<input id="city" name="city" type="text" placeholder="city" class="form-control input-md" required="">
					</div>
					<div class="form-group">
						  <label>Zip Code</label>  
						  <input id="zip" name="zip" type="text" placeholder="Zip Code" class="form-control input-md" required="">
					</div>
					<div class="form-group">
						 <label>Country</label>  
						 <input id="ctry" name="ctry" type="text" placeholder="Country" class="form-control input-md" required="">
					</div>
		            <label>Email Address</label>
		            <input type="text" name="email">
		            <label>Password</label>
		            <input type="password" name="password">
		            <button type="submit">Sign In</button>
		            
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