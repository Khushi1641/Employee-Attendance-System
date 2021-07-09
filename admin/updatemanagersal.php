<?php
//session_start();
//require 'dbconnect.php';
//$id=$_SESSION['id'];
//$sql = "SELECT * FROM user_tbl WHERE id='".$id."'";
//$result = mysqli_query($conn, $sql); 
//$row = mysqli_fetch_assoc($result);
 //   if(!isset($_SESSION['id']))
   // {
     //   header("location:login.php");
   // }
//?>
<!DOCTYPE html>
<head>
<title>Dashboard</title>
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta name="keywords" content="Visitors Responsive web template, Bootstrap Web Templates, Flat Web Templates, Android Compatible web template, 
Smartphone Compatible web template, free webdesigns for Nokia, Samsung, LG, SonyEricsson, Motorola web design" />
<link rel="stylesheet" href="css/bootstrap.min.css" >
<link href="css/style.css" rel='stylesheet' type='text/css' />
<link href="css/style-responsive.css" rel="stylesheet"/>
<link rel="stylesheet" href="css/font.css" type="text/css"/>
<link href="css/font-awesome.css" rel="stylesheet"> 
<link rel="stylesheet" href="css/morris.css" type="text/css"/>
<link rel="stylesheet" href="css/monthly.css">
<script src="js/jquery2.0.3.min.js"></script>
<script src="js/raphael-min.js"></script>
<script src="js/morris.js"></script>
</head>
<body>
<section id="container">
<header class="header fixed-top clearfix">
<div class="brand">
    <a href="login.php" class="logo">
        ADMIN
    </a>
    <div class="sidebar-toggle-box">
        <div class="fa fa-bars"></div>
    </div>
</div>
<div class="top-nav clearfix">
    <ul class="nav pull-right top-menu">
        <li class="dropdown">
            <a data-toggle="dropdown" class="dropdown-toggle" href="#">
                <img alt="" src="images/2.png">
                <span class="username">ADMIN</span>
                <b class="caret"></b>
            </a>
            <ul class="dropdown-menu extended logout">
                <!-- <li><a href="updateprofile.php?id=<?php echo $row['id'] ?>"><i class="fa fa-key"></i>Update Profile</a></li> -->
                <li><a href="changepassword.php"><i class="fa fa-key"></i>Change Password</a></li>
                <li><a href="login.php"><i class="fa fa-key"></i> Log Out</a></li>
            </ul>
        </li>
    </ul>
</div>
</header>
<aside>
    <div id="sidebar" class="nav-collapse">
        <div class="leftside-navigation">
            <ul class="sidebar-menu" id="nav-accordion">
                <li>
                    <a class="active" href="dashboard.php">
                        <i class="fa fa-dashboard"></i>
                        <span>Dashboard</span>
                    </a>
                </li>
                <li class="sub-menu">
                    <a href="javascript:;">
                        <i class="fa fa-group"></i>
                        <span>Manage Employees</span>
                    </a>
                    <ul class="sub">
                        <li><a href="addemployee.php">Insert Employees</a></li>
                        <li><a href="viewemployees.php">View Employees</a></li>
                    </ul>
                </li>
                <li class="sub-menu">
                    <a href="javascript:;">
                        <i class="fa fa-group"></i>
                        <span>Manage Employees Attendance</span>
                    </a>
                    <ul class="sub">
                        <li><a href="viewmanager.php">View Manager Attendance</a></li>
                        <li><a href="viewhr.php">View HR Attendance</a></li>
                        <li><a href="viewemployee.php">View Project Employee Attendance</a></li>
                    </ul>
                </li>
                <li class="sub-menu">
                    <a href="javascript:;">
                        <i class="fa fa-group"></i>
                        <span>Manage Employees Salary</span>
                    </a>
                    <ul class="sub">
                        <li><a href="viewmanagersal.php">View Manager Salary</a></li>
                        <li><a href="viewhrsal.php">View HR Salary</a></li>
                        <li><a href="viewemployeesal.php">View Project Employee Salary</a></li>
                    </ul>
                </li>                             
            </ul>            
        </div>
        </div>
