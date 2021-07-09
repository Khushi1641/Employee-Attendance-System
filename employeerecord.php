<?php
session_start();
if(!isset($_SESSION['id']))
{
    header("location:login.php");
}
$m_id=$_SESSION['id'];
$ut=$_SESSION['usertype'];
require 'dbconnect.php';
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
    Record
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
            <input class="form-control mr-sm-2" type="date" placeholder="From date" aria-label="From date" name="fdate" value="<?php echo date('Y-m-d');?>">
            <input class="form-control mr-sm-2" type="date" placeholder="To date" aria-label="To date" name="tdate" value="<?php echo date('Y-m-d');?>">
            <button class="btn btn-outline-success my-2 my-sm-0" type="submit" name="submit">Search</button>
            </form>
            <ul class="navbar-nav ml-auto">
             <li class="nav-item">
                <a class="nav-link" href="logout.php">Logout<span class="sr-only">(current)</span></a>
            </li>
            </ul>
        </div>
    </nav>
    <div class="container-fluid" style="background-color: #c5d6ca;">
    <div class="container"  >
    <h2 class="text-center py-3 animate__animated animate__fadeInDown">Record</h2>
    <table class="table table-striped table-dark animate__animated animate__fadeInDown" style="background: rgba(0,0,0,0.8);">
    <thead>
