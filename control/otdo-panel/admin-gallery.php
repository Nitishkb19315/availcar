<?php require_once("admin-header.php"); ?>
<?php require_once("navbar.php"); ?>
<?php confirm_logged_in(); ?>
<div class="page-wrapper">
	<div class="container">
		<div class="row">
			<div class="col-sm-12">
				<ol class="breadcrumb">
					<li><a href="dashboard.php">Dashboard</a></li>
					<li class="active"><span>Gallery</span></li>
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
							<h3 class="text-center">Add Gallery</h3>
						<div class="clearfix"></div>
					</div>
					<div class="panel-wrapper collapse in">
						<div class="panel-body">
							<div class="form-wrap">
								<form action="gallery-exe.php" method="post" enctype="multipart/form-data">
									<div class="row">
										<div class="col-sm-12">
											<select name="category" class="form-control" required>
				                                <option disabled="disabled" selected="selected">Select Category</option>
				                                 <?php 
				                                  $result=ListCate();
				                                  if(mysqli_num_rows($result)>0){
				                                    $sn=1;
				                                    while($row=mysqli_fetch_assoc($result))
				                                    {
				                                    ?>
				                                      <option value=<?php echo $row['id'];?>><?php echo $row['category'];?></option>
				                                	<?php
				                              		}
				                            		}
				                            		?>
				                       		</select>
										</div>
									</div><!-- row --><br/>
									<div class="row">
										<div class="col-sm-12">
											<div class="form-group">
												<label class="control-label mb-10 text-left">
												Image
												</label>
												<input type="file" name="file_upload" required="">
											</div>
										</div>
									</div><!-- row --><br/>
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
							<h6 class="panel-title txt-dark">Gallery list</h6>
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
												<th>Category</th>
												<th>Image</th>
												<th class="text-center">Delete</th>
											</tr>
										</thead>
									
										<tbody> 
										<?php  
									    $result = List_Gallery();
									    if(mysqli_num_rows($result)>0){
									  	$sr=1;
									  	while($row=mysqli_fetch_assoc($result))
									  	{
										?>
										<tr>
										  <td><?php echo $sr++ ; ?></td>
										  <td><?php echo $row['category']; ?></td>
										  <td><img src="uploads/gallery/<?php echo $row['filename'];?>" height="100px" width="100px"></td>
                      					  <td class="text-center"><a href="delete-gallery.php?id=<?php echo $row['id']?>" class="text-red"><i class="zmdi zmdi-delete txt-danger txt-2x"></i></a></td>
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