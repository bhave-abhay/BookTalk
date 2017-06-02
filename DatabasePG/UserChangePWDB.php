<?php
require("../UserPages/UserIndexMenu.php");
session_start();
	$Username = $_POST['Username'];
    $OPassword = $_POST['txtOPW'];
	$NPassword = md5($_POST['txtNPW']);
	require("../DatabasePG/LibraryMSystemDB.php");
	$stmt = $db->prepare("SELECT sUsername,sPassword from treguser where sUsername ='".$Username."'");
	$stmt->execute();
	$result = $stmt->fetch();
	if($result['sUsername']==$Username && $result['sPassword']==md5($OPassword))
    {
       $sql = "UPDATE treguser SET sPassword='$NPassword' WHERE sUsername='$Username'";
	   $stmt = $db->prepare($sql);
	   $stmt->execute();
	   echo " Password updated Successfully";
    }
	else
	{
		echo "The old password is incorrect"; 
		//header ('Location:../UserPages/UserChangePW.php');
	}       
?>