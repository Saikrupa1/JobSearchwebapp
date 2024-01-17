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
 ?><br>
<div class="container card" style="width:400px">
    <br>
    <div class="row">
        <div class="col-sm-12" >
            <div >
              <center>  <img src="images/clogin.png" style="width:80px" class="profile-img" alt="give image path">
				<form name='f1' method='post' action="company_login_code.php" enctype="">
                <h4><b><p style="color:#1F618D;">  Company Login </p></b></h4> </center>
                    <div class='row'>
                        <div class='col-md-12'>
                        <label for='email_id'>E-Mail Id</label>
                            <input type='email' class='form-control' id='email_id' placeholder='Enter email_id' name='email_id' required >
                        </div>
                    </div>
                    <div class='row'>
                        <div class='col-md-12'><br>
                            <label for='password'>Password</label>
                            <input type='password' class='form-control' id='password' placeholder='Enter password' name='password' required >
                        </div>
                    </div>
				<br>
               <center> <button class="btn btn-lg btn-primary btn-block" type="submit">
                    Login</button><br>
                <label class="checkbox ">
                 <b>   <a href="company_new_registratrion.php" class="text-center new-account" style='color:Salmon'>Company New Registration </a></b>
                </label>
</center>
               
                </form>
            </div>
            </center>
			
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