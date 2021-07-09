<?php
require 'dbconnect.php';
session_start();
//var_dump($_POST);
	if(!isset($_POST['submit']))
	{
		header("location:login.php");
		exit();
	}
	$email=$_POST['email'];
	$ps=$_POST['password'];
	//$ut=$_POST['usertype'];
	$qry="SELECT * FROM user WHERE email='".$email."' AND password='".$ps."'";
	echo $qry;
	$rs=mysqli_query($conn,$qry);
	if(mysqli_num_rows($rs)>0)
	{
		$rows=mysqli_fetch_assoc($rs);
		$_SESSION['id']=$rows['id'];
		$_SESSION['email']=$rows['email'];
		//$_SESSION['usertype']=$rows['usertype'];
		header("location:dashboard.php");
		exit();
	}
	else
	{
		// echo ("<script LANGUAGE='JavaScript'>
  //   window.alert('Wrong email or password! Try Again :(');
  //   window.location.href='login.php';
  //   </script>");
		header("Location: login.php?error=Incorrect Email or Password! Try Again!");
	        exit();
		exit();
		?>
  <?php
		exit();
	}
?>