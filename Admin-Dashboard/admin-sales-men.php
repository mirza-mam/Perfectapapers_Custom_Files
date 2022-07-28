<?php include_once("../includes/sessions_check.php"); ?>
<!DOCTYPE html>
<html lang="en">

<head>
	<title>Perfectapapers - Admin Dashboard</title>
	<?php include_once("admin-assets-links.php"); ?>
</head>

<body>
	<div class="container-fluid" id="wrapper">
		<div class="row">

			<?php include_once("admin-dashboard-navigation.php"); ?>

			<main class="col-xs-12 col-sm-8 col-lg-9 col-xl-10 pt-3 pl-4 ml-auto">
				<header class="page-header row justify-center">
					<div class="col-md-6 col-lg-8">
						<h1 class="float-left text-center text-md-left">Sales Men</h1>
					</div>
					<div class="dropdown user-dropdown col-md-6 col-lg-4 text-center text-md-right">

						<?php include_once("admin-dashboard-dropdown.php"); ?>


					</div>
					<div class="clear"></div>
				</header>
				<section class="row">
					<div class="col-sm-12">
						<section class="row">
							<div class="col-sm-12 col-md-12">

								<div class="card mb-4">
									<div class="card-block">
										<div class="row">
											<div class="col-md-9">
												<h3 class="card-title">List Of Sales Men & Their Details</h3>
											</div>
											<div class="col-md-3">
												<button class="btn btn-dark" data-toggle="modal" data-target="#modal_for_insertion">
													<i class="fa fa-plus" aria-hidden="true"></i>&nbsp;Add</button>
												<button class="btn btn-dark" data-toggle="modal" data-target="#modal_for_del_rows">
												<i class="fa fa-trash-o" aria-hidden="true"></i>&nbsp;Delete</button>
											</div>
										</div>
									</div>
									<div class="table-responsive">
										<table class="table table-striped">
											<thead>
												<tr>
													<th> <input type="checkbox" id="select_all" title="Select"> </th>
													<th>Sales Man#</th>
													<th>Name</th>
													<th>Email</th>
													<th>Contact</th>
													<th>Joining Date</th>
													<th>Total Sales</th>
													<th>Options</th>
												</tr>
											</thead>
											<tbody>

												<?php

												/* $obj is the Object of fetch_and_show Class */
												$emp = $obj->show_all_data("1");
												while ($emp_data_row = mysqli_fetch_assoc($emp)) {

												?>

													<tr>
														<td> <input type="checkbox" class="select-checkbox" title="Select" id="<?php echo $emp_data_row['user_id']; ?>"> </td>
														<td> <?php echo $emp_data_row['user_id']; ?> </td>
														<td> <?php echo $emp_data_row['user_name']; ?> </td>
														<td> <?php echo $emp_data_row['user_email']; ?> </td>
														<td> <?php echo $emp_data_row['user_contact']; ?> </td>
														<td> NA </td>
														<td> NA </td>

														<td>
															<div class="dropdown">

																<button class="btn btn-dark dropdown-toggle fa fa-cog" type="button" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"> </button>

																<div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
																	<a class="dropdown-item" href="#">Edit</a>
																	<a class="dropdown-item" href="#">Details</a>
																</div>
															</div>
														</td>

													</tr>

												<?php  		} ?>

											</tbody>
										</table>
									</div>
								</div>
							</div>


					</div>

				</section>
				<section class="row">
					<div class="col-12 mt-1 mb-4">All Rights Reserved by <a href="#">Perfectapapers</a></div>
				</section>
		</div>
		</section>
		</main>
	</div>
	</div>

	<!-- ******************Insert Modal************************** -->
	<div class="modal fade" id="modal_for_insertion">
		<div class="modal-dialog modal-dialog-centered">
			<div class="modal-content">

				<!-- Modal Header -->
				<div class="modal-header">
					<h4 class="modal-title text-success">ADD SALES MAN</h4>
					<button type="button" class="close" data-dismiss="modal">&times;</button>
				</div>

				<!-- Modal body -->
				<div class="modal-body">
					<span id="signup_error"> </span>
					<form onsubmit="return false">
						<div class="form-group">
							<input type="text" class="form-control" id="user_name" name="user_name" placeholder="Name...">
						</div>
						<div class="form-group">
							<label for="user_contact" id="contact_error"></label>
							<input type="number" class="form-control" id="user_contact" name="user_contact" placeholder="Phone number..." onkeypress="if(this.value.length==10){return false;}">
						</div>
						<div class="form-group">
							<label for="user_email" id="email_error"></label>
							<input type="email" class="form-control" id="user_email" name="user_email" placeholder="Enter email here...">
						</div>
						<div class="form-group">
							<label for="user_password" id="password_error"></label>
							<input type="password" class="form-control" id="user_password" name="user_password" placeholder="Enter password">
						</div>
						<input type="submit" class="btn btn-success col-12" value="Add" name="insert_new_emp_btn" id="insert_new_emp_btn">
					</form>
				</div>

				<!-- Modal footer -->
				<div class="modal-footer">
					<!-- <button type="button" class="btn btn-dark" id="insert_sales_men_btn">Yes</button> -->
					<button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
				</div>

			</div>
		</div>
	</div>
	<!-- ****************** //Insert Modal************************** -->

	<!-- ******************Delete Modal************************** -->
	<div class="modal fade" id="modal_for_del_rows">
		<div class="modal-dialog modal-dialog-centered">
			<div class="modal-content">

				<!-- Modal Header -->
				<div class="modal-header">
					<h4 class="modal-title text-danger">WARNING!</h4>
					<button type="button" class="close" data-dismiss="modal">&times;</button>
				</div>

				<!-- Modal body -->
				<div class="modal-body">
					<h5 class="text-danger"> Once The Selected Rows Are Deleted It Can't Be Undone </h5>
					<p> Are you sure that you want to delete? </span> </p>

				</div>

				<!-- Modal footer -->
				<div class="modal-footer">
					<button type="button" class="btn btn-dark" id="del_sales_men_btn">Yes</button>
					<button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
				</div>

			</div>
		</div>
	</div>
	<!-- ****************** //Delete Modal************************** -->

