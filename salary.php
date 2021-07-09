<?php
require 'dbconnect.php';
//echo date('m Y');
$month=date('m');
$mn=date('F');
//echo $mn;
$year=date('Y');
$tdays=cal_days_in_month(CAL_GREGORIAN,$month, $year);
//echo $tdays;
//echo cal_days_in_month(CAL_GREGORIAN,$month, $year);

$monthName = date("F", mktime(0, 0, 0, $month));
$fromdt=date('Y-m-01 ',strtotime("First Day Of  $monthName $year")) ;
$todt=date('Y-m-d ',strtotime("Last Day of $monthName $year"));

$num_sundays='';
$num_saturdays='';                
for ($i = 0; $i < ((strtotime($todt) - strtotime($fromdt)) / 86400); $i++)
{
    if(date('l',strtotime($fromdt) + ($i * 86400)) == 'Sunday')
    {
            $num_sundays++;
    }
    else if(date('l',strtotime($fromdt) + ($i * 86400)) == 'Saturday')
    {
    	$num_saturdays++;
    }
}
//echo "<br>Sunday: ".$num_sundays;
//echo "<br>Saturday: ".$num_saturdays;
$holidays=$num_sundays+$num_saturdays;
//echo "<br>Holidays:".$holidays;
$wd=$tdays-$holidays;
//$qry="select count(*) as total_f from attendance WHERE MONTH(date)='".$month."' AND t_time>'08:00:00' GROUP BY `u_id`";
$qry="select attendance.u_id, attendance.usertype, attendance.email, attendance.date, SUM(attendance.minutes) as minutes,attendance.hours, user.salary, SUM(attendance.isactive) as days from attendance INNER JOIN user ON attendance.u_id=user.id WHERE MONTH(attendance.date)='".$month."' AND NOT attendance.usertype='Admin' GROUP BY attendance.u_id";
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
            $minutes=$row['minutes'];
            $hours = intdiv($minutes, 60).':'. ($minutes % 60);
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
               $qry2="UPDATE salary SET days='".$d."',minutes='".$minutes."',hours='".$hours."', c_salary='".$fsalary."', status='".$status."' WHERE u_id='".$u_id."' AND month='".$cmonth."'";
               $rs2=mysqli_query($conn,$qry2);
            }
            else
            {
            $qry2="insert into salary (u_id,usertype,email,month,days,minutes,hours,salary,c_salary,status) values ('".$u_id."','".$usertype."','".$email."','".$cmonth."','".$d."','".$minutes."','".$hours."','".$s."','".$fsalary."','".$status."')";
            $rs2=mysqli_query($conn,$qry2);
          }
        }
}



// $qryp="select attendance.u_id, attendance.usertype, attendance.email, attendance.date, user.salary, SUM(attendance.isactive) as days from attendance INNER JOIN user ON attendance.u_id=user.id WHERE MONTH(attendance.date)='".$month."' AND attendance.t_time<'08:00:00' GROUP BY attendance.u_id";
// $rsp=mysqli_query($conn,$qryp); 
// if(mysqli_num_rows($rsp)>0)
// {
//     while($rowp=mysqli_fetch_assoc($rsp))
//         { 
//             $u_idp=$rowp['u_id'];
//             $usertypep=$rowp['usertype'];
//             $emailp=$rowp['email'];
//             $monthp=date('F',strtotime($rowp['date']));
//             $dp=$rowp['days'];
//             $sp=$rowp['salary'];
//             $pdsp=$sp/$wd;
//             $salp=$pdsp*$dp;
//             $pp=((2*$sp)/100)*$dp;
//             $cutp=$salp-$pp;
//             $status1=2;
//             $qrys1="select * from salary where u_id='".$u_idp."' AND month='".$monthp."' AND status='".$status1."'";
//             $rss1=mysqli_query($conn,$qrys1);
//             // if(mysqli_num_rows($rss1)>0)
//             // {
//             //   $qry2p="UPDATE salary SET days='".$dp."', c_salary='".$cutp."' WHERE $u_id='".$u_idp."' AND month='".$monthp."' AND status='".$status1."'";
//             //   $rs2p=mysqli_query($conn,$qry2p);
//             // }
//             // else
//             // {
//             $qry2p="insert into salary (u_id,usertype,email,month,days,salary,c_salary,status) values ('".$u_idp."','".$usertypep."','".$emailp."','".$monthp."','".$dp."','".$sp."','".$cutp."','".$status1."')";
//             $rs2p=mysqli_query($conn,$qry2p);
//           //}
//         }
// } 

// $qryf="select u_id,usertype,email,month,SUM(days) as days,SUM(c_salary) as c_salary,salary from salary WHERE month='".$mn."' GROUP BY u_id";
// $rsf=mysqli_query($conn,$qryf);
// if(mysqli_num_rows($rsf)>0)
// {
//   while($rowf=mysqli_fetch_assoc($rsf))
//   {
//     $u_idf=$rowf['u_id'];
//     $usertypef=$rowf['usertype'];
//     $emailf=$rowf['email'];
//     $monthf=$rowf['month'];
//     $df=$rowf['days'];
//     $csf=$rowf['c_salary'];
//     $sf=$rowf['salary'];

//     // $qrys2="select * from salary_calc where u_id='".$u_idf."' AND month='".$monthf."'";
//     //         $rss2=mysqli_query($conn,$qrys2);
//     //         if(mysqli_num_rows($rss2)>0)
//     //         {
//     //           $qry2f="UPDATE salary_calc SET days='".$df."', c_salary='".$csf."' WHERE $u_id='".$u_idf."' AND month='".$monthf."'";
//     //           $rs2f=mysqli_query($conn,$qry2f);
//     //         }
//     //         else
//     //         {
//     $qry2f="insert into salary_calc (u_id,usertype,email,month,days,c_salary,salary) values('".$u_idf."','".$usertypef."','".$emailf."','".$monthf."','".$df."','".$csf."','".$sf."')";
//     $rs2f=mysqli_query($conn,$qry2f);
//   //}
//   }
// }

if($rs)
{
header("location:salary_view.php");
}
else
{
    echo "error";
}
?>