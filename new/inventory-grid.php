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
                                  <input class="ui-select" id="input-with-keypress-0"/>
                                </div>
                                <div class="b-filter__item col-md-6 col-lg-12 col-xl-6">
                                  <input class="ui-select" id="input-with-keypress-1"/>
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
                      <div class="b-brands__main d-flex flex-wrap"><a class="b-brands__item" href="home.html"><img class="b-brands__img img-fluid" src="assets/media/content/b-brands/1.png" alt="foto"/></a><a class="b-brands__item" href="home.html"><img class="b-brands__img img-fluid" src="assets/media/content/b-brands/2.png" alt="foto"/></a><a class="b-brands__item" href="home.html"><img class="b-brands__img img-fluid" src="assets/media/content/b-brands/3.png" alt="foto"/></a><a class="b-brands__item" href="home.html"><img class="b-brands__img img-fluid" src="assets/media/content/b-brands/4.png" alt="foto"/></a><a class="b-brands__item" href="home.html"><img class="b-brands__img img-fluid" src="assets/media/content/b-brands/5.png" alt="foto"/></a><a class="b-brands__item" href="home.html"><img class="b-brands__img img-fluid" src="assets/media/content/b-brands/6.png" alt="foto"/></a></div>
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
                    <div class="btns-switch col-auto"><i class="btns-switch__item js-view-list ic fa fa-th-list"></i><i class="btns-switch__item js-view-th active ic fa fa-th"></i></div>
                  </div>
                </div>
                <!-- end .b-filter-goods-->
                <main class="b-goods-group row">
                  <div class="b-goods-f col-lg-4 col-md-6">
                    <div class="b-goods-f__media"><img class="b-goods-f__img img-scale" src="assets/media/content/b-goods/300x220/1.jpg" alt="foto"/><span class="b-goods-f__media-inner"><span class="b-goods-f__favorite"><i class="ic far fa-star"></i></span><span class="b-goods-f__label bg-primary">NEW</span></span></div>
                    <div class="b-goods-f__main">
                      <div class="b-goods-f__descrip">
                        <div class="b-goods-f__title">Audi L35 Quattro</div>
                        <div class="b-goods-f__info">Magna aliqua enim aduas veniam quis nostrud exercitation ullam laboris aliquip.</div>
                        <ul class="b-goods-f__list list-unstyled">
                          <li class="b-goods-f__list-item"><span class="b-goods-f__list-title">Mileage :</span><span class="b-goods-f__list-info">35,000km</span></li>
                          <li class="b-goods-f__list-item"><span class="b-goods-f__list-title">Model :</span><span class="b-goods-f__list-info">2019</span></li>
                          <li class="b-goods-f__list-item"><span class="b-goods-f__list-title">Transmission :</span><span class="b-goods-f__list-info">Manual</span></li>
                          <li class="b-goods-f__list-item b-goods-f__list-item_row"><span class="b-goods-f__list-title">Body Type :</span><span class="b-goods-f__list-info">sedan</span></li>
                          <li class="b-goods-f__list-item"><span class="b-goods-f__list-title">Fuel Type :</span><span class="b-goods-f__list-info">Petrol</span></li>
                          <li class="b-goods-f__list-item b-goods-f__list-item_row"><span class="b-goods-f__list-title">Engine Power:</span><span class="b-goods-f__list-info">160 hp</span></li>
                          <li class="b-goods-f__list-item b-goods-f__list-item_row"><span class="b-goods-f__list-title">Body Color :</span><span class="b-goods-f__list-info">White</span></li>
                          <li class="b-goods-f__list-item b-goods-f__list-item_row"><span class="b-goods-f__list-title">Drive Type :</span><span class="b-goods-f__list-info">4WD</span></li>
                        </ul>
                      </div>
                      <div class="b-goods-f__sidebar"><a class="b-goods-f__bnr" href="#"><img src="assets/media/content/b-goods/auto-check.png" alt="auto check"/></a><span class="b-goods-f__price-group"><span class="b-goods-f__price"><span class="b-goods-f__price_col">msrp:&nbsp;</span><span class="b-goods-f__price-numb">$45,800</span></span></span>
                        <div class="b-goods-f__imprest">Est. Down Payment: $450/m</div><span class="b-goods-f__compare">Compare<i class="ic fas fa-columns"></i></span>
                      </div>
                    </div>
                  </div>
                  <!-- end .b-goods-->
                  <div class="b-goods-f col-lg-4 col-md-6">
                    <div class="b-goods-f__media"><img class="b-goods-f__img img-scale" src="assets/media/content/b-goods/300x220/2.jpg" alt="foto"/><span class="b-goods-f__media-inner"><span class="b-goods-f__favorite"><i class="ic far fa-star"></i></span><span class="b-goods-f__label bg-green">sale</span></span></div>
                    <div class="b-goods-f__main">
                      <div class="b-goods-f__descrip">
                        <div class="b-goods-f__title">Ford Mustang SZ3</div>
                        <div class="b-goods-f__info">Magna aliqua enim aduas veniam quis nostrud exercitation ullam laboris aliquip.</div>
                        <ul class="b-goods-f__list list-unstyled">
                          <li class="b-goods-f__list-item"><span class="b-goods-f__list-title">Mileage :</span><span class="b-goods-f__list-info">35,000km</span></li>
                          <li class="b-goods-f__list-item"><span class="b-goods-f__list-title">Model :</span><span class="b-goods-f__list-info">2019</span></li>
                          <li class="b-goods-f__list-item"><span class="b-goods-f__list-title">Transmission :</span><span class="b-goods-f__list-info">Manual</span></li>
                          <li class="b-goods-f__list-item b-goods-f__list-item_row"><span class="b-goods-f__list-title">Body Type :</span><span class="b-goods-f__list-info">sedan</span></li>
                          <li class="b-goods-f__list-item"><span class="b-goods-f__list-title">Fuel Type :</span><span class="b-goods-f__list-info">Petrol</span></li>
                          <li class="b-goods-f__list-item b-goods-f__list-item_row"><span class="b-goods-f__list-title">Engine Power:</span><span class="b-goods-f__list-info">160 hp</span></li>
                          <li class="b-goods-f__list-item b-goods-f__list-item_row"><span class="b-goods-f__list-title">Body Color :</span><span class="b-goods-f__list-info">White</span></li>
                          <li class="b-goods-f__list-item b-goods-f__list-item_row"><span class="b-goods-f__list-title">Drive Type :</span><span class="b-goods-f__list-info">4WD</span></li>
                        </ul>
                      </div>
                      <div class="b-goods-f__sidebar"><span class="b-goods-f__price-group"><span class="b-goods-f__price"><span class="b-goods-f__price_col">msrp:&nbsp;</span><span class="b-goods-f__price-numb">$55,600</span></span><span class="b-goods-f__old-price">$57,900</span></span>
                        <div class="b-goods-f__imprest">Est. Down Payment: $450/m</div><span class="b-goods-f__compare">Compare<i class="ic fas fa-columns"></i></span>
                      </div>
                    </div>
                  </div>
                  <!-- end .b-goods-->
                  <div class="b-goods-f col-lg-4 col-md-6">
                    <div class="b-goods-f__media"><img class="b-goods-f__img img-scale" src="assets/media/content/b-goods/300x220/3.jpg" alt="foto"/><span class="b-goods-f__media-inner"><span class="b-goods-f__favorite"><i class="ic far fa-star"></i></span></span></div>
                    <div class="b-goods-f__main">
                      <div class="b-goods-f__descrip">
                        <div class="b-goods-f__title">Jaguar GX 480i</div>
                        <div class="b-goods-f__info">Magna aliqua enim aduas veniam quis nostrud exercitation ullam laboris aliquip.</div>
                        <ul class="b-goods-f__list list-unstyled">
                          <li class="b-goods-f__list-item"><span class="b-goods-f__list-title">Mileage :</span><span class="b-goods-f__list-info">35,000km</span></li>
                          <li class="b-goods-f__list-item"><span class="b-goods-f__list-title">Model :</span><span class="b-goods-f__list-info">2019</span></li>
                          <li class="b-goods-f__list-item"><span class="b-goods-f__list-title">Transmission :</span><span class="b-goods-f__list-info">Manual</span></li>
                          <li class="b-goods-f__list-item b-goods-f__list-item_row"><span class="b-goods-f__list-title">Body Type :</span><span class="b-goods-f__list-info">sedan</span></li>
                          <li class="b-goods-f__list-item"><span class="b-goods-f__list-title">Fuel Type :</span><span class="b-goods-f__list-info">Petrol</span></li>
                          <li class="b-goods-f__list-item b-goods-f__list-item_row"><span class="b-goods-f__list-title">Engine Power:</span><span class="b-goods-f__list-info">160 hp</span></li>
                          <li class="b-goods-f__list-item b-goods-f__list-item_row"><span class="b-goods-f__list-title">Body Color :</span><span class="b-goods-f__list-info">White</span></li>
                          <li class="b-goods-f__list-item b-goods-f__list-item_row"><span class="b-goods-f__list-title">Drive Type :</span><span class="b-goods-f__list-info">4WD</span></li>
                        </ul>
                      </div>
                      <div class="b-goods-f__sidebar"><span class="b-goods-f__price-group"><span class="b-goods-f__price"><span class="b-goods-f__price_col">msrp:&nbsp;</span><span class="b-goods-f__price-numb">$55,600</span></span></span>
                        <div class="b-goods-f__imprest">Est. Down Payment: $450/m</div><span class="b-goods-f__compare">Compare<i class="ic fas fa-columns"></i></span>
                      </div>
                    </div>
                  </div>
                  <!-- end .b-goods-->
                  <div class="b-goods-f col-lg-4 col-md-6">
                    <div class="b-goods-f__media"><img class="b-goods-f__img img-scale" src="assets/media/content/b-goods/300x220/4.jpg" alt="foto"/><span class="b-goods-f__media-inner"><span class="b-goods-f__favorite"><i class="ic far fa-star"></i></span></span></div>
                    <div class="b-goods-f__main">
                      <div class="b-goods-f__descrip">
                        <div class="b-goods-f__title">Skoda KodiaQ XL</div>
                        <div class="b-goods-f__info">Magna aliqua enim aduas veniam quis nostrud exercitation ullam laboris aliquip.</div>
                        <ul class="b-goods-f__list list-unstyled">
                          <li class="b-goods-f__list-item"><span class="b-goods-f__list-title">Mileage :</span><span class="b-goods-f__list-info">35,000km</span></li>
                          <li class="b-goods-f__list-item"><span class="b-goods-f__list-title">Model :</span><span class="b-goods-f__list-info">2019</span></li>
                          <li class="b-goods-f__list-item"><span class="b-goods-f__list-title">Transmission :</span><span class="b-goods-f__list-info">Manual</span></li>
                          <li class="b-goods-f__list-item b-goods-f__list-item_row"><span class="b-goods-f__list-title">Body Type :</span><span class="b-goods-f__list-info">sedan</span></li>
                          <li class="b-goods-f__list-item"><span class="b-goods-f__list-title">Fuel Type :</span><span class="b-goods-f__list-info">Petrol</span></li>
                          <li class="b-goods-f__list-item b-goods-f__list-item_row"><span class="b-goods-f__list-title">Engine Power:</span><span class="b-goods-f__list-info">160 hp</span></li>
                          <li class="b-goods-f__list-item b-goods-f__list-item_row"><span class="b-goods-f__list-title">Body Color :</span><span class="b-goods-f__list-info">White</span></li>
                          <li class="b-goods-f__list-item b-goods-f__list-item_row"><span class="b-goods-f__list-title">Drive Type :</span><span class="b-goods-f__list-info">4WD</span></li>
                        </ul>
                      </div>
                      <div class="b-goods-f__sidebar"><span class="b-goods-f__price-group"><span class="b-goods-f__price"><span class="b-goods-f__price_col">msrp:&nbsp;</span><span class="b-goods-f__price-numb">$45,800</span></span></span>
                        <div class="b-goods-f__imprest">Est. Down Payment: $450/m</div><span class="b-goods-f__compare">Compare<i class="ic fas fa-columns"></i></span>
                      </div>
                    </div>
                  </div>
                  <!-- end .b-goods-->
                  <div class="b-goods-f col-lg-4 col-md-6">
                    <div class="b-goods-f__media"><img class="b-goods-f__img img-scale" src="assets/media/content/b-goods/300x220/5.jpg" alt="foto"/><span class="b-goods-f__media-inner"><span class="b-goods-f__favorite"><i class="ic far fa-star"></i></span></span></div>
                    <div class="b-goods-f__main">
                      <div class="b-goods-f__descrip">
                        <div class="b-goods-f__title">Mercedes Benz C Class</div>
                        <div class="b-goods-f__info">Magna aliqua enim aduas veniam quis nostrud exercitation ullam laboris aliquip.</div>
                        <ul class="b-goods-f__list list-unstyled">
                          <li class="b-goods-f__list-item"><span class="b-goods-f__list-title">Mileage :</span><span class="b-goods-f__list-info">35,000km</span></li>
                          <li class="b-goods-f__list-item"><span class="b-goods-f__list-title">Model :</span><span class="b-goods-f__list-info">2019</span></li>
                          <li class="b-goods-f__list-item"><span class="b-goods-f__list-title">Transmission :</span><span class="b-goods-f__list-info">Manual</span></li>
                          <li class="b-goods-f__list-item b-goods-f__list-item_row"><span class="b-goods-f__list-title">Body Type :</span><span class="b-goods-f__list-info">sedan</span></li>
                          <li class="b-goods-f__list-item"><span class="b-goods-f__list-title">Fuel Type :</span><span class="b-goods-f__list-info">Petrol</span></li>
                          <li class="b-goods-f__list-item b-goods-f__list-item_row"><span class="b-goods-f__list-title">Engine Power:</span><span class="b-goods-f__list-info">160 hp</span></li>
                          <li class="b-goods-f__list-item b-goods-f__list-item_row"><span class="b-goods-f__list-title">Body Color :</span><span class="b-goods-f__list-info">White</span></li>
                          <li class="b-goods-f__list-item b-goods-f__list-item_row"><span class="b-goods-f__list-title">Drive Type :</span><span class="b-goods-f__list-info">4WD</span></li>
                        </ul>
                      </div>
                      <div class="b-goods-f__sidebar"><span class="b-goods-f__price-group"><span class="b-goods-f__price"><span class="b-goods-f__price_col">msrp:&nbsp;</span><span class="b-goods-f__price-numb">$55,600</span></span></span>
                        <div class="b-goods-f__imprest">Est. Down Payment: $450/m</div><span class="b-goods-f__compare">Compare<i class="ic fas fa-columns"></i></span>
                      </div>
                    </div>
                  </div>
                  <!-- end .b-goods-->
                  <div class="b-goods-f col-lg-4 col-md-6">
                    <div class="b-goods-f__media"><img class="b-goods-f__img img-scale" src="assets/media/content/b-goods/300x220/3.jpg" alt="foto"/><span class="b-goods-f__media-inner"><span class="b-goods-f__favorite"><i class="ic far fa-star"></i></span></span></div>
                    <div class="b-goods-f__main">
                      <div class="b-goods-f__descrip">
                        <div class="b-goods-f__title">Jaguar GX 480i</div>
                        <div class="b-goods-f__info">Magna aliqua enim aduas veniam quis nostrud exercitation ullam laboris aliquip.</div>
                        <ul class="b-goods-f__list list-unstyled">
                          <li class="b-goods-f__list-item"><span class="b-goods-f__list-title">Mileage :</span><span class="b-goods-f__list-info">35,000km</span></li>
                          <li class="b-goods-f__list-item"><span class="b-goods-f__list-title">Model :</span><span class="b-goods-f__list-info">2019</span></li>
                          <li class="b-goods-f__list-item"><span class="b-goods-f__list-title">Transmission :</span><span class="b-goods-f__list-info">Manual</span></li>
                          <li class="b-goods-f__list-item b-goods-f__list-item_row"><span class="b-goods-f__list-title">Body Type :</span><span class="b-goods-f__list-info">sedan</span></li>
                          <li class="b-goods-f__list-item"><span class="b-goods-f__list-title">Fuel Type :</span><span class="b-goods-f__list-info">Petrol</span></li>
                          <li class="b-goods-f__list-item b-goods-f__list-item_row"><span class="b-goods-f__list-title">Engine Power:</span><span class="b-goods-f__list-info">160 hp</span></li>
                          <li class="b-goods-f__list-item b-goods-f__list-item_row"><span class="b-goods-f__list-title">Body Color :</span><span class="b-goods-f__list-info">White</span></li>
                          <li class="b-goods-f__list-item b-goods-f__list-item_row"><span class="b-goods-f__list-title">Drive Type :</span><span class="b-goods-f__list-info">4WD</span></li>
                        </ul>
                      </div>
                      <div class="b-goods-f__sidebar"><span class="b-goods-f__price-group"><span class="b-goods-f__price"><span class="b-goods-f__price_col">msrp:&nbsp;</span><span class="b-goods-f__price-numb">$55,600</span></span></span>
                        <div class="b-goods-f__imprest">Est. Down Payment: $450/m</div><span class="b-goods-f__compare">Compare<i class="ic fas fa-columns"></i></span>
                      </div>
                    </div>
                  </div>
                  <!-- end .b-goods-->
                </main>
                <nav aria-label="Page navigation">
                  <ul class="pagination justify-content-center">
                    <li class="page-item"><a class="page-link" href="#">1</a></li>
                    <li class="page-item"><a class="page-link" href="#">2</a></li>
                    <li class="page-item active" aria-current="page"><a class="page-link" href="#">3</a></li>
                    <li class="page-item"><a class="page-link" href="#">4</a></li>
                    <li class="page-item"><a class="page-link" href="#">5</a></li>
                    <li class="page-item"><a class="page-link" href="#" aria-label="Next"><span class="ic fas fa-angle-double-right" aria-hidden="true"></span></a></li>
                  </ul>
                </nav>
              </div>
            </div>
          </div>
        </div>
          <footer class="footer">
            <div class="container">
              <div class="row">
                <div class="col-12">
                  <div class="text-center">
                    <div class="footer-logo"><a class="footer-logo__link" href="home.html"><img class="img-responsive" src="assets/media/general/logo-light.png" alt="Logo"></a></div>
                    <ul class="footer-soc list-unstyled">
                      <li class="footer-soc__item"><a class="footer-soc__link" href="#" target="_blank"><i class="ic fab fa-twitter"></i></a></li>
                      <li class="footer-soc__item"><a class="footer-soc__link" href="#" target="_blank"><i class="ic fab fa-facebook"></i></a></li>
                      <li class="footer-soc__item"><a class="footer-soc__link" href="#" target="_blank"><i class="ic fab fa-linkedin"></i></a></li>
                      <li class="footer-soc__item"><a class="footer-soc__link" href="#" target="_blank"><i class="ic fab fa-google-plus-g"></i></a></li>
                      <li class="footer-soc__item"><a class="footer-soc__link" href="#" target="_blank"><i class="ic fab fa-pinterest"></i></a></li>
                      <li class="footer-soc__item"><a class="footer-soc__link" href="#" target="_blank"><i class="ic fas fa-play"></i></a></li>
                    </ul>
                  </div>
                </div>
              </div>
              <div class="row">
                <div class="col-lg-4 col-sm-5">
                  <div class="footer-section footer-section_info">
                    <div class="footer-info">Ceipisicing elit sed do eiusmod tempor laboe dolore magna aliqa Ut enim ad minim veniam quis nostrud exercitation ullam co laboris nis aliquip comsecd sed ipsum.</div>
                    <div class="footer-contacts">
                      <div class="footer-contacts__item"><i class="ic icon-location-pin"></i>Fairview Ave, El Monte, CA 91732</div>
                      <div class="footer-contacts__item"><i class="ic icon-envelope"></i><a href="mailto:support@domain.com">support@domain.com</a></div>
                      <div class="footer-contacts__item"><i class="ic icon-earphones-alt"></i>Phone:
                        
                        <a href="tel:+17553028549">+1 755 302 8549</a>
                      </div>
                    </div>
                  </div>
                </div>
                <div class="col-lg-4 col-sm-3">
                  <div class="row">
                    <div class="col-lg-6">
                      <section class="footer-section footer-section_link">
                        <h3 class="footer-section__title">About Revus</h3>
                        <ul class="footer-list list-unstyled">
                          <li><a href="#">Home</a></li>
                          <li><a href="#">Services</a></li>
                          <li><a href="#">About us</a></li>
                          <li><a href="#">Inventory</a></li>
                          <li><a href="#">Parts Shop</a></li>
                          <li><a href="#">Contact</a></li>
                        </ul>
                      </section>
                    </div>
                    <div class="col-lg-6">
                      <section class="footer-section footer-section_link">
                        <h3 class="footer-section__title">Customer Links</h3>
                        <ul class="footer-list list-unstyled">
                          <li><a href="#">Latest Cars</a></li>
                          <li><a href="#">Featured Cars</a></li>
                          <li><a href="#">Sell Your Car</a></li>
                          <li><a href="#">Buy a Car</a></li>
                          <li><a href="#">Reviews</a></li>
                          <li><a href="#">Latest News</a></li>
                        </ul>
                      </section>
                    </div>
                  </div>
                </div>
                <div class="col-md-4">
                  <section class="footer-section footer-section_subscribe">
                    <h3 class="footer-section__title">Subscribe Newsletter</h3>
                    <form class="footer-form">
                      <div class="footer-form__info">Get our weekly nwsletter for latest car news exclusive offers and deals and more.</div>
                      <div class="form-group">
                        <input class="footer-form__input form-control" type="email" placeholder="your email">
                      </div>
                      <button class="btn btn-sm btn-primary">Subscribe</button>
                    </form>
                  </section>
                </div>
              </div>
              <div class="row">
                <div class="col-12">
                  <div class="footer-copyright">
                    Copyrights (c) 2019 Revus - Auto Dealer Template. All rights reserved.
                    <a class="footer-copyright__link" href="privacy-policy.html">Privacy Policy</a>
                  </div>
                </div>
              </div><span class="footer__btn-up js-scroll-top"><i class="ic fas fa-angle-up"></i><img src="assets/media/general/go_top.png" alt="go top"></span>
            </div>
          </footer>
          <!-- .footer-->
      </div>
    </div>
    <!-- end layout-theme-->
    
    <?php require_once("footer.php"); ?>
  </body>
</html>