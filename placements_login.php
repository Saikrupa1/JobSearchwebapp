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
 ?><br>
<div class="container card" style="background-color: #ffffff;width:400px">
  
  <form name='f1' method='post' action="placements_login_code.php" enctype="">
	
        <div class="row"><br>
			<div class="col-sm-12">
				<br>
			<center>	<img src='images/login3.jpg' width='80px' height='80px'>
			
				<h4><b><p style="color:#1F618D">  Career Team Login </p></b></h4>  
</center>
<div class='row'>
	<div class='col-md-12'>
		<label for='email_id'>E-Mail Id</label>
		<input type='email' class='form-control' id='email_id' placeholder='Enter email_id' name='email_id' required >
	</div>
</div><br>
<div class='row'>
	<div class='col-md-12'>
		<label for='password'>Password</label>
		<input type='password' class='form-control' id='password' placeholder='Enter password' name='password' required >
	</div>
</div>
				
				<br>
				<center><button type="submit" class="btn btn-default btn-primary">signin</button>
				<br>
   
				<?php
if(isset($_REQUEST['msg']))
{
	 echo '<br><h4>Invalid Username/Password</h4>';
} ?>
</center><br>
			</div>
		</div>	
		
  
   </form>


		
		
</body>
</html>
