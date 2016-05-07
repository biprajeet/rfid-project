<html>
<title>Faculty Dashboard</title>
  <head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.0/jquery.min.js"></script>
  <script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>
  <style type="text/css">

.hot-container p { margin-top: 10px; }
a { text-decoration: none; margin: 0 10px; }

.hot-container {
  min-height: 100px;
  margin-top: 100px;
  width: 100%;
  text-align: center;
}

a.btn {
  display: inline-block;
  color: #666;
  background-color: #eee;
  text-transform: uppercase;
  letter-spacing: 10px;
  font-size: 110px;
  padding: 30px 40px;
  border-radius: 5px;
  -moz-border-radius: 5px;
  -webkit-border-radius: 5px;
  border: 1px solid rgba(0,0,0,0.3);
  border-bottom-width: 3px;
}

  a.btn:hover {
    background-color: #e3e3e3;
    border-color: rgba(0,0,0,0.5);
  }
  
  a.btn:active {
    background-color: #CCC;
    border-color: rgba(0,0,0,0.9);
  }

/* blue button */

a.btn.btn-blue {
  background-color: #699DB6;
  border-color: rgba(0,0,0,0.3);
  text-shadow: 0 1px 0 rgba(0,0,0,0.5);
  color: #FFF;
}

  a.btn.btn-blue:hover {
    background-color: #4F87A2;
    border-color: rgba(0,0,0,0.5);
  }
  
  a.btn.btn-blue:active {
    background-color: #3C677B;
    border-color: rgba(0,0,0,0.9);
  }

/* red button */

a.btn.btn-red {
  background-color: #E48681;
  border-color: rgba(0,0,0,0.3);
  text-shadow: 0 1px 0 rgba(0,0,0,0.5);
  color: #FFF;
}

  a.btn.btn-red:hover {
    background-color: #DA4F49;
    border-color: rgba(0,0,0,0.5);
  }
  
  a.btn.btn-red:active {
    background-color: #B32C24;
    border-color: rgba(0,0,0,0.9);
  }
  </style>
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
   <div class="hot-container">
  <p>
    <a href="showattendance.php" class="btn btn-red">Show Attendance</a>
    <a href="takeattendance.php" class="btn btn-blue">Take Attendance</a>
  </p>
</div>
</div>
</body>

</html>