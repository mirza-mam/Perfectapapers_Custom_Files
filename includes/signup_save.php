<?php
include_once("signup.php");

if( isset( $_POST['btn_signup'] ) || isset( $_POST['order_now_signup_btn'] ) )
	{ 
	$obj = new signup;
	
	$obj->insert_data();
	}

?>