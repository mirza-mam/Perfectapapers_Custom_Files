<?php include_once("includes/remember_me_check_for_form_pages.php");  ?>
<!DOCTYPE html>
<html lang="en">

<head>
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
	<title> SignUp for Free! </title>

	<?php include_once("assests_links.php"); ?>

</head>

<body>

	<?php include_once("navbar_for_custom_pages.php"); ?>

	<!--Form Main Container-->
	<div class="form-center">
		<h3> Please enter the details to SignUp... </h3>
		<span id="signup_error"> </span>

		<form onsubmit="return false">
			<div class="form-group col-md-8">

				<label for="user_name"> Name </label>
				<input type="text" class="form-control" id="user_name" name="user_name" placeholder="Name...">
			</div>


			<div class="form-group col-md-8">

				<label for="user_contact" id="contact_error">Phone </label>
				<input type="number" class="form-control" id="user_contact" name="user_contact" placeholder="Phone number..." onkeypress="if(this.value.length==10){return false;}">
			</div>


			<div class="form-group col-md-8">

				<label for="user_email" id="email_error">Email address</label>
				<input type="email" class="form-control" id="user_email" name="user_email" aria-describedby="emailHelp" placeholder="Enter your email here...">
				<small id="emailHelp" class="form-text text-muted">We will keep everything confidential. </small>
			</div>
			<div class="form-group col-md-8">
				<label for="user_password" id="password_error">Password</label>
				<input type="password" class="form-control" id="user_password" name="user_password" placeholder="Enter your password">
			</div>
			<div class="form-check">
				<input type="checkbox" class="form-check-input" id="user_signup_remember_me" name="user_signup_remember_me">
				<label class="form-check-label" for="user_signup_remember_me">Remember me!</label>
			</div>
			<input type="submit" class="form-btn" value="Signup" name="btn_signup" id="btn_signup">
		</form>
	</div>

	<?php include_once("footer_for_custom_pages.php"); ?>

	<script>
		$("#btn_signup").click(
			function() {
				$("#signup_error").html("");
				$("#email_error").html("");
				$("#password_error").html("");
				$("#contact_error").html("");

				var name = $("#user_name").val();
				var phone = $("#user_contact").val();
				var email = $("#user_email").val();
				var pass = $("#user_password").val();

				if ($("#user_signup_remember_me").prop("checked") == true) {
					var user_signup_remember_me = 1;
				}

				if (name == "" || phone == "" || email == "" || pass == "") {
					$("#signup_error").css("color", "red");
					$("#signup_error").html("Please fill all of the given fields to Signup!");
					return false;
				} else {
					if (!/^\w+([\.-]?\w+)*@\w+([\.-]?\w+)*(\.\w{2,3})+$/.test(email)) {
						$("#email_error").css("color", "red");
						$("#email_error").html("Please enter a valid Email");
						return false;
					}

					if (phone.length > 10) {
						$("#contact_error").css("color", "red");
						$("#contact_error").html("Please enter a valid contact number");
						return false;
					}

					if (!/^(?=.*[A-Za-z])(?=.*\d)(?=.*[@$!%*#?&])[A-Za-z\d@$!%*#?&]{8,}$/.test(pass)) {
						$("#password_error").css("color", "red");
						$("#password_error").html("Your password must be 8 characters long with one letter, number & special character");
						return false;
					}

					$.ajax({
						url: "includes/operations_user.php",
						type: "POST",
						data: {
							//after clicking the button the value will be taken 
							btn_signup: true,
							user_name: name,
							user_contact: phone,
							user_email: email,
							user_password: pass,
							user_signup_remember_me: user_signup_remember_me
						},
						success: function(r) {
							$("#email_error").html(r);
							$("#email_error").css("color", "red");
							return false;
						}
					});
				}
			}
		);
	</script>

	<?php include_once("tawkTo.php"); ?>

</body>

</html>