</aside>
<section id="main-content">
	<section class="wrapper">
		<!--  -->
        <div class="row">
            <div class="col-lg-10 col-lg-offset-1">
             <section class="panel">
                    <header class="panel-heading">Update HR</header>
                        <div class="panel-body">
                            <div class="position-center">
                                <form role="form" action="editsal.php" method="POST">
                                <?php 
                                require 'dbconnect.php';
                                $id=$_GET['id'];
                                $qry="SELECT * from salary where id='".$id."' AND isactive=1";
                                $rs=mysqli_query($conn,$qry);
                                $row=mysqli_fetch_assoc($rs);
                                ?>
                                <input type="hidden" name="id" value="<?php echo $id;?>">
                                <input type="hidden" name="u_id" value="<?php echo $row['u_id'];?>">
                                <input type="hidden" name="usertype" value="<?php echo $row['usertype'];?>">
                                <!-- <div class="form-group">
                                    <label for="name">User id :</label>
                                    <input type="text" class="form-control" name="u_id" placeholder="Enter user id" value="<?php echo $row['u_id'];?>">
                                </div> -->
                                <!-- <div class="form-group">
                                    <label for="usertype">Usertype : </label>
                                    <select name="usertype" class="form-control" name="usertype" value="<?php echo $row['usertype'];?>">
                                        <option value="Employee" class="form-control">Employee</option>
                                        <option value="Manager" class="form-control">Manager</option>
                                        <option value="Admin" class="form-control">Admin</option>
                                        <option value="HR" class="form-control">HR</option>
                                    </select>
                                    <!-- <input type="text" class="form-control" id="exampleInputPassword1" placeholder="Type"> -->
                                <!--</div> -->
                                <div class="form-group">
                                    <label for="uname">email : </label>
                                    <input type="text" class="form-control" name="email" placeholder="Enter email" value="<?php echo $row['email'];?>">
                                </div>
                                <div class="form-group">
                                    <label for="email">Month : </label>
                                    <input type="text" class="form-control" name="month" placeholder="Enter Month " value="<?php echo $row['month'];?>">
                                </div>
                                <div class="form-group">
                                    <label for="mno">Days : </label>
                                    <input type="text" class="form-control" name="days" placeholder="Enter Days" value="<?php echo $row['days'];?>">
                                </div>
                                <div class="form-group">
                                    <label for="uname">Minutes : </label>
                                    <input type="text" class="form-control" name="minutes" placeholder="Enter Minutes" value="<?php echo $row['minutes'];?>">
                                </div>
                                <div class="form-group">
                                    <label for="uname">Hourss : </label>
                                    <input type="text" class="form-control" name="hours" placeholder="Enter Minutes" value="<?php echo $row['hours'];?>">
                                </div>
                                <div class="form-group">
                                    <label for="uname">Salary : </label>
                                    <input type="text" class="form-control" name="salary" placeholder="Enter Salary" value="<?php echo $row['salary'];?>">
                                </div>
                                <div class="form-group">
                                    <label for="uname">Calculated Salary : </label>
                                    <input type="text" class="form-control" name="c_salary" placeholder="Enter Calculated" value="<?php echo $row['c_salary'];?>">
                                </div>
                                <button type="submit" class="btn btn-info" name="submit">Submit</button>
                            </form>
                            </div>

                        </div>
                    </section>
                </div>
        </div>
         <!-- footer --><br><br>
		  <div class="footer">
			<div class="wthree-copyright">
			  <p>Employee Attendance System</a></p>
			</div>
		  </div>
</section>
</section>
<script src="js/bootstrap.js"></script>
<script src="js/jquery.dcjqaccordion.2.7.js"></script>
<script src="js/scripts.js"></script>
<script src="js/jquery.slimscroll.js"></script>
<script src="js/jquery.nicescroll.js"></script>
<script src="js/jquery.scrollTo.js"></script>
	
<script>
	$(document).ready(function() {
	   jQuery('.small-graph-box').hover(function() {
		  jQuery(this).find('.box-button').fadeIn('fast');
	   }, function() {
		  jQuery(this).find('.box-button').fadeOut('fast');
	   });
	   jQuery('.small-graph-box .box-close').click(function() {
		  jQuery(this).closest('.small-graph-box').fadeOut(200);
		  return false;
	   });
	    function gd(year, day, month) {
			return new Date(year, month - 1, day).getTime();
		}
		
		graphArea2 = Morris.Area({
			element: 'hero-area',
			padding: 10,
        behaveLikeLine: true,
        gridEnabled: false,
        gridLineColor: '#dddddd',
        axes: true,
        resize: true,
        smooth:true,
        pointSize: 0,
        lineWidth: 0,
        fillOpacity:0.85,
			data: [
				{period: '2015 Q1', iphone: 2668, ipad: null, itouch: 2649},
				{period: '2015 Q2', iphone: 15780, ipad: 13799, itouch: 12051},
				{period: '2015 Q3', iphone: 12920, ipad: 10975, itouch: 9910},
				{period: '2015 Q4', iphone: 8770, ipad: 6600, itouch: 6695},
				{period: '2016 Q1', iphone: 10820, ipad: 10924, itouch: 12300},
				{period: '2016 Q2', iphone: 9680, ipad: 9010, itouch: 7891},
				{period: '2016 Q3', iphone: 4830, ipad: 3805, itouch: 1598},
				{period: '2016 Q4', iphone: 15083, ipad: 8977, itouch: 5185},
				{period: '2017 Q1', iphone: 10697, ipad: 4470, itouch: 2038},
			],
			lineColors:['#eb6f6f','#926383','#eb6f6f'],
			xkey: 'period',
            redraw: true,
            ykeys: ['iphone', 'ipad', 'itouch'],
            labels: ['All Visitors', 'Returning Visitors', 'Unique Visitors'],
			pointSize: 2,
			hideHover: 'auto',
			resize: true
		});
	});
	</script>
	<script type="text/javascript" src="js/monthly.js"></script>

</body>
</html>
