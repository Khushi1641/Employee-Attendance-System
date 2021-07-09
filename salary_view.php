<?php
session_start();
 if(!isset($_SESSION['id']))
 {
     header("location:login.php");
 }
// $u_id=$_SESSION['id'];
?>
<html>
<head>
    <meta charset='utf-8'>
    <meta http-equiv='X-UA-Compatible' content='IE=edge'>
    <title>Record</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.1.1/animate.min.css"/>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
    <meta name='viewport' content='width=device-width, initial-scale=1'>
    <title>
    ToDo List
    </title>
</head>
<body>
   <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
        <a class="navbar-brand" href="#">Record</a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>

        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav mr-auto">
             <li class="nav-item">
                <a class="nav-link" href="time.php">Check IN/OUT<span class="sr-only">(current)</span></a>
            </li>
            <!-- <li class="nav-item active">
                <a class="nav-link" href="/viewtask">Add employee</a>
            </li> -->
            </ul>
            <form class="form-inline my-2 my-lg-0" method="POST" action="?php echo htmlspecialchars($_SERVER['PHP_SELF']);?>">
            <select name="month" class="form-control mr-3">
                        <option value="January" class="form-control">January</option>
                        <option value="February" class="form-control">February</option>
                        <option value="March" class="form-control">March</option>
                        <option value="April" class="form-control">April</option>
                        <option value="May" class="form-control">May</option>
                        <option value="June" class="form-control" selected>June</option>
                        <option value="July" class="form-control">July</option>
                        <option value="August" class="form-control">August</option>
                        <option value="September" class="form-control">September</option>
                        <option value="October" class="form-control">October</option>
                        <option value="November" class="form-control">November</option>
                        <option value="December" class="form-control">December</option>
            </select>
            <!-- <input class="form-control mr-sm-2" type="date" placeholder="From date" aria-label="From date" name="fdate" value="<?php echo date('Y-m-d');?>"> -->
            <!-- <input class="form-control mr-sm-2" type="date" placeholder="To date" aria-label="To date" name="tdate" value="<?php echo date('Y-m-d');?>"> -->
            <button class="btn btn-outline-success my-2 my-sm-0 pl-2" type="submit" name="submit">Search</button>
            </form>
            <ul class="navbar-nav ml-auto">
             <li class="nav-item">
                <a class="nav-link" href="logout.php">Logout<span class="sr-only">(current)</span></a>
            </li>
            </ul>
        </div>
    </nav>
    <div class="container-fluid" style="background-color: #c5d6ca;">
    <div class="container" >
    <h2 class="text-center py-3 animate__animated animate__fadeInDown">Record</h2>
    
    <form class="form-inline my-2 my-lg-0 py-3 text-center" method="POST" action="?php echo htmlspecialchars($_SERVER['PHP_SELF']);?>">
        <input type="text" name="uid" class="form-control mr-3" placeholder="Enter User id">
        <select name="monthu" class="form-control mr-3">
                        <option value="January" class="form-control">January</option>
                        <option value="February" class="form-control">February</option>
                        <option value="March" class="form-control">March</option>
                        <option value="April" class="form-control">April</option>
                        <option value="May" class="form-control">May</option>
                        <option value="June" class="form-control">June</option>
                        <option value="July" class="form-control">July</option>
                        <option value="August" class="form-control">August</option>
                        <option value="September" class="form-control">September</option>
                        <option value="October" class="form-control">October</option>
                        <option value="November" class="form-control">November</option>
                        <option value="December" class="form-control">December</option>
            </select>
        <button class="btn btn-outline-success my-2 my-sm-0 pl-2" type="submit" name="submit_u">Search</button>
    </form>
    <table class="table table-striped table-dark animate__animated animate__fadeInDown" style="background: rgba(0,0,0,0.8);">
    <thead>
<?php
if(isset($_POST['submit']))
{
$fd=$_POST['month'];
require 'dbconnect.php';
$qry = "SELECT * FROM salary where `month`='".$fd."' AND NOT usertype='Admin'";
$rs = mysqli_query($conn,$qry);
?>
        <tr>
        <th scope="col">User id</th>
        <th scope="col">User Type</th>
        <th scope="col">Email</th>
        <th scope="col">Month</th>
        <th scope="col">Days</th>
        <th scope="col">Hours</th>
        <th scope="col">Minutes</th>
        <th scope="col">Calculated Salary</th>
        <th scope="col">Total Salary</th>
        </tr>
    </thead>
    <tbody>
        <?php
        if(mysqli_num_rows($rs)>0)
        {
            while($row=mysqli_fetch_assoc($rs))
            {  
                ?>  
                    <tr>
                    <td><?php echo $row['u_id'];?></td>
                    <td><?php echo $row['usertype'];?></td>
                    <td><?php echo $row['email'];?></td>
                    <td><?php echo $row['month'];?></td>
                    <td><?php echo $row['days'];?></td>
                    <?php 
                    //$min=$row['minutes'];
                    //$hours = intdiv($min, 60).':'. ($min % 60);
                    ?>
                    <td><?php echo $row['hours'];?></td>
                    <td><?php echo $row['minutes']?></td>
              <?php if($row['c_salary']<$row['salary'])
                    {
                ?>
                        <td class="text-danger"><b><?php echo $row['c_salary'];?></b></td>
                <?php
                    }
                    else
                    {
                        ?>
                        <td><?php echo $row['c_salary'];?></td>
                        <?php
                    }
                     ?>
                     <?php?>
                    <!-- <td><?php echo $row['c_salary'];?></td> -->
                    <td><?php echo $row['salary'];?></td>
                    </tr>
                <?php    
            }
        }   
    }
