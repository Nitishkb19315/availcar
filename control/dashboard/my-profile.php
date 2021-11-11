<?php require_once("./header.php") ?>
<?php require_once("./svg.php") ?>
<?php confirm_logged_in(); ?>
<?php if(isset($_GET['id'])){ $row = get_user_profile_details($_GET['id']);}?>

<body>
    <div class="sidebar-backdrop"></div>
    <div class="page-wrapper">
        <?php if($_SESSION['user_type']=="user"){ require_once("./user-navbar.php");}else{ require_once("./navbar.php");} ?>
        <main class="page-content">
            <div class="container">
                <div class="page-header">
                    <h1 class="page-header__title">User Profile</h1>
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
                                    <li class="breadcrumbs__item disabled"><a class="breadcrumbs__link" href="#"><span>Account</span>
                                            <svg class="icon-icon-keyboard-right breadcrumbs__arrow">
                                                <use xlink:href="#icon-keyboard-right"></use>
                                            </svg></a>
                                    </li>
                                    <li class="breadcrumbs__item active"><span class="breadcrumbs__link">User Profile</span>
                                    </li>
                                </ol>
                            </div>
                        </div>
                    </div>
                    <div class="page-tools__right">
                        <div class="page-tools__right-row">
                            <div class="page-tools__right-item"><a class="button-icon" href="#" data-modal="#accountEdit"><span class="button-icon__icon">
                                        <svg class="icon-icon-task">
                                            <use xlink:href="#icon-task"></use>
                                        </svg></span></a>
                            </div>
                            <div class="page-tools__right-item"><a class="button-icon" href="#" data-modal="#delete-user" data-dismiss="modal"><span class="button-icon__icon">
                                        <svg class="icon-icon-trash">
                                            <use xlink:href="#icon-trash"></use>
                                        </svg></span></a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="customer-account">
                    <div class="customer-account__item-1 customer-profile customer-card card">
                        <div class="card__wrapper">
                            <div class="card__container">
                                <div class="card__body">
                                    <div class="customer-profile__avatar">
                                        <svg viewBox="0 0 252 272" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink">
                                            <g filter="url(#filter0_dd)">
                                                <path d="M55 199H197V221C197 221 153.752 224 126 224C98.248 224 55 221 55 221V199Z" fill="white" />
                                            </g>
                                            <g filter="url(#filter1_dd)">
                                                <path d="M18.235 43.2287C19.2494 23.1848 35.1848 7.24941 55.2287 6.23501C76.8855 5.13899 104.551 4 126 4C147.449 4 175.114 5.13898 196.771 6.23501C216.815 7.24941 232.751 23.1848 233.765 43.2287C234.861 64.8855 236 92.5512 236 114C236 135.449 234.861 163.114 233.765 184.771C232.751 204.815 216.815 220.751 196.771 221.765C175.114 222.861 147.449 224 126 224C104.551 224 76.8855 222.861 55.2287 221.765C35.1848 220.751 19.2494 204.815 18.235 184.771C17.139 163.114 16 135.449 16 114C16 92.5512 17.139 64.8855 18.235 43.2287Z" fill="url(#pattern0)" />
                                            </g>
                                            <defs>
                                                <filter id="filter0_dd" x="23" y="183" width="206" height="89" filterUnits="userSpaceOnUse" color-interpolation-filters="sRGB">
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
                                                <filter id="filter1_dd" x="0" y="0" width="252" height="252" filterUnits="userSpaceOnUse" color-interpolation-filters="sRGB">
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
                                                <pattern id="pattern0" patternContentUnits="objectBoundingBox" width="1" height="1">
                                                    <use xlink:href="#profileImage" transform="scale(0.00142857)" />
                                                </pattern>
                                                <image id="profileImage" width="700" height="700" xlink:href="<?php if (empty(trim($row['profile_image']))) {
                                                                                                                    echo 'img/content/avatar-full.jpg';
                                                                                                                } else {
                                                                                                                    echo ('./uploads/profiles/' . $row['profile_image']);
                                                                                                                } ?>" />
                                            </defs>
                                        </svg>
                                    </div>
                                    <h4 class="customer-profile__title"><?php echo $row['fname'] . " " . $row['lname'] ?></h4>
                                    <!-- <div class="customer-profile__balance">
                                        <div class="label label--primary label--lg"><span class="label__icon">
                                                <svg class="icon-icon-wallet">
                                                    <use xlink:href="#icon-wallet"></use>
                                                </svg></span> Balance: $5,000</div>
                                    </div> -->
                                </div>
                                <div class="card__footer">
                                    <div class="card__container">
                                        <ul class="customer-profile__address demo">
                                            <li>
                                                <svg class="icon-icon-location">
                                                    <use xlink:href="#icon-location"></use>
                                                </svg><?php echo $row['city'].", ".$row['country'] ?>
                                            </li>
                                            <li>
                                                <svg class="icon-icon-email">
                                                    <use xlink:href="#icon-email"></use>
                                                </svg> <a href="mailto:#" style="text-overflow:ellipsis" title="<?php echo $row['email']?>" ><?php echo $row['email']?></a>
                                            </li>
                                            <li>
                                                <svg class="icon-icon-phone">
                                                    <use xlink:href="#icon-phone"></use>
                                                </svg> <a href="tel:#"><?php echo $row['mobile_no']?></a>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="customer-account__item-2 customer-details customer-card card">
                        <div class="card__wrapper">
                            <div class="card__container">
                                <div class="card__header">
                                    <div class="card__header-left">
                                        <h3 class="card__header-title">Personal Details</h3>
                                    </div>
                                    <div class="customer-card__header-right">
                                        <button class="customer-card__btn-task">
                                            <svg class="icon-icon-task">
                                                <use xlink:href="#icon-task"></use>
                                            </svg>
                                        </button>
                                    </div>
                                </div>
                                <div class="card__body">
                                    <ul class="customer-details__list">
                                        <li>
                                            <div class="row row--xs justify-content-between">
                                                <div class="col-auto text-grey">First Name</div>
                                                <div class="col-auto"><?php echo $row['fname']; ?></div>
                                            </div>
                                        </li>
                                        <li>
                                            <div class="row row--xs justify-content-between">
                                                <div class="col-auto text-grey">Last Name</div>
                                                <div class="col-auto"><?php echo $row['lname']; ?></div>
                                            </div>
                                        </li>
                                        <li>
                                            <div class="row row--xs justify-content-between">
                                                <div class="col-auto text-grey">Gender</div>
                                                <div class="col-auto"><?php echo $row['gender']; ?></div>
                                            </div>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="customer-account__item-3 customer-payment customer-card card">
                        <div class="card__wrapper">
                            <div class="card__container">
                                <div class="card__header">
                                    <div class="card__header-left">
                                        <h3 class="card__header-title">Payment methods</h3>
                                    </div>
                                    <div class="customer-card__header-right">
                                        <button class="customer-card__btn-task">
                                            <svg class="icon-icon-task">
                                                <use xlink:href="#icon-task"></use>
                                            </svg>
                                        </button>
                                    </div>
                                </div>
                                <div class="card__body">
                                    <div class="card__credit-card">
                                        <div class="credit-card">
                                            <img class="credit-card__image" src="img/content/credit-card@3x.png" alt="#" />
                                            <div class="credit-card__content">
                                                <input class="credit-card__number" type="text" value="0123   4567   8910   1112" readonly="readonly" />
                                                <div class="credit-card__name">Felecia Burke</div>
                                                <div class="credit-card__date">12/31</div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="card__footer">
                                    <div class="card__container">
                                        <div class="card__credit-list">
                                            <ul class="card-list">
                                                <li class="card-list__item">
                                                    <div class="card-list__title">Card Type</div>
                                                    <div class="card-list__value">VISA</div>
                                                </li>
                                                <li class="card-list__item">
                                                    <div class="card-list__title">Card Holder</div>
                                                    <div class="card-list__value">Felecia Burke</div>
                                                </li>
                                                <li class="card-list__item">
                                                    <div class="card-list__title">Expire</div>
                                                    <div class="card-list__value">12/31</div>
                                                </li>
                                                <li class="card-list__item">
                                                    <div class="card-list__title">Card Number</div>
                                                    <div class="card-list__value">0123 4567 8910 1112</div>
                                                </li>
                                                <li class="card-list__item">
                                                    <div class="card-list__title">Balance</div>
                                                    <div class="card-list__value">$1,000,000</div>
                                                </li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="customer-account__item-4 customer-shipping customer-card card">
                        <div class="card__wrapper">
                            <div class="card__container">
                                <div class="card__header">
                                    <div class="card__header-left">
                                        <h3 class="card__header-title">Address</h3>
                                    </div>
                                    <div class="customer-card__header-right">
                                        <button class="customer-card__btn-task">
                                            <svg class="icon-icon-task">
                                                <use xlink:href="#icon-task"></use>
                                            </svg>
                                        </button>
                                    </div>
                                </div>
                                <div class="card__body">
                                    <ul class="customer-shipping__list">
                                        <li>
                                            <div class="row row--xs justify-content-between">
                                                <div class="col-auto text-grey">Address</div>
                                                <div class="col-auto"><?php echo $row['address']; ?></div>
                                            </div>
                                        </li>
                                        <li>
                                            <div class="row row--xs justify-content-between">
                                                <div class="col-auto text-grey">City</div>
                                                <div class="col-auto"><?php echo $row['city']; ?></div>
                                            </div>
                                        </li>
                                        <li>
                                            <div class="row row--xs justify-content-between">
                                                <div class="col-auto text-grey">Country</div>
                                                <div class="col-auto"><?php echo $row['country']; ?></div>
                                            </div>
                                        </li>
                                        <li>
                                            <div class="row row--xs justify-content-between">
                                                <div class="col-auto text-grey">Zip code</div>
                                                <div class="col-auto"><?php echo $row['zip_code']; ?></div>
                                            </div>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- <div class="customer-account__item-5 customer-wish-list customer-card card">
                        <div class="card__wrapper">
                            <div class="card__container">
                                <div class="card__header">
                                    <div class="card__header-left">
                                        <h3 class="card__header-title">Wish List</h3>
                                    </div>
                                    <div class="customer-card__header-right">
                                        <div class="customer-wish-list__view">
                                            <div class="row row--xs">
                                                <div class="col-auto"><span class="text-light-theme">3 Items</span>
                                                </div>
                                                <div class="col-auto"><a href="customer-wishlist.html">View All</a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="card__body">
                                    <div class="customer-wish-list__products">
                                        <div class="customer-wish-list__product">
                                            <div class="customer-wish-list__product-image">
                                                <img src="img/content/product/thumb-1.jpg" srcset="img/content/product/thumb-1.jpg 2x" alt="#">
                                            </div>
                                            <div class="customer-wish-list__product-right">
                                                <ul class="customer-wish-list__params">
                                                    <li><b>Apple Watch Series 4</b>
                                                    </li>
                                                    <li>Product ID: 790841</li>
                                                    <li>Color: Gold</li>
                                                    <li>Size: 44mm</li>
                                                    <li>Price: $399</li>
                                                </ul>
                                                <div class="label label--primary">In Stock</div>
                                            </div>
                                        </div>
                                        <div class="customer-wish-list__product">
                                            <div class="customer-wish-list__product-image">
                                                <img src="img/content/product/thumb-2.jpg" srcset="img/content/product/thumb-2.jpg 2x" alt="#">
                                            </div>
                                            <div class="customer-wish-list__product-right">
                                                <ul class="customer-wish-list__params">
                                                    <li><b>Apple Watch Series 4</b>
                                                    </li>
                                                    <li>Product ID: 790841</li>
                                                    <li>Color: Gold</li>
                                                    <li>Size: 44mm</li>
                                                    <li>Price: $399</li>
                                                </ul>
                                                <div class="label label--primary">In Stock</div>
                                            </div>
                                        </div>
                                        <div class="customer-wish-list__product">
                                            <div class="customer-wish-list__product-image">
                                                <img src="img/content/product/thumb-3.jpg" srcset="img/content/product/thumb-3.jpg 2x" alt="#">
                                            </div>
                                            <div class="customer-wish-list__product-right">
                                                <ul class="customer-wish-list__params">
                                                    <li><b>Apple Watch Series 4</b>
                                                    </li>
                                                    <li>Product ID: 790841</li>
                                                    <li>Color: Gold</li>
                                                    <li>Size: 44mm</li>
                                                    <li>Price: $399</li>
                                                </ul>
                                                <div class="label label--primary">In Stock</div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div> -->
                </div>
            </div>
        </main>
    </div>
    <div class="modal modal-account modal-compact scrollbar-thin" id="accountEdit" data-simplebar>
        <div class="modal__overlay" data-dismiss="modal"></div>
        <div class="modal__wrap">
            <div class="modal__window">
                <div class="modal__content">
                    <button class="modal__close" data-dismiss="modal">
                        <svg class="icon-icon-cross">
                            <use xlink:href="#icon-cross"></use>
                        </svg>
                    </button>
                    <div class="modal__body">
                        <div class="modal-account__content">
                            <div class="modal-account__left">
                                <div class="modal-account__upload profile-upload js-profile-upload">
                                    <form method="post" action="./execution/update-user-profile-exe.php" enctype="multipart/form-data">
                                        <input type="hidden" name="id" value="<?php echo $row['id'];?>">
                                        <input class="profile-upload__input" type="file" name="new_profile_image" accept="image/png, image/jpeg">
                                        <input type="hidden" name="old_profile_image" value="<?php echo $row['profile_image'];?>">
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
                                            <image id="profileImageAddPlaceholder" width="700" height="700" xlink:href="<?php if (empty(trim($row['profile_image']))) {
                                                                                                                    echo 'img/content/upload-placeholder.svg';
                                                                                                                } else {
                                                                                                                    echo ('./uploads/profiles/'. $row['profile_image']);
                                                                                                                } ?>" />
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
                                        </svg>Account Details</a>
                                    <a class="modal-account__tab" data-toggle="tab" href="#accountShippingAddress">
                                        <svg class="icon-icon-truck">
                                            <use xlink:href="#icon-truck"></use>
                                        </svg>Shipping Address</a>
                                    <a class="modal-account__tab" data-toggle="tab" href="#accountPayment">
                                        <svg class="icon-icon-credit-card">
                                            <use xlink:href="#icon-credit-card"></use>
                                        </svg>Payment Methods</a>
                                </div>
                            </div>
                            <div class="modal-account__right tab-content">
                                <div class="modal-account__pane tab-pane fade show active" id="accountDetails">
                                    <div class="modal-account__pane-header">
                                        <h2>Account details</h2>
                                    </div>
                                    
                                        <div class="row row--md">
                                            <div class="col-12 form-group form-group--lg">
                                                <label class="form-label form-label--sm">First Name: *</label>
                                                <div class="input-group">
                                                    <input class="input" name="fname" type="text" placeholder="" value="<?php echo $row['fname']; ?>" required>
                                                </div>
                                            </div>
                                            <div class="col-12 form-group form-group--lg">
                                                <label class="form-label form-label--sm">Last Name: *</label>
                                                <div class="input-group">
                                                    <input class="input" name="lname" type="text" placeholder="" value="<?php echo $row['lname']; ?>" required>
                                                </div>
                                            </div>
                                            <div class="col-12 form-group form-group--lg">
                                                <label class="form-label form-label--sm">E-Mail: *</label>
                                                <div class="input-group">
                                                    <input class="input" name="email" disabled type="email" placeholder="" value="<?php echo $row['email']; ?>" required>
                                                </div>
                                            </div>
                                            <div class="col-12 form-group form-group--lg">
                                                <label class="form-label form-label--sm">Gender (optional):</label>
                                                <div class="input-group input-group--append">
                                                    <select class="input js-input-select input--fluid" name="gender" data-placeholder="">
                                                        <option value="Female" <?php if($row['gender']=="Female"){ echo "selected='selected'";} ?>>Female
                                                        </option>
                                                        <option value="Male"<?php if($row['gender']=="Male"){ echo "selected='selected'";} ?>>Male
                                                        </option>
                                                    </select><span class="input-group__arrow">
                                                        <svg class="icon-icon-keyboard-down">
                                                            <use xlink:href="#icon-keyboard-down"></use>
                                                        </svg></span>
                                                </div>
                                            </div>
                                        </div>
                                        
                                        <div class="modal-account__form-submit">
                                            <button class="button button--primary button--load" name="submit" value="submit" type="submit"><span class="button__icon button__icon--left">
                                                    <svg class="icon-icon-refresh">
                                                        <use xlink:href="#icon-refresh"></use>
                                                    </svg></span><span class="button__text">Update</span>
                                            </button>
                                        </div>
                                </div>
                                <div class="modal-account__pane tab-pane fade" id="accountShippingAddress">
                                    <div class="modal-account__pane-header">
                                        <h2>Shipping Address</h2>
                                    </div>
                                        <div class="row row--md">
                                            <div class="col-12 form-group form-group--lg">
                                                <label class="form-label form-label--sm">Country: *</label>
                                                <div class="input-group">
                                                    <input class="input" type="text" name="country" placeholder="" value="<?php echo $row['country'];?>" required>
                                                </div>
                                            </div>
                                            <div class="col-12 form-group form-group--lg">
                                                <label class="form-label form-label--sm">City: *</label>
                                                <div class="input-group">
                                                    <input class="input" type="text" name="city" placeholder="" value="<?php echo $row['city'];?>" required>
                                                </div>
                                            </div>
                                            <div class="col-12 form-group form-group--lg">
                                                <label class="form-label form-label--sm">House Number and Street: *</label>
                                                <div class="input-group">
                                                    <input class="input" type="text" name="address" placeholder="" value="<?php echo $row['address'];?>" required>
                                                </div>
                                            </div>
                                            <div class="col-12 form-group form-group--lg">
                                                <label class="form-label form-label--sm">ZIP Code: *</label>
                                                <div class="input-group">
                                                    <input class="input js-zip-code" name="zip_code" type="text" value="<?php echo $row['zip_code'];?>" placeholder="" required>
                                                </div>
                                            </div>
                                            <div class="col-12 form-group form-group--lg">
                                                <label class="form-label form-label--sm">Phone Number: *</label>
                                                <div class="input-group">
                                                    <input class="input js-phone-number" name="mobile_no" type="text" value="<?php echo $row['mobile_no'];?>" placeholder="+1 (070) 123-4567" required>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="modal-account__form-submit">
                                            <button class="button button--primary button--load" name="submit" value="submit" type="submit"><span class="button__icon button__icon--left">
                                                    <svg class="icon-icon-refresh">
                                                        <use xlink:href="#icon-refresh"></use>
                                                    </svg></span><span class="button__text">Update</span>
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
                                            <button class="button button--primary button--load" name="submit" value="submit" type="submit"><span class="button__icon button__icon--left">
                                                    <svg class="icon-icon-refresh">
                                                        <use xlink:href="#icon-refresh"></use>
                                                    </svg></span><span class="button__text">Update</span>
                                            </button>
                                        </div>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="modal modal-compact modal-success scrollbar-thin" id="delete-user" data-simplebar>
        <div class="modal__overlay" data-dismiss="modal"></div>
        <div class="modal__wrap">
            <div class="modal__window">
                <div class="modal__content">
                    <div class="modal__body">
                        <div class="modal__container">
                            <i class="fas fa-question modal-success__icon"></i>
                            <h4 class="modal-success__title">Delete User</h4>
                        </div>
                    </div>
                    <div class="modal-compact__buttons">
                            <div class="modal-compact__button-item">
                                <a class="modal-compact__button button" href="./delete-exe/delete-user.php?id=<?php echo $row['id']?>"><span class="button__text">Delete</span>
                                </a>
                            </div>
                            <div class="modal-compact__button-item">
                                <a  class="modal-compact__button button" data-dismiss="modal"><span class="button__text">Close</span>
                                </a>
                            </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <?php require_once("./footer.php"); ?>