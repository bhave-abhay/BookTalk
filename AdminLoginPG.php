<?php
require("IndexMenu.php");
?>
<div class="row" style="background:transparent url('images/UserLoginBG.jpg') no-repeat center center /cover">
<body>
<form action="AdminLoginCheckDB.php" method="post" class="form-horizontal">
<div class="row">
<h1 class="control-label col-sm-7">Admin Login</h1>
</div>
<br/>
<div class="form-group" align="center">
<label class="control-label col-sm-4" for="FName">Email address/UserID:</label>
<div class="col-sm-5">
<input type="text" class="form-control" placeholder="Enter user name" name="Username">
</div>
</div>

<div class="form-group" align="center">
<label class="control-label col-sm-4" for="FName">Password:</label>
<div class="col-sm-5">
<input type="password" class="form-control" placeholder="Enter password" id="PW" name="txtPW">
</div>
</div>

<div class="form-group"> 
<div class="col-sm-offset-4 col-sm-5">
<button type="submit" class="btn btn-success" value="Login">Submit</button>
</div>
</div>
</form>
</body>
<br/>
<br/>
<br/>
<br/>
<br/>
<br/>
<br/>
<br/>
</div>
<?php
require("Footer.php");
?>
</html>

