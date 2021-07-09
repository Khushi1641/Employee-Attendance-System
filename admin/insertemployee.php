<?php
require 'dbconnect.php';
var_dump($_POST);
if(!(isset($_POST['submit'])))
{
	header("location:addemployee.php");
	exit();
}
$name = $_POST['name'];
$usertype = $_POST['usertype'];
$uname = $_POST['uname'];
$email = $_POST['email'];
$mno = $_POST['mno'];
$password = $_POST['password'];
$salary = $_POST['salary'];
$isactive=1;
//$doi  = date('d-m-y');
//$dou  = date('d-m-y');
//echo $vtype.$vno.$vn.$serxname.$isactive.$doi.$dou;

$qry = "INSERT into user(name,usertype,uname,email,mno,password,salary,isactive) VALUES ('".$name."','".$usertype."','".$uname."','".$email."','".$mno."','".$password."','".$salary."','".$isactive."')";
echo $qry;

$rs= mysqli_query($conn,$qry);
if($rs)
{
	echo "Insert success";
	header("location:viewemployees.php");
}
?>