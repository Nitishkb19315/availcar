<?php require_once("admin-header.php"); ?>
			
<div class="page-wrapper">
	<div class="container">
		<div class="row">
			<div class="col-sm-6 col-sm-offset-3">
				<?php   if(isset($_GET['er'])==1){ echo getError($_GET['er']); }  ?>
			</div>
		</div>

		<div class="row">
			<div class="col-sm-6 col-sm-offset-3">
				<div class="panel panel-default border-panel card-view">
					<div class="panel-heading">
							<h5 class="text-center">Admin Login</h5>
						<div class="clearfix"></div>
					</div>
					<div class="panel-wrapper collapse in">
						<div class="panel-body">
							<div class="form-wrap">
								<form action="login-exe.php" method="post" class="form-horizontal">
									<div class="form-group">
										<label class="control-label mb-10 col-sm-2">User Name</label>
										<div class="col-sm-10">
										<input type="text" class="form-control" placeholder="Enter username" name="uname">
										</div>
									</div>
									<div class="form-group">
										<label class="control-label mb-10 col-sm-2">Password:</label>
										<div class="col-sm-10"> 
										<input type="password" class="form-control" placeholder="Enter password" name="hpassword">
										</div>
									</div>
									<div class="form-group mb-0"> 
										<div class="col-sm-offset-2 col-sm-10">
										  <input type="submit" name="submit" class="btn btn-orange btn-anim" value="Submit">
										</div>
									</div>
									</form>
							</div><!-- form wrap -->
						</div><!-- panel body -->
					</div><!-- panel wrapper -->
				</div><!-- panel panel default -->
			</div><!-- col-sm-6 -->
		</div><!-- row -->
	</div><!-- container -->
</div><!-- page wrapper -->
<?php require_once("admin-footer.php"); ?>		