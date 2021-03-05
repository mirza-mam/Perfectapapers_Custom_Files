<?php 
//session_start();
include_once("../includes/fetch_and_show.php");

	$obj = new fetch_and_show($_SESSION['user_email'],$_SESSION['user_id']);
	$user_data_row = $obj->show_data();

?>	

<a class="btn btn-stripped dropdown-toggle" id="dropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
<img src="../custom-assets/images/profile-pic.jpg" alt="profile photo" class="circle float-left profile-photo" width="50" height="auto">
<div class="username mt-1">
	<h4 class="mb-1"> <?php echo $user_data_row['user_name']; ?> </h4>
	<h6 class="text-muted">User</h6>
</div>
</a> 

<div class="dropdown-menu dropdown-menu-right" style="margin-right: 1.5rem;" aria-labelledby="dropdownMenuLink">
<a class="dropdown-item" href="https://perfectapapers.com/" target="_blank"><em class="fa fa-home mr-1"></em> Home Page </a> 
<a class="dropdown-item" href="../order-now.php" target="_blank"><em class="fa fa-credit-card-alt mr-1"></em> Order Now </a>
<a class="dropdown-item" href="../includes/logout.php?logout_btn=true"><em class="fa fa-power-off mr-1"></em> Logout</a></div>