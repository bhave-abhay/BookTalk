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
function onlyAlpha(e, t) 
{
	if (window.event) 
    {
		var charCode = window.event.keyCode;
    }
	else if (e) 
	{
		var charCode = e.which;
	}
	else 
	{ 
		return true; 
	}
	return ((charCode > 64 && charCode < 91) || (charCode > 96 && charCode < 123))

}
function onlyNumbers(e, t) 
{
	if (window.event) 
	{
		var charCode = window.event.keyCode;
	}
	else if (e) 
	{
		var charCode = e.which;
	}
	else 
	{
        return true;
	}
    return ((charCode >= 48 && charCode <= 57))

}