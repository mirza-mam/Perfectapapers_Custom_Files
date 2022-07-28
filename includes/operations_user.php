<?php
session_start();
include_once("signup.php");
include_once("login.php");

if (isset($_POST['btn_signup']) || isset($_POST['order_now_signup_btn'])) {
    $obj = new signup;
    $obj->insert_data();
} else if (isset($_POST['login_form_btn']) || isset($_POST['order_now_login_btn'])) {
    $obj = new login;
    $obj->check_data();
}
