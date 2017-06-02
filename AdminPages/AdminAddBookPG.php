<html>
<?php
require("AdminIndexMenu.php");
?>
<div class="row">
<div class="col-sm-6">
<img src="../images/AddBookBG.jpg" alt="" width="700" height="400"> 
</div>
<div class="col-sm-6">
<body>
<form action="../DatabasePG/AddBookDB.php" method="post" class="form-horizontal">
<div class="row">
<h1 class="control-label col-sm-7">Add books</h1>
</div>
<br/>
<div class="form-group" align="center">
<label class="control-label col-sm-4" for="BookName">Book Name:</label>
<div class="col-sm-5">
<input type="text" class="form-control" placeholder="Enter book name"  name="BookName"">
</div>
</div>


<div class="form-group" align="center">
<label class="control-label col-sm-4" for="Author">Author:</label>
<div class="col-sm-5">
<input type="text" class="form-control" placeholder="Enter Author" name="Author">
</div>
</div>

<div class="form-group" align="center">
<label class="control-label col-sm-4" for="Category">Category(select one):</label>
<div class="col-sm-5">
      <select class="form-control" id="Category" name="Category">
	  <option value="" disabled="disabled" selected="selected">Please select Category</option>
       <option value="Autobiography">Autobiography</option>
	   <option value="Fiction">Fiction</option>
	   <option value="Mystery">Mystery</option>
       <option value="Science">Science</option>
       <option value="Comic">Comic</option>
       <option value="Drama">Drama</option>
      </select>
</div>
</div>

<div class="form-group" align="center">
<label class="control-label col-sm-4" for="BirthDate">Date:</label>
<div class="col-sm-5">
<input type="date" class="form-control" name="UploadDate" placeholder="Enter date">
</div>
</div>

<div class="form-group"> 
<div class="col-sm-offset-4 col-sm-5">
<button type="submit" class="btn btn-success" value="Login">Submit</button>
</div>
</div>
</div>
</form>
</body>
<div>
</div>
</html>