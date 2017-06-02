<html>
<body>
<?php
require("UserIndexMenu.php");
require("../DatabasePG/LibraryMSystemDB.php");
    $stmt = $db->prepare("SELECT sName, sAuthor, sCategory, dUploadDate from taddbooks"); 
    $stmt->execute();
?>
<div class="row">
<div class="col-md-offset-3 col-sm-6 col-md-offset-3" style="opacity: 1 !important; background-color:white;padding-top:30px;" >
<table id="book_List" class="table table-striped table-bordered display responsive nowrap" cellspacing="0" width="100%" >
<tr><th>Book Name</th><th>Author</th><th>Category</th><th>Upload date</th><th>Action</th></tr>
<?php
    // set the resulting array to associative
    $result = $stmt->fetchAll(); 
    foreach($result as $value)
	{ ?>
		<tr>
		<td><span><?php echo $value['sName']; ?></span> </td>
		<td><span><?php echo $value['sAuthor']; ?></span></td>
		<td><span><?php echo $value['sCategory']; ?></span></td>
		<td><span><?php echo $value['dUploadDate']; ?></span></td>
		<td><a href="DeleteDB.php?id=<?php echo $value['UserId']; ?>">Delete</a></td>
		</tr> 
<?php 
	} 
?>
</table>
<script>
  $(document).ready(function() {
	  $('#book_List').DataTable({    
        });
    });
</script>
</body>
</html>
   