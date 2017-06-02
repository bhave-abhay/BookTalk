<?php 
 
if(isset($_GET['id']))
{ 
 echo $id=$_GET['id'];
}
require("UserRegDB.php");

//$stmt = $conn->prepare("SELECT Name,Address,Password,Email,MobileNo from employee WHERE ID='".$id."'");
//$stmt->execute();
//$result = $stmt->fetch();

$sql = "Update reguser SET IsApproved=1 WHERE UserId='".$id."'";
$stmt = $db->prepare($sql);
$stmt->execute();
echo "record status updated to approved";
$db = null;

?>