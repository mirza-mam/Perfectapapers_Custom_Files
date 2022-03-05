<?php
include_once("super_person.php");

class fetch_and_show extends super_person
{

	protected $email;
	protected $u_id;


	/* This __construct function is created so when ever a developer creates an object of Class fetch_and_show he will through user email & id during the time of instant creation & then this information is stored in data members for later use */
	public function __construct($given_email, $given_u_id)
	{
		$this->email = $given_email;
		$this->u_id = $given_u_id;
	}

	/* This function is used to fetch & return user's data for easily displaying it on front pages */
	public function show_data()
	{

		$q_result = $this->run_query("SELECT * FROM users_tbl WHERE user_email = '$this->email' && user_id = '$this->u_id'");

		$data_fetched_in_row = mysqli_fetch_assoc($q_result);

		return ($data_fetched_in_row);
	}

	/* This function is used to fetch & return Order's Data with respect to their Status & user's ID */
	public function show_orders_data($given_status)
	{

		$q_result = $this->run_query("SELECT * FROM order_tbl WHERE u_id = '$this->u_id' && order_status = '$given_status'");

		return ($q_result);
	}

	/* This function is used to fetch & return Recent Orders Data */
	public function show_recent_orders()
	{

		//$given_limit_of_recent_orders = It was used as function Parameter
		/*$q_result = $this->run_query("SELECT * FROM order_tbl ORDER BY order_id DESC LIMIT $given_limit_of_recent_orders "); */
		$q_result = $this->run_query("SELECT * FROM order_tbl ORDER BY order_id DESC");

		return ($q_result);
	}

	/* This function is used to fetch & return User's Data with respect to the given User ID */
	public function show_this_id_data($given_id)
	{

		$q_result = $this->run_query("SELECT * FROM users_tbl WHERE user_id = '$given_id'");

		$data_fetched_in_row = mysqli_fetch_assoc($q_result);

		return ($data_fetched_in_row);
	}

	/* This function is used to fetch & return all data of any given value */
	public function show_all_data($given_val)
	{
		if ($given_val == "AvailableLeads") {
			$q_result = $this->run_query("SELECT * FROM available_leads");
		} else if ($given_val == "Completed" || $given_val == "InProgress" || $given_val == "Revisions") {
			$q_result = $this->run_query("SELECT * FROM order_tbl WHERE order_status = '$given_val'");
		} else if ($given_val == "UnPaid") {
			$q_result = $this->run_query("SELECT * FROM temp_order_tbl WHERE payment_status = '$given_val'");
		} else if ($given_val == 0 || $given_val == 1) {
			$q_result = $this->run_query("SELECT * FROM users_tbl WHERE role_id = '$given_val'");
		} else if ($given_val == "TotalOrders") {
			$q_result = $this->run_query("SELECT * FROM order_tbl");
		}
		return ($q_result);
	}

	//Abstract functions must have a body in child classes otherwise a Fatal error would be generated
	public function check_data()
	{
	}

	public function insert_data()
	{
	}
	public function update_data()
	{
	}
	public function delete_data()
	{
	}
};
