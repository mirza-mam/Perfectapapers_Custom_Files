<?php
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);
session_start();
require 'vendor/autoload.php';
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\SMTP;
use PHPMailer\PHPMailer\Exception;
require 'includes\connection.php';
// require "include\connection.php";
$con_obj = new connection;
// echo $con_obj->baseurl;die();
var_dump($_GET['paypal_id']);
var_dump($_GET['payer_id']);
var_dump($_GET['payer_email']);
var_dump($_GET['payer_name']);
var_dump($_GET['amounts']);
var_dump($_GET['merchant_id']);
var_dump($_GET['merchant_email']);

// $link = mysqli_connect("localhost", "root", "", "perfecta_custom_db");
// Check connection
if($con_obj === false){
    die("ERROR: Could not connect. " . mysqli_connect_error());
}
 
// Attempt insert query execution
$sql = "INSERT INTO paypal_tbl (paypal_id, payer_id, payer_email, payer_name, amounts, merchant_id, merchant_email, created_at) VALUES
            ('$_GET[paypal_id]', '$_GET[payer_id]', '$_GET[payer_email]', '$_GET[payer_name]', '$_GET[amounts]', '$_GET[merchant_id]', '$_GET[merchant_email]', CURRENT_TIMESTAMP)";
if(mysqli_query($con_obj->connect_db(), $sql)){
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
      $mail->addAddress('qazimazhar57@gmail.com', 'owner');     // Add a recipient
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
              <td>Order ID</td>
              <td>%s</td>
            </tr>
            <tr>
              <td>Amount</td>
              <td>%s</td>
            </tr>
            <tr>
              <td>Payer ID</td>
              <td>%s</td>
            </tr>
            <tr>
              <td>Name</td>
              <td>%s</td>
            </tr>
            <tr>
              <td>Payer Email</td>
              <td>%s</td>
            </tr>
            <tr>
              <td>Merchant ID</td>
              <td>%s</td>
            </tr>
            <tr>
              <td>Merchant Email</td>
              <td>%s</td>
            </tr>
          </table>
  
          </body>
      </html>",
      $_GET['paypal_id'],
      $_GET['amounts'],
      $_GET['payer_id'],
      $_GET['payer_name'],
      $_GET['payer_email'],
      $_GET['merchant_id'],
      $_GET['merchant_email']
    );
      // echo $html;
  
          // Content
          $mail->isHTML(true);                                  // Set email format to HTML
          $mail->Subject = 'Payment Info';
          $mail->Body    = $html;
          // $mail->AltBody = 'This is the body in plain text for non-HTML mail clients';
          // return;
          if ($mail->send()) {
              echo "Your Payment has been made Successfully";
          }    
  } catch (Exception $e) {
      echo "Message could not be sent. Mailer Error: {$mail->ErrorInfo}";
  }
    header("Location: ".$con_obj->baseurl."/success.php");
} else{
    echo "ERROR: Could not able to execute $sql. " . mysqli_error($con_obj->connect_db());
}
 
// Close connection
mysqli_close($con_obj->connect_db());





?>