<?php
session_start();
require 'includes\connection.php';

$connection = new connection;

$dollar = $_SESSION['order_info_row']['order_price']; 
function filter_data($input){
	
		  $input = trim($input);
		  $input = stripslashes($input);
		  $input = htmlspecialchars($input);
		  //$input = mysqli_real_escape_string($con ,$input);
		  return $input;
		}

	if( isset( $_GET['P_T_Chk_O_bt'] ) )
				{
					$_SESSION['order_info_row']['order_price'] = filter_data($_SESSION['order_info_row']['order_price']);
				}
?>
<!--
  Copyright 2018 Square Inc.
  Licensed under the Apache License, Version 2.0 (the "License");
  you may not use this file except in compliance with the License.
  You may obtain a copy of the License at
      http://www.apache.org/licenses/LICENSE-2.0
  Unless required by applicable law or agreed to in writing, software
  distributed under the License is distributed on an "AS IS" BASIS,
  WITHOUT WARRANTIES OR CONDITIONS OF ANY KIND, either express or implied.
  See the License for the specific language governing permissions and
  limitations under the License.
-->

<!DOCTYPE html>
<html>
<head><meta http-equiv="Content-Type" content="text/html; charset=utf-8">
 <title> Square Payment Processor </title>
 <!-- link to the SqPaymentForm library -->
 <!--<script type="text/javascript" src="https://js.squareupsandbox.com/v2/paymentform"> </script>  -->
	  
 
 <script src="custom-assets/jquery-3.2.1.min.js"></script>
 
 <!-- link to the local custom styles for SqPaymentForm -->
 <link rel="stylesheet" type="text/css" href="custom-css/mysqpaymentform.css">
</head>
<body>

<div id="form-container">
  <main id="cart-main">
      <div class="site-title text-center">
          <h1 class="font-title" onclick="onGetCardNonce(event)">Pay $<?php echo $_SESSION['order_info_row']['order_price']; ?></h1>
      </div>
      <div class="container text-center">
          <div id="paypal-payment-button">
          </div>
      </div>
  </main>
</div>
<script>
  var amount = '<?= $dollar ?>';
  console.log(amount);
  
</script>
<script src="https://www.paypal.com/sdk/js?client-id=AXTMvdMGjVO-aJ9MViIyvFecb787hLUDhz4ip3ot1z7h-Zlfioi2x5dDcEGOHjycw51ZpUSS_9QFdij8&disable-funding=credit,card"></script>
<script>
    var baseUrl = '<?= $connection->baseurl ?>'
    console.log(baseUrl);
</script>
<script src="index.js"></script>

 <!-- end #form-container --> 
 </body>
 </html>


