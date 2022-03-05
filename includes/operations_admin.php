<?php
include_once("administrator.php");

$obj = new administrator;

if ($_POST['operation'] == "del_AvailableLeads_row") {
	$response = $obj->del_AvailableLeads_row();
	echo $response;
} elseif ($_POST['operation'] == "change_r_order_payment_status") {
	$response = $obj->change_r_order_payment_status();
	echo $response;
} elseif ($_POST['operation'] == "del_r_order") {
	$response = $obj->del_r_order();
	echo $response;
} elseif ($_POST['operation'] == "del_c_order") {
	$response = $obj->del_c_order();
	echo $response;
} elseif ($_POST['operation'] == "del_ip_order") {
	$response = $obj->del_ip_order();
	echo $response;
} elseif ($_POST['operation'] == "change_order_status") {
	$response = $obj->change_order_status();
	echo $response;
}
