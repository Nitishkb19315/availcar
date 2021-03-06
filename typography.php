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
          <?php require_once("navbar.php");?>
        <div class="section-title-page area-bg area-bg_dark area-bg_op_60">
          <div class="area-bg__inner">
            <div class="container">
              <div class="row">
                <div class="col offset-lg-3">
                  <div class="b-title-page__wrap">
                    <h1 class="b-title-page">Typography</h1>
                    <nav aria-label="breadcrumb">
                      <ol class="breadcrumb">
                        <li class="breadcrumb-item"><a href="home.html">Home</a></li>
                        <li class="breadcrumb-item active" aria-current="page">Typography</li>
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
        <div class="rtd typography-page">
          <div class="typography-section typography-section-border">
            <div class="container">
              <div class="row">
                <div class="col-md-7">
                  <section>
                    <h2 class="typography-title">Bold Headings</h2>
                    <table class="table_primary-headings">
                      <tbody>
                        <tr>
                          <td>
                            <h1><strong>H1. heading</strong></h1>
                          </td>
                          <td class="typography-title-number">40 px</td>
                        </tr>
                        <tr>
                          <td>
                            <h2><strong>H2. heading</strong></h2>
                          </td>
                          <td class="typography-title-number">32 px</td>
                        </tr>
                        <tr>
                          <td>
                            <h3><strong>H3. heading</strong></h3>
                          </td>
                          <td class="typography-title-number">28 px</td>
                        </tr>
                        <tr>
                          <td>
                            <h4><strong>H4. heading</strong></h4>
                          </td>
                          <td class="typography-title-number">24 px</td>
                        </tr>
                        <tr>
                          <td>
                            <h5><strong>H5. heading</strong></h5>
                          </td>
                          <td class="typography-title-number">20 px</td>
                        </tr>
                        <tr>
                          <td>
                            <h6 class="typography-last-elem"><strong>H6. heading</strong></h6>
                          </td>
                          <td class="typography-title-number">16 px</td>
                        </tr>
                      </tbody>
                    </table>
                  </section>
                </div>
                <div class="col-md-5">
                  <section>
                    <h2 class="typography-title">Light / Regular Headings</h2>
                    <table class="table_primary-headings">
                      <tbody>
                        <tr>
                          <td>
                            <h1>H1. heading</h1>
                          </td>
                        </tr>
                        <tr>
                          <td>
                            <h2>H2. heading</h2>
                          </td>
                        </tr>
                        <tr>
                          <td>
                            <h3>H3. heading</h3>
                          </td>
                        </tr>
                        <tr>
                          <td>
                            <h4>H4. heading</h4>
                          </td>
                        </tr>
                        <tr>
                          <td>
                            <h5>H5. heading</h5>
                          </td>
                        </tr>
                        <tr>
                          <td>
                            <h6 class="typography-last-elem">H6. heading</h6>
                          </td>
                        </tr>
                      </tbody>
                    </table>
                  </section>
                </div>
              </div>
            </div>
          </div>
          <div class="typography-section typography-section-border">
            <section class="section-area">
              <div class="container">
                <div class="row">
                  <div class="col-12">
                    <h2 class="typography-title">List Styles</h2>
                  </div>
                </div>
                <div class="row">
                  <div class="col-md-4">
                    <ul class="list list-mark-2">
                      <li>Phasellus sit amet velit auctor turpis rhoncus.</li>
                      <li>Phasellus sed dolor sodales eleifend ipsum eu.</li>
                      <li>Nullam id dolor in ex eleifend tempus.</li>
                      <li>Etiam id lorem vel neque faucibus fermentum.</li>
                      <li>Nunc tincidunt augue in enim sollicitudin feugiat.</li>
                    </ul>
                  </div>
                  <div class="col-md-4">
                    <ul class="list list-mark-3">
                      <li>Phasellus sit amet velit auctor turpis rhoncus.</li>
                      <li>Phasellus sed dolor sodales eleifend ipsum eu.</li>
                      <li>Nullam id dolor in ex eleifend tempus.</li>
                      <li>Etiam id lorem vel neque faucibus fermentum.</li>
                      <li>Nunc tincidunt augue in enim sollicitudin feugiat.</li>
                    </ul>
                  </div>
                  <div class="col-md-4">
                    <ul class="list list-mark-4 typography-last-elem">
                      <li>Phasellus sit amet velit auctor turpis rhoncus.</li>
                      <li>Phasellus sed dolor sodales eleifend ipsum eu.</li>
                      <li>Nullam id dolor in ex eleifend tempus.</li>
                      <li>Etiam id lorem vel neque faucibus fermentum.</li>
                      <li>Nunc tincidunt augue in enim sollicitudin feugiat.</li>
                    </ul>
                  </div>
                </div>
              </div>
            </section>
          </div>
          <div class="typography-section typography-section-border">
            <div class="container">
              <div class="row">
                <div class="col-12">
                  <h2 class="typography-title">Buttons</h2>
                  <div class="typography-btn-group">
                    <div class="row">
                      <div class="col-6">
                        <button class="btn btn-primary btn-sm" type="button">Primary</button>
                        <button class="btn btn-primary" type="button">Primary</button>
                      </div>
                      <div class="col-6">
                        <button class="btn btn-secondary btn-sm" type="button">Secondary</button>
                        <button class="btn btn-secondary" type="button">Secondary</button>
                      </div>
                      <div class="col-6">
                        <button class="btn btn-default btn-sm" type="button">Default</button>
                        <button class="btn btn-default" type="button">Default</button>
                      </div>
                      <div class="col-6">
                        <button class="btn btn-white btn-sm" type="button">White</button>
                        <button class="btn btn-white" type="button">White</button>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
          <div class="typography-section typography-section-border">
            <div class="container">
              <div class="row">
                <div class="col-12">
                  <h2 class="typography-title">Pagination</h2>
                </div>
              </div>
              <div class="row">
                <div class="col-12">
                  <nav aria-label="Page navigation">
                    <ul class="pagination">
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
          <div class="typography-section typography-section-border">
            <div class="container">
              <div class="row">
                <div class="col-12">
                  <h2 class="typography-title">Form Elements</h2>
                  <div class="row">
                    <div class="col-md-9">
                      <form class="ui-form" action="#" method="post">
                        <div class="row">
                          <div class="col-md-6">
                            <div class="form-group">
                              <input class="form-control" type="text" placeholder="Name"/>
                            </div>
                          </div>
                          <div class="col-md-6">
                            <div class="form-group">
                              <input class="form-control" type="email" placeholder="Email"/>
                            </div>
                          </div>
                        </div>
                        <div class="row">
                          <div class="col-12">
                            <div class="form-group">
                              <input class="form-control" type="url" placeholder="Website"/>
                            </div>
                          </div>
                        </div>
                        <div class="row">
                          <div class="col-12">
                            <div class="form-group">
                              <textarea class="form-control" rows="6"></textarea>
                            </div>
                            <div class="form-group">
                              <button class="btn btn-primary">Send Message</button>
                            </div>
                          </div>
                        </div>
                      </form>
                    </div>
                    <div class="col-md-3">
                      <div class="checkbox-group">
                        <input class="forms__check hidden" id="check-1" type="checkbox"/>
                        <label class="forms__label forms__label-check forms__label-check-1" for="check-1">Check box (Unchecked)</label>
                        <input class="forms__check hidden" id="check-2" type="checkbox" checked="checked"/>
                        <label class="forms__label forms__label-check forms__label-check-1" for="check-2">Check box (checked)</label>
                      </div>
                      <div class="label-group">
                        <input class="forms__radio hidden" id="forms__radio-1" type="radio" name="radio-group-2" value=""/>
                        <label class="forms__label forms__label-radio forms__label-radio-1" for="forms__radio-1"></label>
                        <input class="forms__radio hidden" id="forms__radio-2" type="radio" name="radio-group-2" value="" checked="checked"/>
                        <label class="forms__label forms__label-radio forms__label-radio-1" for="forms__radio-2"></label>
                      </div>
                      <div class="label-group">
                        <input class="forms__radio hidden" id="forms__radio-3" type="radio" name="radio-group-3" value=""/>
                        <label class="forms__label forms__label-radio forms__label-radio-2" for="forms__radio-3"></label>
                        <input class="forms__radio hidden" id="forms__radio-4" type="radio" name="radio-group-3" value="" checked="checked"/>
                        <label class="forms__label forms__label-radio forms__label-radio-2" for="forms__radio-4"></label>
                      </div>
                    </div>
                  </div>
                </div>
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