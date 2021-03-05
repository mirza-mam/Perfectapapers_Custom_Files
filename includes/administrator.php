<?php 
include_once("super_person.php");

class administrator extends super_person{
	
	public function update_order_payment_status(){
		
				$order_id = $this->filter_data($_POST['order_id']);
				
				/*$q_result = $this->run_query("UPDATE temp_order_tbl SET payment_status = 'Paid' WHERE order_id = '$order_id'");
				*/
				
				$q_result = $this->run_query("SELECT * FROM temp_order_tbl WHERE order_id = '$order_id'");
				
				/*Now fetch the "$order_id" from tem_order_tbl & insert it in the order_tbl & then change its status to InProgress*/
				    
				    if( $q_result )
				        {
				            /*if the given 'order_id' is set to 'Paid' then
				            fetch its Data from temp_order_tbl & insert it in
				            the order_tbl*/
				        $row = mysqli_fetch_assoc($q_result);
				            
    $q_to_insert_orderData_in_order_tbl = $this->run_query("INSERT INTO order_tbl 
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
    ( '{$row['u_id']}' , 
    '{$row['doc_type']}' ,
    '{$row['academic_lvl']}' ,
    '{$row['no_of_pages']}' ,
    '{$row['order_placing_date']}' ,
    '{$row['order_placing_time']}' ,
    '{$row['deadline_time']}' ,
    '{$row['deadline_date']}' , 
    '{$row['order_price']}' , 
    '{$row['title']}' , 
    '{$row['subject']}' , 
    '{$row['citation_style']}' , 
    '{$row['no_of_sources']}' , 
    '{$row['description']}' , 
    'Empty For Now' , 
    'InProgress' ,
    'Paid' )");
		            
		            if( $q_to_insert_orderData_in_order_tbl )
		            {
	$q_to_del_orderData_frm_tmp_order_tbl = $this->run_query("DELETE FROM temp_order_tbl WHERE order_id = '$order_id' "); 
		            }
				
				        }
				
				
				
				return $q_to_del_orderData_frm_tmp_order_tbl;
			
	}
	
	
	//Abstract functions must have a body in child classes otherwise a Fatal error would be generated
	public function update_data(){
		
		
	}
	public function insert_data(){
		
		
	}
	public function check_data(){
		
		
	}
	public function delete_data(){
		
		
	}
	
};

?>