<?php 
session_start();
include 'jobconnections.php';    

if(isset($_REQUEST['student_id']))
	$student_id=$_REQUEST['student_id'];
else
	$student_id='null';

if(isset($_REQUEST['password']))
	$password=$_REQUEST['password'];
else
	$password='null';

$qry="select * from student where student_id='".$student_id."' and password='".$password."'";
$rs=mysqli_query($conn, $qry);
 if($row = mysqli_fetch_assoc($rs))
{
	$_SESSION['student_id']=$student_id;	
	$_SESSION['student']=$row['first_name'].' '.$row['last_name'];	
	echo "<script language='javascript'>alert('Login Successful');window.location='student/student_main.php';</script>";
}
 else 
 {
	 echo "<script language='javascript'>window.location='student_login.php?msg=Invalid username/password';</script>";
}
mysqli_close($conn);
?>