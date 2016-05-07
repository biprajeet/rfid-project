<?php
	error_reporting(e_all);
	$user='root';
	$pass='';
    $db='rfid';
    $con=new mysqli('localhost',$user,$pass,$db) or die("Unable to connect.");

    $course=$_GET['subject'];
    $studentids=explode("\n",$_GET['studentids']);
    $studentids=array_unique($studentids);
    $sql="UPDATE `$course` SET `total`=`total`+1";
    mysqli_query($con,$sql);
    $p=0;

    date_default_timezone_set("Asia/Kolkata");
	$t=time();
	$dt=date("dmY",$t);
	$sql2="ALTER TABLE `$course` ADD `$dt` int(2)";
    mysqli_query($con,$sql2);
    //echo $course,'<br>';
    foreach ($studentids as $key => $value) {
    	//echo "printed";
        $rfid=md5($value);
    	//echo $value,'<br>',$rfid;
    	$sql3="UPDATE `$course` SET `$dt`=1,`attended`=`attended`+1,`percent`=ceil(`attended`/`total`*100) WHERE student_id=(SELECT `Student_ID` from `rfid` WHERE rfid='$rfid')";
    	if(mysqli_query($con,$sql3)){
    		$p=$p+1;
    	}
    	else
    		echo "Failed.";
    }
    echo $p,' students present';

    mysql_close($con);
    header("refresh:1; url=FacDashboard.php");

?>