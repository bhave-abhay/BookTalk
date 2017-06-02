<html>
<head>
<form>
<?php
require("AdminIndexMenu.php");
if(isset($_GET['id']))
{
	 echo $nID = $_GET['id'];
}
require("../DatabasePG/LibraryMSystemDB.php");

$sql = "DELETE FROM taddbooks WHERE nID=$nID";
$stmt = $db->prepare($sql);
$stmt->execute();
$db->exec($sql);
echo "Record deleted successfully";
$db = null;

?>
</form>
</head>
</html>