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
			<h2 align="center"> Welcome  <?php echo $this->session->userdata['logged_in']['username'];?> </h2>	
					
	</div>
</div>
<br>
<br>

<body>

<body>

<div class="container">

  <!-- Trigger the modal with a button -->

  <!-- Modal -->
 


<div class="row">

<div class="form-body">
    <ul class="nav nav-tabs final-login">
        <li class="active"><a data-toggle="tab"  href="#sectionA">Profile</a></li>
        <li><a data-toggle="tab" href="#sectionB">History</a></li>
        <li><a data-toggle="tab" href="#sectionC">Create New request</a></li>
        <li><a data-toggle="tab" href="#sectionD">Logout</a></li>
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
	            
	            <?php echo form_open('Load_PatientData', array('class' => 'sa-innate-form')); ?>

<?php foreach($member as $mem){
	//echo $mem['name'];
	//echo $mem['email'];
}?>
	             	<label>Name</label>
		            <input type="text" name="name">
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
          
          <div id="sectionB" class="tab-pane fade ">
          	        <div class="innter-form">
          				<?php echo 'this is section B';   ?>
           			</div>
           </div>
                 <div id="sectionC" class="tab-pane fade">
	        <div class="innter-form">
	      		<?php echo validation_errors(); ?>
	      		<?php
					if (isset($err_message)) {
					echo "<div class='message'>";
					echo "<p><font color='red'> <h3 align=center>";
					echo $err_message;
					echo "</h3></font></p>";
					echo "</div>";}?>
	            
	            <?php echo form_open('Create_Request/createNewRequest', array('class' => 'sa-innate-form')); ?>	
	             <div class="row">
						<div class="col-sm-4 form-group">
							<label>Service Required </label> <br>
								<input type="checkbox" name="service[]" value="BloodT"> Blood Test<br>
								<input type="checkbox" name="service[]" value="Glucose"> Glucose Test<br>
								<input type="checkbox" name="service[]" value="BloodP"> Blood Pressure<br>
								<input type="checkbox" name="service[]" value="Urine"> Urine Test<br>
								<input type="checkbox" name="service[]" value="Physio"> Physio Therapy <br>
								<input type="checkbox" name="service[]" value="Injection"> Injection <br>
						</div>
		          </div>
		            <label> Requested Gender</label>
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
					<label>Requested Language</label>
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
		            <label>When </label>
		            <input type="date" name="date" placeholder="select a date" required>
		        	
		        	
		        		<div class="form-group">
						
						
						</div>
						<div class="row">
								<div class="col-sm-4 form-group">
									<label>Time Preference 1</label>
								         <select name="Time1H"  required>
										  	<option selected="selected" disabled="disabled">Select Hour</option>
										  	<option value="8">8</option>
										    <option value="9">9</option>
										    <option value="10">10</option>
										    <option value="11">11</option>
										    <option value="12">12</option>
										    <option value="13">13</option>
										    <option value="14">14</option>
										    <option value="15">15</option>
										    <option value="16">16</option>
										    <option value="17">17</option>
										    <option value="18">18</option>
										    <option value="19">19</option>
										    <option value="20">20</option>
										    <option value="21">21</option>
										  </select>
										    <select name="Time1M" required>
											  	<option selected="selected" disabled="disabled">Select Minute</option>
											  	<option value="00">00</option>
											    <option value="15">15</option>
											    <option value="30">30</option>
											    <option value="45">45</option>
										  </select>
								</div>	
								<div class="col-sm-4 form-group">
									<label>Time Preference 2</label>
								         <select name="Time2H"  required>
										  	<option selected="selected" disabled="disabled">Select Hour</option>
										  	<option value="8">8</option>
										    <option value="9">9</option>
										    <option value="10">10</option>
										    <option value="11">11</option>
										    <option value="12">12</option>
										    <option value="13">13</option>
										    <option value="14">14</option>
										    <option value="15">15</option>
										    <option value="16">16</option>
										    <option value="17">17</option>
										    <option value="18">18</option>
										    <option value="19">19</option>
										    <option value="20">20</option>
										    <option value="21">21</option>
										  </select>
										    <select name="Time2M" required>
											  	<option selected="selected" disabled="disabled">Select Minute</option>
											  	<option value="00">00</option>
											    <option value="15">15</option>
											    <option value="30">30</option>
											    <option value="45">45</option>
										  </select>
								</div>
								<div class="col-sm-4 form-group">
									<label>Time Preference 3</label>
								         <select name="Time3H"  required>
										  	<option selected="selected" disabled="disabled">Select Hour</option>
										  	<option value="8">8</option>
										    <option value="9">9</option>
										    <option value="10">10</option>
										    <option value="11">11</option>
										    <option value="12">12</option>
										    <option value="13">13</option>
										    <option value="14">14</option>
										    <option value="15">15</option>
										    <option value="16">16</option>
										    <option value="17">17</option>
										    <option value="18">18</option>
										    <option value="19">19</option>
										    <option value="20">20</option>
										    <option value="21">21</option>
										  </select>
										    <select name="Time3M" required>
											  	<option selected="selected" disabled="disabled">Select Minute</option>
											  	<option value="00">00</option>
											    <option value="15">15</option>
											    <option value="30">30</option>
											    <option value="45">45</option>
										  </select>
								</div>		
						</div>    
							<label>Instructions</label>
		           			 <input type="text" name="notes" >
		            <button type="submit">Submit</button>
	            </form>
	        </div>
        </div> 
         
         
         
         
         
          <div id="sectionD" class="tab-pane fade "> 
          
          	        <div class="innter-form">
          				<?php echo 'this is section D';   ?>
          				
           			</div>
          
           
           </div>
        
        
    </div>
    </div>
    
  
    </div>
    </div>

</body>
</html>