<?php
session_start();
 $Username = $_POST['Username']; 
 $Password = $_POST['txtPW'] ;

//$_SESSION['Username'] = $_POST['Username']; 
//$_SESSION['txtPW'] = md5($_POST['txtPW']) ; 
require("/DatabasePG/LibraryMSystemDB.php");
$stmt = $db->prepare("SELECT sName , sPassword from ad where sName ='".$Username."' AND sPassword='".$Password."'");
$stmt->execute();
$result = $stmt->fetch(); 
print_r($result);
echo $EmailAdd = $result['sName'];
echo $Password = $result['sPassword'];


if($Username == $result['sName'] && $Password == $result['sPassword']){

	header ('Location:AdminPages/AdminHome.php');
}
else {
	header ('Location:AdminLoginPG.php');
	//header ('Location: UserLogin.php?msg=Invalid Login');
}

?>

