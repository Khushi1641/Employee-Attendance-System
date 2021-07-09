<?php
require 'dbconnect.php';
var_dump($_GET);
$id = $_GET['id'];
$qry1="UPDATE salary SET isactive = 2 WHERE id = '$id'";
$rs1 = mysqli_query($conn,$qry1);
if($rs1)
{
	echo "Deleted";
	header("location:viewhrsal.php");
	exit();
}
else
{
	echo "Error";
}
?>