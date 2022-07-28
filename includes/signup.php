<?php
include_once("super_person.php");

class signup extends super_person
{

	//Defining this abstract function
	public function insert_data()
	{
		// filter_var() Fucntion is Used to remove all the illegal Characters from User Input
		$this->name = filter_var($_POST['user_name'], FILTER_SANITIZE_STRING);
		$this->contact =  filter_var($_POST['user_contact'], FILTER_SANITIZE_STRING);
		$this->email =   filter_var($_POST['user_email'], FILTER_VALIDATE_EMAIL);
		$this->pass =  trim(filter_var($_POST['user_password'], FILTER_SANITIZE_STRING));

		try {
			$q_result = $this->run_query("SELECT * FROM users_tbl WHERE user_email = '$this->email'");
			if (!$q_result) {
				throw new Exception("Error In Signing Up");
			}
			if (mysqli_num_rows($q_result) > 0) {
				echo "Sorry someone is already registered with this email, Use a different one.";
			} else {
				// Creating Password Hash
				$pass_hash = password_hash($this->pass, PASSWORD_ARGON2I);
				$role_id = (isset($_POST['insert_new_emp_btn'])) ? 1 : 0;

				$q_result = $this->run_query("INSERT INTO users_tbl(user_name,user_email,user_password,user_contact,role_id) VALUES ( '$this->name' , '$this->email' , '$pass_hash' , '$this->contact' , '$role_id')");

				if ($q_result) {
					if (isset($_POST['user_signup_remember_me'])) {
						setcookie("user_email", $this->email, time() + 86400 * 60, "/");
						setcookie("user_id", $this->sp_last_id, time() + 86400 * 60, "/");
						setcookie("role_id", $role_id, time() + 86400 * 60, "/");
					}

					$_SESSION['user_email'] = $this->email;
					$_SESSION['user_id'] = $this->sp_last_id;
					$_SESSION['role_id'] = $role_id;

					/*
					The following code will moniter the URL of User if the user Sign's Up from the main Sign Up page user will be redirected towards user-dashboard-index.php if user Sign's up from the Order Now page then user will be redirected towards the Payment Processing API Page
					*/
					if (isset($_POST['btn_signup'])) {
						//header("location:../User-Dashboard/user-dashboard-index.php");
						echo "<script> window.location.replace('/Perfectapapers_Custom_Files/User-Dashboard/user-dashboard-index.php'); </script>";
						exit;
					} elseif (isset($_POST['insert_new_emp_btn'])) {
						echo "Added Successfully";
						exit;
					} else {
						/*If user sign's up from the order now page then he will be
						 redirected to the "review_order_pg"*/
						$_SESSION['order_now_signup_btn'] = $_POST['order_now_signup_btn'];
						echo "<script> window.location.replace('../review_order_pg.php'); </script>";
						exit;
					}
				} else {
					throw new Exception("Signup Failed!");
				}
			}
		} catch (Exception $exc) {
			echo $exc->getMessage();
		}
	}

	//Abstract functions must have a body in child classes otherwise a Fatal error would be generated
	public function check_data()
	{
	}
	public function update_data()
	{
	}
	public function delete_data()
	{
	}
};
