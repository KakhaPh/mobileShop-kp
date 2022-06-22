<?php
	session_start();
	if(!isset($_SESSION['uid'])){
	header('Location:index.php');
	}
 ?>	
	<!-- Header -->
	<?php include_once 'blocks/header.php';?>
	
	<p><br><br></p>
	<p><br><br></p>

	<div class="container-fluid">
		<div class="row">
			<div class="col-md-2"></div>
			<div class="col-md-8">
			<div class="row">
				<div class="col-md-12" id="cart_msg"></div>
			</div>
				<div class="panel panel-primary text-center">
					<div class="panel-heading orangered">Cart Checkout</div>
					<div class="panel-body"></div>
					<div class="row">
						<div class="col-md-2"><b>Action</b></div>
						<div class="col-md-2"><b>Product Image</b></div>
						<div class="col-md-2"><b>Product Name</b></div>
						<div class="col-md-2"><b>Product Price</b></div>
						<div class="col-md-2"><b>Quantity</b></div>
						<div class="col-md-2"><b>Price in $</b></div>
					</div>
					<br><br>
					<div id='cartdetail'>
					</div>
					<div class="panel-footer">

					</div>
				</div>
				<button class='btn btn-lg pull-right orangered white' id='checkout_btn' data-toggle="modal" data-target="#myModal">Checkout</button>
			</div>

			<div class="col-md-2"></div>
		</div>
	</div><br><br><br><br><br><br><br><br><br><br><br><br>

	<!-- Footer -->
	<?php include_once 'blocks/footer.php'?>