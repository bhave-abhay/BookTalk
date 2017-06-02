<!DOCTYPE html>
<head>
<title>Library Management Syatem</title>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
<link rel="stylesheet" href="css/navbar.css">
<script src="js/jquery.dataTables.min.js"></script>
<link rel="stylesheet" href="css/dataTables.bootstrap.min.css">
<script src="js/dataTables.bootstrap.min.js"></script>
<link rel="stylesheet" href="css/dataTables.responsive.css">
<script src="js/dataTables.responsive.min.js"></script>
</head>
<body>
<div>
<img src="images/Banner_Library.jpg" alt="" style="width: 100%;" height="170">
</div>
<nav class="navbar navbar-inverse">
<div class="container-fluid">
<div class="navbar-header">
	<a class="navbar-brand" href="index.php">&nbsp;&nbsp;<span class="glyphicon glyphicon-home"></span>&nbsp;&nbsp;Home</a>
</div>	
	<ul class="nav navbar-nav navbar-right">
	  <li><a href="UserRegPG.php"><span class="glyphicon glyphicon-user"></span> Sign Up</a></li>
      <li><a href="UserLoginPG.php"><span class="glyphicon glyphicon-log-in"></span>Login</a></li>	
    </ul>
</div>
</nav>
<div class="container-fluid">
<div class="row">
<div id="myCarousel" class="carousel slide" data-ride="carousel">
  <!-- Indicators -->
  <ol class="carousel-indicators">
    <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
    <li data-target="#myCarousel" data-slide-to="1"></li>
  </ol>

  <!-- Wrapper for slides -->
  <div class="carousel-inner">
    <div class="item active">
      <img src="images/a1.png" alt="" style="width: 100%;">
    </div>

    <div class="item">
      <img src="images/a2.jpg" alt="" style="width: 100%;">
    </div>
  </div>

  <!-- Left and right controls -->
  <a class="left carousel-control" href="#myCarousel" data-slide="prev">
    <span class="glyphicon glyphicon-chevron-left"></span>
    <span class="sr-only">Previous</span>
  </a>
  <a class="right carousel-control" href="#myCarousel" data-slide="next">
    <span class="glyphicon glyphicon-chevron-right"></span>
    <span class="sr-only">Next</span>
  </a>
</div>
</div>
<!--<footer class="footer">
      <div class="container">
        <span class="text-muted">Place sticky footer content here.</span>
      </div>
    </footer>-->
</div>
<div class="row">
<?php
require("Footer.php");
?>
</div>
</body>
</html>