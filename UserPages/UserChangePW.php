<?php 
if(isset($_GET['id']))
{
	 $UserId = $_GET['id'];
}
require("../DatabasePG/LibraryMSystemDB.php");
$stmt = $db->prepare("SELECT sUsername,sPassword from treguser where nID =".$UserId);
$stmt->execute();
$result = $stmt->fetch();//(PDO::FETCH_ASSOC);
$sUsername= $result['sUsername'];
$Password= $result['sPassword'];
require("UserIndexMenu.php");
?>
<script>
function chkpassword() 
{
        var pw = document.getElementById('PW').value;
        var cpw = document.getElementById('CPW').value;
        if (pw !== cpw) 
		{
            alert("Password do not match");
            return false;
        }
        return true;
}
</script>
</head>
<body>
<form action="../DatabasePG/UserChangePWDB.php" method="POST" class="form-horizontal">
<div class="row">
<h1 class="control-label col-sm-7">Change Password</h1>
</div>
<br/>
<div class="form-group" align="center">
<label class="control-label col-sm-4" for="UName">Email address/UserID:</label>
<div class="col-sm-5">
<input type="email" class="form-control" value='<?php echo  $sUsername; ?>' sssplaceholder="eg.abc@gmail.com" name="Username">
</div>
</div>

<div class="form-group" align="center">
<label class="control-label col-sm-4" for="Password">Current Password:</label>
<div class="col-sm-5">
<input type="password" class="form-control" placeholder="Enter password" id="OPW" name="txtOPW">
</div>
</div>

<div class="form-group" align="center">
<label class="control-label col-sm-4" for="Password">new Password:</label>
<div class="col-sm-5">
<input type="password" class="form-control" placeholder="Enter password" id="NPW" name="txtNPW">
</div>
</div>
<div class="form-group"> 
<div class="col-sm-offset-4 col-sm-5">
<button type="submit" class="btn btn-success" value="Login">Submit</button>
</div>
</div>
<br/>
<br/>
<br/>
<br/>
<br/>
<br/>
<br/>
<br/>
<br/>
</form>
</body>
</html>

