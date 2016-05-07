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

    $adminid=$_GET['user'];
	$pswd=$_GET['password'];

	$sql="SELECT * FROM `admin` WHERE Admin_ID='$adminid' and Password='$pswd'";
	
	$result = mysqli_query($con,$sql);
	$count=mysqli_num_rows($result);

	if($count==1){
		$_SESSION['loggeduser']=$adminid;
	Redirect('admin.php');
	}

	else
		Redirect('index.html');

mysqli_close($con);

?>