<?php include_once("../includes/sessions_check.php"); ?>
<!DOCTYPE html>
<html lang="en">
<head><meta http-equiv="Content-Type" content="text/html; charset=utf-8">

	
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
	<meta name="description" content="">
	<meta name="author" content="">
	<link href="../order-images/order-now-favicon.png" rel="icon" type="image/x-icon" />
	<title>Perfectapapers - Admin Dashboard</title>

    <!-- Bootstrap core CSS -->
    <link href="../custom-assets/dist/css/bootstrap.min.css" rel="stylesheet">

    <!-- Icons -->
    <link href="../custom-assets/css-for-dashboards/font-awesome.css" rel="stylesheet">
    
    <!-- Custom styles for this template -->
    <link href="../custom-assets/css-for-dashboards/style.css" rel="stylesheet">
    
</head>
<body>
	<div class="container-fluid" id="wrapper">
		<div class="row">

		<?php include_once("admin-dashboard-navigation.php"); ?>

			<main class="col-xs-12 col-sm-8 col-lg-9 col-xl-10 pt-3 pl-4 ml-auto">
				<header class="page-header row justify-center">
					<div class="col-md-6 col-lg-8" >
						<h1 class="float-left text-center text-md-left">Available Leads</h1>
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
										<h3 class="card-title">Available Leads List</h3>
										</div>
										<div class="table-responsive">
											<table class="table table-striped">
												<thead>
													<tr>
														<th>Order #</th>
														<th>Product</th>
														<th>Status</th>
														<th>Due Date</th>
													</tr>
												</thead>
												<tbody>
													<tr>
														<td>0001</td>
														<td>Product Name 1</td>
														<td>Complete</td>
														<td>2019-08-09</td>
													</tr>
													<tr>
														<td>0002</td>
														<td>Product Name 2</td>
														<td>Complete</td>
														<td>2019-08-09</td>
													</tr>
													<tr>
														<td>0003</td>
														<td>Product Name 3</td>
														<td>Processing</td>
														<td>2019-08-09</td>
													</tr>
													<tr>
														<td>0004</td>
														<td>Product Name 4</td>
														<td>Pending</td>
														<td>2019-08-09</td>
													</tr>
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
