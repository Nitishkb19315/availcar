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
        <?php require_once('navbar.php'); ?>
        <div class="section-title-page area-bg area-bg_dark area-bg_op_60">
          <div class="area-bg__inner">
            <div class="container">
              <div class="row">
                <div class="col offset-lg-3">
                  <div class="b-title-page__wrap">
                    <h1 class="b-title-page">Contact us</h1>
                    <nav aria-label="breadcrumb">
                      <ol class="breadcrumb">
                        <li class="breadcrumb-item"><a href="home.html">Home</a></li>
                        <li class="breadcrumb-item active" aria-current="page">Get In Touch</li>
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
        <main class="l-main-content">
          <div class="container">
            <div class="section-area">
              <div class="row">
                <div class="col-md-6 col-lg-3">
                  <div class="b-contacts"><i class="ic icon-direction"></i>
                    <div class="b-contacts__title">Head Office</div>
                    <div class="b-contacts__info">68 Landsriver St, Welson<br>California 22066</div>
                  </div>
                </div>
                <div class="col-md-6 col-lg-3">
                  <div class="b-contacts"><i class="ic icon-call-end bg-primary"></i>
                    <div class="b-contacts__title">Phone</div>
                    <div class="b-contacts__info">+303 123 456 7890<br>Sales Dept. 0800 123 4567</div>
                  </div>
                </div>
                <div class="col-md-6 col-lg-3">
                  <div class="b-contacts"><i class="ic icon-envelope"></i>
                    <div class="b-contacts__title">Email</div>
                    <div class="b-contacts__info">info [at] domain.com<br>support [at] domain.com</div>
                  </div>
                </div>
                <div class="col-md-6 col-lg-3">
                  <div class="b-contacts"><i class="ic icon-flag bg-primary"></i>
                    <div class="b-contacts__title">Showroom</div>
                    <div class="b-contacts__info">FairView Ave, El Monte<br>California 91732</div>
                  </div>
                </div>
              </div>
              <!-- end .b-contacts-->
            </div>
            <div class="row">
              <div class="col-md-6">
                <div class="map" id="map"></div>
              </div>
              <div class="col-md-6">
                <section class="section-form-contacts">
                  <h2 class="ui-title-inner">Send a<span class="text-primary"> Message</span></h2>
                  <p>Nulla pariatur excepteur sint occaecat cupidatat no proident culpa qui officia des mollit anim id est lab orum ut perspiciatis unde omnis iste natuser sit volupta tem accusantium sed ipsum laudantium.</p>
                  <div id="success"></div>
                  <form class="b-form-contacts ui-form" id="contactForm" action="#" method="post">
                    <div class="form-group">
                      <input class="form-control" id="user-name" type="text" name="user-name" placeholder="Your Name" required="required"/>
                    </div>
                    <div class="form-group">
                      <input class="form-control" id="user-email" type="email" name="user-email" placeholder="email"/>
                    </div>
                    <div class="form-group">
                      <textarea class="form-control" id="user-message" rows="5" placeholder="Message" required="required"></textarea>
                    </div>
                    <button class="btn btn-primary">Send Message</button>
                  </form>
                </section>
                <!-- end .b-form-contact-->
              </div>
            </div>
          </div>
        </main>
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