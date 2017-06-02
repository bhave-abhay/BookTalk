<html>
<body>
<?php
require("UserIndexMenu.php");
?>
<div class="row">
<div class="col-md-offset-3 col-sm-6 col-md-offset-3" style="opacity: 1 !important; background-color:white;padding-top:30px;" >

<table id="student_list" class="table table-striped table-bordered display responsive nowrap" cellspacing="0" width="100%" style="top:50;">
<tr></th><th>User Name</th><th>Qualification</th></tr>
<?php
require("../DatabasePG/LibraryMSystemDB.php");
 
    $stmt = $db->prepare("SELECT sFName, sMName, sLName, sQualification from treguser"); 
    $stmt->execute();

    // set the resulting array to associative
    $result = $stmt->fetchAll(); 
    foreach($result as $value)
	{ ?>
	<tr>
    <td><span><?php echo $value['sFName']; echo $value['sMName'];echo $value['sLName']; ?></span> </td>
    <td><span><?php echo $value['sQualification']; ?></span></td>
    </tr> 
<?php 
} 
?>
</table>
</div>
</div>
</body>
</html>