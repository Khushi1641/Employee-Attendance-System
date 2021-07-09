<?php
require 'dbconnect.php';
session_start();
if(!isset($_SESSION['id']))
{
    header("location:login.php");
}
date_default_timezone_set('Asia/Kolkata'); 
$u_id=$_SESSION['id'];
$email=$_SESSION['email'];
$usertype=$_SESSION['usertype'];
$date=date('Y/m/d');
$month=date('m');
$in_time = date('H:i:s');
$isactive=0;
$sql="INSERT into user_time(u_id, usertype, email, date, month, in_time, isactive) VALUES('".$u_id."','".$usertype."','".$email."','".$date."','".$month."','".$in_time."','".$isactive."')";
// $sql_qry="INSERT into user_time(u_id,usertype,email,date,month,in_time,isactive) VALUES ('".$u_id."','".$usertype."','".$email."','".$date."','".$month."','".$in_time."','".$isactive."')";
$rs= mysqli_query($conn,$sql);
echo $sql;
if($rs)
{
	echo "Inserted successfully";
	header("location:time.php?out=true & ci=true");
	exit();
}
else
{
	echo "error";
}
?>