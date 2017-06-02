<?php
require("LibraryMSystemDB.php");
	$FName = $_POST['FName']; 
	$MName = $_POST['MName']; 
	$LName = $_POST['LName']; 
	$BirthDate = $_POST['BirthDate']; 
	$Qualification = $_POST['Qualification']; 
	$Interests= implode(",",$_POST['Interests']);  //To store multiple array value using comma
 	$EmailAdd = $_POST['EmailAdd']; 
	$Password = $_POST['txtPW'];
	$CPassword = $_POST['txtCPW'];
	$EncryptedPassword = md5($Password);

if($Password == $CPassword)
{
	// prepare sql and bind parameters
	$stmt = $db->prepare("INSERT INTO treguser (sFName, sMName, sLName, dBirthDate, sQualification , sInterests ,sUserName , sPassword) 
	VALUES (:FName, :MName , :LName , :BirthDate, :Qualification ,:Interests , :EmailAdd  , :EncryptedPassword )");
		$stmt->bindParam(':FName', $FName);
		$stmt->bindParam(':MName', $MName);
		$stmt->bindParam(':LName', $LName);
		$stmt->bindParam(':BirthDate', $BirthDate);
		$stmt->bindParam(':Qualification', $Qualification);
		$stmt->bindParam(':Interests', $Interests);
		$stmt->bindParam(':EmailAdd', $EmailAdd);
		$stmt->bindParam(':EncryptedPassword', $EncryptedPassword);
		$stmt->execute();
		
		header('Location:UserLoginPG.php');
}
else
{
	header('Location: UserRegPG.php');
	//header('Location: UserReg.php?error'); //To redirect registersubmit.php page to Register.php
}
?>