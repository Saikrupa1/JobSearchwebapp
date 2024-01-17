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

$qry="select * from placement_officer where email_id='".$email_id."' and password='".$password."'";
$rs=mysqli_query($conn, $qry);
if($row = mysqli_fetch_assoc($rs))
{
	$_SESSION['email_id']=$email_id;
	$_SESSION['name']=$row['name'];			
			
 	echo "<script language='javascript'>alert('Login Successful');window.location='careerteam/placementofficer_main.php';</script>";
}
 else 
 {
	 echo "<script language='javascript'>window.location='placements_login.php?msg=Invalid username/password';</script>";
}
mysqli_close($conn);
?>
