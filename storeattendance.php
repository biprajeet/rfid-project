<?php
	$user='root';
	$pass='';
    $db='rfid';
    $con=new mysqli('localhost',$user,$pass,$db) or die("Unable to connect.");

    $course=$_GET['subject'];
    $studentids=explode(",",$_GET['studentids']);

    echo $course;
    foreach ($studentids as &$key) {
    	echo $key;
    }

     
?>