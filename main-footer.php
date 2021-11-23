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
              <div class="footer-info">AvailCar.com is India's growing car search venture that helps car user’s, buyer’s & used cars dealers to search best & fair deals.</div>
              <div class="footer-contacts">
                <div class="footer-contacts__item"><i class="ic icon-location-pin"></i><?php echo($headOfficeDetails['address']); ?></div>
                <div class="footer-contacts__item"><i class="ic icon-envelope"></i><a href="mailto:<?php echo($headOfficeDetails['first_email']); ?>"><?php echo($headOfficeDetails['first_email']); ?></a></div>
                <div class="footer-contacts__item"><i class="ic icon-earphones-alt"></i>Phone:

                  <a href="tel:+91<?php echo($headOfficeDetails['first_phone_no']); ?>">+91 <?php echo($headOfficeDetails['first_phone_no']); ?></a>
                </div>
              </div>
            </div>
          </div>
          <div class="col-lg-4 col-sm-3">
            <div class="row">
              <div class="col-lg-6">
                <section class="footer-section footer-section_link">
                  <h3 class="footer-section__title">About AvailCar</h3>
                  <ul class="footer-list list-unstyled">
                    <li><a href="./index.php/">Home</a></li>
                    <li><a href="./about.php">About us</a></li>
                    <li><a href="./inventory-list.php">Inventory</a></li>
                    <li><a href="./contacts.php">Contact</a></li>
                  </ul>
                </section>
              </div>
              <div class="col-lg-6">
                <section class="footer-section footer-section_link">
                  <h3 class="footer-section__title">Customer Links</h3>
                  <ul class="footer-list list-unstyled">
                    <li><a href="./inventory-list.php">Latest Cars</a></li>
                    <li><a href="./control/dashboard/user-add-listing.php">Sell Your Car</a></li>
                    <li><a href="./inventory-list.php">Buy a Car</a></li>
                    <li><a href="./index.php?#reviews">Reviews</a></li>
                  </ul>
                </section>
              </div>
            </div>
          </div>
          <div class="col-md-4">
            <section class="footer-section footer-section_subscribe">
              <h3 class="footer-section__title">Subscribe Newsletter</h3>
              <form class="footer-form">
                <div class="footer-form__info">Get our weekly newsletter for latest car news exclusive offers and deals and more.</div>
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
              Copyrights (c) 2019 AvailCar - Auto Dealer Template. All rights reserved.
              <a class="footer-copyright__link" href="privacy-policy.html">Privacy Policy</a>
            </div>
          </div>
        </div><span class="footer__btn-up js-scroll-top"><i class="ic fas fa-angle-up"></i><img src="assets/media/general/go_top.png" alt="go top"></span>
      </div>
    </footer>