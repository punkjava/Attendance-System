<?php
session_start();
$username=$_POST['username'];
$password=$_POST['password'];
$con=mysqli_connect('mysql.hostinger.in','u565745662_root','123456789');
mysqli_select_db($con,'u565745662_panka');
$q="Select * from admin where username='$username' && password='$password'";
$result=mysqli_query($con,$q);
$num=mysqli_num_rows($result);
if($num==1)
{

$_SESSION['username']=$username;
$_SESSION['username']=$password;
	header('location:auth.php');
	
}
	
else
{
	header('location:login.php');
	 
}
?>