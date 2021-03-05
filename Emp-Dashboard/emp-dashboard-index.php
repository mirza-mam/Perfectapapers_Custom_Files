<?php include_once("../includes/sessions_check.php"); ?>
<!DOCTYPE html>
<html lang="en">
<head><meta http-equiv="Content-Type" content="text/html; charset=utf-8">
	
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
	<meta name="description" content="">
	<meta name="author" content="">
	<link href="../order-images/order-now-favicon.png" rel="icon" type="image/x-icon" />
	<title>Perfectapapers - Employee Dashboard</title>

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
			
			<?php include_once("emp-dashboard-navigation.php"); ?>
			
			
<main class="col-xs-12 col-sm-8 col-lg-9 col-xl-10 pt-3 pl-4 ml-auto">
		<header class="page-header row justify-center">
					<div class="col-md-6 col-lg-8" >
						<h1 class="float-left text-center text-md-left">Employee Dashboard</h1>
					</div>
					<div class="dropdown user-dropdown col-md-6 col-lg-4 text-center text-md-right">
	
						<!-- This ".php" file is very important because it is including sessions_check file & fetch_and_show class. All dynamic information is diplayed in the pages with the help of this file. 
						-->
						<?php
						/* This file also includes the fetch_and_show CLASS & its OBJECT $obj */
						include_once("emp-dashboard-dropdown.php");
						
						/*$obj is the Object of fetch_and_show Class 
						$comp_orders = $obj->show_orders_data("Completed");
						$progressing_orders = $obj->show_orders_data("InProgress");
						$revision_orders = $obj->show_orders_data("Revisions");
						
						
						$total_orders =  $obj->show_all_data("TotalOrders");
						$comp_orders =  $obj->show_all_data("Completed");
						$progressing_orders =  $obj->show_all_data("InProgress");
						$revision_orders =  $obj->show_all_data("Revisions");
						$upaid_orders =  $obj->show_all_data("UnPaid");
						$sales_man =  $obj->show_all_data('1');
						$customers =  $obj->show_all_data('0');
						
						*/

						

						?>	
					
					
					</div>
					<div class="clear"></div>
				</header>
				<section class="row">
					<div class="col-sm-12">
						<section class="row">
							<div class="col-md-12 col-lg-8">
								
								<?php include_once("emp-search-bar.php"); ?>	
								
								<div class="card mb-4">
									<div class="card-block">
										<h3 class="card-title">Overview</h3>
										
										<h6 class="card-subtitle mb-2 text-muted"> Hi! <?php echo $user_data_row['user_name']; ?> below is the overview of your orders</h6>
										<div class="divider" style="margin-top: 1rem;"></div>
										<div class="articles-container">
											<div class="article border-bottom">
												<div class="col-xs-12">
													<div class="row">
														<div class="col-2 date">
															
															<div class="large">NA</div>
														
														</div>
														<div class="col-10">
															<h4><a href="#"> Available leads </a></h4>
														</div>
													</div>
												</div>
												<div class="clear"></div>
											</div><!--End .article-->
											
											<div class="article">
												<div class="col-xs-12">
													<div class="row">
														<div class="col-2 date">
															
							<div class="large"><?php echo mysqli_num_rows( $obj->show_all_data("UnPaid") );?></div>
															
														</div>
														<div class="col-10">
															<h4><a href="#">UnPaid Orders</a></h4>
														</div>
													</div>
												</div>
												<div class="clear"></div>
											</div><!--End .article-->
											
											<div class="article">
												<div class="col-xs-12">
													<div class="row">
														<div class="col-2 date">
															
															<div class="large">NA</div>
															
														</div>
														<div class="col-10">
															<h4><a href="#">Closed Orders</a></h4>
														</div>
													</div>
												</div>
												<div class="clear"></div>
											</div><!--End .article-->
											
										</div>
									</div>
								</div>
							</div>
							
							<div class="col-md-12 col-lg-4">
								<div class="card mb-4">
									Some Ads...
								</div>
							</div>
							
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
