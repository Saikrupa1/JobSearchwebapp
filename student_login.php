<?php session_start(); ?>
<!DOCTYPE html>
<html lang="en">
<head>
<?php
	include 'style_links/style_links.php';
  ?>
<style>
.form-signin
{
    max-width: 330px;
    padding: 15px;
    margin: 0 auto;
}
.form-signin .form-signin-heading, .form-signin .checkbox
{
    margin-bottom: 10px;
}
.form-signin .checkbox
{
    font-weight: normal;
}
.form-signin .form-control
{
    position: relative;
    font-size: 16px;
    height: auto;
    padding: 10px;
    -webkit-box-sizing: border-box;
    -moz-box-sizing: border-box;
    box-sizing: border-box;
}
.form-signin .form-control:focus
{
    z-index: 2;
}
.form-signin input[type="text"]
{
    margin-bottom: -1px;
    border-bottom-left-radius: 0;
    border-bottom-right-radius: 0;
}
.form-signin input[type="password"]
{
    margin-bottom: 10px;
    border-top-left-radius: 0;
    border-top-right-radius: 0;
}

.login-title
{
    color: #555;
    font-size: 18px;
    font-weight: 400;
    display: block;
}
.profile-img
{
    width: 96px;
    height: 96px;
    margin: 0 auto 10px;
    display: block;
    -moz-border-radius: 50%;
    -webkit-border-radius: 50%;
    border-radius: 50%;
}
.need-help
{
    margin-top: 10px;
}
.new-account
{
    display: block;
    margin-top: 10px;
}
</style>
</head>
<body >

<?php 
include 'index_menu.php';
 ?>
 <br>
<div class="container card" style="width:400px">
    <br>
		
    <div class="row">
        <div class="col-sm-12">
            <div >
                <img src="images/login4.jpg" style="width:30%" class="profile-img" alt="give image path">
				<form name='f1' method='post' action="student_login_code.php" enctype="">
          <center>     <h4><b><p style="color:#1F618D;"> Student Login  </p></b></h4></center>
<div class='row'>
	<div class='col-md-12'>
		<b><label for='student_id'>Student Id</label></b>
		<input type='text' class='form-control' id='student_id' placeholder='Enter student_id' name='student_id' required >
	</div>
</div><br>
<div class='row'>
	<div class='col-md-12'>
	<b>	<label for='password'>Password</label></b>
		<input type='password' class='form-control' id='password' placeholder='Enter password' name='password' required >
	</div>
</div>
				<br><center>
                <button class="btn btn-lg btn-primary btn-block" type="submit">
                    Login</button><br>
                <label class="">
                  <b>  <a href="student_new_registration.php" class="text-center new-account" style='color:Salmon'>Student New Registration </a></b>
                </label>
               
                </form>
            </div>
            
			
        </div>
    </div>
	<br>
			<?php
if(isset($_REQUEST['msg']))
{
	 echo '<br><h2>Invalid Username/Password</h2>';
} ?>

			</center>
</div>
</body>
</html>