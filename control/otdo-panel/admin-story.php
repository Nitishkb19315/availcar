<?php require_once("admin-header.php"); ?>
<?php require_once("navbar.php"); ?>
<?php confirm_logged_in(); ?>
<div class="page-wrapper">
	<div class="container">
		<div class="row">
			<div class="col-sm-12">
				<ol class="breadcrumb">
					<li><a href="dashboard.php">Dashboard</a></li>
					<li class="active"><span>Story</span></li>
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
							<h3 class="text-center">Add Success Story</h3> 
						<div class="clearfix"></div>
					</div>
					<div class="panel-wrapper collapse in">
						<div class="panel-body">
							<div class="form-wrap">
								<form action="story-exe.php" method="POST" enctype="multipart/form-data">
									<div class="row">
										<div class="col-sm-12">
											<div class="form-group">
												<input type="text" name="title" class="form-control" required="" placeholder="Enter Name">
											</div>
										</div>
									</div><!-- row -->
									<div class="row">
										<div class="col-sm-12">
											<div class="form-group">
												<textarea rows="5" type="text" name="detail" class="form-control" required="" placeholder="Enter Detail"></textarea>
											</div>
										</div>
									</div><!-- row -->
									<div class="row">
										<div class="col-sm-12">
											<div class="form-group">
												<input type="file" name="file_upload" required="" >
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
							<h6 class="panel-title txt-dark">Story list</h6> 
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
												<th>Name</th>
												<th>Detail</th>
												<th>Image</th>
												<th class="text-center">Delete</th> 
											</tr>
										</thead>
									
										<tbody> 
										<?php  
									    $result = get_story();
									    if(mysqli_num_rows($result)>0){
									  	$sr=1;
									  	while($row=mysqli_fetch_assoc($result))
									  	{
										?> 
										<tr>
										  <td><?php echo $sr++ ; ?></td>
										  <td><?php echo $row['title']; ?></td>
										  <td width="500px" class="text-justify"><?php echo $row['detail']; ?></td>
										  <td><img src="uploads/story/<?php echo $row['filename'];?>" height="100px" width="100px"></td>
                      					  <td class="text-center"><a href="delete-story.php?id=<?php echo $row['id']?>" class="text-red"><i class="zmdi zmdi-delete txt-danger txt-2x"></i></a></td>
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