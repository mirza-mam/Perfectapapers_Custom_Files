<?php
include_once("login.php");

if( isset( $_POST['order_now_login_btn'] ) || isset( $_POST['login_form_btn'] ) )
	{ 
	$obj = new login;
	
	$obj->check_data();
	}

?>


