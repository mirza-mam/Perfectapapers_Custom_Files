<?php

 
if( isset( $_GET['logout_btn'] ) )
	{ 
	
	session_start();
	session_unset();
	session_destroy();
	
	//Cookie Destroy
	setcookie("user_email", "", time() - 86400 * 365 , "/" );
	setcookie("user_pass", "", time() - 86400 * 365 , "/" );
	setcookie("user_id", "", time() - 86400 * 365 , "/" );

	header("location:../Login_user.php");
	
	 }
	
?>