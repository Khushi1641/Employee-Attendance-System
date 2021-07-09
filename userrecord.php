<?php
session_start();
if(!isset($_SESSION['id']))
{
    header("location:login.php");
}
$u_id=$_SESSION['id'];
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
    <div class="container-fluis" style="background-color: #c5d6ca;">
    <div class="container" >
    <h2 class="text-center py-3 animate__animated animate__fadeInDown">Record</h2>
    <table class="table table-striped table-dark animate__animated animate__fadeInDown" style="background: rgba(0,0,0,0.8);">
    <thead>
<?php
if(isset($_POST['submit']))
{
$fdate=$_POST['fdate'];
$tdate=$_POST['tdate'];
require 'dbconnect.php';
$qry = "SELECT * FROM attendance where u_id='".$u_id."' AND date BETWEEN '".$fdate."' AND '".$tdate."'";
$rs = mysqli_query($conn,$qry);
?>
        <tr>
        <!-- <th scope="col">Id</th> -->
        <th scope="col">u_id</th>
        <th scope="col">date</th>
        <th scope="col">Total Time</th>
        <th scope="col">Details</th>
        </tr>
    </thead>
    <tbody>
        <?php
        if(mysqli_num_rows($rs)>0)
        {
            while($row=mysqli_fetch_assoc($rs))
            {   $t=$row['t_time'];
                $p="08:00:00";  
                if(strtotime($t)<strtotime($p))
                {
                ?>  
                    <tr class="text-danger">
                    <td><?php echo $row['u_id'];?></td>
                    <td><?php echo $row['date'];?></td>
                    <td><?php echo $row['t_time'];?></td>
                    <td><a class="btn btn-success" href="detail.php?date=<?php echo $row['date'];?>">Detail</a></td>
                    </tr>
                <?php    
                }
                else
                {
                ?>
                <tr>
                    <td><?php echo $row['u_id'];?></td>
                    <td><?php echo $row['date'];?></td>
                    <td><?php echo $row['t_time'];?></td>
                    <td><a class="btn btn-success" href="detail.php?date=<?php echo $row['date'];?>">Detail</a></td>
                </tr>
                <?php
                }
            }
        }   
    }
    else
    {
        $date=date('Y-m-d');
        require 'dbconnect.php';
$qry = "SELECT * FROM attendance where u_id='".$u_id."' AND date='".$date."'";
$rs = mysqli_query($conn,$qry);
?>
        <tr>
        <!-- <th scope="col">Id</th> -->
        <th scope="col">u_id</th>
        <th scope="col">date</th>
        <th scope="col">Total Time</th>>
        <th scope="col">Send mail</th>
        </tr>
    </thead>
    <tbody>
        <?php
        if(mysqli_num_rows($rs)>0)
        {
            while($row=mysqli_fetch_assoc($rs))
            {   $t=$row['t_time'];
                $p="08:00:00";  
                if(strtotime($t)<strtotime($p))
                {
                ?>  
                    <tr class="text-danger"><b>
                    <td><?php echo $row['u_id'];?></td>
                    <td><?php echo $row['date'];?></td>
                    <td><?php echo $row['t_time'];?></td>
                    <td><a class="btn btn-success" href="detail.php?date=<?php echo $row['date'];?>">Detail</a></b></td>
                    </tr>
                <?php    
                }
                else
                {
                ?>
                <tr>
                    <td><?php echo $row['u_id'];?></td>
                    <td><?php echo $row['date'];?></td>
                    <td><?php echo $row['t_time'];?></td>
                    <td><a class="btn btn-success" href="detail.php?date=<?php echo $row['date'];?>">Detail</a></td>
                </tr>
                <?php
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