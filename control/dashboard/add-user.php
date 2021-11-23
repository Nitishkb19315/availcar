<?php require_once("./header.php") ?>
<?php require_once("./svg.php") ?>
<?php confirm_logged_in(); ?>
<?php if (!confirm_admin()) {
    redirect("user-add-listing.php");
} ?>

<body>
    <div class="sidebar-backdrop"></div>
    <div class="page-wrapper">
        <?php require_once("./navbar.php") ?>
        <main class="page-content">
            <div class="container">
                <div class="page-header">
                    <h1 class="page-header__title">Add User</h1>
                </div>
                <div class="page-tools">
                    <div class="page-tools__breadcrumbs">
                        <div class="breadcrumbs">
                            <div class="breadcrumbs__container">
                                <ol class="breadcrumbs__list">
                                    <li class="breadcrumbs__item">
                                        <a class="breadcrumbs__link" href="index.html">
                                            <svg class="icon-icon-home breadcrumbs__icon">
                                                <use xlink:href="#icon-home"></use>
                                            </svg>
                                            <svg class="icon-icon-keyboard-right breadcrumbs__arrow">
                                                <use xlink:href="#icon-keyboard-right"></use>
                                            </svg>
                                        </a>
                                    </li>
                                    <li class="breadcrumbs__item disabled"><a class="breadcrumbs__link" href="#"><span>Accounts</span>
                                            <svg class="icon-icon-keyboard-right breadcrumbs__arrow">
                                                <use xlink:href="#icon-keyboard-right"></use>
                                            </svg></a>
                                    </li>
                                    <li class="breadcrumbs__item active"><span class="breadcrumbs__link">Add Product</span>
                                    </li>
                                </ol>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="card add-product card--content-center">
                    <div class="card__wrapper">
                        <div class="card__container">
                            <form class="add-product__form" action="./execution/add-user-exe.php" enctype="multipart/form-data" method="post">
                                <div class="add-product__row">

                                    <div class="add-product">
                                        <div class="row row--md">

                                            <!-- profile image -->
                                            <div class="col-12 col-sm-6 d-flex flex-column">
                                                <div class="mx-auto">
                                                    <div class="modal-account__upload profile-upload js-profile-upload">
                                                        <input class="profile-upload__input" type="file" name="mainImage" accept="image/png, image/jpeg">
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
                                                </div>
                                            </div>
                                            <!-- details -->
                                            <div class="col-12 col-sm-6 ">
                                                <div class="row">
                                                    <div class="col-12 col-md-6  form-group form-group--lg">
                                                        <label class="form-label">Username</label>
                                                        <div class="input-group">
                                                            <input class="input" type="text" placeholder="Username" name="username" required>
                                                        </div>
                                                    </div>
                                                    <div class="col-12 col-md-6  form-group form-group--lg">
                                                        <label class="form-label">E-Mail</label>
                                                        <div class="input-group">
                                                            <input class="input" type="email" placeholder="E-Mail" name="email" required>
                                                        </div>
                                                    </div>
                                                    <div class="col-12 col-md-6  form-group form-group--lg">
                                                    <label class="form-label">Password</label>
                                                        <div class="input-group input-group--prepend"><span class="input-group__prepend">
                                                                <svg class="icon-icon-password">
                                                                    <use xlink:href="#icon-password"></use>
                                                                </svg></span>
                                                            <input class="input" type="password" value="" placeholder="Password" name="password" required>
                                                        </div>
                                                    </div>
                                                    <div class="col-12 col-md-6  form-group form-group--lg">
                                                    <label class="form-label">Confirm Password</label>
                                                        <div class="input-group input-group--prepend"><span class="input-group__prepend">
                                                                <svg class="icon-icon-password">
                                                                    <use xlink:href="#icon-password"></use>
                                                                </svg></span>
                                                            <input class="input" type="password" placeholder="Password (Confirm)" name="re-password" required>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-12 col-md-3 col-sm-4 form-group form-group--lg">
                                                <label class="form-label">First Name</label>
                                                <div class="input-group">
                                                    <input class="input" type="text" placeholder="First Name" name="fname" required>
                                                </div>
                                            </div>
                                            <div class="col-12 col-md-3 col-sm-4 form-group form-group--lg">
                                                <label class="form-label">Last Name</label>
                                                <div class="input-group">
                                                    <input class="input" type="text" placeholder="Last Name" name="lname" required>
                                                </div>
                                            </div>
                                            <div class="col-12 col-md-3 col-sm-4 form-group form-group--lg">
                                                <label class="form-label">Package</label>
                                                <div class="input-group input-group--append">
                                                    <select class="input js-input-select input--fluid" data-placeholder="Select Package" name="package"   required>

                                                        <option value="">Select Package</option>
                                                        <?php
                                                        $result = get_package_list();
                                                        if (mysqli_num_rows($result) > 0) {
                                                            while ($row = mysqli_fetch_assoc($result)) {

                                                        ?>
                                                                <option value="<?php echo $row['id']; ?>"><?php echo strtoupper($row['package_name']); ?></option>
                                                        <?php
                                                            }
                                                        }
                                                        ?>
                                                    </select>
                                                    <span class="input-group__arrow">
                                                        <svg class="icon-icon-keyboard-down">
                                                            <use xlink:href="#icon-keyboard-down"></use>
                                                        </svg>
                                                    </span>
                                                </div>
                                            </div>
                                            <div class="col-12 col-md-3 col-sm-4 form-group form-group--lg">
                                                <label class="form-label">Mobile No.</label>
                                                <div class="input-group input-group--prepend"><span class="input-group__prepend">
                                                        <svg class="icon-icon-phone">
                                                            <use xlink:href="#icon-phone"></use>
                                                        </svg></span>
                                                    <input class="input" type="text" placeholder="Mobile Number" name="mobile_no" required>
                                                </div>
                                            </div>
                                            <div class="col-12 col-md-3 col-sm-4 form-group form-group--lg">
                                                <label class="form-label">Gender</label>
                                                <div class="input-group input-group--append">
                                                    <select class="input js-input-select input--fluid" placeholder="Username" name="gender" required>
                                                        <option value="">Select Gender</option>
                                                        <option value="Male">Male</option>
                                                        <option value="Female">Female</option>
                                                        <option value="Electric">Other</option>
                                                    </select>
                                                    <span class="input-group__arrow">
                                                        <svg class="icon-icon-keyboard-down">
                                                            <use xlink:href="#icon-keyboard-down"></use>
                                                        </svg>
                                                    </span>
                                                </div>
                                            </div>
                                            <div class="col-12 col-md-3 col-sm-4 form-group form-group--lg">
                                                <label class="form-label">Address</label>
                                                <div class="input-group">
                                                    <input class="input" type="text" placeholder="Address" name="address" required>
                                                </div>
                                            </div>
                                            <div class="col-12 col-md-3 col-sm-4 form-group form-group--lg">
                                                <label class="form-label">ZIP Code</label>
                                                <div class="input-group">
                                                    <input class="input" type="text" placeholder="ZIP Code" name="zip_code" required>
                                                </div>
                                            </div>
                                            <div class="col-12 col-md-3 col-sm-4 form-group form-group--lg">
                                                <label class="form-label">City</label>
                                                <div class="input-group">
                                                    <input class="input" type="text" placeholder="City" name="city" required>
                                                </div>
                                            </div>
                                            <div class="col-12 col-md-3 col-sm-4 form-group form-group--lg">
                                                <label class="form-label">Country</label>
                                                <div class="input-group">
                                                    <input class="input" type="text" placeholder="Country" name="country" required>
                                                </div>
                                            </div>

                                        </div>
                                        <div class="add-product__submit">
                                            <div class="modal__footer-button">

                                                <input type="submit" value="Add User" name="submit" class="button button--primary button--block">
                                            </div>
                                            <div class="modal__footer-button"><a class="button button--secondary button--block" href="manage-users.php"><span class="button__text">Cancel</span></a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </main>
    </div>
    <div class="modal modal-compact modal-success <?php if ($_GET["er"]) {
                                                        echo "is-active is-animate";
                                                    } ?>" id="addProductSuccess">
        <div class="modal__overlay" data-dismiss="modal"></div>
        <div class="modal__wrap">
            <div class="modal__window">
                <div class="modal__content">
                    <div class="modal__body">
                        <div class="modal__container">
                            <img class="modal-success__icon" src="img/content/checked-success.svg" alt="#">
                            <h4 class="modal-success__title"><?php echo getError($_GET['er']); ?></h4>
                        </div>
                    </div>
                    <div class="modal-compact__buttons">
                        <div class="modal-compact__button-item">
                            <button class="modal-compact__button button" data-dismiss="modal" data-modal="#addProduct"><span class="button__text">Add new product</span>
                            </button>
                        </div>
                        <div class="modal-compact__button-item">
                            <button class="modal-compact__button button" data-dismiss="modal"><span class="button__text">Close</span>
                            </button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <?php require_once("./footer.php") ?>