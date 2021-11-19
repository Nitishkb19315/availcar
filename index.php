<?php require_once("control\dashboard\includes\config.php"); ?>
<?php require_once("control\dashboard\includes/functions.php"); ?>
<!DOCTYPE html>
<html lang="zxx">

<head>
    <?php require_once("head.php") ?>
</head>

<body class="page">


    <!-- Loader-->
    <div id="page-preloader"><span class="spinner border-t_second_b border-t_prim_a"></span></div>
    <!-- Loader end-->


    <div class="l-theme animated-css animsition" data-header="sticky" data-header-top="200">
        <?php require_once('navbar.php') ?>
        <!-- ****************** carousel ******************** -->
        <div id="carouselExampleFade" class="carousel slide carousel-fade" data-ride="carousel">
            <div class="carousel-inner">
                <div class="carousel-item active">
                    <img src="assets\media\content\b-main-slider/banner1.png" class="d-block w-100" alt="...">
                </div>
                <div class="carousel-item">
                    <img src="assets\media\content\b-main-slider/banner2.jpg" class="d-block w-100" alt="...">
                </div>
                <div class="carousel-item">
                    <img src="assets\media\content\b-main-slider/banner3.png" class="d-block w-100" alt="...">
                </div>
            </div>
            <button class="carousel-control-prev" type="button" data-target="#carouselExampleFade" data-slide="prev">
                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                <span class="sr-only">Previous</span>
            </button>
            <button class="carousel-control-next" type="button" data-target="#carouselExampleFade" data-slide="next">
                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                <span class="sr-only">Next</span>
            </button>
        </div>
        <!-- end .main-slider-->
        <!-- ****************** search ******************** -->
        <div class="section-area bg-light">
            <div class="container">
                <div class="row">
                    <div class="col-12">
                        <div class="b-find">
                            <ul class="b-find-nav nav nav-tabs" id="findTab" role="tablist">
                                <li class="b-find-nav__item nav-item"><a class="b-find-nav__link nav-link active" id="tab-allCar" data-toggle="tab" href="#content-allCar" role="tab" aria-controls="content-allCar" aria-selected="true">All Car Types</a></li>
                                <!-- <li class="b-find-nav__item nav-item"><a class="b-find-nav__link nav-link" id="tab-newCars" data-toggle="tab" href="#content-newCars" role="tab" aria-controls="content-newCars" aria-selected="false">New Cars</a></li>
                                <li class="b-find-nav__item nav-item"><a class="b-find-nav__link nav-link" id="tab-usedCars" data-toggle="tab" href="#content-usedCars" role="tab" aria-controls="content-usedCars" aria-selected="false">Used Cars</a></li> -->
                            </ul>
                            <div class="b-find-content tab-content" id="findTabContent">
                                <div class="tab-pane fade show active" id="content-allCar">
                                    <form class="b-find__form" method="GET" action="inventory-list.php">
                                        <div class="b-find__row">
                                            <div class="b-find__main">
                                                <div class="b-find__inner">
                                                    <div class="b-find__item">
                                                        <div class="b-find__label"><span class="b-find__number">01</span> Select Make</div>
                                                        <div class="b-find__selector">
                                                            <select class="form-control" name="make_id" id="car_make">
                                                                <option value="" disabled selected>Select Make</option>
                                                                <?php
                                                                $result = get_car_make();
                                                                if (mysqli_num_rows($result) > 0) {
                                                                    while ($row = mysqli_fetch_assoc($result)) {
                                                                ?>
                                                                        <option value="<?php echo $row['id']; ?>"><?php echo strtoupper($row['make']); ?></option>

                                                                <?php
                                                                    }
                                                                }
                                                                ?>
                                                            </select>
                                                        </div>
                                                    </div>
                                                    <div class="b-find__item">
                                                        <div class="b-find__label"><span class="b-find__number">02</span> Select a Model</div>
                                                        <div class="b-find__selector">
                                                            <select class="form-control" name="model_id" id="car_model">
                                                                <option value="" disabled selected>Select Model</option>
                                                            </select>
                                                        </div>
                                                    </div>
                                                    <div class="b-find__item">
                                                        <div class="b-find__label"><span class="b-find__number">03</span> Price Range</div>
                                                        <div class="b-find__selector">
                                                            <select class="form-control" name="max_sale_price">
                                                                <option value="5000">Max 5000</option>
                                                                <option value="15000">Max 15000</option>
                                                                <option value="25000">Max 25000</option>
                                                            </select>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <button class="b-find__btn btn btn-primary" type="submit">Search</button>
                                        </div>

                                    </form>
                                </div>
                                <!-- <div class="tab-pane fade" id="content-newCars">
                                    <form class="b-find__form">
                                        <div class="b-find__row">
                                            <div class="b-find__main">
                                                <div class="b-find__inner">
                                                    <div class="b-find__item">
                                                        <div class="b-find__label"><span class="b-find__number">01</span> Select Make</div>
                                                        <div class="b-find__selector">
                                                            <select class="selectpicker" data-width="100%" data-style="ui-select">
                                                                <option>Audi</option>
                                                                <option>BMV</option>
                                                                <option>Opel</option>
                                                            </select>
                                                        </div>
                                                    </div>
                                                    <div class="b-find__item">
                                                        <div class="b-find__label"><span class="b-find__number">02</span> Select a Model</div>
                                                        <div class="b-find__selector">
                                                            <select class="selectpicker" data-width="100%" data-style="ui-select">
                                                                <option>Model 1</option>
                                                                <option>Model 2</option>
                                                                <option>Model 3</option>
                                                            </select>
                                                        </div>
                                                    </div>
                                                    <div class="b-find__item">
                                                        <div class="b-find__label"><span class="b-find__number">03</span> Price Range</div>
                                                        <div class="b-find__selector">
                                                            <select class="selectpicker" data-width="100%" data-style="ui-select">
                                                                <option>Max $5000</option>
                                                                <option>Max $15000</option>
                                                                <option>Max $25000</option>
                                                            </select>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <button class="b-find__btn btn btn-primary">Search</button>
                                        </div>
                                        <div class="b-find__checkbox-group"><span class="b-find__checkbox-item">
                                                <input class="forms__check" id="newCars2" type="checkbox" checked="checked" />
                                                <label class="forms__label forms__label-check" for="newCars2">New Cars</label></span><span class="b-find__checkbox-item">
                                                <input class="forms__check" id="usedCars2" type="checkbox" />
                                                <label class="forms__label forms__label-check" for="usedCars2">Used Cars</label></span></div>
                                    </form>
                                </div>
                                <div class="tab-pane fade" id="content-usedCars">
                                    <form class="b-find__form">
                                        <div class="b-find__row">
                                            <div class="b-find__main">
                                                <div class="b-find__inner">
                                                    <div class="b-find__item">
                                                        <div class="b-find__label"><span class="b-find__number">01</span> Select Make</div>
                                                        <div class="b-find__selector">
                                                            <select class="selectpicker" data-width="100%" data-style="ui-select">
                                                                <option>Audi</option>
                                                                <option>BMV</option>
                                                                <option>Opel</option>
                                                            </select>
                                                        </div>
                                                    </div>
                                                    <div class="b-find__item">
                                                        <div class="b-find__label"><span class="b-find__number">02</span> Select a Model</div>
                                                        <div class="b-find__selector">
                                                            <select class="selectpicker" data-width="100%" data-style="ui-select">
                                                                <option>Model 1</option>
                                                                <option>Model 2</option>
                                                                <option>Model 3</option>
                                                            </select>
                                                        </div>
                                                    </div>
                                                    <div class="b-find__item">
                                                        <div class="b-find__label"><span class="b-find__number">03</span> Price Range</div>
                                                        <div class="b-find__selector">
                                                            <select class="selectpicker" data-width="100%" data-style="ui-select">
                                                                <option>Max $5000</option>
                                                                <option>Max $15000</option>
                                                                <option>Max $25000</option>
                                                            </select>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <button class="b-find__btn btn btn-primary">Search</button>
                                        </div>
                                        <div class="b-find__checkbox-group"><span class="b-find__checkbox-item">
                                                <input class="forms__check" id="newCars3" type="checkbox" checked="checked" />
                                                <label class="forms__label forms__label-check" for="newCars3">New Cars</label></span><span class="b-find__checkbox-item">
                                                <input class="forms__check" id="usedCars3" type="checkbox" />
                                                <label class="forms__label forms__label-check" for="usedCars3">Used Cars</label></span></div>
                                    </form>
                                </div> -->
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- end .b-find-->
        <!-- ****************** welcome to availcar ******************** -->
        <section class="b-welcome section-default">
            <div class="container">
                <div class="row">
                    <div class="col-xl-6">
                        <div class="ui-title-slogan">Helps you to find your next car easily</div>
                        <h2 class="ui-title">Welcome to<span class="text-primary"> AvailCar</span></h2>
                        <p>AvailCar.com is India's growing car search venture that helps car user’s, buyer’s & used cars dealers to search best & fair deals. Its website and app carry rich automotive content such as expert reviews, detailed specs and prices, comparisons as well as videos and pictures of all car brands and models available in India. The company has tie-ups with many auto manufacturers, more than 2500 car dealers and numerous of financial institutions to avail the purchase of vehicles and facility of finance.</p>
                    </div>
                </div>
                <div class="row">
                    <div class="col-xl-7">
                        <ul class="b-welcome-list list-unstyled d-sm-flex justify-content-around">
                            <li class="b-welcome-list__item flex-fill"><i class="ic flaticon-car"></i>We Offers Lower
                                <br> Cars Prices
                            </li>
                            <li class="b-welcome-list__item flex-fill"><i class="ic flaticon-gearbox"></i>Largest cars
                                <br> Dealership
                            </li>
                            <li class="b-welcome-list__item flex-fill"><i class="ic flaticon-wrench"></i>Multipoint Safety
                                <br> Checks offers
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </section>
        <!-- end .b-welcome-->

        <!-- ****************** featured vehicles ******************** -->
        <section class="section-carousel">
            <div class="container">
                <div class="row">
                    <div class="col-12">
                        <div class="ui-title-slogan">Helps you to find your next car easily</div>
                        <h2 class="ui-title">Featured<span class="text-primary"> Vehicles</span></h2>
                    </div>
                </div>
            </div>
            <div class="section-carousel__inner bg-dark">
                <div class="js-slider" data-slick="{&quot;slidesToShow&quot;: 5,  &quot;slidesToScroll&quot;: 5, &quot;infinite&quot;: true, &quot;responsive&quot;: [{&quot;breakpoint&quot;: 1800, &quot;settings&quot;: {&quot;slidesToShow&quot;: 4, &quot;slidesToScroll&quot;: 4}}, {&quot;breakpoint&quot;: 1400, &quot;settings&quot;: {&quot;slidesToShow&quot;: 3, &quot;slidesToScroll&quot;: 1}}, {&quot;breakpoint&quot;: 1040, &quot;settings&quot;: {&quot;slidesToShow&quot;: 2, &quot;slidesToScroll&quot;: 1}}, {&quot;breakpoint&quot;: 767, &quot;settings&quot;: {&quot;slidesToShow&quot;: 1, &quot;slidesToScroll&quot;: 1}}]}">
                    <?php
                    $data = get_inventory_list_with_limit(5);
                    if (mysqli_num_rows($data) > 0) {
                        while ($row = mysqli_fetch_assoc($data)) {
                    ?>
                            <div class="b-goods-f b-goods-f_mod-a">
                                <div class="b-goods-f__media">
                                    <a href="./vehicle-details.php?id=<?php echo ($row['id']) ?>" class="d-block"><img class="b-goods-f__img img-scale " src="./control/dashboard/uploads/listing_image/<?php if (!empty(trim($row['main_image']))) {
                                                                                                                                                                                                            echo $row['main_image'];
                                                                                                                                                                                                        } else {
                                                                                                                                                                                                            echo "defaultImage.jpg";
                                                                                                                                                                                                        } ?>" alt="foto" /></a>
                                </div>
                                <div class="b-goods-f__main">
                                    <div class="b-goods-f__descrip">
                                        <div class="b-goods-f__title"><span><?php echo ($row['make'] . " " . $row['model'] . " " . $row['variant']); ?></span></div>
                                        <div class="b-goods-f__info">Magna aliqua enim aduas veniam quis nostrud exercitation ullam laboris aliquip.</div>
                                        <ul class="b-goods-f__list list-unstyled">
                                            <li class="b-goods-f__list-item"><i class="ic flaticon-speedometer"></i> 35,000km</li>
                                            <li class="b-goods-f__list-item"><i class="ic flaticon-car-1"></i>Model: <?php echo ($row['model_year']); ?></li>
                                            <li class="b-goods-f__list-item"><i class="ic flaticon-gearshift"></i> Auto - <?php echo ($row['transmission']); ?></li>
                                        </ul>
                                    </div>
                                    <div class="b-goods-f__sidebar"><span class="b-goods-f__price-group"><span class="b-goods-f__price bg-primary"><span class="b-goods-f__price-numb">$45,800</span></span>
                                        </span>
                                    </div>
                                </div>
                            </div>
                            <!-- end .b-goods-->
                    <?php
                        }
                    }
                    ?>
                </div>
                <div class="container">
                    <div class="row">
                        <div class="col-12"><a class="section-carousel__btn btn btn-primary" href="inventory-list.php"><i class="ic icon-list"></i> View All Cars Listings</a></div>
                    </div>
                </div>
            </div>
        </section>
        <!-- end .b-carousel-->

        <!-- ****************** looking section ******************** -->
        <section class="b-bnr-2 section-default">
            <div class="b-bnr-2__figure"><img class="b-bnr-2__img img-fluid" src="assets/car.png" alt="auto" /></div>
            <div class="container">
                <div class="row">
                    <div class="col-md-6">
                        <div class="b-bnr-2__section b-bnr-2__section_first bg-dark">
                            <h2 class="b-bnr-2__title">Are you looking to<br>buy a car?</h2><a class="b-bnr-2__link" href="./inventory-list.php">Start searching our inventory that includes 2000+ cars</a>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="b-bnr-2__section b-bnr-2__section_second bg-primary">
                            <div class="b-bnr-2__title">Are you looking to
                                <br>sell your car?
                            </div><a class="b-bnr-2__link" href="./control/dashboard/user-add-listing.php">Add your vehicle to inventory & reach 3k potential buyers</a>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- end .b-carousel-->

        <!-- *********service we offers****************** -->
        <!-- <section class="b-services section-default bg-light">
            <div class="container">
                <div class="row">
                    <div class="col-lg-6">
                        <ul class="b-services-nav nav" id="servicesTab" role="tablist">
                            <li class="b-services-nav__item nav-item col-lg-6 col-md-4"><a class="b-services-nav__link nav-link active" id="repairing-tab" data-toggle="tab" href="#repairing" role="tab" aria-controls="repairing" aria-selected="true"><span class="b-services-nav__number">01</span><i class="ic flaticon-car-door"></i><span class="b-services-nav__info">Parts Repairing</span></a></li>
                            <li class="b-services-nav__item nav-item col-lg-6 col-md-4"><a class="b-services-nav__link nav-link" id="inspection-tab" data-toggle="tab" href="#inspection" role="tab" aria-controls="inspection" aria-selected="false"><span class="b-services-nav__number">02</span><i class="ic flaticon-plunger"></i><span class="b-services-nav__info">Car Inspection</span></a></li>
                            <li class="b-services-nav__item nav-item col-lg-6 col-md-4"><a class="b-services-nav__link nav-link" id="trade-tab" data-toggle="tab" href="#trade" role="tab" aria-controls="trade" aria-selected="false"><span class="b-services-nav__number">03</span><i class="ic flaticon-car-2"></i><span class="b-services-nav__info">Vehicle Trade-In</span></a></li>
                            <li class="b-services-nav__item nav-item col-lg-6 col-md-4"><a class="b-services-nav__link nav-link" id="painting-tab" data-toggle="tab" href="#painting" role="tab" aria-controls="painting" aria-selected="false"><span class="b-services-nav__number">04</span><i class="ic flaticon-paint-roller"></i><span class="b-services-nav__info">Auto Painting</span></a></li>
                            <li class="b-services-nav__item nav-item col-lg-6 col-md-4"><a class="b-services-nav__link nav-link" id="financing-tab" data-toggle="tab" href="#financing" role="tab" aria-controls="financing" aria-selected="false"><span class="b-services-nav__number">05</span><i class="ic flaticon-money"></i><span class="b-services-nav__info">Auto Financing</span></a></li>
                            <li class="b-services-nav__item nav-item col-lg-6 col-md-4"><a class="b-services-nav__link nav-link" id="delivery-tab" data-toggle="tab" href="#delivery" role="tab" aria-controls="delivery" aria-selected="false"><span class="b-services-nav__number">06</span><i class="ic flaticon-car-4"></i><span class="b-services-nav__info">Vehicle Delivery</span></a></li>
                        </ul>
                    </div>
                    <div class="col-lg-6">
                        <div class="b-services__main">
                            <div class="ui-title-slogan">Helps you to find your next car easily</div>
                            <h2 class="ui-title">Services We<span class="text-primary"> Offers</span></h2>
                            <div class="b-services-content tab-content" id="servicesTabContent">
                                <div class="b-services-content__item tab-pane fade show active" id="repairing" role="tabpanel" aria-labelledby="repairing-tab"><img class="img-fluid" src="assets/media/content/b-services/1.jpg" alt="foto" />
                                    <h3 class="b-services-content__title ui-title-sm">Parts Repairing</h3>
                                    <p>Edipisicing elit sed do eiusmod tempor incididunt ut labore et dolore magna aliqa Ut enim ad minim veniam, quis nostrud exercitation ullam co laboris nisi ut aliquip comsecdo consequat duis aute irure dolorin reprehenderits. Non proident sunt in culpa qudesa officia deserunt mollit anim id est laborum.</p>
                                </div>
                                <div class="b-services-content__item tab-pane fade" id="inspection" role="tabpanel" aria-labelledby="inspection-tab"><img class="img-fluid" src="assets/media/content/b-services/1.jpg" alt="foto" />
                                    <h3 class="b-services-content__title ui-title-sm">Car Inspection</h3>
                                    <p>Edipisicing elit sed do eiusmod tempor incididunt ut labore et dolore magna aliqa Ut enim ad minim veniam, quis nostrud exercitation ullam co laboris nisi ut aliquip comsecdo consequat duis aute irure dolorin reprehenderits. Non proident sunt in culpa qudesa officia deserunt mollit anim id est laborum.</p>
                                </div>
                                <div class="b-services-content__item tab-pane fade" id="trade" role="tabpanel" aria-labelledby="trade-tab"><img class="img-fluid" src="assets/media/content/b-services/1.jpg" alt="foto" />
                                    <h3 class="b-services-content__title ui-title-sm">Vehicle Trade-In</h3>
                                    <p>Edipisicing elit sed do eiusmod tempor incididunt ut labore et dolore magna aliqa Ut enim ad minim veniam, quis nostrud exercitation ullam co laboris nisi ut aliquip comsecdo consequat duis aute irure dolorin reprehenderits. Non proident sunt in culpa qudesa officia deserunt mollit anim id est laborum.</p>
                                </div>
                                <div class="b-services-content__item tab-pane fade" id="painting" role="tabpanel" aria-labelledby="painting-tab"><img class="img-fluid" src="assets/media/content/b-services/1.jpg" alt="foto" />
                                    <h3 class="b-services-content__title ui-title-sm">Auto Painting</h3>
                                    <p>Edipisicing elit sed do eiusmod tempor incididunt ut labore et dolore magna aliqa Ut enim ad minim veniam, quis nostrud exercitation ullam co laboris nisi ut aliquip comsecdo consequat duis aute irure dolorin reprehenderits. Non proident sunt in culpa qudesa officia deserunt mollit anim id est laborum.</p>
                                </div>
                                <div class="b-services-content__item tab-pane fade" id="financing" role="tabpanel" aria-labelledby="financing-tab"><img class="img-fluid" src="assets/media/content/b-services/1.jpg" alt="foto" />
                                    <h3 class="b-services-content__title ui-title-sm">Auto Financing</h3>
                                    <p>Edipisicing elit sed do eiusmod tempor incididunt ut labore et dolore magna aliqa Ut enim ad minim veniam, quis nostrud exercitation ullam co laboris nisi ut aliquip comsecdo consequat duis aute irure dolorin reprehenderits. Non proident sunt in culpa qudesa officia deserunt mollit anim id est laborum.</p>
                                </div>
                                <div class="b-services-content__item tab-pane fade" id="delivery" role="tabpanel" aria-labelledby="delivery-tab"><img class="img-fluid" src="assets/media/content/b-services/1.jpg" alt="foto" />
                                    <h3 class="b-services-content__title ui-title-sm">Vehicle Delivery</h3>
                                    <p>Edipisicing elit sed do eiusmod tempor incididunt ut labore et dolore magna aliqa Ut enim ad minim veniam, quis nostrud exercitation ullam co laboris nisi ut aliquip comsecdo consequat duis aute irure dolorin reprehenderits. Non proident sunt in culpa qudesa officia deserunt mollit anim id est laborum.</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section> -->
        <!-- end .b-services-->

        <!-- ************************* booking section  ************************* -->
        <section class="b-bnr bg-dark">
            <div class="container">
                <div class="row">
                    <div class="col-xl-6">
                        <div class="b-bnr__main">
                            <h2 class="b-bnr__title">Book your Free Car Inspection</h2>
                            <div class="b-bnr__info">Labore dolore magna aliqua minim ipsum veniam quis nostrud exercitation</div>
                        </div>
                    </div>
                    <div class="col-xl-6">
                        <div class="b-bnr__second">
                            <div class="b-bnr-contacts">
                                <div class="b-bnr-contacts__info">Call Us For Booking Vehicle</div><a class="b-bnr-contacts__phone" href="tel:<?php echo ($headOfficeDetails['first_phone_no']) ?>"><i class="ic icon-call-end text-primary"></i> +91 <?php echo ($headOfficeDetails['first_phone_no']) ?></a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- end .b-bnr-->
        <!-- ************************* counter  ************************* -->
        <div class="section-progress">
            <div class="container">
                <ul class="b-progress-list row list-unstyled">
                    <li class="b-progress-list__item col-md-3">
                        <div class="b-progress-list__wrap bg-light"><span class="b-progress-list__name">Vehicles Stock</span><span class="b-progress-list__percent js-chart" data-percent="3874"><span class="js-percent"></span></span>
                        </div>
                    </li>
                    <li class="b-progress-list__item col-md-3">
                        <div class="b-progress-list__wrap bg-light"><span class="b-progress-list__name">dealers served</span><span class="b-progress-list__percent js-chart" data-percent="299"><span class="js-percent"></span><span>+</span></span>
                        </div>
                    </li>
                    <li class="b-progress-list__item col-md-3">
                        <div class="b-progress-list__wrap bg-light"><span class="b-progress-list__name">Happy Customers</span><span class="b-progress-list__percent js-chart" data-percent="6403"><span class="js-percent"></span></span>
                        </div>
                    </li>
                    <li class="b-progress-list__item col-md-3">
                        <div class="b-progress-list__wrap bg-light"><span class="b-progress-list__name">vehicles on sale</span><span class="b-progress-list__percent js-chart" data-percent="1450"><span class="js-percent"></span><span>+</span></span>
                        </div>
                    </li>
                </ul>
            </div>
        </div>
        <!-- end .b-progress-->
        <!-- ************************* Our Vehicles Listing  ************************* -->
        <section class="b-isotope section-default">
            <div class="container">
                <div class="row">
                    <div class="col-12 text-center">
                        <div class="ui-title-slogan">Helps you to find perfect car</div>
                        <h2 class="ui-title">Our Vehicles<span class="text-primary"> Listing</span></h2>
                        <ul class="b-isotope-filter list-unstyled">
                            <li class="current"><a href="" data-filter="*">Show All</a></li>
                            <li><a href="" data-filter=".bmw">BMW</a></li>
                            <li><a href="" data-filter=".honda">Honda</a></li>
                            <li><a href="" data-filter=".mercedes">Mercedes</a></li>
                            <li><a href="" data-filter=".rover">Range Rover</a></li>
                        </ul>
                    </div>
                </div>
                <ul class="b-isotope-grid grid list-unstyled row">
                    <li class="grid-sizer col-lg-4 col-md-6"></li>
                    <li class="b-isotope-grid__item grid-item col-lg-4 col-md-6 web honda">
                        <div class="b-goods-f b-goods-f_dark">
                            <div class="b-goods-f__media">
                                <a href="#"><img class="b-goods-f__img img-scale" src="assets/media/content/b-goods/360x260/1.jpg" alt="foto" /></a>
                            </div>
                            <div class="b-goods-f__main">
                                <div class="b-goods-f__descrip">
                                    <div class="b-goods-f__title"><span>Jaguar GX 490i</span>
                                    </div>
                                    <div class="b-goods-f__info">Magna aliqua enim aduas veniam quis nostrud exercitation ullam laboris aliquip.</div>
                                    <ul class="b-goods-f__list list-unstyled">
                                        <li class="b-goods-f__list-item"><span class="b-goods-f__list-info">35,000km</span></li>
                                        <li class="b-goods-f__list-item"><span class="b-goods-f__list-info">2019</span></li>
                                        <li class="b-goods-f__list-item"><span class="b-goods-f__list-info">Manual</span></li>
                                        <li class="b-goods-f__list-item"><span class="b-goods-f__list-info">Petrol</span></li>
                                        <li class="b-goods-f__list-item"><span class="b-goods-f__list-info">160 hp</span></li>
                                    </ul>
                                </div>
                                <div class="b-goods-f__sidebar"><span class="b-goods-f__price-group"><span class="b-goods-f__price"><span class="b-goods-f__price-numb">$30,480</span></span>
                                    </span>
                                </div>
                            </div>
                        </div>
                        <!-- end .b-goods-->
                    </li>
                    <li class="b-isotope-grid__item grid-item col-lg-4 col-md-6 web bmw">
                        <div class="b-goods-f b-goods-f_dark">
                            <div class="b-goods-f__media">
                                <a href="#"><img class="b-goods-f__img img-scale" src="assets/media/content/b-goods/360x260/2.jpg" alt="foto" /></a>
                            </div>
                            <div class="b-goods-f__main">
                                <div class="b-goods-f__descrip">
                                    <div class="b-goods-f__title"><span class="b-goods-f__label bg-primary">NEW</span><span>Volkswagen Tiguan</span>
                                    </div>
                                    <div class="b-goods-f__info">Magna aliqua enim aduas veniam quis nostrud exercitation ullam laboris aliquip.</div>
                                    <ul class="b-goods-f__list list-unstyled">
                                        <li class="b-goods-f__list-item"><span class="b-goods-f__list-info">35,000km</span></li>
                                        <li class="b-goods-f__list-item"><span class="b-goods-f__list-info">2019</span></li>
                                        <li class="b-goods-f__list-item"><span class="b-goods-f__list-info">Manual</span></li>
                                        <li class="b-goods-f__list-item"><span class="b-goods-f__list-info">Petrol</span></li>
                                        <li class="b-goods-f__list-item"><span class="b-goods-f__list-info">160 hp</span></li>
                                    </ul>
                                </div>
                                <div class="b-goods-f__sidebar"><span class="b-goods-f__price-group"><span class="b-goods-f__price"><span class="b-goods-f__price-numb">$45,800</span></span>
                                    </span>
                                </div>
                            </div>
                        </div>
                        <!-- end .b-goods-->
                    </li>
                    <li class="b-isotope-grid__item grid-item col-lg-4 col-md-6 web honda">
                        <div class="b-goods-f b-goods-f_dark">
                            <div class="b-goods-f__media">
                                <a href="#"><img class="b-goods-f__img img-scale" src="assets/media/content/b-goods/360x260/3.jpg" alt="foto" /></a>
                            </div>
                            <div class="b-goods-f__main">
                                <div class="b-goods-f__descrip">
                                    <div class="b-goods-f__title"><span>Tesla Model RX3</span>
                                    </div>
                                    <div class="b-goods-f__info">Magna aliqua enim aduas veniam quis nostrud exercitation ullam laboris aliquip.</div>
                                    <ul class="b-goods-f__list list-unstyled">
                                        <li class="b-goods-f__list-item"><span class="b-goods-f__list-info">35,000km</span></li>
                                        <li class="b-goods-f__list-item"><span class="b-goods-f__list-info">2019</span></li>
                                        <li class="b-goods-f__list-item"><span class="b-goods-f__list-info">Manual</span></li>
                                        <li class="b-goods-f__list-item"><span class="b-goods-f__list-info">Petrol</span></li>
                                        <li class="b-goods-f__list-item"><span class="b-goods-f__list-info">160 hp</span></li>
                                    </ul>
                                </div>
                                <div class="b-goods-f__sidebar"><span class="b-goods-f__price-group"><span class="b-goods-f__price"><span class="b-goods-f__price-numb">$18,250</span></span>
                                    </span>
                                </div>
                            </div>
                        </div>
                        <!-- end .b-goods-->
                    </li>
                    <li class="b-isotope-grid__item grid-item col-lg-4 col-md-6 web rover">
                        <div class="b-goods-f b-goods-f_dark">
                            <div class="b-goods-f__media">
                                <a href="#"><img class="b-goods-f__img img-scale" src="assets/media/content/b-goods/360x260/4.jpg" alt="foto" /></a>
                            </div>
                            <div class="b-goods-f__main">
                                <div class="b-goods-f__descrip">
                                    <div class="b-goods-f__title"><span>Lexus RC 3500</span>
                                    </div>
                                    <div class="b-goods-f__info">Magna aliqua enim aduas veniam quis nostrud exercitation ullam laboris aliquip.</div>
                                    <ul class="b-goods-f__list list-unstyled">
                                        <li class="b-goods-f__list-item"><span class="b-goods-f__list-info">35,000km</span></li>
                                        <li class="b-goods-f__list-item"><span class="b-goods-f__list-info">2019</span></li>
                                        <li class="b-goods-f__list-item"><span class="b-goods-f__list-info">Manual</span></li>
                                        <li class="b-goods-f__list-item"><span class="b-goods-f__list-info">Petrol</span></li>
                                        <li class="b-goods-f__list-item"><span class="b-goods-f__list-info">160 hp</span></li>
                                    </ul>
                                </div>
                                <div class="b-goods-f__sidebar"><span class="b-goods-f__price-group"><span class="b-goods-f__price"><span class="b-goods-f__price-numb">$26,080</span></span>
                                    </span>
                                </div>
                            </div>
                        </div>
                        <!-- end .b-goods-->
                    </li>
                    <li class="b-isotope-grid__item grid-item col-lg-4 col-md-6 web mercedes">
                        <div class="b-goods-f b-goods-f_dark">
                            <div class="b-goods-f__media">
                                <a href="#"><img class="b-goods-f__img img-scale" src="assets/media/content/b-goods/360x260/5.jpg" alt="foto" /></a>
                            </div>
                            <div class="b-goods-f__main">
                                <div class="b-goods-f__descrip">
                                    <div class="b-goods-f__title"><span>Mercedes SX</span>
                                    </div>
                                    <div class="b-goods-f__info">Magna aliqua enim aduas veniam quis nostrud exercitation ullam laboris aliquip.</div>
                                    <ul class="b-goods-f__list list-unstyled">
                                        <li class="b-goods-f__list-item"><span class="b-goods-f__list-info">35,000km</span></li>
                                        <li class="b-goods-f__list-item"><span class="b-goods-f__list-info">2019</span></li>
                                        <li class="b-goods-f__list-item"><span class="b-goods-f__list-info">Manual</span></li>
                                        <li class="b-goods-f__list-item"><span class="b-goods-f__list-info">Petrol</span></li>
                                        <li class="b-goods-f__list-item"><span class="b-goods-f__list-info">160 hp</span></li>
                                    </ul>
                                </div>
                                <div class="b-goods-f__sidebar"><span class="b-goods-f__price-group"><span class="b-goods-f__price"><span class="b-goods-f__price-numb">$66,500</span></span>
                                    </span>
                                </div>
                            </div>
                        </div>
                        <!-- end .b-goods-->
                    </li>
                    <li class="b-isotope-grid__item grid-item col-lg-4 col-md-6 web bmw">
                        <div class="b-goods-f b-goods-f_dark">
                            <div class="b-goods-f__media">
                                <a href="#"><img class="b-goods-f__img img-scale" src="assets/media/content/b-goods/360x260/6.jpg" alt="foto" /></a>
                            </div>
                            <div class="b-goods-f__main">
                                <div class="b-goods-f__descrip">
                                    <div class="b-goods-f__title"><span>Porsche 911 Targa</span>
                                    </div>
                                    <div class="b-goods-f__info">Magna aliqua enim aduas veniam quis nostrud exercitation ullam laboris aliquip.</div>
                                    <ul class="b-goods-f__list list-unstyled">
                                        <li class="b-goods-f__list-item"><span class="b-goods-f__list-info">35,000km</span></li>
                                        <li class="b-goods-f__list-item"><span class="b-goods-f__list-info">2019</span></li>
                                        <li class="b-goods-f__list-item"><span class="b-goods-f__list-info">Manual</span></li>
                                        <li class="b-goods-f__list-item"><span class="b-goods-f__list-info">Petrol</span></li>
                                        <li class="b-goods-f__list-item"><span class="b-goods-f__list-info">160 hp</span></li>
                                    </ul>
                                </div>
                                <div class="b-goods-f__sidebar"><span class="b-goods-f__price-group"><span class="b-goods-f__price"><span class="b-goods-f__price-numb">$35,700</span></span>
                                    </span>
                                </div>
                            </div>
                        </div>
                        <!-- end .b-goods-->
                    </li>
                    <li class="b-isotope-grid__item grid-item col-lg-4 col-md-6 web bmw">
                        <div class="b-goods-f b-goods-f_dark">
                            <div class="b-goods-f__media">
                                <a href="#"><img class="b-goods-f__img img-scale" src="assets/media/content/b-goods/360x260/6.jpg" alt="foto" /></a>
                            </div>
                            <div class="b-goods-f__main">
                                <div class="b-goods-f__descrip">
                                    <div class="b-goods-f__title"><span>Porsche 911 Targa</span>
                                    </div>
                                    <div class="b-goods-f__info">Magna aliqua enim aduas veniam quis nostrud exercitation ullam laboris aliquip.</div>
                                    <ul class="b-goods-f__list list-unstyled">
                                        <li class="b-goods-f__list-item"><span class="b-goods-f__list-info">35,000km</span></li>
                                        <li class="b-goods-f__list-item"><span class="b-goods-f__list-info">2019</span></li>
                                        <li class="b-goods-f__list-item"><span class="b-goods-f__list-info">Manual</span></li>
                                        <li class="b-goods-f__list-item"><span class="b-goods-f__list-info">Petrol</span></li>
                                        <li class="b-goods-f__list-item"><span class="b-goods-f__list-info">160 hp</span></li>
                                    </ul>
                                </div>
                                <div class="b-goods-f__sidebar"><span class="b-goods-f__price-group"><span class="b-goods-f__price"><span class="b-goods-f__price-numb">$35,700</span></span>
                                    </span>
                                </div>
                            </div>
                        </div>
                        <!-- end .b-goods-->
                    </li>
                </ul>
            </div>
        </section>
        <!-- end .b-isotope-->
        <!-- *****************************how to work ************************************-->
        <section class="b-steps section-default parallax">
            <div class="b-steps__inner">
                <div class="container">
                    <div class="row">
                        <div class="col-12">
                            <div class="ui-title-slogan">Helps you to find perfect car</div>
                            <h2 class="ui-title">How AvailCar<span class="text-primary"> Works</span></h2>
                            <ul class="b-steps-list list-unstyled row">
                                <li class="b-steps-list__item col-lg"><span class="b-steps-list__number">01</span>
                                    <div class="b-steps-list__title">Search Our Inventory</div>
                                    <div class="b-steps-list__info">Magna aliqua enim aduas dui veniam quis nostrud exercitation ullam laboris aut aliquip ex consequat.</div>
                                </li>
                                <li class="b-steps-list__item col-lg"><span class="b-steps-list__number">02</span>
                                    <div class="b-steps-list__title">Choose The Car You Like</div>
                                    <div class="b-steps-list__info">Magna aliqua enim aduas dui veniam quis nostrud exercitation ullam laboris aut aliquip ex consequat.</div>
                                </li>
                                <li class="b-steps-list__item col-lg"><span class="b-steps-list__number">03</span>
                                    <div class="b-steps-list__title">Get Approved & Drive</div>
                                    <div class="b-steps-list__info">Magna aliqua enim aduas dui veniam quis nostrud exercitation ullam laboris aut aliquip ex consequat.</div>
                                </li>
                                <!-- <li class="b-steps-list__item col-lg"><span class="b-steps-list__number">04</span>
                                    <div class="b-steps-list__title">Get Approved & Drive</div>
                                    <div class="b-steps-list__info">Magna aliqua enim aduas dui veniam quis nostrud exercitation ullam laboris aut aliquip ex consequat.</div>
                                </li> -->
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- end .b-steps-->
        <!-- <div class="section-goods-vip">
            <a class="b-goods-vip b-goods-vip_1" href="#">
                <div class="b-goods-vip__main"><span class="b-goods-vip__label b-goods-vip__label-1 bg-primary">NEW</span>
                    <div class="b-goods-vip__title">AUDI Q2L (2019)</div>
                    <div class="b-goods-vip__subtitle">LUXURTY APART -<span class="b-goods-vip__price"> $499/M</span></div>
                    <ul class="b-goods-vip__list list-unstyled">
                        <li class="b-goods-vip__list-item">2019</li>
                        <li class="b-goods-vip__list-item">Manual</li>
                        <li class="b-goods-vip__list-item">Petrol</li>
                        <li class="b-goods-vip__list-item">661 hp</li>
                    </ul>
                </div>
            </a>
            <a class="b-goods-vip b-goods-vip_2" href="#">
                <div class="b-goods-vip__main"><span class="b-goods-vip__label b-goods-vip__label-2 bg-primary">As Low As<strong class="b-goods-vip__label_b"> 1.5% APR</strong></span>
                    <div class="b-goods-vip__subtitle">Off-Road King</div>
                    <div class="b-goods-vip__title">JAGUAR I PACE</div>
                    <div class="b-goods-vip__slogan">Limited Time Offer</div>
                </div>
            </a>
            <a class="b-goods-vip b-goods-vip_3" href="#">
                <div class="b-goods-vip__main">
                    <div class="b-goods-vip__subtitle">2019 Models</div>
                    <div class="b-goods-vip__title">All Brands Cars<span class="b-goods-vip__label b-goods-vip__label-3 bg-primary">MORE POWER</span></div>
                    <div class="b-goods-vip__slogan">PREMIUM LUXURY</div>
                </div>
            </a>
        </div> -->
        <!-- end .b-goods-->
        <!-- <section class="section-team section-default">
            <div class="container">
                <div class="row">
                    <div class="col-12">
                        <div class="text-center">
                            <div class="ui-title-slogan">Helps you to find perfect car</div>
                            <h2 class="ui-title">Our Sales<span class="text-primary"> Team</span></h2>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-lg-3 col-md-6">
                        <div class="b-team">
                            <div class="b-team__media">
                                <div class="b-team__img"><img class="img-fluid" src="assets/media/content/b-team/1.jpg" alt="Foto" /></div>
                                <ul class="b-team__soc list-unstyled">
                                    <li class="b-team__soc-item"><a class="b-team__soc-link" href="#"><i class="ic fab fa-facebook"></i></a></li>
                                    <li class="b-team__soc-item"><a class="b-team__soc-link" href="#"><i class="ic fab fa-twitter"></i></a></li>
                                    <li class="b-team__soc-item"><a class="b-team__soc-link" href="#"><i class="ic fab fa-google-plus-g"></i></a></li>
                                </ul>
                            </div>
                            <div class="b-team__inner bg-dark">
                                <div class="b-team__name">Alex Leeman</div>
                                <div class="b-team__category">Director</div>
                            </div>
                            <div class="b-team__footer"><a class="b-team__phone" href="tel:+17553028549"><i class="ic text-primary icon-call-end"></i> +1 755 302 8549</a></div>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-6">
                        <div class="b-team">
                            <div class="b-team__media">
                                <div class="b-team__img"><img class="img-fluid" src="assets/media/content/b-team/2.jpg" alt="Foto" /></div>
                                <ul class="b-team__soc list-unstyled">
                                    <li class="b-team__soc-item"><a class="b-team__soc-link" href="#"><i class="ic fab fa-facebook"></i></a></li>
                                    <li class="b-team__soc-item"><a class="b-team__soc-link" href="#"><i class="ic fab fa-twitter"></i></a></li>
                                    <li class="b-team__soc-item"><a class="b-team__soc-link" href="#"><i class="ic fab fa-google-plus-g"></i></a></li>
                                </ul>
                            </div>
                            <div class="b-team__inner bg-dark">
                                <div class="b-team__name">Diago Johnson</div>
                                <div class="b-team__category">Sales Manager</div>
                            </div>
                            <div class="b-team__footer"><a class="b-team__phone" href="tel:+17553028549"><i class="ic text-primary icon-call-end"></i> +1 755 302 8549</a></div>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-6">
                        <div class="b-team">
                            <div class="b-team__media">
                                <div class="b-team__img"><img class="img-fluid" src="assets/media/content/b-team/3.jpg" alt="Foto" /></div>
                                <ul class="b-team__soc list-unstyled">
                                    <li class="b-team__soc-item"><a class="b-team__soc-link" href="#"><i class="ic fab fa-facebook"></i></a></li>
                                    <li class="b-team__soc-item"><a class="b-team__soc-link" href="#"><i class="ic fab fa-twitter"></i></a></li>
                                    <li class="b-team__soc-item"><a class="b-team__soc-link" href="#"><i class="ic fab fa-google-plus-g"></i></a></li>
                                </ul>
                            </div>
                            <div class="b-team__inner bg-dark">
                                <div class="b-team__name">Sophia Lauren</div>
                                <div class="b-team__category">Co-Founder</div>
                            </div>
                            <div class="b-team__footer"><a class="b-team__phone" href="tel:+17553028549"><i class="ic text-primary icon-call-end"></i> +1 755 302 8549</a></div>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-6">
                        <div class="b-team">
                            <div class="b-team__media">
                                <div class="b-team__img"><img class="img-fluid" src="assets/media/content/b-team/4.jpg" alt="Foto" /></div>
                                <ul class="b-team__soc list-unstyled">
                                    <li class="b-team__soc-item"><a class="b-team__soc-link" href="#"><i class="ic fab fa-facebook"></i></a></li>
                                    <li class="b-team__soc-item"><a class="b-team__soc-link" href="#"><i class="ic fab fa-twitter"></i></a></li>
                                    <li class="b-team__soc-item"><a class="b-team__soc-link" href="#"><i class="ic fab fa-google-plus-g"></i></a></li>
                                </ul>
                            </div>
                            <div class="b-team__inner bg-dark">
                                <div class="b-team__name">William Henry</div>
                                <div class="b-team__category">Marketing</div>
                            </div>
                            <div class="b-team__footer"><a class="b-team__phone" href="tel:+17553028549"><i class="ic text-primary icon-call-end"></i> +1 755 302 8549</a></div>
                        </div>
                    </div>
                </div>
            </div>
        </section> -->
        <!-- end .b-team-->
        <!--***************** reviews ********************* -->
        <section class="section-reviews section-default parallax area-bg area-bg_dark" id="reviews">
            <div class="area-bg__inner">
                <div class="container-fluid">
                    <div class="row">
                        <div class="col-12">
                            <div class="text-center">
                                <div class="ui-title-slogan">Helps you to find perfect car</div>
                                <h2 class="ui-title">Customer Reviews</h2><span class="section-reviews__decor">“</span>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-12">
                            <div class="b-reviews-slider js-slider" data-slick="{&quot;slidesToShow&quot;: 3,  &quot;slidesToScroll&quot;: 3, &quot;centerMode&quot;: true, &quot;arrows&quot;: false, &quot;dots&quot;: true, &quot;responsive&quot;: [{&quot;breakpoint&quot;: 1400, &quot;settings&quot;: {&quot;slidesToShow&quot;: 2, &quot;slidesToScroll&quot;: 2, &quot;centerMode&quot;: false}}, {&quot;breakpoint&quot;: 768, &quot;settings&quot;: {&quot;slidesToShow&quot;: 1, &quot;slidesToScroll&quot;: 1, &quot;centerMode&quot;: false}}]}">
                                <?php
                                $reviews = get_review_list();
                                if (mysqli_num_rows($reviews) > 0) {
                                    while ($row = mysqli_fetch_assoc($reviews)) {
                                ?>
                                        <div class="b-reviews">
                                            <blockquote class="b-reviews__blockquote">
                                                <div class="b-reviews__wrap">
                                                    <p><?php echo ($row['review']) ?></p>
                                                </div>
                                                <cite class="b-reviews__cite" title="Blockquote Title">
                                                    <span class="b-reviews__inner">
                                                        <span class="b-reviews__name"><?php echo ($row['name']) ?>
                                                        </span>
                                                        <span class="b-reviews__category"><?php echo ($row['type']) ?></span>
                                                    </span>
                                                    <span class="b-reviews__author">
                                                        <img class="img-fluid" src="control/dashboard/uploads/reviews_image/<?php echo $row['image'] ?>" alt="foto" />
                                                    </span>
                                                </cite>
                                            </blockquote>
                                        </div>
                                <?php
                                    }
                                }
                                ?>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- end .b-reviews-->
        <!-- <section class="section-news section-default">
            <div class="container">
                <div class="row">
                    <div class="col-12">
                        <div class="text-center">
                            <div class="ui-title-slogan">Helps you to find perfect car</div>
                            <h2 class="ui-title">News &<span class="text-primary"> Articles</span></h2>
                        </div>
                    </div>
                </div>
                <div class="b-post-group-2">
                    <div class="row">
                        <div class="col-md-4">
                            <section class="b-post b-post-1 clearfix">
                                <div class="entry-media">
                                    <a href="#"><img class="img-fluid" src="assets/media/content/b-posts/360x280/1.jpg" alt="Foto" /></a>
                                </div>
                                <div class="entry-main">
                                    <div class="entry-header">
                                        <div class="entry-meta"><span class="entry-meta__item"><a class="entry-meta__link" href="blog-main.html">25 DEC 2018</a></span><span class="entry-meta__item"><a class="entry-meta__link" href="blog-main.html">BY ADMIN</a></span></div>
                                        <h2 class="entry-title">Top 10 most Fuel-Efficient cars on the roads</h2>
                                    </div>
                                    <div class="entry-content">
                                        <p>Edipisicing eiusmod tempor incididunt labore dolore magna aliqa ust enim ad minim veniams quis nostrud citation ullam co laboris nisi ut aliquip.</p>
                                    </div>
                                    <div class="entry-footer"><a class="entry-link btn-link" href="#">READ article</a><span class="entry-views"><i class="ic icon-speech"></i> 52</span></div>
                                </div>
                            </section>
                        </div>
                        <div class="col-md-4">
                            <section class="b-post b-post-1 clearfix">
                                <div class="entry-media">
                                    <a href="#"><img class="img-fluid" src="assets/media/content/b-posts/360x280/2.jpg" alt="Foto" /></a>
                                </div>
                                <div class="entry-main">
                                    <div class="entry-header">
                                        <div class="entry-meta"><span class="entry-meta__item"><a class="entry-meta__link" href="blog-main.html">25 DEC 2018</a></span><span class="entry-meta__item"><a class="entry-meta__link" href="blog-main.html">BY ADMIN</a></span></div>
                                        <h2 class="entry-title">How to increase Auto Sales: A Dealers’ Guide</h2>
                                    </div>
                                    <div class="entry-content">
                                        <p>Edipisicing eiusmod tempor incididunt labore dolore magna aliqa ust enim ad minim veniams quis nostrud citation ullam co laboris nisi ut aliquip.</p>
                                    </div>
                                    <div class="entry-footer"><a class="entry-link btn-link" href="#">READ article</a><span class="entry-views"><i class="ic icon-speech"></i> 52</span></div>
                                </div>
                            </section>
                        </div>
                        <div class="col-md-4">
                            <section class="b-post b-post-1 clearfix">
                                <div class="entry-media">
                                    <a href="#"><img class="img-fluid" src="assets/media/content/b-posts/360x280/3.jpg" alt="Foto" /></a>
                                </div>
                                <div class="entry-main">
                                    <div class="entry-header">
                                        <div class="entry-meta"><span class="entry-meta__item"><a class="entry-meta__link" href="blog-main.html">25 DEC 2018</a></span><span class="entry-meta__item"><a class="entry-meta__link" href="blog-main.html">BY ADMIN</a></span></div>
                                        <h2 class="entry-title">We have vehicle with safety checks and licensed</h2>
                                    </div>
                                    <div class="entry-content">
                                        <p>Edipisicing eiusmod tempor incididunt labore dolore magna aliqa ust enim ad minim veniams quis nostrud citation ullam co laboris nisi ut aliquip.</p>
                                    </div>
                                    <div class="entry-footer"><a class="entry-link btn-link" href="#">READ article</a><span class="entry-views"><i class="ic icon-speech"></i> 52</span></div>
                                </div>
                            </section>
                        </div>
                    </div>
                </div>
            </div>
        </section> -->
        <section class="b-bnr-3 bg-dark">
            <div class="container">
                <div class="row">
                    <div class="col-12">
                        <h2 class="b-bnr-3__title ui-tilte">Buy Sell Your Car Quickly & Easily with Revus</h2>
                        <div class="b-bnr-3__info">Labore dolore magna aliqua minim ipsum sed ipsumveniam quis nostrud exercitation</div><a class="b-bnr-3__btn btn btn-primary" href="./control/dashboard/auth-create.php">get rigistered</a>
                    </div>
                </div>
            </div>
        </section>
        <!-- end .b-bnr-->
        <div class="b-gallery js-slider" data-slick="{&quot;slidesToShow&quot;: 8, &quot;arrows&quot;: false, &quot;autoplay&quot;: true,  &quot;slidesToScroll&quot;: 1, &quot;responsive&quot;: [{&quot;breakpoint&quot;: 1400, &quot;settings&quot;: {&quot;slidesToShow&quot;: 6, &quot;slidesToScroll&quot;: 3}}, {&quot;breakpoint&quot;: 768, &quot;settings&quot;: {&quot;slidesToShow&quot;: 3, &quot;slidesToScroll&quot;: 1}}]}">
            <div class="b-gallery__item"><img class="img-fluid" src="assets/media/content/brands/ford.jpg" alt="foto" /></div>
            <div class="b-gallery__item"><img class="img-fluid" src="assets/media/content/brands/honda.jpg" alt="foto" /></div>
            <div class="b-gallery__item"><img class="img-fluid" src="assets/media/content/brands/hyundai.jpg" alt="foto" /></div>
            <div class="b-gallery__item"><img class="img-fluid" src="assets/media/content/brands/kia.jpg" alt="foto" /></div>
            <div class="b-gallery__item"><img class="img-fluid" src="assets/media/content/brands/mahindra.jpg" alt="foto" /></div>
            <div class="b-gallery__item"><img class="img-fluid" src="assets/media/content/brands/maruti.jpg" alt="foto" /></div>
            <div class="b-gallery__item"><img class="img-fluid" src="assets/media/content/brands/mg.jpg" alt="foto" /></div>
            <div class="b-gallery__item"><img class="img-fluid" src="assets/media/content/brands/nissan.jpg" alt="foto" /></div>
            <div class="b-gallery__item"><img class="img-fluid" src="assets/media/content/brands/ranault.jpg" alt="foto" /></div>
            <div class="b-gallery__item"><img class="img-fluid" src="assets/media/content/brands/skoda.jpg" alt="foto" /></div>
            <div class="b-gallery__item"><img class="img-fluid" src="assets/media/content/brands/tata.jpg" alt="foto" /></div>
            <div class="b-gallery__item"><img class="img-fluid" src="assets/media/content/brands/toyota.jpg" alt="foto" /></div>

        </div>
        <!-- end .b-gallery-->
        <?php require_once("main-footer.php"); ?>
        <!-- .footer-->
    </div>
    </div>
    <!-- end layout-theme-->


    <!-- ++++++++++++-->
    <!-- MAIN SCRIPTS-->
    <!-- ++++++++++++-->
    <script src="https://code.jquery.com/jquery-3.3.1.min.js" integrity="sha256-FgpCb/KJQlLNfOu91ta32o/NMZxltwRo8QtmkMRdAu8=" crossorigin="anonymous"></script>
    <script src="https://code.jquery.com/jquery-migrate-1.4.1.min.js"></script>
    <!-- Bootstrap-->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>
    <!-- Color scheme-->
    <script src="assets/plugins/switcher/js/dmss.js"></script>
    <!-- Select customization & Color scheme-->
    <script src="assets/libs/bootstrap-select.min.js"></script>
    <!-- Pop-up window-->
    <script src="assets/plugins/magnific-popup/jquery.magnific-popup.min.js"></script>
    <!-- Headers scripts-->
    <script src="assets/plugins/headers/slidebar.js"></script>
    <script src="assets/plugins/headers/header.js"></script>
    <!-- Mail scripts-->
    <script src="assets/plugins/jqBootstrapValidation.js"></script>
    <script src="assets/plugins/contact_me.js"></script>
    <!-- Video player-->
    <script src="assets/plugins/flowplayer/flowplayer.min.js"></script>
    <!-- Filter and sorting images-->
    <script src="assets/plugins/isotope/isotope.pkgd.min.js"></script>
    <script src="assets/plugins/isotope/imagesLoaded.js"></script>
    <!-- Progress numbers-->
    <script src="assets/plugins/rendro-easy-pie-chart/jquery.easypiechart.min.js"></script>
    <script src="assets/plugins/rendro-easy-pie-chart/jquery.waypoints.min.js"></script>
    <!-- Animations-->
    <script src="assets/plugins/scrollreveal/scrollreveal.min.js"></script>
    <!-- Scale images-->
    <script src="assets/plugins/ofi.min.js"></script>
    <!-- Main slider-->
    <script src="assets/plugins/slider-pro/jquery.sliderPro.min.js"></script>
    <!--Sliders-->
    <script src="assets/plugins/slick/slick.js"></script>
    <!-- User customization-->
    <script src="assets/js/custom.js"></script>
</body>

</html>