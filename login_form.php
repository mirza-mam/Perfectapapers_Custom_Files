<?php include_once("includes/remember_me_check_for_form_pages.php");  ?>
<!DOCTYPE html>
<html lang="en">

<head>
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
	<title> Perfectapapers - Login </title>

	<?php include_once("assests_links.php"); ?>

</head>

<body>

	<?php include_once("navbar_for_custom_pages.php"); ?>


	<!--Form Main Container-->
	<div class="form-center login_form_bottom_margin">
		<h3> Please enter the details to Login... </h3>
		<span id="login_error" style="color: red;"> </span>
		<form onsubmit="return false">
			<div class="form-group col-md-8">
				<label for="user_email" id="email_error">Email address</label>
				<input type="email" class="form-control" id="user_email" name="user_email" aria-describedby="emailHelp" placeholder="Enter your email here...">
				<small id="emailHelp" class="form-text text-muted">We will keep everything confidential. </small>
			</div>

			<div class="form-group col-md-8">
				<label for="user_password">Password</label>
				<input type="password" class="form-control" id="user_password" name="user_password" placeholder="Enter the correct password...">
			</div>
			<div class="form-check">
				<input type="checkbox" class="form-check-input" id="user_login_remember_me" name="user_login_remember_me">
				<label class="form-check-label" for="user_login_remember_me"> Remember me! </label>
			</div>
			<input type="submit" class="form-btn" value="Login" name="login_form_btn" id="login_form_btn">
		</form>
	</div>


	<?php include_once("footer_for_custom_pages.php"); ?>


	<script>
		$("#login_form_btn").click(

			function() {

				$("#login_error").html("");
				$("#email_error").html("");

				var email = $("#user_email").val();
				var pass = $("#user_password").val();
				// var user_login_remember_me = $("#user_login_remember_me").prop();
				if ($("#user_login_remember_me").prop("checked") == true) {
					var user_login_remember_me = 1;

				}
				// return false;
				if (email == "" || pass == "") {
					$("#login_error").html("Please fill all of the given fields in order to Login!");
					return false;
				} else {

					if (!/^\w+([\.-]?\w+)*@\w+([\.-]?\w+)*(\.\w{2,3})+$/.test(email)) {
						$("#email_error").css("color", "red");
						$("#email_error").html("Please enter a valid Email");
						return false;
					}

					$.ajax({
						url: "includes/operations_user.php",
						type: "POST",
						data: {
							//after clicking the button the value will be taken 
							login_form_btn: true,
							user_email: email,
							user_password: pass,
							user_login_remember_me: user_login_remember_me
						},
						success: function(r) {
							$("#email_error").html(r);
							$("#email_error").css("color", "red");

							return false;
						}
					});
				}
			});
	</script>

	<?php include_once("tawkTo.php"); ?>

</body>

</html>