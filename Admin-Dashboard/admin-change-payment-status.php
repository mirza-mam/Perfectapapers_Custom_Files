<?php
include_once("../includes/administrator.php");

		//echo $_POST['order_id'];

		if( isset($_POST['order_id']) )
		{			
			$obj = new administrator;
			$response = $obj->update_order_payment_status();
			
			echo $response;
	
		}
		
	

?>