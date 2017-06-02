<?php

session_start();
echo $Username = $_POST['Username']; 
echo $Password = md5($_POST['txtPW']) ;

//$_SESSION['Username'] = $_POST['Username']; 
//$_SESSION['txtPW'] = md5($_POST['txtPW']) ; 
require("/DatabasePG/LibraryMSystemDB.php");
$stmt = $db->prepare("SELECT sUsername , sPassword from treguser where sUsername ='".$Username."' AND sPassword='".$Password."'");
$stmt->execute();
$result = $stmt->fetch(); 
print_r($result);
echo $EmailAdd = $result['sUsername'];
echo $Password = $result['sPassword'];
if($Username == $result['sUsername'] && $Password == $result['sPassword']){

	header ('Location: UserPages/UserHome.php');
}
else {
	header ('Location:UserLoginPG.php');
	//header ('Location: UserLogin.php?msg=Invalid Login');
}

?>

