<?php
include "connect.php";
//session_start();
if (isset($_POST ['uname']) &&isset($_POST ['password']))
{
	$user_name=$_POST ['uname'];
	$user_password=$_POST ['password'];
	$query=mysqli_query($con,"select * from user where uname='$user_name' and password='$user_password'");
	$row=mysqli_num_rows($query);
	if($row==1)
	{	
		//$_SESSION['stname']=$stname;
		header("location:permission.php");
	}
	else
	{
		//$_SESSION['invalid']=1;
		header("location:elogin2.php");
	}
		
}
else
{
	//$_SESSION['invalid']=1;
	header("location:login2.php");
}
?>