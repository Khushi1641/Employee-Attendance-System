<?php
require 'dbconnect.php';
if(isset($_POST['submit']))
{
$name=$_POST['name'];
$uname=$_POST['uname'];
$email=$_POST['email'];
$mno=$_POST['mno'];
$pwd=$_POST['password'];
$sql_qry="INSERT into user(name,uname,email,mno,password) VALUES ('".$name."','".$uname."','".$email."','".$mno."','".$pwd."')";
$rs= mysqli_query($conn,$sql_qry);
if($rs)
{
	echo "Inserted successfully";
	header("location:login.php?signup_success=TRUE");
	exit();
}
else
{
	echo "error";
}
}
?>