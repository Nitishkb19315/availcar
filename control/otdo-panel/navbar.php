<div class="wrapper theme-2-active navbar-top-light horizontal-nav"><!-- close in footer.php -->
		<!-- Top Menu Items -->
			<nav class="navbar navbar-inverse navbar-fixed-top">
				<div class="nav-wrap">
					<div class="mobile-only-brand pull-left">
						<div class="nav-header pull-left">
							<div class="logo-wrap">
							<h3 class="text-uppercase">Admin Panel</h3>
							</div>
						</div>	
						<a id="toggle_nav_btn" class="toggle-left-nav-btn inline-block ml-20 pull-left" href="javascript:void(0);"><i class="ti-align-left"></i></a>
						<a id="toggle_mobile_search" data-toggle="collapse" data-target="#search_form" class="mobile-only-view" href="javascript:void(0);"><i class="zmdi zmdi-search"></i></a>
						<a id="toggle_mobile_nav" class="mobile-only-view" href="javascript:void(0);"><i class="ti-more"></i></a>
						<form id="search_form" role="search" class="top-nav-search collapse pull-left">
							<div class="input-group">
								<input type="text" name="example-input1-group2" class="form-control" placeholder="Search">
								<span class="input-group-btn">
								<button type="button" class="btn  btn-default"  data-target="#search_form" data-toggle="collapse" aria-label="Close" aria-expanded="true"><i class="zmdi zmdi-search"></i></button>
								</span>
							</div>
						</form>
					</div><!-- mobile-only-brand -->
				</div><!-- nav-wrap -->
			</nav>
			<!-- /Top Menu Items -->
			
			<!--  Menu Bar -->
			<div class="fixed-sidebar-left">
				<ul class="nav navbar-nav side-nav nicescroll-bar">
					<li class="navigation-header">
						<span>Main</span> 
						<hr/>
					</li>
					<li>
						<a class="active" href="dashboard.php" data-toggle="collapse" data-target="#dashboard_dr"><div class="pull-left"><i class="ti-dashboard mr-10"></i><span class="right-nav-text">Dashboard</span></div><div class="pull-right"><i class="ti-angle-down"></i></div><div class="clearfix"></div></a>
					</li>
					
					<li>
						<a href="admin-gallery-category.php" data-target="#ecom_dr"><div class="pull-left"><i class="fa fa-file-text mr-10"></i><span class="right-nav-text">Gallery Category</span></div><div class="pull-right"><i class="ti-angle-down"></i></div><div class="clearfix"></div></a>
					</li>
					<li>
						<a href="admin-gallery.php" data-toggle="collapse" data-target="#app_dr"><div class="pull-left"><i class="fa fa-image mr-10"></i><span class="right-nav-text">Gallery </span></div><div class="pull-right"><i class="ti-angle-down"></i></div><div class="clearfix"></div></a>
					</li>
					<!--<li>
					<a href="admin-video-category.php" data-toggle="collapse" data-target="#app_dr"><div class="pull-left"><i class="fa fa-file-text mr-10"></i><span class="right-nav-text">Video Category </span></div><div class="pull-right"><i class="ti-angle-down"></i></div><div class="clearfix"></div></a>
					</li> -->
					<li>
						<a href="admin-video.php" data-toggle="collapse" data-target="#app_dr"><div class="pull-left"><i class="fa fa-video-camera mr-10"></i><span class="right-nav-text">Video </span></div><div class="pull-right"><i class="ti-angle-down"></i></div><div class="clearfix"></div></a>
					</li>
					<li>
						<a href="admin-testimonial.php" data-target="#ecom_dr"><div class="pull-left"><i class="fa fa-user mr-10"></i><span class="right-nav-text">Testimonial</span></div><div class="pull-right"><i class="ti-angle-down"></i></div><div class="clearfix"></div></a>
					</li>
					<!-- <li>
						<a href="admin-make.php" data-target="#ecom_dr"><div class="pull-left"><i class="fa fa-car mr-10"></i><span class="right-nav-text">Make</span></div><div class="pull-right"><i class="ti-angle-down"></i></div><div class="clearfix"></div></a>
					</li>
					<li>
						<a href="admin-model.php" data-target="#ecom_dr"><div class="pull-left"><i class="fa fa-car mr-10"></i><span class="right-nav-text">Model</span></div><div class="pull-right"><i class="ti-angle-down"></i></div><div class="clearfix"></div></a>
					</li>
					<li>
						<a href="admin-variant.php" data-target="#ecom_dr"><div class="pull-left"><i class="fa fa-car mr-10"></i><span class="right-nav-text">Variant</span></div><div class="pull-right"><i class="ti-angle-down"></i></div><div class="clearfix"></div></a>
					</li> -->
					<li>
						<a href="admin-news.php" data-target="#ecom_dr"><div class="pull-left"><i class="fa fa-file-text mr-10"></i><span class="right-nav-text">News</span></div><div class="pull-right"><i class="ti-angle-down"></i></div><div class="clearfix"></div></a>
					</li>
					<li>
						<a href="admin-package.php" data-target="#ecom_dr"><div class="pull-left"><i class="fa fa-file-text mr-10"></i><span class="right-nav-text">Manage Package</span></div><div class="pull-right"><i class="ti-angle-down"></i></div><div class="clearfix"></div></a>
					</li>

					<!-- Drop Down Coding -->

					<li>    
						<a href="#" data-target="#ecom_dr"><div class="pull-left"><i class="fa fa-car mr-10"></i><span class="right-nav-text">Manage Cars</span></div><div class="pull-right"><i class="ti-angle-down"></i></div><div class="clearfix"></div></a>
						 <ul id="ecom_dr" class="collapse collapse-level-1">
							<li>
							<a href="admin-make.php" data-target="#ecom_dr"><div class="pull-left"><span class="right-nav-text">Manage Make</span></div><div class="pull-right"><i class="ti-angle-down"></i></div><div class="clearfix"></div></a>
							</li>
							<li>
								<a href="admin-model.php" data-target="#ecom_dr"><div class="pull-left"><span class="right-nav-text">Manage Model</span></div><div class="pull-right"><i class="ti-angle-down"></i></div><div class="clearfix"></div></a>
							</li>
							<li>
								<a href="admin-variant.php" data-target="#ecom_dr"><div class="pull-left"><span class="right-nav-text">Manage Variant</span></div><div class="pull-right"><i class="ti-angle-down"></i></div><div class="clearfix"></div></a>
							</li>
							<li>
								<a href="admin-feature.php" data-target="#ecom_dr"><div class="pull-left"><span class="right-nav-text">Manage Feature</span></div><div class="pull-right"><i class="ti-angle-down"></i></div><div class="clearfix"></div></a>
							</li>
							<li>
								<a href="admin-listing.php" data-target="#ecom_dr"><div class="pull-left"><span class="right-nav-text">Manage Listing</span></div><div class="pull-right"><i class="ti-angle-down"></i></div><div class="clearfix"></div></a>
							</li>
						</ul>
					</li>
					<li>
						<a href="logout.php" data-toggle="collapse" data-target="#app_dr"><div class="pull-left"><i class="fa fa-sign-out mr-10"></i><span class="right-nav-text">Logout </span></div><div class="pull-right"><i class="ti-angle-down"></i></div><div class="clearfix"></div></a>
					</li>
				</ul>
			</div><!-- fixed-sidebar-left -->