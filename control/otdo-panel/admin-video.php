<?php require_once("admin-header.php"); ?>
<?php require_once("navbar.php"); ?>
<?php confirm_logged_in(); ?>
<div class="page-wrapper">
	<div class="container">
		<div class="row">
			<div class="col-sm-12">
				<ol class="breadcrumb">
					<li><a href="dashboard.php">Dashboard</a></li>
					<li class="active"><span>Video</span></li>
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
							<h3 class="text-center">Add Video</h3>
						<div class="clearfix"></div>
					</div>
					<div class="panel-wrapper collapse in">
						<div class="panel-body">
							<div class="form-wrap">
								<form action="video-exe.php" method="post" enctype="multipart/form-data">
									<div class="row">
										<div class="col-sm-12">
											<div class="form-group">
												<label class="control-label mb-10 text-left">
												Title
												</label>
												<input type="text" class="form-control" name="title" required="">
											</div>
										</div>
									</div><!-- row -->
									<div class="row">
										<div class="col-sm-12">
											<div class="form-group">
												<label class="control-label mb-10 text-left">
												Link
												</label>
												<input type="text" class="form-control" name="link" required="">
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
			<div class="col-sm-10 col-sm-offset-1">
				<div class="panel panel-default border-panel card-view">
					<div class="panel-heading">
						<div class="pull-left">
							<h6 class="panel-title txt-dark">Video list</h6>
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
												<th>Title</th>
												<th>Link</th>
												<th class="text-center">Delete</th>
											</tr>
										</thead>
									
										<tbody> 
										<?php  
									    $result = ListVideo();
									    if(mysqli_num_rows($result)>0){
									  	$sr=1;
									  	while($row=mysqli_fetch_assoc($result))
									  	{
										?>
										<tr> 
										  <td><?php echo $sr++ ; ?></td>
										  <td><?php echo $row['title']; ?></td>
										  <td><?php echo $row['link']; ?></td>
                      					  <td class="text-center"><a href="delete-video.php?id=<?php echo $row['id']?>" class="text-red"><i class="zmdi zmdi-delete txt-danger txt-2x"></i></a></td>
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