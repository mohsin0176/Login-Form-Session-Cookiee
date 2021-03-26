<?php

session_start();
session_destroy();
setcookie('email',$email,time()-1);
setcookie('password',$password,time()-1);
echo "You Suucessfully Logout.click Here to<a href='login.php'>Login</a>";
?>