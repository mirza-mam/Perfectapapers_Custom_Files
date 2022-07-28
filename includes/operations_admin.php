<?php
include_once("administrator.php");
include_once("signup.php");

$obj = new administrator;
$obj_signup = new signup;

// isset($_POST['admin_inserting_emp_data'])
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
} elseif ($_POST['operation'] == "del_sales_men") {
	$response = $obj->del_sales_men();
	echo $response;
} elseif ($_POST['operation'] == "change_order_status") {
	$response = $obj->change_order_status();
	echo $response;
} elseif ($_POST['operation'] == "insert_new_emp") {
	$response = $obj_signup->insert_data();
	echo $response;
}