else if(isset($_POST['submit_u']))
{
$fdu=$_POST['monthu'];
$uid=$_POST['uid'];
$cm=date('F');
require 'dbconnect.php';
$qry = "SELECT * FROM salary WHERE month='".$fdu."' AND NOT usertype='Admin' AND u_id='".$uid."'";
$rs = mysqli_query($conn,$qry);
?>
        <tr>
        <th scope="col">User id</th>
        <th scope="col">User Type</th>
        <th scope="col">Email</th>
        <th scope="col">Month</th>
        <th scope="col">Days</th>
        <th scope="col">Hours</th>
        <th scope="col">Minutes</th>
        <th scope="col">Calculated Salary</th>
        <th scope="col">Total Salary</th>
        </tr>
    </thead>
    <tbody>
        <?php
        if(mysqli_num_rows($rs)>0)
        {
            while($row=mysqli_fetch_assoc($rs))
            {   
                ?>  
                    <tr><b>
                    <td><?php echo $row['u_id'];?></td>
                    <td><?php echo $row['usertype'];?></td>
                    <td><?php echo $row['email'];?></td>
                    <td><?php echo $row['month'];?></td>
                    <td><?php echo $row['days'];?></td>
                    <?php 
                    //$min=$row['minutes'];
                    //$hours = intdiv($min, 60).':'. ($min % 60);
                    ?>
                    <td><?php echo $row['hours'];?></td>
                    <td><?php echo $row['minutes'];?></td>
                    <?php if($row['c_salary']<$row['salary'])
                    {
                ?>
                        <td class="text-danger"><b><?php echo $row['c_salary'];?></b></td>
                <?php
                    }
                    else
                    {
                        ?>
                        <td><?php echo $row['c_salary'];?></td>
                        <?php
                    }
                     ?>
                     <?php?>
                    <!-- <td><?php echo $row['c_salary'];?></td> -->
                    <td><?php echo $row['salary'];?></td>
                <?php    
            }
        }
    }

else
{
$cm=date('F');
require 'dbconnect.php';
$qry = "SELECT * FROM salary WHERE month='".$cm."' AND NOT usertype='Admin'";
$rs = mysqli_query($conn,$qry);
?>
        <tr>
        <th scope="col">User id</th>
        <th scope="col">User Type</th>
        <th scope="col">Email</th>
        <th scope="col">Month</th>
        <th scope="col">Days</th>
        <th scope="col">Hours</th>
        <th scope="col">Minutes</th>
        <th scope="col">Calculated Salary</th>
        <th scope="col">Total Salary</th>
        </tr>
    </thead>
    <tbody>
        <?php
        if(mysqli_num_rows($rs)>0)
        {
            while($row=mysqli_fetch_assoc($rs))
            {   
                ?>  
                    <tr><b>
                    <td><?php echo $row['u_id'];?></td>
                    <td><?php echo $row['usertype'];?></td>
                    <td><?php echo $row['email'];?></td>
                    <td><?php echo $row['month'];?></td>
                    <td><?php echo $row['days'];?></td>
                    <?php 
                    //$min=$row['minutes'];
                    //$hours = intdiv($min, 60).':'. ($min % 60);
                    ?>
                    <td><?php echo $row['hours'];?></td>
                    <td><?php echo $row['minutes'];?></td>
                    <?php if($row['c_salary']<$row['salary'])
                    {
                ?>
                        <td class="text-danger"><b><?php echo $row['c_salary'];?></b></td>
                <?php
                    }
                    else
                    {
                        ?>
                        <td><?php echo $row['c_salary'];?></td>
                        <?php
                    }
                     ?>
                     <?php?>
                    <!-- <td><?php echo $row['c_salary'];?></td> -->
                    <td><?php echo $row['salary'];?></td>
                <?php    
            }
        }
    }
    ?>
    </tbody>
    </table>
    </div>
</div>
</body>
</html>