<?php
require_once 'vendor/autoload.php';

$nonceFromTheClient = $_POST["payment_method_nonce"];
/* Use payment method nonce here */

$gateway = new Braintree\Gateway([
    'environment' => 'sandbox',
    'merchantId' => '96kq2sb8wcpv5j8y',
    'publicKey' => '4znxqpxcx82dy2z6',
    'privateKey' => 'e496321ee3ca5119d87bcd6792c5c43c'
]);

// $gateway = new Braintree\Gateway([
//     'environment' => 'production',
//     'merchantId' => 'use_your_merchant_id',
//     'publicKey' => 'use_your_public_key',
//     'privateKey' => 'use_your_private_key'
// ]);


$result = $gateway->transaction()->sale([
    'amount' => '30.00',
    'paymentMethodNonce' => $nonceFromTheClient,
    // 'deviceData' => $deviceDataFromTheClient,
    'options' => [
      'submitForSettlement' => True
    ]
  ]);
// pass $clientToken to your front-end
// $clientToken = $gateway->clientToken()->generate([
//     "customerId" => $aCustomerId
// ]);

if ($result->success) {
    // $result->transaction for details
    echo $result->transaction;
  } else {
    // Handle errors
  }

  echo "<br><br>";
echo($clientToken = $gateway->clientToken()->generate());