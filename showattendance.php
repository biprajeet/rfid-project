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
<div class="container" style="margin-left:200px;">
  <h2 style="margin-top: 150px;color:white;">Choose Your Class </h2>                                        
  <form method="GET" action="showatd.php">
    <?php
      $user='root';
      $pass='';
      $db='rfid';
      $con=new mysqli('localhost',$user,$pass,$db) or die("Unable to connect.");
     
      $sql="SELECT `Class_ID` FROM `class_no` WHERE `Prof_ID`=\"$profid\"";
      $result=mysqli_query($con,$sql);
      
      $print ="<select name='subject'>";
      while($row=mysqli_fetch_array($result)){
        $cls=$row['Class_ID'];
        $print = $print."<option value= \"$cls\" > $cls </option>";
      }
    $print = $print."</select>";
    echo $print;
        mysqli_close($con);
      ?> 
      <br><br><input type="submit" value="View Attendance">
</form>

</div>
</body>

</html>