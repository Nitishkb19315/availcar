<?php require_once("admin-header.php"); ?>
<?php require_once("navbar.php"); ?>
<?php confirm_logged_in(); ?>
<div class="page-wrapper">
	<div class="container">
		<div class="row">
			<div class="col-sm-12">
				<ol class="breadcrumb">
					<li><a href="dashboard.php">Dashboard</a></li>
					<li class="active"><span>Model</span></li>
			  	</ol>
		  </div><!-- co;-sm-12 -->
		</div><!-- row -->

		<div class="row">
			<div class="col-sm-6 col-sm-offset-3">
				<?php   if(isset($_GET['er'])==1){ echo getError($_GET['er']); }  ?>
			</div>

		  	<div class="col-sm-6 col-sm-offset-3">
				<div class="panel panel-default border-panel card-view">
					<div class="panel-heading">
							<h3 class="text-center">Add Model</h3>
						<div class="clearfix"></div>
					</div>
					<div class="panel-wrapper collapse in">
						<div class="panel-body">
							<div class="form-wrap">
								<form action="model-exe.php" method="post" enctype="multipart/form-data">
									<div class="row">
										<div class="col-sm-12">
											<div class="form-group">
												<label class="control-label mb-10 text-left">
												Category
												</label>
                                                <select class="form-control" required="" name="make" id="car_make">
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
									</div><!-- row -->
                                    <div class="row">
										<div class="col-sm-12">
											<div class="form-group">
												<label class="control-label mb-10 text-left" for="model">
												Model
												</label>
												<input type="text" class="form-control" id='model' name="model" required="" Placeholder="Model">
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
			<div class="col-sm-8 col-sm-offset-2">
				<div class="panel panel-default border-panel card-view">
					<div class="panel-heading">
						<div class="pull-left">
							<h6 class="panel-title txt-dark">Model list</h6>
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
												<th>Make</th>
                                                <th>Model</th>
												<th class="text-center">Delete</th>
											</tr>
										</thead> 
									
										<tbody> 
										<?php  
									    $result = get_model_list();
									    if(mysqli_num_rows($result)>0){
									  	$sr=1;
									  	while($row=mysqli_fetch_assoc($result))
									  	{
										?>
										<tr>
										  <td><?php echo $sr++ ; ?></td>
                                          <td><?php echo $row['make']; ?></td>
										  <td><?php echo $row['model']; ?></td>
                      					  <td class="text-center"><a href="delete-model.php?id=<?php echo $row['id']?>" class="text-red"><i class="zmdi zmdi-delete txt-danger txt-2x"></i></a></td>
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