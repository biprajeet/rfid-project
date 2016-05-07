<?php
function Redirect($url){
	header('Location: '.$url);
	exit();
}
session_start();
  	$user='root';
    $pass='';
    $db='rfid';
    $con=new mysqli('localhost',$user,$pass,$db) or die("Unable to connect.");

    $stdid=$_GET['user'];
	$pswd=md5($_GET['password']);

	$sql="SELECT * FROM `student` WHERE Student_ID='$stdid' and Password='$pswd'";
	
	$result = mysqli_query($con,$sql);
	$count=mysqli_num_rows($result);

	if($count==1){
		$_SESSION['loggeduser']=$stdid;
	Redirect('StudentDashboard.php');
	}

	else
		Redirect('student.html');

mysqli_close($con);

?>