<?php
if(isset($_POST['submit']))
{
    $fdate=$_POST['fdate'];
    $tdate=$_POST['tdate'];
    if($ut=='Admin')
    {
        $qry1 = "SELECT * FROM attendance where `date` BETWEEN '".$fdate."' AND '".$tdate."'";
        $rs1 = mysqli_query($conn,$qry1);
        ?>
        <tr>
            <!-- <th scope="col">Id</th> -->
        <th scope="col">u_id</th>
        <th scope="col">User Type</th>
        <th scope="col">date</th>
        <th scope="col">Total Time</th>
        <th scope="col">Details</th>
        </tr>
        </thead>
        <tbody>
        <?php
        if(mysqli_num_rows($rs1)>0)
        {
            while($row1=mysqli_fetch_assoc($rs1))
            {   
                $t=$row1['t_time'];
                $p="08:00:00";  
                if(strtotime($t)<strtotime($p))
                {
                ?>  
                    <tr class="text-danger">
                    <td><?php echo $row1['u_id'];?></td>
                    <td><?php echo $row1['usertype'];?></td>
                    <td><?php echo $row1['date'];?></td>
                    <td><?php echo $row1['t_time'];?></td>
                    <td><a class="btn btn-success" href="detail.php?date=<?php echo $row1['date'];?>">Detail</a></td>
                    </tr>
                <?php    
                }
                else
                {
                ?>
                <tr>
                    <td><?php echo $row1['u_id'];?></td>
                    <td><?php echo $row1['usertype'];?></td>
                    <td><?php echo $row1['date'];?></td>
                    <td><?php echo $row1['t_time'];?></td>
                    <td><a class="btn btn-success" href="detail.php?date=<?php echo $row1['date'];?>">Detail</a></td>
                    </tr>
                <?php
                }
            }
        }   
    }
    elseif($ut=='HR')
    {
    $qry2 = "SELECT * FROM attendance where `date` BETWEEN '".$fdate."' AND '".$tdate."' AND NOT `usertype`='Admin'";
    $rs2 = mysqli_query($conn,$qry2);
    ?>
        <tr>
        <!-- <th scope="col">Id</th> -->
        <th scope="col">User id</th>
        <th scope="col">User Type</th>
        <th scope="col">Date</th>
        <th scope="col">Total Time</th>
        <th scope="col">Details</th>
        </tr>
    </thead>
    <tbody>
        <?php
        if(mysqli_num_rows($rs2)>0)
        {
            while($row2=mysqli_fetch_assoc($rs2))
            {   $t=$row2['t_time'];
                $p="08:00:00";  
                if(strtotime($t)<strtotime($p))
                {
                ?>  
                    <tr class="text-danger">
                    <td><?php echo $row2['u_id'];?></td>
                    <td><?php echo $row2['usertype'];?></td>
                    <td><?php echo $row2['date'];?></td>
                    <td><?php echo $row2['t_time'];?></td>
                    <td><a class="btn btn-success" href="detail.php?date=<?php echo $row2['date'];?>">Detail</a></td>
                    </tr>
                <?php    
                }
                else
                {
                ?>
                <tr>
                    <td><?php echo $row2['u_id'];?></td>
                    <td><?php echo $row2['usertype'];?></td>
                    <td><?php echo $row2['date'];?></td>
                    <td><?php echo $row2['t_time'];?></td>
                    <td><a class="btn btn-success" href="detail.php?date=<?php echo $row2['date'];?>">Detail</a></td>
                </tr>
                <?php
                }
            }
        }   
    }
    elseif($ut=='Manager')
    {
    $qry2 = "SELECT manager.m_id,manager.u_id,attendance.email,attendance.date,attendance.t_time  FROM attendance INNER JOIN manager ON manager.u_id=attendance.u_id WHERE `date` BETWEEN '".$fdate."' AND '".$tdate."' AND m_id='".$m_id."'";
    $rs2 = mysqli_query($conn,$qry2);
    ?>
        <tr>
        <!-- <th scope="col">Id</th> -->
        <th scope="col">Manager id</th>
        <th scope="col">User id</th>
        <th scope="col">Email</th>
        <th scope="col">Date</th>
        <th scope="col">Total Time</th>
        <th scope="col">Details</th>
        </tr>
    </thead>
    <tbody>
        <?php
        if(mysqli_num_rows($rs2)>0)
        {
            while($row2=mysqli_fetch_assoc($rs2))
            {   $t=$row2['t_time'];
                $p="08:00:00";  
                if(strtotime($t)<strtotime($p))
                {
                ?>  
                    <tr class="text-danger">
                    <td><?php echo $row2['m_id'];?></td>
                    <td><?php echo $row2['u_id'];?></td>
                    <td><?php echo $row2['email'];?></td>
                    <td><?php echo $row2['date'];?></td>
                    <td><?php echo $row2['t_time'];?></td>
                    <td><a class="btn btn-success" href="detail.php?date=<?php echo $row2['date'];?>">Detail</a></td>
                    </tr>
                <?php    
                }
                else
                {
                ?>
                <tr>
                    <td><?php echo $row2['m_id'];?></td>
                    <td><?php echo $row2['u_id'];?></td>
                    <td><?php echo $row2['email'];?></td>
                    <td><?php echo $row2['date'];?></td>
                    <td><?php echo $row2['t_time'];?></td>
                    <td><a class="btn btn-success" href="detail.php?date=<?php echo $row2['date'];?>">Detail</a></td>
                </tr>
                <?php
                }
            }
        }   
    }
}
else
{
    if($ut=='Admin')
    {
        $date=date('Y-m-d');
        $qry3 = "SELECT * FROM attendance where `date`='".$date."'";
        $rs3 = mysqli_query($conn,$qry3);
        ?>
        <tr>
        <!-- <th scope="col">Id</th> -->
        <th scope="col">User id</th>
        <th scope="col">User Type</th>
        <th scope="col">Date</th>
        <th scope="col">Total Time</th>>
        <th scope="col">Send mail</th>
        </tr>
        </thead>
        <tbody>
        <?php
            if(mysqli_num_rows($rs3)>0)
            {
                while($row3=mysqli_fetch_assoc($rs3))
                {   
                    $t=$row3['t_time'];
                    $p="08:00:00";  
                    if(strtotime($t)<strtotime($p))
                    {
                    ?>  
                        <tr class="text-danger">
                        <td><?php echo $row3['u_id'];?></td>
                        <td><?php echo $row3['usertype'];?></td>
                        <td><?php echo $row3['date'];?></td>
                        <td><?php echo $row3['t_time'];?></td>
                        <td><a class="btn btn-success" href="detail.php?date=<?php echo $row3['date'];?>">Detail</a></td>
                        </tr>
                    <?php    
                    }
                    else
                    {
                    ?>
                        <tr>
                            <td><?php echo $row3['u_id'];?></td>
                            <td><?php echo $row3['usertype'];?></td>
                            <td><?php echo $row3['date'];?></td>
                            <td><?php echo $row3['t_time'];?></td>
                            <td><a class="btn btn-success" href="detail.php?date=<?php echo $row3['date'];?>">Detail</a></td>
                        </tr>
                        <?php
                    }
                }
            }
    }
    elseif($ut=='HR')
    {
        $date=date('Y-m-d');
        $qry4 = "SELECT * FROM attendance where `usertype`<>'ADMIN' AND `date`='".$date."'";
        $rs4 = mysqli_query($conn,$qry4);
        ?>
        <tr>
        <!-- <th scope="col">Id</th> -->
        <th scope="col">User id</th>
        <th scope="col">User Type</th>
        <th scope="col">Date</th>
        <th scope="col">Total Time</th>
        <th scope="col">Details</th>
        </tr>
        </thead>
        <tbody>
        <?php
        if(mysqli_num_rows($rs4)>0)
        {
            while($row4=mysqli_fetch_assoc($rs4))
            {   $t=$row4['t_time'];
                $p="08:00:00";  
                if(strtotime($t)<strtotime($p))
                {
                ?>  
                    <tr class="text-danger">
                    <td><?php echo $row4['u_id'];?></td>
                    <td><?php echo $row4['usertype'];?></td>
                    <td><?php echo $row4['date'];?></td>
                    <td><?php echo $row4['t_time'];?></td>
                    <td><a class="btn btn-success" href="detail.php?date=<?php echo $row4['date'];?>">Detail</a></td>
                    </tr>
                <?php    
                }
                else
                {
                ?>
                <tr>
                    <td><?php echo $row4['u_id'];?></td>
                    <td><?php echo $row4['usertype'];?></td>
                    <td><?php echo $row4['date'];?></td>
                    <td><?php echo $row4['t_time'];?></td>
                    <td><a class="btn btn-success" href="detail.php?date=<?php echo $row4['date'];?>">Detail</a></td>
                </tr>
                <?php
                }
            }
        }   
    }
    elseif($ut=='Manager')
    {
        $date=date('Y-m-d');
        $qry4 = "SELECT manager.m_id,manager.u_id,attendance.email,attendance.date,attendance.t_time  FROM attendance INNER JOIN manager ON manager.u_id=attendance.u_id WHERE `date`='".$date."' AND m_id='".$m_id."'";
        $rs4 = mysqli_query($conn,$qry4);
        ?>
        <tr>
        <th scope="col">manager id</th>
        <th scope="col">u_id</th>
        <th scope="col">email</th>
        <th scope="col">date</th>
        <th scope="col">Total Time</th>
        <th scope="col">Details</th>
        </tr>
        </thead>
        <tbody>
        <?php
        if(mysqli_num_rows($rs4)>0)
        {
            while($row4=mysqli_fetch_assoc($rs4))
            {   $t=$row4['t_time'];
                $p="08:00:00";  
                if(strtotime($t)<strtotime($p))
                {
                ?>  
                    <tr class="text-danger">
                    <td><?php echo $row4['m_id'];?></td>
                    <td><?php echo $row4['u_id'];?></td>
                    <td><?php echo $row4['email'];?></td>
                    <td><?php echo $row4['date'];?></td>
                    <td><?php echo $row4['t_time'];?></td>
                    <td><a class="btn btn-success" href="detail.php?date=<?php echo $row4['date'];?>">Detail</a></td>
                    </tr>
                <?php    
                }
                else
                {
                ?>
                <tr>
                    <td><?php echo $row4['m_id'];?></td>
                    <td><?php echo $row4['u_id'];?></td>
                    <td><?php echo $row4['email'];?></td>
                    <td><?php echo $row4['date'];?></td>
                    <td><?php echo $row4['t_time'];?></td>
                    <td><a class="btn btn-success" href="detail.php?date=<?php echo $row4['date'];?>">Detail</a></td>
                </tr>
                <?php
                }
            }
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