<?php
require("../AdminPages/AdminIndexMenu.php");
require("LibraryMSystemDB.php");

      
		$BookName=$_POST['BookName'];
		echo $BookName;
		echo "<br>";
		$Author=$_POST['Author'];
		echo $Author;
		echo "<br>";
		$Category=$_POST['Category'];
		echo $Category;
		echo"<br>";
		$UploadDate=$_POST['UploadDate'];
		echo $UploadDate;
		echo "<br>";
		
		
 $stmt= $db->prepare("INSERT INTO taddbooks(sName,sAuthor,sCategory,dUploadDate) VALUES('$BookName','$Author','$Category','$UploadDate')"); 
 $stmt->execute();
 echo "<br>Book Added Successfully";
 ?>