<html>
<head>
<?php 
require("UserRegDB.php");
$db = new PDO("mysql:host=$servername;dbname=$dbname", $username, $password);
$db->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
echo $EmailAdd = $_POST['Email']; 
require("IndexMenu.php");
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
<form action="UserChangePWDB.php" method="post">
<div>
<table align="center">
<tr><td colspan="2"><center><h1>Registartion Form</h1></center></td></tr>
<tr>
<td>email: </td><td><input type="Email" id="txtsname" name="EmailAdd"  placeholder="Enter Email name"></td>
</tr>
<tr>
<td>New Password:</td><td><input type="text" name="NPassword" placeholder="Enter new password"></td>
</tr>
<tr>
<td>
<input type="submit" value='Update Password'"/>
</td>
</tr>      
</table>
</div>
</form>
</body>
</html>

