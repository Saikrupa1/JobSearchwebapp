<?php 
session_start();
include 'jobconnections.php'; 
if(isset($_FILES['company_pic']))
{
	$rndno=rand();
	$company_pic=$rndno.$_FILES['company_pic']['name'];



	$errors= array();
	$file_name = $rndno.$_FILES['company_pic']['name'];
	$file_size =$_FILES['company_pic']['size'];
	$file_tmp =$_FILES['company_pic']['tmp_name'];
	$file_type=$_FILES['company_pic']['type'];
	$ss=explode('.',$_FILES['company_pic']['name']);
	$file_ext=strtolower($ss[count($ss)-1]);/* // $file_ext=strtolower(end(explode('.',$_FILES['company_pic']['name']))); 
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
	move_uploaded_file($file_tmp,'uploads/'.$file_name);
}
else
{

	print_r($errors);
}
}
else
	$company_pic='null';

if(isset($_REQUEST['company_name']))
	$company_name=$_REQUEST['company_name'];
else
	$company_name='null';

if(isset($_REQUEST['location']))
	$location=$_REQUEST['location'];
else
	$location='null';

if(isset($_REQUEST['establish_year']))
	$establish_year=$_REQUEST['establish_year'];
else
	$establish_year='null';

if(isset($_REQUEST['mobile_number']))
	$mobile_number=$_REQUEST['mobile_number'];
else
	$mobile_number='null';

if(isset($_REQUEST['email_id']))
	$email_id=$_REQUEST['email_id'];
else
	$email_id='null';

if(isset($_REQUEST['level_of_company']))
	$level_of_company=$_REQUEST['level_of_company'];
else
	$level_of_company='null';

if(isset($_REQUEST['company_url']))
	$company_url=$_REQUEST['company_url'];
else
	$company_url='null';

if(isset($_REQUEST['password']))
	$password=$_REQUEST['password'];
else
	$password='null';


$qry="insert into company(company_pic,company_name,location,establish_year,mobile_number,email_id,level_of_company,company_url,password,register_date,status) values('$company_pic','$company_name','$location','$establish_year','$mobile_number','$email_id','$level_of_company','$company_url','$password',curdate(),'Active')";

if(mysqli_query($conn, $qry))
 {
	 echo "<script language='javascript'>alert('Registration Success.');window.location='company/company_main.php';</script>";}
 else 
 {
	 echo 'Error: '.mysqli_error($conn);
}
mysqli_close($conn);
?>