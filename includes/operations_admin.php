<?php
include_once("administrator.php");

$obj = new administrator;

// echo $_POST['operation']; exit;

if ($_POST['operation'] == "del_AvailableLeads_row") {

	$response = $obj->del_AvailableLeads_row();
	echo $response;

} elseif ($_POST['operation'] == "change_r_order_payment_status") {

	$response = $obj->change_r_order_payment_status();
	echo $response;
	
} elseif ($_POST['operation'] == "change_order_status") {

	$response = $obj->change_order_status();
	echo $response;
	
}


