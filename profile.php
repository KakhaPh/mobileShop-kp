<?php
	session_start();
	if(!isset($_SESSION['uid'])){
	header('Location:index.php');
	}
 ?>

<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>Profile <?=$_SESSION['uname']?></title>
	<link rel="stylesheet" type="text/css" href="assets/slick/slick.css"/>
	<link rel="stylesheet" type="text/css" href="assets/slick/slick-theme.css"/>
	<link rel="stylesheet" type="text/css" href="assets/bootstrap-3.3.6-dist/css/bootstrap.css">
	<link rel="stylesheet" type="text/css" href="assets/styles.css">
</head>
<body>
	<div class="navbar navbar-default navbar-fixed-top"  id="topnav">
		<div class="container-fluid">
			<div class="navbar-header">
				<a href="index.php" class="navbar-brand text-orangered">KP</a>
			</div>

			<ul class="nav navbar-nav">
			
				<li style="width:300px;left:10px;top:10px;"><input type="text" class="form-control" id="search" name=""></li>
				<li style="top:10px;left:20px;"><button class="btn btn-primary orangered" id="search_btn" name=""><span class='glyphicon glyphicon-search'></span></button></li>
			</ul>

			<ul class="nav navbar-nav navbar-right">
				<li id='shoppingcart'><a id="carticon" href="#" class="dropdown-toggle text-orangered" data-toggle="dropdown"><span class="glyphicon glyphicon-shopping-cart text-orangered"></span>Cart <span class="badge orangered">2</span>	</a>
					<div class="dropdown-menu" style="width: 400px;">
						<div class="panel panel-success">
							<div class="panel-heading">
								<div class="row">
									<div class="col-md-3"><strong>S. No.</strong></div>
									<div class="col-md-3"><strong>Product Image</strong></div>
									<div class="col-md-3"><strong>Product Name</strong></div>
									<div class="col-md-3"><strong>Price in $</strong></div>
								</div>
								<hr>
								<div id="cartmenu"> </div>
							</div>
							<div class="panel-body"></div>
							<div class="panel-footer"><center><a class="btn btn-sm btn-info orangered" href="cart.php">View Cart</a></center></div>
						</div>
					</div>
				</li>
				<li><a href="#" class="dropdown-toggle text-orangered" data-toggle="dropdown"><span class="glyphicon glyphicon-user text-orangered"></span class='text-orangered'>Hello, <?php echo $_SESSION['uname']; ?></a>
					<ul class="dropdown-menu">
						<li><a href="cart.php"><span class="glyphicon glyphicon-shopping-cart-large"></span> Cart</a></li>
						<li><a href="#">Change Password</a></li>
						<li><a href="logout.php">Logout</a></li>
					</ul>
				</li>
			</ul>
		</div>
	</div>
	<br><br><br><br><br><br>
	<!-- Slider Begins -->

	 <div class="one-time">
	    <div><img src="assets/images/card1.png"></div>
	    <div><img src="assets/images/card2.png"></div>
	    <div><img src="assets/images/card3.png"></div>
  	</div>

	<!-- Slider ends -->

	<br>



	<div class="container-fluid">
		<div class="row">
			<div class="col-md-1"></div>
			<div class="col-md-2">
			<div id="get_cat"></div>
				<div id="get_brand"></div>
			</div>
			<div class="col-md-8">
				<div class="row">
					<div class="col-md-12" id="cartmsg">
						
					</div>
				</div>
				<div class="panel panel-info">
					<div class="panel-heading text-center heading-orng white">--Featured Products--
							<div class='pull-right white'>
								Sort: &nbsp;&nbsp;&nbsp;<a href="#" id='price_sort' class="white">Price</a> | <a href="#" id='pop_sort' class="white">Popularity</a>
							</div>
					</div>
					<div class="panel-body">
					<div id="get_product"></div>
					</div>
					<div class="panel-footer">&copy; 2022</div>
				</div>
			</div>
			<div class="col-md-1"></div>
		</div>
		<div class="row">
			<div class="col-md-12" id="paginate">
				<ul class='pagination' id='pageno'>
					
				</ul>
			</div>


			<!-- Modal -->
				
				<div class="modal fade" id="prod_detail" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
				  <div class="modal-dialog" role="document">
				    <div class="modal-content">
				      <div class="modal-header">
				        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
				        <h4 class="modal-title" id="myModalLabel">Product Details</h4>
				      </div>
				      <div class="modal-body" id='dynamic_content'>
				        ...
				      </div>
				      <div class="modal-footer">
				        <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
				        
				      </div>
				    </div>
				  </div>
				</div>

			 <!-- Modal ends-->
		</div>
	</div>


	<!-- Footer -->
	<?php include_once 'blocks/footer.php'?>