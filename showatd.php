<html>
<title>Faculty Dashboard</title>
  <head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.0/jquery.min.js"></script>
  <script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>
  </head>

  <body style="background-image: url(images/bck2.jpg);background-size: cover;">
    <?php
      session_start();
      $profid=$_SESSION['loggeduser'];
    ?>

  <nav class="navbar navbar-inverse">
  <div class="container-fluid">
    <div class="navbar-header">
      <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myNavbar">
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span> 
      </button>
      <h1 style="color:white;">Welcome</h1>
    </div>
      <ul class="nav navbar-nav navbar-right">
        <li class="dropdown">
          <a class="dropdown-toggle" data-toggle="dropdown" href="#"><img src="images/avt2.png"  
            style="width:40px;height:40px;border-radius:15px;"><span style="font-size: 
          20px;"><?php echo $profid; ?></span> <span class="caret"></span></a>
          <ul class="dropdown-menu">
            <li><a href="#">About</a></li>
            <li>
              <form method="GET" action="logout.php">
                <input type="submit" value="Logout">
              </form>
            </li>
          </ul>
        </li>
      </ul>
    </div>
  </div>
</nav>
<img src="images/rfid.jpg" style="margin: 50px 250px 0px 175px;opacity: 0.5;float: right;">
<div class="container" style="margin-left:20px;">
<?php
error_reporting(0);
$user='root';
$pass='';
$db='rfid';
$con=new mysqli('localhost',$user,$pass,$db) or die("Unable to connect.");
$tb=$_GET['subject'];
$sql = "SELECT student_id, total, attended,percent FROM `$tb`";
$result=mysqli_query($con,$sql);
$str ="<table border=\"1\" style=\"border: 1px solid black;border-collapse: collapse;\">";
$str = $str."<tr><th style=\"color: white;font-size:30px;padding: 10px 10px 10px 10px;background-color:black;\">Student ID</th>";
$str = $str."<th style=\"color: white;font-size:30px;padding: 10px 10px 10px 10px;background-color:black;\">Total</th>";
$str = $str."<th style=\"color: white;font-size:30px;padding: 10px 10px 10px 10px;background-color:black;\">Attended</th>";
$str = $str."<th style=\"color: white;font-size:30px;padding: 10px 10px 10px 10px;background-color:black;\">Percentage</th></tr>";

while($row=mysqli_fetch_assoc($result)) {
        $id=$row["student_id"];
        $total=$row["total"]; 
        $attended=$row["attended"] ;
        $percent=$row["percent"];
        $str = $str."<tr><td style=\"color: white;font-size:30px;padding: 10px 10px 10px 10px;\">$id</td><td style=\"color: white;font-size:30px;padding: 10px 10px 10px 10px;\">$total</td><td style=\"color: white;font-size:30px;padding: 10px 10px 10px 10px;\">$attended</td><td style=\"color: white;font-size:30px;padding: 10px 10px 10px 10px;\">$percent</td></tr>";
    }
$str = $str."</table>";
echo $str;
?>
</div>
</body>

</html>