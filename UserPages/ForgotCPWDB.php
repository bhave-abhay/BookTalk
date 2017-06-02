!DOCTYPE html>
<html lang="en">
<title>User Registartion</title>
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
  <script type="text/javascript" src="js/UserRegValidation.js"></script>
</head>
<body>
<nav class="navbar navbar-default">
<div class="container-fluid">
<div class="navbar-header">
	<a class="navbar-brand" href="#">Gadre Infotech</a>
</div>
<ul class="nav navbar-nav">
	<li class="active"><a href="#">Home</a></li>
	<li><a href="UserReg.php">User Registration</a></li>
	<li><a href="UserLogin.php">User Login</a></li>
	<li><a href="#">Admin Login</a></li>
</ul>
</div>
</nav>
<?php
session_start();
require("UserRegDB.php");
	$EmailAdd = $_POST['EmailAdd'];
    $OPassword = $_POST['OPassword'];
	$NPassword = md5($_POST['NPassword']);
	require("UserRegDB.php");
	$stmt = $db->prepare("SELECT EmailAdd,Password from reguser where EmailAdd ='".$EmailAdd."'");
	$stmt->execute();
	$result = $stmt->fetch();
	print_r($result);
	if($result['EmailAdd']==$EmailAdd && $result['Password']==md5($OPassword))
    {
       $sql = "UPDATE reguser SET password='$NPassword' WHERE EmailAdd='$EmailAdd'";
	   $stmt = $db->prepare($sql);
	   $stmt->execute();
	   echo " Password updated Successfully";
    }
	else
	{
		echo "The old password is incorrect"; 
	}       
?>