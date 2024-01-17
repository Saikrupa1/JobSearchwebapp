<?php 
session_start();
include 'jobconnections.php'; 

if(isset($_REQUEST['student_id']))
	$student_id=$_REQUEST['student_id'];
else
	$student_id='null';

if(isset($_REQUEST['first_name']))
	$first_name=$_REQUEST['first_name'];
else
	$first_name='null';

if(isset($_REQUEST['last_name']))
	$last_name=$_REQUEST['last_name'];
else
	$last_name='null';

if(isset($_REQUEST['gender']))
	$gender=$_REQUEST['gender'];
else
	$gender='null';

if(isset($_REQUEST['address']))
	$address=$_REQUEST['address'];
else
	$address='null';

if(isset($_REQUEST['qualification']))
	$qualification=$_REQUEST['qualification'];
else
	$qualification='null';

if(isset($_REQUEST['mobile_number']))
	$mobile_number=$_REQUEST['mobile_number'];
else
	$mobile_number='null';

if(isset($_REQUEST['email_id']))
	$email_id=$_REQUEST['email_id'];
else
	$email_id='null';
if (!is_dir('uploads')) {mkdir('uploads');}
if(isset($_FILES['student_pic']))
{
	$rndno=rand();
	$student_pic=$rndno.$_FILES['student_pic']['name'];



	$errors= array();
	$file_name = $rndno.$_FILES['student_pic']['name'];
	$file_size =$_FILES['student_pic']['size'];
	$file_tmp =$_FILES['student_pic']['tmp_name'];
	$file_type=$_FILES['student_pic']['type'];
	$ss=explode('.',$_FILES['student_pic']['name']);
	$file_ext=strtolower($ss[count($ss)-1]);/* // $file_ext=strtolower(end(explode('.',$_FILES['student_pic']['name']))); 
	$expensions= array('jpeg','jpg','png');
	if(in_array($file_ext,$expensions)=== false)
		{
			$errors[]='extension not allowed, please choose a JPEG or PNG file.';
		} */
if($file_size > 2097152)
{
	$errors[]='File size must be excately 2 MB';
}
if(empty($errors)==true)
{
	move_uploaded_file($file_tmp,'student/uploads/'.$file_name);
}
else
{

	print_r($errors);
}
}
else
	$student_pic='null';

if(isset($_REQUEST['password']))
	$password=$_REQUEST['password'];
else
	$password='null';

$qry="insert into student(student_id,first_name,last_name,gender,address,qualification,mobile_number,email_id,student_pic,password) values('$student_id','$first_name','$last_name','$gender','$address','$qualification','$mobile_number','$email_id','$student_pic','$password')";

if(mysqli_query($conn, $qry))
 {
	 echo "<script language='javascript'>alert('Registration Success.');window.location='student/student_main.php';</script>";}
 else 
 {
	 echo 'Error: '.mysqli_error($conn);
}
mysqli_close($conn);
?>