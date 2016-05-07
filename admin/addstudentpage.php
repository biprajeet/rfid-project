<?php
error_reporting('e_all');
$user = 'root';
$pass = '';
$db = 'rfid';

$con = mysqli_connect('localhost', $user, $pass, $db) or die("unable to connect");


$sid=$_GET['sid'];
$name=$_GET['name'];
$dob=$_GET['dob'];
$pass=md5($_GET['pass']);
$pno=($_GET['pno']);
$email=$_GET['email'];
$sql="INSERT INTO `student` (`Student_ID`, `Name`, `DOB`, `Password`, `Phone_No`, `Email_ID`) VALUES ('$sid', '$name', '$dob', '$pass', '$pno', '$email')";
//$sql="INSERT INTO `student` VALUES(\"$sid\",\"$name\",\"$dob\",\"$pass\",$pno,\"$email\")";
if(mysqli_query($con,$sql))
	{echo "<h4>Registered Sucessfully</h4>";
     header("refresh:1; url=admin.php");
    }
else
	echo "Failed";
mysqli_close($con);
?>