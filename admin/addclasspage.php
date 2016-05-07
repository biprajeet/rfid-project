<?php
error_reporting(e_all);
$user = 'root';
$pass = '';
$db = 'rfid';

$con = mysqli_connect('localhost', $user, $pass, $db) or die("unable to connect");


$cid=$_GET['cid'];
$pid=$_GET['pid'];
$coid=$_GET['coid'];
$studentids=explode(",",$_GET['studentids']);
$p=0;

$sql="INSERT INTO class_no VALUES(\"$cid\",\"$pid\",\"$coid\");";
$sql2="CREATE TABLE `$cid`(`student_id` varchar(9), `total` int(3), `attended` int(3), `percent` int(3))";
if(mysqli_query($con,$sql) && mysqli_query($con,$sql2))
{
	foreach ($studentids as &$key) {
		$sql3="INSERT INTO `$cid` VALUES(\"$key\",0,0,0);";
		$p=$p+1;

		mysqli_query($con,$sql3);
	}
	echo "<h4>Registered Sucessfully</h4>";
	echo "<h4>",$p," students added.</h4>";
    header("refresh:1; url=admin.php");
}
else
{
	echo "Failed";
}

/*mysqli_query($con,$sql);
mysqli_query($con,$sql2);*/
mysqli_close($con);
	?>