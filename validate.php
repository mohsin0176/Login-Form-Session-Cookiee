<?php

$myemail="dshani@yahoo.com";
$mypass="12345";

if (isset($_POST['login'])) 
{

	$email=$_POST['email'];
	$pass=$_POST['password'];
	$rem=$_POST['remember'];
	if ($email==$myemail and $pass==$mypass) 
	{
		if (isset($_POST['remember'])) {
			setcookie('email',$email,time()+60*60*7);
			setcookie('password',$password,time()+60*60*7);							}
			session_start();
			$_SESSION['email']=$email ;
			$_SESSION['password']=$password ;
			header("Location:welcome.php");
		}
	
	else
	{
		echo "Email or Password is Invalid.<br>Click Here to <a href='login.php'> try again</a>";
	}
}
else
{
	header("Location:login.php");
}

?>