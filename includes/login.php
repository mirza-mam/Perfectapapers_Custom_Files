<?php
session_start();
include_once("super_person.php");

class login extends super_person{
	
	 public function check_data(){
		 
			$this->email =  $this->filter_data($_POST['user_email']);
			$this->pass =  $this->filter_data($_POST['user_password']);
		 
		$q_result = $this->run_query( "SELECT * FROM users_tbl WHERE user_email = '$this->email' && user_password = '$this->pass'");
		
		if( mysqli_num_rows($q_result) == 1 )
		{
				
		$row = mysqli_fetch_assoc($q_result);
	
	 	$this->email = $row['user_email'];
		$this->user_id = $row['user_id'];
		$this->role_id = $row['role_id'];
		
			
			if( isset( $_POST['user_login_remember_me'] ) )
					{
				
						setcookie("user_email", $this->email, time() + 86400 * 60 , "/" );
						setcookie("user_pass", $this->pass, time() + 86400 * 60 , "/" );
						setcookie("user_id", $this->user_id, time() + 86400 * 60 , "/" );
						
					}

						$_SESSION['user_email'] = $this->email;
						$_SESSION['user_id'] = $this->user_id;
						$_SESSION['role_id'] = $this->role_id;

			
				if(  isset( $_POST['login_form_btn'] ) )
						{
								switch($row['role_id']){
									
										//If User's role_id == 0 then user will be redirected to the User Dashboard
									case 0:
										echo "<script> window.location.replace('../User-Dashboard/user-dashboard-index.php'); </script>";
										exit;
										//If User's role_id == 1 then user will be redirected to the Employee Dashboard
									case 1:
										echo "<script> window.location.replace('../Emp-Dashboard/emp-dashboard-index.php'); </script>";
										exit;
										//If User's role_id == 2 then user will be redirected to the Admin Dashboard
									case 2:
										echo "<script> window.location.replace('../Admin-Dashboard/admin-dashboard-index.php'); </script>";
										exit;
													}
					
							
						}
				else if( isset( $_POST['order_now_login_btn'] ) ){

							/*If user Log's in from the order now page then he will be
							 redirected to the "review_order_pg"*/
							$_SESSION['order_now_login_btn'] = $_POST['order_now_login_btn'];
							
							echo "<script> window.location.replace('../review_order_pg.php'); </script>";
							exit;
						}

			}
	else{

		echo "You are Entering Invalid Email or Password.";
	
}
		 
	 }

	//Abstract functions must have a body in child classes otherwise a Fatal error would be generate
	public function insert_data(){
	
	}
	 public function update_data(){
		 
	 }
	 public function delete_data(){
		 
	 }

	
};		

?>