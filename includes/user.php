<?php
include_once("super_person.php");

class user extends super_person
{
	public function fetch_latest_order_details()
	{
		/* This Query will return the Details of Latest Placed Order */
		$fetch_latest_order_details_query = $this->run_query("SELECT * FROM unpaid_order_tbl WHERE order_id=(SELECT MAX(order_id) FROM unpaid_order_tbl)");
		return mysqli_fetch_assoc($fetch_latest_order_details_query);
	}

	//Defining this abstract function
	public function update_data()
	{
		$this->name =  $this->filter_data($_POST['user_name']);
		$this->email =  $this->filter_data($_POST['user_email']);
		$this->pass =  $this->filter_data($_POST['user_password']);
		if (empty($this->name) && !empty($this->pass)) {
			$q_result = $this->run_query("UPDATE users_tbl SET user_password = '$this->pass' WHERE user_email = '$this->email'");
		} else if (!empty($this->name) && empty($this->pass)) {
			$q_result = $this->run_query("UPDATE users_tbl SET user_name = '$this->name' WHERE user_email = '$this->email'");
		} else if (!empty($this->name) && !empty($this->pass)) {
			$q_result = $this->run_query("UPDATE users_tbl SET user_name = '$this->name' , user_password = '$this->pass' WHERE user_email = '$this->email'");
		} else {
			echo "Nothing updated. <br>";
		}

		if (isset($q_result)) {
			echo "Data updated successfully.";
		} else {
			echo "Not updated successfully.";
		}
	}

	//Defining this Abstract function
	public function insert_data()
	{
		$receivedDate = strtotime($_SESSION['arr_of_user_order_data']['user_deadline_date_price_form']);
		$newDateFormat = date('y-m-d', $receivedDate);
		//US/Central or Asia/Karachi
		date_default_timezone_set('Asia/Karachi');
		//echo date_default_timezone_get();
		$order_placing_time = date("H:i:s");
		$order_placing_date = date("y:m:d");
		$q_result = $this->run_query("INSERT INTO unpaid_order_tbl 
		 (u_id,
		 doc_type,
		 academic_lvl, 
		 no_of_pages, 
		 order_placing_date, 
		 order_placing_time, 
		 deadline_time, 
		 deadline_date, 
		 order_price, 
		 title, 
		 subject, 
		 citation_style, 
		 no_of_sources, 
		 description, 
		 attach_file, 
		 order_status, 
		 payment_status)
		 VALUES 
		 ( '{$_SESSION['user_id']}' , 
		 '{$_SESSION['arr_of_user_order_data']['user_document_type_price_form']}' ,
		 '{$_SESSION['arr_of_user_order_data']['user_academic_level_price_form']}' ,
		 '{$_SESSION['arr_of_user_order_data']['user_number_of_pages_price_form']}' ,
		 '$order_placing_date' ,
		 '$order_placing_time' ,
		 '{$_SESSION['arr_of_user_order_data']['user_deadline_time_price_form']}' ,
		 '$newDateFormat' , 
		 '{$_SESSION['arr_of_user_order_data']['user_tp_inputField']}' , 
		 '{$_SESSION['arr_of_user_order_data']['user_assignment_title']}' , 
		 '{$_SESSION['arr_of_user_order_data']['user_document_type']}' , 
		 '{$_SESSION['arr_of_user_order_data']['user_citation_style']}' , 
		 '{$_SESSION['arr_of_user_order_data']['user_sources']}' , 
		 '{$_SESSION['arr_of_user_order_data']['user_assignment_description']}' , 
		 'Empty For Now' , 
		 'Pending' ,
		 'UnPaid' )");

		if ($q_result) {
			/* This Query will return all information of the User who placed the order */
			/*$fetch_query = $this->run_query("SELECT * FROM users_tbl WHERE user_id = '{$arr_of_user_order_data['user_id']}'");*/

			//Unset this Session to Free Up Space
			unset($_SESSION['arr_of_user_order_data']);
			$fetch_query = $this->run_query("SELECT * FROM users_tbl WHERE user_id = '{$_SESSION['user_id']}'");
			return mysqli_fetch_assoc($fetch_query);
		} else {
			echo "Order Not Placed";
		}
	}

	//For saving available leads data
	public function insert_available_leads($arr_of_user_available_leads_data)
	{
		// strtotime()
		$receivedDate = strtotime($arr_of_user_available_leads_data['user_deadline_date_price_form']);
		$newDateFormat = date('y-m-d', $receivedDate);
		//US/Central or Asia/Karachi
		date_default_timezone_set('Asia/Karachi');
		//echo date_default_timezone_get();
		$order_placing_time = date("H:i:s");
		$order_placing_date = date("y:m:d");
		// First check that if this USER is already in our 'available_leads' table then we should'nt have to 
		// bother to save his/her Data again
		$q_result = $this->run_query("SELECT * FROM available_leads WHERE user_email = '{$arr_of_user_available_leads_data['user_email_price_form']}' ");

		if (mysqli_num_rows($q_result) > 0) {
			// echo "Already available";
		} else {
			$q_result = $this->run_query("INSERT INTO available_leads 
		(user_email,
		doc_type,
		academic_lvl, 
		no_of_pages, 
		deadline_time, 
		deadline_date,
		user_contact_code, 
		user_contact, 
		order_placing_date, 
		order_placing_time)
		VALUES 
		( '{$arr_of_user_available_leads_data['user_email_price_form']}' , 
		'{$arr_of_user_available_leads_data['user_document_type_price_form']}' ,
		'{$arr_of_user_available_leads_data['user_academic_level_price_form']}' ,
		'{$arr_of_user_available_leads_data['user_number_of_pages_price_form']}' ,
		'{$arr_of_user_available_leads_data['user_deadline_time_price_form']}' ,
		'$newDateFormat' , 
		'{$arr_of_user_available_leads_data['user_contact_code_price_form']}' , 
		'{$arr_of_user_available_leads_data['user_contact_price_form']}' ,
		'$order_placing_date' , 
		'$order_placing_time'
		 )");

			if ($q_result) {
				// echo "Available Leads Data Inserted";
			} else {
				// echo "Available Leads Data Not Inserted";
			}
		}
	}

	//Abstract functions must have a body in child classes otherwise a Fatal error would be generated
	public function check_data()
	{
	}
	public function delete_data()
	{
	}
};
