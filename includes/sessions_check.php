<?php
session_start();
/*
	All session variables which are created 
	If user_id, u_email & role_id SESSIONS are available then do nothing. If not available then redirect the user to the Login Page ;)
	$_SESSION['user_email'];
	$_SESSION['user_id'];
	$_SESSION['role_id']
*/
if (isset($_COOKIE['user_email']) && isset($_COOKIE['user_id']) && isset($_COOKIE['role_id'])) {
	$_SESSION['user_email'] = $_COOKIE['user_email'];
	$_SESSION['user_id'] = $_COOKIE['user_id'];
	$_SESSION['role_id'] = $_COOKIE['role_id'];
} else {
	if (empty($_SESSION['user_email']) &&  empty($_SESSION['user_id']) && empty($_SESSION['role_id'])) {
		header("location:../login_form.php");
	}
}
