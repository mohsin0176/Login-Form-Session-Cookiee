<?php

if (isset($_COOKIE['email']and isset($_COOKIE['pass']))) 
{
	$email=$_COOKIE['email'];
	$password=$_COOKIE['password'];

	echo "<script> 
	alert("$email");
	document.getElementById('email').value='$email';
	document.getElementById('password').value='$password';
	 </script>";
}

?>

<style type="text/css">
	th
	{
		text-align: right;
	}
	h3
	{
		text-align: center;
	}
</style>
<table cellpadding="5" cellspacing="10" align="center">

	<h3>Login Form Using and cookies with Remember Me</h3>
	<form method="POST" action="validate.php">
<tr><th>Email</th><td><input type="text" id="email" name="email"></td></tr>
<tr><th>Password</th><td><input type="password" id="password" name="password"></td></tr>
<tr><td colspan="2" align="center"><input type="checkbox" name="remember" value="1">Remember Me</td></tr>
<tr><td colspan="2" align="right"><input type="submit"  value="login" name="login"></td></tr>
	</form>
	
</table>