<?php require_once("./header.php") ?>
<?php require_once("./svg.php") ?>
<?php confirm_logged_in(); ?>
<?php if(!$row = get_user_details($_GET["id"])){ redirect('./index.php'); } ?>
<body>
    
    <div class="page-wrapper">
        <main class="page-auth">
            <div class="page-auth__center">
                <div class="modal modal-account modal-compact scrollbar-thin is-active is-animate"  data-simplebar>
                    <div class="modal__overlay"></div>
                        <div class="modal__wrap">
                            <div class="modal__window">
                                <div class="modal__content">
                                    <div class="modal__body">
                                        <form action="./execution/user-details-exe.php" method="POST" enctype="multipart/form-data">
                                            <div class="modal-account__content">
                                            <div class="modal-account__left">
                                                <div class="modal-account__upload profile-upload js-profile-upload">
                                                    <input class="profile-upload__input" type="file" name="profile_image" accept="image/png, image/jpeg">
                                                    <svg class="profile-upload__thumbnail" viewBox="0 0 252 272" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink">
                                                        <g filter="url(#filter0)">
                                                            <path d="M55 199H197V221C197 221 153.752 224 126 224C98.248 224 55 221 55 221V199Z" fill="white" />
                                                        </g>
                                                        <g filter="url(#filter1)">
                                                            <path d="M18.235 43.2287C19.2494 23.1848 35.1848 7.24941 55.2287 6.23501C76.8855 5.13899 104.551 4 126 4C147.449 4 175.114 5.13898 196.771 6.23501C216.815 7.24941 232.751 23.1848 233.765 43.2287C234.861 64.8855 236 92.5512 236 114C236 135.449 234.861 163.114 233.765 184.771C232.751 204.815 216.815 220.751 196.771 221.765C175.114 222.861 147.449 224 126 224C104.551 224 76.8855 222.861 55.2287 221.765C35.1848 220.751 19.2494 204.815 18.235 184.771C17.139 163.114 16 135.449 16 114C16 92.5512 17.139 64.8855 18.235 43.2287Z" fill="url(#pattern1)" />
                                                        </g>
                                                        <path class="profile-upload__overlay" opacity="0.6" d="M18.235 43.2287C19.2494 23.1848 35.1848 7.24941 55.2287 6.23501C76.8855 5.13899 104.551 4 126 4C147.449 4 175.114 5.13899 196.771 6.23501C216.815 7.24941 232.751 23.1848 233.765 43.2287C234.861 64.8855 236 92.5512 236 114C236 135.449 234.861 163.114 233.765 184.771C232.751 204.815 216.815 220.751 196.771 221.765C175.114 222.861 147.449 224 126 224C104.551 224 76.8855 222.861 55.2287 221.765C35.1848 220.751 19.2494 204.815 18.235 184.771C17.139 163.114 16 135.449 16 114C16 92.5512 17.139 64.8855 18.235 43.2287Z" fill="#44566C" />
                                                        <defs>
                                                            <filter id="filter0" x="23" y="183" width="206" height="89" filterUnits="userSpaceOnUse" color-interpolation-filters="sRGB">
                                                                <feFlood flood-opacity="0" result="BackgroundImageFix" />
                                                                <feColorMatrix in="SourceAlpha" type="matrix" values="0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 127 0" />
                                                                <feOffset dy="8" />
                                                                <feGaussianBlur stdDeviation="8" />
                                                                <feColorMatrix type="matrix" values="0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0.25 0" />
                                                                <feBlend mode="normal" in2="BackgroundImageFix" result="effect1_dropShadow" />
                                                                <feColorMatrix in="SourceAlpha" type="matrix" values="0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 127 0" />
                                                                <feOffset dy="16" />
                                                                <feGaussianBlur stdDeviation="16" />
                                                                <feColorMatrix type="matrix" values="0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0.25 0" />
                                                                <feBlend mode="normal" in2="effect1_dropShadow" result="effect2_dropShadow" />
                                                                <feBlend mode="normal" in="SourceGraphic" in2="effect2_dropShadow" result="shape" />
                                                            </filter>
                                                            <filter id="filter1" x="0" y="0" width="252" height="252" filterUnits="userSpaceOnUse" color-interpolation-filters="sRGB">
                                                                <feFlood flood-opacity="0" result="BackgroundImageFix" />
                                                                <feColorMatrix in="SourceAlpha" type="matrix" values="0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 127 0" />
                                                                <feOffset dy="12" />
                                                                <feGaussianBlur stdDeviation="8" />
                                                                <feColorMatrix type="matrix" values="0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0.2 0" />
                                                                <feBlend mode="normal" in2="BackgroundImageFix" result="effect1_dropShadow" />
                                                                <feColorMatrix in="SourceAlpha" type="matrix" values="0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 127 0" />
                                                                <feOffset dy="2" />
                                                                <feGaussianBlur stdDeviation="2" />
                                                                <feColorMatrix type="matrix" values="0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0.05 0" />
                                                                <feBlend mode="normal" in2="effect1_dropShadow" result="effect2_dropShadow" />
                                                                <feBlend mode="normal" in="SourceGraphic" in2="effect2_dropShadow" result="shape" />
                                                            </filter>
                                                            <pattern id="pattern1" patternContentUnits="objectBoundingBox" width="1" height="1">
                                                                <use xlink:href="#profileImageAddPlaceholder" transform="scale(0.00142857)" />
                                                                <use xlink:href="#profileImageAdd" transform="scale(0.00142857)" />
                                                            </pattern>
                                                            <image id="profileImageAddPlaceholder" width="700" height="700" xlink:href='img/content/upload-placeholder.svg' />
                                                            <image id="profileImageAdd" class="profile-upload__image" width="700" height="700" xlink:href='' />
                                                        </defs>
                                                    </svg>
                                                    <div class="profile-upload__label">
                                                        <svg class="icon-icon-camera" width="50px" height="50px">
                                                            <use xlink:href="#icon-camera"></use>
                                                        </svg>
                                                        <p class="mb-0">Click & Drop
                                                            <br>to change photo
                                                        </p>
                                                    </div>
                                                </div>
                                                <div class="modal-account__tabs nav">
                                                    <a class="modal-account__tab active" data-toggle="tab" href="#accountDetails">
                                                        <svg class="icon-icon-details">
                                                            <use xlink:href="#icon-details"></use>
                                                        </svg>Personal Details</a>
                                                    <a class="modal-account__tab" data-toggle="tab" href="#accountShippingAddress">
                                                        <svg class="icon-icon-truck">
                                                            <use xlink:href="#icon-truck"></use>
                                                        </svg>Address</a>
                                                    <a class="modal-account__tab" data-toggle="tab" href="#accountPayment">
                                                        <svg class="icon-icon-credit-card">
                                                            <use xlink:href="#icon-credit-card"></use>
                                                        </svg>Package </a>
                                                </div>
                                            </div>
                                            <div class="modal-account__right tab-content">
                                                <div class="modal-account__pane tab-pane fade show active" id="accountDetails">
                                                    <div class="modal-account__pane-header">
                                                        <h2>Personal details</h2>
                                                    </div>
                                                    
                                                        <div class="row row--md">
                                                            <div class="col-12 form-group form-group--lg">
                                                                <label class="form-label form-label--sm">First Name: *</label>
                                                                <div class="input-group">
                                                                    <input class="input" type="text" placeholder="" name="fname" required value="" required>
                                                                </div>
                                                            </div>
                                                            <div class="col-12 form-group form-group--lg">
                                                                <label class="form-label form-label--sm">Last Name: *</label>
                                                                <div class="input-group">
                                                                    <input class="input" type="text" placeholder="" name="lname" required value="" required>
                                                                </div>
                                                            </div>
                                                            <div class="col-12 form-group form-group--lg">
                                                                <label class="form-label form-label--sm">E-Mail: *</label>
                                                                <div class="input-group">
                                                                    <input class="input" type="email" placeholder="" disabled value="<?php echo $row['email']; ?>" required>
                                                                    <input type="hidden" name="id" value="<?php echo $_GET['id']?> ">
                                                                </div>
                                                            </div>
                                                            <div class="col-12 form-group form-group--lg">
                                                                <label class="form-label form-label--sm">Gender:</label>
                                                                <div class="input-group input-group--append">
                                                                    <select class="input js-input-select input--fluid" required name="gender" data-placeholder="">
                                                                        <option value="Female" selected="selected">Female
                                                                        </option>
                                                                        <option value="Male">Male
                                                                        </option>
                                                                    </select><span class="input-group__arrow">
                                                                        <svg class="icon-icon-keyboard-down">
                                                                            <use xlink:href="#icon-keyboard-down"></use>
                                                                        </svg></span>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="modal-account__form-submit">
                                                            <button class="button button--primary button--load" value="submit" name="submit" type="submit"><span class="button__icon button__icon--left">
                                                                    <svg class="icon-icon-refresh">
                                                                        <use xlink:href="#icon-refresh"></use>
                                                                    </svg></span><span class="button__text">Submit</span>
                                                            </button>
                                                        </div>
                                                    
                                                </div>
                                                <div class="modal-account__pane tab-pane fade" id="accountShippingAddress">
                                                    <div class="modal-account__pane-header">
                                                        <h2>Address</h2>
                                                    </div>
                                                    
                                                        <div class="row row--md">
                                                            <div class="col-12 form-group form-group--lg">
                                                                <label class="form-label form-label--sm">Country: *</label>
                                                                <div class="input-group">
                                                                    <input class="input" type="text" placeholder="" name="country" value="" required>
                                                                </div>
                                                            </div>
                                                            <div class="col-12 form-group form-group--lg">
                                                                <label class="form-label form-label--sm">City: *</label>
                                                                <div class="input-group">
                                                                    <input class="input" type="text" placeholder="" name="city" value="Beijing" required>
                                                                </div>
                                                            </div>
                                                            <div class="col-12 form-group form-group--lg">
                                                                <label class="form-label form-label--sm">House Number and Street: *</label>
                                                                <div class="input-group">
                                                                    <input class="input" type="text" placeholder="" name="address" value="898 Joanne Lane street" required>
                                                                </div>
                                                            </div>
                                                            <div class="col-12 form-group form-group--lg">
                                                                <label class="form-label form-label--sm">ZIP Code: *</label>
                                                                <div class="input-group">
                                                                    <input class="input js-zip-code" type="text" name="zip_code" placeholder="" required>
                                                                </div>
                                                            </div>
                                                            <div class="col-12 form-group form-group--lg">
                                                                <label class="form-label form-label--sm">Phone Number: *</label>
                                                                <div class="input-group">
                                                                    <input class="input js-phone-number" type="text" name="mobile_no" disabled value="<?php echo $row['mobile_no']; ?>" placeholder="+1 (070) 123-4567" required>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="modal-account__form-submit">
                                                            <button class="button button--primary button--load" name="submit" value="submit" type="submit"><span class="button__icon button__icon--left">
                                                                    <svg class="icon-icon-refresh">
                                                                        <use xlink:href="#icon-refresh"></use>
                                                                    </svg></span><span class="button__text">Submit</span>
                                                            </button>
                                                        </div>
                                                    
                                                </div>
                                                <div class="modal-account__pane tab-pane fade" id="accountPayment">
                                                    <div class="modal-account__pane-header">
                                                        <h2>Payment methods</h2>
                                                    </div>
                                                    
                                                        <div class="row row--md">
                                                            <div class="col-12 form-group form-group--lg">
                                                                <label class="form-label form-label--sm">Name on Card: *</label>
                                                                <div class="input-group">
                                                                    <input class="input" type="text" placeholder="Felecia Burke" >
                                                                </div>
                                                            </div>
                                                            <div class="col-12 form-group form-group--lg">
                                                                <label class="form-label form-label--sm">Card Number: *</label>
                                                                <div class="input-group input-group--append">
                                                                    <input class="input js-card-number" type="text" placeholder="****   ****   ****   1234" ><span class="input-group__append"><img class="add-card__input-number-logo" src="img/content/visa-logo.png" alt="#"></span>
                                                                </div>
                                                            </div>
                                                            <div class="col-12 form-group form-group--lg">
                                                                <label class="form-label form-label--sm">Expire Date</label>
                                                                <div class="input-group">
                                                                    <input class="input js-card-date" type="text" placeholder="12/2020" >
                                                                </div>
                                                            </div>
                                                            <div class="col-12 form-group form-group--lg">
                                                                <label class="form-label form-label--sm">CVV Code <span class="badge-help" data-tippy-content="CVV Code" data-tippy-placement="top">
                                                                        <svg class="icon-icon-help">
                                                                            <use xlink:href="#icon-help"></use>
                                                                        </svg></span>
                                                                </label>
                                                                <div class="input-group"></div>
                                                                <input class="input js-card-cvv" type="text" placeholder="***" >
                                                            </div>
                                                        </div>
                                                        <div class="modal-account__form-submit">
                                                            <button class="button button--primary button--load" type="submit"><span class="button__icon button__icon--left">
                                                                    <svg class="icon-icon-refresh">
                                                                        <use xlink:href="#icon-refresh"></use>
                                                                    </svg></span><span class="button__text">Submit</span>
                                                            </button>
                                                        </div>
                                                    
                                                </div>
                                            </div>
                                        </form>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </main>
    </div>
    <script src="js/gsap/gsap.min.js"></script>
    <script src="js/gsap/ScrollToPlugin.min.js"></script>
    <script src="js/gsap/ScrollTrigger.min.js"></script>
    <script src="js/vendor/popper.min.js"></script>
    <script src="js/vendor/jquery.min.js"></script>
    <script src="js/vendor/bootstrap.bundle.min.js"></script>
    <script src="js/vendor/imagesloaded.pkgd.min.js"></script>
    <script src="js/vendor/simplebar.min.js"></script>
    <script src="js/vendor/tippy-bundle.umd.min.js"></script>
    <script src="js/vendor/grid/masonry.pkgd.min.js"></script>
    <script src="js/vendor/grid/isotope.pkgd.min.js"></script>
    <script src="js/vendor/charts/circle-progress.min.js"></script>
    <script src="js/vendor/charts/echarts.common.min.js"></script>
    <script src="js/vendor/charts/apexcharts/apexcharts.min.js"></script>
    <script src="js/vendor/cleave/cleave.min.js"></script>
    <script src="js/vendor/cleave/addons/cleave-phone.us.js"></script>
    <script src="js/vendor/jqvmap/jquery.vmap.min.js"></script>
    <script src="js/vendor/jqvmap/jquery.vmap.world.js"></script>
    <script src="js/vendor/jqvmap/jquery.vmap.sampledata.js"></script>
    <script src="js/vendor/jquery.star-rating-svg.min.js"></script>
    <script src="js/vendor/calendar/flatpickr/flatpickr.min.js"></script>
    <script src="js/vendor/calendar/flatpickr/en.js"></script>
    <script src="js/vendor/select2.min.js"></script>
    <script src="js/vendor/editors/quill.min.js"></script>
    <script src="js/vendor/filepond/filepond-plugin-image-preview.min.js"></script>
    <script src="js/vendor/filepond/filepond.min.js"></script>
    <script src="js/vendor/swiper-bundle.min.js"></script>
    <script src="js/vendor/scrollmagic/ScrollMagic.min.js"></script>
    <script src="js/vendor/scrollmagic/debug.addIndicators.min.js"></script>
    <script src="js/components.js"></script>
    <script src="js/common.js"></script>
</body>

</html>