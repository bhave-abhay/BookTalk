<html>
<body>
<?php
require("AdminIndexMenu.php");
?>
<div class="row">
<div class="col-md-offset-3 col-sm-6 col-md-offset-3" style="opacity: 1 !important; background-color:white;padding-top:30px;" >
<table id="student_list" class="table table-striped table-bordered display responsive nowrap" cellspacing="0" width="100%" style="top:50;">
<tr><th>User Name</th><th>Qualification</th><th>Action</th></tr>
<?php
require("../DatabasePG/LibraryMSystemDB.php");
 
    $stmt = $db->prepare("SELECT nID ,sFName, sMName, sLName, sQualification from treguser"); 
    $stmt->execute();

    // set the resulting array to associative
    $result = $stmt->fetchAll(); 
    foreach($result as $value)
	{ ?>
	<tr>
    <td><span><?php echo $value['sFName']; ?>&nbsp;<?php echo $value['sMName']; ?>&nbsp;<?php echo $value['sLName']; ?></span> </td>
    <td><span><?php echo $value['sQualification']; ?></span></td>
	<td><a href="AdminViewUserListPG.php?id=<?php echo $value['nID']; ?>">Delete</a></td>	
    </tr> 
<?php 
} 
?>

<script>
  $(document).ready(function() {
	  $('#student_list').DataTable({    
        });
    });
</script>
</table>
</div>
<div class="row">
<?php
if(isset($_GET['id']))
{
	echo $nID = $_GET['id'];
	require("../DatabasePG/LibraryMSystemDB.php");
	$sql = "DELETE FROM treguser WHERE nID=$nID";
	$stmt = $db->prepare($sql);
	$stmt->execute();
	$db->exec($sql);
	echo "Record deleted successfully";
	$db = null;	 
}
?>
</div>
</body>
</html>