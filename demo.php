<?php


// $date=strtotime(date('Y-m-d'));
// echo $date;
// $m=date('F',$date);
// echo $m;

$to='8:00:00';
$toarray=explode(':',$to);
$min=($toarray[0]*60)+($toarray[1])+($toarray[2]/60);
echo $min;
// $itw=strtotime("2021-06-12 09:30:45");
// $otw=strtotime("2021-06-12 19:30:30");
// $dif=date('H:i:s',($otw-$itw));

// echo "diffff: ".$dif."<br><br>";
// // $secs=strtotime($ot)-strtotime("00:00:00");
// // $result=date("H:i:s",strtotime($it)+$secs);	
// $time = "06:58:00";
// $time2 = "07:00:00";
// if(strtotime($time)>strtotime($time2))
// {
// 	echo "hey";
// }
// else
// {
// 	echo "lol";
// }
// $secs = strtotime($time2)-strtotime("00:00:00");
// $result = date("H:i:s",strtotime($time)+$secs);
// echo "result : ".$result."<br>";


// $t1='00:05:20';
// $t2='00:05:20';
// $s=strtotime($t2)-strtotime('00:00:00');
// $r=date('H:i:s',strtotime($t1)+$s);
// echo $r;
// $time11 = "04:00:00";
// $time21 = "03:25:00";

// $result1 = date("H:i:s",(strtotime($time11)+strtotime($time21)));
// echo "rrrr : ".$result1	;
// $to=$it+$ot;
// $to=date('h:i:s',$to);
// $t=date('h:i:s',($it+$ot));												
// echo "Add ::: ".$to."<br><br>";
// $dif=floor($ot-$it)/(60*60);
// echo $dif."<br>";
// echo strtotime('00:03:40');
// echo "<br>";
// echo strtotime('00:02:35');
// require 'dbconnect.php';
// session_start();
// if(!isset($_SESSION['id']))
// {
//     header("location:login.php");
// }
// //$logout=$_GET['logout'];

$qry="select attendance.u_id, attendance.usertype, attendance.email, attendance.date, user.salary, SUM(attendance.isactive) as days from attendance INNER JOIN user ON attendance.u_id=user.id WHERE MONTH(attendance.date)='".$month."' AND NOT attendance.usertype='Admin' GROUP BY attendance.u_id";
$rs=mysqli_query($conn,$qry); 
if(mysqli_num_rows($rs)>0)
{
		while($row=mysqli_fetch_assoc($rs))
      	{ 
            $u_id=$row['u_id'];
            $usertype=$row['usertype'];
            $email=$row['email'];
            $cmonth=date('F',strtotime($row['date']));
            $d=$row['days'];
            $s=$row['salary'];
            if($minutes<($wd*480))
            {
                $ds=(5*$s)/100;
                $fsalary=$s-$ds;
                $status=2;
            }
            else
            {
                $fsalary=$s;
                $status=1;
            }
            //$pds=$s/$wd;
            //$sal=$pds*$d;

            $qrys="select * from salary where u_id='".$u_id."' AND month='".$cmonth."'";
            $rss=mysqli_query($conn,$qrys);
            if(mysqli_num_rows($rss)>0)
            {
               $qry2="UPDATE salary SET days='".$d."', c_salary='".$fsalary."', status='".$status."' WHERE u_id='".$u_id."' AND month='".$cmonth."'";
               $rs2=mysqli_query($conn,$qry2);
            }
            else
            {
            $qry2="insert into salary (u_id,usertype,email,month,days,salary,c_salary,status) values ('".$u_id."','".$usertype."','".$email."','".$cmonth."','".$d."','".$s."','".$fsalary."','".$status."')";
            $rs2=mysqli_query($conn,$qry2);
          }
        }
}
// $u_id=$_SESSION['id'];
// $qry= "SELECT * FROM user_time ORDER BY id DESC LIMIT 1";
// $rs1=mysqli_query($conn,$qry);
// $row = mysqli_fetch_array($rs1);
// $in_time = $row['in_time'];
// $idate=$row['date'];
// $temp="00:00:00";

// $qryt="SELECT * from user_time WHERE u_id='".$u_id."' AND date='".$idate."'";
// $rst=mysqli_query($conn,$qryt);
// if(mysqli_num_rows($rst)>0)
// {
// 	while ($rowt=mysqli_fetch_assoc($rst)) {
// 		$t=$rowt['total_time'];
// 		$secs=strtotime($temp)-strtotime("00:00:00");
// 		$to=date('H:i:s',strtotime($t)+$secs);
// 		$min=date('i',strtotime($t)+$secs);
// 		$temp=$to;
// 	}
// }
// echo $min;
?>