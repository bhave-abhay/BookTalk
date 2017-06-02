<!DOCTYPE html>
<?php
require("IndexMenu.php");
?>
<body>
	<div class="row" style="background: url('images/UsrRegBG.jpg') no-repeat center /cover; width: 100%;">
		<form action="DatabasePG/UserRegInsertDB.php" method="POST" class="form-horizontal" >
		<div class="row"><div class="col-md-offset-3 col-sm-6 col-md-offset-3" style="opacity: 1 !important; background-color:white">
		<div class="row"><h1 class="control-label col-sm-9">User registration Form</h1></div>
		<br/>
		<div class="form-group" align="center">
		<label class="control-label col-sm-4" for="FName"> First Name:</label>
		<div class="col-sm-5">
		<input type="text" class="form-control" id="txtsname" name="FName" required placeholder="Enter First name" onkeypress="return onlyAlpha(event,this);">
		</div>
		</div>
		<div class="form-group" align="center">
		<label class="control-label col-sm-4" for="MName"> Middle Name:</label>
		<div class="col-sm-5">
		<input type="text" class="form-control" placeholder="Enter Middle name" name="MName" onkeypress="return onlyAlpha(event,this);">
		</div>
		</div>
		<div class="form-group" align="center">
		<label class="control-label col-sm-4" for="LName"> Last Name:</label>
		<div class="col-sm-5">
		<input type="text" class="form-control" name="LName" placeholder="Enter Last name" onkeypress="return onlyAlpha(event,this);" required>
		</div>
		</div>
		<div class="form-group" align="center">
		<label class="control-label col-sm-4" for="BirthDate"> BirthDate:</label>
		<div class="col-sm-5">
		<input type="date" class="form-control" name="BirthDate" placeholder="Enter BirthDate">
		</div>
		</div>
		<div class="form-group" align="center">
		<label class="control-label col-sm-4" for="Qualification">Qualification:</label>
		<div class="col-sm-5">
		<input type="text" class="form-control" name="Qualification" placeholder="Enter qualification">
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
		<div class="form-group" align="center">
		<label class="control-label col-sm-4" for="EmailAdd"> Email address/UserID:</label>
		<div class="col-sm-5">
		<input type="email" class="form-control" placeholder="eg.abc@gmail.com" name="EmailAdd" required>
		</div>
		</div>

		<div class="form-group" align="center">
		<label class="control-label col-sm-4" for="Password"> Password:</label>
		<div class="col-sm-5">
		<input type="password" class="form-control" placeholder="Enter password" id="PW" name="txtPW" required>
		</div>
		</div>

		<div class="form-group" align="center">
		<label class="control-label col-sm-4" for="Password"> Confirm Password:</label>
		<div class="col-sm-5">
		<input type="password" class="form-control" placeholder="Enter password" id="CPW" name="txtCPW" required>
		</div>
		</div>
		<div class="form-group"> 
		<div class="col-sm-offset-4 col-sm-5">
		<button type="submit" class="btn btn-success" onClick="chkpassword()">Submit</button>
		</div>
		</div>
		</div>
		</div>
	</div>
</form>
</body>
<script type="text/javascript" src="js/UserRegValidation.js"></script>
</html>

