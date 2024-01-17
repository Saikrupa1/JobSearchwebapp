<?php 
session_start();
include 'jobconnections.php'; 
if(isset($_REQUEST['email_id']))
	$email_id=$_REQUEST['email_id'];
else
	$email_id='null';

if(isset($_REQUEST['password']))
	$password=$_REQUEST['password'];
else
	$password='null';

$qry="select * from company where email_id='".$email_id."' and password='".$password."'";
$rs=mysqli_query($conn, $qry);
 if($row = mysqli_fetch_assoc($rs))
{
	
	$_SESSION['company_name']=$row['company_name'];
	$_SESSION['email_id']=$email_id;			
	$_SESSION['company_id']=$row['company_id']; 
 	echo "<script language='javascript'>alert('Login Successful');window.location='company/company_main.php';</script>";
}
 else 
 {
	 echo "<script language='javascript'>window.location='company_login.php?msg=Invalid username/password';</script>";
}
mysqli_close($conn);
?>