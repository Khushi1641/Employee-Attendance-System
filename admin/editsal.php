<?php
require 'dbconnect.php';
$id=$_POST['id'];
$u_id = $_POST['u_id'];
$email = $_POST['email'];
$month=$_POST['month'];
$days=$_POST['days'];
$minutes = $_POST['minutes'];
$hours=$_POST['hours'];
$salary=$_POST['salary'];
$c_salary=$_POST['c_salary'];

//echo $sn,$cn,$Cityid;
//exit();
$qry = "UPDATE salary SET u_id='".$u_id."',email='".$email."',month='".$month."',days='".$days."', minutes='".$minutes."',hours='".$hours."',salary='".$salary."',c_salary='".$c_salary."' WHERE id='".$id."'";
$rs = mysqli_query($conn,$qry);
echo $qry;
if($rs)
{
	echo "Updated";
	header("location:viewmanagersal.php");
	exit();
}
else
{
	echo "Update error";
}
?>