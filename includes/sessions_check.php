<?php
session_start();
	
	/*
	All session variables which are created 
	If user_id & u_email SESSIONS are available then do nothing if not then redirect the user to the Login Page ;)
	$_SESSION['user_email'];
	$_SESSION['user_id'];
	
	*/

if( isset($_COOKIE['user_email']) && isset($_COOKIE['user_pass']) && isset($_COOKIE['user_id']) )
{
	$_SESSION['user_email'] = $_COOKIE['user_email'];
	$_SESSION['user_id'] = $_COOKIE['user_id'];
}
else{
	
	if( empty( $_SESSION['user_email'] ) &&  empty( $_SESSION['user_id'] ))
		{
			header("location:../Login_user.php");
		}
}

?>