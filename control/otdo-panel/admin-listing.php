<?php require_once("admin-header.php"); ?>
<?php require_once("navbar.php"); ?>
<?php confirm_logged_in(); ?>
<div class="page-wrapper">
	<div class="container">
		<div class="row">
			<div class="col-sm-12">
				<ol class="breadcrumb">
					<li><a href="dashboard.php">Dashboard</a></li>
					<li class="active"><span>Listing</span></li>
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
							<h3 class="text-center">Add Listing</h3>
						<div class="clearfix"></div>
					</div>
					<div class="panel-wrapper collapse in">
						<div class="panel-body">
							<div class="form-wrap">
								<form action="listing-exe.php" method="POST" enctype="multipart/form-data">
								<div class="row">
										<div class="col-sm-4">
											<div class="form-group">
												<label class="control-label mb-10 text-left" for="model">
												Username
												</label>
												<input type="text" class="form-control" name="username" required="" Placeholder="Model">
											</div>
										</div>
										<div class="col-sm-4">
											<div class="form-group">
												<label class="control-label mb-10 text-left" for="model">
												Model Year
												</label>
												<input type="text" class="form-control" name="modelYear" required="" Placeholder="Model">
											</div>
										</div>
										<div class="col-sm-4">
											<div class="form-group">
												<label class="control-label mb-10 text-left" for="model">
												Make
												</label>
                                                <select class="form-control" required="" id="car_make" name="make" id="car_make">
                                                    <option value="" disabled selected>Select Make</option>
                                                    <?php 
                                                        $result = get_car_make();
                                                        if(mysqli_num_rows($result)>0){
                                                            while($row = mysqli_fetch_assoc($result)){

                                                    ?>
                                                    <option value="<?php echo $row['id']; ?>"><?php echo strtoupper($row['make']); ?></option>
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
                                                </select>
											</div>
										</div>
										<div class="col-sm-4">
											<div class="form-group">
												<label class="control-label mb-10 text-left">
												Interior Color
												</label>
                                                <select class="form-control" required="" name="interiorColor" >
                                                    <option value="" disabled selected>Select Interior Color</option>
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
													<select class="form-control" required="" name="exteriorColor" >
														<option value="" disabled selected>Select Color</option>
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
													<select class="form-control" required="" name="transmission" >
													
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
													<select class="form-control" required="" name="fuel" >
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
												<input type="text" class="form-control" name="salePrice" required="" Placeholder="Model">
											</div>
										</div>
										<div class="col-sm-4">
											<div class="form-group">
												<label class="control-label mb-10 text-left" for="model">
												Market Price
												</label>
												<input type="text" class="form-control" name="marketPrice" required="" Placeholder="Market Price">
											</div>
										</div>
										<div class="col-sm-4">
											<div class="form-group">
												<label class="control-label mb-10 text-left" for="model">
												Market Price
												</label>
												<input type="file" class="form-control" name="mainImage" required=""  >
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

		<div class="row">
			<div class="col-sm-12">
				<div class="panel panel-default border-panel card-view">
					<div class="panel-heading">
						<div class="pull-left">
							<h6 class="panel-title txt-dark">Make list</h6> 
						</div>
						<div class="clearfix"></div>
					</div>
					<div class="panel-wrapper collapse in">
						<div class="panel-body">
							<div class="table-wrap">
								<div class="table-responsive">
									<table id="datable_1" class="table table-hover display  pb-30" >
										<thead>
											<tr>
												<th>Sr No.</th>
												<th>photo</th>
												<th>DESCRIPTION</th>
												<th>STATUS</th>
												<th class="text-center">ACTION</th> 
											</tr>
										</thead>
									
										<tbody> 
										<?php  
									    $result = get_listing_list();
									    if(mysqli_num_rows($result)>0){
									  	$sr=1;
									  	while($row=mysqli_fetch_assoc($result))
									  	{
										?>
										<tr>
										  <td width="6%" class="text-center"><?php echo $sr++ ; ?></td>
										  <td width="20%"><img src="./uploads/listing_image/<?php echo $row['main_image']?>"  width="100%"></td>
										  <td class="text-left" text="left">
											  <p class="text-left">
												  	<h6><?php echo $row['make']?> <?php echo $row['model']?></h6>
												  	<p>by: <?php echo $row['username']?><br />
													  Market Price: (Rs. <?php echo $row['market_price']?>) <?php echo $row['sale_price']?> <br>
													  Condition: Used

													</p>
											  </p>
										  </td>
										  <td width="10%" class="text-center">
										  	<?php echo strtoupper($row['status'])?>
										  </td>
                      					  <td class="text-center">
											<a title="Delete" href="delete-listing.php?id=<?php echo $row['id']?>" class="text-red">
												<i class="zmdi zmdi-delete txt-danger txt-2x"></i>
											</a>
											<a title="Delete" href="editing-listing.php?id=<?php echo $row['id']?>" class="text-red">
												<i class="fas fa-pencil-alt txt-danger txt-2x"></i>
											</a>
											
										  </td>
										  </tr> 
										<?php
										}
										}
										?> 
										</tbody>
									</table>
								</div><!-- table responsive -->
							</div><!-- tabel wrap -->
						</div><!-- panel body -->
					</div><!-- panel wrapper -->
				</div><!-- panel -->
			</div><!-- col-sm-12 -->
		</div><!-- row -->
	</div><!-- container -->
</div><!-- page wrapper -->

<?php require_once("admin-footer.php"); ?>