<?php

 
if( isset( $_GET['logout_btn'] ) )
	{ 
	
	session_start();
	session_unset();
	session_destroy();
	
	//Cookie Destroy
	setcookie("user_email", "", time() - 86400 * 365 , "/" );
	setcookie("user_id", "", time() - 86400 * 365 , "/" );
	setcookie("role_id", "", time() - 86400 * 365 , "/" );

	header("location:../login_form.php");
	
	 }
	
?>