<?php
session_start();
if(!isset($_SESSION['id']))
{
	header("location:login.php");
}
$id=$_SESSION['id'];
$ut=$_SESSION['usertype'];
?>
<!DOCTYPE html>
<html>
<head>
	<title>Time</title>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.1.1/animate.min.css"/>

</head>
<body>
	<nav class="navbar navbar-expand-lg navbar-dark bg-dark">
        <a class="navbar-brand" href="#">Report</a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>

        <div class="collapse navbar-collapse " id="navbarSupportedContent">
            <ul class="navbar-nav ml-auto my-2 my-lg-0 py-2">
            <li class="nav-item pr-4">
            	<?php if(!isset($_GET['out'])) 
					{ ?>
					<a href="in.php" class="btn btn-warning btn-rounded-corners"><b>Check In</b></a>
					<?php 
					}
					else
					{
					?>
					<a href="out.php?out=true" class="btn btn-danger btn-rounded-corners"><b>Check Out</b></a>
					<?php
					}
            	?>
                <!-- <a class="nav-link" href="time.php">Check IN/OUT<span class="sr-only">(current)</span></a> -->
            </li>
            <li class="nav-item active pr-4">
                <a href="userrecord.php" class="btn btn-info btn-rounded-corners" ><b>Previous Logs</b></a>
            </li>
            <?php if($ut!='Employee')
            {
            ?>
            	<li class="nav-item active pr-4">
                <a href="employeerecord.php" class="btn btn-success btn-rounded-corners" ><b>Employees Logs</b></a>
            	</li>
           <?php  } ?>
           <?php if($ut=='HR' OR $ut == 'Admin')
            {
            ?>
            	<li class="nav-item active pr-4">
                <a href="salary.php" class="btn btn-danger btn-rounded-corners" ><b>Generate Salary</b></a>
            	</li>
           <?php  } ?>
           <?php if($ut=='Employee' OR $ut == 'Manager')
            {
            ?>
            	<li class="nav-item active pr-4">
                <a href="emsalary.php" class="btn btn-danger btn-rounded-corners" ><b>View Salary</b></a>
            	</li>
           <?php  } ?>
           <?php if($ut=='Admin' OR $ut == 'HR')
            {
            ?>
            	<li class="nav-item active pr-4">
                <a href="salary_view.php" class="btn btn-warning btn-rounded-corners" ><b>View Salary</b></a>
            	</li>
           <?php  } ?>
            </ul>
            <ul class="navbar-nav ml-auto">
             <li class="nav-item">
                <a class="nav-link" href="logout.php">Logout<span class="sr-only">(current)</span></a>
            </li>
            </ul>
            <!-- <form class="form-inline my-2 my-lg-0">
            <input class="form-control mr-sm-2" type="date" placeholder="From date" aria-label="From date">
            <input class="form-control mr-sm-2" type="date" placeholder="To date" aria-label="To date">
            <button class="btn btn-outline-success my-2 my-sm-0" type="submit">Search</button>
            </form> -->
        </div>
    </nav>
    <div>
		<?php
				if (isset($_GET['ci'])) { ?>
     			<div class="alert alert-success alert-dismissible fade show" role="alert">
				<strong>Checked In</strong> successful!
				<button type="button" class="close" data-dismiss="alert" aria-label="Close">
				<span aria-hidden="true">&times;</span>
				</button>
				</div>
     	<?php } ?>
     	<?php
				if (isset($_GET['co'])) { ?>
     			<div class="alert alert-danger alert-dismissible fade show" role="alert">
				<strong>Checked Out</strong> successful!
				<button type="button" class="close" data-dismiss="alert" aria-label="Close">
				<span aria-hidden="true">&times;</span>
				</button>
				</div>
     	<?php } ?>
     </div>
	<div class="container py-0 ">
	<div class="row py-0 mr-0 ml-0 my-0 justify-content-center d-flex align-items-center" style="background-image: url(bg.jpg); background-image: cover; background-size: 100%; background-repeat: no-repeat; height: 100vh; width: 100%; background-position: center;">
		<!-- <div>
		<?php
				if (isset($_GET['ci'])) { ?>
     			<div class="alert alert-success alert-dismissible fade show" role="alert">
				<strong>Checked In</strong> successful!
				<button type="button" class="close" data-dismiss="alert" aria-label="Close">
				<span aria-hidden="true">&times;</span>
				</button>
				</div>
     	<?php } ?>
     	<?php
				if (isset($_GET['co'])) { ?>
     			<div class="alert alert-danger alert-dismissible fade show" role="alert">
				<strong>Checked Out</strong> successful!
				<button type="button" class="close" data-dismiss="alert" aria-label="Close">
				<span aria-hidden="true">&times;</span>
				</button>
				</div>
     	<?php } ?>
     </div> -->
     <div style="height: 200px;" class="align-items-center">
     	<b><h1 class="animate__animated animate__fadeInDown" style="font-family: mv boli;">Check In/Out Here!!</h1>
     	<b><h1 class="animate__animated animate__fadeInDown" style="font-family: mv boli;">Hey <?php echo $ut;?></h2>
		<h1 class="animate__animated animate__fadeInDown" style="font-family: mv boli;">Have a Great Day!!</h1></b>
     </div>
		<!-- <div class="col-12 col-sm-6 col-md-3" > -->
					
					<!-- <a href="#" class="btn btn-success btn-rounded-corners" style="height: 50px; margin-top: 50px; margin-left: 10px; padding: 0px;">Previous Logs</a> -->
					<!-- <?php if(!isset($_GET['out'])) 
					{ ?>
					<a href="in.php" class="btn btn-warning btn-rounded-corners" style="height: 50px; margin: 5px; margin-top: 50px;"><b>Check In</b></a>
					<?php 
					}	
					else
					{
					?>
					<a href="out.php" class="btn btn-danger btn-rounded-corners" style="height: 50px; margin: 5px; margin-top: 50px;"><b>Check Out</b></a>
					<?php
					}
					?>
					<a href="userrecord.php" class="btn btn-primary btn-rounded-corners" style="height: 50px; margin: 5px; margin-top: 50px;"><b>Previous Logs</b></a>
			</div> -->
	</div>
</div>
</body>
</html>