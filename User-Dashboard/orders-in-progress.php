<?php include_once("../includes/sessions_check.php"); ?>
<!DOCTYPE html>
<html lang="en">

<head>
	<title>Perfectapapers - User Dashboard</title>
	<?php include_once("user-dashboard-assets-links.php"); ?>
</head>

<body>
	<div class="container-fluid" id="wrapper">
		<div class="row">

			<?php include_once("user-dashboard-navigation.php"); ?>

			<main class="col-xs-12 col-sm-8 col-lg-9 col-xl-10 pt-3 pl-4 ml-auto">
				<header class="page-header row justify-center">
					<div class="col-md-6 col-lg-8">
						<h1 class="float-left text-center text-md-left">Orders in Progress</h1>
					</div>
					<div class="dropdown user-dropdown col-md-6 col-lg-4 text-center text-md-right">

						<?php
						/* This file also includes the fetch_and_show CLASS & its OBJECT $obj */
						include_once("user-dashboard-dropdown.php");
						?>

					</div>
					<div class="clear"></div>
				</header>
				<section class="row">
					<div class="col-sm-12">
						<section class="row">
							<div class="col-sm-12 col-md-12">

								<div class="card mb-4">
									<div class="card-block">
										<h3 class="card-title">Progressing Orders List</h3>
									</div>
									<div class="table-responsive">

										<table class="table table-striped">
											<thead>
												<tr>
													<th>Order #</th>
													<th>Assignment Title</th>
													<th>Due Date</th>
												</tr>
											</thead>
											<tbody>

												<?php

												/* $obj is the Object of fetch_and_show Class */
												$order_r = $obj->show_orders_data("InProgress");

												while ($orders_data_row = mysqli_fetch_assoc($order_r)) {

												?>

													<tr>
														<td> <?php echo $orders_data_row['order_id']; ?> </td>
														<td> <?php echo $orders_data_row['title']; ?> </td>
														<td> <?php echo $orders_data_row['deadline_date']; ?> </td>
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

	<!-- Bootstrap core JavaScript
    ================================================== -->
	<!-- Placed at the end of the document so the pages load faster -->
	<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.11.0/umd/popper.min.js" integrity="sha384-b/U6ypiBEHpOf/4+1nzFpr53nxSS+GLCkfwBdFNTxtclqqenISfwAzpKaMNFNmj4" crossorigin="anonymous"></script>
	<script src="../custom-assets/dist/js/bootstrap.min.js"></script>

	<script src="../custom-assets/js/chart.min.js"></script>
	<script src="../custom-assets/js/chart-data.js"></script>
	<script src="../custom-assets/js/easypiechart.js"></script>
	<script src="../custom-assets/js/easypiechart-data.js"></script>
	<script src="../custom-assets/js/bootstrap-datepicker.js"></script>
	<script src="../custom-assets/js/custom.js"></script>

	<script src="https://cdnjs.cloudflare.com/ajax/libs/tether/1.4.0/js/tether.min.js" integrity="sha384-DztdAPBWPRXSA/3eYEEUWrWCy7G5KFbe8fFjk5JAIxUYHKkDx6Qin1DkWx51bBrb" crossorigin="anonymous"></script>

</body>

</html>