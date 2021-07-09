<!--A Design by W3layouts
Author: W3layout
Author URL: http://w3layouts.com
License: Creative Commons Attribution 3.0 Unported
License URL: http://creativecommons.org/licenses/by/3.0/
-->
<?php
	session_start();
	if(isset($_SESSION['n']))
	{
		header("location:dashboard.php");
	}
	if(isset($_COOKIE['username']))
	{
		$un=$_COOKIE['username'];
		$ps=$_COOKIE['password'];
	}
	else
	{
		$un="";
		$ps="";
	}
?>

<!DOCTYPE html>
<head>
<title>Visitors an Admin Panel Category Bootstrap Responsive Website Template | Login :: w3layouts</title>
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />

<link rel="stylesheet" href="css/bootstrap.min.css" >
<!-- //bootstrap-css -->
<!-- Custom CSS -->
<link href="css/style.css" rel='stylesheet' type='text/css' />
<link href="css/style-responsive.css" rel="stylesheet"/>
<!-- font CSS -->
	
<!-- font-awesome icons -->
<link rel="stylesheet" href="css/font.css" type="text/css"/>
<link href="css/font-awesome.css" rel="stylesheet"> 
<!-- //font-awesome icons -->
<script src="js/jquery2.0.3.min.js"></script>
</head>
<body style="background-color: #FFC0CB;">
<div class="log-w3" >
<div class="w3layouts-main">
	<h2>Employee Attendance System</h2>
		<form action="checklogin.php" method="post">
			<input type="text" name="email" class="ggg" placeholder="Email" >
			<input type="password" name="password" class="ggg" placeholder="Password">

			<!--<span><input type="checkbox" />Remember Me</span>-->
			<h6><a href="#">ForgetPassword?</a></h6>
				<div class="clearfix"></div>
			<input type="submit" name="submit"></a>
			</form>	
		
		<!--<p>Don't Have an Account ?<a href="registration.php">Create an account</a></p>-->
</div>

</div>
<script src="js/bootstrap.js"></script>
<script src="js/jquery.dcjqaccordion.2.7.js"></script>
<script src="js/scripts.js"></script>
<script src="js/jquery.slimscroll.js"></script>
<script src="js/jquery.nicescroll.js"></script>
<!--[if lte IE 8]><script language="javascript" type="text/javascript" src="js/flot-chart/excanvas.min.js"></script><![endif]-->
<script src="js/jquery.scrollTo.js"></script>
</body>
</html>
