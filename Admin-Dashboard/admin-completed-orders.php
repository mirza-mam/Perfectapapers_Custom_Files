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
						<h1 class="float-left text-center text-md-left">Completed Orders</h1>
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
										<h3 class="card-title">Completed Orders List</h3>
									</div>
									<div class="table-responsive">
										<table class="table table-striped">
											<thead>
												<tr>
													<th>Order#</th>
													<th>Email</th>
													<th>Contact</th>
													<th>Assignment Title</th>
													<th>Completion Date</th>
													<th>Order Price</th>
													<th>Order Status</th>
													<th>Options</th>
												</tr>
											</thead>
											<tbody>
												<?php
												/* $obj is the Object of fetch_and_show Class */
												$orders = $obj->show_all_data("Completed");
												while ($orders_data_row = mysqli_fetch_assoc($orders)) {
													$order_placing_users_data = $obj->show_this_id_data($orders_data_row['u_id']);
												?>
													<tr>
														<td> <?php echo $orders_data_row['order_id']; ?> </td>
														<td> <?php echo $order_placing_users_data['user_email']; ?> </td>
														<td> <?php echo $order_placing_users_data['user_contact']; ?> </td>
														<td> <?php echo $orders_data_row['title']; ?> </td>
														<td> NA </td>
														<td> <?php echo "$" . $orders_data_row['order_price']; ?> </td>
														<td> <?php echo $orders_data_row['order_status']; ?> </td>
														<td>
															<div class="dropdown">

																<button class="btn btn-dark dropdown-toggle fa fa-cog" type="button" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"> </button>

																<div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
																	<a class="dropdown-item" href="#">More details</a>
																	<a class="dropdown-item" href="#" data-toggle="modal" data-target="#modal_for_del_row" id="<?php echo $orders_data_row['order_id']; ?>">Delete</a>
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
					<div class="col-12 mt-1 mb-4">All Rights Reserved by <a href="https://www.perfectapapers.com/" target="_blank">Perfectapapers</a></div>
				</section>
		</div>
		</section>
		</main>
	</div>
	</div>

	<!-- ******************Delete Modal************************** -->
	<div class="modal fade" id="modal_for_del_row">
		<div class="modal-dialog modal-dialog-centered">
			<div class="modal-content">

				<!-- Modal Header -->
				<div class="modal-header">
					<h4 class="modal-title text-danger">WARNING!</h4>
					<button type="button" class="close" data-dismiss="modal">&times;</button>
				</div>

				<!-- Modal body -->
				<div class="modal-body">
					<h5 class="text-danger"> Once The Completed Order Has Been Deleted It Can't Be Undone </h5>
					<p> Are you sure that you want to delete Order# <span id="del_order_id"> </span> </p>

				</div>

				<!-- Modal footer -->
				<div class="modal-footer">
					<button type="button" class="btn btn-dark" id="del_c_order_btn">Yes</button>
					<button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
				</div>

			</div>
		</div>
	</div>
	<!-- ****************** //Delete Modal************************** -->

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
		//This function is used to throw the ID of that anchor tag which triggers a specific Modal
		$("a").click(

			function(event) {
				//alert("Related target is: " + event.target.id);
				$("#del_order_id").html(event.target.id);
			}

		);

		$("#del_c_order_btn").click(

			function() {
				var v = $("#del_order_id").html();

				$.ajax({
					url: "../includes/operations_admin.php",
					type: "POST",
					data: {
						operation: 'del_c_order',
						order_id: v
					},
					success: function(r) {

						$("#modal_for_del_row").modal("hide");
						alert(r);
						location.reload();

					}

				});

			});
	</script>

</body>

</html>