<?php
session_start();

   
/*  
    This piece of Code will only Check that if the USER had clicked the Remember Me option 
    while Signing/Logging Up then the USER will be directly re-directed towards his/her 
    DASHBOARD instead of Logging Up again.
*/
if( isset($_COOKIE['user_email']) && isset($_COOKIE['user_id']) && isset($_COOKIE['role_id']) )
{
	

	switch($_COOKIE['role_id']){
		//If User's role_id == 0 then user will be redirected to the User Dashboard
		case 0:
			echo "<script> window.location.replace('User-Dashboard/user-dashboard-index.php'); </script>";
			exit;
			//If User's role_id == 1 then user will be redirected to the Employee Dashboard
		case 1:
			echo "<script> window.location.replace('Emp-Dashboard/emp-dashboard-index.php'); </script>";
			exit;
			//If User's role_id == 2 then user will be redirected to the Admin Dashboard
		case 2:
			echo "<script> window.location.replace('Admin-Dashboard/admin-dashboard-index.php'); </script>";
			exit;
	}
}


?>