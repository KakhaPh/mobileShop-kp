<?php 
	session_start();
	if(isset($_SESSION['uid'])){
		header('location:profile.php');
	}
 ?>
	<!-- Header -->
	<?php include_once 'blocks/header.php';?>
	
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
		<!-- Sidebar -->
		<?php include_once 'blocks/sidebar.php'?>
				<div class="panel panel-info">
					<div class="panel-heading white text-center heading-orng">--Featured Products--
						<div class='pull-right'>
								Sort: &nbsp;&nbsp;&nbsp;<a href="#" id='price_sort' class="white">Price</a> | <a href="#" id='pop_sort' class="white">Popularity</a>
							</div>
					</div>
					<div class="panel-body">
					<div id="get_product" ></div>
					</div>
					<div class="panel-footer">&copy; 2022</div>
				</div>
			</div>
			<div class="col-md-1"></div>
		</div>
		<div class="row">
			<div class="col-md-12">
				<ul class='pagination' id='pageno'></ul>
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