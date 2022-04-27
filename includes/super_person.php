<?php

/*Abstraction is a way of hiding information .

In abstraction there should be at least one method which must be declared but not defined.

There must be a abstract keyword that must be return before this class for it to be abstract class.

The class that inherit this abstract class need to define that method.

This class cannot be instantiated . only the class that implement the methods of abstract class can be instantiated.

There can be more than one methods that can left undefined.*/



//The DATABASE Connection File is ONLY INCLUDED in super_person CLASS
include("connection.php");

	abstract class super_person{
 
		protected $sp_last_id;
		protected $name;
		protected $email;
		protected $pass;
		protected $contact;
		protected $role_id;
		protected $user_id;
		
		abstract function insert_data();
		abstract function check_data();
		abstract function update_data();
		abstract function delete_data();
		
		// $input = 10
		protected function filter_data($input){
	//connection.php included again in this function bcz $con has local scope
	//include("includes/connection.php");
		  $input = trim($input);
		  $input = stripslashes($input);
		  $input = htmlspecialchars($input);
		  //$input = mysqli_real_escape_string($con ,$input);
		  return $input;
		}
		
		protected function run_query( $query ){
			
		//Make the Object of connection class so it can make CONNECTION
		 $con_obj = new connection;
		 $return_result = mysqli_query( $con_obj->connect_db(), $query);
			
			
			if( $return_result )
			{ //This is the Built In method of Connection Class for fetching Last ID
				$this->sp_last_id = $con_obj->get_last_inserted_id();
			}
			
		 	return $return_result;
			
		}
 
	}

?>

