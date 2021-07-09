<?php
session_start();
if(!isset($_SESSION['id']))
{
    header("location:login.php");
}
$u_id=$_GET['u_id'];
$date=$_GET['date'];
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
   <!--  <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
        <a class="navbar-brand" href="#">Record</a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>

        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav mr-auto">
            <li class="nav-item">
                <a class="nav-link" href="">Add Admin <span class="sr-only">(current)</span></a>
            </li>
            <li class="nav-item active">
                <a class="nav-link" href="/viewtask">Add employee</a>
            </li>
            </ul>
            <form class="form-inline my-2 my-lg-0">
            <input class="form-control mr-sm-2" type="search" placeholder="Search" aria-label="Search">
            <button class="btn btn-outline-success my-2 my-sm-0" type="submit">Search</button>
            </form>
        </div>
    </nav> -->
    <div class="container-fluid" style="background: grey; background-repeat: no-repeat; background-size: 100%; height: 100vh;" >
    <h2 class="text-center py-3 animate__animated animate__fadeInDown">Detailed Record</h2>
    <table class="table table-striped table-dark animate__animated animate__fadeInDown">
    <thead>
        <?php
require 'dbconnect.php';
$qry = "SELECT * FROM user_time where u_id='".$u_id."' AND date='".$date."'";
$rs = mysqli_query($conn,$qry);
?>
        <tr>
        <!-- <th scope="col">Id</th> -->
        <th scope="col">Check In</th>
        <th scope="col">Check out</th>
        <th scope="col">Total Time</th>
        </tr>
    </thead>
    <tbody>
        <?php
        if(mysqli_num_rows($rs)>0)
        {
            while($row=mysqli_fetch_assoc($rs))
            {   ?>
                <td><?php echo $row['in_time'];?></td>
                <td><?php echo $row['out_time'];?></td>
                <td><?php echo $row['total_time'];?></td>
                </tr>
                <?php
                }
            }  
    ?>      
    </tbody>
    </table>
    </div>
</body>
</html>