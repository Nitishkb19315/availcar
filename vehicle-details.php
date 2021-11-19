<?php require_once("control\dashboard\includes\config.php"); ?>
<?php require_once("control\dashboard\includes/functions.php"); ?>

<?php 
if(isset($_GET['id']) && !empty($_GET['id'])){
  $vehicle_details = get_vehicle_details($_GET['id']);
  $agent_details = get_agent_details($_GET['id']);
  if(!$vehicle_details){
    header("Location: inventory-list.php");
  }
  $vehicle_details = mysqli_fetch_assoc($vehicle_details);
  $agent_details = mysqli_fetch_assoc($agent_details);
}else{
  header("Location: inventory-list.php");
}
?>

<!DOCTYPE html>
<html lang="zxx">
  <head>
      <?php require_once("head.php"); ?>
  </head>
  <body class="page">
               
    <!-- Loader-->
      <div id="page-preloader"><span class="spinner border-t_second_b border-t_prim_a"></span></div>
    <!-- Loader end-->

      
         <div class="l-theme animated-css animsition" data-header="sticky" data-header-top="200">
        
         <?php require_once("navbar.php"); ?>
        <div class="section-title-page area-bg area-bg_dark area-bg_op_60">
          <div class="area-bg__inner">
            <div class="container">
              <div class="row">
                <div class="col offset-lg-3">
                  <div class="b-title-page__wrap">
                    <h1 class="b-title-page">Vehicle details</h1>
                    <nav aria-label="breadcrumb">
                      <ol class="breadcrumb">
                        <li class="breadcrumb-item"><a href="index.html">Home</a></li>
                        <li class="breadcrumb-item active" aria-current="page">Vehicle details</li>
                      </ol>
                      <!-- end breadcrumb-->
                    </nav>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
        <!-- end .b-title-page-->
  
            
                  <div class="l-main-content">
        <div class="container">
          <section class="b-goods-f">
              
              
              <div class="row">
              <div class="col-lg-8">
                <!-- <div class="ui-subtitle">new seventh-generation 3 Series sedan</div> -->
                <h1 class="ui-title text-uppercase"><?php echo $vehicle_details['make']." ".$vehicle_details['model']." ".$vehicle_details['model_year'] ?></h1>
               
              </div>
              <div class="col-lg-4">
                <div class="b-goods-f-price">
                  <div class="b-goods-f-price__inner">
                    <div class="b-goods-f-price__msrp">MSRP:<strong> $<?php echo $vehicle_details['market_price'] ?></strong></div>
                    <div class="b-goods-f-price__main bg-primary">$<?php echo $vehicle_details['sale_price'] ?></div>
                  </div>
                  <div class="b-goods-f-price__note">Included Taxes &amp; Checkup*</div>
                </div>
              </div>
            </div>

            <div class="row">
              <div class="col-lg-8">
                <div class="b-goods-f__links">
                  <a class="b-goods-f__links-item" href="#">
                    <i class="ic fas fa-map-marker-alt text-primary"></i>Moscow, RU
                  </a>
                  <a class="b-goods-f__links-item" href="#">
                    <i class="ic fas fa-question text-primary"></i>Request More Info
                  </a>
                  <a class="b-goods-f__links-item" href="#">
                    <i class="ic fas fa-star text-primary"></i>Add To Favourite
                  </a>
                  <a class="b-goods-f__links-item" href="#"><i class="ic fas fa-car-side text-primary"></i>Schedule Test Drive
                  </a>
                  <a class="b-goods-f__links-item" href="email:test@test.test"><i class="ic fas fa-envelope text-primary"></i>Email Friend
                  </a>
                </div>
                <div class="b-goods-f__slider">
                  <div class="ui-slider-main js-slider-for">
                    <img class="img-scale" src="control/dashboard/uploads/listing_image/<?php echo($vehicle_details['main_image']); ?>" alt="foto"/>
                    <?php 
                    $images = get_listing_images($_GET['id']);
                    if(mysqli_num_rows($images)>0){
                      while($row = mysqli_fetch_array($images)){
                    ?>
                    
                    <img class="img-scale" src="control/dashboard/uploads/listing_image/<?php echo($row['image_name']); ?>" alt="foto"/>
                    <?php 
                      }
                    }
                    ?>
                  </div>
                  <div class="ui-slider-nav js-slider-nav">
                    <img class="img-scale" src="control/dashboard/uploads/listing_image/<?php echo($vehicle_details['main_image']); ?>" alt="foto"/>
                    <?php 
                    $images = get_listing_images($_GET['id']);
                    if(mysqli_num_rows($images)>0){
                      while($row = mysqli_fetch_array($images)){
                    ?>
                      <img class="img-scale" src="control/dashboard/uploads/listing_image/<?php echo($row['image_name']); ?>" alt="foto"/>
                    <?php 
                      }
                    }
                    ?>
                  </div>
                </div>
                <h2 class="b-goods-f__title">Vehicle Specifications</h2>
                <div class="row">
                  <div class="col-md-6">
                    <dl class="b-goods-f__descr row">
                      <dt class="b-goods-f__descr-title col-lg-5 col-md-12">Registration</dt>
                      <dd class="b-goods-f__descr-info col-lg-7 col-md-12"><?php echo($vehicle_details['model_year']) ?></dd>
                      <dt class="b-goods-f__descr-title col-lg-5 col-md-12">Brand / Model</dt>
                      <dd class="b-goods-f__descr-info col-lg-7 col-md-12"><?php echo($vehicle_details['make']." ".$vehicle_details['model']) ?></dd>
                      <dt class="b-goods-f__descr-title col-lg-5 col-md-12">Body Style</dt>
                      <dd class="b-goods-f__descr-info col-lg-7 col-md-12">Sedan</dd>
                      <dt class="b-goods-f__descr-title col-lg-5 col-md-12">Color</dt>
                      <dd class="b-goods-f__descr-info col-lg-7 col-md-12"><?php echo($vehicle_details['exterior_color']) ?></dd>
                      <dt class="b-goods-f__descr-title col-lg-5 col-md-12">Interior Color</dt>
                      <dd class="b-goods-f__descr-info col-lg-7 col-md-12"><?php echo($vehicle_details['interior_color']) ?></dd>
                      <dt class="b-goods-f__descr-title col-lg-5 col-md-12">Fuel Type</dt>
                      <dd class="b-goods-f__descr-info col-lg-7 col-md-12"><?php echo($vehicle_details['fuel']) ?></dd>
                      <!-- <dt class="b-goods-f__descr-title col-lg-5 col-md-12">Engine</dt>
                      <dd class="b-goods-f__descr-info col-lg-7 col-md-12">255 hp @5000 rpm</dd> -->
                    </dl>
                  </div>
                  <div class="col-md-6">
                    <dl class="b-goods-f__descr row">
                      <dt class="b-goods-f__descr-title col-lg-5 col-md-12">Condition</dt>
                      <dd class="b-goods-f__descr-info col-lg-7 col-md-12">Old</dd>
                      <dt class="b-goods-f__descr-title col-lg-5 col-md-12">Mileage</dt>
                      <dd class="b-goods-f__descr-info col-lg-7 col-md-12">20,000 mi</dd>
                      <dt class="b-goods-f__descr-title col-lg-5 col-md-12">Transmission</dt>
                      <dd class="b-goods-f__descr-info col-lg-7 col-md-12"><?php echo($vehicle_details['transmission']) ?></dd>
                      <dt class="b-goods-f__descr-title col-lg-5 col-md-12">Drivetrain</dt>
                      <dd class="b-goods-f__descr-info col-lg-7 col-md-12">All Wheels Drive</dd>
                      <dt class="b-goods-f__descr-title col-lg-5 col-md-12">Interior Color</dt>
                      <dd class="b-goods-f__descr-info col-lg-7 col-md-12">Black / Red</dd>
                      <dt class="b-goods-f__descr-title col-lg-5 col-md-12">No. Of Seats</dt>
                      <dd class="b-goods-f__descr-info col-lg-7 col-md-12">5</dd>
                    </dl>
                  </div>
                </div>
                <ul class="nav nav-tabs nav-vehicle-detail-tabs" id="myTab" role="tablist">
                  <li class="nav-item"><a class="nav-link active" id="overview-tab" data-toggle="tab" href="#overview" role="tab" aria-controls="overview" aria-selected="true">Overview</a></li>
                  <li class="nav-item"><a class="nav-link" id="features-tab" data-toggle="tab" href="#features" role="tab" aria-controls="features" aria-selected="false">Features & Options</a></li>
                  <!-- <li class="nav-item"><a class="nav-link" id="location-tab" data-toggle="tab" href="#location" role="tab" aria-controls="location" aria-selected="false">Vehicle Location</a></li>
                  <li class="nav-item"><a class="nav-link" id="reviews-tab" data-toggle="tab" href="#reviews" role="tab" aria-controls="reviews" aria-selected="false">Owner Reviews</a></li>
                   -->
                </ul>
                <div class="tab-content" id="myTabContent">
                  <div class="tab-pane fade show active" id="overview" role="tabpanel" aria-labelledby="overview-tab">
                    <p><?php echo($vehicle_details['description']); ?></p>
                    <!-- <p><strong>Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris</strong> nisi ut aliquip ex ea commodo cons equat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Exe pteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum. Sed umt perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque.</p>
                    <h3 class="b-goods-f__title-inner">General Information</h3>
                    <ul class="list list-mark-2">
                      <li>Enim ipsum ad minim veniams quis nostrud citation ullam laboris nisi</li>
                      <li>Consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore dolore</li>
                      <li>Ut enim ad minim veniam, quis nostrud exercitation ullamco</li>
                      <li>Laboris nisi ut aliquip ex ea comodo consequat duis aute irure dolor in</li>
                      <li>Reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla</li>
                    </ul> -->
                  </div>
                  <div class="tab-pane fade" id="features" role="tabpanel" aria-labelledby="features-tab">
                  <div class="row">
                  <div class="col-md-6">
                    <dl class="b-goods-f__descr row">
                      <?php 
                        $features = get_feature_name($vehicle_details['feature']);
                        $num =mysqli_num_rows($features);
                        $i=1;
                        if(mysqli_num_rows($features) > 0 ){
                          while($i <= $num/2 && $row = mysqli_fetch_assoc($features)){
                            $i++;
                      ?>
                          <dt class="b-goods-f__descr-title col-lg-5 col-md-12"><?php echo($row['feature']) ?></dt>
                          <dd class="b-goods-f__descr-info col-lg-7 col-md-12"></dd>
                      <?php 
                          }
                        }
                      ?>
                    </dl>
                  </div>
                  <div class="col-md-6">
                    <dl class="b-goods-f__descr row">
                    <?php
                        if(mysqli_num_rows($features) > 0 ){
                          while($i <= $num && $row = mysqli_fetch_assoc($features)){
                            $i++;
                      ?>
                          <dt class="b-goods-f__descr-title col-lg-5 col-md-12"><?php echo($row['feature']) ?></dt>
                          <dd class="b-goods-f__descr-info col-lg-7 col-md-12"></dd>
                      <?php 
                          }
                        }
                      ?>
                    </dl>
                  </div>
                </div>
                  </div>
                  <!-- <div class="tab-pane fade" id="location" role="tabpanel" aria-labelledby="location-tab">
                    <p>Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo cons equat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Exe pteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum. Sed umt perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque.</p>
                  </div>
                  <div class="tab-pane fade" id="reviews" role="tabpanel" aria-labelledby="reviews-tab">
                    <ul class="list list-mark-2">
                      <li>Enim ipsum ad minim veniams quis nostrud citation ullam laboris nisi</li>
                      <li>Consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore dolore</li>
                      <li>Ut enim ad minim veniam, quis nostrud exercitation ullamco</li>
                      <li>Laboris nisi ut aliquip ex ea comodo consequat duis aute irure dolor in</li>
                      <li>Reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla</li>
                    </ul>
                  </div> -->
                </div>
              </div>
              <div class="col-lg-4">
                <aside class="l-sidebar">
                    <?php 
                    if($agent_details['visibility'] == "Public"){
                    ?>
                    
                      <div class="b-seller">
                        <div class="b-seller__header">
                          <div class="b-seller__img"><img class="img-scale" src="assets/media/content/b-seller/1.jpg" alt="foto"/></div>
                          <div class="b-seller__title">
                            <div class="b-seller__name"><?php echo ($agent_details['fname']. " ".$agent_details['lname']); ?></div>
                            <div class="b-seller__category">Member Since August 2001</div>
                          </div>
                        </div>
                        <div class="b-seller__main"><i class="b-seller__ic fas fa-phone text-primary"></i>
                          <div class="b-seller__contact"><span class="d-block">Contact Seller</span><a class="b-seller__phone" href="tel:+91<?php echo($agent_details['mobile_no']); ?>">+91 <?php echo($agent_details['mobile_no']); ?></a></div>
                          <ul class="b-seller-soc list-unstyled">
                            <li class="b-seller-soc__item"><a class="b-seller-soc__link" href="#" target="_blank"><i class="ic fab fa-twitter"></i></a></li>
                            <li class="b-seller-soc__item"><a class="b-seller-soc__link" href="#" target="_blank"><i class="ic fab fa-facebook"></i></a></li>
                            <li class="b-seller-soc__item"><a class="b-seller-soc__link" href="#" target="_blank"><i class="ic fab fa-linkedin"></i></a></li>
                            <li class="b-seller-soc__item"><a class="b-seller-soc__link" href="#" target="_blank"><i class="ic fab fa-google-plus-g"></i></a></li>
                            <li class="b-seller-soc__item"><a class="b-seller-soc__link" href="#" target="_blank"><i class="ic fab fa-pinterest"></i></a></li>
                          </ul>
                        </div>
                      </div>
                    <?php 
                    }else{
                    ?>
                      <div class="b-seller">
                        <div class="b-seller__header">
                          <div class="b-seller__img"><img class="img-scale" src="assets/media/content/b-seller/1.jpg" alt="foto"/></div>
                          <div class="b-seller__title">
                            <div class="b-seller__name">Agent</div>
                          </div>
                        </div>
                        <div class="b-seller__main"><i class="b-seller__ic fas fa-phone text-primary"></i>
                          <div class="b-seller__contact"><span class="d-block">Contact</span><a class="b-seller__phone" href="tel:+91 <?php echo($headOfficeDetails['first_phone_no']) ?>">+91 <?php echo($headOfficeDetails['first_phone_no']) ?></a></div>
                          <ul class="b-seller-soc list-unstyled">
                            <li class="b-seller-soc__item"><a class="b-seller-soc__link" href="#" target="_blank"><i class="ic fab fa-twitter"></i></a></li>
                            <li class="b-seller-soc__item"><a class="b-seller-soc__link" href="#" target="_blank"><i class="ic fab fa-facebook"></i></a></li>
                            <li class="b-seller-soc__item"><a class="b-seller-soc__link" href="#" target="_blank"><i class="ic fab fa-linkedin"></i></a></li>
                            <li class="b-seller-soc__item"><a class="b-seller-soc__link" href="#" target="_blank"><i class="ic fab fa-google-plus-g"></i></a></li>
                            <li class="b-seller-soc__item"><a class="b-seller-soc__link" href="#" target="_blank"><i class="ic fab fa-pinterest"></i></a></li>
                          </ul>
                        </div>
                      </div>
                    <?php 
                    }
                    ?>

                  <!-- end .b-seller-->
                  
                  <div class="widget section-sidebar bg-gray widget-selecr-contact">
                      <h3 class="widget-title bg-dark"><i class="ic icon_mail_alt"></i>Message Seller</h3>
                    <div class="widget-content">
                      <div class="widget-inner">
                        <form>
                          <div class="form-group">
                            <input class="form-control" type="text" placeholder="Name"/>
                          </div>
                          <div class="form-group">
                            <textarea class="form-control" placeholder="Message" rows="4"></textarea>
                          </div>
                          <button class="btn btn-red btn-lg w-100">Send now</button>
                        </form>
                      </div>
                    </div>
                  </div>
                  <!-- <div class="widget section-sidebar bg-gray">
                    <h3 class="widget-title bg-dark"><i class="ic flaticon-money"></i>Find installment</h3>
                    <div class="widget-content">
                      <div class="widget-inner">
                        <form>
                          <div class="form-group">
                            <input class="form-control" type="text" placeholder="Loan Amount*"/>
                          </div>
                          <div class="form-group">
                            <input class="form-control" type="text" placeholder="Down Payment*"/>
                          </div>
                          <div class="form-group">
                            <input class="form-control" type="text" placeholder="Months Period*"/>
                          </div>
                          <div class="form-group">
                            <input class="form-control" type="text" placeholder="Interest Rate*"/>
                          </div>
                          <button class="btn btn-border btn-lg w-100">Estimate payment</button>
                        </form>
                      </div>
                    </div>
                    
                  </div> -->
                </aside>
              </div>
            </div>
          </section>
          <!-- end .b-goods-f-->
          
        </div>
      </div>
        
       
            
            
      <?php require_once("main-footer.php"); ?>
          <!-- .footer-->
      </div>
    </div>
    <!-- end layout-theme-->
    
    <?php require_once('footer.php'); ?>
  </body>
</html>