<?php

session_start();
require_once("includes/connection.php");

function filter_data($input){
	
		  $input = trim($input);
		  $input = stripslashes($input);
		  $input = htmlspecialchars($input);
		  //$input = mysqli_real_escape_string($con ,$input);
		  return $input;
		}

/*
formatSizeUnits() function code picked from https://stackoverflow.com/questions/5501427/php-filesize-mb-kb-conversion


		function formatSizeUnits($bytes)
    {
      
        if ($bytes >= 1048576 && $bytes <= 1073741824)
        {
			
            $bytes = number_format($bytes / 1048576, 2) . ' MB';
			
        }
        else if ($bytes >= 1024 && $bytes <= 1048576)
        {
			
            $bytes = number_format($bytes / 1024, 2) . ' KB';
			
        }
        else if ($bytes > 1 && $bytes <= 1024)
        {
			
            $bytes = $bytes . ' bytes';
			
        }
        else if ($bytes == 1)
        {
			
            $bytes = $bytes . ' byte';
			
        }
        else
        {
			
            $bytes = '0 bytes';
			
        }

        return $bytes;
}


		$target_dir = "User-files/";
		$target_file = $target_dir . basename($_FILES["customFile"]["name"]);
		$uploadOk = 1;
		$FileType = strtolower(pathinfo($target_file,PATHINFO_EXTENSION));
		
		$file_size = filesize($_FILES["customFile"]["name"]);
		$$file_size = formatSizeUnits($file_size);

			echo $$file_size;
exit;
		// Check the file size
		if(isset($target_file)) {
			
			
				
				
			
				if($check !== false) {

					$uploadOk = 1;
				} else {
					echo "File is not an image.";
					$uploadOk = 0;
				}

			
		}
		// Check if file already exists
		if (file_exists($target_file)) {
			echo "Sorry, file already exists.";
			$uploadOk = 0;
		}
		// Check file size
		if ($_FILES["fileToUpload"]["size"] > 500000) {
			echo "Sorry, your file is too large.";
			$uploadOk = 0;
		}
		// Allow certain file formats
		if($imageFileType != "jpg" && $imageFileType != "png" && $imageFileType != "jpeg"
		&& $imageFileType != "gif" ) {
			echo "Sorry, only JPG, JPEG, PNG & GIF files are allowed.";
			$uploadOk = 0;
		}
		// Check if $uploadOk is set to 0 by an error
		if ($uploadOk == 0) {
			echo "Sorry, your file was not uploaded.";
		// if everything is ok, try to upload file
		} else {
			if (move_uploaded_file($_FILES["fileToUpload"]["tmp_name"], $target_file)) {
				echo "The file ". basename( $_FILES["fileToUpload"]["name"]). " has been uploaded.";
			} else {
				echo "Sorry, there was an error uploading your file.";
			}
		}
*/

/*
	window.email = $("#user-email-price-form").val();
	window.doctype = $("#user-document-type-price-form").val();
	window.academic = $("#user-academic-level-price-form").val();
	window.pages = $("#user-number-of-pages-price-form").val();
	window.contact_code = $("#user-contact-code-price-form").val();
	window.contact_number = $("#user-contact-price-form").val();
	window.deadline_time = $("#user-deadline-time-price-form").val();
	window.deadline_date = $("#user-deadline-date-price-form").val();
					*/
	
		/*
			$user_email_price_form = filter_data($_POST['user-email-price-form']);
			$user_document_type_price_form = filter_data($_POST['user-document-type-price-form']);
			$user_academic_level_price_form = filter_data($_POST['user-academic-level-price-form']);
			$user_number_of_pages_price_form = filter_data($_POST['user-number-of-pages-price-form']);
			$user_contact_code_price_form = filter_data($_POST['user-contact-code-price-form']);
			$user_contact_price_form = filter_data($_POST['user-contact-price-form']);
			$user_deadline_time_price_form = filter_data($_POST['user-deadline-time-price-form']);
			$user_deadline_date_price_form = filter_data($_POST['user-deadline-date-price-form']);
			$user_assignment_title = filter_data($_POST['user-assignment-title']);
			$user_document_type = filter_data($_POST['user-document-type']);
			$user_citation_style = filter_data($_POST['user-citation-style']);
			$user_sources = filter_data($_POST['user-sources']);
			$user_assignment_description = filter_data($_POST['user-assignment-description']);
			//$_SESSION['customFile'] = $_POST['customFile']; 
			*/


		 	$arr_of_user_order_data = array(
			
			"user_email_price_form" => filter_data( $_POST['user-email-price-form'] ),
			
			"user_document_type_price_form" => filter_data( $_POST['user-document-type-price-form'] ),
		 
			"user_academic_level_price_form" => filter_data( $_POST['user-academic-level-price-form'] ),
		 
			"user_number_of_pages_price_form" => filter_data( $_POST['user-number-of-pages-price-form'] ),
			 
			"user_contact_code_price_form" => filter_data($_POST['user-contact-code-price-form']),
			
			"user_contact_price_form" => filter_data($_POST['user-contact-price-form']),
		 
		 	"user_deadline_time_price_form" => filter_data( $_POST['user-deadline-time-price-form'] ),
		 
			"user_deadline_date_price_form" => filter_data( $_POST['user-deadline-date-price-form'] ),

			"user_tp_inputField" => filter_data( $_POST['user-tp-inputField'] ),
		 
			"user_assignment_title" => filter_data( $_POST['user-assignment-title'] ),
		 
			"user_document_type" => filter_data( $_POST['user-document-type'] ),
		 
			"user_citation_style" => filter_data( $_POST['user-citation-style'] ),
		 
			"user_sources" => filter_data( $_POST['user-sources'] ),
		 
			"user_assignment_description" => filter_data( $_POST['user-assignment-description'] ),
		 	
				);
			 // This Data should be added in the array later
			//"customFile" => $_FILES['customFile'];
			//"user_id" => $_SESSION['user_id'];
	
		$_SESSION['arr_of_user_order_data'] = $arr_of_user_order_data;
	

    if( isset( $_SESSION['user_id'] ) && isset( $_SESSION['user_email'] )  )
{
			/*
			All session variables which are created 
			If user_id session is available then do nothing if not then redirect the user to the Login Page ;)
            $_SESSION['user_email'];
			$_SESSION['user_id']; 
			*/
			$_SESSION['checkout-btn'] = 'checkout_btn_pressed';
			
		echo "redirect";
		
	}	
else{	
	echo "NotSignedUp";		
}


?>