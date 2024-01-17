<?php session_start(); ?>
<!DOCTYPE html>
<html lang="en">
<head>
  <?php
	include 'style_links/style_links.php';
  ?>
</head>
<body >
<?php 
include 'index_menu.php';
 ?>
<div class="container card" style="margin-top:20px;width:50%" >
 <center> <h4><b><p style="color:#1F618D;">  Company Registration </p></b></h4> </center>
  <form name='f1' method='post' action="company_new_registratrion_code.php" enctype="multipart/form-data">
	
        
        
<div class='row'>
	<div class='col-md-6'>
		<b><label for='company_pic'>Company Photo</label></b>
		<input type='file' class='form-control' id='company_pic' placeholder='Company Pic' name='company_pic' required >
	</div>
	<div class='col-md-6'>
	<b>	<label for='company_name'>Company Name</label></b>
		<input type='text' class='form-control' id='company_name' placeholder='Company Name' name='company_name' required >
	</div>
</div>
<div class='row'>
	<div class='col-md-6'>
		<b><label for='location'>Location</label></b>
		<input type='text' class='form-control' id='location' placeholder='Location' name='location' required >
	</div>
	<div class='col-md-6'>
	<b>	<label for='establish_year'>Establish Year</label></b>
		<input type='text' class='form-control' id='establish_year' placeholder='Establish Year' name='establish_year' required >
	</div>
</div>
<div class='row'>
	<div class='col-md-6'>
	<b>	<label for='mobile_number'>Mobile Number</label></b>
		<input type='text' class='form-control' id='mobile_number' placeholder='Mobile Number' name='mobile_number' required >
	</div>
	<div class='col-md-6'>
	<b>	<label for='email_id'>E-Mail Id</label></b>
		<input type='email' class='form-control' id='email_id' placeholder='Email Id' name='email_id' required >
	</div>
</div>
<div class='row'>
	<div class='col-md-6'>
		<b><label for='level_of_company'>Level of Company</label></b>
		<select class='form-control' id='level_of_company' name='level_of_company' required >
		<option>-- Select --</option>
		<option>1</option>
		<option>2</option>
		<option>3</option>
		<option>4</option>
		<option>5</option>
		</select>
	</div>
	<div class='col-md-6'>
		<b><label for='company_url'>Company Url</label></b>
		<input type='text' class='form-control' id='company_url' placeholder='Company Url' name='company_url' required >
	</div>
</div>
<div class='row'>
	<div class='col-md-6'>
		<b><label for='password'>Password</label></b>
		<input type='password' class='form-control' id='password' placeholder='Password' name='password' required >
	</div>
	<div class='col-md-6'>
	<b>	<label for='cpassword'>Confirm Password</label></b>
		<input type='password' class='form-control' id='cpassword' placeholder='Confirm-Password' name='cpassword' onfocusout='Validate()'required >
		</div>
		</div>
   <br>
	<center> <button type="submit" class="btn btn-default btn-warning">Register Now</button></center>
	<br>
   </form>

<br><br>
		
		
</body>
</html>
