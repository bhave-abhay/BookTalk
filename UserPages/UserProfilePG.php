<?php
require("UserIndexMenu.php");
session_start();
$Username = $_SESSION['Username'];
require("../DatabasePG/LibraryMSystemDB.php");
$stmt = $db->prepare("SELECT * from treguser where sUsername ='".$Username."'");
$stmt->execute();
$result = $stmt->fetchAll(); 
?>
<div class="row">
<div class="col-md-offset-3 col-sm-6 col-md-offset-3" style="opacity: 1 !important; background-color:white;padding-top:30px;" >
<table id="Std_Profile_List" class="table table-striped table-bordered display responsive nowrap" cellspacing="0" width="100%" >
<tr><th>Student Name</th><th>Birthdate</th><th>Qualification</th><th>Interests</th><th>Action</th></tr>
<?php
if(!empty($result)){

	foreach($result as $value)
	{ ?>
	<tr>
	<td><span><?php echo $value['sFName']; echo $value['sMName']; echo $value['sLName']; ?></span> </td>
	<td><span><?php echo $value['dBirthdate']; ?></span></td>
	<td><span><?php echo $value['sQualification']; ?></span></td>
	<td><span><?php echo $value['sInterests']; ?></span></td>
	<td><a href="UserUpdateProfilePG.php?id=<?php echo $value['nID'];?>">Edit</a>&nbsp;&nbsp;<a href="UserChangePW.php?id=<?php echo $value['nID']; ?>">ChangePW</a></td>
	<?php 
	} 	
}
?>
</table>
<script>
  $(document).ready(function() {
	  $('#Std_Profile_List').DataTable({    
        });
    });
</script>
</div>
</div>
</html>

