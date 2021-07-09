<?php
require 'dbconnect.php';
//var_dump($_POST);
$id=$_POST['id'];
$name = $_POST['name'];
$usertype= $_POST['usertype'];
$uname=$_POST['uname'];
$email = $_POST['email'];
$mno = $_POST['mno'];
$password = $_POST['password'];
$salary = $_POST['salary'];
//echo $sn,$cn,$Cityid;
//exit();
$qry = "UPDATE user SET name='".$name."', usertype='".$usertype."',uname='".$uname."',email='".$email."',mno='".$mno."', password='".$password."',salary='".$salary."' WHERE id='".$id."'";
$rs = mysqli_query($conn,$qry);
echo $qry;
if($rs)
{
	echo "Updated";
	header("location:viewemployees.php");
	exit();
}
else
{
	echo "Update error";
}
?>