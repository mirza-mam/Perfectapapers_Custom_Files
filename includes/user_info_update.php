<?php
include_once("user.php");

if( isset( $_POST['user_update_btn'] ) )
	{ 

	$obj = new user;
	
	$obj->update_data();
	

	}

?>


