<?php

class connection
{

	private $con;
	private $con_last_id;

	public function connect_db()
	{
		/* For Localhost */
		//  $this->con	= new MySQLi('localhost','root','','perfect2_custom_db');
		/* For Live DB  */
		$this->con = new MySQLi('localhost', 'perfect2_custom_admin', '&KL={u_Ic6;F', 'perfect2_custom_db');
		if ($this->con) {
			return $this->con;
		} else {
			die("Error in connecting with the Database" . mysqli_connect_error());
			$this->con->close();
		}
	}

	//When this Function is executed after mysqli_query() it automatically Fetches the last inserted ID :)
	public function get_last_inserted_id()
	{
		$this->con_last_id = $this->con->insert_id;
		return $this->con_last_id;
	}
}
