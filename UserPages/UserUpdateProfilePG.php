<html>
<head>
<script type="text/javascript" src="js/UserRegValidation.js"></script>
</head>
<?php 
if(isset($_GET['id']))
{
	 echo $UserId = $_GET['id'];
}
require("../DatabasePG/LibraryMSystemDB.php");
$stmt = $db->prepare("SELECT * from treguser where nID =".$UserId);
$stmt->execute();
$result = $stmt->fetch();//(PDO::FETCH_ASSOC);
echo $FName= $result['sFName'];
echo $MName= $result['sMName'];
echo $LName= $result['sLName'];
echo $Address= $result['dBirthdate'];
echo $Qualification= $result['sQualification'];
echo $Interests= $result['sInterests'];
require("UserIndexMenu.php");
?>
<body>
<div class="row">
		<form action="../DatabasePG/UserUpdateProfileDB.php" method="POST" class="form-horizontal" >
		
		<div class="row"><h1 class="control-label col-sm-9">User registration Form</h1></div>
		<br/>
		<div class="form-group" align="center">
		<label class="control-label col-sm-4" for="FName"> First Name:</label>
		<div class="col-sm-5">
		<input type="text" class="form-control" id="txtsname" value='<?php echo  $sFName; ?>' name="FName" required placeholder="Enter First name" onkeypress="return onlyAlpha(event,this);">
		</div>
		</div>
		<div class="form-group" align="center">
		<label class="control-label col-sm-4" for="MName"> Middle Name:</label>
		<div class="col-sm-5">
		<input type="text" class="form-control" placeholder="Enter Middle name" value='<?php echo  $sFMame; ?>' name="MName" onkeypress="return onlyAlpha(event,this);">
		</div>
		</div>
		<div class="form-group" align="center">
		<label class="control-label col-sm-4" for="LName"> Last Name:</label>
		<div class="col-sm-5">
		<input type="text" class="form-control" name="LName" value='<?php echo  $sFLame; ?>' placeholder="Enter Last name" onkeypress="return onlyAlpha(event,this);" required>
		</div>
		</div>
		<div class="form-group" align="center">
		<label class="control-label col-sm-4" for="BirthDate"> BirthDate:</label>
		<div class="col-sm-5">
		<input type="date" class="form-control" value='<?php echo  $dBirthdate; ?>' name="BirthDate" placeholder="Enter BirthDate">
		</div>
		</div>
		<div class="form-group" align="center">
		<label class="control-label col-sm-4" for="Qualification">Qualification:</label>
		<div class="col-sm-5">
		<input type="text" class="form-control" value='<?php echo  $sQualification; ?>' name="Qualification" placeholder="Enter qualification">
		</div>
		</div>
		<div class="form-group" align="center">
		<label class="control-label col-sm-4" for="Interests">Interests:</label>
		<div class="col-sm-5">
		<table>
		<tr>
		 <td><input type="checkbox" name="Interests[]" value="Autobiography">Autobiography
		  <input type="checkbox" name="Interests[]" value="Fiction">Fiction
		 <input type="checkbox" name="Interests[]" value="Mystery">Mystery
		   <input type="checkbox" name="Interests[]" value="Science">Science
		  <input type="checkbox" name="Interests[]" value="Comic">Comic
		 <input type="checkbox" name="Interests[]" value="Drama">Drama</td>
		   </tr>
		   </table>
		</div>
		</div>	
		<div class="form-group"> 
		<div class="col-sm-offset-4 col-sm-5">
		<button type="submit" class="btn btn-success">Update</button>
		</div>
		</div>	
	</div>
</form>
</body>
</html>