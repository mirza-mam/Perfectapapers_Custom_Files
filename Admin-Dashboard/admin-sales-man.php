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
										<h3 class="card-title">Sales Men List & Their Details</h3>
										</div>
										<div class="table-responsive">
											<table class="table table-striped">
												<thead>
													<tr>
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
											while( $emp_data_row = mysqli_fetch_assoc( $emp ) )
											{ 
												
											?>	
											
											<tr>
												<td> <?php echo $emp_data_row['user_id']; ?> </td>
												<td> <?php echo $emp_data_row['user_name'];?> </td>
												<td> <?php echo $emp_data_row['user_email'];?> </td> 
												<td> <?php echo $emp_data_row['user_contact']; ?> </td>
												<td> NA </td>
												<td> NA </td>
												
												<td>
													<div class="dropdown">

														<button class="btn btn-dark dropdown-toggle fa fa-cog" type="button" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"> </button>

													  <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
														<a class="dropdown-item" href="#">Edit</a>
														<a class="dropdown-item" href="#">Delete</a>
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