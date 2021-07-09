<?php
require 'dbconnect.php';
$id=$_POST['id'];
$u_id = $_POST['u_id'];
$usertype= $_POST['usertype'];
$email = $_POST['email'];
$date=$_POST['date'];
$t_time = $_POST['t_time'];
$minutes = $_POST['minutes'];
$hours=$_POST['hours'];
//echo $sn,$cn,$Cityid;
//exit();
$qry = "UPDATE attendance SET u_id='".$u_id."', usertype='".$usertype."',email='".$email."',date='".$date."',t_time='".$t_time."', minutes='".$minutes."',hours='".$hours."' WHERE id='".$id."'";
$rs = mysqli_query($conn,$qry);
echo $qry;
if($rs)
{
	echo "Updated";
	header("location:viewmanager.php");
	exit();
}
else
{
	echo "Update error";
}
?>