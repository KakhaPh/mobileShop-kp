	<!-- Header -->
	<?php include_once 'blocks/header.php';?>
	
	<p><br><br></p>
	<p><br><br></p>
	<div class="container-fluid">
		<div class="row">
			<div class="col-md-2"></div>
			<div class="col-md-8" id="err_msg"></div>
			<div class="col-md-2"></div>
		</div>
		<div class="row">
			<div class="col-md-2"></div>
			<div class="col-md-8">
				<div class="panel panel-primary">
					<div class="panel-heading">Signup Form</div>
					<div class="panel-body">
				<form method="post" action="">
					<div class="row">
						<div class="col-md-6">
							<label for="f_name">First Name</label>
							<input type="text" id="f_name" name="f_name" class="form-control">
						</div>
						<div class="col-md-6">
							<label for="f_name">Last Name</label>
							<input type="text" id="l_name" name="l_name" class="form-control">
						</div>
					</div>

					<div class="row">
						<div class="col-md-6">
							<label for="email">Email</label>
							<input type="text" id="email" name="email" class="form-control">
						</div>
						<div class="col-md-6">
							<label for="password">Password</label>
							<input type="password" id="password" name="password" class="form-control">
						</div>
					</div>

					<div class="row">
						<div class="col-md-6">
							<label for="mobile">Mobile</label>
							<input type="text" id="mobile" name="mobile" class="form-control">
						</div>
						<div class="col-md-6"></div>
					</div>

					<div class="row">
						<div class="col-md-12">
							<label for="address1">Address </label>
							<input type="textarea" id="address1" name="address1" class="form-control">
						</div>
					</div>

					<br><br>
					<div class="col-md-12">
						<input type="button" class="btn btn-primary" value="Signup" name="signup" id="signup_btn">
					</div>

					</div>
					</div>
					</form>
				</div>
			</div>
		</div>
	</div><br><br><br>

	<!-- Footer -->
	<?php include_once 'blocks/footer.php'?>