</body>

</html>

<!-- Bootstrap core JavaScript
    ================================================== -->
<!-- Placed at the end of the document so the pages load faster -->
<script src="../custom-assets/jquery-3.2.1.min.js"></script>
<script src="../custom-assets/popper.min.js"></script>
<script src="../custom-assets/dist/js/bootstrap.min.js"></script>

<script src="../custom-assets/js/chart.min.js"></script>
<script src="../custom-assets/js/chart-data.js"></script>
<script src="../custom-assets/js/easypiechart.js"></script>
<script src="../custom-assets/js/easypiechart-data.js"></script>
<script src="../custom-assets/js/bootstrap-datepicker.js"></script>
<script src="../custom-assets/js/custom.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/tether/1.4.0/js/tether.min.js" integrity="sha384-DztdAPBWPRXSA/3eYEEUWrWCy7G5KFbe8fFjk5JAIxUYHKkDx6Qin1DkWx51bBrb" crossorigin="anonymous"></script>

<script>
	$("#select_all").click(
		function() {
			var checkboxes = document.querySelectorAll('.select-checkbox');
			for (var i = 0; i < checkboxes.length; i++) {
				(document.getElementById("select_all").checked == true) ? checkboxes[i].checked = true: checkboxes[i].checked = false;
			}
		}
	);

	$("#del_sales_men_btn").click(
		function() {
			var checkboxes = document.querySelectorAll('.select-checkbox');
			var sales_men = [];
			var x = 0;
			for (var i = 0; i < checkboxes.length; i++) {
				if (checkboxes[i].checked) {
					sales_men[x] = checkboxes[i].id;
					x++;
				}
			}
			if (sales_men.length != 0) {
				$.ajax({
					url: "../includes/operations_admin.php",
					type: "POST",
					data: {
						operation: 'del_sales_men',
						sales_men: sales_men
					},
					success: function(r) {
						$("#modal_for_del_rows").modal("hide");
						alert(r);
						location.reload();
					}
				});
			}
		});

	$("#insert_new_emp_btn").click(
		function() {
			$("#signup_error").html("");
			$("#email_error").html("");
			$("#password_error").html("");
			$("#contact_error").html("");

			var name = $("#user_name").val();
			var phone = $("#user_contact").val();
			var email = $("#user_email").val();
			var pass = $("#user_password").val();

			if (name == "" || phone == "" || email == "" || pass == "") {
				$("#signup_error").css("color", "red");
				$("#signup_error").html("Please fill all of the given fields to add!");
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
					$("#password_error").html("Password must be 8 characters long with one letter, number & special character");
					return false;
				}

				$.ajax({
					url: "../includes/operations_admin.php",
					type: "POST",
					data: {
						//after clicking the button the value will be taken 
						operation: 'insert_new_emp',
						insert_new_emp_btn: true,
						user_name: name,
						user_contact: phone,
						user_email: email,
						user_password: pass
					},
					success: function(r) {
						if (r == "Added Successfully") {
							$("#modal_for_insertion").modal("hide");
							alert(r);
							location.reload();
						} else {
							$("#email_error").html(r);
							$("#email_error").css("color", "red");
							return false;
						}
					}
				});
			}
		}
	);
</script>