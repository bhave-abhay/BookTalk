<?php
require("UserRegDB.php");
	 echo $FName = $_POST['FName']; 
	 echo $MName = $_POST['MName']; 
	 echo $LName = $_POST['LName'];
	 echo $Birthdate = $_POST['Birthdate'];
	 echo $Qualification = $_POST['Qualification'];
	 echo $Interests= implode(",",$_POST['Interests']);
	 
     $sql = "UPDATE treguser SET sFName='$FName' ,sMName='$MName' ,sLName='$LName',dBirthdate='$Birthdate',sQualification='$Qualification' ,sInterests='$Interests' = WHERE nID=$UserId";

    // Prepare statement
    $stmt = $db->prepare($sql);

    // execute the query
    $stmt->execute();

    // echo a message to say the UPDATE succeeded
    echo $stmt->rowCount() . " records UPDATED successfully";

$db = null;
?> 
	 
