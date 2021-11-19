<?php require_once ("header.php"); ?>
            <!-- end .header-->
            <div class="section-title-page area-bg area-bg_dark area-bg_op_60">
                <div class="area-bg__inner">
                    <div class="container">
                        <div class="row">
                            <div class="col offset-lg-3">
                                <div class="b-title-page__wrap">
                                    <h1 class="b-title-page">Vehicle Listings</h1>
                                    <nav aria-label="breadcrumb">
                                        <ol class="breadcrumb">
                                            <li class="breadcrumb-item"><a href="home.html">Home</a></li>
                                            <li class="breadcrumb-item active" aria-current="page">Inventory</li>
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
                    <div class="row">
                        <div class="col-lg-3">
                            <aside class="l-sidebar">
                                <div class="widget section-sidebar bg-light">
                                    <h3 class="widget-title bg-dark"><i class="ic flaticon-car-4"></i>Search a car</h3>
                                    <div class="widget-content">
                                        <div class="widget-inner">
                                            <form class="b-filter bg-light">
                                                <div class="b-filter__main">
                                                    <div class="b-filter__row">
                                                        <select class="selectpicker" data-width="100%" title="Select Make" multiple="multiple" data-max-options="1" data-style="ui-select">
                                                            <option>Select 1</option>
                                                            <option>Select 2</option>
                                                            <option>Select 3</option>
                                                            <option>Select 4</option>
                                                        </select>
                                                    </div>
                                                    <div class="b-filter__row">
                                                        <select class="selectpicker" data-width="100%" title="Select Model" multiple="multiple" data-max-options="1" data-style="ui-select">
                                                            <option>Select 1</option>
                                                            <option>Select 2</option>
                                                            <option>Select 3</option>
                                                            <option>Select 4</option>
                                                        </select>
                                                    </div>
                                                    <div class="b-filter__row">
                                                        <select class="selectpicker" data-width="100%" title="Vehicle Type" multiple="multiple" data-max-options="1" data-style="ui-select">
                                                            <option>Select 1</option>
                                                            <option>Select 2</option>
                                                            <option>Select 3</option>
                                                            <option>Select 4</option>
                                                        </select>
                                                    </div>
                                                    <div class="b-filter__row">
                                                        <select class="selectpicker" data-width="100%" title="Condition" multiple="multiple" data-max-options="1" data-style="ui-select">
                                                            <option>Select 1</option>
                                                            <option>Select 2</option>
                                                            <option>Select 3</option>
                                                            <option>Select 4</option>
                                                        </select>
                                                    </div>
                                                    <div class="b-filter__row row">
                                                        <div class="b-filter__item col-md-6 col-lg-12 col-xl-6">
                                                            <select class="selectpicker" data-width="100%" title="From" multiple="multiple" data-max-options="1" data-style="ui-select">
                                                                <option>Select 1</option>
                                                                <option>Select 2</option>
                                                                <option>Select 3</option>
                                                                <option>Select 4</option>
                                                            </select>
                                                        </div>
                                                        <div class="b-filter__item col-md-6 col-lg-12 col-xl-6">
                                                            <select class="selectpicker" data-width="100%" title="To" multiple="multiple" data-max-options="1" data-style="ui-select">
                                                                <option>Select 1</option>
                                                                <option>Select 2</option>
                                                                <option>Select 3</option>
                                                                <option>Select 4</option>
                                                            </select>
                                                        </div>
                                                    </div>
                                                    <div class="b-filter__row">
                                                        <select class="selectpicker" data-width="100%" title="Transmission" multiple="multiple" data-max-options="1" data-style="ui-select">
                                                            <option>Select 1</option>
                                                            <option>Select 2</option>
                                                            <option>Select 3</option>
                                                            <option>Select 4</option>
                                                        </select>
                                                    </div>
                                                    <div class="b-filter__row">
                                                        <select class="selectpicker" data-width="100%" title="Fuel Type" multiple="multiple" data-max-options="1" data-style="ui-select">
                                                            <option>Select 1</option>
                                                            <option>Select 2</option>
                                                            <option>Select 3</option>
                                                            <option>Select 4</option>
                                                        </select>
                                                    </div>
                                                </div>
                                                <div class="b-filter-slider ui-filter-slider">
                                                    <div class="b-filter-slider__title">Price</div>
                                                    <div class="b-filter-slider__main">
                                                        <div id="filterPrice"></div>
                                                        <div class="b-filter__row row">
                                                            <div class="b-filter__item col-md-6 col-lg-12 col-xl-6">
                                                                <input class="ui-select" id="input-with-keypress-0" />
                                                            </div>
                                                            <div class="b-filter__item col-md-6 col-lg-12 col-xl-6">
                                                                <input class="ui-select" id="input-with-keypress-1" />
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <button class="b-filter__reset btn btn-default w-100" type="button">Reset Filters</button>
                                                <button class="btn btn-primary w-100">show results</button>
                                            </form>
                                        </div>
                                    </div>
                                </div>
                                <!-- end .b-filter-->
                                <section class="widget b-brands section-sidebar">
                                    <h3 class="widget-title bg-dark"><i class="ic flaticon-car-4"></i>Popular brands</h3>
                                    <div class="widget-content">
                                        <div class="b-brands__main d-flex flex-wrap"><a class="b-brands__item" href="home.html"><img class="b-brands__img img-fluid" src="assets/media/content/b-brands/1.png" alt="foto" /></a><a class="b-brands__item" href="home.html"><img class="b-brands__img img-fluid" src="assets/media/content/b-brands/2.png" alt="foto" /></a><a class="b-brands__item" href="home.html"><img class="b-brands__img img-fluid" src="assets/media/content/b-brands/3.png" alt="foto" /></a><a class="b-brands__item" href="home.html"><img class="b-brands__img img-fluid" src="assets/media/content/b-brands/4.png" alt="foto" /></a><a class="b-brands__item" href="home.html"><img class="b-brands__img img-fluid" src="assets/media/content/b-brands/5.png" alt="foto" /></a><a class="b-brands__item" href="home.html"><img class="b-brands__img img-fluid" src="assets/media/content/b-brands/6.png" alt="foto" /></a></div>
                                    </div>
                                </section>
                                <!-- end .b-brands-->
                            </aside>
                        </div>
                        <div class="col-lg-9">
                            <div class="b-filter-goods">
                                <div class="row justify-content-between align-items-center">
                                    <div class="b-filter-goods__wrap col-auto">
                                        <div class="b-filter-goods__select">
                                            <select class="selectpicker" data-width="100%" title="Newest First" multiple="multiple" data-max-options="1" data-style="ui-select">
                                                <option>A-Z</option>
                                                <option>Z-A</option>
                                            </select>
                                        </div>
                                    </div>
                                    <div class="b-filter-goods__info col-auto">Showing results<strong> 1 to 10</strong> of total<strong> 145</strong></div>
                                    <div class="btns-switch col-auto">
                                        <a href="./inventory-list.php"><i class="btns-switch__item js-view-list active ic fa fa-th-list"></i></a>
                                        <a href="./inventory-grid.php"><i class="btns-switch__item js-view-th ic fa fa-th"></i></a>
                                    </div>
                                </div>
                            </div>
                            <!-- end .b-filter-goods-->
                            <main class="b-goods-group row">
                                <?php 
                                    $listings=get_listing_list();
                                    if(mysqli_num_rows($listings)>0){
                                        while($row = mysqli_fetch_assoc($listings)){
                                ?>
                                            <div class="b-goods-f col-12 b-goods-f_row">
                                                <div class="b-goods-f__media"><img class="b-goods-f__img img-scale" src="<?php if(empty(trim($row['main_image']))){ echo "assets/media/content/b-goods/300x220/1.jpg";}else{ echo("control/dashboard/uploads/listing_image/".$row['main_image']);} ?>" alt="foto" /><span class="b-goods-f__media-inner"><span class="b-goods-f__label bg-primary">NEW</span></span></div>
                                                <div class="b-goods-f__main">
                                                    <div class="b-goods-f__descrip">
                                                        <div class="b-goods-f__title"><?php echo $row['make']." ".$row['model'] ?></div>
                                                        <?php 
                                                            if(!empty(trim($row['description']))){
                                                        ?>
                                                            <div class="b-goods-f__info"><?php echo $row['description']?>	</div>
                                                        <?php
                                                            }
                                                        ?>
                                                            <ul class="b-goods-f__list list-unstyled">
                                                            <li class="b-goods-f__list-item"><span class="b-goods-f__list-title">Mileage :</span><span class="b-goods-f__list-info">35,000km</span></li>
                                                            <li class="b-goods-f__list-item"><span class="b-goods-f__list-title">Model :</span><span class="b-goods-f__list-info"><?php echo $row['model_year']?></span></li>
                                                            <li class="b-goods-f__list-item"><span class="b-goods-f__list-title">Transmission :</span><span class="b-goods-f__list-info"><?php echo $row['transmission']?></span></li>
                                                            <li class="b-goods-f__list-item b-goods-f__list-item_row"><span class="b-goods-f__list-title">Interior Color :</span><span class="b-goods-f__list-info"><?php echo $row['interior_color']?></span></li>
                                                            <li class="b-goods-f__list-item"><span class="b-goods-f__list-title">Fuel Type :</span><span class="b-goods-f__list-info"><?php echo $row['fuel']?></span></li>
                                                            <li class="b-goods-f__list-item b-goods-f__list-item_row"><span class="b-goods-f__list-title">Exterior Color :</span><span class="b-goods-f__list-info"><?php echo $row['exterior_color']?></span></li>
                                                            <!-- <li class="b-goods-f__list-item b-goods-f__list-item_row"><span class="b-goods-f__list-title">Body Color :</span><span class="b-goods-f__list-info">White</span></li>
                                                            <li class="b-goods-f__list-item b-goods-f__list-item_row"><span class="b-goods-f__list-title">Drive Type :</span><span class="b-goods-f__list-info">4WD</span></li> -->
                                                        </ul>
                                                    </div>
                                                    <div class="b-goods-f__sidebar">
                                                        <a class="b-goods-f__bnr" href="#">
                                                            <img src="assets/media/content/b-goods/auto-check.png" alt="auto check" />
                                                        </a>
                                                        <span class="b-goods-f__price-group"><span class="b-goods-f__price"><span class="b-goods-f__price_col">msrp:&nbsp;</span><span class="b-goods-f__price-numb">&#8377 <?php echo($row['sale_price']) ?></span></span></span>
                                                        <span class="b-goods-f__old-price">&#8377 <?php echo($row['market_price ']) ?></span>
                                                    </div>
                                                </div>
                                            </div>
                                <?php
                                        }
                                    } 
                                ?>
                                <!-- end .b-goods-->
                                
                            </main>
                            <nav aria-label="Page navigation">
                                <ul class="pagination justify-content-center">
                                    <li class="page-item active"><a class="page-link" href="#">1</a></li>
                                    <li class="page-item"><a class="page-link" href="#">2</a></li>
                                    <li class="page-item " aria-current="page"><a class="page-link" href="#">3</a></li>
                                    <li class="page-item"><a class="page-link" href="#">4</a></li>
                                    <li class="page-item"><a class="page-link" href="#">5</a></li>
                                    <li class="page-item"><a class="page-link" href="#" aria-label="Next"><span class="ic fas fa-angle-double-right" aria-hidden="true"></span></a></li>
                                </ul>
                            </nav>
                        </div>
                    </div>
                </div>
            </div>
            <?php require_once ("footer.php"); ?>