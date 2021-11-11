	<?php require_once("admin-header.php"); ?>
<?php require_once("navbar.php"); ?>
<?php confirm_logged_in(); ?>
<?php $data= get_listing_item($_GET['id']);?>
<div class="page-wrapper">
	<div class="container">
		<div class="row">
			<div class="col-sm-12">
				<ol class="breadcrumb">
					<li><a href="dashboard.php">Dashboard</a></li>
                    <li><a href="admin-listing.php">Listing</a></li>
					<li class="active"><span>Edit</span></li>
			  	</ol>
		  </div><!-- co;-sm-12 -->
		</div><!-- row -->

		<div class="row">
			<div class="col-sm-6 col-sm-offset-3">
				<?php   if(isset($_GET['er'])==1){ echo getError($_GET['er']); }  ?>
			</div>

		  	<div class="col-sm-10 col-sm-offset-1">
				<div class="panel panel-default border-panel card-view">
					<div class="panel-heading">
							<h3 class="text-center">Edit Listing</h3>
						<div class="clearfix"></div>
					</div>
					<div class="panel-wrapper collapse in">
						<div class="panel-body">
							<div class="form-wrap">
								<form action="editing-listing-exe.php" method="POST" enctype="multipart/form-data">
								<div class="row">
										<div class="col-sm-4">
											<div class="form-group">
												<label class="control-label mb-10 text-left" for="model">
												Username
												</label>
                                                <input type="hidden" name="id" value="<?php echo $data['id'] ?>">
												<input type="text" class="form-control" name="username" value="<?php echo $data['username'];?>" required="" Placeholder="Model">
											</div>
										</div>
										<div class="col-sm-4">
											<div class="form-group">
												<label class="control-label mb-10 text-left">
												Model Year
												</label>
												<input type="text" class="form-control" name="modelYear" value="<?php echo $data['model_year'];?>" required="" Placeholder="Model Year">
											</div>
										</div>
										<div class="col-sm-4">
											<div class="form-group">
												<label class="control-label mb-10 text-left" for="model">
												Make
												</label>
                                                <select class="form-control" required="" name="make" id="car_make">
                                                    <option value="" disabled>Select Make</option>
                                                    <?php 
                                                        $result = get_car_make();
                                                        if(mysqli_num_rows($result)>0){
                                                            while($row = mysqli_fetch_assoc($result)){

                                                    ?>
                                                    <option value="<?php echo $row['id']; ?>" <?php if($row['id']==$data['make_id']){ echo "selected";}else{ echo " ";} ?>><?php echo strtoupper($row['make']); ?></option>
                                                    <?php 
                                                            }
                                                        }
                                                    ?>
                                                </select>
											</div>
											</div>
										</div>
									</div><!-- row -->
									<div class="row">
										<div class="col-sm-4">
											<div class="form-group">
												<label class="control-label mb-10 text-left">
												Model
												</label>
                                                <select class="form-control" required="" name="model" id="car_model">
                                                    <option value="" disabled selected>Select Model</option>
                                                    <?php 
                                                        $result = get_car_models($data['make_id']);
                                                        if(mysqli_num_rows($result)>0){
                                                            while($row = mysqli_fetch_assoc($result)){
                                                    ?>
                                                    <option value="<?php echo $row['model_id']; ?>" <?php if($row['model_id']==$data['model_id']){ echo "selected";}else{ echo " ";} ?>><?php echo strtoupper($row['model']); ?></option>
                                                    <?php 
                                                            }
                                                        }
                                                    ?>
                                                </select>
											</div>
										</div>
										<div class="col-sm-4">
											<div class="form-group">
												<label class="control-label mb-10 text-left">
												Variant
												</label>
                                                <select class="form-control" required="" name="variant" id="car_variant">
                                                    <option value="" disabled selected>Select variant</option>
                                                    <?php 
                                                        $result = get_car_variants($data['make_id'],$data['model_id']);
                                                        if(mysqli_num_rows($result)>0){
                                                            while($row = mysqli_fetch_assoc($result)){

                                                    ?>
                                                    <option value="<?php echo $row['variant_id']; ?>" <?php if($row['variant_id']==$data['variant_id']){ echo "selected";}else{ echo " ";} ?>><?php echo strtoupper($row['variant']); ?></option>
                                                    <?php 
                                                            }
                                                        }
                                                    ?>
                                                </select>
											</div>
										</div>
										<div class="col-sm-4">
											<div class="form-group">
												<label class="control-label mb-10 text-left">
												Interior Color
												</label>
                                                <select class="form-control" required="" name="interiorColor" id="interiorColor">
                                                    <option value="" disabled >Select Interior Color</option>
													<option value="White">White</option>
													<option value="Black">Black</option>
													<option value="Silver">Silver</option>
													<option value="Gray">Gray</option>
													<option value="Red">Red</option>
													<option value="Blue">Blue</option>
													<option value="Beige">Beige</option>
													<option value="Yellow">Yellow</option>
													<option value="Green">Green</option>
													<option value="Brown">Brown</option>
													<option value="Burgundy">Burgundy</option>
													<option value="Charcoal">Charcoal</option>
													<option value="Gold">Gold</option>
													<option value="Pink">Pink</option>
													<option value="Purple">Purple</option>
													<option value="Tan">Tan</option>
													<option value="Turquoise">Turquoise</option>
                                                </select>
											</div>
										</div>
									</div><!-- row -->
									<div class="row">
										<div class="col-sm-4">
												<div class="form-group">
													<label class="control-label mb-10 text-left">
													Exterior Color
													</label>
													<select class="form-control" required="" name="exteriorColor" id="exteriorColor">
														<option value="" disabled >Select Color</option>
														<option value="White">White</option>
														<option value="Black">Black</option>
														<option value="Silver">Silver</option>
														<option value="Gray">Gray</option>
														<option value="Red">Red</option>
														<option value="Blue">Blue</option>
														<option value="Beige">Beige</option>
														<option value="Yellow">Yellow</option>
														<option value="Green">Green</option>
														<option value="Brown">Brown</option>
														<option value="Burgundy">Burgundy</option>
														<option value="Charcoal">Charcoal</option>
														<option value="Gold">Gold</option>
														<option value="Pink">Pink</option>
														<option value="Purple">Purple</option>
														<option value="Tan">Tan</option>
														<option value="Turquoise">Turquoise</option>
													</select>
												</div>
											</div>
											<div class="col-sm-4">
												<div class="form-group">
													<label class="control-label mb-10 text-left">
													Transmission Color
													</label>
													<select class="form-control" required="" name="transmission" id="transmission">
													
														<option value="" disabled>Select Transmission Type</option>
														<option value="Automatic">Automatic</option>
														<option value="Manual">Manual</option>
														<option value="Tiptronic">Tiptronic</option>
													</select>
												</div>
											</div>
											<div class="col-sm-4">
												<div class="form-group">
													<label class="control-label mb-10 text-left">
													Fuel Type
													</label>
													<select class="form-control" required="" name="fuel" id="fuel">
														<option value="" disabled>Select Fuel Type</option>
														<option value="CNG">CNG</option>
														<option value="Diesel">Diesel</option>
														<option value="Electric">Electric</option>
														<option value="Petrol">Petrol</option>
													</select>
													</select>
												</div>
											</div>
										</div>
									</div>
									<div class="row">
										<div class="col-sm-4">
											<div class="form-group">
												<label class="control-label mb-10 text-left" for="model">
												Sale Price
												</label>
												<input type="text" class="form-control" id="salePrice" name="salePrice" required="" Placeholder="Model">
											</div>
										</div>
										<div class="col-sm-4">
											<div class="form-group">
												<label class="control-label mb-10 text-left" for="model">
												Market Price
												</label>
												<input type="text" class="form-control" id="marketPrice" name="marketPrice" required="" Placeholder="Market Price">
											</div>
										</div>
									</div><!-- row -->
									
									<div class="row">
										<div class="col-sm-12">
											<div class="form-group">
												<input type="submit" name="submit" class="btn btn-orange btn-anim" value="Submit">
											</div>	
										</div>
									</div><!-- row -->
								</form>
							</div><!-- form wrap -->
						</div><!-- panel body -->
					</div><!-- panel wrapper -->
				</div><!-- panel -->
			</div><!-- col-md-6 -->
		</div><!-- row -->
	</div><!-- container -->
</div><!-- page wrapper -->

<?php require_once("admin-footer.php"); ?>
<script>
    $(document).ready(function() {
        $('#interiorColor').val(`<?php echo $data['interior_color']; ?>`);
        $('#exteriorColor').val(`<?php echo $data['exterior_color']; ?>`);
        $('#transmission').val(`<?php echo $data['transmission']; ?>`);
        $('#fuel').val(`<?php echo $data['fuel']; ?>`);
        $('#salePrice').val(`<?php echo $data['sale_price']; ?>`);
        $('#marketPrice').val(`<?php echo $data['market_price']; ?>`);
    })
</script>