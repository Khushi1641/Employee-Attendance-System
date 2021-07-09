<?php
require 'dbconnect.php';
$qry= "SELECT * FROM user_time ORDER BY id DESC LIMIT 1";
$rs1=mysqli_query($conn,$qry);
$row = mysqli_fetch_array($rs1);
$isactive = $row['isactive'];
if($isactive==1)
{
	session_start();
	session_destroy();
	header("location:login.php");
}
else
{
	header("location:out.php?logout=true");
}
?>