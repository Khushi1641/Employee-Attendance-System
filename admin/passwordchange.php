<?php
require 'dbconnect.php';
session_start();
var_dump($_POST);
	if(!isset($_POST['submit']))
	{
		header("location:changepassword.php");
		exit();
	}
    $id=$_SESSION['id'];
	$op=$_POST['op'];
	$np=$_POST['np'];
	$cp=$_POST['cp'];
	if(empty($op)){
      header("Location: changepassword.php?error=Old Password is required");
	  exit();
    }else if(empty($np)){
      header("Location: changepassword.php?error=New Password is required");
	  exit();
    }else if($np !== $cp){
      header("Location: changepassword.php?error=The confirmation password  does not match");
	  exit();
    }else {
        $id = $_SESSION['id'];
        $sql = "SELECT * FROM user WHERE id='".$id."' AND password='".$op."'";
        $result = mysqli_query($conn, $sql);
        if(mysqli_num_rows($result) === 1){
        	$sql_2 = "UPDATE user SET password='$np' WHERE id='$id'";
        	mysqli_query($conn, $sql_2);
        	header("Location: login.php?success=Your password has been changed successfully");
	        exit();
        }else {
        	header("Location: changepassword.php?error=Incorrect password");
	        exit();
        }
    }

?>