<?php
//session_start();
//require 'dbconnect.php';
//$u_id=$_SESSION['id'];
// $sql = "SELECT * FROM user_tbl WHERE id='".$id."'";
// $result = mysqli_query($conn, $sql); 
// $row = mysqli_fetch_assoc($result);
  //  if(!isset($_SESSION['id']))
   // {
    //    header("location:login.php");
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
                <li><a href="logout.php"><i class="fa fa-key"></i> Log Out</a></li>
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

<!--sidebar end-->
<!--main content start-->
<section id="main-content">
	<section class="wrapper">
		<div class="table-agile-info">
 <div class="panel panel-default">
    <div class="panel-heading">
     View Manager
    </div>
    <div>
      <table class="table">
        <thead>
            <?php
require 'dbconnect.php';
$qry = "SELECT * FROM attendance WHERE isactive='1' AND usertype='Manager'";
$rs = mysqli_query($conn,$qry);
?>
    <tr>
        <td>Id</td>
        <td>User Id</td>
        <td>Email</td>
        <td>Date</td>
        <td>Total Time</td>
        <td>Minutes</td>
        <td>Hours</td>
        <td>Update</td>
        <td>Delete</td>
    </tr>
    <?php
        if(mysqli_num_rows($rs)>0)
        {
            while($row=mysqli_fetch_assoc($rs))
            { 
                ?>  
        <tr>
            <td><?php echo $row['id'];?></td>
            <td><?php echo $row['u_id'];?></td>
            <td><?php echo $row['email'];?></td>
            <td><?php echo $row['date'];?></td>
            <td><?php echo $row['t_time'];?></td>
            <td><?php echo $row['minutes'];?></td>
            <td><?php echo $row['hours'];?></td>
            <td><a href="updatemanager.php?id=<?php echo $row['id']?>">Update</a></td>
            <td><a href="deletemanager.php?id=<?php echo $row['id']?>">Delete</a></td>
        </tr>       
<?php    
    //}
    }
}   
    ?>      
    </table>    
</body>
</html>
           </tbody>
      </table>
    </div>
  </div>
</div>
</section>
 <!-- footer -->
		  <div class="footer">
			<div class="wthree-copyright">
			  <p></p>
			</div>
		  </div>
  <!-- / footer -->
</section>

<!--main content end-->
</section>
<script src="js/bootstrap.js"></script>
<script src="js/jquery.dcjqaccordion.2.7.js"></script>
<script src="js/scripts.js"></script>
<script src="js/jquery.slimscroll.js"></script>
<script src="js/jquery.nicescroll.js"></script>
<!--[if lte IE 8]><script language="javascript" type="text/javascript" src="js/flot-chart/excanvas.min.js"></script><![endif]-->
<script src="js/jquery.scrollTo.js"></script>
</body>
</html>
