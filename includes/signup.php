<?php 
session_start();
include_once("super_person.php");

class signup extends super_person{
	
	//Defining this abstract function
	public function insert_data(){
		
		$this->name =  $this->filter_data($_POST['user_name']);
		$this->contact =  $this->filter_data($_POST['user_contact']);
		$this->email =  $this->filter_data($_POST['user_email']);
		$this->pass =  $this->filter_data($_POST['user_password']);
		
		$q_result = $this->run_query( "SELECT * FROM users_tbl WHERE user_email = '$this->email'");
		
		if( mysqli_num_rows($q_result) > 0)
		{
			echo "Sorry you are already registered with this email, Use a different one.";
		}
		else{
			
			$q_result = $this->run_query("INSERT INTO users_tbl(user_name,user_email,user_password,user_contact,role_id) VALUES ( '$this->name' , '$this->email' , '$this->pass' , '$this->contact' , '0')");
		

				if( $q_result )
				{				
	
					if( isset( $_POST['user_signup_remember_me'] ) )
					{
				
						setcookie("user_email", $this->email, time() + 86400 * 60 , "/" );
						setcookie("user_pass", $this->pass, time() + 86400 * 60 , "/" );
						setcookie("user_id", $this->sp_last_id, time() + 86400 * 60 , "/" );
						
					}

					
					$_SESSION['user_email'] = $this->email;
					$_SESSION['user_id'] = $this->sp_last_id;
					$_SESSION['role_id'] = "0";
					
					
					/*
					The following code will moniter the URL of User if the user Sign's Up from the main Sign Up page user will be redirected towards user-dashboard-index.php if user Sign's up from the Order Now page then user will be redirected towards the Payment Processing API Page
					*/
					if( isset($_POST['btn_signup']) )
					{
						//header("location:../User-Dashboard/user-dashboard-index.php");
						echo "<script> window.location.replace('../User-Dashboard/user-dashboard-index.php'); </script>";
						exit;
					}
					else{

						/*If user sign's up from the order now page then he will be
						 redirected to the "review_order_pg"*/
						
						$_SESSION['order_now_signup_btn'] = $_POST['order_now_signup_btn'];
						echo "<script> window.location.replace('../review_order_pg.php'); </script>";
						exit;
					}
					
				}
				else{
					echo"Signup failed!";
				}	
		}
	
	}
	
	//Abstract functions must have a body in child classes otherwise a Fatal error would be generated
	 public function check_data(){
		 
	 }
	 public function update_data(){
		 
	 }
	 public function delete_data(){
		 
	 }

	
};

?> 