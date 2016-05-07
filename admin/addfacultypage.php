<?php
error_reporting(0);
$user = 'root';
$pass = '';
$db = 'rfid';

$con = mysqli_connect('localhost', $user, $pass, $db) or die("unable to connect");


$pid=$_GET['pid'];
$name=$_GET['name'];
$doj=$_GET['doj'];
$pass=md5($_GET['pass']);
$pno=($_GET['pno']);
$email=$_GET['email'];
$sql="INSERT INTO `professor`(`Prof_ID`, `Name`, `DOJ`, `Password`, `Phone_No`, `Email_ID`) VALUES ('$pid','$name','$doj','$pass','$pno','$email')";
//$sql = "INSERT INTO professor VALUES(\"$pid\",\"$name\",\"$doj\",\"$pass\",\"$pno\",\"$email\")";
if(mysqli_query($con,$sql))
	{echo "<h4>Registered Sucessfully</h4>";
     header("refresh:1; url=admin.php");
    }
else
	echo "Failed";
?>