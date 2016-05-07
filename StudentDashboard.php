<html>
<title>Student Dashboard</title>
  <head>
    <!--Load the AJAX API-->
    <?php
      session_start();
      $stdid=$_SESSION['loggeduser'];
      $user='root';
      $pass='';
      $db='rfid';
      $con=new mysqli('localhost',$user,$pass,$db) or die("Unable to connect.");
      
      $sql1="SELECT `Class_ID` from `class_no`";
      $result1=mysqli_query($con,$sql1);
      $arr1=mysqli_fetch_assoc($result1);
      $str="";
 
      foreach ($arr1 as $key1 => $value1) {
        $sql2="SELECT percent from `$value1` where student_id=\"$stdid\"";
        $result2=mysqli_query($con,$sql2);
        $arr2=mysqli_fetch_assoc($result2);
        foreach ($arr2 as $key2 => $value2) {
        //echo $value1,'<br>',$value2;
         $str=$str.",[\"$value1\", $value2,col($value2)]";
         }
        //echo $key2,'<br>',$value2;
        }
        mysqli_close($con);
    ?>
    <script type="text/javascript" src="https://www.gstatic.com/charts/loader.js"></script>
    <script type="text/javascript">

      // Load the Visualization API and the corechart package.
      google.charts.load('current', {'packages':['corechart']});

      // Set a callback to run when the Google Visualization API is loaded.
      google.charts.setOnLoadCallback(drawChart);

      // Callback that creates and populates a data table,
      // instantiates the bar chart, passes in the data and
      // draws it.
      function col(x){
        var clr="";
        if(x>=75.0 && x<=80.0)
          clr="orange";
        else if(x<75.0)
          clr="red";
        else
          clr="green";

        return clr;
      }
      function drawChart() {
        // Create the data table.
        var data = new google.visualization.arrayToDataTable([
          ["Subject", "Attendance", { role: "style" } ]<?php echo $str;?>
          ]);
          
          var view = new google.visualization.DataView(data);
          view.setColumns([0, 1,
                       { calc: "stringify",
                         sourceColumn: 1,
                         type: "string",
                         role: "annotation" },
                       2]);


        // Set chart options
        var options = {'title':'Your Attendance',
                       'width':700,
                       'height':400,
                        /*bar: {groupWidth: "95%"},
                        legend: { position: "none" },*/
                     };

        // Instantiate and draw our chart, passing in some options.
        var chart = new google.visualization.ColumnChart(document.getElementById('chart_div'));
        chart.draw(view, options);
      }
    </script>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.0/jquery.min.js"></script>
  <script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>
  </head>

  <body style="background-image: url(images/bck.jpg);background-size: cover;">
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
          20px;"><?php echo $stdid; ?></span> <span class="caret"></span></a>
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
<img src="images/rfid.jpg" style="margin: 50px 0px 0px 175px;opacity: 0.5;">
    <!--Div that will hold the bar chart-->
    <div id="chart_div" style="float: right;opacity: 0.8; margin-right: 25px;"></div></body>
</html>