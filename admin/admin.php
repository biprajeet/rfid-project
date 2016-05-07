<html>
<title>Admin dashboard</title>
  <head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.0/jquery.min.js"></script>
  <script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>
<style>
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
	letter-spacing: 2px;
	font-size: 12px;
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






  <body>
  	<?php
  	session_start();
  	$admin=$_SESSION['loggeduser'];
  	?>
   <nav class="navbar navbar-inverse">
  <div class="container-fluid">
    
    <div class="navbar-header">
    <h1 style="color:white;">Welcome</h1>
    </div>

      <ul class="nav navbar-nav navbar-right">
        <li class="dropdown">
          <a class="dropdown-toggle" data-toggle="dropdown" href="#"><span style="font-size: 20px;"><?php echo $admin;?></span></a>
          <ul class="dropdown-menu">
            <li><a href="#">About</a></li>
            <li><a href="logout.php">Log Out</a></li>
          </ul>
        </li>
      </ul>
    </div>
  </div>
</nav>
<div class="hot-container">
	<p>
		<a href="addclass.php" class="btn">Add Class</a>
		<a href="addstudent.php" class="btn btn-blue">Add Student</a>
	</p>
	<p>
		<a href="addfaculty.php" class="btn btn-red">Add Professor</a>
	</p>
</div>
</body>
</html>