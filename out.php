<?php
require 'dbconnect.php';
session_start();
if(!isset($_SESSION['id']))
{
    header("location:login.php");
}
$logout=$_GET['logout'];
$u_id=$_SESSION['id'];
$email=$_SESSION['email'];
$usertype=$_SESSION['usertype'];
date_default_timezone_set('Asia/Kolkata'); 
$out_time = date('H:i:s');
$qry= "SELECT * FROM user_time ORDER BY id DESC LIMIT 1";
$rs1=mysqli_query($conn,$qry);
$row = mysqli_fetch_array($rs1);
$in_time = $row['in_time'];
$idate=$row['date'];
$it=strtotime($in_time);
$ot=strtotime($out_time);
$t_time= $ot - $it;
//echo $in_time."<br>";
//echo $out_time."<br>";
//echo $t_time."<br>";
$secs = $t_time % 60;
$mins = floor(($t_time / 60)%60);
$hrs = floor($t_time / 3600);
$total_time=date("$hrs:$mins:$secs");
//echo $total_time;

// $sql_qry="INSERT into user_time(u_id,in_time,out_time,total_time) VALUES ('".$u_id."','".$in_time."','".$out_time."','".$t_time."')";
// $rs= mysqli_query($conn,$sql_qry);
// if($rs)
// {
// 	echo "Inserted successfully";
// 	header("location:time.php?in=true");
// 	exit();
// }
// else
// {
// 	echo "error";
// }
// $qry= "SELECT in_time FROM user_time ORDER BY id DESC LIMIT 1";
// $rs=mysqli_query($conn,$qry);
// $in_time = mysql_fetch_object($rs);
// echo $in_time;

// $t_time= $in_time - $out_time;
// echo $t_time;

// $qry= "UPDATE user_time SET total_time WHERE u_id='$u_id'";
// $rs=mysqli_query($conn,$qry);
$isactive=1;
$sql_qry="UPDATE user_time set out_time='".$out_time."', total_time='".$total_time."', isactive='".$isactive."' ORDER BY id DESC LIMIT 1";
$rs= mysqli_query($conn,$sql_qry);

// $t=strtotime('00:00:00');
// $secs=strtotime($t)-strtotime("00:00:00");
// $qry_t = "SELECT * from user_time WHERE u_id='".$u_id."'";
// $rst= mysqli_query($conn,$qry_t);
// if(mysqli_num_rows($rst)>0)
// {
// while($row_t=mysqli_fetch_assoc($rst)){
// 	//echo $row_t['total_time']."<br>";
// 	//echo $t."<br>";
// 	$t=$row_t['total_time'];
// 	$result=date('H:i:s',strtotime($t)+$secs);
// 	$secs=$result;
// 	$to=$result;
// 	//$to=date('h:i:s',strtotime($row_t['total_time'])+strtotime($to));
// 	//echo date('H:i:s',$to)."<br>";
// 	$date=$row_t['date'];
// }
// }
$isactive=1;
$temp="00:00:00";
$qryt="SELECT * from user_time WHERE u_id='".$u_id."' AND date='".$idate."'";
$rst=mysqli_query($conn,$qryt);
if(mysqli_num_rows($rst)>0)
{
	while ($rowt=mysqli_fetch_assoc($rst)) {
		$t=$rowt['total_time'];
		$secs=strtotime($temp)-strtotime("00:00:00");
		$to=date('H:i:s',strtotime($t)+$secs);
		$toarray=explode(':',$to);
		$min=($toarray[0]*60)+($toarray[1])+($toarray[2]/60);
		$temp=$to;
	}
}
$hours = intdiv($min, 60).':'. ($min % 60);
$qrya="SELECT * from attendance WHERE u_id='".$u_id."' AND date='".$idate."'";
$rsa=mysqli_query($conn,$qrya);
if(mysqli_num_rows($rsa)>0)
{
	$qry_i="UPDATE attendance set `t_time`='".$to."', `minutes`='".$min."',hours='".$hours."', `isactive`='".$isactive."' WHERE u_id='".$u_id."' AND date='".$idate."'";
	$rs_i=mysqli_query($conn,$qry_i);
}
else
{
	$qry_i = "INSERT into attendance(`u_id`,`usertype`,`email`,`date`,`t_time`,`minutes`,`hours`,`isactive`) values('".$u_id."','".$usertype."','".$email."','".$idate."','".$to."','".$min."','".$hours."','".$isactive."') ";
	$rs_i=mysqli_query($conn,$qry_i);
} 

// if($rs AND $rs_i AND $rst)
// {
// 	echo "Inserted successfully";
// 	header("location:time.php?in=true & co=true");
// 	exit();
// }
if($rs)
{
	if($rst)
	{
		if($rs_i)
		{
			echo "Inserted successfully";
			if($logout)
			{
				header("location:logout.php?lg=true");	
			}
			else
			{
			header("location:time.php?in=true & co=true");
			}
		}
		else
		{
			echo "error re_i";
		}
	}
	else
	{
		echo "error rst";
	}
}
else
{
	echo "error";
}
?>