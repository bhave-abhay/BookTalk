<?php

$Username = $_POST['Username']; 
$Password = md5($_POST['txtPW']);

require("/DatabasePG/LibraryMSystemDB.php");
$stmt = $db->prepare("SELECT sUsername , sPassword , sRole from treguser where sUsername ='".$Username."'");
$stmt->execute();
$result = $stmt->fetch(); 
print_r($result);
echo $sRole = $result['sRole'];
if(empty($result))
{
	header ('Location: UserLoginPG.php');
}
if($Password == $result['sPassword']) 
{
	if($result['sRole'] == 1 )
	{
		session_start();
		$_SESSION['Username'] = $_POST['Username']; 
		$_SESSION['txtPW'] = md5($_POST['txtPW']) ; 
		header ('Location: AdminPages/AdminHome.php');
	}
	else
	{
		session_start();
		$_SESSION['Username'] = $_POST['Username']; 
		$_SESSION['txtPW'] = md5($_POST['txtPW']) ; 
		header ('Location: UserPages/UserHome.php'); 
	}
}
else 
{
	header ('Location:UserLoginPG.php');
	//header ('Location: UserLogin.php?msg=Invalid Login');
}
?>

