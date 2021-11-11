<?php require_once("./header.php") ?>
<?php require_once("./svg.php") ?>

<body class="contacts">
    <div class="sidebar-backdrop"></div>
    <div class="page-wrapper">
        <?php require_once("./navbar.php") ?>
        <main class="page-content">
            <div class="container">
                <div class="page-header">
                    <h1 class="page-header__title">Manage Contacts <span class="text-grey">(50)</span></h1>
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
                                    <li class="breadcrumbs__item active"><span class="breadcrumbs__link">Contacts</span>
                                    </li>
                                </ol>
                            </div>
                        </div>
                    </div>
                    <div class="page-tools__right">
                        <ul class="page-tools__right-row nav" role="tablist">
                            <li class="page-tools__right-item"><a class="button-icon active" href="#tab-grid" data-toggle="tab"><span class="button-icon__icon">
                                        <svg class="icon-icon-grid">
                                            <use xlink:href="#icon-grid"></use>
                                        </svg></span></a>
                            </li>
                            <li class="page-tools__right-item"><a class="button-icon " href="#tab-list" data-toggle="tab"><span class="button-icon__icon">
                                        <svg class="icon-icon-list">
                                            <use xlink:href="#icon-list"></use>
                                        </svg></span></a>
                            </li>
                        </ul>
                    </div>
                </div>
                <div class="toolbox">
                    <div class="toolbox__row row gutter-bottom-xs">
                        <div class="toolbox__left col-12 col-lg">
                            <div class="toolbox__left-row row row--xs gutter-bottom-xs">
                                <div class="form-group form-group--inline col-12 col-sm-auto">
                                    <label class="form-label">Show</label>
                                    <div class="input-group input-group--white input-group--append">
                                        <input class="input input--select" type="text" value="10" size="1" data-toggle="dropdown" readonly><span class="input-group__arrow">
                                            <svg class="icon-icon-keyboard-down">
                                                <use xlink:href="#icon-keyboard-down"></use>
                                            </svg></span>
                                        <div class="dropdown-menu dropdown-menu--right dropdown-menu--fluid js-dropdown-select"><a class="dropdown-menu__item active" href="#" tabindex="0" data-value="10">10</a><a class="dropdown-menu__item" href="#" tabindex="0" data-value="15">15</a><a class="dropdown-menu__item" href="#" tabindex="0" data-value="20">20</a>
                                            <a class="dropdown-menu__item" href="#" tabindex="0" data-value="25">25</a><a class="dropdown-menu__item" href="#" tabindex="0" data-value="50">50</a>
                                        </div>
                                    </div>
                                </div>
                                <!-- <div class="form-group form-group--inline col-12 col-sm-auto">
                                    <div class="toolbox__status input-group input-group--white input-group--append">
                                        <input class="input input--select" type="text" value="Newest" data-toggle="dropdown" readonly><span class="input-group__arrow">
                                            <svg class="icon-icon-keyboard-down">
                                                <use xlink:href="#icon-keyboard-down"></use>
                                            </svg></span>
                                        <div class="dropdown-menu dropdown-menu--right dropdown-menu--fluid js-dropdown-select"><a class="dropdown-menu__item active" href="#" tabindex="0" data-value="Newest">Newest</a>
                                        </div>
                                    </div>
                                </div> -->
                            </div>
                        </div>
                        <div class="toolbox__right col-12 col-lg-auto">
                            <div class="toolbox__right-row row row--xs flex-nowrap">
                                <div class="col col-lg-auto">
                                    <!-- <form class="toolbox__search" method="GET"> -->
                                    <div class="input-group input-group--white input-group--prepend">
                                        <div class="input-group__prepend">
                                            <svg class="icon-icon-search">
                                                <use xlink:href="#icon-search"></use>
                                            </svg>
                                        </div>
                                        <input class="input" type="text" placeholder="Search Contacts">
                                    </div>
                                    <!-- </form> -->
                                </div>
                                <div class="col-auto ml-auto">
                                    <button class="button-add button-add--blue" data-modal="#addContact"><span class="button-add__icon">
                                            <svg class="icon-icon-plus">
                                                <use xlink:href="#icon-plus"></use>
                                            </svg></span><span class="button-add__text"></span>
                                    </button>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <?php
                $headOfficeDetails = get_head_office_details();
                ?>
                <div class="card  card--content-center">
                    <div class="card__wrapper">
                        <div class="card__container">
                            <div class="add-product__row">
                                <div class="add-product">
                                    <div class="row contact-title">
                                        <h3>Head Office</h3>
                                    </div>
                                    <div class="row row--md">
                                        <div class="col-12 col-md-6  form-group form-group--lg">
                                            <label class="form-label">Info E-Mail</label>
                                            <div class="input-group input-group--prepend"><span class="input-group__prepend">
                                                    <svg class="icon-icon-email-2">
                                                        <use xlink:href="#icon-email-2"></use>
                                                    </svg></span>
                                                <input class="input" type="email" value="<?php echo ($headOfficeDetails['first_email']) ?>" placeholder="Email" id="first_email" required>
                                            </div>
                                        </div>
                                        <div class="col-12 col-md-6 form-group form-group--lg">
                                            <label class="form-label">Support E-Mail</label>
                                            <div class="input-group input-group--prepend"><span class="input-group__prepend">
                                                    <svg class="icon-icon-email-2">
                                                        <use xlink:href="#icon-email-2"></use>
                                                    </svg></span>
                                                <input class="input" type="email" value="<?php echo ($headOfficeDetails['second_email']) ?>" placeholder="Email" id="second_email" required>
                                            </div>
                                        </div>
                                        <div class="col-12 col-md-6 form-group form-group--lg">
                                            <label class="form-label">Phone NO. 1</label>
                                            <div class="input-group input-group--prepend"><span class="input-group__prepend">
                                                    <svg class="icon-icon-phone">
                                                        <use xlink:href="#icon-phone"></use>
                                                    </svg></span>
                                                <input class="input" type="text" placeholder="Mobile Number" value="<?php echo ($headOfficeDetails['first_phone_no']) ?>" id="first_mobile_no" required>
                                            </div>
                                        </div>
                                        <div class="col-12 col-md-6 form-group form-group--lg">
                                            <label class="form-label">Phone NO. 2</label>
                                            <div class="input-group input-group--prepend"><span class="input-group__prepend">
                                                    <svg class="icon-icon-phone">
                                                        <use xlink:href="#icon-phone"></use>
                                                    </svg></span>
                                                <input class="input" type="text" placeholder="Mobile Number" value="<?php echo ($headOfficeDetails['second_phone_no']) ?>" id="second_mobile_no" required>
                                            </div>
                                        </div>
                                        <div class="col-12  form-group form-group--lg">
                                            <label class="form-label">Address :</label>
                                            <div class="input-group">
                                                <textarea class="input" rows="6" id="address"><?php echo ($headOfficeDetails['address']) ?></textarea>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>


                <!-- branch details -->
                <div class="page-header branch-title">
                    <h3 class="page-header__title">Branch Details</h3>
                </div>
                <div class="table-wrapper tab-content">
                    <div class="tab-pane fade" id="tab-list">
                        <div class="table-wrapper__content table-collapse scrollbar-thin scrollbar-visible" data-simplebar>
                            <table class="table table--spaces">
                                <colgroup>
                                    <col width="70px">
                                    <col>
                                    <col>
                                    <col>
                                    <col>
                                    <col>
                                </colgroup>
                                <thead class="table__header">
                                    <tr class="table__header-row">
                                        <th>
                                            <div class="table__checkbox table__checkbox--all">
                                                <label class="checkbox">
                                                    <input class="js-checkbox-all" type="checkbox" data-checkbox-all="product"><span class="checkbox__marker"><span class="checkbox__marker-icon">
                                                            <svg class="icon-icon-checked">
                                                                <use xlink:href="#icon-checked"></use>
                                                            </svg></span></span>
                                                </label>
                                            </div>
                                        </th>
                                        <th class="table__th-sort mw-200"><span class="align-middle">Name</span><span class="sort sort--down"></span>
                                        </th>
                                        <th class="table__th-sort"><span class="align-middle">Email</span><span class="sort sort--down"></span>
                                        </th>
                                        <th class="table__th-sort"><span class="align-middle">Location</span><span class="sort sort--down"></span>
                                        </th>
                                        <th class="table__th-sort"><span class="align-middle">Phone</span><span class="sort sort--down"></span>
                                        </th>
                                        <th class="table__actions"></th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <?php
                                    $result = get_branch_list();
                                    if (mysqli_num_rows($result) > 0) {
                                        while ($row = mysqli_fetch_assoc($result)) {
                                    ?>
                                            <tr class="table__row">
                                                <td class="table__td">
                                                    <div class="table__checkbox table__checkbox--all">
                                                        <label class="checkbox">
                                                            <input type="checkbox" data-checkbox="product"><span class="checkbox__marker"><span class="checkbox__marker-icon">
                                                                    <svg class="icon-icon-checked">
                                                                        <use xlink:href="#icon-checked"></use>
                                                                    </svg></span></span>
                                                        </label>
                                                    </div>
                                                </td>
                                                <td class="table__td">
                                                    <div class="media-item media-item--medium">
                                                        <a class="media-item__icon color-red" href="customer-account.html">
                                                            <div class="media-item__icon-text">FB</div>
                                                            <img class="media-item__thumb" src="img/content/humans/item-1.jpg" alt="#">
                                                        </a>
                                                        <div class="media-item__right">
                                                            <h5 class="media-item__title"><a href="customer-account.html"><?php echo $row['name']; ?></a></h5>
                                                        </div>
                                                    </div>
                                                </td>
                                                <td class="table__td text-light-theme"><a href="mailto:<?php echo $row['email']; ?>"><?php echo $row['email']; ?></a>
                                                </td>
                                                <td class="table__td text-dark-theme">Hong Kong, China</td>
                                                <td class="table__td text-light-theme text-nowrap"><a href="tel:<?php echo $row['phone_no']; ?>"><?php echo $row['phone_no']; ?></a>
                                                </td>
                                                <td class="table__td table__actions">
                                                    <div class="items-more">
                                                        <button class="items-more__button">
                                                            <svg class="icon-icon-more">
                                                                <use xlink:href="#icon-more"></use>
                                                            </svg>
                                                        </button>
                                                        <div class="dropdown-items dropdown-items--right">
                                                            <div class="dropdown-items__container">
                                                                <ul class="dropdown-items__list">
                                                                    <li class="dropdown-items__item"><a class="dropdown-items__link" href="order-details.html"><span class="dropdown-items__link-icon">
                                                                                <svg class="icon-icon-refresh">
                                                                                    <use xlink:href="#icon-refresh"></use>
                                                                                </svg></span>Update</a>
                                                                    </li>
                                                                    <li class="dropdown-items__item"><a class="dropdown-items__link"  href="./delete-exe/delete-branch.php?id=<?php echo ($row['id']) ?>"><span class="dropdown-items__link-icon">
                                                                                <svg class="icon-icon-trash">
                                                                                    <use xlink:href="#icon-trash"></use>
                                                                                </svg></span>Delete</a>
                                                                    </li>
                                                                </ul>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </td>
                                            </tr>
                                            <tr class="table__space">
                                                <td colspan="6"></td>
                                            </tr>
                                    <?php
                                        }
                                    }
                                    ?>
                                </tbody>
                            </table>
                        </div>
                    </div>
                    <div class="tab-pane fade show active" id="tab-grid">
                        <div class="contacts-grid">
                            <?php
                            $result = get_branch_list();
                            if (mysqli_num_rows($result) > 0) {
                                while ($row = mysqli_fetch_assoc($result)) {
                            ?>
                                    <div class="contact-card card">
                                        <div class="card__wrapper">
                                            <div class="card__container">
                                                <div class="card__body">
                                                    <div class="card__tools-more">
                                                        <button class="items-more__button">
                                                            <svg class="icon-icon-more">
                                                                <use xlink:href="#icon-more"></use>
                                                            </svg>
                                                        </button>
                                                        <div class="dropdown-items dropdown-items--right">
                                                            <div class="dropdown-items__container">
                                                                <ul class="dropdown-items__list">
                                                                    <li class="dropdown-items__item"><a class="dropdown-items__link"><span class="dropdown-items__link-icon">
                                                                                <svg class="icon-icon-refresh">
                                                                                    <use xlink:href="#icon-refresh"></use>
                                                                                </svg></span>Update</a>
                                                                    </li>
                                                                    <li class="dropdown-items__item"><a class="dropdown-items__link" href="./delete-exe/delete-branch.php?id=<?php echo ($row['id']) ?>"><span class="dropdown-items__link-icon">
                                                                                <svg class="icon-icon-trash">
                                                                                    <use xlink:href="#icon-trash"></use>
                                                                                </svg></span>Delete</a>
                                                                    </li>

                                                                </ul>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="contact-card__avatar">
                                                        <svg viewBox="0 0 252 272" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink">
                                                            <g filter="url(#filter0_dd)">
                                                                <path d="M55 199H197V221C197 221 153.752 224 126 224C98.248 224 55 221 55 221V199Z" fill="white"></path>
                                                            </g>
                                                            <g filter="url(#filter1_dd)">
                                                                <path d="M18.235 43.2287C19.2494 23.1848 35.1848 7.24941 55.2287 6.23501C76.8855 5.13899 104.551 4 126 4C147.449 4 175.114 5.13898 196.771 6.23501C216.815 7.24941 232.751 23.1848 233.765 43.2287C234.861 64.8855 236 92.5512 236 114C236 135.449 234.861 163.114 233.765 184.771C232.751 204.815 216.815 220.751 196.771 221.765C175.114 222.861 147.449 224 126 224C104.551 224 76.8855 222.861 55.2287 221.765C35.1848 220.751 19.2494 204.815 18.235 184.771C17.139 163.114 16 135.449 16 114C16 92.5512 17.139 64.8855 18.235 43.2287Z" fill="url(#imagePattern0)"></path>
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
                                                                <pattern id="imagePattern0" patternContentUnits="objectBoundingBox" width="1" height="1">
                                                                    <use xlink:href="#avatarImage0" transform="scale(0.00142857)"></use>
                                                                </pattern>
                                                                <image id="avatarImage0" width="700" height="700" xlink:href="img/content/humans-2/item-1.jpg"></image>
                                                            </defs>
                                                        </svg>
                                                    </div>
                                                    <h4 class="contact-card__title"><?php echo ($row['name']); ?></h4>
                                                </div>
                                                <div class="card__footer">
                                                    <div class="card__container">
                                                        <ul class="contact-card__address">
                                                            <li>
                                                                <div class="row row--xs justify-content-between">
                                                                    <div class="contact-card__address-left col-auto">
                                                                        <svg class="icon-icon-location">
                                                                            <use xlink:href="#icon-location"></use>
                                                                        </svg>Location:
                                                                    </div>
                                                                    <div class="col-auto text-light-theme"><?php echo ($row['address']); ?></div>
                                                                </div>
                                                            </li>
                                                            <li>
                                                                <div class="row row--xs justify-content-between">
                                                                    <div class="contact-card__address-left col-auto">
                                                                        <svg class="icon-icon-email">
                                                                            <use xlink:href="#icon-email"></use>
                                                                        </svg>Email:
                                                                    </div>
                                                                    <div class="col-auto text-light-theme"><a href="mailto:#"><?php echo ($row['email']); ?></a>
                                                                    </div>
                                                                </div>
                                                            </li>
                                                            <li>
                                                                <div class="row row--xs justify-content-between">
                                                                    <div class="contact-card__address-left col-auto">
                                                                        <svg class="icon-icon-phone">
                                                                            <use xlink:href="#icon-phone"></use>
                                                                        </svg>Phone:
                                                                    </div>
                                                                    <div class="col-auto text-light-theme"><a href="tel:#"><?php echo ($row['phone_no']); ?></a>
                                                                    </div>
                                                                </div>
                                                            </li>
                                                        </ul>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                            <?php
                                }
                            }
                            ?>
                        </div>
                    </div>
                </div>
            </div>
        </main>
    </div>
    <div class="modal modal--panel modal--sm modal--right" id="addContact">
        <div class="modal__overlay" data-dismiss="modal"></div>
        <div class="modal__wrap">
            <div class="modal__window scrollbar-thin" data-simplebar>
                <div class="modal__content">
                    <div class="modal__header">
                        <div class="modal__container">
                            <h2 class="modal__title">New Contact</h2>
                        </div>
                    </div>
                    <div class="modal__body">
                        <div class="modal__container">
                            <form method="POST" action="./execution/add-branch-exe.php">
                                <div class="row row--md">
                                    <div class="col-12 form-group form-group--lg">
                                        <label class="form-label form-label--sm">Branch Name</label>
                                        <div class="input-group">
                                            <input class="input" type="text" value="" name="branch_name" required>
                                        </div>
                                    </div>
                                    <div class="col-12 form-group form-group--lg">
                                        <label class="form-label form-label--sm">E-mail</label>
                                        <div class="input-group">
                                            <input class="input" type="email" value="example@mail.com" name="branch_email" required>
                                        </div>
                                    </div>
                                    <div class="col-12 form-group form-group--lg">
                                        <label class="form-label form-label--sm">Phone Number</label>
                                        <div class="input-group">
                                            <input class="input js-phone-number" type="text" name="branch_number" required>
                                        </div>
                                    </div>

                                    <div class="col-12 form-group form-group--lg">
                                        <label class="form-label form-label--sm">Address</label>
                                        <div class="input-group">
                                            <input class="input" type="text" value="" placeholder="Address" name="branch_address" required>
                                        </div>
                                    </div>
                                </div>
                        </div>
                    </div>
                    <div class="modal__footer">
                        <div class="modal__container">
                            <div class="modal__footer-buttons">
                                <div class="modal__footer-button">
                                    <button class="button button--primary button--block" type="submit" name="submit" value="submit"><span class="button__icon button__icon--left">
                                            <svg class="icon-icon-plus">
                                                <use xlink:href="#icon-plus"></use>
                                            </svg></span><span class="button__text">Add Branch</span>
                                    </button>
                                </div>
                                <div class="modal__footer-button">
                                    <button class="button button--secondary button--block" data-dismiss="modal"><span class="button__text">Cancel</span>
                                    </button>
                                </div>
                            </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <?php require_once("./footer.php"); ?>