<?php session_start(); ?>
<!DOCTYPE html>
<html lang="en">
<head>
  <?php
	include 'style_links/style_links.php';
  ?>
</head>
<body>
<?php 
include 'index_menu.php';
 ?>
<div class="container card" style="margin-top:20px;width:45%" >
 <center> <h4><b><p style="color:#1F618D;">  Student Registration Form </p></b></h4></center>
  <form name='f1' method='post' action="student_new_registration_code.php" enctype="multipart/form-data">
	
        
        
<div class='row'>
	<div class='col-md-6'>
		<b><label for='student_id'>Student Id</label></b>
		<input type='text' class='form-control' id='student_id' placeholder='Student Id' name='student_id' required >
	</div>
	<div class='col-md-6'>
	<b>	<label for='first_name'>First Name</label></b>
		<input type='text' class='form-control' id='first_name' placeholder='First Name' name='first_name' required >
	</div>
</div>
<div class='row'>
	<div class='col-md-6'>
		<b><label for='last_name'>Last Name</label></b>
		<input type='text' class='form-control' id='last_name' placeholder='Last Name' name='last_name' required >
	</div>
	<div class='col-md-6'>
	<b>	<label for='gender'>Gender</label></b>
		<select class='form-control' id='gender' name='gender' required >
		<option>--Select--</option>
		<option>Male</option>
		<option>Female</option>
		</select>
	</div>
</div>
<div class='row'>
	<div class='col-md-6'>
		<b><label for='address'>Address</label></b>
		<textarea rows='3' class='form-control' id='address' placeholder='Address' name='address' required ></textarea>
	</div>
	<div class='col-md-6'>
	<b>	<label for='qualification'>Qualification</label></b>
		<input type='text' class='form-control' id='qualification' placeholder='Qualification' name='qualification' required >
	</div>
</div>
<div class='row'>
	<div class='col-md-6'>
		<b><label for='mobile_number'>Mobile Number</label></b>
		<input type='text' class='form-control' id='mobile_number' placeholder='Mobile Number' name='mobile_number' required >
	</div>
	<div class='col-md-6'>
		<b><label for='email_id'>E-Mail Id</label></b>
		<input type='email' class='form-control' id='email_id' placeholder='Email Id' name='email_id' required >
	</div>
</div>
<div class='row'>
<div class='col-md-6'>
	<b>	<label for='cpassword'>Confirm Password</label></b>
		<input type='password' class='form-control' id='cpassword' placeholder='Confirm-Password' name='cpassword' onfocusout='Validate()'required >
	</div>
	
	<div class='col-md-6'>
	<b>	<label for='password'>Password</label></b>
		<input type='password' class='form-control' id='password' placeholder='Password' name='password' required >
	</div>
</div>
<div class='row'>
<div class='col-md-6'>
	<b>	<label for='student_pic'>Student Photo</label><b>
		<input type='file' class='form-control' id='student_pic' placeholder='Student Pic' name='student_pic' required >
	</div>
</div>
   <br>
	<center><button type="submit" class="btn btn-default btn-warning">Register Now</button></center>
	<br>
   </form>
</div>
		<br><br>
		
</body>
</html>
