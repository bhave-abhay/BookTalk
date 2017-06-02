<?php
require("IndexMenu.php");
?>
<body>
<div class="row" style="background:transparent url('images/UserLoginBG.jpg') no-repeat center /cover; width: 100%;">
<div class="row"><div class="col-md-offset-1 col-sm-6 col-md-offset-1" style="opacity: 1 !important; background-color:white">
<form action="UserCheckLoginDB.php" method="post" class="form-horizontal" >
<div class="row">
<h1 class="control-label col-sm-7">User Login</h1>
</div>
<br/>
<div style="text-align:center">
<div class="form-group" align="center">
<label class="control-label col-sm-4" for="UName">Email address/UserID:</label>
<div class="col-sm-5">
<input type="email" class="form-control" placeholder="eg.abc@gmail.com" name="Username">
</div>
</div>
<div class="form-group" align="center">
<label class="control-label col-sm-4" for="Password">Password:</label>
<div class="col-sm-5">
<input type="password" class="form-control" placeholder="Enter password" id="PW" name="txtPW">
</div>
</div>
<div class="form-group"> 
<div class="col-sm-offset-4 col-sm-5">
<button type="submit" class="btn btn-success" value="Login">Submit</button>
</div>
</div>
</div>
</form>
</div>
</div>
</div>
</body>
<?php
require("Footer.php");
?>
</html>
