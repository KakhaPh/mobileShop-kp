<?php
	session_start();
	if(!isset($_SESSION['uid'])){
	header('Location:index.php');
	}
 ?>

	<!-- Header -->
	<?php include_once 'blocks/header.php';?>
	
	<br><br><br><br><br>
	<div class='container-fluid'>
		<div class='row'>
		<div class='col-md-2'></div>
		<div class='col-md-8'>
			<div class="panel panel-default">
  				<div class="panel-heading">Customer Order Details</div>
  				<div class="panel-body">
    				<div class='col-md-6'><img src='assets/prod_images/iPad.jpg' style='float: right;'></div>
    				<div class='col-md-6'>
    					<table class='table table-hover'>
    					<p></p><p></p><br>
    						<tr><td><b>Product Name:</b></td><td>iPad</td></tr>
    						<tr><td><b>Product Price:</b></td><td>$25000</td></tr>
    						<tr><td><b>Quantity:</b></td><td>1</td></tr>
    						<tr><td><b>Payment:</b></td><td>Completed</td></tr>
    						<tr><td><b>Transaction ID:</b></td><td>02259xxxxxx</td></tr>
    					</table>
    				</div>
  				</div>
			</div>
		<div class='col-md-2'></div>
	</div>

	</div>


	<!-- Footer -->
	<?php include_once 'blocks/footer.php'?>