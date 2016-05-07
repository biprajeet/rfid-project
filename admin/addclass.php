<html>
<title>Add Class</title>
  <head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.0/jquery.min.js"></script>
  <script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>
 <style>
 form  { 
       
    border:5px solid black;
    border-radius:2px;
	  box-sizing:border-box;
	  width:500px;
	  height:500px;
	  padding:12px 20px;
	  margin-left:650px;
	  color:black;
	  margin-top:100px;
       }
	   input {
		   margin-bottom:40px;
	   }
	   .sub
	   {
		   margin-left:130px;
	   }
	 label {
    text-align: right;
    clear: both;
    float:left;
    margin-right:15px;
}
	   
 </style>        
   </head>

  <body style="background-image: url(images/bck2.jpg);background-size: cover;">
    <nav class="navbar navbar-inverse">
  <div class="container-fluid">
    <div class="navbar-header">
      
      <h1 style="color:white;">Welcome</h1>
    </div>
      <ul class="nav navbar-nav navbar-right">
        <li class="dropdown">
          <a class="dropdown-toggle" data-toggle="dropdown" href="#"><img src="images/avt2.png"  
            style="width:40px;height:40px;border-radius:15px;"><span style="font-size: 
          20px;">ADMIN</span> <span class="caret"></span></a>
          <ul class="dropdown-menu">
            <li><a href="#">About</a></li>
            <li><a href="main.html">Log Out</a></li>
          </ul>
        </li>
      </ul>
    </div>
  </div>
</nav>
<form method="get" action="addclasspage.php">
<label for="cid">Class ID:</label>
<input type="text" name="cid" ><br><br>
<label for="pid">Professor ID:</label>
<input type="text" name="pid" ><br><br>
<label for="coid">Course id:</label>
<input type="text" name="coid" ><br><br>
<textarea rows="10" cols="45" name="studentids"></textarea>
<input type="submit" value="Submit" class="sub">
</form>
</html>