<?php
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);
session_start();
require 'vendor/autoload.php';
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\SMTP;
use PHPMailer\PHPMailer\Exception;
$access_token = 'EAAAEAK4EpF3kCyrp--TPzlaUXt7IzGo5fg3-P7imft3GehtVLAgylr306Qb1k57';

# setup authorization
$api_config = new \SquareConnect\Configuration();

// Prodcution Host: https://connect.squareup.com
// Sandbox Host: https://connect.squareupsandbox.com
$api_config->setHost("https://connect.squareup.com");
$api_config->setAccessToken($access_token);
$api_client = new \SquareConnect\ApiClient($api_config);

# create an instance of the Payments API class
$payments_api = new \SquareConnect\Api\PaymentsApi($api_client);

//Test Location ID: A57YBR9RN1YRX  
$location_id = '31ZTG4KARKVGT';
// $nonce = 'cnon:CBASEPzWD9IHIUHS7bTcEhvuJ0A';

$body = new \SquareConnect\Model\CreatePaymentRequest();

$amountMoney = new \SquareConnect\Model\Money();

# Monetary amounts are specified in the smallest unit of the applicable currency.
# This amount is in cents. It's also hard-coded for $1.00, which isn't very useful.

$dollars = $_SESSION['order_info_row']['order_price'];
$cents = $dollars*100;

//$cents = 1;

/*echo $_SESSION['order_info_row']['order_price'];
exit;*/
$amountMoney->setAmount($cents); // set amount
$amountMoney->setCurrency("USD");
$nonce = $_REQUEST["q"];
// echo $q;
// die();
$body->setSourceId($nonce);
$body->setAmountMoney($amountMoney);
$body->setLocationId($location_id);

# Every payment you process with the SDK must have a unique idempotency key.
# If you're unsure whether a particular payment succeeded, you can reattempt
# it with the same idempotency key without worrying about double charging
# the buyer.
$body->setIdempotencyKey(uniqid());
$mail = new PHPMailer(true);

try {
    //Server settings
    $mail->SMTPDebug = 0;                      // Enable verbose debug output
    $mail->isSMTP();                                            // Send using SMTP
    $mail->Host       = 'mail.perfectapapers.com';                    // Set the SMTP server to send through
    $mail->SMTPAuth   = true;                                   // Enable SMTP authentication
    $mail->Username   = 'noreply@perfectapapers.com';                     // SMTP username
    $mail->Password   = ']kBC!u;#5f6&';                               // SMTP password
    $mail->SMTPSecure = 'ssl';         // Enable TLS encryption; `PHPMailer::ENCRYPTION_SMTPS` encouraged
    $mail->Port       = 465;                                    // TCP port to connect to, use 465 for `PHPMailer::ENCRYPTION_SMTPS` above

    //Recipients
    $mail->setFrom('noreply@perfectapapers.com', 'noreply@perfectapapers');
    $mail->addAddress('aagiftforall@yahoo.com', 'owner');     // Add a recipient
    // $mail->addAddress('ellen@example.com');               // Name is optional
    // $mail->addReplyTo('info@example.com', 'Information');
    // $mail->addCC('cc@example.com');
    // $mail->addBCC('bcc@example.com');

    // // Attachments
    // $mail->addAttachment('/var/tmp/file.tar.gz');         // Add attachments
    // $mail->addAttachment('/tmp/image.jpg', 'new.jpg');    // Optional name

    $response = $payments_api->createPayment($body);
    // echo "<pre>";
    // echo print_r($response->getPayment());
    // echo "</pre>";
    // die();
    $html = sprintf("<!DOCTYPE html>
        <html>
        <head>
        <style>
        table {
          font-family: arial, sans-serif;
          border-collapse: collapse;
          width: 100%%;
        }

        td, th {
          border: 1px solid #dddddd;
          text-align: left;
          padding: 8px;
        }

        tr:nth-child(even) {
          background-color: #dddddd;
        }
        </style>
        </head>
        <body>

        <h2>Payments</h2>

        <table>
          <tr>
            <th>Key</th>
            <th>Vaue</th>
          </tr>
          <tr>
            <td>ID</td>
            <td>%s</td>
          </tr>
          <tr>
            <td>Amount</td>
            <td>%s %s</td>
          </tr>
          <tr>
            <td>status</td>
            <td>%s</td>
          </tr>
          <tr>
            <td>source type</td>
            <td>%s</td>
          </tr>
          <tr>
            <td>order id</td>
            <td>%s</td>
          </tr>
          <tr>
            <td>receipt url</td>
            <td>%s</td>
          </tr>
        </table>

        </body>
    </html>",
    $response->getPayment()->getId(),
    $response->getPayment()->getAmountMoney()->getAmount(),
    $response->getPayment()->getAmountMoney()->getCurrency(),
    $response->getPayment()->getStatus(),
    $response->getPayment()->getSourceType(),
    $response->getPayment()->getOrderId(),
    $response->getPayment()->getReceiptUrl());
    // echo $html;
    $paymentErrors = $response->getErrors();
    if (is_null($paymentErrors)) {
        // Content
        $mail->isHTML(true);                                  // Set email format to HTML
        $mail->Subject = 'Payment Info';
        $mail->Body    = $html;
        // $mail->AltBody = 'This is the body in plain text for non-HTML mail clients';
        // return;
        if ($mail->send()) {
            echo "Your Payment has been made Successfully";
        }
    }
    else {
        echo "payment Errors: {$paymentErrors}";
    }

    
    
} catch (Exception $e) {
    echo "Message could not be sent. Mailer Error: {$mail->ErrorInfo}";
}
?>