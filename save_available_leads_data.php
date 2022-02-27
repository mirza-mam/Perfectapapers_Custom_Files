<?php
require_once("includes/user.php");


    $arr_of_user_available_leads_data = array(
                
        "user_email_price_form" => filter_input(INPUT_POST, 'user-email-price-form', FILTER_VALIDATE_EMAIL),
        
        "user_document_type_price_form" => filter_input(INPUT_POST, 'user-document-type-price-form', FILTER_SANITIZE_STRING),
    
        "user_academic_level_price_form" => filter_input(INPUT_POST, 'user-academic-level-price-form', FILTER_SANITIZE_STRING),
    
        "user_number_of_pages_price_form" => filter_input(INPUT_POST, 'user-number-of-pages-price-form', FILTER_VALIDATE_INT),
        
        "user_contact_code_price_form" => filter_input(INPUT_POST, 'user-contact-code-price-form', FILTER_SANITIZE_STRING),
        
        "user_contact_price_form" => filter_input(INPUT_POST, 'user-contact-price-form', FILTER_VALIDATE_INT),
    
        "user_deadline_time_price_form" => filter_input(INPUT_POST, 'user-deadline-time-price-form', FILTER_SANITIZE_STRING),
    
        "user_deadline_date_price_form" => filter_input(INPUT_POST, 'user-deadline-date-price-form', FILTER_SANITIZE_STRING)
        
            );
            
        $u_obj = new user;
        $u_obj->insert_available_leads( $arr_of_user_available_leads_data );
        
?>